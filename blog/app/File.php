<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class File extends Model
{
    use SoftDeletes;

    public function comments() {
    return $this->belongsTo(Post::class);
  }
    public function scopeByExt($query, $ext)
    {

        return $query->where('filename', 'LIKE', '%' . $ext);
    }

    public function scopeBySize($query)
    {

        return $query->where('size', '>', 1);
    }

}
