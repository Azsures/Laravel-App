<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    
    public $fillable = [
        'title',
        'content',
        'user_id',
    ];

    protected $attributes = [
        'data' => '2023-11-03',
    ];
}
