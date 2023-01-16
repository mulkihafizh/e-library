<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'category_id',
        'publisher',
        'writer',
        'isbn',
        'download',
        'cover',
        'synopsis',
        'file',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}