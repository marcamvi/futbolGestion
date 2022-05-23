<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class resultado extends Model
{
    use HasFactory;

    public function partido () {
        return $this->hasOne(partido::class);
    }
    protected function Resultado_equipo_visitante():Attribute {
        return Attribute::make(
            get: fn($value) =>$value,
            set: fn ($value) => $value
        );
    }
            protected function Resultado_equipo_local():Attribute {
        return Attribute::make(
            get: fn($value) =>$value,
            set: fn ($value) => $value
        );
    }
}
