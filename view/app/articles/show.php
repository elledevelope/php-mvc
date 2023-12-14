<!-- app/articles/show.php -->


<h2><?= $article->titre ?></h2>
<p><?= $article->content ?></p>

<p class="card-subtitle mb-2 text-body-secondary">Publié par <strong> <?= $user->findById($article->user_id, 'user_id')->name; ?></strong> le <?= $article->created_at ?></p>

<div class="d-grid gap-2 d-md-flex justify-content-md-end">
    <button class="btn btn-primary me-md-2" type="button">
        <a class="text-light" href="<?= $view->path('articles'); ?>">Back to articles</a>
    </button>
    <button class="btn btn-danger" type="button">
    <a class="text-light" href="<?= $view->path('delete', [$article->id]); ?>">Supprimer</a>        
    </button>
</div>