<?php

namespace App\Controller;

use App\Weblitzer\Controller;
use App\Model\PostModel;


/**
 *
 */
class ArticleController extends Controller
{

    public function index()
    {
        $articles = PostModel::all(); //pour lister tous les articles
        // $this->dd($articles);

        $this->render('app.articles.index',array(
            'articles' => $articles,
        ));
    
        // $this->render('app.default.frontpage',array(
        //     'message' => $message,
        // ));

    }

}
