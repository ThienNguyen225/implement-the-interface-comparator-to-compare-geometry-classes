<?php
include "ComparableCircle.php";

$circleOne = new Circle("circleOne", 6);
$circleTwo = new Circle("circleTwo", 4);
$circleComparator = new ComparableCircle($circleOne, $circleTwo);
var_dump($circleComparator->compareTo($circleOne, $circleTwo));