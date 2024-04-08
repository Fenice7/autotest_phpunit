<?php

require 'vendor/autoload.php';

use Webmozart\Assert\Assert;

include 'src\StringUtils.php';

Assert::eq(capitalize('hello'), 'Hello');
Assert::eq(capitalize(''), '');

echo 'Все тесты пройдены';