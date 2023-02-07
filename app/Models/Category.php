<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Task;
use App\Models\Icon;
class Category extends Model
{
    protected $fillable = [
        'user_id',
        'name',
        'icon_id',
        'color'
    ];
    
    public function tasks()
    {
        return $this->hasMany(Task::class);
    }
    public function icon()
    {
        return $this->belongsTo(Icon::class);
    }
    use HasFactory;
}
