<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Classement5 extends Model
{
    use HasFactory;
    protected $fillable = [
        'idEquipeC5'
                
        
    ];
    public function equipe() : BelongsTo {
        return $this->belongsTo(Equipe::class,'idEquipeC5');
      }
}
