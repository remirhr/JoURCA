<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
class Classement6 extends Model
{
    use HasFactory;
    protected $fillable = [
        'idEquipeC6'
                
        
    ];
    public function equipe() : BelongsTo {
        return $this->belongsTo(Equipe::class);
      }
}
