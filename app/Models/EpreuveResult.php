<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EpreuveResult extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'description',
        'img'
    ];
    public function isAdmin(){
        return false;
    }
}
