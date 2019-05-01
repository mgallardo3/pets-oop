<?php
/**
 * Created by PhpStorm.
 * User: homefolder
 * Date: 2019-05-01
 * Time: 13:12
 */

// Turn on error reporting
error_reporting(E_ALL);
ini_set('display_errors;', TRUE);

//Require the autoload file
require_once('vendor/autoload.php');

//Create an instance of the Base class
$f3 = Base::instance();

$f3->route('GET /', function()
{
    //Display a view
    $view = new Template();
    echo $view->render('views/my-pets.html');

});

//Run fat free
$f3->run();