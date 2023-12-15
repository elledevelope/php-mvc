<?php

namespace App\Model;

use \App\Weblitzer\Model;
use \App\App;

class PostModel extends Model
// or in one line: class PostModel extends \App\Weblitzer\Model 
{
    // protected static $table = 'post';
    protected static $table = 'note';

    public static function insert($post)
    {
        var_dump($post);
        App::getDatabase()->prepareInsert(
            'INSERT INTO ' . self::$table . ' (titre, content,user_id) VALUES (?,?, ?) ',
            [
                $post['titre'],
                $post['content'],
                $post['auteur']
            ]
        );
    }
}
