<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class ToDO extends Model
{
    use HasFactory ,SoftDeletes ;


    protected $table = 'todos';
    protected $fillable = [
        'title',
        'description',
        'is_completed',
    ];
}
