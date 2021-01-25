<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <a class="navbar-brand" href="index.php">Un super blog</a>
</nav>

<section class="baniere col-sm-6">
    <img src="#" alt="">
</section>

<div class="jumbotron">
    <h1 class="display-3">Nos articles</h1>
    <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
    <hr class="my-4">
</div>

<div class="row row justify-content-around">
    <?php foreach ($articles as $article) : ?>
        <div class="card text-white bg-primary col-6 col-md-5 m-2">
            <div class="card-header">Article</div>
            <div class="card-body">
                <h2 class="card-title"><?= $article['title'] ?></h2>
                <small>Publié le <?= $article['created_at'] ?></small>
                <p class="card-text"><?= $article['introduction'] ?></p>
            </div>
            <button type="button" class="btn btn-secondary my-2"><a href="index.php?controller=article&task=show&id=<?= $article['id'] ?>">Lire la suite</a></button>
            <button type="button" class="btn btn-secondary">Secondary</button>
        </div>
    <?php endforeach ?>
</div>