<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class buku extends Model 
{
    protected $table = 'buku';
    protected $primaryKey = 'id_buku';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'judul',
        'kategori',
        'penerbit',
        'pengarang',
        'jumlah',
        'status'
    ];
};
