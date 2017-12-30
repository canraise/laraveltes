<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //data yang dishare
    protected $fillable=['title','content','category_id','slug','user_id'];

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function comments(){
        return $this->hasMany(Comment::class);
    }

    public function users(){
        return $this->belongsTo(User::class);
    }

    //end
}
