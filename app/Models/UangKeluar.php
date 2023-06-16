<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class UangKeluar extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = "uang_keluars";
    protected $primaryKey = 'id';
    protected $guarded = [
        'id'
    ];
}
