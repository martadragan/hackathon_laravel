<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <ul> 
    <?php foreach($songs as $song) :?>
    <li>
    <a href="/jukebox/song?id=<?= $song->id ?>"><?= $song->title ?></a>

    <?= $song->author ?>

    <?= $song->description ?>
    </li>
    <?php endforeach ?>
    </ul>
</body>
</html>