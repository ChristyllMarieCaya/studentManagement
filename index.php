<?php
include 'vendor/autoload.php';

use Caya\StudentManagement\Model\StudentModel;

$student = new StudentModel;
$student -> id = 200211010;
$student -> fullname = "Chavez, James";
$student -> yearlevel = "First Year";
$student -> course = "BSIT";
$student -> section = "A";

$student-> displayInfo();

?>