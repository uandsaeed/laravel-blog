<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

    public function comment(){

        return $this->hasMany('App\Comment');
    }

    protected $fillable=['text' , 'title' , 'user_id'];


    public static function show()
    {
        $post=Post::find(9);
        return $post;
    }


}
