<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Jukebox</title>
</head>
<body>

    <div class="jumbotron">
        <ul> 
        <?php foreach($songs as $song) :?>
        <li>Title: 
        <a href="/jukebox/song?id=<?= $song->id ?>"> <?= $song->title ?></a>
        <br>
        Author: <?= $song->author ?>
        <br>
        Description:<?= $song->description ?>
        </li>
        <hr>
        <?php endforeach ?>
        </ul>
        <button type="button" class="btn btn-warning"><a href="jukebox/edit">Admin only</a></button>
    </div>

    <style>
    ul {
        list-style-type: none;
    }
    a {
        text-decoration: none;
        color: black;
    }
    </style>
</body>
</html>