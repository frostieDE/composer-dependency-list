<?php

namespace FrostieDE\ComposerDependencyList;

class ComposerDependenciesResolver implements ComposerDependenciesResolverInterface {

    private $lockFile;

    private static $possibleLicenseFilesRegExp = '~^license*|^copying~i';

    /**
     * @param string $lockFile Path to the composer.lock file
     */
    public function __construct($lockFile) {
        $this->lockFile = $lockFile;
    }

    /**
     * Returns the vendor directory
     *
     * @return string
     */
    public function getVendorPath() {
        return sprintf('%s/vendor', dirname($this->lockFile));
    }

    /**
     * @return array|Dependency[]
     * @throws \Exception
     */
    public function getDependencies() {
        if(!file_exists($this->lockFile)) {
            throw new \Exception('composer.lock file does not exist');
        }

        if(!is_readable($this->lockFile)) {
            throw new \Exception('composer.lock file is not readable');
        }

        $json = file_get_contents($this->lockFile);

        if($json === false) {
            throw new \Exception('Cannot read composer.lock file');
        }

        $composerLockFile = json_decode($json);
        $jsonError = json_last_error();

        if($jsonError !== JSON_ERROR_NONE) {
            throw new \Exception('Cannot parse composer.lock file', $jsonError);
        }

        /** @var Dependency[] $dependencies */
        $dependencies = [ ];

        foreach($composerLockFile->packages as $package) {
            $dependency = (new Dependency())
                ->setName($package->name)
                ->setVersion($package->version);

            if(isset($package->authors)) {
                foreach ($package->authors as $a) {
                    $author = new Author();

                    if (isset($a->name)) {
                        $author->setName($a->name);
                    }

                    if (isset($a->email)) {
                        $author->setEmail($a->email);
                    }

                    $dependency->addAuthor($author);
                }
            }

            if(isset($package->license) && count($package->license) > 0) {
                $dependency->setLicenseType($package->license[0]);
            }

            if(isset($package->homepage)) {
                $dependency->setUrl($package->homepage);
            } else {
                // TODO: maybe put source->url in there?
            }

            // License file
            $packageDirectory = sprintf('%s/%s', $this->getVendorPath(), $package->name);

            if(is_dir($packageDirectory)) {
                $packageFiles = scandir($packageDirectory);

                foreach ($packageFiles as $file) {
                    $path = sprintf('%s/%s', $packageDirectory, $file);
                    if (is_file($path) && preg_match(static::$possibleLicenseFilesRegExp, $file)) {
                        $dependency->setLicensePath($path);
                    }
                }
            }

            $dependencies[] = $dependency;
        }

        return $dependencies;
    }
}
