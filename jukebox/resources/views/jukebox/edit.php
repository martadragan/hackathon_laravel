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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Admin</title>
</head>
<body>
    
<div class="jumbotron">
    <form action="" method="post">
    
    <?= csrf_field() ?>
    
    <div class="form-group">
    <label for="">Title:</label> <br>
    <input type="text" name="title" value="<?= htmlspecialchars(old('title', $song->title)) ?>">
    </div>
    
    
    <div class="form-group">
    <label for="">Code of the video:</label> <br>
    <input type="text" name="code" value="<?= htmlspecialchars(old('code', $song->code)) ?>">
    </div>
    
    <div class="form-group">
    <label for="">Author:</label> <br>
    <input type="text" name="author" value="<?= htmlspecialchars(old('author', $song->author)) ?>">
    </div>
    
    <div class="form-group">
    <label for="">URL:</label> <br>
    <input type="text" name="url" value="<?= htmlspecialchars(old('url', $song->url)) ?>">
    </div>
    
    <div class="form-group">
    <label for="">Description:</label> <br>
    <textarea name="description" id="" cols="30" rows="10"><?= htmlspecialchars(old('description', $song->description)) ?></textarea>
    </div>
    
    <div class="form-group">
    <input type="submit" value="SUBMIT" class="btn btn-success">
    <br>
    <br>
    <button type="submit" class="btn btn-primary"><a href="/jukebox">GO BACK</a>
    </button>
    </div>
    </form>
    
    <form action="/jukebox/delete" method="post">
    <?= csrf_field() ?>
    
    <div class="delete-flex">
        <div class="form-group">
        <p>Delete by ID</p>
        <label for="">ID</label> <br>
        <input type="text" name="id" value="<?= htmlspecialchars(old('id', $song->id)) ?>">
        </div>    
        <div>
        <input type="submit" value="Delete" class="btn btn-danger">
        </div>
        </div>

    </form>
</div>    
<style>
.jumbotron{
    display: flex;
    justify-content: space-around;
}
a {
    color:white;
    text-decoration: none;
}




</style>




</body>
</html>