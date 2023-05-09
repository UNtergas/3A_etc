<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>inside the view</h1>
    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolorem blanditiis ipsa inventore odio ad tempora neque dolor quibusdam ullam cumque maxime enim cupiditate dolore, sequi quis animi? Explicabo, quibusdam dignissimos.</p>
    <?php foreach ($articles as $articles) : ?>
        <h5>an item</h5>
        <h2><?= $article['title'] ?></h2>

        <p><?= $article['body'] ?></p>

    <?php endforeach ?>
</body>

</html>