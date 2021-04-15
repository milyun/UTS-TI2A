<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'buku';
    protected $primaryKey = 'id';
    protected $keyType = '';
    public $incrementing = false;
    use HasFactory;
}
