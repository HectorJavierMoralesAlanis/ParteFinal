<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers;

class colaboradores extends Model
{
    use HasFactory;

    protected $fillable=[
        'nombrecolaborador',
        'apellidocolaborador',
        'usernamecolaborador',
        'passwordcolaborador',
        'joindatecolaborador',
        'telefonocolaborador',
        'companiacolaborador',
        'departamentocolaborador',
        'designacioncolaborador'

    ];
    
    protected $hidden = [
        'password'
    ];
}