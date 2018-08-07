# Composer Dependency List

A small library which parses your composer.lock file and gets you a list of all your dependencies. This can be
useful to list all your project dependencies. 

# Usage

```php
$resolver = new ComposerDependenciesResolver('path/to/your/composer.lock');

/** @var Dependency[] $rependencies */
$dependencies = $resolver->getDependencies();
```

See the Dependency class for futher reference.

# Contribution

Feel free to contribute

# Integration

There is a [Symfony bundle](https://github.com/frostieDE/composer-dependency-list-bundle) :wink:

# Contribution

Feel free to contribute :-)

# License

MIT