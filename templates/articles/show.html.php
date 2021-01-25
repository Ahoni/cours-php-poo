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
<!-- formulaire des commentaires  -->
<form action="index.php?controller=comment&task=insert" method="POST">
    <fieldset>
        <h4 class="bg-info">Vous voulez réagir ? N'hésitez pas les bros !</h4>
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

<!-- Tableau des commentaires -->
<?php if (count($commentaires) === 0) : ?>
    <h2>Il n'y a pas encore de commentaires pour cet article ... SOYEZ LE PREMIER ! :D</h2>
<?php else : ?>
    <h4>Il y a déjà <?= count($commentaires) ?> réactions : </h4>
    <table class="table table-hover col align-self-center">
        <thead>
            <tr>
                <th scope="col">Commentaire de </th>
                <th scope="col">Ajouter le </th>
                <th scope="col">Commentaire</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <?php foreach ($commentaires as $commentaire) : ?>
            <tbody>
                <tr class="table-active">
                    <th scope="row"><?= $commentaire['author'] ?></th>
                    <td><?= $commentaire['created_at'] ?></td>
                    <td>
                        <blockquote>
                            <em><?= $commentaire['content'] ?></em>
                        </blockquote>
                    </td>
                    <td><a href="index.php?controller=comment&task=delete&id=<?= $commentaire['id'] ?>" onclick="return window.confirm(`Êtes vous sûr de vouloir supprimer ce commentaire ?!`)">Supprimer</a></td>
                </tr>
            </tbody>
        <?php endforeach ?>
    </table>
<?php endif ?>