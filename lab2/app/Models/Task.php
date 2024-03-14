<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Task extends Model
{
    protected $table = "tasks";
    use HasFactory,SoftDeletes;
    protected $fillable = [
        'title',
        'body',
        'enabled',
        'published_at',
    ];
}
