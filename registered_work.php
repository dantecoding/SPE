<?php
require_once("autoload.php");
/**
 * Created by JetBrains PhpStorm.
 * User: dante
 * Date: 11.12.12
 * Time: 19:38
 * To change this template use File | Settings | File Templates.
 */
class RegisteredWork
{
    private $registeredWork = array();


    public function checkWork($work)
    {
        $ret = false;
        $this->registeredWork = mysql_query("SELECT work FROM reg_work");
        while ($result = mysql_fetch_assoc($this->registeredWork)) {
            if ($result['work'] == $work)
                $ret = true;
        }
        return $ret;
    }
}
