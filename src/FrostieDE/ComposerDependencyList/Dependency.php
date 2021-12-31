<?php

namespace FrostieDE\ComposerDependencyList;

class Dependency {

    private string $name;
    private ?string $url;
    private ?string $description;
    private string $version;

    /**
     * @var Author[]
     */
    private array $authors = [ ];
    private ?string $licenseType;
    private ?string $licensePath;

    public function getName(): string {
        return $this->name;
    }

    public function setName(string $name): static {
        $this->name = $name;
        return $this;
    }

    public function getUrl(): ?string {
        return $this->url;
    }

    public function setUrl(?string $url): static {
        $this->url = $url;
        return $this;
    }

    public function getDescription(): ?string {
        return $this->description;
    }

    public function setDescription(?string $description): static {
        $this->description = $description;
        return $this;
    }

    public function getVersion(): string {
        return $this->version;
    }

    public function setVersion(string $version): static {
        $this->version = $version;
        return $this;
    }

    /**
     * @return Author[]
     */
    public function getAuthors(): array {
        return $this->authors;
    }

    public function addAuthor(Author $author): static {
        $this->authors[] = $author;
        return $this;
    }

    public function getLicenseType(): ?string {
        return $this->licenseType;
    }

    public function setLicenseType(?string $licenseType): static {
        $this->licenseType = $licenseType;
        return $this;
    }

    public function getLicensePath(): ?string {
        return $this->licensePath;
    }

    public function setLicensePath(?string $licensePath): static {
        $this->licensePath = $licensePath;
        return $this;
    }
}