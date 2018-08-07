<?php

namespace FrostieDE\ComposerDependencyList;

interface ComposerDependenciesResolverInterface {

    /**
     * @return Dependency[]
     */
    public function getDependencies();
}