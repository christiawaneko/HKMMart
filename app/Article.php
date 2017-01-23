<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    //
    protected $table = 'tb_article';

   protected $fillable = array('title', 'article','image','slug','created_at');

}
