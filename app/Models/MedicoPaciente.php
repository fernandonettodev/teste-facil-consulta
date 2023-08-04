<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class MedicoPaciente extends Model
{
    use SoftDeletes;
    use HasFactory;

    protected $fillable = [
        'medico_id', 'paciente_id'
    ];

    protected $dates = ['deleted_at'];

    public function medico()
    {
        return $this->belongsTo(Medico::class);
    }

    public function paciente()
    {
        return $this->belongsTo(Paciente::class);
    }
}