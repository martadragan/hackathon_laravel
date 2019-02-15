<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Song</title>
</head>
<body>
<div class="jumbotron">
    Title:
    <?= $song->title ?>
    <br>
    Author:
    <?= $song->author ?>
    <br>
    Description:
    <?= $song->description ?>
    <br>
    <br>
    <iframe width="560" height="315" src="https://www.youtube.com/embed/<?=$song->code ?>" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
    <br>
    <br>
    
    <button type="submit" class="btn btn-info"><a href="/jukebox">Go Back</a></button>
</div>
<style>
    a{
        text-decoration: none;
        color: white;
    }
</style>
</body>
</html>