<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <a class="navbar-brand" href="index.php">Un super blog</a>
</nav>

<section class="baniere col-sm-6">
    <img src="#" alt="">
</section>

<h1>Nos articles</h1>


<div class="row">
    <?php foreach ($articles as $article) : ?>
        <div class="card text-white bg-primary mb-3" style="max-width: 20rem;">
            <div class="card-header">Article</div>
            <div class="card-body">
                <h2 class="card-title"><?= $article['title'] ?></h2>
                <small>Ecrit le <?= $article['created_at'] ?></small>
                <p class="card-text"><?= $article['introduction'] ?></p>
            </div>
            <button type="button" class="btn btn-secondary"><a href="index.php?controller=article&task=show&id=<?= $article['id'] ?>">Lire la suite</a></button>
            <button type="button" class="btn btn-secondary">Secondary</button>
        </div>
    <?php endforeach ?>
</div>