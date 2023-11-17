<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Turma extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'turmas';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'cursos_id',
    ];

    /**
     * Get the curso associated with the turma.
     */
    public function curso()
    {
        return $this->belongsTo(Curso::class, 'cursos_id');
    }
}
