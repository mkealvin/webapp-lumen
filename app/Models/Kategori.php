<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    //kolom yang bisa di berikan input
    protected $fillable = ['kategori', 'nama', 'deskripsi', 'harga'];
}
