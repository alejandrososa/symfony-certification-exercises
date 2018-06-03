<?php
/**
 * symfony-certification-exercises, Created by PhpStorm.
 * @author: Alejandro Sosa <alesjohnson@hotmail.com>
 * @copyright Copyright (c) 2018, 28/5/18 16:17
 */

// Números enteros
echo 1 <=> 1; // 0
echo PHP_EOL;
echo 1 <=> 2; // -1
echo PHP_EOL;
echo 2 <=> 1; // 1
echo PHP_EOL . PHP_EOL;

// Numeros decimales
echo 1.5 <=> 1.5; // 0
echo PHP_EOL;
echo 1.5 <=> 2.5; // -1
echo PHP_EOL;
echo 2.5 <=> 1.5; // 1
echo PHP_EOL . PHP_EOL;

// Cadenas de caracteres
echo "a" <=> "a"; // 0
echo PHP_EOL;
echo "a" <=> "b"; // -1
echo PHP_EOL;
echo "b" <=> "a"; // 1