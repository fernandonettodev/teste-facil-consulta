<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Paciente extends Model
{
    use SoftDeletes;
    use HasFactory;

    protected $fillable = [
        'nome', 'cpf', 'celular'
    ];

    protected $dates = ['deleted_at'];
}
