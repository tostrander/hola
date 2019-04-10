<?php
/**
 * Another test project
 * Tina Ostrander
 * Date: 4/10/2019
 * Time: 1:11 PM
 */

//Turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

//Require autoload file
require_once('vendor/autoload.php');

//Instantiate Fat-Free
$f3 = Base::instance();

//Turn on Fat-Free error reporting
$f3->set('DEBUG', 3);

//Define a default route
$f3->route('GET /', function() {

    //Display a view
    $view = new Template();
    echo $view->render('views/home2.html');
});

//Run Fat-Free
$f3->run();