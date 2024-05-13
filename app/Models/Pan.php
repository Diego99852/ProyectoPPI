<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pan extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function Venta()
        {
            return $this->belongsToMany(Venta::class);
        }

        protected $fillable = [
            'nombre',
            'precio',
        ];
}

