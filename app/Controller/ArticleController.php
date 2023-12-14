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

        $this->render('app.articles.index', array(
            'articles' => $articles,
            'user' => $user,
        ));


        // $this->render('app.default.frontpage',array(
        //     'message' => $message,
        // ));

    }
}
