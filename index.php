<?php
// Analyse de la demande HTTP
$url = $_SERVER['REQUEST_URI'];
$parts = explode('/', $url);
$controllerName = !empty($parts[2]) ? ucfirst($parts[2]) . 'Controller' : 'DefaultController';
$actionName = !empty($parts[3]) ? $parts[3] : 'index';
$actionName=explode('?',$actionName);
$trueActionName=$actionName[0];
// Chargement du contrôleur
$controllerFile = __DIR__ . '/src/contoller/' . $controllerName . '.php';
if (file_exists($controllerFile)) {
    require_once $controllerFile;
    $controller = new $controllerName();
 
    // Appel de l'action
    if (method_exists($controller, $trueActionName)) {
        $controller->$trueActionName();
    } else {
        // Gestion de l'erreur
        echo '404 NOT FOUND';
    }
} else {
    // Gestion de l'erreur
    if(isset($_COOKIE['loggede'])){
    require_once(__DIR__."/src/contoller/NavbarController.php");
    $controller= new NavbarController();
    $controller->index();
    }
    else{
        setcookie("logged");
    require_once(__DIR__."/src/contoller/DemoController.php");
    $controller= new DemoController();
    $controller->index();}
}
?>