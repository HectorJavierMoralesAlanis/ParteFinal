<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class proyectos extends Model
{
    use HasFactory;

    protected $fillable=[
        'nombreproyecto',
        'clientes',
        'descripcionproyecto',
        'fechaempezado',
        'fechaterminado',
        'presupuesto',
        'prioridad',
        'liderproyecto',
        'nombreteam'
    ];
    
    //Proyecto a cliente
    public function colaboradores(){
        return $this->hasMany(colaboradores::class);
    }

}
