<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Termin extends Model
{
    use HasFactory;

    
    protected $fillable = [
        'datum',
        'vreme',
       
    ];

    public function frizer(){
        return $this->belongsTo(Frizer::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
