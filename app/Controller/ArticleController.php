<?php

namespace App\Controller;

use App\Weblitzer\Controller;
use App\Model\PostModel;
use App\Model\UserModel;
use App\Service\Form;


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

        $articlesCount = PostModel::count(); //shows total number of articles 

        $this->render('app.articles.index', array(
            'articles' => $articles,
            'user' => $user,
            'articlesCount' => $articlesCount,
        ));
    }

    //FORM to add article:
    public function add()
    {
        // $this->dd('add');
        $errors = [];
        $formAdd = new Form($errors);
        $this->render('app.articles.addarticle', array(
            'formAdd' => $formAdd,
        ));
    }


    public function show($id)
    {
        // $this->dd($id);
        $article = $this->isArticleExist($id); // instead of $article = PostModel::findById($id);

        // $this->dd($article);
        $user = new UserModel;

        $this->render('app.articles.show', array(
            'article' => $article,
            'user' => $user,
        ));
    }

    public function delete($id) //delete btn
    {
        // $this->dd($id);

        $articleDelete = $this->isArticleExist($id);
        PostModel::delete($id);
        $this->redirect('articles');
    }

    public function isArticleExist($id)
    {
        $article = PostModel::findById($id);
        // $this->dd($article);

        if (empty($article)) {   //same as: return(empty($article)) ? $this->Abort404() : $article;
            $this->Abort404();
        } else {
            return $article;
        }
    }
}
