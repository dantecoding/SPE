<?php

require_once 'autoload.php';
/**
 * Created by JetBrains PhpStorm.
 * User: dante
 * Date: 15.12.12
 * Time: 1:34
 * To change this template use File | Settings | File Templates.
 */
class ClaimVacancyTest extends PHPUnit_Framework_TestCase
{
    /**
     * @dataProvider providerSetWork
     */
    public function testSetWorkTrue($work, $post)
    {
        $claim = new SPE\ClaimVacancy();
        $regWork = new SPE\RegisteredWork();
        $this->assertTrue($claim->setWork($regWork, $work, $post));
        $this->assertEquals($post, $claim->getPost());
    }

    public function providerSetWork()
    {
        return [
            ['sdf', 'prog'], //Test value is true
            ['jh', 'buh'],
            ['123', '45'],
        ];
    }

    /**
     * @dataProvider providerSetWorkFalse
     */
    public function testSetWorkFalse($work, $post)
    {
        $claim = new SPE\ClaimVacancy();
        $regWork = new SPE\RegisteredWork();
        $this->assertFalse($claim->setWork($regWork, $work, $post));
    }

    public function providerSetWorkFalse()
    {
        return [
            [15, 'sdf'], // Test integer value
            [15.6, 'dfggd'], //Test float value
            ['', ''], // Test empty value
        ];
    }

    /**
     * @param $info
     * @dataProvider providerSetInfo
     */
    public function testSetInfo($info)
    {
        $claim = new SPE\ClaimVacancy();
        $claim->setInfo($info);
        $this->assertEquals($info, $claim->getInfo());
    }

    public function providerSetInfo()
    {
        return [
            ['one'],
            ['two'],
            ['three'],
        ];
    }

    /**
     * @param $address
     * @dataProvider providerAddress
     */
    public function testSetAddress($address)
    {
        $claim = new SPE\ClaimVacancy();
        $claim->setAddress($address);
        $this->assertEquals($address, $claim->getAddress());
    }

    public function providerAddress()
    {
        return [
            ['Маршала Говорова'],
            ['Дерибасовкая'],
            ['Шевченко'],
        ];
    }
}
