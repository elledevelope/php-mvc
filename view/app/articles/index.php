<h2 class="card-title">Articles :</h2>
<ul>
    <?php
    foreach ($articles as $article) :
    ?>
        <div class="container mt-4">
            <div class="card">
                <div class="card-body">
                    <h3> <?= $article->titre ?> </h3>
                    <div class="card-text">
                        <p><?= $article->content ?></p>
                        <p class="card-subtitle mb-2 text-body-secondary">Publié par <strong> <?= $user->findById($article->user_id, 'user_id')->name ?></strong></p>
                    </div>
                </div>
            </div>
        </div>
        <br>
    <?php
    endforeach;
    ?>
</ul>