<?php
// $this->dd($formAdd);
?>

<section class="container-md">
    <h2 class="mb-3">Add Article</h2>

    <form action="" method="post">
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

        <?= $formAdd->submit('submitted', $value = 'Send') ?>

    </form>
</section>