<?php

use App\Controllers\CategoryController;
use App\Controllers\HomeController;
use App\Controllers\LoginController;
use App\Controllers\ProductController;
use Phroute\Phroute\RouteCollector;


$url = isset($_GET['url']) ? $_GET['url'] : "/";

$router = new RouteCollector();
#############-filter-###########
$router->filter('auth', function(){
    if(!isset($_SESSION['AUTH']) || empty($_SESSION['AUTH'])){
        header('loaction: ' .BASE_URL. 'login');
        die;
    }
});


##############-endfilter-#############
$router->get('/', [HomeController::class, 'index']);
$router->get('danh-muc', [CategoryController::class, 'index']);
$router->group(['before'=>'auth'], function($router){
    $router->get('danh-muc/add', [CategoryController::class, 'addForm']);
    $router->post('danh-muc/add', [CategoryController::class, 'saveAdd']);
    $router->get('danh-muc/edit/{id}', [CategoryController::class, 'editForm']);
    $router->post('danh-muc/edit/{id}', [CategoryController::class, 'saveEdit']);
    $router->get('demo-upload', [ProductController::class, 'uploadForm']);
    $router->post('demo-upload', [ProductController::class, 'saveImage']);
    $router->get('san-pham/add', [ProductController::class, 'addForm']);
});
$router->get('login', [LoginController::class, 'loginForm']);
$router->post('login', [LoginController::class, 'postLogin']);





# NB. You can cache the return value from $router->getData() so you don't have to create the routes each request - massive speed gains
$dispatcher = new Phroute\Phroute\Dispatcher($router->getData());

$response = $dispatcher->dispatch($_SERVER['REQUEST_METHOD'], $url);
    
// Print out the value returned from the dispatched function
echo $response;
?>