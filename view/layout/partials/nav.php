<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand text-info" href="<?= $view->path('home'); ?>">myApp</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="text-light" href="<?= $view->path('home'); ?>">Home</a>
                </li>
                <li class="nav-item">
                    <a class="text-light" href="<?= $view->path('articles'); ?>">Articles</a>
                </li>
                <li class="nav-item">
                    <a class="text-light" href="<?= $view->path('contact'); ?>">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="text-light" href="<?= $view->path('about'); ?>">About</a>
                </li>
                <li class="nav-item">
                    <a class="text-light" href="<?= $view->path('add'); ?>">Add Article</a>
                </li>
                <li class="nav-item">
                    <a class="text-light" href="<?= $view->path('single', array(12)); ?>">Single</a>
                </li>
                <li class="nav-item">
                    <a class="text-light" href="<?= $view->path('single2', array(12, 'dedede')); ?>">Single2</a>
                </li>
            </ul>
        </div>
    </div>
</nav>