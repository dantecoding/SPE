<?php
require_once("autoload");
/**
 * Created by JetBrains PhpStorm.
 * User: dante
 * Date: 11.12.12
 * Time: 19:04
 * To change this template use File | Settings | File Templates.
 */
class Declaration
{
    private $joblestList;
    private $name;
    private $address;
    private $workingStage;
    private $job;
    private $dateOut;
    private $working;

    public function setName($name)
    {
        $this->name = $name;
    }

    public function setAddress($address)
    {
        $addSpec = new AddressSpecification();
        if ($addSpec->checkAddress($address)) {
            $this->address = $address;
            return true;
        } else {
            return false;
        }
    }

    public function setInfo($job, $dateOut, $working, $stage)
    {
        $this->job = $job;
        $this->dateOut = $dateOut;
        $this->working = $working;
        $this->workingStage = $stage;
    }
}
