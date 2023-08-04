<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Cidade extends Model
{
    use SoftDeletes;
    use HasFactory;

    protected $fillable = [
        'nome', 'estado'
    ];

    protected $dates = ['deleted_at'];
}
