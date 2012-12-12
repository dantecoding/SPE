<?php
require_once("autoload.php");

/**
 * Created by JetBrains PhpStorm.
 * User: dante
 * Date: 11.12.12
 * Time: 23:52
 * To change this template use File | Settings | File Templates.
 */
$a = new Register();
if ($a->setName("jh6546"))
    echo "yes";
else
    echo "no";
$a->setInfo("sdf", "12-10-2012", "24", "54");

echo "<br>" . $a->getDec()->getJob();
echo "<br>" . $a->getDec()->getName();
echo "<br>";
$b = new Register();
if ($b->setName("jhg"))
    echo "yes";
else
    echo "no";
$b->setInfo("jh", "12-10-2012", "24", "54");

echo "<br>" . $b->getDec()->getJob();
echo "<br>" . $b->getDec()->getName();
