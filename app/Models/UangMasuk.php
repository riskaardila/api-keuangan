<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UangMasuk extends Model
{
    use HasFactory;
    
    protected $table = "uang_masuks";
    protected $primaryKey = 'id';
    protected $guarded = [
        'id'
    ];
}
