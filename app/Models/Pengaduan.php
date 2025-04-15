<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengaduan extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama', 'deskripsi', 'gambar', 'province_id', 'city_id', 'district_id', 'village_id', 'type', 'likes', 'views', 'status', 'user_id'
    ];

    public function province()
    {
        return $this->belongsTo(Province::class);
    }

    public function city()
    {
        return $this->belongsTo(City::class);
    }

    public function district()
    {
        return $this->belongsTo(District::class);
    }

    public function village()
    {
        return $this->belongsTo(Village::class);
    }

    /**
     * Get the user that owns the Pengaduan.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function lastActionBy()
{
    return $this->belongsTo(User::class, 'last_action_by');
}
}
