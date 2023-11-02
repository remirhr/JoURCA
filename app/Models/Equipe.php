<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
class Equipe extends Model
{
    use HasFactory;
    protected $fillable = [
        'NomEquipe',
        'Slogan',
        'idParticipant1',
        'idParticipant2',
        'idParticipant3',
        'idParticipant4',
        'idParticipant5',
        'idParticipant6',
        'idComposante'
    ];
    public function participants() : BelongsTo {
        return $this->belongsTo(Participant::class);
      }
      public function composantes() : BelongsTo {
        return $this->belongsTo(Composante::class);
      }
      public function classement1() : HasMany {
        return $this->hasMany(classement1::class);
      }
      public function Classement2() : HasMany {
        return $this->hasMany(Classement2::class);
      }
}
