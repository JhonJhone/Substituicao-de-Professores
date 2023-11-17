<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Docente extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'siape',
        'name',
        'curso_id', // Assuming there is a foreign key column 'curso_id'
    ];

    /**
     * Get the curso that owns the docente.
     */
    public function curso()
    {
        return $this->belongsTo(Curso::class, 'curso_id');
    }
}
