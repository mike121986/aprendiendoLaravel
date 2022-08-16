<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;

    /* registro por asignacion masiva
    protected $fillable = ['name','descripcion','categoria']; */

    protected $guarded = ['status'];
}
