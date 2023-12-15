<?php
// $this->dd($formAdd);
// $this->dd($users);

?>

<section class="container-md">
    <h2 class="mb-3">Add Article</h2>

    <form method="POST">
        <div class="mb-3">
            <?= $formAdd->label('titre') ?>
            <?= $formAdd->input('titre') ?>
            <?= $formAdd->error('titre') ?>
        </div>
        <br>

        <div class="mb-3">
            <?= $formAdd->label('content') ?>
            <?= $formAdd->textarea('content') ?>
            <?= $formAdd->error('content') ?>
        </div>
        <br>

        <div class="mb-3">
            <?= $formAdd->select('auteur',$users,'name','', 'user_id') ?>
        </div>
        <br>

        <?= $formAdd->submit('submitted','Send') ?>

    </form>
</section>