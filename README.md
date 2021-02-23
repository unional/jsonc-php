# jsonc-php

[![Latest Stable Version](https://poser.pugx.org/unional/jsonc/v)](//packagist.org/packages/unional/jsonc) [![Total Downloads](https://poser.pugx.org/unional/jsonc/downloads)](//packagist.org/packages/unional/jsonc) [![Latest Unstable Version](https://poser.pugx.org/unional/jsonc/v/unstable)](//packagist.org/packages/unional/jsonc) [![License](https://poser.pugx.org/unional/jsonc/license)](//packagist.org/packages/unional/jsonc)

PHP jsonc support.

## install

```sh
composer require unional/jsonc
```

## usage

```php
use Unional\Jsonc\JSONC;

print_r(JSONC::decode('{ /* comment */"a": 1 }'));
```

## Attribution

The solution in this package is using the implementation made by Alexander Shostak in [stackoverflow](https://stackoverflow.com/questions/8148797/a-json-parser-for-php-that-supports-comments/43439966?noredirect=1#comment117253234_43439966).
