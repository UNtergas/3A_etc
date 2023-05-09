<?php
// On génère une constante contenant le chemin vers la racine publique du projet
define('ROOT', str_replace('index.php', '', $_SERVER['SCRIPT_FILENAME']));
echo ROOT;

// On appelle le modèle et le contrôleur principaux
require_once(ROOT . 'app/Model.php');
require_once(ROOT . 'app/Controller.php');

// On sépare les paramètres et on les met dans le tableau $params
$params = explode('/', $_GET['p']);

// // Si au moins 1 paramètre existe
if ($params[0] != "") {
    // On sauvegarde le 1er paramètre dans $controller en mettant sa 1ère lettre en majuscule
    $controller = ucfirst($params[0]);
    echo "<br>";
    echo $controller;
    // On sauvegarde le 2ème paramètre dans $action si il existe, sinon index
    $action = isset($params[1]) ? $params[1] : 'index';
    echo "<br>";
    echo $action;
    // On appelle le contrôleur
    require_once(ROOT . 'controller/' . $controller . '.php');

    // On instancie le contrôleur
    $controller = new $controller();

    if (method_exists($controller, $action)) {
        // On supprime les 2 premiers paramètres
        unset($params[0]);
        unset($params[1]);

        // On appelle la méthode $action du contrôleur $controller
        call_user_func_array([$controller, $action], $params);
    } else {
        // On envoie le code réponse 404
        http_response_code(404);
        echo "La page recherchée n'existe pas";
    }
} else {
    // Ici aucun paramètre n'est défini
    // On appelle le contrôleur par défaut
    echo ("cicic");
    require_once(ROOT . 'controller/Articles.php');

    // On instancie le contrôleur
    $controller = new Articles();

    // On appelle la méthode index
    $controller->index();
    exit();
}
