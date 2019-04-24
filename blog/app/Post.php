<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
  //  protected $table = 'posts'; not necessary, laravel should do this automatically, in case it does not add it

    use SoftDeletes;

  public function comments() {
    return $this->hasMany(Comment::class);
  }
  public function files() {
        return $this->hasMany(File::class);
 }

 public function scopeOneDayOld($query) {
      return $query->where('created_at', '>', Carbon::now()->subDay());
 }

 public function scopeCreatedLaterThan($query, $dateTime) {
        return $query->where('created_at', '>', $dateTime);
  }

  public function  categories()
  {
      return $this->belongsToMany(Category::class);
  }


}
