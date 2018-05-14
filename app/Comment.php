<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = ['nickname', 'content', 'article_id'];
    
    public function hasOneArticle()
    {
        return $this->hasOne('App\Article', 'id', 'article_id');
    }
}
