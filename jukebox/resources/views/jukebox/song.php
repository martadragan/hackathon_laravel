<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?= $song->title ?>
<br>
<?= $song->author ?>
<br>
<?= $song->description ?>
<br>
<iframe width="560" height="315" src="https://www.youtube.com/embed/<?=$song->code ?>" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>

<br>

<button type="submit"><a href="/jukebox">Go Back</a></button>
</body>
</html>