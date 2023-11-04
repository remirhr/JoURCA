<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Classement15 extends Model
{
    use HasFactory;
    protected $fillable = [
        'idEquipeC15'
                
        
    ];
    public function equipe() : BelongsTo {
        return $this->belongsTo(Equipe::class,'idEquipeC15');
      }
}
