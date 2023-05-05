<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Platillo extends Model
{
    protected $fillable = ['nombre', 'descripcion','image'];
    use HasFactory;
}
