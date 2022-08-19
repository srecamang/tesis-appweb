<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dueno extends Model
{
    protected $table = 'dueno';
    protected $primaryKey = 'rut_dueño';
    use HasFactory;
}
