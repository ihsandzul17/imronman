<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class StaffSeeder extends Seeder
{
    public function run()
    {
        // Buat user baru atau ambil user yang sudah ada
        $user = User::firstOrCreate(
            ['email' => 'jabar@gmail.com'],
            [
                'name' => 'Staff_jabar',
                'password' => Hash::make('0987654321'),
                'no_hp' => '080987654321',
                'role' => 'staff'
            ]
        );

        // Gunakan ID user yang diambil atau dibuat
        DB::table('pengaduans')->insert([
            'nama' => 'Syamil Fauzan Maranri',
            'province_id' => 11,
            'city_id' => 156,
            'district_id' => 937,
            'village_id' => 3876,
            'type' => 'Sosial',
            'deskripsi' => 'AKJJJJJJJJJJJJJJJJJJSHLAHSHAJKHASKJASJHSLAKSHAKLSJ',
            'gambar' => 'pengaduan/6zPOAzmGccIqmXyYrNz0I1aIdKaHMQep6QxVfpDV.jpg',
            'updated_at' => now(),
            'created_at' => now(),
            'user_id' => $user->id // Isi user_id dengan ID user yang sesuai
        ]);
    }
}