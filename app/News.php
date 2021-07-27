<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    //
    protected $table = 'news';
    protected $fillable = [
        'user_id', 'typenews_id', 'title', 'description', 'content', 'image',
    ];

    public function user(){

        
        return $this->belongsTo(User::class);
    }
}
