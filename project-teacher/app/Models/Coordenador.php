<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coordenador extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'coordenadores';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'inicio',
        'fim',
        'docentes_id',
        'cursos_id',
    ];

    /**
     * Get the docente associated with the coordenador.
     */
    public function docente()
    {
        return $this->belongsTo(Docente::class, 'docentes_id');
    }

    /**
     * Get the curso associated with the coordenador.
     */
    public function curso()
    {
        return $this->belongsTo(Curso::class, 'cursos_id');
    }
}
