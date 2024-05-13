<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
    use HasFactory;

    public function Empleado()
    {
        return $this->belongsTo(Empleado::class);
    }
    public function Pan()
    {
            return $this->belongsToMany(Pan::class);
    }
    protected $fillable = [
        'Total',
        'Fecha',
        'Id_empleados',
    ];
}


