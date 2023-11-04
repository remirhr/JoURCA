<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class classement1 extends Model
{
    use HasFactory;
    protected $fillable = [
        'idEquipeC'
                
        
    ];
    public function equipe() : BelongsTo {
        return $this->belongsTo(Equipe::class, 'idEquipeC');
      }
}
