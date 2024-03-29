<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use HasFactory;

    use SoftDeletes; 

    protected $table = "posts";

    protected $primaryKey = "post_id";

    public function blogger()
    {
        return $this->belongsTo(Blogger::class, 'blog_id', 'blogger_id');
    }
}
