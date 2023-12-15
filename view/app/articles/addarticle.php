<?php
// $this->dd($formAdd);
?>

<section>
    <h2>Add Article</h2>

    <form action="" method="post">
        <div class="mb-3">
            <?= $formAdd->label('titre', ['class' => 'form-label']) ?>
            <?= $formAdd->input('titre') ?>
            <?= $formAdd->error('titre') ?> <br>

            <?= $formAdd->label('content') ?>
            <?= $formAdd->textarea('content') ?>
            <?= $formAdd->error('content') ?> <br>

            <?= $formAdd->submit('submit', $value = 'Send',  ['class' => 'btn btn-primary']) ?>
        </div>
    </form>
</section>
