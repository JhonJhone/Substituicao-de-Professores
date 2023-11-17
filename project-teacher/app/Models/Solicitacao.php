<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Solicitacao extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'solicitacoes';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'data',
        'hora',
        'justificativa',
        'anexo',
        'tipo',
        'ciencia_substituto',
        'data_devolucao',
        'hora_devolucao',
        'autorizacao_chefia',
        'ciencia_chefia',
        'ciclo_letivos_id',
        'disciplinas_id',
        'turmas_id',
        'chefias_id',
        'coordenadores_id',
    ];

    /**
     * Get the ciclo_letivo associated with the solicitacao.
     */
    public function cicloLetivo()
    {
        return $this->belongsTo(CicloLetivo::class, 'ciclo_letivos_id');
    }

    /**
     * Get the disciplina associated with the solicitacao.
     */
    public function disciplina()
    {
        return $this->belongsTo(Disciplina::class, 'disciplinas_id');
    }

    /**
     * Get the turma associated with the solicitacao.
     */
    public function turma()
    {
        return $this->belongsTo(Turma::class, 'turmas_id');
    }

    /**
     * Get the chefia associated with the solicitacao.
     */
    public function chefia()
    {
        return $this->belongsTo(Chefia::class, 'chefias_id');
    }

    /**
     * Get the coordenador associated with the solicitacao.
     */
    public function coordenador()
    {
        return $this->belongsTo(Coordenador::class, 'coordenadores_id');
    }
}
