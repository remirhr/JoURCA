<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use SoftDeletes;
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
    protected $dates = [
      'created_at',
      'deleted_at',
      'started_at',
      'update_at'
    ];
    public function participants() : BelongsTo {
        return $this->belongsTo(Participant::class);
      }
      public function composantes() : BelongsTo {
        return $this->belongsTo(Composante::class,'idComposante');
      }
      public function classement1() : HasMany {
        return $this->hasMany(classement1::class);
      }
      public function Classement2() : HasMany {
        return $this->hasMany(Classement2::class);
      }
      public function Classement3() : HasMany {
        return $this->hasMany(Classement3::class);
      }
      public function Classement4() : HasMany {
        return $this->hasMany(Classement4::class);
      }
      public function Classement5() : HasMany {
        return $this->hasMany(Classement5::class);
      }
      public function Classement6() : HasMany {
        return $this->hasMany(Classement6::class);
      }
      public function Classement7() : HasMany {
        return $this->hasMany(Classement7::class);
      }
      public function Classement8() : HasMany {
        return $this->hasMany(Classement8::class);
      }
      public function Classement9() : HasMany {
        return $this->hasMany(Classement9::class);
      }
      public function Classement10() : HasMany {
        return $this->hasMany(Classement10::class);
      }
      public function Classement11() : HasMany {
        return $this->hasMany(Classement11::class);
      }
      public function Classement12() : HasMany {
        return $this->hasMany(Classement12::class);
      }
      public function Classement13() : HasMany {
        return $this->hasMany(Classement13::class);
      }
      public function Classement14() : HasMany {
        return $this->hasMany(Classement14::class);
      }

      public function Classement15() : HasMany {
        return $this->hasMany(Classement15::class);
      }
    
}
