<?php

require_once("../app/Controller.php");
class Articles extends Controller
{
    public function index()
    {
        echo "<h1>Bienvenue sur l'accueil</h1>\n";

        $this->loadModel("Article");
        echo "inside articles\n";
        $articles = $this->Article->getAll();
        $this->Article->printAll();

        // $this->render('view', ['articles' => $articles]);
    }
}

/**
 * todo: test4: application controller abstact
 */

$arti_c = new Articles();
$arti_c->index();
