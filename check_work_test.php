<?php
require_once 'autoload.php';
/**
 * Created by JetBrains PhpStorm.
 * User: dante
 * Date: 14.12.12
 * Time: 23:13
 * To change this template use File | Settings | File Templates.
 */
class CheckWorkTest extends PHPUnit_Framework_TestCase
{
    public function CheckWorkTest()
    {
        $regWork = new RegisteredWork();
        $this->assertTrue(true,$regWork->);
    }
}
