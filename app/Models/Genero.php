<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genero extends Model
{
    use HasFactory;

    protected $table = 'lib_generos';
    protected $primaryKey = 'cod_genero';
    protected $fillable = ['descripcion'];
}
