<h1> Liste des Articles </h1>
<ol>
    <!-- <?php
            define('ROOT', str_replace('index.php', '', $_SERVER['SCRIPT_FILENAME']));
            require_once(ROOT . 'app/Model.php');
            require_once(ROOT . 'app/Controller.php');
            ?> -->
    <?php foreach ($articles as $article) : ?>

        <li> <a href="/articles/show/<?= $article['slug'] ?>"><?= $article['title'] ?> </a>
        </li>
    <?php endforeach ?>
</ol>