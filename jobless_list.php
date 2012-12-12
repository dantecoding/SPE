<?php
require_once("autoload.php");

/**
 * Created by JetBrains PhpStorm.
 * User: dante
 * Date: 11.12.12
 * Time: 19:32
 * To change this template use File | Settings | File Templates.
 */
class JoblessList
{
    private $joblessList = array();

    public function checkName($name)
    {
        $this->joblessList = mysql_query("SELECT name FROM jobless");

        while ($row = mysql_fetch_assoc($this->joblessList)) {
            if ($row['name'] == $name) {
                return true;
            }
        }
    }

    public function checkInfo($job, $dateOut, $working, $workingStage)
    {
    }

    public function saveDeclaration(Declaration $declaration)
    {
        echo $declaration->getAddress() + $declaration->getName() + $declaration->getWork();
    }
}
