<?php

namespace SPE;

require_once 'autoload.php';
/**
 * Created by JetBrains PhpStorm.
 * User: dante
 * Date: 11.12.12
 * Time: 19:04
 * To change this template use File | Settings | File Templates.
 */
class declaration
{
    private $joblestList;
    private $name;
    private $address;
    private $workingStage;
    private $job;
    private $dateOut;
    private $working;

    public function setName(JoblessList $jobless, $name)
    {
        if ($jobless->checkName($name)) {
            return false;
        } else {
            $this->name = $name;
        }

        return true;
    }

    public function setAddress($address, AddressSpecification $addSpec)
    {
        if ($addSpec->checkAddress($address)) {
            $this->address = $address;

            return true;
        } else {
            return false;
        }
    }

    public function setInfo(RegisteredWork $regWork, $job, $dateOut, $working, $stage)
    {
        if ($regWork->checkWork($job)) {
            $this->job = $job;
            $this->dateOut = $dateOut;
            $this->working = $working;
            $this->workingStage = $stage;

            return true;
        } else {
            return false;
        }
    }

    public function getName()
    {
        return $this->name;
    }

    public function getAddress()
    {
        return $this->address;
    }

    public function getJob()
    {
        return $this->job;
    }

    public function workingStage()
    {
        return $this->workingStage;
    }

    public function getWork()
    {
        return $this->working;
    }

    public function getDateOut()
    {
        return $this->dateOut;
    }
}
