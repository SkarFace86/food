<?php
/**
 * Created by PhpStorm.
 * User: Brandon Skar
 * Date: 1/7/2019
 * Time: 11:20 AM
 */
//Turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

//Require fat-free
require_once('vendor/autoload.php');

//Create an instance of the Base class
$f3 = Base::instance();

//Turn of fat free error reporting
$f3->set('DEBUG', 3);

//Define a default route
$f3->route('GET /', function() {
    //echo '<h1>My Fav Foods</h1>';

    $view = new View();
    echo $view->render('views/home.html');
});

//Run fat-free
$f3->run();
