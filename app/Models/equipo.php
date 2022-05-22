<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
class equipo extends Model
{
    use HasFactory;
    
    public function entidade() {
        return $this->belongsTo(entidade::class);
    }
      public function partidos() {
        return $this->hasMany(partido::class);
    }
    
    protected function Nombre_equipo():Attribute {
        return Attribute::make(
            get: fn($value) =>$value,
            set: fn ($value) => [strtolower($value),ucwords($value)]
        );
    }
        
    protected function entidad_id():Attribute {
        return Attribute::make(
            set: fn ($value) => [strtolower($value),ucwords($value)]
        );
    }
}
