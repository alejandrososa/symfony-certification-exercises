<?php
/**
 * symfony-certification-exercises, Created by PhpStorm.
 * @author: Alejandro Sosa <alesjohnson@hotmail.com>
 * @copyright Copyright (c) 2018, 28/5/18 16:16
 */

// Obntener el valor de $_GET['usuario'] y devolver 'nadie'
// si no existe.
$nombre_usuario = $_GET['usuario'] ?? 'nadie';

print_r($nombre_usuario);

// Esto equivale a:
$nombre_usuario = isset($_GET['usuario']) ? $_GET['usuario'] : 'nadie';

// La fusión se puede encadenar: esto devolverá el primer
// valor definido de $_GET['usuario'], $_POST['usuario'],
// y 'nadie'.
$nombre_usuario = $_GET['usuario'] ?? $_POST['usuario'] ?? 'nadie';