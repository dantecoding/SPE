<?php
require_once("autoload.php");

/**
 * Created by JetBrains PhpStorm.
 * User: dante
 * Date: 11.12.12
 * Time: 19:54
 * To change this template use File | Settings | File Templates.
 */
class ClaimVacancy
{
    private $address;
    private $work;
    private $post;
    private $info;

    public function setAddress($address)
    {
        $this->address = $address;
    }

    public function setWork(RegisteredWork $regWork,$work, $post)
    {
        if ($regWork->checkWork($work))
        {
            $this->work = $work;
            $this->post = $post;
            return true;
        }
        else
            return false;
    }

    public function setInfo($info)
    {
        $this->info = $info;
    }

    public function getPost()
    {
        return $this->post;
    }

    public function getWork()
    {
        return $this->work;
    }

    public function getAddress()
    {
        return $this->address;
    }

    public function getInfo()
    {
        return $this->info;
    }
}
