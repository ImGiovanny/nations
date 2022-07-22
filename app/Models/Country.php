<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    //La tabla con la cual el modelo se relaciona
    protected $table = "countries";
    //La clave primaria de la tabla
    protected $primaryKey="contry_id";
    //anula los campos de auditoria
    public $timestamps = false;
    // crea datos falsos
    use HasFactory;
}
