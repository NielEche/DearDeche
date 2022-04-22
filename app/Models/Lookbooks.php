<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lookbooks extends Model
{
    use HasFactory;
    public $fillable = ['project', 'project_id', 'book_image'];
}
