<?php

/**
 * Phplite framework
 *
 * @author Ayman Elmalah aymanelmalah77@gmail.com
 */

/*
|---------------------------------------------------
| Register the autoloader
|---------------------------------------------------
|
| Load the autoloader that will generated class that will be used
*/
require __DIR__.'/../vendor/autoload.php';

/*
|---------------------------------------------------
| Bootstrap the application
|---------------------------------------------------
|
| Bootstrap the application and do action from framework
*/
require __DIR__.'/../bootstrap/app.php';

/*
|---------------------------------------------------
| Run the application
|---------------------------------------------------
|
| Handle the request and send response
*/
Application::run();


