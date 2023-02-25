<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $table = 'articles';


    protected $guarded = ['id', 'created_at', 'updated_at'];

    protected $fillable = ['title', 'text', 'image'];
}
