<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PembelianDtl extends Model
{
    use HasFactory;
    
    protected $table = "popembeliandtl_tabel";
    protected $primaryKey = 'id_popembeliandtl_tabel';
    protected $guarded = [];
}
