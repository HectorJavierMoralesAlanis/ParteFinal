<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombreC',
        'apellidoC',
        'username',
        'emailC',
        'password',
        'telefonoC',
        'compNombreC',
    ];
}
