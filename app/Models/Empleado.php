<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function Venta()
    {
        return $this->hasMany(Venta::class);
    }
    public function setAvatarAttribute($value)
    {
        $this->attributes['avatar'] = basename($value);
    }
    
    protected $fillable = ['apellido1','apellido2','nombrepila','sueldo','avatar'];
}

