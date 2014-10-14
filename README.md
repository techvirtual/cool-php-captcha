# Simple usage

[![Build Status](https://travis-ci.org/techvirtual/cool-php-captcha.svg?branch=master)](https://travis-ci.org/techvirtual/cool-php-captcha)

```php

use CoolCaptcha\SimpleCaptcha;

$captcha = new SimpleCaptcha();

// sends headers and content to the browser
$text = $captcha->DisplayImage();

```
