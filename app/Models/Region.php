<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
        //la tabla con la cual el modelo se relaciona 
        protected $table = "regions";
        //la clave4 primaria de dicha tabla
        protected $primariKey = "region_id";
        //anular campos de auditoria 
        public $timestamps = false;
        use HasFactory;


        //relacion entre contiennte y region 
        public function Paises(){
             return $this->hasMany(Country::class , 'region_id');
        }

}