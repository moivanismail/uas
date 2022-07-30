<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Example extends Model
{
    use HasFactory;
    protected $table = 'examples';
    protected $fillable = [
        'nama', 'alamat', 'kota', 'provinsi', 'lamakerja', 'kantor', 'departemen', 'jabatan'
    ];
}
