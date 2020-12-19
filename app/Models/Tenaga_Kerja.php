<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tenaga_Kerja extends Model
{
    use HasFactory;
    protected $table = 'produktivitas_perkebunan';

    protected $filllable = ['kecamatan_id','tanaman_perkebunan_id','nilai'] ;
}
