<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;

class Icon extends Model
{
    protected $table = 'icons';

    public function categories()
    {
        return $this->hasMany(Category::class);
    }
    use HasFactory;
}