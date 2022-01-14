<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pelanggan extends Model
{
    /// untuk mengisi data ke dalam tabel pelanggan
    protected $fillable = ['username', 'password', 'nama'];
}
