<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php foreach ($articles as $article) : ?>

        <h2><?= $article['titre'] ?></h2>

        <p><?= $article['contenu'] ?></p>

    <?php endforeach ?>
</body>

</html>