<?php
/**
 * Created by PhpStorm.
 * User: dungduong
 * Date: 11/21/18
 * Time: 17:17
 */
include_once('Interface/Resizeable.php');
include_once('Classes/Circle.php');
include_once('Classes/Cylinder.php');
include_once('Classes/Rectangle.php');
include_once('Classes/Square.php');

$circle = new Circle('Circle 01', 3);
$rectangle = new Rectangle('Rectangle 01', 3, 4);
$square = new Square('Square 01', 4, 4);

$shapes = [$circle, $rectangle, $square];
foreach ($shapes as $shape) {
    echo $shape->name . "'s area is " . $shape->calculateArea() . "<br>";
    $shape->resize(10);
    echo $shape->name . "'s new area is " . $shape->calculateArea() . "<br>";
}

