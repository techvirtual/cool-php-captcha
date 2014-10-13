# Simple usage

```php
<?php

use CoolCaptcha\SimpleCaptcha;

$captcha = new SimpleCaptcha();

// sends headers and content to the browser
$text = $captcha->DisplayImage();

```
