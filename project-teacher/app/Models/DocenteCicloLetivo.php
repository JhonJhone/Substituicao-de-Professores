<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DocenteCicloLetivo extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'docentes_ciclos_letivos';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nivel',
        'ciclo_letivos_id',
        'disciplinas_id',
    ];

    /**
     * Get the docente associated with the docente_ciclo_letivo.
     */
    public function docente()
    {
        return $this->belongsTo(Docente::class);
    }

    /**
     * Get the ciclo_letivo associated with the docente_ciclo_letivo.
     */
    public function cicloLetivo()
    {
        return $this->belongsTo(CicloLetivo::class, 'ciclo_letivos_id');
    }

    /**
     * Get the disciplina associated with the docente_ciclo_letivo.
     */
    public function disciplina()
    {
        return $this->belongsTo(Disciplina::class, 'disciplinas_id');
    }
}
