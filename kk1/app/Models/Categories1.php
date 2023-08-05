<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categories1 extends Model
{
    protected $table = 'categories1';
    protected $primaryKey = 'id';
    protected $fillable = ['Types', 'Price', 'Image'];

    use HasFactory;
}
