<?php
require_once "autoload.php";

/**
 * Created by JetBrains PhpStorm.
 * User: dante
 * Date: 11.12.12
 * Time: 23:52
 * To change this template use File | Settings | File Templates.
 */
use SPE\Register;
use SPE\RegisteredWork;


$b = new Register();
echo "В списке: ";
if ($b->setName("7891"))
    echo "yes";
else {
    echo "no";
    echo "\nИмя: " . $b->getDec()->getName() . "\n";
    //echo "Ded: ".$b->saveDeclaration()."\n";
}
//if ($b->setInfo("sdf", "12-10-2012", "24", "54")){
//    echo "<br>Работа: " . $b->getDec()->getJob();
//}
//$b->saveDeclaration();
$c = new RegisteredWork();
echo "Работа в списке: ";
if ($c->checkWork("7841")) {
    echo "yes";
} else {
    echo "no";
}