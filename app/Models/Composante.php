<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
class Composante extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'img'
        
    ];
    public function participants() : HasMany {
        return $this->hasMany(Participant::class);
      }
      public function equipes() : HasMany {
        return $this->hasMany(Equipe::class);
      }
}