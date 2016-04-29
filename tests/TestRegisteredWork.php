<?php

require_once 'autoload.php';
/**
 * Created by JetBrains PhpStorm.
 * User: dante
 * Date: 14.12.12
 * Time: 23:13
 * To change this template use File | Settings | File Templates.
 */
class RegisteredWorkTest extends PHPUnit_Framework_TestCase
{
    /**
     *  @dataProvider provider
     */
    public function testCheckWork($a, $b)
    {
        $my = new SPE\RegisteredWork();
        $this->assertTrue($my->checkWork($a));
        $this->assertFalse($my->checkWork($b));
    }

    public function provider()
    {
        return [
            ['123', ''],
            ['jh', '4'],
            ['sdf', 45],
        ];
    }
}
