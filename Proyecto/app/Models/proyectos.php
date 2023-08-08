<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class proyectos extends Model
{
    use HasFactory;

    protected $fillable=[
        'nombreproyecto',
        'cliente_id',
        'descripcionproyecto',
        'fechaempezado',
        'fechaterminado',
        'presupuesto',
        'prioridad',
        'liderproyecto',
        'nombreteam'
    ];
    
    //Proyecto a cliente
    public function cliente(){
        return $this->belongsTo(Cliente::class);
    }
}
