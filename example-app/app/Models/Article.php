<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;
    //связь с таблицей пост
    protected $table = 'articles';
    //указываем с какими полями можем работать модель пост
    protected $fillable  = [
        'title',
        'text',
        'image'
    ];
}
