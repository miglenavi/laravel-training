<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    public $fillable = ['author', 'email', 'content'];
    public function post()
    {
      return $this->belongsTo(Post::class);
    }
}
