<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PostCategories extends Model
{
    protected $table = "post_categories";

    protected $fillable = [
        'post_id', 'categories_id'
    ];

    protected $dates = [
        'created_at', 'updated_at'
    ];
}
