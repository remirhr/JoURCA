<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use SoftDeletes;
class Participant extends Model
{
    use HasFactory;
    protected $fillable = [
               'id',
                'NomP',
                'PrenomP',
                'DateDeNaissance',
                'NumeroEtudiant',
                'idComposante'
    ];
    public function composantes() : BelongsTo {
        return $this->belongsTo(Composante::class);
      }
      public function equipes() : HasMany {
        return $this->hasMany(Equipe::class);
      }

      protected $dates = [
        'created_at',
        'deleted_at',
        'started_at',
        'update_at'
      ];
}
