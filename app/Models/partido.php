<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;

class partido extends Model
{
    use HasFactory;
  protected $fillable =['Fecha', 'Hora', 'Estado', 'visitante_id', 'local_id', 'resultado_id']; 
  public function equipoLocal() {
        return $this->belongsTo(equipo::class, 'local_id');
    }
      public function equipoVisitante() {
        return $this->belongsTo(equipo::class, 'visitante_id');
    }
      public function resultado() {
        return $this->hasOne(resultado::class);
    }
    
   protected function Fecha():Attribute {
        return Attribute::make(
            get: fn($value) =>$value,
            set: fn ($value) => $value
        );
    }
        
    protected function Hora():Attribute {
        return Attribute::make(
            get: fn($value) =>$value,
            set: fn ($value) => $value
        );
    }
        protected function Estado():Attribute {
        return Attribute::make(
            get: fn($value) =>$value,
            set: fn ($value) => $value
        );
    }
        
    protected function visitante_id():Attribute {
        return Attribute::make(
            get: fn($value) =>$value,
            set: fn ($value) =>$value
        );
    }
            
    protected function local_id():Attribute {
        return Attribute::make(
            get: fn($value) =>$value,
            set: fn ($value) =>$value
        );
    }
            
    protected function resultado_id():Attribute {
        return Attribute::make(
                      get: fn($value) =>$value,
            set: fn ($value) =>$value
        );
    }
}