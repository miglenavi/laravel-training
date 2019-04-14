<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
  //  protected $table = 'posts'; not necessary, laravel should do this automatically, in case it does not add it

  public function comments() {
    return $this->hasMany(Comment::class);
  }
  public function files() {
        return $this->hasMany(File::class);
 }
}
