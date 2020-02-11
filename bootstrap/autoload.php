<?php

use Illuminate\Database\Capsule\Manager;
use Laminas\Diactoros\ServerRequestFactory;
use Laminas\HttpHandlerRunner\Emitter\SapiEmitter;
use League\Container\Container;
use League\Plates\Engine;
use League\Plates\Extension\Asset;
use League\Route\Router;
use League\Route\Strategy\ApplicationStrategy;
use UserDirectory\Http\Controllers\UserController;

require_once dirname(__DIR__).'/vendor/autoload.php';

$container= new Container();
$container->share(Engine::class,function (){
    return new Engine(dirname(__DIR__).'/path/to/templates');
});
$container->share(UserController::class)->addArgument(Engine::class);

$capsule = new Manager();
$capsule->addConnection([
    'driver' => 'mysql',
    'host' => getenv('DB_HOST'),
    'port' => getenv('DB_PORT'),
    'database' => getenv('DB_DATABASE'),
    'username' => getenv('DB_USERNAME'),
    'password' => getenv('DB_PASSWORD'),
    'charset' => 'utf8',
    'collation' => 'utf8_general_ci',
    'prefix' => '',
]);
$capsule->setAsGlobal();
$capsule->bootEloquent();

$strategy= new ApplicationStrategy();
$strategy->setContainer($container);

$router= new Router();
$router->setStrategy($strategy);
$router->get('/', [UserController::class, 'login']);
$router->get('/sign-up',[UserController::class,'signUp']);
$router->post('/sign-up',[UserController::class,'createUser']);
$router->post('/login',[UserController::class,'validateUser']);
$router->post('/search',[UserController::class,'search']);
$router->get('/search', [UserController::class, 'login']);


$request= ServerRequestFactory::fromGlobals($_SERVER, $_GET, $_POST, $_COOKIE, $_FILES);
$response= $router->dispatch($request);

(new SapiEmitter())->emit($response);