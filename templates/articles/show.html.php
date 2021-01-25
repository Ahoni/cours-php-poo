<nav class="navbar navbar-expand-lg navbar-dark bg-light">
    <a class="navbar-brand text-dark" href="index.php">Un super blog</a>
</nav>

<div class="jumbotron bg-warning">
    <h1><?= $article['title'] ?></h1>
    <small>Publié le <?= $article['created_at'] ?></small>
    <p><?= $article['introduction'] ?></p>
</div>
<hr>
<?= $article['content'] ?>

<hr>
<?php if (count($commentaires) === 0) : ?>
    <h2>Il n'y a pas encore de commentaires pour cet article ... SOYEZ LE PREMIER ! :D</h2>
<?php else : ?>
    <h2>Il y a déjà <?= count($commentaires) ?> réactions : </h2>
    <?php foreach ($commentaires as $commentaire) : ?>
        <h3>Commentaire de <?= $commentaire['author'] ?></h3>
        <small>Le <?= $commentaire['created_at'] ?></small>
        <blockquote>
            <em><?= $commentaire['content'] ?></em>
        </blockquote>
        <a href="index.php?controller=comment&task=delete&id=<?= $commentaire['id'] ?>" onclick="return window.confirm(`Êtes vous sûr de vouloir supprimer ce commentaire ?!`)">Supprimer</a>
    <?php endforeach ?>
<?php endif ?>

<form action="index.php?controller=comment&task=insert" method="POST">
    <fieldset>
        <h3>Vous voulez réagir ? N'hésitez pas les bros !</h3>
        <div class="form-group ">

            <input type="text" name="author" placeholder="Votre pseudo !">
        </div>
        <div class="form-group">
            <textarea name="content" id="" cols="30" rows="10" placeholder="Votre commentaire ..."></textarea>
        </div>
        <div class="form-group">
            <input type="hidden" name="article_id" value="<?= $article_id ?>">
        </div>
        <button>Commenter !</button>
    </fieldset>
</form>