<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comic extends Model
{
    protected $fillable =
    [
        'title',
        'description',
        'thumb',
        'series',
        'author',
        'price',
        'created_at',
        'updated_at'
    ];
}
