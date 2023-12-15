<?php

namespace App\Controller;

use App\Weblitzer\Controller;
use App\Model\PostModel;
use App\Model\UserModel;
use App\Service\Form;
use App\Service\Validation;


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


        //test validation formulaire:
        if (!empty($_POST['submitted'])) :
            // $this->dd($_POST);
            $postArticle = $this->cleanXss($_POST);
            // $this->dd($postArticle);   

            $validateArticle = new Validation;
            $errors['titre'] = $validateArticle->textValid($postArticle['titre'], 'titre', 2, 10);
            $errors['content'] = $validateArticle->textValid($postArticle['content'], 'content', 10, 500);
        endif;

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
