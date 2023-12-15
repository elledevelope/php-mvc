<?php
// $this->dd($articleEdit);
?>

<section class="container-md">
    <h2 class="mb-3">Edit Article</h2>

    <form method="POST">
        <div class="mb-3">
            <?= $formAddEdit->label('titre') ?>
            <?= $formAddEdit->input('titre','text',$articleEdit->titre) ?>
            <?= $formAddEdit->error('titre') ?>
        </div>
        <br>

        <div class="mb-3">
            <?= $formAddEdit->label('content') ?>
            <?= $formAddEdit->textarea('content', $articleEdit->content) ?>
            <?= $formAddEdit->error('content') ?>
        </div>
        <br>

        <?= $formAddEdit->submit('submitted','Edit') ?>

    </form>
</section>