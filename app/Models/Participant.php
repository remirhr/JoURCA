<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
class Participant extends Model
{
    use HasFactory;
    protected $fillable = [
                'NomP',
                'PrenomP',
                'DateDeNaissance',
                'NumeroEtudiant',
                'pdp',
                'idComposante'
    ];
    public function composante() : BelongsTo {
        return $this->belongsTo(Composante::class);
      }
      public function equipe() : HasMany {
        return $this->hasMany(Equipe::class);
      }
}
