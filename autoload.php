<?php
/**
 * Created by Anam Shah.
 * Date: 27-08-2018
 * Time: 18:23
 */

function my_autoloader($class) {
    include 'Pieces/' . $class . '.php';
}

spl_autoload_register('my_autoloader');