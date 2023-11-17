<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Oferta extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'ofertas';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'docentes_id',
        'turmas_id',
        'ciclo_letivos_id',
        'disciplinas_id',
    ];

    /**
     * Get the docente associated with the oferta.
     */
    public function docente()
    {
        return $this->belongsTo(Docente::class, 'docentes_id');
    }

    /**
     * Get the turma associated with the oferta.
     */
    public function turma()
    {
        return $this->belongsTo(Turma::class, 'turmas_id');
    }

    /**
     * Get the ciclo_letivo associated with the oferta.
     */
    public function cicloLetivo()
    {
        return $this->belongsTo(CicloLetivo::class, 'ciclo_letivos_id');
    }

    /**
     * Get the disciplina associated with the oferta.
     */
    public function disciplina()
    {
        return $this->belongsTo(Disciplina::class, 'disciplinas_id');
    }
}
