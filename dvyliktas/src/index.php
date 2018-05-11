<?php

//require_once ('student.php');
require "../vendor/autoload.php";

use student\Students;

$student = new Students("1223445","ruriror","oruorueo");

$student->getStudent();
echo "mano naujas studentas ".$student->getStudent() . "<br>";

use modules\Modules;

$module= new Modules('3837574','dancing');
$module->printNewModel();





