<?php

// require_once("../app/Controller.php");
class Articles extends Controller
{
    public function index()
    {

        echo "<h1>Bienvenue sur l'accueil</h1>\n";

        $this->loadModel("Article");
        // echo "inside articles\n";
        $articles = $this->Article->getAll();
        // $this->Article->printAll();
        $this->render('index', ['articles' => $articles]);
        echo "<h1>load and render</h1>";
    }
    public function lire(string $slug)
    {
        // On instancie le modèle "Article"
        $this->loadModel('Article');

        // On stocke l'article dans $article
        $article = $this->Article->findBySlug($slug);

        // On envoie les données à la vue lire
        $this->render('lire', compact('article'));
    }
    public function searchBySlug($slug)
    {
        $this->loadModel("Article");
    }
}

/**
 * todo: test4: application controller abstact
 */

// $arti_c = new Articles();
// $arti_c->index();
