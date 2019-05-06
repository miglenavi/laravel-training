<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Comment extends Model
{

    use SoftDeletes;

    public $fillable = ['author', 'email', 'content'];
    public function post()
    {
      return $this->belongsTo(Post::class);
    }
}
