<?php

/***
 * FUNCTION : to receive input from the frontend 
 * ($_REQUEST, $_POST and $_GET)
 * 
 *
 */
 //get the uri
 $uri = $_SERVER['REQUEST_URI'];

 //get the method
$method = $_SERVER['REQUEST_METHOD'];

 //execute the correct function

require('/pica/router.php');

 $executed_path = $route_array[$uri];

 echo $executed_path;
