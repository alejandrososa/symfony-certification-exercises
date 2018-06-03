<?php
/**
 * symfony-certification-exercises, Created by PhpStorm.
 * @author: Alejandro Sosa <alesjohnson@hotmail.com>
 * @copyright Copyright (c) 2018, 28/5/18 16:22
 */

class A {private $x = 1;}

// Código anterior a PHP
$getXCB = function() {return $this->x;};
$getX = $getXCB->bindTo(new A, 'A'); // cierre intermedi0
echo $getX();

echo PHP_EOL;

// Código de PHP 7+
$getX = function() {return $this->x;};
echo $getX->call(new A);