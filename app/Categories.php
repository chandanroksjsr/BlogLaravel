<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    protected $table = "categories";

    protected $fillable = [
        'title', 'description'
    ];

    protected $dates = [
        'created_at', 'updated_at'
    ];
}
