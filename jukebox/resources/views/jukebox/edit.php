<?php if (count($errors) > 0) : ?>
<div class="alert">
    <ul>
        <?php foreach ($errors->all() as $error) : ?>
                <li><?= $error ?></li>
        <?php endforeach; ?>
    </ul>
</div>
<?php endif; ?>

<?php if (Session::has('success_message')) : ?>
    <div class="success">
        <?= Session::get('success_message') ?>
    </div>
<?php endif; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Jukebox</title>
</head>
<body>
    
<form action="" method="post">

<?= csrf_field() ?>

<div>
<label for="">Title:</label>
<input type="text" name="title" value="<?= htmlspecialchars(old('title', $song->title)) ?>">
</div>


<div>
<label for="">Code of the video:</label>
<input type="text" name="code" value="<?= htmlspecialchars(old('code', $song->code)) ?>">
</div>

<div>
<label for="">Author:</label>
<input type="text" name="author" value="<?= htmlspecialchars(old('author', $song->author)) ?>">
</div>

<div>
<label for="">URL:</label>
<input type="text" name="url" value="<?= htmlspecialchars(old('url', $song->url)) ?>">
</div>

<div>
<label for="">Description:</label>
<textarea name="description" id="" cols="30" rows="10"><?= htmlspecialchars(old('description', $song->description)) ?></textarea>
</div>

<div>
<input type="submit" value="SUBMIT">
</div>
</form>

<form action="/jukebox/delete" method="post">
<?= csrf_field() ?>

<p>Delete by ID</p>
<div>
<label for="">ID</label>
<input type="text" name="id" value="<?= htmlspecialchars(old('id', $song->id)) ?>">
<input type="submit" value="Delete">
</div>

</form>




</body>
</html>