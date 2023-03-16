<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class curso extends Model
{

    protected $table = "curso";

    protected $fillable = [
        "id_curso",
        "name_curso",
        "categoria",
        "precio"
    ];
    use HasFactory;
}
