<?php

namespace FrostieDE\ComposerDependencyList;

class Dependency {

    private string $name;
    private ?string $url = null;
    private ?string $description = null;
    private string $version;

    /**
     * @var Author[]
     */
    private array $authors = [ ];
    private ?string $licenseType = null;
    private ?string $licensePath = null;

    public function getName(): string {
        return $this->name;
    }

    public function setName(string $name): Dependency {
        $this->name = $name;
        return $this;
    }

    public function getUrl(): ?string {
        return $this->url;
    }

    public function setUrl(?string $url): Dependency {
        $this->url = $url;
        return $this;
    }

    public function getDescription(): ?string {
        return $this->description;
    }

    public function setDescription(?string $description): Dependency {
        $this->description = $description;
        return $this;
    }

    public function getVersion(): string {
        return $this->version;
    }

    public function setVersion(string $version): Dependency {
        $this->version = $version;
        return $this;
    }

    /**
     * @return Author[]
     */
    public function getAuthors(): array {
        return $this->authors;
    }

    public function addAuthor(Author $author): Dependency {
        $this->authors[] = $author;
        return $this;
    }

    public function getLicenseType(): ?string {
        return $this->licenseType;
    }

    public function setLicenseType(?string $licenseType): Dependency {
        $this->licenseType = $licenseType;
        return $this;
    }

    public function getLicensePath(): ?string {
        return $this->licensePath;
    }

    public function setLicensePath(?string $licensePath): Dependency {
        $this->licensePath = $licensePath;
        return $this;
    }
}