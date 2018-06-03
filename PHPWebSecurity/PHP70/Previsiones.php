<?php
/**
 * symfony-certification-exercises, Created by PhpStorm.
 * @author: Alejandro Sosa <alesjohnson@hotmail.com>
 * @copyright Copyright (c) 2018, 28/5/18 16:32
 */

ini_set('assert.exception', 1);

class ErrorPersonalizado extends AssertionError {}

$result = assert(false, new ErrorPersonalizado('Un mensaje de error'));