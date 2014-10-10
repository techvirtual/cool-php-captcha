<?php

/**
 * @author  José Nascimento <joseaugustodearaujonascimento@gmail.com>
 * @license GPLv3, see LICENSE.txt
 * @package CoolCaptcha\Tests
 * @version 0.1
 */
namespace CoolCaptcha\Tests;

use CoolCaptcha\SimpleCaptcha;

/**
 *
 * @author José Nascimento <joseaugustodearaujonascimento@gmail.com>
 */
class SimpleCaptchaTest extends \PHPUnit_Framework_TestCase
{
    /**
     *
     * @var SimpleCaptcha
     */
    private $captcha;
    /* (non-PHPdoc)
     * @see PHPUnit_Framework_TestCase::setUp()
     */
    public function setUp()
    {
        $this->captcha = new SimpleCaptcha();
    }
    /**
     */
    public function testTextGeneration()
    {
        $text = $this->captcha->CreateImage();

        $this->assertNotEmpty($text);
    }
}
