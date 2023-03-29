<?php
// Analyse de la demande HTTP
$url = $_SERVER['REQUEST_URI'];
$parts = explode('/', $url);
$controllerName = !empty($parts[2]) ? ucfirst($parts[2]) . 'Controller' : 'DefaultController';
$actionName = !empty($parts[3]) ? $parts[3] : 'index';
$actionName=explode('?',$actionName);
$trueActionName=$actionName[0];
session_start();
// Chargement du contrôleur
$controllerFile = __DIR__ . '/src/contoller/' . $controllerName . '.php';

if(isset($_SESSION['user_type'])){

if (file_exists($controllerFile)) {
    require_once $controllerFile;
    $controller = new $controllerName();
 
    // Appel de l'action
    if (method_exists($controller, $trueActionName)) {
        $controller->$trueActionName();
    } else {    
        // Gestion de l'erreur
        $controller->Error();
    }}
} else {
    // Gestion de l'erreur
    if(isset($_SESSION['Connexion'])){
    require_once(__DIR__."/src/contoller/ConnexionController.php"); //mettre page connexion
    $controller= new ConnexionController();
    $controller->index();}
    else{
        $_SESSION['Connexion']=true;
        header('location: index.php/connexion');
    }
}
?>