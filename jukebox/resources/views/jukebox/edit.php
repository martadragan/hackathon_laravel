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


