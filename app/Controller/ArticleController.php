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
        $arcticles = PostModel::all(); //pour lister tous les articles
        $this->dd($arcticles);
    
        // $this->render('app.default.frontpage',array(
        //     'message' => $message,
        // ));


    }



}
