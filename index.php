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


$f3->route('GET /', function($f3) {
    //save variables
    $f3->set('username', 'jshmo');
    $f3->set('password', sha1('Password01'));
    $f3->set('title', 'Working with Templates');
    $f3->set('temp', 69);
    $f3->set('radius', 10);

    //Set array
    $f3->set('fruits', array('apple', 'orange ', ' banana'));
    $f3->set('links', array('Google' => 'http://www.google.com',
        'Green River' => 'http://www.greenriver.edu'));

    //load a template
    $template = new Template();
    echo $template->render('views/info.html');

    //alternate syntax
    //echo Template::instance()->render('views/info.html');
});

/*
//Define a default route
$f3->route('GET /', function() {
    //echo '<h1>My Fav Foods</h1>';

    $view = new View();
    echo $view->render('views/home.html');
});

//Define a breakfast route
$f3->route('GET /breakfast', function() {
    $view = new View();
    echo $view->render('views/breakfast.html');
});

//Define a lunch route
$f3->route('GET /lunch', function() {
    $view = new View();
    echo $view->render('views/lunch.html');
});

//Define a pancake route
$f3->route('GET /breakfast/pancakes', function() {
    $view = new View();
    echo $view->render('views/pancakes.html');
});

//Define a dinner route
$f3->route('GET /dinner', function() {
    $view = new View();
    echo $view->render('views/dinner.html');
});

//Define a burrito route
$f3->route('GET /dinner/burrito', function() {
    $view = new View();
    echo $view->render('views/burrito.html');
});

//Define a pizza route
$f3->route('GET /dinner/pizza', function() {
    $view = new View();
    echo $view->render('views/pizza.html');
});

//Define a chicken route
$f3->route('GET /dinner/chicken', function() {
    $view = new View();
    echo $view->render('views/chicken.html');
});

//Define a route with a parameter
$f3->route('GET /@food', function($f3, $params) {
    print_r($params);
    echo "<h3>I like " . $params['food'] . "</h3>";
});

//Define a route with multiple parameter
$f3->route('GET /@meal/@food', function($f3, $params) {
    print_r($params);

    $validMeals = ['breakfast', 'lunch', 'dinner'];
    $meal = $params['meal'];
    //Check validity
    if(!in_array($params['meal'], $validMeals)) {
        echo "<h3>Sorry, we don't serve {$params['meal']}</h3>";
    } else {
        switch($meal) {
            case 'breakfast':
                $time = " in the morning"; break;
            case 'lunch':
                $time = " at noon"; break;
            case 'dinner':
                $time = " in the evening";
        }

        echo "<h3>I like " . $params['food'] .
            $time . "</h3>";
    }
});

//Define a route to display order form
$f3->route('GET /order', function() {
    $view = new View();
    echo $view->render('views/form1.html');
});

//Define a route to display order form
$f3->route('POST /order-process', function($f3) {
    //$view = new View();
    print_r($_POST);

    $food = $_POST['food'];
    echo "You ordered $food";

    if($food == 'pizza') {
        //Reroute to pizza page
        $f3->reroute('pizza');
    }
});

//Define a route to pie
$f3->route('GET /dessert/@param', function($f3, $params) {
    $param = $params['param'];
    if($param == 'pie') {
        echo "<h3>I like 3.14159 for dessert</h3>";
        echo "<img src='../images/pie.jpg' alt='Pie Image'>";
    } else {
        $f3->error(404);
    }
});
*/
//Run fat-free
$f3->run();
