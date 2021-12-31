<?php

namespace FrostieDE\ComposerDependencyList;

class Author {

    private ?string $name;
    private ?string $email;

    public function getName(): ?string {
        return $this->name;
    }

    public function setName(?string $name): Author {
        $this->name = $name;
        return $this;
    }

    public function getEmail(): ?string {
        return $this->email;
    }

    public function setEmail(?string $email): Author {
        $this->email = $email;
        return $this;
    }
}