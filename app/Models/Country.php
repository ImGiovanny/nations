<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    //La tabla con la cual el modelo se relaciona
    protected $table = "countries";
    //La clave primaria de la tabla
    protected $primaryKey="country_id";
    //anula los campos de auditoria
    public $timestamps = false;
    // crea datos falsos
    use HasFactory;

    //Relaciona inversa M:1 paises y region
    public function region(){
        return $this->belongsTo(Region::class,
                                'region_id');
                                
    }

    //Relacion M:M entre pais y sus idiomas
    public function idiomas(){
        return $this->belongsToMany(Idioma::class ,
                                    'country_languages',
                                    'country_id',
                                    'language_id')->
                                    withPivot('official');
    }
}
