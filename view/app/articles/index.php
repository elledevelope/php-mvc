<h2>Articles :</h2>
<ul>
    <?php
    $i = 1;
    foreach ($articles as $article) :
    ?>
        <li>
            <?= $i ?>.
            <?= $article->titre ?> <br>
            <?= $article->content ?>

        </li> <br>

    <?php
        $i = $i + 1;
    endforeach;
    ?>
</ul>

