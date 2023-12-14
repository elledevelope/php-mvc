<h2 class="card-title">Articles :</h2>
<ul>
    <?php
    foreach ($articles as $article) :
    ?>
        <div class="container mt-4">
            <div class="card">
                <div class="card-body">                
                        <h3> <a href="<?= $view->path('article', [$article->id]); ?>"> <?= $article->titre ?> </a></h3>
                        <div class="card-text">
                            <p><?= $article->content ?></p>
                            <p class="card-subtitle mb-2 text-body-secondary">Publié par <strong> <?= $user->findById($article->user_id, 'user_id')->name; ?></strong> le <?= $article->created_at ?></p>
                            <!-- <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                <button class="btn btn-primary me-md-2" type="button">Voir</button>
                                <button class="btn btn-danger" type="button">Supprimer</button>
                            </div> -->
                        </div>
                    
                </div>
            </div>
        </div>
        <br>
    <?php
    endforeach;
    ?>
</ul>