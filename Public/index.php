<?php
session_start();
 require_once __DIR__ . '/../config/Database.php';
require_once __DIR__ . '/../core/Model.php';
require_once __DIR__ . '/../core/Controller.php';
require_once __DIR__ . '/../core/Router.php';
require_once __DIR__ . '/../controllers/AuthController.php';
require_once __DIR__ . '/../controllers/PhotoController.php';

require_once __DIR__ . '/../models/User.php';
require_once __DIR__ . '/../models/Photo.php';
require_once __DIR__ ."/../models/Comment.php";

$router = new Router();
$router->add('GET', '/login', ['AuthController', 'login']);
$router->add('GET', '/photos/gallery', ['PhotoController', 'gallery']);
$router->add('GET', '/photo/{id}', ['PhotoController', 'viewDetails']);
$router->add('POST', '/loginsave', ['AuthController', 'loginsave']);
$router->add('POST', '/registerSave', ['AuthController', 'registerSave']);
$router->add('GET', '/register', ['AuthController', 'register']);
$router->add('GET', '/upload', ['PhotoController', 'upload']);
$router->add('POST', '/store', ['PhotoController', 'store']);
$router->add('POST', '/deleteId/{id}', ['PhotoController', 'deleteId']);
$router->add('GET', '/home', ['AuthController', 'homePage']);
$router->add('POST', '/saveComment/{id}', ['PhotoController', 'saveComment']);
$router->add('GET', '/logout', ['AuthController', 'logout']);



$router->dispatch();
