<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
class Equipe extends Model
{
    use HasFactory;
    protected $fillable = [
        'NomEquipe',
        'Slogan',
        'pdp',
        'idParticipant1',
        'idParticipant2',
        'idParticipant3',
        'idParticipant4',
        'idParticipant5',
        'idParticipant6'
    ];
    public function participant() : BelongsTo {
        return $this->belongsTo(Participant::class);
      }
}
