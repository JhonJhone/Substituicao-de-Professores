<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chefia extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'chefias';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'inicio',
        'fim',
        'nivel',
        'docentes_id',
    ];

    /**
     * Get the docente associated with the chefia.
     */
    public function docente()
    {
        return $this->belongsTo(Docente::class, 'docentes_id');
    }
}
