<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lapangan extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';
    public $incrementing = false;

    protected $table = 'lapangan';

    protected $fillable = [
        'id',
        'nama',
        'harga',
        'kategori_id',
        'foto',
    ];
}
