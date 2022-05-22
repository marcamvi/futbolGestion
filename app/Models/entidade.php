<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;

class entidade extends Model
{
    use HasFactory;
    protected $fillable = ['Nombre'];
    protected $hidden = ['id'];
    
    public function equipo () {
        return $this->hasMany(equipo::class);
    }
    protected function Nombre():Attribute {
        return Attribute::make(
            get: fn ($value)=>$value,
        );
    }
        protected function id():Attribute {
        return Attribute::make(
            get: fn ($value)=>$value,
        );
    }
}