<?php 
class Router{
private $routes=[];


/* add method: 
Description:to register method , path and specified handler. 
@param: String of method.
@param: String of path .
@param: an array of handler.
*/
public function add($method,$path ,$handler){
$this->routes[$method][$path]=$handler;

}

/* dispatch method: 
Description:find  the specified method and path ,
match them with the registered  routes ,
call the corresponding Controller method ,
and  echo 404 if no route is found .
*/
public function dispatch(){
  error_log("Method: " . $_SERVER['REQUEST_METHOD'] . " | URI: " . $_SERVER['REQUEST_URI']);
$method=$_SERVER['REQUEST_METHOD'];
$path=parse_url($_SERVER['REQUEST_URI'],PHP_URL_PATH );
$rootBath="/alzikrayat/Public";
if(strpos($path , $rootBath)===0){
$path=substr($path,strlen($rootBath));
}
if(empty($path)) $path='/';
 foreach($this->routes[$method]??[] as $routepath=>$handler){
    $pattern=preg_replace('/\{([a-zA-Z]+)\}/','([^/]+)',$routepath);
    $pattern='#^'. $pattern.'$#';

    if(preg_match($pattern,$path,$matches)){
      array_shift($matches);
      $controllerName=$handler[0];
      $methodName=$handler[1];
      require_once __DIR__.'/../controllers/'.$controllerName.'.php';
      $controller= new $controllerName();
      $controller->$methodName(...$matches);
      return;

    }
 }

 http_response_code(404);
 echo  '404 NOT FOUND';

}

}