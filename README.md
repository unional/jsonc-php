# jsonc-php

PHP jsonc support.

## install

```sh
composer require unional/jsonc
```

## usage

```php
use unional\jsonc;

echo JSONC::decode('{ /* comment */"a": 1 }');
```

## Attribution

The solution in this package is using the implementation made by Alexander Shostak in [stackoverflow](https://stackoverflow.com/questions/8148797/a-json-parser-for-php-that-supports-comments/43439966?noredirect=1#comment117253234_43439966).
