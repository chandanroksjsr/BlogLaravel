<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    protected $table = "post";

    protected $fillable = [
        'title', 'content'
    ];

    protected $dates = [
        'created_at', 'updated_at'
    ];

    public function categories () {
        return $this->belongsToMany(Categories::class, 'post_categories', 'post_id', 'categories_id');
    }
}
