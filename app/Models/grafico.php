<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class grafico extends Model
{
    use HasFactory;

    protected $fillable = [
        'sensorE',
        'sensorD',
        'diferenca',
        'servo',
    ];
}
