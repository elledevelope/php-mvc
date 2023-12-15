<?php

namespace App\Model;

use \App\Weblitzer\Model;

class PostModel extends Model
// or in one line: class PostModel extends \App\Weblitzer\Model 
{
    // protected static $table = 'post';
    protected static $table = 'note';
}
