<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    use HasFactory;

    // Jika nama tabel tidak sesuai konvensi Laravel, tambahkan properti ini
    protected $table = 'users';

    // Tentukan kolom yang bisa diisi
    protected $guarded = ['id'];
    protected $fillable = ['name', 'email', 'no_hp', 'password'];
}