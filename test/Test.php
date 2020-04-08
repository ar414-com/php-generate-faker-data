<?php

require_once '../vendor/autoload.php';

use Ar414\GenerateFakeData\Course;

$data = Course::generate();
var_dump($data);

