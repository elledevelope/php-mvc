<?php

namespace App\Controller;

use App\Weblitzer\Controller;
use App\Model\PostModel;
use App\Model\UserModel;


/**
 *
 */
class ArticleController extends Controller
{

    public function index()
    {
        $articles = PostModel::all(); //pour lister tous les articles
        // $this->dd($articles);

        $user = new UserModel; //pour lister tous les users
        // $this->dd($user);

        $articlesCount = PostModel::count();

        $this->render('app.articles.index', array(
            'articles' => $articles,
            'user' => $user,
            'articlesCount' => $articlesCount,
        ));
    }

    public function show($id)
    {
        $this->dd($id);

        $article = PostModel::findById($id);
        // $this->dd($article);
        $user = new UserModel;

        $this->render('app.articles.show', array(
            'article' => $article,
            'user' => $user,
        ));
    }

    public function delete($id)
    {
        $this->dd($id);
    }
}
