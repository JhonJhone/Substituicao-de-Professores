<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Disciplina extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'disciplinas';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
    ];

    /**
     * Get the docentes_ciclos_letivos for the disciplina.
     */
    public function docentesCiclosLetivos()
    {
        return $this->hasMany(DocenteCicloLetivo::class, 'disciplinas_id');
    }

    /**
     * Get the ofertas for the disciplina.
     */
    public function ofertas()
    {
        return $this->hasMany(Oferta::class, 'disciplinas_id');
    }

    /**
     * Get the solicitacoes for the disciplina.
     */
    public function solicitacoes()
    {
        return $this->hasMany(Solicitacao::class, 'disciplinas_id');
    }
}
