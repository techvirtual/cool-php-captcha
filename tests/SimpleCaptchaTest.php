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
     * @var SimpleCaptchaMock
     */
    private $captcha;
    /**
     *
     * @var \Mockery\Expectation
     */
    private $dispose;
    /* (non-PHPdoc)
     * @see PHPUnit_Framework_TestCase::setUp()
     */
    public function setUp()
    {
        $mock = \Mockery::mock();

        $this->captcha = new SimpleCaptchaMock(
            $mock);

        $this->dispose = $this->captcha->mock->shouldReceive(
            'Dispose');
    }
    /* (non-PHPdoc)
     * @see PHPUnit_Framework_TestCase::tearDown()
     */
    protected function tearDown()
    {
        \Mockery::close();
    }
    /**
     */
    public function testTextGeneration()
    {
        $text = $this->captcha->CreateImage();

        $this->assertNotEmpty($text);
    }
    /**
     */
    public function testGarbageCollection()
    {
        $this->dispose->with(false)->once();

        $this->captcha = null;
    }
}

/**
 *
 * @author José Nascimento <joseaugustodearaujonascimento@gmail.com>
 */
class SimpleCaptchaMock extends SimpleCaptcha
{
    /**
     *
     * @var \Mockery\MockInterface
     */
    public $mock;
    /**
     *
     * @param \PHPUnit_Framework_TestCase $test
     */
    public function __construct(\Mockery\MockInterface $mock)
    {
        $this->mock = $mock;
    }
    /* (non-PHPdoc)
     * @see \CoolCaptcha\SimpleCaptcha::Dispose()
     */
    protected function Dispose($disposing = true)
    {
        // printf('Disposing (%d)', $disposing);
        parent::Dispose($disposing);

        $this->mock->Dispose($disposing);
    }
}
