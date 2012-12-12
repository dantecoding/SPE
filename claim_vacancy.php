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

    public function setWork($work, $post)
    {
        $this->work = $work;
        $this->post = $post;
    }

    public function setInfo($info)
    {
        $this->info = $info;
    }

}
