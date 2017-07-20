<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

    public function comment(){

        return $this->hasMany('App\Comment');
    }

    protected $fillable=[ 'title' , 'article'];

    public static $rules = [
        'title' => 'required',
        'article' => 'required',
    ];


    public static function show()
    {
        $post=Post::find(1);
        return $post;
    }

    public static function savePost($data){

        $vRules = Post::$rules;
//            $id = isset($data['id']) ? $data['id'] : '';
//            if($id != ''){
//                $posts = Post::find($id);
//            }else{
//                return $response = ['success'=>false, 'error'=> true, 'message' => ' record did not find for updation! '];
//            }

//        //*****Start Rules Validators
//        $validator = Validator::make($data, $vRules);
//        if ($validator->fails())
//        {
//            return ['success'=>false, 'error'=> true, 'validatorErrors'=>$validator->errors()];
//        }
        //*****End Rules Validators

        $posts = new Post();

        $posts->title = $data['title'];
        $posts->article = $data['article'];
        $posts->image  = $data['image'];



        $posts->save();


        $response = ['success'=>true, 'error'=> false, 'message'=> 'Posts has been saved successfully!'];
        return $response;
    }


}
