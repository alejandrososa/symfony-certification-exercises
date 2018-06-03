<?php
/**
 * symfony-certification-exercises, Created by PhpStorm.
 * @author: Alejandro Sosa <alesjohnson@hotmail.com>
 * @copyright Copyright (c) 2018, 28/5/18 16:13
 */

function sumaDeEnteros(int ...$enteros)
{
    return array_sum($enteros);
}

var_dump(sumaDeEnteros(2, '3', 4.1));