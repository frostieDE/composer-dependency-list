<?php

namespace FrostieDE\ComposerDependencyList;

class Dependency {

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $url;

    /**
     * @var string
     */
    private $description;

    /**
     * @var string
     */
    private $version;

    /**
     * @var Author[]
     */
    private $authors = [ ];

    /**
     * @var string
     */
    private $licenseType;

    /**
     * @var string
     */
    private $licensePath;

    /**
     * @return string
     */
    public function getName() {
        return $this->name;
    }

    /**
     * @param string $name
     * @return Dependency
     */
    public function setName($name) {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string
     */
    public function getUrl() {
        return $this->url;
    }

    /**
     * @param string $url
     * @return Dependency
     */
    public function setUrl($url) {
        $this->url = $url;
        return $this;
    }

    /**
     * @return string
     */
    public function getDescription() {
        return $this->description;
    }

    /**
     * @param string $description
     * @return Dependency
     */
    public function setDescription($description) {
        $this->description = $description;
        return $this;
    }

    /**
     * @return string
     */
    public function getVersion() {
        return $this->version;
    }

    /**
     * @param string $version
     * @return Dependency
     */
    public function setVersion($version) {
        $this->version = $version;
        return $this;
    }

    /**
     * @return Author[]
     */
    public function getAuthors() {
        return $this->authors;
    }

    /**
     * @param Author[] $authors
     * @return Dependency
     */
    public function addAuthor(Author $author) {
        $this->authors[] = $author;
        return $this;
    }

    /**
     * @return string
     */
    public function getLicenseType() {
        return $this->licenseType;
    }

    /**
     * @param string $licenseType
     * @return Dependency
     */
    public function setLicenseType($licenseType) {
        $this->licenseType = $licenseType;
        return $this;
    }

    /**
     * @return string
     */
    public function getLicensePath() {
        return $this->licensePath;
    }

    /**
     * @param string $licensePath
     * @return Dependency
     */
    public function setLicensePath($licensePath) {
        $this->licensePath = $licensePath;
        return $this;
    }
}