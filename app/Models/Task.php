<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;

class Task extends Model
{
    protected $fillable = [
        'user_id',
        'title',
        'category_id',
        'status'
    ];
    use HasFactory;


    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}