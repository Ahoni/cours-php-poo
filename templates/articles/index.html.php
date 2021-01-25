<nav class="navbar navbar-expand-lg navbar-dark bg-light">
    <h2><a class="navbar-brand text-dark" href="index.php">Un super blog</a></h2>
</nav>

<div class="jumbotron bg-warning">
    <h1 class="display-3">Nos articles</h1>
    <p class="lead">Venez decouvrir nos tous derniers articles comportant de nombreux conseils divers et varier sur les methodes etuliser dans la reuliation de vos objectifs. </p>
    <hr class="my-4">
</div>

<div class="row row justify-content-around">
    <?php foreach ($articles as $article) : ?>
        <div class="card border-info bg-light col-6 col-md-5 m-2">
            <div class="card-header">Article</div>
            <div class="card-body">
                <h3 class="card-title"><?= $article['title'] ?></h3>
                <small>Publié le <?= $article['created_at'] ?></small>
                <p class="card-text"><?= $article['introduction'] ?></p>
            </div>
            <button type="button" class="btn btn-info my-2 m-1"><a href="index.php?controller=article&task=show&id=<?= $article['id'] ?>" style="text-decoration:none;color:aliceblue">Lire la suite</a></button>
            <button type="button" class="btn btn-info my-2 m-1"> <a href="index.php?controller=article&task=delete&id=<?= $article['id'] ?>" onclick="return window.confirm(`Êtes vous sur de vouloir supprimer cet article ?!`)" style="text-decoration:none;color:aliceblue">Supprimer</a></button>
        </div>
    <?php endforeach ?>
</div>