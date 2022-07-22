<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Continent extends Model
{
    //La tabla con la cual el modelo se relaciona
    protected $table = "continents";
    //La clave primaria de la tabla
    protected $primaryKey="continent_id";
    //anula los campos de auditoria
    public $timestamps = false;
    // crea datos falsos
    use HasFactory;
}
