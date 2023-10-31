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
        'title'
        
    ];
    public function participant() : HasMany {
        return $this->hasMany(Participant::class);
      }
}