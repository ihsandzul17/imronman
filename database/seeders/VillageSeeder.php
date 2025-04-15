<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; // Add this line

class VillageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $villages = [
            ['id' => 1, 'district_id' => 1, 'name' => 'Lantik'],
            ['id' => 2, 'district_id' => 1, 'name' => 'Labuhan Bakti'],
            ['id' => 3, 'district_id' => 1, 'name' => 'Lugu'],
            ['id' => 4, 'district_id' => 1, 'name' => 'Latiung'],
            ['id' => 5, 'district_id' => 1, 'name' => 'Labuhan Bajau'],
            ['id' => 6, 'district_id' => 2, 'name' => 'Sinabang'],
            ['id' => 7, 'district_id' => 2, 'name' => 'Air Dingin'],
            ['id' => 8, 'district_id' => 2, 'name' => 'Luan Balu'],
            ['id' => 9, 'district_id' => 2, 'name' => 'Suka Karya'],
            ['id' => 10, 'district_id' => 2, 'name' => 'Suka Jaya'],
            ['id' => 11, 'district_id' => 3, 'name' => 'Lhok Dalam'],
            ['id' => 12, 'district_id' => 3, 'name' => 'Lhok Makmur'],
            ['id' => 13, 'district_id' => 3, 'name' => 'Lhok Pauh'],
            ['id' => 14, 'district_id' => 3, 'name' => 'Lhok Seudeu'],
            ['id' => 15, 'district_id' => 3, 'name' => 'Lhok Sialang'],
            ['id' => 16, 'district_id' => 4, 'name' => 'Lhok Bengkuang'],
            ['id' => 17, 'district_id' => 4, 'name' => 'Lhok Bubon'],
            ['id' => 18, 'district_id' => 4, 'name' => 'Lhok Iboih'],
            ['id' => 19, 'district_id' => 4, 'name' => 'Lhok Kruet'],
            ['id' => 20, 'district_id' => 4, 'name' => 'Lhok Meureubo'],
            ['id' => 21, 'district_id' => 5, 'name' => 'Lhok Meuraksa'],
            ['id' => 22, 'district_id' => 5, 'name' => 'Lhok Pusong'],
            ['id' => 23, 'district_id' => 5, 'name' => 'Lhok Rukam'],
            ['id' => 24, 'district_id' => 5, 'name' => 'Lhok Seumot'],
            ['id' => 25, 'district_id' => 5, 'name' => 'Lhok Sukon'],
            ['id' => 26, 'district_id' => 6, 'name' => 'Teluk Dalam'],
            ['id' => 27, 'district_id' => 6, 'name' => 'Teluk Jaya'],
            ['id' => 28, 'district_id' => 6, 'name' => 'Teluk Makmur'],
            ['id' => 29, 'district_id' => 6, 'name' => 'Teluk Nibung'],
            ['id' => 30, 'district_id' => 6, 'name' => 'Teluk Pusaka'],
            ['id' => 31, 'district_id' => 7, 'name' => 'Simeulue Barat'],
            ['id' => 32, 'district_id' => 7, 'name' => 'Simeulue Barat Jaya'],
            ['id' => 33, 'district_id' => 7, 'name' => 'Simeulue Barat Makmur'],
            ['id' => 34, 'district_id' => 7, 'name' => 'Simeulue Barat Sejahtera'],
            ['id' => 35, 'district_id' => 7, 'name' => 'Simeulue Barat Suka'],
            ['id' => 36, 'district_id' => 8, 'name' => 'Salang'],
            ['id' => 37, 'district_id' => 8, 'name' => 'Salang Jaya'],
            ['id' => 38, 'district_id' => 8, 'name' => 'Salang Makmur'],
            ['id' => 39, 'district_id' => 8, 'name' => 'Salang Sejahtera'],
            ['id' => 40, 'district_id' => 8, 'name' => 'Salang Suka'],
            ['id' => 41, 'district_id' => 9, 'name' => 'Alafan'],
            ['id' => 42, 'district_id' => 9, 'name' => 'Alafan Jaya'],
            ['id' => 43, 'district_id' => 9, 'name' => 'Alafan Makmur'],
            ['id' => 44, 'district_id' => 9, 'name' => 'Alafan Sejahtera'],
            ['id' => 45, 'district_id' => 9, 'name' => 'Alafan Suka'],
            ['id' => 46, 'district_id' => 10, 'name' => 'Singkil'],
            ['id' => 47, 'district_id' => 10, 'name' => 'Singkil Jaya'],
            ['id' => 48, 'district_id' => 10, 'name' => 'Singkil Makmur'],
            ['id' => 49, 'district_id' => 10, 'name' => 'Singkil Sejahtera'],
            ['id' => 50, 'district_id' => 10, 'name' => 'Singkil Suka'],
            ['id' => 51, 'district_id' => 11, 'name' => 'Singkil Utara'],
            ['id' => 52, 'district_id' => 11, 'name' => 'Singkil Utara Jaya'],
            ['id' => 53, 'district_id' => 11, 'name' => 'Singkil Utara Makmur'],
            ['id' => 54, 'district_id' => 11, 'name' => 'Singkil Utara Sejahtera'],
            ['id' => 55, 'district_id' => 11, 'name' => 'Singkil Utara Suka'],
            ['id' => 56, 'district_id' => 12, 'name' => 'Kuala Baru'],
            ['id' => 57, 'district_id' => 12, 'name' => 'Kuala Baru Jaya'],
            ['id' => 58, 'district_id' => 12, 'name' => 'Kuala Baru Makmur'],
            ['id' => 59, 'district_id' => 12, 'name' => 'Kuala Baru Sejahtera'],
            ['id' => 60, 'district_id' => 12, 'name' => 'Kuala Baru Suka'],
            ['id' => 61, 'district_id' => 13, 'name' => 'Simpang Kanan'],
            ['id' => 62, 'district_id' => 13, 'name' => 'Simpang Kanan Jaya'],
            ['id' => 63, 'district_id' => 13, 'name' => 'Simpang Kanan Makmur'],
            ['id' => 64, 'district_id' => 13, 'name' => 'Simpang Kanan Sejahtera'],
            ['id' => 65, 'district_id' => 13, 'name' => 'Simpang Kanan Suka'],
            ['id' => 66, 'district_id' => 14, 'name' => 'Gunung Meriah'],
            ['id' => 67, 'district_id' => 14, 'name' => 'Gunung Meriah Jaya'],
            ['id' => 68, 'district_id' => 14, 'name' => 'Gunung Meriah Makmur'],
            ['id' => 69, 'district_id' => 14, 'name' => 'Gunung Meriah Sejahtera'],
            ['id' => 70, 'district_id' => 14, 'name' => 'Gunung Meriah Suka'],
            ['id' => 71, 'district_id' => 15, 'name' => 'Danau Paris'],
            ['id' => 72, 'district_id' => 15, 'name' => 'Danau Paris Jaya'],
            ['id' => 73, 'district_id' => 15, 'name' => 'Danau Paris Makmur'],
            ['id' => 74, 'district_id' => 15, 'name' => 'Danau Paris Sejahtera'],
            ['id' => 75, 'district_id' => 15, 'name' => 'Danau Paris Suka'],
            ['id' => 76, 'district_id' => 16, 'name' => 'Suro Makmur'],
            ['id' => 77, 'district_id' => 16, 'name' => 'Suro Makmur Jaya'],
            ['id' => 78, 'district_id' => 16, 'name' => 'Suro Makmur Makmur'],
            ['id' => 79, 'district_id' => 16, 'name' => 'Suro Makmur Sejahtera'],
            ['id' => 80, 'district_id' => 16, 'name' => 'Suro Makmur Suka'],
            ['id' => 81, 'district_id' => 17, 'name' => 'Singkohor'],
            ['id' => 82, 'district_id' => 17, 'name' => 'Singkohor Jaya'],
            ['id' => 83, 'district_id' => 17, 'name' => 'Singkohor Makmur'],
            ['id' => 84, 'district_id' => 17, 'name' => 'Singkohor Sejahtera'],
            ['id' => 85, 'district_id' => 17, 'name' => 'Singkohor Suka'],
            ['id' => 86, 'district_id' => 18, 'name' => 'Kota Baharu'],
            ['id' => 87, 'district_id' => 18, 'name' => 'Kota Baharu Jaya'],
            ['id' => 88, 'district_id' => 18, 'name' => 'Kota Baharu Makmur'],
            ['id' => 89, 'district_id' => 18, 'name' => 'Kota Baharu Sejahtera'],
            ['id' => 90, 'district_id' => 18, 'name' => 'Kota Baharu Suka'],
            ['id' => 91, 'district_id' => 19, 'name' => 'Trumon'],
            ['id' => 92, 'district_id' => 19, 'name' => 'Trumon Jaya'],
            ['id' => 93, 'district_id' => 19, 'name' => 'Trumon Makmur'],
            ['id' => 94, 'district_id' => 19, 'name' => 'Trumon Sejahtera'],
            ['id' => 95, 'district_id' => 19, 'name' => 'Trumon Suka'],
            ['id' => 96, 'district_id' => 20, 'name' => 'Trumon Timur'],
            ['id' => 97, 'district_id' => 20, 'name' => 'Trumon Timur Jaya'],
            ['id' => 98, 'district_id' => 20, 'name' => 'Trumon Timur Makmur'],
            ['id' => 99, 'district_id' => 20, 'name' => 'Trumon Timur Sejahtera'],
            ['id' => 100, 'district_id' => 20, 'name' => 'Trumon Timur Suka'],
            ['id' => 101, 'district_id' => 21, 'name' => 'Trumon Tengah'],
            ['id' => 102, 'district_id' => 21, 'name' => 'Trumon Tengah Jaya'],
            ['id' => 103, 'district_id' => 21, 'name' => 'Trumon Tengah Makmur'],
            ['id' => 104, 'district_id' => 21, 'name' => 'Trumon Tengah Sejahtera'],
            ['id' => 105, 'district_id' => 21, 'name' => 'Trumon Tengah Suka'],
            ['id' => 106, 'district_id' => 22, 'name' => 'Bakongan'],
            ['id' => 107, 'district_id' => 22, 'name' => 'Bakongan Jaya'],
            ['id' => 108, 'district_id' => 22, 'name' => 'Bakongan Makmur'],
            ['id' => 109, 'district_id' => 22, 'name' => 'Bakongan Sejahtera'],
            ['id' => 110, 'district_id' => 22, 'name' => 'Bakongan Suka'],
            ['id' => 111, 'district_id' => 23, 'name' => 'Bakongan Timur'],
            ['id' => 112, 'district_id' => 23, 'name' => 'Bakongan Timur Jaya'],
            ['id' => 113, 'district_id' => 23, 'name' => 'Bakongan Timur Makmur'],
            ['id' => 114, 'district_id' => 23, 'name' => 'Bakongan Timur Sejahtera'],
            ['id' => 115, 'district_id' => 23, 'name' => 'Bakongan Timur Suka'],
            ['id' => 116, 'district_id' => 24, 'name' => 'Kota Bahagia'],
            ['id' => 117, 'district_id' => 24, 'name' => 'Kota Bahagia Jaya'],
            ['id' => 118, 'district_id' => 24, 'name' => 'Kota Bahagia Makmur'],
            ['id' => 119, 'district_id' => 24, 'name' => 'Kota Bahagia Sejahtera'],
            ['id' => 120, 'district_id' => 24, 'name' => 'Kota Bahagia Suka'],
            ['id' => 121, 'district_id' => 25, 'name' => 'Kluet Selatan'],
            ['id' => 122, 'district_id' => 25, 'name' => 'Kluet Selatan Jaya'],
            ['id' => 123, 'district_id' => 25, 'name' => 'Kluet Selatan Makmur'],
            ['id' => 124, 'district_id' => 25, 'name' => 'Kluet Selatan Sejahtera'],
            ['id' => 125, 'district_id' => 25, 'name' => 'Kluet Selatan Suka'],
            ['id' => 126, 'district_id' => 26, 'name' => 'Kluet Timur'],
            ['id' => 127, 'district_id' => 26, 'name' => 'Kluet Timur Jaya'],
            ['id' => 128, 'district_id' => 26, 'name' => 'Kluet Timur Makmur'],
            ['id' => 129, 'district_id' => 26, 'name' => 'Kluet Timur Sejahtera'],
            ['id' => 130, 'district_id' => 26, 'name' => 'Kluet Timur Suka'],
            ['id' => 131, 'district_id' => 27, 'name' => 'Kluet Utara'],
            ['id' => 132, 'district_id' => 27, 'name' => 'Kluet Utara Jaya'],
            ['id' => 133, 'district_id' => 27, 'name' => 'Kluet Utara Makmur'],
            ['id' => 134, 'district_id' => 27, 'name' => 'Kluet Utara Sejahtera'],
            ['id' => 135, 'district_id' => 27, 'name' => 'Kluet Utara Suka'],
            ['id' => 136, 'district_id' => 28, 'name' => 'Kluet Tengah'],
            ['id' => 137, 'district_id' => 28, 'name' => 'Kluet Tengah Jaya'],
            ['id' => 138, 'district_id' => 28, 'name' => 'Kluet Tengah Makmur'],
            ['id' => 139, 'district_id' => 28, 'name' => 'Kluet Tengah Sejahtera'],
            ['id' => 140, 'district_id' => 28, 'name' => 'Kluet Tengah Suka'],
            ['id' => 141, 'district_id' => 29, 'name' => 'Tapaktuan'],
            ['id' => 142, 'district_id' => 29, 'name' => 'Tapaktuan Jaya'],
            ['id' => 143, 'district_id' => 29, 'name' => 'Tapaktuan Makmur'],
            ['id' => 144, 'district_id' => 29, 'name' => 'Tapaktuan Sejahtera'],
            ['id' => 145, 'district_id' => 29, 'name' => 'Tapaktuan Suka'],
            ['id' => 146, 'district_id' => 30, 'name' => 'Sama Dua'],
            ['id' => 147, 'district_id' => 30, 'name' => 'Sama Dua Jaya'],
            ['id' => 148, 'district_id' => 30, 'name' => 'Sama Dua Makmur'],
            ['id' => 149, 'district_id' => 30, 'name' => 'Sama Dua Sejahtera'],
            ['id' => 150, 'district_id' => 30, 'name' => 'Sama Dua Suka'],
            ['id' => 151, 'district_id' => 31, 'name' => 'Sawang'],
            ['id' => 152, 'district_id' => 31, 'name' => 'Sawang Jaya'],
            ['id' => 153, 'district_id' => 31, 'name' => 'Sawang Makmur'],
            ['id' => 154, 'district_id' => 31, 'name' => 'Sawang Sejahtera'],
            ['id' => 155, 'district_id' => 31, 'name' => 'Sawang Suka'],
            ['id' => 156, 'district_id' => 32, 'name' => 'Meukek'],
            ['id' => 157, 'district_id' => 32, 'name' => 'Meukek Jaya'],
            ['id' => 158, 'district_id' => 32, 'name' => 'Meukek Makmur'],
            ['id' => 159, 'district_id' => 32, 'name' => 'Meukek Sejahtera'],
            ['id' => 160, 'district_id' => 32, 'name' => 'Meukek Suka'],
            ['id' => 161, 'district_id' => 33, 'name' => 'Labuhan Haji'],
            ['id' => 162, 'district_id' => 33, 'name' => 'Labuhan Haji Jaya'],
            ['id' => 163, 'district_id' => 33, 'name' => 'Labuhan Haji Makmur'],
            ['id' => 164, 'district_id' => 33, 'name' => 'Labuhan Haji Sejahtera'],
            ['id' => 165, 'district_id' => 33, 'name' => 'Labuhan Haji Suka'],
            ['id' => 166, 'district_id' => 34, 'name' => 'Labuhan Haji Timur'],
            ['id' => 167, 'district_id' => 34, 'name' => 'Labuhan Haji Timur Jaya'],
            ['id' => 168, 'district_id' => 34, 'name' => 'Labuhan Haji Timur Makmur'],
            ['id' => 169, 'district_id' => 34, 'name' => 'Labuhan Haji Timur Sejahtera'],
            ['id' => 170, 'district_id' => 34, 'name' => 'Labuhan Haji Timur Suka'],
            ['id' => 171, 'district_id' => 35, 'name' => 'Labuhan Haji Barat'],
            ['id' => 172, 'district_id' => 35, 'name' => 'Labuhan Haji Barat Jaya'],
            ['id' => 173, 'district_id' => 35, 'name' => 'Labuhan Haji Barat Makmur'],
            ['id' => 174, 'district_id' => 35, 'name' => 'Labuhan Haji Barat Sejahtera'],
            ['id' => 175, 'district_id' => 35, 'name' => 'Labuhan Haji Barat Suka'],
            ['id' => 176, 'district_id' => 36, 'name' => 'Babussalam'],
            ['id' => 177, 'district_id' => 36, 'name' => 'Kuta Tengah'],
            ['id' => 178, 'district_id' => 36, 'name' => 'Kuta Kepar'],
            ['id' => 179, 'district_id' => 36, 'name' => 'Kuta Buluh'],
            ['id' => 180, 'district_id' => 37, 'name' => 'Badar'],
            ['id' => 181, 'district_id' => 37, 'name' => 'Kuta Lang-Lang'],
            ['id' => 182, 'district_id' => 37, 'name' => 'Kuta Tinggi'],
            ['id' => 183, 'district_id' => 37, 'name' => 'Kuta Batu'],
            ['id' => 184, 'district_id' => 38, 'name' => 'Bambel'],
            ['id' => 185, 'district_id' => 38, 'name' => 'Kuta Antara'],
            ['id' => 186, 'district_id' => 38, 'name' => 'Kuta Rih'],
            ['id' => 187, 'district_id' => 38, 'name' => 'Kuta Cingkam'],
            ['id' => 188, 'district_id' => 39, 'name' => 'Babul Rahmah'],
            ['id' => 189, 'district_id' => 39, 'name' => 'Kuta Mbelin'],
            ['id' => 190, 'district_id' => 39, 'name' => 'Kuta Pengkih'],
            ['id' => 191, 'district_id' => 39, 'name' => 'Kuta Tengah'],
            ['id' => 192, 'district_id' => 40, 'name' => 'Babul Makmur'],
            ['id' => 193, 'district_id' => 40, 'name' => 'Kuta Galuh'],
            ['id' => 194, 'district_id' => 40, 'name' => 'Kuta Buluh'],
            ['id' => 195, 'district_id' => 40, 'name' => 'Kuta Mbaru'],
            ['id' => 196, 'district_id' => 41, 'name' => 'Bukit Tusam'],
            ['id' => 197, 'district_id' => 41, 'name' => 'Kuta Cingkam'],
            ['id' => 198, 'district_id' => 41, 'name' => 'Kuta Rih'],
            ['id' => 199, 'district_id' => 41, 'name' => 'Kuta Antara'],
            ['id' => 200, 'district_id' => 42, 'name' => 'Darul Hasanah'],
            ['id' => 201, 'district_id' => 42, 'name' => 'Kuta Kepar'],
            ['id' => 202, 'district_id' => 42, 'name' => 'Kuta Tengah'],
            ['id' => 203, 'district_id' => 42, 'name' => 'Kuta Buluh'],
            ['id' => 204, 'district_id' => 43, 'name' => 'Deleng Pokhisen'],
            ['id' => 205, 'district_id' => 43, 'name' => 'Kuta Lang-Lang'],
            ['id' => 206, 'district_id' => 43, 'name' => 'Kuta Tinggi'],
            ['id' => 207, 'district_id' => 43, 'name' => 'Kuta Batu'],
            ['id' => 208, 'district_id' => 44, 'name' => 'Ketambe'],
            ['id' => 209, 'district_id' => 44, 'name' => 'Kuta Mbelin'],
            ['id' => 210, 'district_id' => 44, 'name' => 'Kuta Pengkih'],
            ['id' => 211, 'district_id' => 44, 'name' => 'Kuta Tengah'],
            ['id' => 212, 'district_id' => 45, 'name' => 'Lawe Alas'],
            ['id' => 213, 'district_id' => 45, 'name' => 'Kuta Galuh'],
            ['id' => 214, 'district_id' => 45, 'name' => 'Kuta Buluh'],
            ['id' => 215, 'district_id' => 45, 'name' => 'Kuta Mbaru'],
            ['id' => 216, 'district_id' => 46, 'name' => 'Lawe Bulan'],
            ['id' => 217, 'district_id' => 46, 'name' => 'Kuta Cingkam'],
            ['id' => 218, 'district_id' => 46, 'name' => 'Kuta Rih'],
            ['id' => 219, 'district_id' => 46, 'name' => 'Kuta Antara'],
            ['id' => 220, 'district_id' => 47, 'name' => 'Lawe Sigala-Gala'],
            ['id' => 221, 'district_id' => 47, 'name' => 'Kuta Kepar'],
            ['id' => 222, 'district_id' => 47, 'name' => 'Kuta Tengah'],
            ['id' => 223, 'district_id' => 47, 'name' => 'Kuta Buluh'],
            ['id' => 224, 'district_id' => 48, 'name' => 'Lawe Sumur'],
            ['id' => 225, 'district_id' => 48, 'name' => 'Kuta Lang-Lang'],
            ['id' => 226, 'district_id' => 48, 'name' => 'Kuta Tinggi'],
            ['id' => 227, 'district_id' => 48, 'name' => 'Kuta Batu'],
            ['id' => 228, 'district_id' => 49, 'name' => 'Leuser'],
            ['id' => 229, 'district_id' => 49, 'name' => 'Kuta Mbelin'],
            ['id' => 230, 'district_id' => 49, 'name' => 'Kuta Pengkih'],
            ['id' => 231, 'district_id' => 49, 'name' => 'Kuta Tengah'],
            ['id' => 232, 'district_id' => 50, 'name' => 'Semadam'],
            ['id' => 233, 'district_id' => 50, 'name' => 'Kuta Galuh'],
            ['id' => 234, 'district_id' => 50, 'name' => 'Kuta Buluh'],
            ['id' => 235, 'district_id' => 50, 'name' => 'Kuta Mbaru'],
            ['id' => 236, 'district_id' => 51, 'name' => 'Lawe Hijo'],
            ['id' => 237, 'district_id' => 51, 'name' => 'Tanoh Alas'],
            ['id' => 238, 'district_id' => 51, 'name' => 'Lawe Sumur'],
            ['id' => 239, 'district_id' => 51, 'name' => 'Lawe Sawah'],
            ['id' => 240, 'district_id' => 52, 'name' => 'Banda Alam'],
            ['id' => 241, 'district_id' => 52, 'name' => 'Blang Rambong'],
            ['id' => 242, 'district_id' => 52, 'name' => 'Paya Bili'],
            ['id' => 243, 'district_id' => 52, 'name' => 'Keude Dua'],
            ['id' => 244, 'district_id' => 53, 'name' => 'Birem Bayeun'],
            ['id' => 245, 'district_id' => 53, 'name' => 'Alue Ie Mirah'],
            ['id' => 246, 'district_id' => 53, 'name' => 'Gampong Teungoh'],
            ['id' => 247, 'district_id' => 53, 'name' => 'Buket Seulamat'],
            ['id' => 248, 'district_id' => 54, 'name' => 'Darul Aman'],
            ['id' => 249, 'district_id' => 54, 'name' => 'Seuneubok Aceh'],
            ['id' => 250, 'district_id' => 54, 'name' => 'Buket Panyang'],
            ['id' => 251, 'district_id' => 54, 'name' => 'Buket Meurak'],
            ['id' => 252, 'district_id' => 55, 'name' => 'Darul Falah'],
            ['id' => 253, 'district_id' => 55, 'name' => 'Seuneubok Baro'],
            ['id' => 254, 'district_id' => 55, 'name' => 'Paya Seungat'],
            ['id' => 255, 'district_id' => 55, 'name' => 'Pante Labu'],
            ['id' => 256, 'district_id' => 56, 'name' => 'Darul Ihsan'],
            ['id' => 257, 'district_id' => 56, 'name' => 'Gampong Jalan'],
            ['id' => 258, 'district_id' => 56, 'name' => 'Paya Ketenggar'],
            ['id' => 259, 'district_id' => 56, 'name' => 'Buket Rayeuk'],
            ['id' => 260, 'district_id' => 57, 'name' => 'Idi Rayeuk'],
            ['id' => 261, 'district_id' => 57, 'name' => 'Seuneubok Dalam'],
            ['id' => 262, 'district_id' => 57, 'name' => 'Kampung Jawa'],
            ['id' => 263, 'district_id' => 57, 'name' => 'Teupin Pukat'],
            ['id' => 264, 'district_id' => 58, 'name' => 'Idi Timur'],
            ['id' => 265, 'district_id' => 58, 'name' => 'Seuneubok Pangou'],
            ['id' => 266, 'district_id' => 58, 'name' => 'Matang Rayeuk'],
            ['id' => 267, 'district_id' => 58, 'name' => 'Seuneubok Simpang'],
            ['id' => 268, 'district_id' => 59, 'name' => 'Idi Tunong'],
            ['id' => 269, 'district_id' => 59, 'name' => 'Gampong Blang'],
            ['id' => 270, 'district_id' => 59, 'name' => 'Paya Tampah'],
            ['id' => 271, 'district_id' => 59, 'name' => 'Alue Bu Tuha'],
            ['id' => 272, 'district_id' => 60, 'name' => 'Indra Makmu'],
            ['id' => 273, 'district_id' => 60, 'name' => 'Paya Gajah'],
            ['id' => 274, 'district_id' => 60, 'name' => 'Blang Nisam'],
            ['id' => 275, 'district_id' => 60, 'name' => 'Seuneubok Tuha'],
            ['id' => 276, 'district_id' => 61, 'name' => 'Julok'],
            ['id' => 277, 'district_id' => 61, 'name' => 'Blang Pauh Sa'],
            ['id' => 278, 'district_id' => 61, 'name' => 'Buket Bata'],
            ['id' => 279, 'district_id' => 61, 'name' => 'Keude Julok'],
            ['id' => 280, 'district_id' => 62, 'name' => 'Madat'],
            ['id' => 281, 'district_id' => 62, 'name' => 'Blang Geulumpang'],
            ['id' => 282, 'district_id' => 62, 'name' => 'Tanjong Minjei'],
            ['id' => 283, 'district_id' => 62, 'name' => 'Gampong Blang'],
            ['id' => 284, 'district_id' => 63, 'name' => 'Nurussalam'],
            ['id' => 285, 'district_id' => 63, 'name' => 'Buket Panyang'],
            ['id' => 286, 'district_id' => 63, 'name' => 'Paya Demam'],
            ['id' => 287, 'district_id' => 63, 'name' => 'Blang Panjou'],
            ['id' => 288, 'district_id' => 64, 'name' => 'Pante Bidari'],
            ['id' => 289, 'district_id' => 64, 'name' => 'Alue Ie Mirah'],
            ['id' => 290, 'district_id' => 64, 'name' => 'Buket Linteung'],
            ['id' => 291, 'district_id' => 64, 'name' => 'Tanjung Kapai'],
            ['id' => 292, 'district_id' => 65, 'name' => 'Peudawa'],
            ['id' => 293, 'district_id' => 65, 'name' => 'Blang Seunong'],
            ['id' => 294, 'district_id' => 65, 'name' => 'Paya Demam Dua'],
            ['id' => 295, 'district_id' => 65, 'name' => 'Seuneubok Aceh'],
            ['id' => 296, 'district_id' => 66, 'name' => 'Peureulak'],
            ['id' => 297, 'district_id' => 66, 'name' => 'Buket Meudang Ara'],
            ['id' => 298, 'district_id' => 66, 'name' => 'Paya Lipah'],
            ['id' => 299, 'district_id' => 66, 'name' => 'Blang Peureulak'],
            ['id' => 300, 'district_id' => 67, 'name' => 'Alue Bu Jalan'],
            ['id' => 301, 'district_id' => 67, 'name' => 'Blang Baro'],
            ['id' => 302, 'district_id' => 67, 'name' => 'Blang Simpo'],
            ['id' => 303, 'district_id' => 67, 'name' => 'Bukit Selamat'],
            ['id' => 304, 'district_id' => 68, 'name' => 'Alue Lhok'],
            ['id' => 305, 'district_id' => 68, 'name' => 'Keude Peureulak'],
            ['id' => 306, 'district_id' => 68, 'name' => 'Paya Gajah'],
            ['id' => 307, 'district_id' => 69, 'name' => 'Paya Tampah'],
            ['id' => 308, 'district_id' => 69, 'name' => 'Kuta Baro'],
            ['id' => 309, 'district_id' => 69, 'name' => 'Tualang'],
            ['id' => 310, 'district_id' => 70, 'name' => 'Paya Demam'],
            ['id' => 311, 'district_id' => 70, 'name' => 'Seuneubok Baro'],
            ['id' => 312, 'district_id' => 70, 'name' => 'Blang Panjou'],
            ['id' => 313, 'district_id' => 71, 'name' => 'Lawe Sigala'],
            ['id' => 314, 'district_id' => 71, 'name' => 'Bukit Merdeka'],
            ['id' => 315, 'district_id' => 71, 'name' => 'Paya Bakong'],
            ['id' => 316, 'district_id' => 72, 'name' => 'Simpang Jernih'],
            ['id' => 317, 'district_id' => 72, 'name' => 'Rantau Panjang'],
            ['id' => 318, 'district_id' => 72, 'name' => 'Alur Teh'],
            ['id' => 319, 'district_id' => 73, 'name' => 'Blang Gleum'],
            ['id' => 320, 'district_id' => 73, 'name' => 'Tanjong Minjei'],
            ['id' => 321, 'district_id' => 73, 'name' => 'Matang Pudeng'],
            ['id' => 322, 'district_id' => 74, 'name' => 'Alue Gadeng'],
            ['id' => 323, 'district_id' => 74, 'name' => 'Sungai Raya'],
            ['id' => 324, 'district_id' => 74, 'name' => 'Paya Bili'],
            ['id' => 325, 'district_id' => 75, 'name' => 'Tansaran Bidin'],
            ['id' => 326, 'district_id' => 75, 'name' => 'Jamat'],
            ['id' => 327, 'district_id' => 75, 'name' => 'Merah Mege'],
            ['id' => 328, 'district_id' => 76, 'name' => 'Lut Tawar'],
            ['id' => 329, 'district_id' => 76, 'name' => 'Bebesen'],
            ['id' => 330, 'district_id' => 76, 'name' => 'Mendung'],
            ['id' => 331, 'district_id' => 77, 'name' => 'Paya Kolak'],
            ['id' => 332, 'district_id' => 77, 'name' => 'Bies Baru'],
            ['id' => 333, 'district_id' => 77, 'name' => 'Tanjung'],
            ['id' => 334, 'district_id' => 78, 'name' => 'Ujung Temetas'],
            ['id' => 335, 'district_id' => 78, 'name' => 'Bintang'],
            ['id' => 336, 'district_id' => 78, 'name' => 'Merodot'],
            ['id' => 337, 'district_id' => 79, 'name' => 'Celala'],
            ['id' => 338, 'district_id' => 79, 'name' => 'Pasir Putih'],
            ['id' => 339, 'district_id' => 79, 'name' => 'Tengah Rayeuk'],
            ['id' => 340, 'district_id' => 80, 'name' => 'Jagong Jeget'],
            ['id' => 341, 'district_id' => 80, 'name' => 'Tanjung Mas'],
            ['id' => 342, 'district_id' => 80, 'name' => 'Blang Ara'],
            ['id' => 343, 'district_id' => 81, 'name' => 'Ketol'],
            ['id' => 344, 'district_id' => 81, 'name' => 'Bukit Mulie'],
            ['id' => 345, 'district_id' => 81, 'name' => 'Paya Tungel'],
            ['id' => 346, 'district_id' => 82, 'name' => 'Kebayakan'],
            ['id' => 347, 'district_id' => 82, 'name' => 'Mungkur'],
            ['id' => 348, 'district_id' => 82, 'name' => 'Bebangka'],
            ['id' => 349, 'district_id' => 83, 'name' => 'Kute Panang'],
            ['id' => 350, 'district_id' => 83, 'name' => 'Pantan Tengah'],
            ['id' => 351, 'district_id' => 83, 'name' => 'Buntul Gayo'],
            ['id' => 352, 'district_id' => 84, 'name' => 'Linge'],
            ['id' => 353, 'district_id' => 84, 'name' => 'Pantan Nangka'],
            ['id' => 354, 'district_id' => 84, 'name' => 'Bukit Tusam'],
            ['id' => 355, 'district_id' => 85, 'name' => 'Lut Tawar'],
            ['id' => 356, 'district_id' => 85, 'name' => 'Simpang Tiga'],
            ['id' => 357, 'district_id' => 85, 'name' => 'Paya Ilang'],
            ['id' => 358, 'district_id' => 86, 'name' => 'Pegasing'],
            ['id' => 359, 'district_id' => 86, 'name' => 'Tansaran'],
            ['id' => 360, 'district_id' => 86, 'name' => 'Bebesen'],
            ['id' => 361, 'district_id' => 87, 'name' => 'Rusip Antara'],
            ['id' => 362, 'district_id' => 87, 'name' => 'Telege'],
            ['id' => 363, 'district_id' => 87, 'name' => 'Mendele'],
            ['id' => 364, 'district_id' => 88, 'name' => 'Silih Nara'],
            ['id' => 365, 'district_id' => 88, 'name' => 'Gunung Suku'],
            ['id' => 366, 'district_id' => 88, 'name' => 'Pasir Putih'],
            ['id' => 367, 'district_id' => 89, 'name' => 'Arongan Lambalek'],
            ['id' => 368, 'district_id' => 89, 'name' => 'Kuala Bhee'],
            ['id' => 369, 'district_id' => 89, 'name' => 'Paya Peunaga'],
            ['id' => 370, 'district_id' => 90, 'name' => 'Bubon'],
            ['id' => 371, 'district_id' => 90, 'name' => 'Gunong Pulo'],
            ['id' => 372, 'district_id' => 90, 'name' => 'Alue Lhok'],
            ['id' => 373, 'district_id' => 91, 'name' => 'Johan Pahlawan'],
            ['id' => 374, 'district_id' => 91, 'name' => 'Suka Ramai'],
            ['id' => 375, 'district_id' => 91, 'name' => 'Ujung Kalak'],
            ['id' => 376, 'district_id' => 92, 'name' => 'Kaway XVI'],
            ['id' => 377, 'district_id' => 92, 'name' => 'Paya Beurandang'],
            ['id' => 378, 'district_id' => 92, 'name' => 'Keude Kaway'],
            ['id' => 379, 'district_id' => 93, 'name' => 'Meureubo'],
            ['id' => 380, 'district_id' => 93, 'name' => 'Peunaga'],
            ['id' => 381, 'district_id' => 93, 'name' => 'Alue Peunyareng'],
            ['id' => 382, 'district_id' => 94, 'name' => 'Pante Ceureumen'],
            ['id' => 383, 'district_id' => 94, 'name' => 'Cot Seumeureung'],
            ['id' => 384, 'district_id' => 94, 'name' => 'Alue Batee'],
            ['id' => 385, 'district_id' => 95, 'name' => 'Panton Reu'],
            ['id' => 386, 'district_id' => 95, 'name' => 'Tumpok Ladang'],
            ['id' => 387, 'district_id' => 95, 'name' => 'Alue Seulaseh'],
            ['id' => 388, 'district_id' => 96, 'name' => 'Samatiga'],
            ['id' => 389, 'district_id' => 96, 'name' => 'Cot Lagan'],
            ['id' => 390, 'district_id' => 96, 'name' => 'Peulanteu'],
            ['id' => 391, 'district_id' => 97, 'name' => 'Sungai Mas'],
            ['id' => 392, 'district_id' => 97, 'name' => 'Gampong Baro'],
            ['id' => 393, 'district_id' => 97, 'name' => 'Blang Meuria'],
            ['id' => 394, 'district_id' => 98, 'name' => 'Woyla'],
            ['id' => 395, 'district_id' => 98, 'name' => 'Teupin Panah'],
            ['id' => 396, 'district_id' => 98, 'name' => 'Lhok Bubon'],
            ['id' => 397, 'district_id' => 99, 'name' => 'Woyla Barat'],
            ['id' => 398, 'district_id' => 99, 'name' => 'Gampong Pineung'],
            ['id' => 399, 'district_id' => 99, 'name' => 'Ujung Raja'],
            ['id' => 400, 'district_id' => 100, 'name' => 'Woyla Timur'],
            ['id' => 401, 'district_id' => 100, 'name' => 'Gunong Mantok'],
            ['id' => 402, 'district_id' => 100, 'name' => 'Kuala Tadu'],
            ['id' => 403, 'district_id' => 101, 'name' => 'Darul Kamal'],
            ['id' => 404, 'district_id' => 101, 'name' => 'Indrapuri'],
            ['id' => 405, 'district_id' => 101, 'name' => 'Kota Jantho'],
            ['id' => 406, 'district_id' => 101, 'name' => 'Baitussalam'],
            ['id' => 407, 'district_id' => 101, 'name' => 'Lhoknga'],
            ['id' => 408, 'district_id' => 101, 'name' => 'Darul Imarah'],
            ['id' => 409, 'district_id' => 101, 'name' => 'Krueng Barona Jaya'],
            ['id' => 410, 'district_id' => 102, 'name' => 'Blank Bintang'],
            ['id' => 411, 'district_id' => 102, 'name' => 'Baitussalam'],
            ['id' => 412, 'district_id' => 102, 'name' => 'Darussalam'],
            ['id' => 420, 'district_id' => 103, 'name' => 'Darul Imarah'],
            ['id' => 421, 'district_id' => 103, 'name' => 'Kota Jantho'],
            ['id' => 422, 'district_id' => 103, 'name' => 'Indrapuri'],
            ['id' => 430, 'district_id' => 104, 'name' => 'Darul Kamal'],
            ['id' => 431, 'district_id' => 104, 'name' => 'Baitussalam'],
            ['id' => 432, 'district_id' => 104, 'name' => 'Krueng Barona Jaya'],
            ['id' => 440, 'district_id' => 105, 'name' => 'Darussalam'],
            ['id' => 441, 'district_id' => 105, 'name' => 'Lhoong'],
            ['id' => 442, 'district_id' => 105, 'name' => 'Peukan Bada'],
            ['id' => 450, 'district_id' => 106, 'name' => 'Indrapuri'],
            ['id' => 451, 'district_id' => 106, 'name' => 'Kota Jantho'],
            ['id' => 452, 'district_id' => 106, 'name' => 'Simpang Tiga'],
            ['id' => 460, 'district_id' => 107, 'name' => 'Ingin Jaya'],
            ['id' => 461, 'district_id' => 107, 'name' => 'Krueng Barona Jaya'],
            ['id' => 462, 'district_id' => 107, 'name' => 'Lhoknga'],
            ['id' => 470, 'district_id' => 108, 'name' => 'Kota Jantho'],
            ['id' => 471, 'district_id' => 108, 'name' => 'Baitussalam'],
            ['id' => 472, 'district_id' => 108, 'name' => 'Darul Kamal'],
            ['id' => 480, 'district_id' => 109, 'name' => 'Krueng Barona Jaya'],
            ['id' => 481, 'district_id' => 109, 'name' => 'Simpang Tiga'],
            ['id' => 482, 'district_id' => 109, 'name' => 'Lhoknga'],
            ['id' => 490, 'district_id' => 110, 'name' => 'Kuta Baro'],
            ['id' => 491, 'district_id' => 110 , 'name' => 'Baitussalam'],
            ['id' => 492, 'district_id' => 110, 'name' => 'Darul Imarah'],
            ['id' => 500, 'district_id' => 111, 'name' => 'Lhoong'],
            ['id' => 501, 'district_id' => 111, 'name' => 'Kota Jantho'],
            ['id' => 502, 'district_id' => 111, 'name' => 'Indrapuri'],
            ['id' => 510, 'district_id' => 112, 'name' => 'Lhoknga'],
            ['id' => 511, 'district_id' => 112, 'name' => 'Peukan Bada'],
            ['id' => 512, 'district_id' => 112, 'name' => 'Simpang Tiga'],
            ['id' => 520, 'district_id' => 113, 'name' => 'Mesjid Raya'],
            ['id' => 521, 'district_id' => 113, 'name' => 'Darussalam'],
            ['id' => 522, 'district_id' => 113, 'name' => 'Krueng Barona Jaya'],
            ['id' => 530, 'district_id' => 114, 'name' => 'Montasik'],
            ['id' => 531, 'district_id' => 114, 'name' => 'Baitussalam'],
            ['id' => 532, 'district_id' => 114, 'name' => 'Indrapuri'],
            ['id' => 540, 'district_id' => 115, 'name' => 'Peukan Bada'],
            ['id' => 541, 'district_id' => 115, 'name' => 'Simpang Tiga'],
            ['id' => 542, 'district_id' => 115, 'name' => 'Kota Jantho'],
            ['id' => 550, 'district_id' => 116, 'name' => 'Pulo Aceh'],
            ['id' => 551, 'district_id' => 116, 'name' => 'Lhoknga'],
            ['id' => 552, 'district_id' => 116, 'name' => 'Darul Kamal'],
            ['id' => 560, 'district_id' => 117, 'name' => 'Seulimeum'],
            ['id' => 561, 'district_id' => 117, 'name' => 'Baitussalam'],
            ['id' => 562, 'district_id' => 117, 'name' => 'Krueng Barona Jaya'],
            ['id' => 570, 'district_id' => 118, 'name' => 'Simpang Tiga'],
            ['id' => 571, 'district_id' => 118, 'name' => 'Indrapuri'],
            ['id' => 572, 'district_id' => 118, 'name' => 'Lhoknga'],
            ['id' => 580, 'district_id' => 119, 'name' => 'Suka Makmur'],
            ['id' => 581, 'district_id' => 119, 'name' => 'Kota Jantho'],
            ['id' => 582, 'district_id' => 119, 'name' => 'Darul Imarah'],
            ['id' => 590, 'district_id' => 120, 'name' => 'Batee'],
            ['id' => 591, 'district_id' => 120, 'name' => 'Krueng Barona Jaya'],
            ['id' => 592, 'district_id' => 120, 'name' => 'Lhoknga'],
            ['id' => 593, 'district_id' => 121, 'name' => 'Buloh'],
            ['id' => 594, 'district_id' => 121, 'name' => 'Bungo'],
            ['id' => 595, 'district_id' => 121, 'name' => 'Ceurih Alue'],
            ['id' => 596, 'district_id' => 121, 'name' => 'Ceurih Blang Mee'],
            ['id' => 597, 'district_id' => 122, 'name' => 'Pulo Mesjid'],
            ['id' => 598, 'district_id' => 122, 'name' => 'Blang Dalam'],
            ['id' => 599, 'district_id' => 122, 'name' => 'Pulo Lhoih'],
            ['id' => 600, 'district_id' => 122, 'name' => 'Tuwi Priya'],
            ['id' => 601, 'district_id' => 123, 'name' => 'Gampong Baro'],
            ['id' => 602, 'district_id' => 123, 'name' => 'Ulee Gunong'],
            ['id' => 603, 'district_id' => 123, 'name' => 'Blang Bungong'],
            ['id' => 604, 'district_id' => 123, 'name' => 'Cot Geurundong'],
            ['id' => 605, 'district_id' => 124, 'name' => 'Mesjid Ulim'],
            ['id' => 606, 'district_id' => 124, 'name' => 'Paya Teungoh'],
            ['id' => 607, 'district_id' => 124, 'name' => 'Teungku Di Laweung'],
            ['id' => 608, 'district_id' => 124, 'name' => 'Blang Krueng'],
            ['id' => 609, 'district_id' => 125, 'name' => 'Gampong Cot'],
            ['id' => 610, 'district_id' => 125, 'name' => 'Lampeudeu Baroh'],
            ['id' => 611, 'district_id' => 125, 'name' => 'Dayah Tanoh'],
            ['id' => 612, 'district_id' => 125, 'name' => 'Ulee Pulo'],
            ['id' => 613, 'district_id' => 126, 'name' => 'Blang Mee'],
            ['id' => 614, 'district_id' => 126, 'name' => 'Cot Seurani'],
            ['id' => 615, 'district_id' => 126, 'name' => 'Dayah Sinthop'],
            ['id' => 616, 'district_id' => 126, 'name' => 'Pulo Gajah Mate'],
            ['id' => 617, 'district_id' => 127, 'name' => 'Meunasah Baro'],
            ['id' => 618, 'district_id' => 127, 'name' => 'Pante Cermin'],
            ['id' => 619, 'district_id' => 127, 'name' => 'Blang Pueb'],
            ['id' => 620, 'district_id' => 127, 'name' => 'Keumala Dalam'],
            ['id' => 621, 'district_id' => 128, 'name' => 'Blang Lhok'],
            ['id' => 622, 'district_id' => 128, 'name' => 'Glee Siblah'],
            ['id' => 623, 'district_id' => 128, 'name' => 'Pulo Seunong'],
            ['id' => 624, 'district_id' => 128, 'name' => 'Krueng Meriam'],
            ['id' => 625, 'district_id' => 129, 'name' => 'Teupin Raya'],
            ['id' => 626, 'district_id' => 129, 'name' => 'Cot Jaja'],
            ['id' => 627, 'district_id' => 129, 'name' => 'Blang Bungong'],
            ['id' => 628, 'district_id' => 129, 'name' => 'Dayah Baro'],
            ['id' => 629, 'district_id' => 130, 'name' => 'Krueng Meuriam'],
            ['id' => 630, 'district_id' => 130, 'name' => 'Pulo Sejahtera'],
            ['id' => 631, 'district_id' => 130, 'name' => 'Ulee Tutue'],
            ['id' => 632, 'district_id' => 130, 'name' => 'Blang Raya'],
            ['id' => 633, 'district_id' => 131, 'name' => 'Cot Tunong'],
            ['id' => 634, 'district_id' => 131, 'name' => 'Meunasah Blang'],
            ['id' => 635, 'district_id' => 131, 'name' => 'Teupin Breuh'],
            ['id' => 636, 'district_id' => 131, 'name' => 'Krueng Simpo'],
            ['id' => 637, 'district_id' => 132, 'name' => 'Ulee Alue'],
            ['id' => 638, 'district_id' => 132, 'name' => 'Blang Mee'],
            ['id' => 639, 'district_id' => 132, 'name' => 'Gampong Cot'],
            ['id' => 640, 'district_id' => 132, 'name' => 'Teupin Raya'],
            ['id' => 641, 'district_id' => 133, 'name' => 'Meunasah Nga'],
            ['id' => 642, 'district_id' => 133, 'name' => 'Teupin Keubeu'],
            ['id' => 643, 'district_id' => 133, 'name' => 'Blang Rheue'],
            ['id' => 644, 'district_id' => 133, 'name' => 'Cot Bada'],
            ['id' => 645, 'district_id' => 134, 'name' => 'Gampong Baro'],
            ['id' => 646, 'district_id' => 134, 'name' => 'Pante Peusangan'],
            ['id' => 647, 'district_id' => 134, 'name' => 'Cot Tarom'],
            ['id' => 648, 'district_id' => 134, 'name' => 'Tanjong Paya'],
            ['id' => 649, 'district_id' => 135, 'name' => 'Teupin Panah'],
            ['id' => 650, 'district_id' => 135, 'name' => 'Cot Baroh'],
            ['id' => 651, 'district_id' => 135, 'name' => 'Blang Asan'],
            ['id' => 652, 'district_id' => 135, 'name' => 'Ulee Nyeue'],
            ['id' => 653, 'district_id' => 136, 'name' => 'Cot Keue'],
            ['id' => 654, 'district_id' => 136, 'name' => 'Kuta Blang'],
            ['id' => 655, 'district_id' => 136, 'name' => 'Paya Seumantoh'],
            ['id' => 656, 'district_id' => 136, 'name' => 'Alue Padee'],
            ['id' => 657, 'district_id' => 137, 'name' => 'Pulo Rungkom'],
            ['id' => 658, 'district_id' => 137, 'name' => 'Teupin Mane'],
            ['id' => 659, 'district_id' => 137, 'name' => 'Lhok Bubon'],
            ['id' => 660, 'district_id' => 137, 'name' => 'Cot Masi'],
            ['id' => 661, 'district_id' => 138, 'name' => 'Lhok Seutui'],
            ['id' => 662, 'district_id' => 138, 'name' => 'Rungkom'],
            ['id' => 663, 'district_id' => 138, 'name' => 'Pulo Pisang'],
            ['id' => 664, 'district_id' => 138, 'name' => 'Cot U'],
            ['id' => 665, 'district_id' => 139, 'name' => 'Peulumat'],
            ['id' => 666, 'district_id' => 139, 'name' => 'Tanjung Keumuning'],
            ['id' => 667, 'district_id' => 139, 'name' => 'Kampung Blang'],
            ['id' => 668, 'district_id' => 139, 'name' => 'Cot Paya'],
            ['id' => 669, 'district_id' => 140, 'name' => 'Teupin Batang'],
            ['id' => 670, 'district_id' => 140, 'name' => 'Simpang Tangse'],
            ['id' => 671, 'district_id' => 140, 'name' => 'Meunasah Batee'],
            ['id' => 672, 'district_id' => 140, 'name' => 'Alue Manggeng'],
            ['id' => 673, 'district_id' => 141, 'name' => 'Simpang Peudawa'],
            ['id' => 674, 'district_id' => 141, 'name' => 'Cot Asan'],
            ['id' => 675, 'district_id' => 141, 'name' => 'Meunasah Punteut'],
            ['id' => 676, 'district_id' => 141, 'name' => 'Blang Meriah'],
            ['id' => 677, 'district_id' => 142, 'name' => 'Cot Matang'],
            ['id' => 678, 'district_id' => 142, 'name' => 'Keude Baktiya'],
            ['id' => 679, 'district_id' => 142, 'name' => 'Titi Blang'],
            ['id' => 680, 'district_id' => 142, 'name' => 'Keumuning'],
            ['id' => 681, 'district_id' => 143, 'name' => 'Banda'],
            ['id' => 682, 'district_id' => 143, 'name' => 'Meunasah Reuleung'],
            ['id' => 683, 'district_id' => 143, 'name' => 'Cot Kumbang'],
            ['id' => 684, 'district_id' => 143, 'name' => 'Langgar'],
            ['id' => 685, 'district_id' => 144, 'name' => 'Batee'],
            ['id' => 686, 'district_id' => 144, 'name' => 'Cot Tuha'],
            ['id' => 687, 'district_id' => 144, 'name' => 'Kampung Jaya'],
            ['id' => 688, 'district_id' => 144, 'name' => 'Banda Aceh'],
            ['id' => 689, 'district_id' => 145, 'name' => 'Pante Kumbang'],
            ['id' => 690, 'district_id' => 145, 'name' => 'Cot Seumawe'],
            ['id' => 691, 'district_id' => 145, 'name' => 'Simpang Girek'],
            ['id' => 692, 'district_id' => 145, 'name' => 'Girek'],
            ['id' => 693, 'district_id' => 146, 'name' => 'Pante Peulawi'],
            ['id' => 694, 'district_id' => 146, 'name' => 'Cot Padang'],
            ['id' => 695, 'district_id' => 146, 'name' => 'Gampong Baro'],
            ['id' => 696, 'district_id' => 146, 'name' => 'Krueng Tui'],
            ['id' => 697, 'district_id' => 147, 'name' => 'Cot Keumeudee'],
            ['id' => 698, 'district_id' => 147, 'name' => 'Alue Deah'],
            ['id' => 699, 'district_id' => 147, 'name' => 'Kampung Geureudong'],
            ['id' => 700, 'district_id' => 147, 'name' => 'Peukan Aceh'],
            ['id' => 701, 'district_id' => 148, 'name' => 'Lhok Mude'],
            ['id' => 702, 'district_id' => 148, 'name' => 'Blang Jambee'],
            ['id' => 703, 'district_id' => 148, 'name' => 'Cot Hagu'],
            ['id' => 704, 'district_id' => 148, 'name' => 'Peulumat'],
            ['id' => 705, 'district_id' => 149, 'name' => 'Simpang Beurandeh'],
            ['id' => 706, 'district_id' => 149, 'name' => 'Titi Gantung'],
            ['id' => 707, 'district_id' => 149, 'name' => 'Kampung Tengah'],
            ['id' => 708, 'district_id' => 149, 'name' => 'Alue Manggeng'],
            ['id' => 709, 'district_id' => 150, 'name' => 'Lhok Pulo'],
            ['id' => 710, 'district_id' => 150, 'name' => 'Peulumat'],
            ['id' => 711, 'district_id' => 150, 'name' => 'Cot Pulo'],
            ['id' => 712, 'district_id' => 150, 'name' => 'Blang Keupula'],
            ['id' => 713, 'district_id' => 151, 'name' => 'Gampong Baru'],
            ['id' => 714, 'district_id' => 151, 'name' => 'Tanjung Keumuning'],
            ['id' => 715, 'district_id' => 151, 'name' => 'Alue Muko'],
            ['id' => 716, 'district_id' => 151, 'name' => 'Blang Jaya'],
            ['id' => 717, 'district_id' => 152, 'name' => 'Alue Naga'],
            ['id' => 718, 'district_id' => 152, 'name' => 'Blang Padang'],
            ['id' => 719, 'district_id' => 152, 'name' => 'Bale Me'],
            ['id' => 720, 'district_id' => 152, 'name' => 'Pulo Kueh'],
            ['id' => 721, 'district_id' => 153, 'name' => 'Keude Kuala'],
            ['id' => 722, 'district_id' => 153, 'name' => 'Pulo Aie'],
            ['id' => 723, 'district_id' => 153, 'name' => 'Cot Pulau'],
            ['id' => 724, 'district_id' => 153, 'name' => 'Lhok Jambu'],
            ['id' => 725, 'district_id' => 154, 'name' => 'Cot Bada'],
            ['id' => 726, 'district_id' => 154, 'name' => 'Seuneubok'],
            ['id' => 727, 'district_id' => 154, 'name' => 'Banda'],
            ['id' => 728, 'district_id' => 154, 'name' => 'Pante Kumbang'],
            ['id' => 729, 'district_id' => 155, 'name' => 'Lhok Pulo'],
            ['id' => 730, 'district_id' => 155, 'name' => 'Titi Blang'],
            ['id' => 731, 'district_id' => 155, 'name' => 'Peulumat'],
            ['id' => 732, 'district_id' => 155, 'name' => 'Alue Reuleung'],
            ['id' => 733, 'district_id' => 156, 'name' => 'Kuala Langsa'],
            ['id' => 734, 'district_id' => 156, 'name' => 'Suka Makmur'],
            ['id' => 735, 'district_id' => 156, 'name' => 'Tanjung Pulo'],
            ['id' => 736, 'district_id' => 157, 'name' => 'Cinta Rakyat'],
            ['id' => 737, 'district_id' => 157, 'name' => 'Alur Sawa'],
            ['id' => 738, 'district_id' => 157, 'name' => 'Gugop'],
            ['id' => 739, 'district_id' => 158, 'name' => 'Ujong Tanjong'],
            ['id' => 740, 'district_id' => 158, 'name' => 'Tanjung Meru'],
            ['id' => 741, 'district_id' => 158, 'name' => 'Lubuk Keumunong'],
            ['id' => 742, 'district_id' => 159, 'name' => 'Kota Lintang'],
            ['id' => 743, 'district_id' => 159, 'name' => 'Kubu Rabo'],
            ['id' => 744, 'district_id' => 159, 'name' => 'Pulo Bunta'],
            ['id' => 745, 'district_id' => 160, 'name' => 'Tampur'],
            ['id' => 746, 'district_id' => 160, 'name' => 'Suka Raja'],
            ['id' => 747, 'district_id' => 160, 'name' => 'Batu Pinang'],
            ['id' => 748, 'district_id' => 161, 'name' => 'Cinta Kasih'],
            ['id' => 749, 'district_id' => 161, 'name' => 'Alur Jambu'],
            ['id' => 750, 'district_id' => 161, 'name' => 'Kuta Raja'],
            ['id' => 751, 'district_id' => 162, 'name' => 'Suka Maju'],
            ['id' => 752, 'district_id' => 162, 'name' => 'Gunung Meriah'],
            ['id' => 753, 'district_id' => 162, 'name' => 'Hutan Jaya'],
            ['id' => 754, 'district_id' => 163, 'name' => 'Bumi Rahayu'],
            ['id' => 755, 'district_id' => 163, 'name' => 'Seulanga'],
            ['id' => 756, 'district_id' => 163, 'name' => 'Bireun Jaya'],
            ['id' => 757, 'district_id' => 164, 'name' => 'Alur Tani'],
            ['id' => 758, 'district_id' => 164, 'name' => 'Blang Bulen'],
            ['id' => 759, 'district_id' => 164, 'name' => 'Lhok Gumba'],
            ['id' => 760, 'district_id' => 165, 'name' => 'Tanjung Selamat'],
            ['id' => 761, 'district_id' => 165, 'name' => 'Blang Bintang'],
            ['id' => 762, 'district_id' => 165, 'name' => 'Pasar Baru'],
            ['id' => 763, 'district_id' => 166, 'name' => 'Seumirah'],
            ['id' => 764, 'district_id' => 166, 'name' => 'Alur Naga'],
            ['id' => 765, 'district_id' => 166, 'name' => 'Tebing Tinggi'],
            ['id' => 766, 'district_id' => 167, 'name' => 'Pulau Maju'],
            ['id' => 767, 'district_id' => 167, 'name' => 'Tanjung Sinar'],
            ['id' => 768, 'district_id' => 167, 'name' => 'Suka Bakti'],
            ['id' => 769, 'district_id' => 168, 'name' => 'Tampur Rakyat'],
            ['id' => 770, 'district_id' => 168, 'name' => 'Alur Murni'],
            ['id' => 771, 'district_id' => 168, 'name' => 'Gulak'],
            ['id' => 772, 'district_id' => 169, 'name' => 'Pulo Lamteng'],
            ['id' => 773, 'district_id' => 169, 'name' => 'Paya Bili'],
            ['id' => 774, 'district_id' => 169, 'name' => 'Lhok U'],
            ['id' => 775, 'district_id' => 170, 'name' => 'Seruway Rayeuk'],
            ['id' => 776, 'district_id' => 170, 'name' => 'Alue Naga'],
            ['id' => 777, 'district_id' => 170, 'name' => 'Jambu Lapa'],
            ['id' => 778, 'district_id' => 171, 'name' => 'Pulo Satu'],
            ['id' => 779, 'district_id' => 171, 'name' => 'Teupin Reusep'],
            ['id' => 780, 'district_id' => 171, 'name' => 'Kuala Baru'],
            ['id' => 781, 'district_id' => 172, 'name' => 'Tenggulun Jaya'],
            ['id' => 782, 'district_id' => 172, 'name' => 'Seumirah Barat'],
            ['id' => 783, 'district_id' => 172, 'name' => 'Kota Jaya'],
            ['id' => 784, 'district_id' => 173, 'name' => 'Tenggulun Baru'],
            ['id' => 785, 'district_id' => 173, 'name' => 'Mudi'],
            ['id' => 786, 'district_id' => 173, 'name' => 'Tanjung Pulau'],
            ['id' => 787, 'district_id' => 174, 'name' => 'Tanjung Selamat'],
            ['id' => 788, 'district_id' => 174, 'name' => 'Rantau Makmur'],
            ['id' => 789, 'district_id' => 174, 'name' => 'Gampong Langkat'],
            ['id' => 790, 'district_id' => 175, 'name' => 'Sekerak Jaya'],
            ['id' => 791, 'district_id' => 175, 'name' => 'Meunasah'],
            ['id' => 792, 'district_id' => 175, 'name' => 'Alue Seulamat'],
            ['id' => 793, 'district_id' => 176, 'name' => 'Seumantoh'],
            ['id' => 794, 'district_id' => 176, 'name' => 'Kemuning'],
            ['id' => 795, 'district_id' => 176, 'name' => 'Ujung Karang'],
            ['id' => 796, 'district_id' => 177, 'name' => 'Tanjung Seulamat'],
            ['id' => 797, 'district_id' => 177, 'name' => 'Tanjung Merdeka'],
            ['id' => 798, 'district_id' => 177, 'name' => 'Pulo Simpung'],
            ['id' => 799, 'district_id' => 178, 'name' => 'Gunung Paro'],
            ['id' => 800, 'district_id' => 178, 'name' => 'Seuneubok'],
            ['id' => 801, 'district_id' => 178, 'name' => 'Alue Pulo'],
            ['id' => 802, 'district_id' => 179, 'name' => 'Beutong Timu'],
            ['id' => 803, 'district_id' => 179, 'name' => 'Alue Seungko'],
            ['id' => 804, 'district_id' => 179, 'name' => 'Pucok Raya'],
            ['id' => 805, 'district_id' => 180, 'name' => 'Seuneubok Seru'],
            ['id' => 806, 'district_id' => 180, 'name' => 'Tanjung Alue'],
            ['id' => 807, 'district_id' => 180, 'name' => 'Pasir Jaya'],
            ['id' => 808, 'district_id' => 181, 'name' => 'Teubee'],
            ['id' => 809, 'district_id' => 181, 'name' => 'Beutong Sian'],
            ['id' => 810, 'district_id' => 181, 'name' => 'Banggalang Seumale'],
            ['id' => 811, 'district_id' => 182, 'name' => 'Pulo Darul'],
            ['id' => 812, 'district_id' => 182, 'name' => 'Pasar Seunagan'],
            ['id' => 813, 'district_id' => 182, 'name' => 'Lhok Pulo'],
            ['id' => 814, 'district_id' => 183, 'name' => 'Tadu Baru'],
            ['id' => 815, 'district_id' => 183, 'name' => 'Alue Selamat'],
            ['id' => 816, 'district_id' => 183, 'name' => 'Pulo Raya'],
            ['id' => 817, 'district_id' => 184, 'name' => 'Tripa Seunagan'],
            ['id' => 818, 'district_id' => 184, 'name' => 'Merak Jaya'],
            ['id' => 819, 'district_id' => 184, 'name' => 'Alur Jambur'],
            ['id' => 820, 'district_id' => 185, 'name' => 'Krueng Baro'],
            ['id' => 821, 'district_id' => 185, 'name' => 'Matanjang'],
            ['id' => 822, 'district_id' => 185, 'name' => 'Gampong Raja'],
            ['id' => 823, 'district_id' => 186, 'name' => 'Seuneubok'],
            ['id' => 824, 'district_id' => 186, 'name' => 'Alur Lintang'],
            ['id' => 825, 'district_id' => 186, 'name' => 'Sampoiniet Timur'],
            ['id' => 826, 'district_id' => 187, 'name' => 'Suka Indah'],
            ['id' => 827, 'district_id' => 187, 'name' => 'Keumala'],
            ['id' => 828, 'district_id' => 187, 'name' => 'Teubee'],
            ['id' => 829, 'district_id' => 188, 'name' => 'Alur Keumunong'],
            ['id' => 830, 'district_id' => 188, 'name' => 'Seulamat Raya'],
            ['id' => 831, 'district_id' => 188, 'name' => 'Suka Damai'],
            ['id' => 832, 'district_id' => 189, 'name' => 'Seungko'],
            ['id' => 833, 'district_id' => 189, 'name' => 'Pulo Limong'],
            ['id' => 834, 'district_id' => 189, 'name' => 'Keumunong'],
            ['id' => 835, 'district_id' => 190, 'name' => 'Indra Bangsa'],
            ['id' => 836, 'district_id' => 190, 'name' => 'Gampong Mesjid'],
            ['id' => 837, 'district_id' => 190, 'name' => 'Seunagan Muda'],
            ['id' => 838, 'district_id' => 191, 'name' => 'Kuala Indra'],
            ['id' => 839, 'district_id' => 191, 'name' => 'Alur Jaya'],
            ['id' => 840, 'district_id' => 191, 'name' => 'Gampong Indra'],
            ['id' => 841, 'district_id' => 192, 'name' => 'Seulamat Indra'],
            ['id' => 842, 'district_id' => 192, 'name' => 'Kampung Indah'],
            ['id' => 843, 'district_id' => 192, 'name' => 'Suka Jaya'],
            ['id' => 844, 'district_id' => 193, 'name' => 'Kampung Lintang'],
            ['id' => 845, 'district_id' => 193, 'name' => 'Serka'],
            ['id' => 846, 'district_id' => 193, 'name' => 'Rayeuk'],
            ['id' => 847, 'district_id' => 194, 'name' => 'Lah Angkat'],
            ['id' => 848, 'district_id' => 194, 'name' => 'Suka Jaya'],
            ['id' => 849, 'district_id' => 194, 'name' => 'Peusangan'],
            ['id' => 850, 'district_id' => 195, 'name' => 'Baru'],
            ['id' => 851, 'district_id' => 195, 'name' => 'Gajah Putih'],
            ['id' => 852, 'district_id' => 195, 'name' => 'Bener'],
            ['id' => 853, 'district_id' => 196, 'name' => 'Ujung Gunung'],
            ['id' => 854, 'district_id' => 196, 'name' => 'Bintang'],
            ['id' => 855, 'district_id' => 196, 'name' => 'Seubun'],
            ['id' => 856, 'district_id' => 197, 'name' => 'Suka Keumunong'],
            ['id' => 857, 'district_id' => 197, 'name' => 'Gampong Meuleu'],
            ['id' => 858, 'district_id' => 197, 'name' => 'Teubee'],
            ['id' => 859, 'district_id' => 198, 'name' => 'Mesidah Makmur'],
            ['id' => 860, 'district_id' => 198, 'name' => 'Rawa Meuligo'],
            ['id' => 861, 'district_id' => 198, 'name' => 'Sampoinet'],
            ['id' => 862, 'district_id' => 199, 'name' => 'Seutui'],
            ['id' => 863, 'district_id' => 199, 'name' => 'Tampak Siring'],
            ['id' => 864, 'district_id' => 199, 'name' => 'Meunasah Gajah'],
            ['id' => 865, 'district_id' => 200, 'name' => 'Lhok Pulo'],
            ['id' => 866, 'district_id' => 200, 'name' => 'Gampong Rayeuk'],
            ['id' => 867, 'district_id' => 200, 'name' => 'Kuala Raya'],
            ['id' => 868, 'district_id' => 201, 'name' => 'Timang Gajah'],
            ['id' => 869, 'district_id' => 201, 'name' => 'Blang Kolak I'],
            ['id' => 870, 'district_id' => 201, 'name' => 'Blang Kolak II'],
            ['id' => 871, 'district_id' => 201, 'name' => 'Pantan Lues'],
            ['id' => 872, 'district_id' => 202, 'name' => 'Meureudu'],
            ['id' => 873, 'district_id' => 202, 'name' => 'Ulee Glee'],
            ['id' => 874, 'district_id' => 202, 'name' => 'Blang Rheue'],
            ['id' => 875, 'district_id' => 202, 'name' => 'Dayah Baroh'],
            ['id' => 876, 'district_id' => 203, 'name' => 'Meurah Dua'],
            ['id' => 877, 'district_id' => 203, 'name' => 'Pulo U'],
            ['id' => 878, 'district_id' => 203, 'name' => 'Blang Cut'],
            ['id' => 879, 'district_id' => 203, 'name' => 'Cot Trueng'],
            ['id' => 880, 'district_id' => 204, 'name' => 'Bandar Baru'],
            ['id' => 881, 'district_id' => 204, 'name' => 'Gampong Baro'],
            ['id' => 882, 'district_id' => 204, 'name' => 'Keude Aceh'],
            ['id' => 883, 'district_id' => 204, 'name' => 'Panton Rayeuk'],
            ['id' => 884, 'district_id' => 205, 'name' => 'Ulim'],
            ['id' => 885, 'district_id' => 205, 'name' => 'Blang Naleung'],
            ['id' => 886, 'district_id' => 205, 'name' => 'Cot Keumuneng'],
            ['id' => 887, 'district_id' => 205, 'name' => 'Pulo Sejahtera'],
            ['id' => 888, 'district_id' => 206, 'name' => 'Jangka Buya'],
            ['id' => 889, 'district_id' => 206, 'name' => 'Blang Dalam'],
            ['id' => 890, 'district_id' => 206, 'name' => 'Cot Juru'],
            ['id' => 891, 'district_id' => 206, 'name' => 'Pulo Iboih'],
            ['id' => 892, 'district_id' => 207, 'name' => 'Trienggadeng'],
            ['id' => 893, 'district_id' => 207, 'name' => 'Blang Cut'],
            ['id' => 894, 'district_id' => 207, 'name' => 'Cot Murong'],
            ['id' => 895, 'district_id' => 207, 'name' => 'Pulo Seunong'],
            ['id' => 896, 'district_id' => 208, 'name' => 'Panteraja'],
            ['id' => 897, 'district_id' => 208, 'name' => 'Blang Panyang'],
            ['id' => 898, 'district_id' => 208, 'name' => 'Cot Puklat'],
            ['id' => 899, 'district_id' => 208, 'name' => 'Pulo Raya'],
            ['id' => 900, 'district_id' => 209, 'name' => 'Baiturrahman'],
            ['id' => 901, 'district_id' => 209, 'name' => 'Kampung Baru'],
            ['id' => 902, 'district_id' => 209, 'name' => 'Peulanggahan'],
            ['id' => 903, 'district_id' => 209, 'name' => 'Sukaramai'],
            ['id' => 904, 'district_id' => 210, 'name' => 'Kuta Alam'],
            ['id' => 905, 'district_id' => 210, 'name' => 'Lampaseh'],
            ['id' => 906, 'district_id' => 210, 'name' => 'Lambhuk'],
            ['id' => 907, 'district_id' => 210, 'name' => 'Peulanggahan'],
            ['id' => 908, 'district_id' => 211, 'name' => 'Syiah Kuala'],
            ['id' => 909, 'district_id' => 211, 'name' => 'Ie Masen'],
            ['id' => 910, 'district_id' => 211, 'name' => 'Lamgugob'],
            ['id' => 911, 'district_id' => 211, 'name' => 'Punge Jurong'],
            ['id' => 912, 'district_id' => 212, 'name' => 'Lueng Bata'],
            ['id' => 913, 'district_id' => 212, 'name' => 'Lamteumen Timur'],
            ['id' => 914, 'district_id' => 212, 'name' => 'Lamteumen Barat'],
            ['id' => 915, 'district_id' => 212, 'name' => 'Punge Blang Cut'],
            ['id' => 916, 'district_id' => 213, 'name' => 'Kuta Raja'],
            ['id' => 917, 'district_id' => 213, 'name' => 'Lambaro Skep'],
            ['id' => 918, 'district_id' => 213, 'name' => 'Lampineung'],
            ['id' => 919, 'district_id' => 213, 'name' => 'Punge Ujong'],
            ['id' => 920, 'district_id' => 214, 'name' => 'Meuraxa'],
            ['id' => 921, 'district_id' => 214, 'name' => 'Lamjamee'],
            ['id' => 922, 'district_id' => 214, 'name' => 'Lampulo'],
            ['id' => 923, 'district_id' => 214, 'name' => 'Punge Jaya'],
            ['id' => 924, 'district_id' => 215, 'name' => 'Ulee Kareng'],
            ['id' => 925, 'district_id' => 215, 'name' => 'Lamteh'],
            ['id' => 926, 'district_id' => 215, 'name' => 'Lampaseh Aceh'],
            ['id' => 927, 'district_id' => 215, 'name' => 'Punge Raya'],
            ['id' => 928, 'district_id' => 216, 'name' => 'Jaya Baru'],
            ['id' => 929, 'district_id' => 216, 'name' => 'Lamlagang'],
            ['id' => 930, 'district_id' => 216, 'name' => 'Lampoh Daya'],
            ['id' => 931, 'district_id' => 216, 'name' => 'Punge Blang Cut'],
            ['id' => 932, 'district_id' => 217, 'name' => 'Banda Raya'],
            ['id' => 933, 'district_id' => 217, 'name' => 'Lam Ara'],
            ['id' => 934, 'district_id' => 217, 'name' => 'Lambaro Skep'],
            ['id' => 935, 'district_id' => 217, 'name' => 'Punge Ujong'],
            ['id' => 936, 'district_id' => 218, 'name' => 'Sukakarya'],
            ['id' => 937, 'district_id' => 218, 'name' => 'Sukajadi'],
            ['id' => 938, 'district_id' => 218, 'name' => 'Sukamaju'],
            ['id' => 939, 'district_id' => 218, 'name' => 'Sukamulya'],
            ['id' => 940, 'district_id' => 219, 'name' => 'Sukajaya'],
            ['id' => 941, 'district_id' => 219, 'name' => 'Sukamakmur'],
            ['id' => 942, 'district_id' => 219, 'name' => 'Sukarame'],
            ['id' => 943, 'district_id' => 219, 'name' => 'Sukaresmi'],
            ['id' => 944, 'district_id' => 220, 'name' => 'Langsa Barat'],
            ['id' => 945, 'district_id' => 220, 'name' => 'Gampong Teungoh'],
            ['id' => 946, 'district_id' => 220, 'name' => 'Gampong Jawa'],
            ['id' => 947, 'district_id' => 220, 'name' => 'Meurandeh'],
            ['id' => 948, 'district_id' => 221, 'name' => 'Langsa Kota'],
            ['id' => 949, 'district_id' => 221, 'name' => 'Meurandeh'],
            ['id' => 950, 'district_id' => 221, 'name' => 'Gampong Teungoh'],
            ['id' => 951, 'district_id' => 221, 'name' => 'Gampong Jawa'],
            ['id' => 952, 'district_id' => 222, 'name' => 'Langsa Timur'],
            ['id' => 953, 'district_id' => 222, 'name' => 'Alue Pineung'],
            ['id' => 954, 'district_id' => 222, 'name' => 'Seulalah'],
            ['id' => 955, 'district_id' => 222, 'name' => 'Suka Ramai'],
            ['id' => 956, 'district_id' => 223, 'name' => 'Langsa Lama'],
            ['id' => 957, 'district_id' => 223, 'name' => 'Gampong Baro'],
            ['id' => 958, 'district_id' => 223, 'name' => 'Meurandeh Dayah'],
            ['id' => 959, 'district_id' => 223, 'name' => 'Paya Bujok'],
            ['id' => 960, 'district_id' => 224, 'name' => 'Langsa Baro'],
            ['id' => 961, 'district_id' => 224, 'name' => 'Alue Dua'],
            ['id' => 962, 'district_id' => 224, 'name' => 'Seuriget'],
            ['id' => 963, 'district_id' => 224, 'name' => 'Suka Jaya'],
            ['id' => 964, 'district_id' => 225, 'name' => 'Banda Sakti'],
            ['id' => 965, 'district_id' => 225, 'name' => 'Kuta Alam'],
            ['id' => 966, 'district_id' => 225, 'name' => 'Meuraxa'],
            ['id' => 967, 'district_id' => 225, 'name' => 'Syiah Kuala'],
            ['id' => 968, 'district_id' => 226, 'name' => 'Blang Mangat'],
            ['id' => 969, 'district_id' => 226, 'name' => 'Alue Awe'],
            ['id' => 970, 'district_id' => 226, 'name' => 'Cot Girek'],
            ['id' => 971, 'district_id' => 226, 'name' => 'Matang Kuli'],
            ['id' => 972, 'district_id' => 227, 'name' => 'Muara Dua'],
            ['id' => 973, 'district_id' => 227, 'name' => 'Blang Punteut'],
            ['id' => 974, 'district_id' => 227, 'name' => 'Cot Trueng'],
            ['id' => 975, 'district_id' => 227, 'name' => 'Paya Bujok'],
            ['id' => 976, 'district_id' => 228, 'name' => 'Muara Satu'],
            ['id' => 977, 'district_id' => 228, 'name' => 'Blang Cut'],
            ['id' => 978, 'district_id' => 228, 'name' => 'Cot Puklat'],
            ['id' => 979, 'district_id' => 228, 'name' => 'Pulo Raya'],
            ['id' => 980, 'district_id' => 229, 'name' => 'Simpang Kiri'],
            ['id' => 981, 'district_id' => 229, 'name' => 'Blang Pulo'],
            ['id' => 982, 'district_id' => 229, 'name' => 'Cot Girek'],
            ['id' => 983, 'district_id' => 229, 'name' => 'Matang Kuli'],
            ['id' => 984, 'district_id' => 230, 'name' => 'Penanggalan'],
            ['id' => 985, 'district_id' => 230, 'name' => 'Alue Awe'],
            ['id' => 986, 'district_id' => 230, 'name' => 'Blang Punteut'],
            ['id' => 987, 'district_id' => 230, 'name' => 'Cot Trueng'],
            ['id' => 988, 'district_id' => 231, 'name' => 'Rundeng'],
            ['id' => 989, 'district_id' => 231, 'name' => 'Blang Cut'],
            ['id' => 990, 'district_id' => 231, 'name' => 'Cot Puklat'],
            ['id' => 991, 'district_id' => 231, 'name' => 'Pulo Raya'],
            ['id' => 992, 'district_id' => 232, 'name' => 'Sultan Daulat'],
            ['id' => 993, 'district_id' => 232, 'name' => 'Blang Pulo'],
            ['id' => 994, 'district_id' => 232, 'name' => 'Cot Girek'],
            ['id' => 995, 'district_id' => 232, 'name' => 'Matang Kuli'],
            ['id' => 996, 'district_id' => 233, 'name' => 'Longkib'],
            ['id' => 997, 'district_id' => 233, 'name' => 'Blang Punteut'],
            ['id' => 998, 'district_id' => 233, 'name' => 'Cot Trueng'],
            ['id' => 999, 'district_id' => 233, 'name' => 'Paya Bujok'],
            ['id' => 1000, 'district_id' => 234, 'name' => 'Gido'],
            ['id' => 1001, 'district_id' => 234, 'name' => 'Idanogawo'],
            ['id' => 1002, 'district_id' => 234, 'name' => 'Bawolato'],
            ['id' => 1003, 'district_id' => 234, 'name' => 'Hiliduho'],
            ['id' => 1004, 'district_id' => 235, 'name' => 'Idanogawo'],
            ['id' => 1005, 'district_id' => 235, 'name' => 'Botomuzoi'],
            ['id' => 1006, 'district_id' => 235, 'name' => 'Ulugawo'],
            ['id' => 1007, 'district_id' => 235, 'name' => 'Ma’u'],
            ['id' => 1008, 'district_id' => 236, 'name' => 'Bawolato'],
            ['id' => 1009, 'district_id' => 236, 'name' => 'Hiliduho'],
            ['id' => 1010, 'district_id' => 236, 'name' => 'Somolo-molo'],
            ['id' => 1011, 'district_id' => 236, 'name' => 'Ulugawo'],
            ['id' => 1012, 'district_id' => 237, 'name' => 'Hiliduho'],
            ['id' => 1013, 'district_id' => 237, 'name' => 'Botomuzoi'],
            ['id' => 1014, 'district_id' => 237, 'name' => 'Ulugawo'],
            ['id' => 1015, 'district_id' => 237, 'name' => 'Ma’u'],
            ['id' => 1016, 'district_id' => 238, 'name' => 'Botomuzoi'],
            ['id' => 1017, 'district_id' => 238, 'name' => 'Ulugawo'],
            ['id' => 1018, 'district_id' => 238, 'name' => 'Ma’u'],
            ['id' => 1019, 'district_id' => 238, 'name' => 'Somolo-molo'],
            ['id' => 1020, 'district_id' => 239, 'name' => 'Ulugawo'],
            ['id' => 1021, 'district_id' => 239, 'name' => 'Ma’u'],
            ['id' => 1022, 'district_id' => 239, 'name' => 'Somolo-molo'],
            ['id' => 1023, 'district_id' => 239, 'name' => 'Hiliduho'],
            ['id' => 1024, 'district_id' => 240, 'name' => 'Ma’u'],
            ['id' => 1025, 'district_id' => 240, 'name' => 'Somolo-molo'],
            ['id' => 1026, 'district_id' => 240, 'name' => 'Hiliduho'],
            ['id' => 1027, 'district_id' => 240, 'name' => 'Ulugawo'],
            ['id' => 1028, 'district_id' => 241, 'name' => 'Somolo-molo'],
            ['id' => 1029, 'district_id' => 241, 'name' => 'Ma’u'],
            ['id' => 1030, 'district_id' => 241, 'name' => 'Hiliduho'],
            ['id' => 1031, 'district_id' => 241, 'name' => 'Ulugawo'],
            ['id' => 1032, 'district_id' => 242, 'name' => 'Panyabungan'],
            ['id' => 1033, 'district_id' => 242, 'name' => 'Panyabungan Barat'],
            ['id' => 1034, 'district_id' => 242, 'name' => 'Panyabungan Timur'],
            ['id' => 1035, 'district_id' => 242, 'name' => 'Panyabungan Utara'],
            ['id' => 1036, 'district_id' => 243, 'name' => 'Panyabungan Barat'],
            ['id' => 1037, 'district_id' => 243, 'name' => 'Panyabungan Timur'],
            ['id' => 1038, 'district_id' => 243, 'name' => 'Panyabungan Utara'],
            ['id' => 1039, 'district_id' => 243, 'name' => 'Panyabungan'],
            ['id' => 1040, 'district_id' => 244, 'name' => 'Panyabungan Timur'],
            ['id' => 1041, 'district_id' => 244, 'name' => 'Panyabungan Utara'],
            ['id' => 1042, 'district_id' => 244, 'name' => 'Panyabungan'],
            ['id' => 1043, 'district_id' => 244, 'name' => 'Panyabungan Barat'],
            ['id' => 1044, 'district_id' => 245, 'name' => 'Panyabungan Utara'],
            ['id' => 1045, 'district_id' => 245, 'name' => 'Panyabungan'],
            ['id' => 1046, 'district_id' => 245, 'name' => 'Panyabungan Barat'],
            ['id' => 1047, 'district_id' => 245, 'name' => 'Panyabungan Timur'],
            ['id' => 1048, 'district_id' => 246, 'name' => 'Panyabungan Tonga'],
            ['id' => 1049, 'district_id' => 246, 'name' => 'Panyabungan Julu'],
            ['id' => 1050, 'district_id' => 246, 'name' => 'Panyabungan Dolok'],
            ['id' => 1051, 'district_id' => 246, 'name' => 'Panyabungan Lombang'],
            ['id' => 1052, 'district_id' => 247, 'name' => 'Siabu'],
            ['id' => 1053, 'district_id' => 247, 'name' => 'Huta Raja'],
            ['id' => 1054, 'district_id' => 247, 'name' => 'Sibuhuan'],
            ['id' => 1055, 'district_id' => 247, 'name' => 'Sibio Bio'],
            ['id' => 1056, 'district_id' => 248, 'name' => 'Kotanopan'],
            ['id' => 1057, 'district_id' => 248, 'name' => 'Huta Godang'],
            ['id' => 1058, 'district_id' => 248, 'name' => 'Pagar Gunung'],
            ['id' => 1059, 'district_id' => 248, 'name' => 'Sibanggor Julu'],
            ['id' => 1060, 'district_id' => 249, 'name' => 'Lembah Sorik Marapi'],
            ['id' => 1061, 'district_id' => 249, 'name' => 'Sibanggor Jae'],
            ['id' => 1062, 'district_id' => 249, 'name' => 'Sibanggor Tonga'],
            ['id' => 1063, 'district_id' => 249, 'name' => 'Sibanggor Julu'],
            ['id' => 1064, 'district_id' => 250, 'name' => 'Natal'],
            ['id' => 1065, 'district_id' => 250, 'name' => 'Batahan'],
            ['id' => 1066, 'district_id' => 250, 'name' => 'Sinunukan'],
            ['id' => 1067, 'district_id' => 250, 'name' => 'Muara Soma'],
            ['id' => 1068, 'district_id' => 251, 'name' => 'Muara Batang Gadis'],
            ['id' => 1069, 'district_id' => 251, 'name' => 'Huta Bargot'],
            ['id' => 1070, 'district_id' => 251, 'name' => 'Pasar Maga'],
            ['id' => 1071, 'district_id' => 251, 'name' => 'Sibanggor Jae'],
            ['id' => 1072, 'district_id' => 252, 'name' => 'Sipirok'],
            ['id' => 1073, 'district_id' => 252, 'name' => 'Parau Sorat'],
            ['id' => 1074, 'district_id' => 252, 'name' => 'Batang Tura'],
            ['id' => 1075, 'district_id' => 252, 'name' => 'Huta Raja'],
            ['id' => 1076, 'district_id' => 253, 'name' => 'Batang Toru'],
            ['id' => 1077, 'district_id' => 253, 'name' => 'Aek Nabara'],
            ['id' => 1078, 'district_id' => 253, 'name' => 'Sipenggeng'],
            ['id' => 1079, 'district_id' => 253, 'name' => 'Sibual Buali'],
            ['id' => 1080, 'district_id' => 254, 'name' => 'Angkola Timur'],
            ['id' => 1081, 'district_id' => 254, 'name' => 'Sipirok Godang'],
            ['id' => 1082, 'district_id' => 254, 'name' => 'Sipirok Julu'],
            ['id' => 1083, 'district_id' => 254, 'name' => 'Sipirok Tonga'],
            ['id' => 1084, 'district_id' => 255, 'name' => 'Angkola Selatan'],
            ['id' => 1085, 'district_id' => 255, 'name' => 'Sipirok Godang'],
            ['id' => 1086, 'district_id' => 255, 'name' => 'Sipirok Julu'],
            ['id' => 1087, 'district_id' => 255, 'name' => 'Sipirok Tonga'],
            ['id' => 1088, 'district_id' => 256, 'name' => 'Sayurmatinggi'],
            ['id' => 1089, 'district_id' => 256, 'name' => 'Huta Raja'],
            ['id' => 1090, 'district_id' => 256, 'name' => 'Sibanggor Jae'],
            ['id' => 1091, 'district_id' => 256, 'name' => 'Sibanggor Tonga'],
            ['id' => 1092, 'district_id' => 257, 'name' => 'Marancar'],
            ['id' => 1093, 'district_id' => 257, 'name' => 'Huta Raja'],
            ['id' => 1094, 'district_id' => 257, 'name' => 'Sibanggor Jae'],
            ['id' => 1095, 'district_id' => 257, 'name' => 'Sibanggor Tonga'],
            ['id' => 1096, 'district_id' => 258, 'name' => 'Arse'],
            ['id' => 1097, 'district_id' => 258, 'name' => 'Huta Raja'],
            ['id' => 1098, 'district_id' => 258, 'name' => 'Sibanggor Jae'],
            ['id' => 1099, 'district_id' => 258, 'name' => 'Sibanggor Tonga'],
            ['id' => 1100, 'district_id' => 259, 'name' => 'Angkola Barat'],
            ['id' => 1101, 'district_id' => 259, 'name' => 'Sipirok Godang'],
            ['id' => 1102, 'district_id' => 259, 'name' => 'Sipirok Julu'],
            ['id' => 1103, 'district_id' => 259, 'name' => 'Sipirok Tonga'],
            ['id' => 1104, 'district_id' => 260, 'name' => 'Aek Bilah'],
            ['id' => 1105, 'district_id' => 260, 'name' => 'Huta Raja'],
            ['id' => 1106, 'district_id' => 260, 'name' => 'Sibanggor Jae'],
            ['id' => 1107, 'district_id' => 260, 'name' => 'Sibanggor Tonga'],
            ['id' => 1108, 'district_id' => 261, 'name' => 'Pandan'],
            ['id' => 1109, 'district_id' => 261, 'name' => 'Huta Raja'],
            ['id' => 1110, 'district_id' => 261, 'name' => 'Sibanggor Jae'],
            ['id' => 1111, 'district_id' => 261, 'name' => 'Sibanggor Tonga'],
            ['id' => 1112, 'district_id' => 262, 'name' => 'Sibabangun'],
            ['id' => 1113, 'district_id' => 262, 'name' => 'Huta Raja'],
            ['id' => 1114, 'district_id' => 262, 'name' => 'Sibanggor Jae'],
            ['id' => 1115, 'district_id' => 262, 'name' => 'Sibanggor Tonga'],
            ['id' => 1116, 'district_id' => 263, 'name' => 'Pinangsori'],
            ['id' => 1117, 'district_id' => 263, 'name' => 'Huta Raja'],
            ['id' => 1118, 'district_id' => 263, 'name' => 'Sibanggor Jae'],
            ['id' => 1119, 'district_id' => 263, 'name' => 'Sibanggor Tonga'],
            ['id' => 1120, 'district_id' => 264, 'name' => 'Barus'],
            ['id' => 1121, 'district_id' => 264, 'name' => 'Huta Raja'],
            ['id' => 1122, 'district_id' => 264, 'name' => 'Sibanggor Jae'],
            ['id' => 1123, 'district_id' => 264, 'name' => 'Sibanggor Tonga'],
            ['id' => 1124, 'district_id' => 265, 'name' => 'Manduamas'],
            ['id' => 1125, 'district_id' => 265, 'name' => 'Huta Raja'],
            ['id' => 1126, 'district_id' => 265, 'name' => 'Sibanggor Jae'],
            ['id' => 1127, 'district_id' => 265, 'name' => 'Sibanggor Tonga'],
            ['id' => 1128, 'district_id' => 266, 'name' => 'Tarutung'],
            ['id' => 1129, 'district_id' => 266, 'name' => 'Huta Raja'],
            ['id' => 1130, 'district_id' => 266, 'name' => 'Sibanggor Jae'],
            ['id' => 1131, 'district_id' => 266, 'name' => 'Sibanggor Tonga'],
            ['id' => 1132, 'district_id' => 267, 'name' => 'Sipoholon'],
            ['id' => 1133, 'district_id' => 267, 'name' => 'Huta Raja'],
            ['id' => 1134, 'district_id' => 267, 'name' => 'Sibanggor Jae'],
            ['id' => 1135, 'district_id' => 267, 'name' => 'Sibanggor Tonga'],
            ['id' => 1136, 'district_id' => 268, 'name' => 'Pahae Julu'],
            ['id' => 1137, 'district_id' => 268, 'name' => 'Huta Raja'],
            ['id' => 1138, 'district_id' => 268, 'name' => 'Sibanggor Jae'],
            ['id' => 1139, 'district_id' => 268, 'name' => 'Sibanggor Tonga'],
            ['id' => 1140, 'district_id' => 269, 'name' => 'Pahae Jae'],
            ['id' => 1141, 'district_id' => 269, 'name' => 'Huta Raja'],
            ['id' => 1142, 'district_id' => 269, 'name' => 'Sibanggor Jae'],
            ['id' => 1143, 'district_id' => 269, 'name' => 'Sibanggor Tonga'],
            ['id' => 1144, 'district_id' => 270, 'name' => 'Adian Koting'],
            ['id' => 1145, 'district_id' => 270, 'name' => 'Huta Raja'],
            ['id' => 1146, 'district_id' => 270, 'name' => 'Sibanggor Jae'],
            ['id' => 1147, 'district_id' => 270, 'name' => 'Sibanggor Tonga'],
            ['id' => 1148, 'district_id' => 271, 'name' => 'Balige'],
            ['id' => 1149, 'district_id' => 271, 'name' => 'Huta Raja'],
            ['id' => 1150, 'district_id' => 271, 'name' => 'Sibanggor Jae'],
            ['id' => 1151, 'district_id' => 271, 'name' => 'Sibanggor Tonga'],
            ['id' => 1152, 'district_id' => 272, 'name' => 'Laguboti'],
            ['id' => 1153, 'district_id' => 272, 'name' => 'Huta Raja'],
            ['id' => 1154, 'district_id' => 272, 'name' => 'Sibanggor Jae'],
            ['id' => 1155, 'district_id' => 272, 'name' => 'Sibanggor Tonga'],
            ['id' => 1156, 'district_id' => 273, 'name' => 'Habinsaran'],
            ['id' => 1157, 'district_id' => 273, 'name' => 'Huta Raja'],
            ['id' => 1158, 'district_id' => 273, 'name' => 'Sibanggor Jae'],
            ['id' => 1159, 'district_id' => 273, 'name' => 'Sibanggor Tonga'],
            ['id' => 1160, 'district_id' => 274, 'name' => 'Porsea'],
            ['id' => 1161, 'district_id' => 274, 'name' => 'Huta Raja'],
            ['id' => 1162, 'district_id' => 274, 'name' => 'Sibanggor Jae'],
            ['id' => 1163, 'district_id' => 274, 'name' => 'Sibanggor Tonga'],
            ['id' => 1164, 'district_id' => 275, 'name' => 'Siantar Narumonda'],
            ['id' => 1165, 'district_id' => 275, 'name' => 'Huta Raja'],
            ['id' => 1166, 'district_id' => 275, 'name' => 'Sibanggor Jae'],
            ['id' => 1167, 'district_id' => 275, 'name' => 'Sibanggor Tonga'],
            ['id' => 1168, 'district_id' => 276, 'name' => 'Rantau Selatan'],
            ['id' => 1169, 'district_id' => 276, 'name' => 'Huta Raja'],
            ['id' => 1170, 'district_id' => 276, 'name' => 'Sibanggor Jae'],
            ['id' => 1171, 'district_id' => 276, 'name' => 'Sibanggor Tonga'],
            ['id' => 1172, 'district_id' => 277, 'name' => 'Rantau Utara'],
            ['id' => 1173, 'district_id' => 277, 'name' => 'Huta Raja'],
            ['id' => 1174, 'district_id' => 277, 'name' => 'Sibanggor Jae'],
            ['id' => 1175, 'district_id' => 277, 'name' => 'Sibanggor Tonga'],
            ['id' => 1176, 'district_id' => 278, 'name' => 'Bilah Barat'],
            ['id' => 1177, 'district_id' => 278, 'name' => 'Huta Raja'],
            ['id' => 1178, 'district_id' => 278, 'name' => 'Sibanggor Jae'],
            ['id' => 1179, 'district_id' => 278, 'name' => 'Sibanggor Tonga'],
            ['id' => 1180, 'district_id' => 279, 'name' => 'Bilah Hilir'],
            ['id' => 1181, 'district_id' => 279, 'name' => 'Huta Raja'],
            ['id' => 1182, 'district_id' => 279, 'name' => 'Sibanggor Jae'],
            ['id' => 1183, 'district_id' => 279, 'name' => 'Sibanggor Tonga'],
            ['id' => 1184, 'district_id' => 280, 'name' => 'Panai Hulu'],
            ['id' => 1185, 'district_id' => 280, 'name' => 'Aek Kota Batu'],
            ['id' => 1186, 'district_id' => 280, 'name' => 'Perkebunan Panai Hulu'],
            ['id' => 1187, 'district_id' => 280, 'name' => 'Perkebunan Sennah'],
            ['id' => 1188, 'district_id' => 281, 'name' => 'Kisaran Barat'],
            ['id' => 1189, 'district_id' => 281, 'name' => 'Kisaran Kota'],
            ['id' => 1190, 'district_id' => 281, 'name' => 'Sei Renggas'],
            ['id' => 1191, 'district_id' => 281, 'name' => 'Sei Kepayang'],
            ['id' => 1192, 'district_id' => 282, 'name' => 'Kisaran Timur'],
            ['id' => 1193, 'district_id' => 282, 'name' => 'Sei Kepayang Timur'],
            ['id' => 1194, 'district_id' => 282, 'name' => 'Sei Kepayang Barat'],
            ['id' => 1195, 'district_id' => 282, 'name' => 'Sei Renggas Permata'],
            ['id' => 1196, 'district_id' => 283, 'name' => 'Air Joman'],
            ['id' => 1197, 'district_id' => 283, 'name' => 'Air Joman Baru'],
            ['id' => 1198, 'district_id' => 283, 'name' => 'Pematang Jering'],
            ['id' => 1199, 'district_id' => 283, 'name' => 'Sei Dadap'],
            ['id' => 1200, 'district_id' => 284, 'name' => 'Buntu Pane'],
            ['id' => 1201, 'district_id' => 284, 'name' => 'Panei Tongah'],
            ['id' => 1202, 'district_id' => 284, 'name' => 'Panei'],
            ['id' => 1203, 'district_id' => 284, 'name' => 'Siantar Estate'],
            ['id' => 1204, 'district_id' => 285, 'name' => 'Pulau Rakyat'],
            ['id' => 1205, 'district_id' => 285, 'name' => 'Pulau Rakyat Tua'],
            ['id' => 1206, 'district_id' => 285, 'name' => 'Pulau Rakyat Pekan'],
            ['id' => 1207, 'district_id' => 285, 'name' => 'Pulau Rakyat Baru'],
            ['id' => 1208, 'district_id' => 286, 'name' => 'Siantar'],
            ['id' => 1209, 'district_id' => 286, 'name' => 'Siantar Martoba'],
            ['id' => 1210, 'district_id' => 286, 'name' => 'Siantar Selatan'],
            ['id' => 1211, 'district_id' => 286, 'name' => 'Siantar Utara'],
            ['id' => 1212, 'district_id' => 287, 'name' => 'Tanah Jawa'],
            ['id' => 1213, 'district_id' => 287, 'name' => 'Pardomuan'],
            ['id' => 1214, 'district_id' => 287, 'name' => 'Sidamanik'],
            ['id' => 1215, 'district_id' => 287, 'name' => 'Sipolha Horison'],
            ['id' => 1216, 'district_id' => 288, 'name' => 'Bosar Maligas'],
            ['id' => 1217, 'district_id' => 288, 'name' => 'Bosar Maligas I'],
            ['id' => 1218, 'district_id' => 288, 'name' => 'Bosar Maligas II'],
            ['id' => 1219, 'district_id' => 288, 'name' => 'Bosar Maligas III'],
            ['id' => 1220, 'district_id' => 289, 'name' => 'Pamatang Silima Huta'],
            ['id' => 1221, 'district_id' => 289, 'name' => 'Pamatang Silima Huta I'],
            ['id' => 1222, 'district_id' => 289, 'name' => 'Pamatang Silima Huta II'],
            ['id' => 1223, 'district_id' => 289, 'name' => 'Pamatang Silima Huta III'],
            ['id' => 1224, 'district_id' => 290, 'name' => 'Panei'],
            ['id' => 1225, 'district_id' => 290, 'name' => 'Panei Tongah'],
            ['id' => 1226, 'district_id' => 290, 'name' => 'Panei Satu'],
            ['id' => 1227, 'district_id' => 290, 'name' => 'Panei Dua'],
            ['id' => 1228, 'district_id' => 291, 'name' => 'Sidikalang'],
            ['id' => 1229, 'district_id' => 291, 'name' => 'Sidikalang Kota'],
            ['id' => 1230, 'district_id' => 291, 'name' => 'Sidikalang Baru'],
            ['id' => 1231, 'district_id' => 291, 'name' => 'Sidikalang Lama'],
            ['id' => 1232, 'district_id' => 292, 'name' => 'Parbuluan'],
            ['id' => 1233, 'district_id' => 292, 'name' => 'Parbuluan I'],
            ['id' => 1234, 'district_id' => 292, 'name' => 'Parbuluan II'],
            ['id' => 1235, 'district_id' => 292, 'name' => 'Parbuluan III'],
            ['id' => 1236, 'district_id' => 293, 'name' => 'Sumbul'],
            ['id' => 1237, 'district_id' => 293, 'name' => 'Sumbul I'],
            ['id' => 1238, 'district_id' => 293, 'name' => 'Sumbul II'],
            ['id' => 1239, 'district_id' => 293, 'name' => 'Sumbul III'],
            ['id' => 1240, 'district_id' => 294, 'name' => 'Silima Pungga-Pungga'],
            ['id' => 1241, 'district_id' => 294, 'name' => 'Silima Pungga-Pungga I'],
            ['id' => 1242, 'district_id' => 294, 'name' => 'Silima Pungga-Pungga II'],
            ['id' => 1243, 'district_id' => 294, 'name' => 'Silima Pungga-Pungga III'],
            ['id' => 1244, 'district_id' => 295, 'name' => 'Lae Parira'],
            ['id' => 1245, 'district_id' => 295, 'name' => 'Lae Parira I'],
            ['id' => 1246, 'district_id' => 295, 'name' => 'Lae Parira II'],
            ['id' => 1247, 'district_id' => 295, 'name' => 'Lae Parira III'],
            ['id' => 1248, 'district_id' => 296, 'name' => 'Kabanjahe'],
            ['id' => 1249, 'district_id' => 296, 'name' => 'Kabanjahe Kota'],
            ['id' => 1250, 'district_id' => 296, 'name' => 'Kabanjahe Baru'],
            ['id' => 1251, 'district_id' => 296, 'name' => 'Kabanjahe Lama'],
            ['id' => 1252, 'district_id' => 297, 'name' => 'Berastagi'],
            ['id' => 1253, 'district_id' => 297, 'name' => 'Berastagi Kota'],
            ['id' => 1254, 'district_id' => 297, 'name' => 'Berastagi Baru'],
            ['id' => 1255, 'district_id' => 297, 'name' => 'Berastagi Lama'],
            ['id' => 1256, 'district_id' => 298, 'name' => 'Merdeka'],
            ['id' => 1257, 'district_id' => 298, 'name' => 'Merdeka I'],
            ['id' => 1258, 'district_id' => 298, 'name' => 'Merdeka II'],
            ['id' => 1259, 'district_id' => 298, 'name' => 'Merdeka III'],
            ['id' => 1260, 'district_id' => 299, 'name' => 'Mardingding'],
            ['id' => 1261, 'district_id' => 299, 'name' => 'Mardingding I'],
            ['id' => 1262, 'district_id' => 299, 'name' => 'Mardingding II'],
            ['id' => 1263, 'district_id' => 299, 'name' => 'Mardingding III'],
            ['id' => 1264, 'district_id' => 300, 'name' => 'Tiga Binanga'],
            ['id' => 1265, 'district_id' => 300, 'name' => 'Tiga Binanga I'],
            ['id' => 1266, 'district_id' => 300, 'name' => 'Tiga Binanga II'],
            ['id' => 1267, 'district_id' => 300, 'name' => 'Tiga Binanga III'],
            ['id' => 1268, 'district_id' => 301, 'name' => 'Lubuk Pakam'],
            ['id' => 1269, 'district_id' => 301, 'name' => 'Pagar Jati'],
            ['id' => 1270, 'district_id' => 301, 'name' => 'Pasar Melintang'],
            ['id' => 1271, 'district_id' => 301, 'name' => 'Tanjung Garbus'],
            ['id' => 1272, 'district_id' => 302, 'name' => 'Percut'],
            ['id' => 1273, 'district_id' => 302, 'name' => 'Sei Tuan'],
            ['id' => 1274, 'district_id' => 302, 'name' => 'Cinta Damai'],
            ['id' => 1275, 'district_id' => 302, 'name' => 'Pematang Lalang'],
            ['id' => 1276, 'district_id' => 303, 'name' => 'Sibolangit'],
            ['id' => 1277, 'district_id' => 303, 'name' => 'Durin Simbelang'],
            ['id' => 1278, 'district_id' => 303, 'name' => 'Batu Mbelin'],
            ['id' => 1279, 'district_id' => 303, 'name' => 'Tanjung Beringin'],
            ['id' => 1280, 'district_id' => 304, 'name' => 'Batang Kuis'],
            ['id' => 1281, 'district_id' => 304, 'name' => 'Paya Gambar'],
            ['id' => 1282, 'district_id' => 304, 'name' => 'Bintang Meriah'],
            ['id' => 1283, 'district_id' => 304, 'name' => 'Pekan Tanjung Morawa'],
            ['id' => 1284, 'district_id' => 305, 'name' => 'Patumbak'],
            ['id' => 1285, 'district_id' => 305, 'name' => 'Cinta Rakyat'],
            ['id' => 1286, 'district_id' => 305, 'name' => 'Lau Cih'],
            ['id' => 1287, 'district_id' => 305, 'name' => 'Sigara-gara'],
            ['id' => 1288, 'district_id' => 306, 'name' => 'Stabat'],
            ['id' => 1289, 'district_id' => 306, 'name' => 'Paya Pasir'],
            ['id' => 1290, 'district_id' => 306, 'name' => 'Kwala Bingai'],
            ['id' => 1291, 'district_id' => 306, 'name' => 'Pekan Gebang'],
            ['id' => 1292, 'district_id' => 307, 'name' => 'Hinai'],
            ['id' => 1293, 'district_id' => 307, 'name' => 'Paluh Manan'],
            ['id' => 1294, 'district_id' => 307, 'name' => 'Paya Perupuk'],
            ['id' => 1295, 'district_id' => 307, 'name' => 'Sei Ular'],
            ['id' => 1296, 'district_id' => 308, 'name' => 'Secanggang'],
            ['id' => 1297, 'district_id' => 308, 'name' => 'Pekan Tj. Pura'],
            ['id' => 1298, 'district_id' => 308, 'name' => 'Telaga Jernih'],
            ['id' => 1299, 'district_id' => 308, 'name' => 'Suka Mulia'],
            ['id' => 1300, 'district_id' => 309, 'name' => 'Gebang'],
            ['id' => 1301, 'district_id' => 309, 'name' => 'Paya Bengkuang'],
            ['id' => 1302, 'district_id' => 309, 'name' => 'Pekan Gebang'],
            ['id' => 1303, 'district_id' => 309, 'name' => 'Sei Tuan'],
            ['id' => 1304, 'district_id' => 310, 'name' => 'Wampu'],
            ['id' => 1305, 'district_id' => 310, 'name' => 'Paluh Manan'],
            ['id' => 1306, 'district_id' => 310, 'name' => 'Paya Perupuk'],
            ['id' => 1307, 'district_id' => 310, 'name' => 'Sei Ular'],
            ['id' => 1308, 'district_id' => 311, 'name' => 'Teluk Dalam'],
            ['id' => 1309, 'district_id' => 311, 'name' => 'Pulau Banyak'],
            ['id' => 1310, 'district_id' => 311, 'name' => 'Pulau Baguk'],
            ['id' => 1311, 'district_id' => 311, 'name' => 'Situbuk'],
            ['id' => 1312, 'district_id' => 312, 'name' => 'Amandraya'],
            ['id' => 1313, 'district_id' => 312, 'name' => 'Hilimbowo'],
            ['id' => 1314, 'district_id' => 312, 'name' => 'Hilimegai'],
            ['id' => 1315, 'district_id' => 312, 'name' => 'Hiliweto'],
            ['id' => 1316, 'district_id' => 313, 'name' => 'Lahusa'],
            ['id' => 1317, 'district_id' => 313, 'name' => 'Hilifadolo'],
            ['id' => 1318, 'district_id' => 313, 'name' => 'Hilimagiao'],
            ['id' => 1319, 'district_id' => 313, 'name' => 'Hilinamozaua'],
            ['id' => 1320, 'district_id' => 314, 'name' => 'Gomo'],
            ['id' => 1321, 'district_id' => 314, 'name' => 'Hilialito'],
            ['id' => 1322, 'district_id' => 314, 'name' => 'Hiliserangkai'],
            ['id' => 1323, 'district_id' => 314, 'name' => 'Hilizomboi'],
            ['id' => 1324, 'district_id' => 315, 'name' => 'Maniamolo'],
            ['id' => 1325, 'district_id' => 315, 'name' => 'Hilifalago'],
            ['id' => 1326, 'district_id' => 315, 'name' => 'Hiliorudua'],
            ['id' => 1327, 'district_id' => 315, 'name' => 'Hilizomboi'],
            ['id' => 1328, 'district_id' => 316, 'name' => 'Dolok Sanggul'],
            ['id' => 1329, 'district_id' => 316, 'name' => 'Lintong Nihuta'],
            ['id' => 1330, 'district_id' => 316, 'name' => 'Pollung'],
            ['id' => 1331, 'district_id' => 316, 'name' => 'Onan Ganjang'],
            ['id' => 1332, 'district_id' => 317, 'name' => 'Lintong Nihuta'],
            ['id' => 1333, 'district_id' => 317, 'name' => 'Pollung'],
            ['id' => 1334, 'district_id' => 317, 'name' => 'Onan Ganjang'],
            ['id' => 1335, 'district_id' => 317, 'name' => 'Pakkat'],
            ['id' => 1336, 'district_id' => 318, 'name' => 'Pollung'],
            ['id' => 1337, 'district_id' => 318, 'name' => 'Onan Ganjang'],
            ['id' => 1338, 'district_id' => 318, 'name' => 'Pakkat'],
            ['id' => 1339, 'district_id' => 318, 'name' => 'Dolok Sanggul'],
            ['id' => 1340, 'district_id' => 319, 'name' => 'Onan Ganjang'],
            ['id' => 1341, 'district_id' => 319, 'name' => 'Pakkat'],
            ['id' => 1342, 'district_id' => 319, 'name' => 'Dolok Sanggul'],
            ['id' => 1343, 'district_id' => 319, 'name' => 'Lintong Nihuta'],
            ['id' => 1344, 'district_id' => 320, 'name' => 'Pakkat'],
            ['id' => 1345, 'district_id' => 320, 'name' => 'Dolok Sanggul'],
            ['id' => 1346, 'district_id' => 320, 'name' => 'Lintong Nihuta'],
            ['id' => 1347, 'district_id' => 320, 'name' => 'Onan Ganjang'],
            ['id' => 1348, 'district_id' => 321, 'name' => 'Salak'],
            ['id' => 1349, 'district_id' => 321, 'name' => 'Pagindar'],
            ['id' => 1350, 'district_id' => 321, 'name' => 'Pergetteng Getteng Sengkut'],
            ['id' => 1351, 'district_id' => 321, 'name' => 'Tinada'],
            ['id' => 1352, 'district_id' => 322, 'name' => 'Pagindar'],
            ['id' => 1353, 'district_id' => 322, 'name' => 'Pergetteng Getteng Sengkut'],
            ['id' => 1354, 'district_id' => 322, 'name' => 'Tinada'],
            ['id' => 1355, 'district_id' => 322, 'name' => 'Salak'],
            ['id' => 1356, 'district_id' => 323, 'name' => 'Pergetteng Getteng Sengkut'],
            ['id' => 1357, 'district_id' => 323, 'name' => 'Tinada'],
            ['id' => 1358, 'district_id' => 323, 'name' => 'Salak'],
            ['id' => 1359, 'district_id' => 323, 'name' => 'Pagindar'],
            ['id' => 1360, 'district_id' => 324, 'name' => 'Tinada'],
            ['id' => 1361, 'district_id' => 324, 'name' => 'Salak'],
            ['id' => 1362, 'district_id' => 324, 'name' => 'Pagindar'],
            ['id' => 1363, 'district_id' => 324, 'name' => 'Pergetteng Getteng Sengkut'],
            ['id' => 1364, 'district_id' => 325, 'name' => 'Siempat Rube'],
            ['id' => 1365, 'district_id' => 325, 'name' => 'Salak'],
            ['id' => 1366, 'district_id' => 325, 'name' => 'Pagindar'],
            ['id' => 1367, 'district_id' => 325, 'name' => 'Pergetteng Getteng Sengkut'],
            ['id' => 1368, 'district_id' => 326, 'name' => 'Pangururan'],
            ['id' => 1369, 'district_id' => 326, 'name' => 'Lumban Suhi-suhi'],
            ['id' => 1370, 'district_id' => 326, 'name' => 'Parbaba'],
            ['id' => 1371, 'district_id' => 326, 'name' => 'Siopat Sosor'],
            ['id' => 1372, 'district_id' => 326, 'name' => 'Pardomuan'],
            ['id' => 1373, 'district_id' => 326, 'name' => 'Huta Tinggi'],
            ['id' => 1374, 'district_id' => 327, 'name' => 'Ambarita'],
            ['id' => 1375, 'district_id' => 327, 'name' => 'Tomok'],
            ['id' => 1376, 'district_id' => 327, 'name' => 'Garoga'],
            ['id' => 1377, 'district_id' => 327, 'name' => 'Simanindo'],
            ['id' => 1378, 'district_id' => 327, 'name' => 'Siallagan'],
            ['id' => 1379, 'district_id' => 327, 'name' => 'Tuktuk Siadong'],
            ['id' => 1380, 'district_id' => 328, 'name' => 'Harian'],
            ['id' => 1381, 'district_id' => 328, 'name' => 'Janji Raja'],
            ['id' => 1382, 'district_id' => 328, 'name' => 'Partungko Naginjang'],
            ['id' => 1383, 'district_id' => 328, 'name' => 'Huta Ginjang'],
            ['id' => 1384, 'district_id' => 328, 'name' => 'Siboro'],
            ['id' => 1385, 'district_id' => 328, 'name' => 'Parmonangan'],
            ['id' => 1386, 'district_id' => 329, 'name' => 'Nainggolan'],
            ['id' => 1387, 'district_id' => 329, 'name' => 'Sibisa'],
            ['id' => 1388, 'district_id' => 329, 'name' => 'Siboruon'],
            ['id' => 1389, 'district_id' => 329, 'name' => 'Sibonor Ompu Ratus'],
            ['id' => 1390, 'district_id' => 329, 'name' => 'Sihusapi'],
            ['id' => 1391, 'district_id' => 329, 'name' => 'Sihotang'],
            ['id' => 1392, 'district_id' => 330, 'name' => 'Onan Runggu'],
            ['id' => 1393, 'district_id' => 330, 'name' => 'Huta Namora'],
            ['id' => 1394, 'district_id' => 330, 'name' => 'Huta Raja'],
            ['id' => 1395, 'district_id' => 330, 'name' => 'Huta Bolon'],
            ['id' => 1396, 'district_id' => 330, 'name' => 'Huta Ginjang'],
            ['id' => 1397, 'district_id' => 330, 'name' => 'Huta Tinggi'],
            ['id' => 1398, 'district_id' => 331, 'name' => 'Sei Rampah'],
            ['id' => 1399, 'district_id' => 331, 'name' => 'Cempedak Lobang'],
            ['id' => 1400, 'district_id' => 331, 'name' => 'Firdaus'],
            ['id' => 1401, 'district_id' => 331, 'name' => 'Pematang Ganjang'],
            ['id' => 1402, 'district_id' => 331, 'name' => 'Sei Rejo'],
            ['id' => 1403, 'district_id' => 331, 'name' => 'Sei Parit'],
            ['id' => 1404, 'district_id' => 332, 'name' => 'Tebing Tinggi'],
            ['id' => 1405, 'district_id' => 332, 'name' => 'Paya Pasir'],
            ['id' => 1406, 'district_id' => 332, 'name' => 'Paya Lombang'],
            ['id' => 1407, 'district_id' => 332, 'name' => 'Paya Bagas'],
            ['id' => 1408, 'district_id' => 332, 'name' => 'Paya Pinang'],
            ['id' => 1409, 'district_id' => 332, 'name' => 'Paya Mabar'],
            ['id' => 1410, 'district_id' => 333, 'name' => 'Perbaungan'],
            ['id' => 1411, 'district_id' => 333, 'name' => 'Lubuk Bayas'],
            ['id' => 1412, 'district_id' => 333, 'name' => 'Jambur Pulau'],
            ['id' => 1413, 'district_id' => 333, 'name' => 'Suka Jadi'],
            ['id' => 1414, 'district_id' => 333, 'name' => 'Suka Maju'],
            ['id' => 1415, 'district_id' => 333, 'name' => 'Suka Damai'],
            ['id' => 1416, 'district_id' => 334, 'name' => 'Pantai Cermin'],
            ['id' => 1417, 'district_id' => 334, 'name' => 'Celawan'],
            ['id' => 1418, 'district_id' => 334, 'name' => 'Kota Pari'],
            ['id' => 1419, 'district_id' => 334, 'name' => 'Ujung Rambung'],
            ['id' => 1420, 'district_id' => 334, 'name' => 'Naga Kisar'],
            ['id' => 1421, 'district_id' => 334, 'name' => 'Naga Lawan'],
            ['id' => 1422, 'district_id' => 335, 'name' => 'Pegajahan'],
            ['id' => 1423, 'district_id' => 335, 'name' => 'Sei Bamban'],
            ['id' => 1424, 'district_id' => 335, 'name' => 'Sei Tuan'],
            ['id' => 1425, 'district_id' => 335, 'name' => 'Pematang Guntung'],
            ['id' => 1426, 'district_id' => 335, 'name' => 'Pematang Cengal'],
            ['id' => 1427, 'district_id' => 336, 'name' => 'Lima Puluh'],
            ['id' => 1428, 'district_id' => 336, 'name' => 'Pematang Sijonam'],
            ['id' => 1429, 'district_id' => 336, 'name' => 'Sei Rampah'],
            ['id' => 1430, 'district_id' => 336, 'name' => 'Sei Parit'],
            ['id' => 1431, 'district_id' => 336, 'name' => 'Sei Buluh'],
            ['id' => 1432, 'district_id' => 337, 'name' => 'Tanjung Tiram'],
            ['id' => 1433, 'district_id' => 337, 'name' => 'Sei Sembilang'],
            ['id' => 1434, 'district_id' => 337, 'name' => 'Sei Tualang'],
            ['id' => 1435, 'district_id' => 337, 'name' => 'Sei Kepayang'],
            ['id' => 1436, 'district_id' => 337, 'name' => 'Sei Limau'],
            ['id' => 1437, 'district_id' => 338, 'name' => 'Talawi'],
            ['id' => 1438, 'district_id' => 338, 'name' => 'Sei Silau'],
            ['id' => 1439, 'district_id' => 338, 'name' => 'Sei Mencirim'],
            ['id' => 1440, 'district_id' => 338, 'name' => 'Sei Dadap'],
            ['id' => 1441, 'district_id' => 338, 'name' => 'Sei Kerapuh'],
            ['id' => 1442, 'district_id' => 339, 'name' => 'Sei Balai'],
            ['id' => 1443, 'district_id' => 339, 'name' => 'Sei Suka'],
            ['id' => 1444, 'district_id' => 339, 'name' => 'Sei Tuan'],
            ['id' => 1445, 'district_id' => 339, 'name' => 'Sei Bamban'],
            ['id' => 1446, 'district_id' => 339, 'name' => 'Sei Rampah'],
            ['id' => 1447, 'district_id' => 340, 'name' => 'Medang Deras'],
            ['id' => 1448, 'district_id' => 340, 'name' => 'Sei Suka Deras'],
            ['id' => 1449, 'district_id' => 340, 'name' => 'Sei Rampah'],
            ['id' => 1450, 'district_id' => 340, 'name' => 'Sei Bamban'],
            ['id' => 1451, 'district_id' => 340, 'name' => 'Sei Tualang'],
            ['id' => 1452, 'district_id' => 341, 'name' => 'Sibuhuan'],
            ['id' => 1453, 'district_id' => 341, 'name' => 'Pargarutan'],
            ['id' => 1454, 'district_id' => 341, 'name' => 'Huta Padang'],
            ['id' => 1455, 'district_id' => 341, 'name' => 'Huta Raja'],
            ['id' => 1456, 'district_id' => 341, 'name' => 'Huta Tinggi'],
            ['id' => 1457, 'district_id' => 342, 'name' => 'Barumun Tengah'],
            ['id' => 1458, 'district_id' => 342, 'name' => 'Huta Godang'],
            ['id' => 1459, 'district_id' => 342, 'name' => 'Huta Padang'],
            ['id' => 1460, 'district_id' => 342, 'name' => 'Huta Raja'],
            ['id' => 1461, 'district_id' => 342, 'name' => 'Huta Tinggi'],
            ['id' => 1462, 'district_id' => 343, 'name' => 'Huristak'],
            ['id' => 1463, 'district_id' => 343, 'name' => 'Huta Raja'],
            ['id' => 1464, 'district_id' => 343, 'name' => 'Huta Padang'],
            ['id' => 1465, 'district_id' => 343, 'name' => 'Huta Tinggi'],
            ['id' => 1466, 'district_id' => 343, 'name' => 'Huta Godang'],
            ['id' => 1467, 'district_id' => 344, 'name' => 'Lubuk Barumun'],
            ['id' => 1468, 'district_id' => 344, 'name' => 'Huta Raja'],
            ['id' => 1469, 'district_id' => 344, 'name' => 'Huta Padang'],
            ['id' => 1470, 'district_id' => 344, 'name' => 'Huta Tinggi'],
            ['id' => 1471, 'district_id' => 344, 'name' => 'Huta Godang'],
            ['id' => 1472, 'district_id' => 345, 'name' => 'Huta Raja Tinggi'],
            ['id' => 1473, 'district_id' => 345, 'name' => 'Huta Padang'],
            ['id' => 1474, 'district_id' => 345, 'name' => 'Huta Tinggi'],
            ['id' => 1475, 'district_id' => 345, 'name' => 'Huta Godang'],
            ['id' => 1476, 'district_id' => 345, 'name' => 'Huta Raja'],
            ['id' => 1477, 'district_id' => 346, 'name' => 'Gunung Tua'],
            ['id' => 1478, 'district_id' => 346, 'name' => 'Huta Raja'],
            ['id' => 1479, 'district_id' => 346, 'name' => 'Huta Padang'],
            ['id' => 1480, 'district_id' => 346, 'name' => 'Huta Tinggi'],
            ['id' => 1481, 'district_id' => 346, 'name' => 'Huta Godang'],
            ['id' => 1482, 'district_id' => 347, 'name' => 'Padang Bolak'],
            ['id' => 1483, 'district_id' => 347, 'name' => 'Huta Raja'],
            ['id' => 1484, 'district_id' => 347, 'name' => 'Huta Padang'],
            ['id' => 1485, 'district_id' => 347, 'name' => 'Huta Tinggi'],
            ['id' => 1486, 'district_id' => 347, 'name' => 'Huta Godang'],
            ['id' => 1487, 'district_id' => 348, 'name' => 'Portibi'],
            ['id' => 1488, 'district_id' => 348, 'name' => 'Huta Raja'],
            ['id' => 1489, 'district_id' => 348, 'name' => 'Huta Padang'],
            ['id' => 1490, 'district_id' => 348, 'name' => 'Huta Tinggi'],
            ['id' => 1491, 'district_id' => 348, 'name' => 'Huta Godang'],
            ['id' => 1492, 'district_id' => 349, 'name' => 'Simangambat'],
            ['id' => 1493, 'district_id' => 349, 'name' => 'Huta Raja'],
            ['id' => 1494, 'district_id' => 349, 'name' => 'Huta Padang'],
            ['id' => 1495, 'district_id' => 349, 'name' => 'Huta Tinggi'],
            ['id' => 1496, 'district_id' => 349, 'name' => 'Huta Godang'],
            ['id' => 1497, 'district_id' => 350, 'name' => 'Batang Onang'],
            ['id' => 1498, 'district_id' => 350, 'name' => 'Huta Raja'],
            ['id' => 1499, 'district_id' => 350, 'name' => 'Huta Padang'],
            ['id' => 1500, 'district_id' => 350, 'name' => 'Huta Tinggi'],
            ['id' => 1501, 'district_id' => 350, 'name' => 'Huta Godang'],
            ['id' => 1502, 'district_id' => 351, 'name' => 'Kotapinang'],
            ['id' => 1503, 'district_id' => 351, 'name' => 'Perkebunan Tanjung Kasau'],
            ['id' => 1504, 'district_id' => 351, 'name' => 'Perkebunan Aek Nagaga'],
            ['id' => 1505, 'district_id' => 351, 'name' => 'Perkebunan Sipare-pare'],
            ['id' => 1506, 'district_id' => 351, 'name' => 'Perkebunan Aek Pancur'],
            ['id' => 1507, 'district_id' => 352, 'name' => 'Torgamba'],
            ['id' => 1508, 'district_id' => 352, 'name' => 'Perkebunan Aek Batu'],
            ['id' => 1509, 'district_id' => 352, 'name' => 'Perkebunan Bandar Selamat'],
            ['id' => 1510, 'district_id' => 352, 'name' => 'Perkebunan Bandar Sono'],
            ['id' => 1511, 'district_id' => 352, 'name' => 'Perkebunan Torgamba'],
            ['id' => 1512, 'district_id' => 353, 'name' => 'Kampung Rakyat'],
            ['id' => 1513, 'district_id' => 353, 'name' => 'Perkebunan Aek Nabara'],
            ['id' => 1514, 'district_id' => 353, 'name' => 'Perkebunan Aek Raso'],
            ['id' => 1515, 'district_id' => 353, 'name' => 'Perkebunan Bandar Durian'],
            ['id' => 1516, 'district_id' => 353, 'name' => 'Perkebunan Bandar Pinang'],
            ['id' => 1517, 'district_id' => 354, 'name' => 'Sungai Kanan'],
            ['id' => 1518, 'district_id' => 354, 'name' => 'Perkebunan Aek Gambir'],
            ['id' => 1519, 'district_id' => 354, 'name' => 'Perkebunan Aek Nabara'],
            ['id' => 1520, 'district_id' => 354, 'name' => 'Perkebunan Aek Raso'],
            ['id' => 1521, 'district_id' => 354, 'name' => 'Perkebunan Bandar Sono'],
            ['id' => 1522, 'district_id' => 355, 'name' => 'Silangkitang'],
            ['id' => 1523, 'district_id' => 355, 'name' => 'Perkebunan Aek Batu'],
            ['id' => 1524, 'district_id' => 355, 'name' => 'Perkebunan Aek Pancur'],
            ['id' => 1525, 'district_id' => 355, 'name' => 'Perkebunan Bandar Selamat'],
            ['id' => 1526, 'district_id' => 355, 'name' => 'Perkebunan Bandar Sono'],
            ['id' => 1527, 'district_id' => 356, 'name' => 'Aek Kanopan'],
            ['id' => 1528, 'district_id' => 356, 'name' => 'Perkebunan Aek Batu'],
            ['id' => 1529, 'district_id' => 356, 'name' => 'Perkebunan Aek Pancur'],
            ['id' => 1530, 'district_id' => 356, 'name' => 'Perkebunan Bandar Selamat'],
            ['id' => 1531, 'district_id' => 356, 'name' => 'Perkebunan Bandar Sono'],
            ['id' => 1532, 'district_id' => 357, 'name' => 'Kualuh Hulu'],
            ['id' => 1533, 'district_id' => 357, 'name' => 'Perkebunan Aek Nabara'],
            ['id' => 1534, 'district_id' => 357, 'name' => 'Perkebunan Aek Raso'],
            ['id' => 1535, 'district_id' => 357, 'name' => 'Perkebunan Bandar Durian'],
            ['id' => 1536, 'district_id' => 357, 'name' => 'Perkebunan Bandar Pinang'],
            ['id' => 1537, 'district_id' => 358, 'name' => 'Kualuh Selatan'],
            ['id' => 1538, 'district_id' => 358, 'name' => 'Perkebunan Aek Gambir'],
            ['id' => 1539, 'district_id' => 358, 'name' => 'Perkebunan Aek Nabara'],
            ['id' => 1540, 'district_id' => 358, 'name' => 'Perkebunan Aek Raso'],
            ['id' => 1541, 'district_id' => 358, 'name' => 'Perkebunan Bandar Sono'],
            ['id' => 1542, 'district_id' => 359, 'name' => 'Kualuh Hilir'],
            ['id' => 1543, 'district_id' => 359, 'name' => 'Perkebunan Aek Batu'],
            ['id' => 1544, 'district_id' => 359, 'name' => 'Perkebunan Aek Pancur'],
            ['id' => 1545, 'district_id' => 359, 'name' => 'Perkebunan Bandar Selamat'],
            ['id' => 1546, 'district_id' => 359, 'name' => 'Perkebunan Bandar Sono'],
            ['id' => 1547, 'district_id' => 360, 'name' => 'Aek Natas'],
            ['id' => 1548, 'district_id' => 360, 'name' => 'Perkebunan Aek Nabara'],
            ['id' => 1549, 'district_id' => 360, 'name' => 'Perkebunan Aek Raso'],
            ['id' => 1550, 'district_id' => 360, 'name' => 'Perkebunan Bandar Durian'],
            ['id' => 1551, 'district_id' => 360, 'name' => 'Perkebunan Bandar Pinang'],
            ['id' => 1552, 'district_id' => 361, 'name' => 'Lotu'],
            ['id' => 1553, 'district_id' => 361, 'name' => 'Perkebunan Aek Batu'],
            ['id' => 1554, 'district_id' => 361, 'name' => 'Perkebunan Aek Pancur'],
            ['id' => 1555, 'district_id' => 361, 'name' => 'Perkebunan Bandar Selamat'],
            ['id' => 1556, 'district_id' => 361, 'name' => 'Perkebunan Bandar Sono'],
            ['id' => 1557, 'district_id' => 362, 'name' => 'Lahewa'],
            ['id' => 1558, 'district_id' => 362, 'name' => 'Perkebunan Aek Nabara'],
            ['id' => 1559, 'district_id' => 362, 'name' => 'Perkebunan Aek Raso'],
            ['id' => 1560, 'district_id' => 362, 'name' => 'Perkebunan Bandar Durian'],
            ['id' => 1561, 'district_id' => 362, 'name' => 'Perkebunan Bandar Pinang'],
            ['id' => 1562, 'district_id' => 363, 'name' => 'Alasa'],
            ['id' => 1563, 'district_id' => 363, 'name' => 'Perkebunan Aek Gambir'],
            ['id' => 1564, 'district_id' => 363, 'name' => 'Perkebunan Aek Nabara'],
            ['id' => 1565, 'district_id' => 363, 'name' => 'Perkebunan Aek Raso'],
            ['id' => 1566, 'district_id' => 363, 'name' => 'Perkebunan Bandar Sono'],
            ['id' => 1567, 'district_id' => 364, 'name' => 'Tugala Oyo'],
            ['id' => 1568, 'district_id' => 364, 'name' => 'Perkebunan Aek Batu'],
            ['id' => 1569, 'district_id' => 364, 'name' => 'Perkebunan Aek Pancur'],
            ['id' => 1570, 'district_id' => 364, 'name' => 'Perkebunan Bandar Selamat'],
            ['id' => 1571, 'district_id' => 364, 'name' => 'Perkebunan Bandar Sono'],
            ['id' => 1572, 'district_id' => 365, 'name' => 'Namohalu Esiwa'],
            ['id' => 1573, 'district_id' => 365, 'name' => 'Perkebunan Aek Nabara'],
            ['id' => 1574, 'district_id' => 365, 'name' => 'Perkebunan Aek Raso'],
            ['id' => 1575, 'district_id' => 365, 'name' => 'Perkebunan Bandar Durian'],
            ['id' => 1576, 'district_id' => 365, 'name' => 'Perkebunan Bandar Pinang'],
            ['id' => 1577, 'district_id' => 366, 'name' => 'Lahomi'],
            ['id' => 1578, 'district_id' => 366, 'name' => 'Perkebunan Aek Batu'],
            ['id' => 1579, 'district_id' => 366, 'name' => 'Perkebunan Aek Pancur'],
            ['id' => 1580, 'district_id' => 366, 'name' => 'Perkebunan Bandar Selamat'],
            ['id' => 1581, 'district_id' => 366, 'name' => 'Perkebunan Bandar Sono'],
            ['id' => 1582, 'district_id' => 367, 'name' => 'Mandrehe'],
            ['id' => 1583, 'district_id' => 367, 'name' => 'Perkebunan Aek Nabara'],
            ['id' => 1584, 'district_id' => 367, 'name' => 'Perkebunan Aek Raso'],
            ['id' => 1585, 'district_id' => 367, 'name' => 'Perkebunan Bandar Durian'],
            ['id' => 1586, 'district_id' => 367, 'name' => 'Perkebunan Bandar Pinang'],
            ['id' => 1587, 'district_id' => 368, 'name' => 'Mandrehe Utara'],
            ['id' => 1588, 'district_id' => 368, 'name' => 'Perkebunan Aek Gambir'],
            ['id' => 1589, 'district_id' => 368, 'name' => 'Perkebunan Aek Nabara'],
            ['id' => 1590, 'district_id' => 368, 'name' => 'Perkebunan Aek Raso'],
            ['id' => 1591, 'district_id' => 368, 'name' => 'Perkebunan Bandar Sono'],
            ['id' => 1592, 'district_id' => 369, 'name' => 'Mandrehe Barat'],
            ['id' => 1593, 'district_id' => 369, 'name' => 'Perkebunan Aek Batu'],
            ['id' => 1594, 'district_id' => 369, 'name' => 'Perkebunan Aek Pancur'],
            ['id' => 1595, 'district_id' => 369, 'name' => 'Perkebunan Bandar Selamat'],
            ['id' => 1596, 'district_id' => 369, 'name' => 'Perkebunan Bandar Sono'],
            ['id' => 1597, 'district_id' => 370, 'name' => 'Sirombu'],
            ['id' => 1598, 'district_id' => 370, 'name' => 'Perkebunan Aek Nabara'],
            ['id' => 1599, 'district_id' => 370, 'name' => 'Perkebunan Aek Raso'],
            ['id' => 1600, 'district_id' => 370, 'name' => 'Perkebunan Bandar Durian'],
            ['id' => 1601, 'district_id' => 370, 'name' => 'Perkebunan Bandar Pinang'],
            ['id' => 1602, 'district_id' => 371, 'name' => 'Sibolga Utara'],
            ['id' => 1603, 'district_id' => 371, 'name' => 'Perkebunan Aek Batu'],
            ['id' => 1604, 'district_id' => 371, 'name' => 'Perkebunan Aek Pancur'],
            ['id' => 1605, 'district_id' => 371, 'name' => 'Perkebunan Bandar Selamat'],
            ['id' => 1606, 'district_id' => 371, 'name' => 'Perkebunan Bandar Sono'],
            ['id' => 1607, 'district_id' => 372, 'name' => 'Sibolga Kota'],
            ['id' => 1608, 'district_id' => 372, 'name' => 'Perkebunan Aek Nabara'],
            ['id' => 1609, 'district_id' => 372, 'name' => 'Perkebunan Aek Raso'],
            ['id' => 1610, 'district_id' => 372, 'name' => 'Perkebunan Bandar Durian'],
            ['id' => 1611, 'district_id' => 372, 'name' => 'Perkebunan Bandar Pinang'],
            ['id' => 1612, 'district_id' => 373, 'name' => 'Sibolga Selatan'],
            ['id' => 1613, 'district_id' => 373, 'name' => 'Perkebunan Aek Gambir'],
            ['id' => 1614, 'district_id' => 373, 'name' => 'Perkebunan Aek Nabara'],
            ['id' => 1615, 'district_id' => 373, 'name' => 'Perkebunan Aek Raso'],
            ['id' => 1616, 'district_id' => 373, 'name' => 'Perkebunan Bandar Sono'],
            ['id' => 1617, 'district_id' => 374, 'name' => 'Sibolga Sambas'],
            ['id' => 1618, 'district_id' => 374, 'name' => 'Perkebunan Aek Batu'],
            ['id' => 1619, 'district_id' => 374, 'name' => 'Perkebunan Aek Pancur'],
            ['id' => 1620, 'district_id' => 374, 'name' => 'Perkebunan Bandar Selamat'],
            ['id' => 1621, 'district_id' => 374, 'name' => 'Perkebunan Bandar Sono'],
            ['id' => 1622, 'district_id' => 375, 'name' => 'Tanjungbalai Utara'],
            ['id' => 1623, 'district_id' => 375, 'name' => 'Perkebunan Aek Nabara'],
            ['id' => 1624, 'district_id' => 375, 'name' => 'Perkebunan Aek Raso'],
            ['id' => 1625, 'district_id' => 375, 'name' => 'Perkebunan Bandar Durian'],
            ['id' => 1626, 'district_id' => 375, 'name' => 'Perkebunan Bandar Pinang'],
            ['id' => 1627, 'district_id' => 376, 'name' => 'Tanjungbalai Selatan'],
            ['id' => 1628, 'district_id' => 376, 'name' => 'Pematang Pasir'],
            ['id' => 1629, 'district_id' => 376, 'name' => 'Perjuangan'],
            ['id' => 1630, 'district_id' => 376, 'name' => 'Sei Raja'],
            ['id' => 1631, 'district_id' => 376, 'name' => 'Sei Glugur'],
            ['id' => 1632, 'district_id' => 377, 'name' => 'Teluk Nibung'],
            ['id' => 1633, 'district_id' => 377, 'name' => 'Pulau Simardan'],
            ['id' => 1634, 'district_id' => 377, 'name' => 'Sei Renggas'],
            ['id' => 1635, 'district_id' => 377, 'name' => 'Sei Bamban'],
            ['id' => 1636, 'district_id' => 377, 'name' => 'Sei Berombang'],
            ['id' => 1637, 'district_id' => 378, 'name' => 'Datuk Bandar'],
            ['id' => 1638, 'district_id' => 378, 'name' => 'Sei Sembilang'],
            ['id' => 1639, 'district_id' => 378, 'name' => 'Sei Apung'],
            ['id' => 1640, 'district_id' => 378, 'name' => 'Sei Buluh'],
            ['id' => 1641, 'district_id' => 378, 'name' => 'Sei Tuan'],
            ['id' => 1642, 'district_id' => 379, 'name' => 'Sei Tualang Raso'],
            ['id' => 1643, 'district_id' => 379, 'name' => 'Sei Kasih'],
            ['id' => 1644, 'district_id' => 379, 'name' => 'Sei Kepayang'],
            ['id' => 1645, 'district_id' => 379, 'name' => 'Sei Suka'],
            ['id' => 1646, 'district_id' => 379, 'name' => 'Sei Mencirim'],
            ['id' => 1647, 'district_id' => 380, 'name' => 'Datuk Bandar Timur'],
            ['id' => 1648, 'district_id' => 380, 'name' => 'Sei Rampah'],
            ['id' => 1649, 'district_id' => 380, 'name' => 'Sei Bamban'],
            ['id' => 1650, 'district_id' => 380, 'name' => 'Sei Berombang'],
            ['id' => 1651, 'district_id' => 380, 'name' => 'Sei Sembilang'],
            ['id' => 1652, 'district_id' => 381, 'name' => 'Siantar Timur'],
            ['id' => 1653, 'district_id' => 381, 'name' => 'Pardomuan'],
            ['id' => 1654, 'district_id' => 381, 'name' => 'Tomuan'],
            ['id' => 1655, 'district_id' => 381, 'name' => 'Siantar Martoba'],
            ['id' => 1656, 'district_id' => 381, 'name' => 'Siantar Marihat'],
            ['id' => 1657, 'district_id' => 382, 'name' => 'Siantar Barat'],
            ['id' => 1658, 'district_id' => 382, 'name' => 'Siantar Sitalasari'],
            ['id' => 1659, 'district_id' => 382, 'name' => 'Siantar Marimbun'],
            ['id' => 1660, 'district_id' => 382, 'name' => 'Siantar Utara'],
            ['id' => 1661, 'district_id' => 382, 'name' => 'Siantar Selatan'],
            ['id' => 1662, 'district_id' => 383, 'name' => 'Siantar Utara'],
            ['id' => 1663, 'district_id' => 383, 'name' => 'Siantar Martoba'],
            ['id' => 1664, 'district_id' => 383, 'name' => 'Siantar Marihat'],
            ['id' => 1665, 'district_id' => 383, 'name' => 'Siantar Sitalasari'],
            ['id' => 1666, 'district_id' => 383, 'name' => 'Siantar Marimbun'],
            ['id' => 1667, 'district_id' => 384, 'name' => 'Siantar Selatan'],
            ['id' => 1668, 'district_id' => 384, 'name' => 'Siantar Martoba'],
            ['id' => 1669, 'district_id' => 384, 'name' => 'Siantar Marihat'],
            ['id' => 1670, 'district_id' => 384, 'name' => 'Siantar Sitalasari'],
            ['id' => 1671, 'district_id' => 384, 'name' => 'Siantar Marimbun'],
            ['id' => 1672, 'district_id' => 385, 'name' => 'Siantar Martoba'],
            ['id' => 1673, 'district_id' => 385, 'name' => 'Siantar Marihat'],
            ['id' => 1674, 'district_id' => 385, 'name' => 'Siantar Sitalasari'],
            ['id' => 1675, 'district_id' => 385, 'name' => 'Siantar Marimbun'],
            ['id' => 1676, 'district_id' => 385, 'name' => 'Siantar Utara'],
            ['id' => 1677, 'district_id' => 386, 'name' => 'Siantar Marihat'],
            ['id' => 1678, 'district_id' => 386, 'name' => 'Siantar Martoba'],
            ['id' => 1679, 'district_id' => 386, 'name' => 'Siantar Sitalasari'],
            ['id' => 1680, 'district_id' => 386, 'name' => 'Siantar Marimbun'],
            ['id' => 1681, 'district_id' => 386, 'name' => 'Siantar Utara'],
            ['id' => 1682, 'district_id' => 387, 'name' => 'Siantar Sitalasari'],
            ['id' => 1683, 'district_id' => 387, 'name' => 'Siantar Martoba'],
            ['id' => 1684, 'district_id' => 387, 'name' => 'Siantar Marihat'],
            ['id' => 1685, 'district_id' => 387, 'name' => 'Siantar Marimbun'],
            ['id' => 1686, 'district_id' => 387, 'name' => 'Siantar Utara'],
            ['id' => 1687, 'district_id' => 388, 'name' => 'Siantar Marimbun'],
            ['id' => 1688, 'district_id' => 388, 'name' => 'Siantar Martoba'],
            ['id' => 1689, 'district_id' => 388, 'name' => 'Siantar Marihat'],
            ['id' => 1690, 'district_id' => 388, 'name' => 'Siantar Sitalasari'],
            ['id' => 1691, 'district_id' => 388, 'name' => 'Siantar Utara'],
            ['id' => 1692, 'district_id' => 389, 'name' => 'Padang Hilir'],
            ['id' => 1693, 'district_id' => 389, 'name' => 'Batang Terap'],
            ['id' => 1694, 'district_id' => 389, 'name' => 'Sei Rampah'],
            ['id' => 1695, 'district_id' => 389, 'name' => 'Sei Bamban'],
            ['id' => 1696, 'district_id' => 389, 'name' => 'Sei Berombang'],
            ['id' => 1697, 'district_id' => 390, 'name' => 'Bajenis'],
            ['id' => 1698, 'district_id' => 390, 'name' => 'Sei Sembilang'],
            ['id' => 1699, 'district_id' => 390, 'name' => 'Sei Apung'],
            ['id' => 1700, 'district_id' => 390, 'name' => 'Sei Buluh'],
            ['id' => 1701, 'district_id' => 390, 'name' => 'Sei Tuan'],
            ['id' => 1702, 'district_id' => 391, 'name' => 'Padang Hulu'],
            ['id' => 1703, 'district_id' => 391, 'name' => 'Sei Kasih'],
            ['id' => 1704, 'district_id' => 391, 'name' => 'Sei Kepayang'],
            ['id' => 1705, 'district_id' => 391, 'name' => 'Sei Suka'],
            ['id' => 1706, 'district_id' => 391, 'name' => 'Sei Mencirim'],
            ['id' => 1707, 'district_id' => 392, 'name' => 'Rambutan'],
            ['id' => 1708, 'district_id' => 392, 'name' => 'Sei Rampah'],
            ['id' => 1709, 'district_id' => 392, 'name' => 'Sei Bamban'],
            ['id' => 1710, 'district_id' => 392, 'name' => 'Sei Berombang'],
            ['id' => 1711, 'district_id' => 392, 'name' => 'Sei Sembilang'],
            ['id' => 1712, 'district_id' => 393, 'name' => 'Tebing Tinggi Kota'],
            ['id' => 1713, 'district_id' => 393, 'name' => 'Sei Sembilang'],
            ['id' => 1714, 'district_id' => 393, 'name' => 'Sei Apung'],
            ['id' => 1715, 'district_id' => 393, 'name' => 'Sei Buluh'],
            ['id' => 1716, 'district_id' => 393, 'name' => 'Sei Tuan'],
            ['id' => 1717, 'district_id' => 394, 'name' => 'Medan Barat'],
            ['id' => 1718, 'district_id' => 394, 'name' => 'Sei Rampah'],
            ['id' => 1719, 'district_id' => 394, 'name' => 'Sei Bamban'],
            ['id' => 1720, 'district_id' => 394, 'name' => 'Sei Berombang'],
            ['id' => 1721, 'district_id' => 394, 'name' => 'Sei Sembilang'],
            ['id' => 1722, 'district_id' => 395, 'name' => 'Medan Baru'],
            ['id' => 1723, 'district_id' => 395, 'name' => 'Sei Kasih'],
            ['id' => 1724, 'district_id' => 395, 'name' => 'Sei Kepayang'],
            ['id' => 1725, 'district_id' => 395, 'name' => 'Sei Suka'],
            ['id' => 1726, 'district_id' => 395, 'name' => 'Sei Mencirim'],
            ['id' => 1727, 'district_id' => 396, 'name' => 'Medan Denai'],
            ['id' => 1728, 'district_id' => 396, 'name' => 'Sei Rampah'],
            ['id' => 1729, 'district_id' => 396, 'name' => 'Sei Bamban'],
            ['id' => 1730, 'district_id' => 396, 'name' => 'Sei Berombang'],
            ['id' => 1731, 'district_id' => 396, 'name' => 'Sei Sembilang'],
            ['id' => 1732, 'district_id' => 397, 'name' => 'Medan Helvetia'],
            ['id' => 1733, 'district_id' => 397, 'name' => 'Sei Sembilang'],
            ['id' => 1734, 'district_id' => 397, 'name' => 'Sei Apung'],
            ['id' => 1735, 'district_id' => 397, 'name' => 'Sei Buluh'],
            ['id' => 1736, 'district_id' => 397, 'name' => 'Sei Tuan'],
            ['id' => 1737, 'district_id' => 398, 'name' => 'Medan Johor'],
            ['id' => 1738, 'district_id' => 398, 'name' => 'Sei Kasih'],
            ['id' => 1739, 'district_id' => 398, 'name' => 'Sei Kepayang'],
            ['id' => 1740, 'district_id' => 398, 'name' => 'Sei Suka'],
            ['id' => 1741, 'district_id' => 398, 'name' => 'Sei Mencirim'],
            ['id' => 1742, 'district_id' => 399, 'name' => 'Medan Kota'],
            ['id' => 1743, 'district_id' => 399, 'name' => 'Sei Rampah'],
            ['id' => 1744, 'district_id' => 399, 'name' => 'Sei Bamban'],
            ['id' => 1745, 'district_id' => 399, 'name' => 'Sei Berombang'],
            ['id' => 1746, 'district_id' => 399, 'name' => 'Sei Sembilang'],
            ['id' => 1747, 'district_id' => 400, 'name' => 'Medan Labuhan'],
            ['id' => 1748, 'district_id' => 400, 'name' => 'Sei Sembilang'],
            ['id' => 1749, 'district_id' => 400, 'name' => 'Sei Apung'],
            ['id' => 1750, 'district_id' => 400, 'name' => 'Sei Buluh'],
            ['id' => 1751, 'district_id' => 400, 'name' => 'Sei Tuan'],
            ['id' => 1752, 'district_id' => 401, 'name' => 'Kampung Baru'],
            ['id' => 1753, 'district_id' => 401, 'name' => 'Sei Agul'],
            ['id' => 1754, 'district_id' => 401, 'name' => 'Pulo Brayan Darat I'],
            ['id' => 1755, 'district_id' => 401, 'name' => 'Pulo Brayan Darat II'],
            ['id' => 1756, 'district_id' => 401, 'name' => 'Pulo Brayan Bengkel'],
            ['id' => 1757, 'district_id' => 402, 'name' => 'Paya Pasir'],
            ['id' => 1758, 'district_id' => 402, 'name' => 'Rengas Pulau'],
            ['id' => 1759, 'district_id' => 402, 'name' => 'Tanjung Selamat'],
            ['id' => 1760, 'district_id' => 402, 'name' => 'Labuhan Deli'],
            ['id' => 1761, 'district_id' => 402, 'name' => 'Bagan Deli'],
            ['id' => 1762, 'district_id' => 403, 'name' => 'Tegal Sari I'],
            ['id' => 1763, 'district_id' => 403, 'name' => 'Tegal Sari II'],
            ['id' => 1764, 'district_id' => 403, 'name' => 'Tegal Sari III'],
            ['id' => 1765, 'district_id' => 403, 'name' => 'Pahlawan'],
            ['id' => 1766, 'district_id' => 403, 'name' => 'Sei Kera Hilir'],
            ['id' => 1767, 'district_id' => 404, 'name' => 'Petisah Tengah'],
            ['id' => 1768, 'district_id' => 404, 'name' => 'Sei Putih Timur'],
            ['id' => 1769, 'district_id' => 404, 'name' => 'Sei Putih Barat'],
            ['id' => 1770, 'district_id' => 404, 'name' => 'Sei Sikambing'],
            ['id' => 1771, 'district_id' => 404, 'name' => 'Sukaramai'],
            ['id' => 1772, 'district_id' => 405, 'name' => 'Selayang'],
            ['id' => 1773, 'district_id' => 405, 'name' => 'Tanjung Sari'],
            ['id' => 1774, 'district_id' => 405, 'name' => 'Sempakata'],
            ['id' => 1775, 'district_id' => 405, 'name' => 'Sei Sikambing C II'],
            ['id' => 1776, 'district_id' => 405, 'name' => 'Sei Sikambing B'],
            ['id' => 1777, 'district_id' => 406, 'name' => 'Sunggal'],
            ['id' => 1778, 'district_id' => 406, 'name' => 'Lalang'],
            ['id' => 1779, 'district_id' => 406, 'name' => 'Tanjung Rejo'],
            ['id' => 1780, 'district_id' => 406, 'name' => 'Sei Semayang'],
            ['id' => 1781, 'district_id' => 406, 'name' => 'Suka Maju'],
            ['id' => 1782, 'district_id' => 407, 'name' => 'Tembung'],
            ['id' => 1783, 'district_id' => 407, 'name' => 'Bandar Selamat'],
            ['id' => 1784, 'district_id' => 407, 'name' => 'Bantan'],
            ['id' => 1785, 'district_id' => 407, 'name' => 'Sidomulyo'],
            ['id' => 1786, 'district_id' => 407, 'name' => 'Sumberjo'],
            ['id' => 1787, 'district_id' => 408, 'name' => 'Pandau Hulu I'],
            ['id' => 1788, 'district_id' => 408, 'name' => 'Pandau Hulu II'],
            ['id' => 1789, 'district_id' => 408, 'name' => 'Sukaramai I'],
            ['id' => 1790, 'district_id' => 408, 'name' => 'Sukaramai II'],
            ['id' => 1791, 'district_id' => 408, 'name' => 'Sei Rengas I'],
            ['id' => 1792, 'district_id' => 409, 'name' => 'Tuntungan I'],
            ['id' => 1793, 'district_id' => 409, 'name' => 'Tuntungan II'],
            ['id' => 1794, 'district_id' => 409, 'name' => 'Sampali'],
            ['id' => 1795, 'district_id' => 409, 'name' => 'Bandar Khalipah'],
            ['id' => 1796, 'district_id' => 409, 'name' => 'Lubuk Pakam'],
            ['id' => 1797, 'district_id' => 410, 'name' => 'Binjai Kota'],
            ['id' => 1798, 'district_id' => 410, 'name' => 'Pekan Binjai'],
            ['id' => 1799, 'district_id' => 410, 'name' => 'Timbang Langkat'],
            ['id' => 1800, 'district_id' => 410, 'name' => 'Tangkahan'],
            ['id' => 1801, 'district_id' => 410, 'name' => 'Suka Ramai'],
            ['id' => 1802, 'district_id' => 411, 'name' => 'Binjai Utara'],
            ['id' => 1803, 'district_id' => 411, 'name' => 'Cengkeh Turi'],
            ['id' => 1804, 'district_id' => 411, 'name' => 'Damar Sari'],
            ['id' => 1805, 'district_id' => 411, 'name' => 'Jati Makmur'],
            ['id' => 1806, 'district_id' => 411, 'name' => 'Kebun Lada'],
            ['id' => 1807, 'district_id' => 412, 'name' => 'Binjai Selatan'],
            ['id' => 1808, 'district_id' => 412, 'name' => 'Pekan Kamis'],
            ['id' => 1809, 'district_id' => 412, 'name' => 'Suka Maju'],
            ['id' => 1810, 'district_id' => 412, 'name' => 'Tanjung Puri'],
            ['id' => 1811, 'district_id' => 412, 'name' => 'Tanjung Mulia'],
            ['id' => 1812, 'district_id' => 413, 'name' => 'Binjai Timur'],
            ['id' => 1813, 'district_id' => 413, 'name' => 'Tanjung Langkat'],
            ['id' => 1814, 'district_id' => 413, 'name' => 'Suka Damai'],
            ['id' => 1815, 'district_id' => 413, 'name' => 'Suka Makmur'],
            ['id' => 1816, 'district_id' => 413, 'name' => 'Suka Raya'],
            ['id' => 1817, 'district_id' => 414, 'name' => 'Binjai Barat'],
            ['id' => 1818, 'district_id' => 414, 'name' => 'Paya Roba'],
            ['id' => 1819, 'district_id' => 414, 'name' => 'Suka Jadi'],
            ['id' => 1820, 'district_id' => 414, 'name' => 'Suka Ramai'],
            ['id' => 1821, 'district_id' => 414, 'name' => 'Tanjung Pura'],
            ['id' => 1822, 'district_id' => 415, 'name' => 'Padangsidimpuan Utara'],
            ['id' => 1823, 'district_id' => 415, 'name' => 'Huta Tonga'],
            ['id' => 1824, 'district_id' => 415, 'name' => 'Huta Padang'],
            ['id' => 1825, 'district_id' => 415, 'name' => 'Huta Baru'],
            ['id' => 1826, 'district_id' => 415, 'name' => 'Huta Raja'],
            ['id' => 1827, 'district_id' => 416, 'name' => 'Padangsidimpuan Selatan'],
            ['id' => 1828, 'district_id' => 416, 'name' => 'Sihitang'],
            ['id' => 1829, 'district_id' => 416, 'name' => 'Sitamiang'],
            ['id' => 1830, 'district_id' => 416, 'name' => 'Sitampurung'],
            ['id' => 1831, 'district_id' => 416, 'name' => 'Sitapongan'],
            ['id' => 1832, 'district_id' => 417, 'name' => 'Padangsidimpuan Batunadua'],
            ['id' => 1833, 'district_id' => 417, 'name' => 'Huta Baringin'],
            ['id' => 1834, 'district_id' => 417, 'name' => 'Huta Padang'],
            ['id' => 1835, 'district_id' => 417, 'name' => 'Huta Raja'],
            ['id' => 1836, 'district_id' => 417, 'name' => 'Huta Tonga'],
            ['id' => 1837, 'district_id' => 418, 'name' => 'Padangsidimpuan Hutaimbaru'],
            ['id' => 1838, 'district_id' => 418, 'name' => 'Huta Baru'],
            ['id' => 1839, 'district_id' => 418, 'name' => 'Huta Padang'],
            ['id' => 1840, 'district_id' => 418, 'name' => 'Huta Raja'],
            ['id' => 1841, 'district_id' => 418, 'name' => 'Huta Tonga'],
            ['id' => 1842, 'district_id' => 419, 'name' => 'Padangsidimpuan Tenggara'],
            ['id' => 1843, 'district_id' => 419, 'name' => 'Huta Baringin'],
            ['id' => 1844, 'district_id' => 419, 'name' => 'Huta Padang'],
            ['id' => 1845, 'district_id' => 419, 'name' => 'Huta Raja'],
            ['id' => 1846, 'district_id' => 419, 'name' => 'Huta Tonga'],
            ['id' => 1847, 'district_id' => 420, 'name' => 'Gunungsitoli'],
            ['id' => 1848, 'district_id' => 420, 'name' => 'Hilihao'],
            ['id' => 1849, 'district_id' => 420, 'name' => 'Hilimbowo'],
            ['id' => 1850, 'district_id' => 420, 'name' => 'Hilimbaruzo'],
            ['id' => 1851, 'district_id' => 420, 'name' => 'Hilimbuasi'],
            ['id' => 1852, 'district_id' => 421, 'name' => 'Tetehosi'],
            ['id' => 1853, 'district_id' => 421, 'name' => 'Hilimbowo Idanoi'],
            ['id' => 1854, 'district_id' => 421, 'name' => 'Hiliserangkai'],
            ['id' => 1855, 'district_id' => 421, 'name' => 'Hiliweto Idanoi'],
            ['id' => 1856, 'district_id' => 421, 'name' => 'Hiliganowo'],
            ['id' => 1857, 'district_id' => 422, 'name' => 'Fadoro Lalai'],
            ['id' => 1858, 'district_id' => 422, 'name' => 'Hiliotalua'],
            ['id' => 1859, 'district_id' => 422, 'name' => 'Hilina\'a'],
            ['id' => 1860, 'district_id' => 422, 'name' => 'Ononamolo I'],
            ['id' => 1861, 'district_id' => 422, 'name' => 'Tetehosi'],
            ['id' => 1862, 'district_id' => 423, 'name' => 'Hiliweto'],
            ['id' => 1863, 'district_id' => 423, 'name' => 'Hilimbowo'],
            ['id' => 1864, 'district_id' => 423, 'name' => 'Ombolata'],
            ['id' => 1865, 'district_id' => 423, 'name' => 'Sisarahili'],
            ['id' => 1866, 'district_id' => 423, 'name' => 'Hilinawalo'],
            ['id' => 1867, 'district_id' => 424, 'name' => 'Alo\'oa'],
            ['id' => 1868, 'district_id' => 424, 'name' => 'Hilimbosi'],
            ['id' => 1869, 'district_id' => 424, 'name' => 'Sihareo'],
            ['id' => 1870, 'district_id' => 424, 'name' => 'Hili\'afala'],
            ['id' => 1871, 'district_id' => 424, 'name' => 'Sifahandro'],
            ['id' => 1872, 'district_id' => 425, 'name' => 'Muara Sikabaluan'],
            ['id' => 1873, 'district_id' => 425, 'name' => 'Saibi'],
            ['id' => 1874, 'district_id' => 425, 'name' => 'Sotboyak'],
            ['id' => 1875, 'district_id' => 425, 'name' => 'Bojakan'],
            ['id' => 1876, 'district_id' => 425, 'name' => 'Malancan'],
            ['id' => 1877, 'district_id' => 426, 'name' => 'Muara Siberut'],
            ['id' => 1878, 'district_id' => 426, 'name' => 'Rogdok'],
            ['id' => 1879, 'district_id' => 426, 'name' => 'Puro'],
            ['id' => 1880, 'district_id' => 426, 'name' => 'Muntei'],
            ['id' => 1881, 'district_id' => 426, 'name' => 'Madobag'],
            ['id' => 1882, 'district_id' => 427, 'name' => 'Simatalu'],
            ['id' => 1883, 'district_id' => 427, 'name' => 'Sarakok'],
            ['id' => 1884, 'district_id' => 427, 'name' => 'Salappak'],
            ['id' => 1885, 'district_id' => 427, 'name' => 'Simagere'],
            ['id' => 1886, 'district_id' => 427, 'name' => 'Sagulubbe'],
            ['id' => 1887, 'district_id' => 428, 'name' => 'Magosi'],
            ['id' => 1888, 'district_id' => 428, 'name' => 'Matotonan'],
            ['id' => 1889, 'district_id' => 428, 'name' => 'Saumanganya'],
            ['id' => 1890, 'district_id' => 428, 'name' => 'Simalegi'],
            ['id' => 1891, 'district_id' => 428, 'name' => 'Siberut'],
            ['id' => 1892, 'district_id' => 429, 'name' => 'Saibi Samukop'],
            ['id' => 1893, 'district_id' => 429, 'name' => 'Muntei'],
            ['id' => 1894, 'district_id' => 429, 'name' => 'Puro'],
            ['id' => 1895, 'district_id' => 429, 'name' => 'Madobag'],
            ['id' => 1896, 'district_id' => 429, 'name' => 'Rogdok'],
            ['id' => 1897, 'district_id' => 430, 'name' => 'Tuapejat'],
            ['id' => 1898, 'district_id' => 430, 'name' => 'Goiso Oinan'],
            ['id' => 1899, 'district_id' => 430, 'name' => 'Sidomakmur'],
            ['id' => 1900, 'district_id' => 430, 'name' => 'Betumonga'],
            ['id' => 1901, 'district_id' => 430, 'name' => 'Sipora Jaya'],
            ['id' => 1902, 'district_id' => 431, 'name' => 'Sioban'],
            ['id' => 1903, 'district_id' => 431, 'name' => 'Nemnemleleu'],
            ['id' => 1904, 'district_id' => 431, 'name' => 'Matobe'],
            ['id' => 1905, 'district_id' => 431, 'name' => 'Beriulou'],
            ['id' => 1906, 'district_id' => 431, 'name' => 'Bulasat'],
            ['id' => 1907, 'district_id' => 432, 'name' => 'Sikakap'],
            ['id' => 1908, 'district_id' => 432, 'name' => 'Muara Taikako'],
            ['id' => 1909, 'district_id' => 432, 'name' => 'Malakopa'],
            ['id' => 1910, 'district_id' => 432, 'name' => 'Matobe'],
            ['id' => 1911, 'district_id' => 432, 'name' => 'Silabu'],
            ['id' => 1912, 'district_id' => 433, 'name' => 'Sikakap'],
            ['id' => 1913, 'district_id' => 433, 'name' => 'Makalo'],
            ['id' => 1914, 'district_id' => 433, 'name' => 'Bulasat'],
            ['id' => 1915, 'district_id' => 433, 'name' => 'Malakopa'],
            ['id' => 1916, 'district_id' => 433, 'name' => 'Matobe'],
            ['id' => 1917, 'district_id' => 434, 'name' => 'Kambang'],
            ['id' => 1918, 'district_id' => 434, 'name' => 'Amping Parak'],
            ['id' => 1919, 'district_id' => 434, 'name' => 'Palangai'],
            ['id' => 1920, 'district_id' => 434, 'name' => 'Lunang'],
            ['id' => 1921, 'district_id' => 434, 'name' => 'Punggasan'],
            ['id' => 1922, 'district_id' => 435, 'name' => 'Taratak'],
            ['id' => 1923, 'district_id' => 435, 'name' => 'Sungai Tunu'],
            ['id' => 1924, 'district_id' => 435, 'name' => 'Koto Taratak'],
            ['id' => 1925, 'district_id' => 435, 'name' => 'Pasar Taratak'],
            ['id' => 1926, 'district_id' => 435, 'name' => 'Kampung Baru'],
            ['id' => 1927, 'district_id' => 436, 'name' => 'Pasar Lama'],
            ['id' => 1928, 'district_id' => 436, 'name' => 'Sungai Sirah'],
            ['id' => 1929, 'district_id' => 436, 'name' => 'Sungai Nyalo'],
            ['id' => 1930, 'district_id' => 436, 'name' => 'Kampung Tengah'],
            ['id' => 1931, 'district_id' => 436, 'name' => 'Punggasan Timur'],
            ['id' => 1932, 'district_id' => 437, 'name' => 'Sungai Bungin'],
            ['id' => 1933, 'district_id' => 437, 'name' => 'Taratak'],
            ['id' => 1934, 'district_id' => 437, 'name' => 'Koto Ranah'],
            ['id' => 1935, 'district_id' => 437, 'name' => 'Painan'],
            ['id' => 1936, 'district_id' => 437, 'name' => 'Salido'],
            ['id' => 1937, 'district_id' => 438, 'name' => 'Tapan'],
            ['id' => 1938, 'district_id' => 438, 'name' => 'Kampung Tangah'],
            ['id' => 1939, 'district_id' => 438, 'name' => 'Aur Duri'],
            ['id' => 1940, 'district_id' => 438, 'name' => 'Koto Tuo'],
            ['id' => 1941, 'district_id' => 438, 'name' => 'Lagan'],
            ['id' => 1942, 'district_id' => 439, 'name' => 'Bayang'],
            ['id' => 1943, 'district_id' => 439, 'name' => 'Puluik Puluik'],
            ['id' => 1944, 'district_id' => 439, 'name' => 'Bungo Pasang'],
            ['id' => 1945, 'district_id' => 439, 'name' => 'Koto Berapak'],
            ['id' => 1946, 'district_id' => 439, 'name' => 'Padang Gantiang'],
            ['id' => 1947, 'district_id' => 440, 'name' => 'Tarusan'],
            ['id' => 1948, 'district_id' => 440, 'name' => 'Ampang Pulai'],
            ['id' => 1949, 'district_id' => 440, 'name' => 'Taluak'],
            ['id' => 1950, 'district_id' => 440, 'name' => 'Pauh Duo'],
            ['id' => 1951, 'district_id' => 440, 'name' => 'Pasar Tarusan'],
            ['id' => 1952, 'district_id' => 441, 'name' => 'Tluk Kualo'],
            ['id' => 1953, 'district_id' => 441, 'name' => 'Duku'],
            ['id' => 1954, 'district_id' => 441, 'name' => 'Rawang'],
            ['id' => 1955, 'district_id' => 441, 'name' => 'Kampung Baru'],
            ['id' => 1956, 'district_id' => 441, 'name' => 'Ampalu'],
            ['id' => 1957, 'district_id' => 442, 'name' => 'Cupak'],
            ['id' => 1958, 'district_id' => 442, 'name' => 'Talang'],
            ['id' => 1959, 'district_id' => 442, 'name' => 'Jawi-Jawi'],
            ['id' => 1960, 'district_id' => 442, 'name' => 'Koto Gadang Guguak'],
            ['id' => 1961, 'district_id' => 442, 'name' => 'Koto Laweh'],
            ['id' => 1962, 'district_id' => 443, 'name' => 'Koto Baru'],
            ['id' => 1963, 'district_id' => 443, 'name' => 'Panyakalan'],
            ['id' => 1964, 'district_id' => 443, 'name' => 'Tanjuang'],
            ['id' => 1965, 'district_id' => 443, 'name' => 'Parambahan'],
            ['id' => 1966, 'district_id' => 443, 'name' => 'Salayo'],
            ['id' => 1967, 'district_id' => 444, 'name' => 'Sungai Durian'],
            ['id' => 1968, 'district_id' => 444, 'name' => 'Batu Basa'],
            ['id' => 1969, 'district_id' => 444, 'name' => 'Balai Panjang'],
            ['id' => 1970, 'district_id' => 444, 'name' => 'Bungo Pasang'],
            ['id' => 1971, 'district_id' => 444, 'name' => 'Taluak'],
            ['id' => 1972, 'district_id' => 445, 'name' => 'Simanau'],
            ['id' => 1973, 'district_id' => 445, 'name' => 'Talunan'],
            ['id' => 1974, 'district_id' => 445, 'name' => 'Batu Bajanjang'],
            ['id' => 1975, 'district_id' => 445, 'name' => 'Lubuk Gadang'],
            ['id' => 1976, 'district_id' => 445, 'name' => 'Sungai Nanam'],
            ['id' => 1977, 'district_id' => 446, 'name' => 'Singkarak'],
            ['id' => 1978, 'district_id' => 446, 'name' => 'Sumani'],
            ['id' => 1979, 'district_id' => 446, 'name' => 'Aripan'],
            ['id' => 1980, 'district_id' => 446, 'name' => 'Guguak Malalo'],
            ['id' => 1981, 'district_id' => 446, 'name' => 'Sumpur'],
            ['id' => 1982, 'district_id' => 447, 'name' => 'Sirukam'],
            ['id' => 1983, 'district_id' => 447, 'name' => 'Talunan Maju'],
            ['id' => 1984, 'district_id' => 447, 'name' => 'Sungai Abu'],
            ['id' => 1985, 'district_id' => 447, 'name' => 'Lubuk Gadang'],
            ['id' => 1986, 'district_id' => 447, 'name' => 'Pasar Hiliran'],
            ['id' => 1987, 'district_id' => 448, 'name' => 'Alahan Panjang'],
            ['id' => 1988, 'district_id' => 448, 'name' => 'Simancuang'],
            ['id' => 1989, 'district_id' => 448, 'name' => 'Sungai Nanam'],
            ['id' => 1990, 'district_id' => 448, 'name' => 'Gunung Medan'],
            ['id' => 1991, 'district_id' => 448, 'name' => 'Talang Babungo'],
            ['id' => 1992, 'district_id' => 449, 'name' => 'Sariak Alahan Tigo'],
            ['id' => 1993, 'district_id' => 449, 'name' => 'Tanjuang Balik'],
            ['id' => 1994, 'district_id' => 449, 'name' => 'Batu Banyak'],
            ['id' => 1995, 'district_id' => 449, 'name' => 'Aia Batumbuak'],
            ['id' => 1996, 'district_id' => 449, 'name' => 'Pintuan'],
            ['id' => 1997, 'district_id' => 450, 'name' => 'Muaro'],
            ['id' => 1998, 'district_id' => 450, 'name' => 'Paru'],
            ['id' => 1999, 'district_id' => 450, 'name' => 'Pulasan'],
            ['id' => 2000, 'district_id' => 450, 'name' => 'Sungai Lansek'],
            ['id' => 2001, 'district_id' => 450, 'name' => 'Lubuak Tarok'],
// Desa/Kelurahan di Kecamatan Lubuk Tarok
['id' => 2002, 'district_id' => 451, 'name' => 'Lubuk Tarok'],
['id' => 2003, 'district_id' => 451, 'name' => 'Tanah Badantuang'],
['id' => 2004, 'district_id' => 451, 'name' => 'Sungai Batang'],
['id' => 2005, 'district_id' => 451, 'name' => 'Tanjung Labuah'],
['id' => 2006, 'district_id' => 451, 'name' => 'Guguak'],

// Desa/Kelurahan di Kecamatan IV Nagari
['id' => 2007, 'district_id' => 452, 'name' => 'Tanjung Bonai Aur'],
['id' => 2008, 'district_id' => 452, 'name' => 'Kampung Dalam'],
['id' => 2009, 'district_id' => 452, 'name' => 'Tanah Datar'],
['id' => 2010, 'district_id' => 452, 'name' => 'Sungai Jambu'],
['id' => 2011, 'district_id' => 452, 'name' => 'Pulasan'],

// Desa/Kelurahan di Kecamatan Tanjung Gadang
['id' => 2012, 'district_id' => 453, 'name' => 'Tanjung Gadang'],
['id' => 2013, 'district_id' => 453, 'name' => 'Sungai Batuang'],
['id' => 2014, 'district_id' => 453, 'name' => 'Kampung Baru'],
['id' => 2015, 'district_id' => 453, 'name' => 'Padang Laweh'],
['id' => 2016, 'district_id' => 453, 'name' => 'Guguak Sijunjung'],

// Desa/Kelurahan di Kecamatan Kamang Baru
['id' => 2017, 'district_id' => 454, 'name' => 'Palangki'],
['id' => 2018, 'district_id' => 454, 'name' => 'Koto Baru'],
['id' => 2019, 'district_id' => 454, 'name' => 'Muaro Bodi'],
['id' => 2020, 'district_id' => 454, 'name' => 'Tanjung Ampalu'],

// Desa/Kelurahan di Kecamatan Kupitan
['id' => 2021, 'district_id' => 454, 'name' => 'Lubuk Tarok'],
['id' => 2022, 'district_id' => 455, 'name' => 'Kupitan'],
['id' => 2023, 'district_id' => 455, 'name' => 'Sungai Lansek'],
['id' => 2024, 'district_id' => 455, 'name' => 'Lubuak Batu'],
['id' => 2025, 'district_id' => 455, 'name' => 'Tanjung Beringin'],
['id' => 2026, 'district_id' => 455, 'name' => 'Padang Sibusuk'],

// Desa/Kelurahan di Kecamatan Lima Kaum
['id' => 2027, 'district_id' => 456, 'name' => 'Baringin'],
['id' => 2028, 'district_id' => 456, 'name' => 'Parambahan'],
['id' => 2029, 'district_id' => 456, 'name' => 'Labuh'],
['id' => 2030, 'district_id' => 456, 'name' => 'Balimbing'],
['id' => 2031, 'district_id' => 456, 'name' => 'Tanjung'],

// Desa/Kelurahan di Kecamatan Rambatan
['id' => 2032, 'district_id' => 457, 'name' => 'Baringin'],
['id' => 2033, 'district_id' => 457, 'name' => 'Padang Lua'],
['id' => 2034, 'district_id' => 457, 'name' => 'Simpang Manunggal'],
['id' => 2035, 'district_id' => 457, 'name' => 'Limo Kaum'],
['id' => 2036, 'district_id' => 457, 'name' => 'Parambahan'],

// Desa/Kelurahan di Kecamatan Sungayang
['id' => 2037, 'district_id' => 458, 'name' => 'Sungayang'],
['id' => 2038, 'district_id' => 458, 'name' => 'Batu Basa'],
['id' => 2039, 'district_id' => 458, 'name' => 'Padang Laweh'],
['id' => 2040, 'district_id' => 458, 'name' => 'Tanah Datar'],
['id' => 2041, 'district_id' => 458, 'name' => 'Sungai Patai'],

// Desa/Kelurahan di Kecamatan Tanjung Emas
['id' => 2042, 'district_id' => 459, 'name' => 'Barulak'],
['id' => 2043, 'district_id' => 459, 'name' => 'Pasie Laweh'],
['id' => 2044, 'district_id' => 459, 'name' => 'Tanjung Bonai'],
['id' => 2045, 'district_id' => 459, 'name' => 'Supayang'],
['id' => 2046, 'district_id' => 459, 'name' => 'Guguak Malalo'],

// Desa/Kelurahan di Kecamatan X Koto
['id' => 2047, 'district_id' => 460, 'name' => 'Padang Panjang'],
['id' => 2048, 'district_id' => 460, 'name' => 'Singgalang'],
['id' => 2049, 'district_id' => 460, 'name' => 'Gunung'],
['id' => 2050, 'district_id' => 460, 'name' => 'Panyalaian'],
['id' => 2051, 'district_id' => 460, 'name' => 'Silaing Bawah'],
// Desa/Kelurahan di Kecamatan Batipuh
['id' => 2052, 'district_id' => 461, 'name' => 'Batipuh'],
['id' => 2053, 'district_id' => 461, 'name' => 'Gunuang'],
['id' => 2054, 'district_id' => 461, 'name' => 'Kampung Surau'],
['id' => 2055, 'district_id' => 461, 'name' => 'Padang Laweh'],
['id' => 2056, 'district_id' => 461, 'name' => 'Sungai Tarab'],

// Desa/Kelurahan di Kecamatan Salimpaung
['id' => 2057, 'district_id' => 462, 'name' => 'Salimpaung'],
['id' => 2058, 'district_id' => 462, 'name' => 'Barulak'],
['id' => 2059, 'district_id' => 462, 'name' => 'Supayang'],
['id' => 2060, 'district_id' => 462, 'name' => 'Padang Laweh'],
['id' => 2061, 'district_id' => 462, 'name' => 'Sungai Patai'],

// Desa/Kelurahan di Kecamatan Lubuk Alung
['id' => 2062, 'district_id' => 463, 'name' => 'Lubuk Alung'],
['id' => 2063, 'district_id' => 463, 'name' => 'Tanjung Basung'],
['id' => 2064, 'district_id' => 463, 'name' => 'Balah Aie'],
['id' => 2065, 'district_id' => 463, 'name' => 'Sungai Abang'],
['id' => 2066, 'district_id' => 463, 'name' => 'Punggasan'],

// Desa/Kelurahan di Kecamatan Batang Anai
['id' => 2067, 'district_id' => 464, 'name' => 'Batang Anai'],
['id' => 2068, 'district_id' => 464, 'name' => 'Katapiang'],
['id' => 2069, 'district_id' => 464, 'name' => 'Lubuk Bonta'],
['id' => 2070, 'district_id' => 464, 'name' => 'Tapakis'],
['id' => 2071, 'district_id' => 464, 'name' => 'Sungai Buluh'],

// Desa/Kelurahan di Kecamatan Nan Sabaris
['id' => 2072, 'district_id' => 465, 'name' => 'Sungai Limau'],
['id' => 2073, 'district_id' => 465, 'name' => 'Kampuang Gelapuang'],
['id' => 2074, 'district_id' => 465, 'name' => 'Pariaman Tengah'],
['id' => 2075, 'district_id' => 465, 'name' => 'Sungai Sirah'],
['id' => 2076, 'district_id' => 465, 'name' => 'Padang Kunik'],

// Desa/Kelurahan di Kecamatan Padang Sago
['id' => 2077, 'district_id' => 466, 'name' => 'Padang Sago'],
['id' => 2078, 'district_id' => 466, 'name' => 'Lubuk Pandan'],
['id' => 2079, 'district_id' => 466, 'name' => 'Koto Tinggi'],
['id' => 2080, 'district_id' => 466, 'name' => 'Kampuang Baru'],
['id' => 2081, 'district_id' => 466, 'name' => 'Kampuang Dalam'],

// Desa/Kelurahan di Kecamatan VII Koto Sungai Sariak
['id' => 2082, 'district_id' => 467, 'name' => 'Sungai Sariak'],
['id' => 2083, 'district_id' => 467, 'name' => 'Gunuang'],
['id' => 2084, 'district_id' => 467, 'name' => 'Sicincin'],
['id' => 2085, 'district_id' => 467, 'name' => 'Kasang'],
['id' => 2086, 'district_id' => 467, 'name' => 'Lubuk Pandan'],

// Desa/Kelurahan di Kecamatan Ulakan Tapakis
['id' => 2087, 'district_id' => 468, 'name' => 'Ulakan'],
['id' => 2088, 'district_id' => 468, 'name' => 'Tapakis'],
['id' => 2089, 'district_id' => 468, 'name' => 'Manggopoh'],
['id' => 2090, 'district_id' => 468, 'name' => 'Sungai Pinang'],
['id' => 2091, 'district_id' => 468, 'name' => 'Sungai Abang'],

// Desa/Kelurahan di Kecamatan Enam Lingkung
['id' => 2092, 'district_id' => 469, 'name' => 'Kayu Tanam'],
['id' => 2093, 'district_id' => 469, 'name' => 'Lubuk Pandan'],
['id' => 2094, 'district_id' => 469, 'name' => 'Kapalo Hilalang'],
['id' => 2095, 'district_id' => 469, 'name' => 'Batang Anai'],
['id' => 2096, 'district_id' => 469, 'name' => 'Sungai Limau'],

// Desa/Kelurahan di Kecamatan Sungai Geringging
['id' => 2097, 'district_id' => 470, 'name' => 'Sungai Geringging'],
['id' => 2098, 'district_id' => 470, 'name' => 'Pasar Sungai Geringging'],
['id' => 2099, 'district_id' => 470, 'name' => 'Guguak'],
['id' => 2100, 'district_id' => 470, 'name' => 'Padang Kunik'],
['id' => 2101, 'district_id' => 470, 'name' => 'Sungai Balantiak'],
// Desa/Kelurahan di Kecamatan Sungai Limau
['id' => 2102, 'district_id' => 471, 'name' => 'Sungai Limau'],
['id' => 2103, 'district_id' => 471, 'name' => 'Koto Tinggi'],
['id' => 2104, 'district_id' => 471, 'name' => 'Kampuang Tanjuang'],
['id' => 2105, 'district_id' => 471, 'name' => 'Tiku Lima Jorong'],
['id' => 2106, 'district_id' => 471, 'name' => 'Padang Bintungan'],

// Desa/Kelurahan di Kecamatan Lubuk Basung
['id' => 2107, 'district_id' => 472, 'name' => 'Lubuk Basung'],
['id' => 2108, 'district_id' => 472, 'name' => 'Garagahan'],
['id' => 2109, 'district_id' => 472, 'name' => 'Kampuang Tangah'],
['id' => 2110, 'district_id' => 472, 'name' => 'Simpang Ampek'],
['id' => 2111, 'district_id' => 472, 'name' => 'Kubang Putiah'],

// Desa/Kelurahan di Kecamatan Tanjung Mutiara
['id' => 2112, 'district_id' => 473, 'name' => 'Tanjung Mutiara'],
['id' => 2113, 'district_id' => 473, 'name' => 'Tiku V Jorong'],
['id' => 2114, 'district_id' => 473, 'name' => 'Manggopoh'],
['id' => 2115, 'district_id' => 473, 'name' => 'Durian'],
['id' => 2116, 'district_id' => 473, 'name' => 'Rimbo Data'],

// Desa/Kelurahan di Kecamatan Ampek Nagari
['id' => 2117, 'district_id' => 474, 'name' => 'Ampek Nagari'],
['id' => 2118, 'district_id' => 474, 'name' => 'Bawan'],
['id' => 2119, 'district_id' => 474, 'name' => 'Lubuak Alai'],
['id' => 2120, 'district_id' => 474, 'name' => 'Koto Tuo'],
['id' => 2121, 'district_id' => 474, 'name' => 'Sungai Aur'],

// Desa/Kelurahan di Kecamatan Tanjung Raya
['id' => 2122, 'district_id' => 475, 'name' => 'Tanjung Raya'],
['id' => 2123, 'district_id' => 475, 'name' => 'Maninjau'],
['id' => 2124, 'district_id' => 475, 'name' => 'Bayur'],
['id' => 2125, 'district_id' => 475, 'name' => 'Koto Kaciak'],
['id' => 2126, 'district_id' => 475, 'name' => 'Koto Malintang'],
// Desa/Kelurahan di Kecamatan Matur
['id' => 2127, 'district_id' => 476, 'name' => 'Matur'],
['id' => 2128, 'district_id' => 476, 'name' => 'Matur Hilia'],
['id' => 2129, 'district_id' => 476, 'name' => 'Lawang'],
['id' => 2130, 'district_id' => 476, 'name' => 'Panta Pauah'],
['id' => 2131, 'district_id' => 476, 'name' => 'Matua Mudiak'],

// Desa/Kelurahan di Kecamatan IV Koto
['id' => 2132, 'district_id' => 477, 'name' => 'IV Koto'],
['id' => 2133, 'district_id' => 477, 'name' => 'Koto Gadang'],
['id' => 2134, 'district_id' => 477, 'name' => 'Koto Tuo'],
['id' => 2135, 'district_id' => 477, 'name' => 'Guguk'],
['id' => 2136, 'district_id' => 477, 'name' => 'Pakan Sinayan'],

// Desa/Kelurahan di Kecamatan Banuhampu
['id' => 2137, 'district_id' => 478, 'name' => 'Banuhampu'],
['id' => 2138, 'district_id' => 478, 'name' => 'Padang Lua'],
['id' => 2139, 'district_id' => 478, 'name' => 'Sungai Tanang'],
['id' => 2140, 'district_id' => 478, 'name' => 'Ladang Laweh'],
['id' => 2141, 'district_id' => 478, 'name' => 'Batagak'],

// Desa/Kelurahan di Kecamatan Candung
['id' => 2142, 'district_id' => 479, 'name' => 'Candung'],
['id' => 2143, 'district_id' => 479, 'name' => 'Lasi'],
['id' => 2144, 'district_id' => 479, 'name' => 'Biaro'],
['id' => 2145, 'district_id' => 479, 'name' => 'Koto Hilalang'],
['id' => 2146, 'district_id' => 479, 'name' => 'Bukik Batabuah'],

// Desa/Kelurahan di Kecamatan Palupuh
['id' => 2147, 'district_id' => 480, 'name' => 'Palupuh'],
['id' => 2148, 'district_id' => 480, 'name' => 'Sitanang'],
['id' => 2149, 'district_id' => 480, 'name' => 'Batu Kambiang'],
['id' => 2150, 'district_id' => 480, 'name' => 'Kinali'],
['id' => 2151, 'district_id' => 480, 'name' => 'Pasia Laweh'],
// Desa/Kelurahan di Kecamatan Payakumbuh
['id' => 2152, 'district_id' => 481, 'name' => 'Payakumbuh'],
['id' => 2153, 'district_id' => 481, 'name' => 'Koto Nan Ampek'],
['id' => 2154, 'district_id' => 481, 'name' => 'Sungai Durian'],
['id' => 2155, 'district_id' => 481, 'name' => 'Bulakan Balai Kandi'],
['id' => 2156, 'district_id' => 481, 'name' => 'Tiakar'],

// Desa/Kelurahan di Kecamatan Guguak
['id' => 2157, 'district_id' => 482, 'name' => 'Guguak'],
['id' => 2158, 'district_id' => 482, 'name' => 'Sariak Laweh'],
['id' => 2159, 'district_id' => 482, 'name' => 'Koto Tangah Batu Ampa'],
['id' => 2160, 'district_id' => 482, 'name' => 'Tanjuang Gadang'],
['id' => 2161, 'district_id' => 482, 'name' => 'Andaleh'],

// Desa/Kelurahan di Kecamatan Lareh Sago Halaban
['id' => 2162, 'district_id' => 483, 'name' => 'Lareh Sago Halaban'],
['id' => 2163, 'district_id' => 483, 'name' => 'Simpang Kapuak'],
['id' => 2164, 'district_id' => 483, 'name' => 'Balai Panjang'],
['id' => 2165, 'district_id' => 483, 'name' => 'Sialang'],
['id' => 2166, 'district_id' => 483, 'name' => 'Halaban'],

// Desa/Kelurahan di Kecamatan Pangkalan Koto Baru
['id' => 2167, 'district_id' => 484, 'name' => 'Pangkalan Koto Baru'],
['id' => 2168, 'district_id' => 484, 'name' => 'Tanjuang Balik'],
['id' => 2169, 'district_id' => 484, 'name' => 'Sialang'],
['id' => 2170, 'district_id' => 484, 'name' => 'Tanjuang Pauh'],
['id' => 2171, 'district_id' => 484, 'name' => 'Batu Payuang'],

// Desa/Kelurahan di Kecamatan Harau
['id' => 2172, 'district_id' => 485, 'name' => 'Harau'],
['id' => 2173, 'district_id' => 485, 'name' => 'Sarilamak'],
['id' => 2174, 'district_id' => 485, 'name' => 'Koto Tuo'],
['id' => 2175, 'district_id' => 485, 'name' => 'Tanjuang Pati'],
['id' => 2176, 'district_id' => 485, 'name' => 'Andaleh Baruh Bukik'],
// Desa/Kelurahan di Kecamatan Suliki
['id' => 2177, 'district_id' => 486, 'name' => 'Suliki'],
['id' => 2178, 'district_id' => 486, 'name' => 'Sungai Siauan'],
['id' => 2179, 'district_id' => 486, 'name' => 'Pauah'],
['id' => 2180, 'district_id' => 486, 'name' => 'Tanjung Sani'],
['id' => 2181, 'district_id' => 486, 'name' => 'Batu Payuang'],

// Desa/Kelurahan di Kecamatan Kapur IX
['id' => 2182, 'district_id' => 487, 'name' => 'Kapur IX'],
['id' => 2183, 'district_id' => 487, 'name' => 'Sungai Sarik'],
['id' => 2184, 'district_id' => 487, 'name' => 'Pauh Janggi'],
['id' => 2185, 'district_id' => 487, 'name' => 'Koto Talang'],
['id' => 2186, 'district_id' => 487, 'name' => 'Koto Guguak'],

// Desa/Kelurahan di Kecamatan Lubuk Sikaping
['id' => 2187, 'district_id' => 488, 'name' => 'Lubuk Sikaping'],
['id' => 2188, 'district_id' => 488, 'name' => 'Sungai Tarab'],
['id' => 2189, 'district_id' => 488, 'name' => 'Balai Talamau'],
['id' => 2190, 'district_id' => 488, 'name' => 'Lubuak Gadang'],
['id' => 2191, 'district_id' => 488, 'name' => 'Bungin'],

// Desa/Kelurahan di Kecamatan Bonjol
['id' => 2192, 'district_id' => 489, 'name' => 'Bonjol'],
['id' => 2193, 'district_id' => 489, 'name' => 'Pangkalan'],
['id' => 2194, 'district_id' => 489, 'name' => 'Tanjung Balik'],
['id' => 2195, 'district_id' => 489, 'name' => 'Sungai Rumbai'],
['id' => 2196, 'district_id' => 489, 'name' => 'Mapat Tunggul'],

// Desa/Kelurahan di Kecamatan Panti
['id' => 2197, 'district_id' => 490, 'name' => 'Panti'],
['id' => 2198, 'district_id' => 490, 'name' => 'Koto Kaciak'],
['id' => 2199, 'district_id' => 490, 'name' => 'Tanjung Kubu'],
['id' => 2200, 'district_id' => 490, 'name' => 'Pangian'],
['id' => 2201, 'district_id' => 490, 'name' => 'Sialang'],

// Desa/Kelurahan di Kecamatan Duo Koto
['id' => 2202, 'district_id' => 491, 'name' => 'Duo Koto'],
['id' => 2203, 'district_id' => 491, 'name' => 'Tanjung Gadang'],
['id' => 2204, 'district_id' => 491, 'name' => 'Koto Tuo'],
['id' => 2205, 'district_id' => 491, 'name' => 'Bukit Gadang'],
['id' => 2206, 'district_id' => 491, 'name' => 'Lubuk Sungkai'],
// Desa/Kelurahan di Kecamatan Tigo Nagari
['id' => 2207, 'district_id' => 492, 'name' => 'Tigo Nagari'],
['id' => 2208, 'district_id' => 492, 'name' => 'Sungai Tarab'],
['id' => 2209, 'district_id' => 492, 'name' => 'Koto Kaciak'],
['id' => 2210, 'district_id' => 492, 'name' => 'Jorong Parit'],
['id' => 2211, 'district_id' => 492, 'name' => 'Kampung Tiku'],

// Desa/Kelurahan di Kecamatan Mapat Tunggul
['id' => 2212, 'district_id' => 493, 'name' => 'Mapat Tunggul'],
['id' => 2213, 'district_id' => 493, 'name' => 'Sungai Pagu'],
['id' => 2214, 'district_id' => 493, 'name' => 'Koto Tengah'],
['id' => 2215, 'district_id' => 493, 'name' => 'Sikabau'],
['id' => 2216, 'district_id' => 493, 'name' => 'Nagari'],

// Desa/Kelurahan di Kecamatan Pulau Punjung
['id' => 2217, 'district_id' => 494, 'name' => 'Pulau Punjung'],
['id' => 2218, 'district_id' => 494, 'name' => 'Sungai Liku'],
['id' => 2219, 'district_id' => 494, 'name' => 'Koto Kaciak'],
['id' => 2220, 'district_id' => 494, 'name' => 'Batu Kambiang'],
['id' => 2221, 'district_id' => 494, 'name' => 'Pondok Tangah'],

// Desa/Kelurahan di Kecamatan Sungai Rumbai
['id' => 2222, 'district_id' => 495, 'name' => 'Sungai Rumbai'],
['id' => 2223, 'district_id' => 495, 'name' => 'Guguak'],
['id' => 2224, 'district_id' => 495, 'name' => 'Sungai Batang'],
['id' => 2225, 'district_id' => 495, 'name' => 'Lubuk Kilangan'],
['id' => 2226, 'district_id' => 495, 'name' => 'Kampung Pasir'],

// Desa/Kelurahan di Kecamatan Koto Baru
['id' => 2227, 'district_id' => 496, 'name' => 'Koto Baru'],
['id' => 2228, 'district_id' => 496, 'name' => 'Nagari Sumani'],
['id' => 2229, 'district_id' => 496, 'name' => 'Sungai Aua'],
['id' => 2230, 'district_id' => 496, 'name' => 'Kampung Baru'],
['id' => 2231, 'district_id' => 496, 'name' => 'Tepi Aua'],

// Desa/Kelurahan di Kecamatan Timpeh
['id' => 2232, 'district_id' => 497, 'name' => 'Timpeh'],
['id' => 2233, 'district_id' => 497, 'name' => 'Sungai Rumbai'],
['id' => 2234, 'district_id' => 497, 'name' => 'Sungai Pagu'],
['id' => 2235, 'district_id' => 497, 'name' => 'Tanjung Taratak'],
['id' => 2236, 'district_id' => 497, 'name' => 'Koto Kaciak'],
// Desa/Kelurahan di Kecamatan Sembilan Koto
['id' => 2237, 'district_id' => 498, 'name' => 'Sembilan Koto'],
['id' => 2238, 'district_id' => 498, 'name' => 'Sungai Pinang'],
['id' => 2239, 'district_id' => 498, 'name' => 'Lubuak Paraku'],
['id' => 2240, 'district_id' => 498, 'name' => 'Padang Permatang'],
['id' => 2241, 'district_id' => 498, 'name' => 'Tanjung Harapan'],

// Desa/Kelurahan di Kecamatan Sangir
['id' => 2242, 'district_id' => 499, 'name' => 'Sangir'],
['id' => 2243, 'district_id' => 499, 'name' => 'Tigo Jorong'],
['id' => 2244, 'district_id' => 499, 'name' => 'Taluk'],
['id' => 2245, 'district_id' => 499, 'name' => 'Sungai Tarab'],
['id' => 2246, 'district_id' => 499, 'name' => 'Kampung Padang'],

// Desa/Kelurahan di Kecamatan Sungai Pagu
['id' => 2247, 'district_id' => 500, 'name' => 'Sungai Pagu'],
['id' => 2248, 'district_id' => 500, 'name' => 'Nagari Koto Baru'],
['id' => 2249, 'district_id' => 500, 'name' => 'Tanjung Aua'],
['id' => 2250, 'district_id' => 500, 'name' => 'Talang Koto'],
['id' => 2251, 'district_id' => 500, 'name' => 'Kampung Sudi'],
// Desa/Kelurahan di Kecamatan Pauh
['id' => 2252, 'district_id' => 501, 'name' => 'Pauh'],
['id' => 2253, 'district_id' => 501, 'name' => 'Sungai Limau'],
['id' => 2254, 'district_id' => 501, 'name' => 'Tanjung Harapan'],
['id' => 2255, 'district_id' => 501, 'name' => 'Koto Kaciak'],
['id' => 2256, 'district_id' => 501, 'name' => 'Taratak'],

// Desa/Kelurahan di Kecamatan Sangir Batang Hari
['id' => 2257, 'district_id' => 502, 'name' => 'Sangir Batang Hari'],
['id' => 2258, 'district_id' => 502, 'name' => 'Sungai Kunyit'],
['id' => 2259, 'district_id' => 502, 'name' => 'Sungai Pelang'],
['id' => 2260, 'district_id' => 502, 'name' => 'Pematang'],
['id' => 2261, 'district_id' => 502, 'name' => 'Sumber Baru'],

// Desa/Kelurahan di Kecamatan Sangir Jujuan
['id' => 2262, 'district_id' => 503, 'name' => 'Sangir Jujuan'],
['id' => 2263, 'district_id' => 503, 'name' => 'Tanjung Suli'],
['id' => 2264, 'district_id' => 503, 'name' => 'Jorong Alang'],
['id' => 2265, 'district_id' => 503, 'name' => 'Sungai Batu'],
['id' => 2266, 'district_id' => 503, 'name' => 'Pulau Kubu'],
// Desa/Kelurahan di Kecamatan Pasaman
['id' => 2267, 'district_id' => 504, 'name' => 'Pasaman'],
['id' => 2268, 'district_id' => 504, 'name' => 'Nagari Paru'],
['id' => 2269, 'district_id' => 504, 'name' => 'Sungai Geringging'],
['id' => 2270, 'district_id' => 504, 'name' => 'Air Balam'],
['id' => 2271, 'district_id' => 504, 'name' => 'Tigo Jorong'],

// Desa/Kelurahan di Kecamatan Luhak Nan Duo
['id' => 2272, 'district_id' => 505, 'name' => 'Luhak Nan Duo'],
['id' => 2273, 'district_id' => 505, 'name' => 'Nagari Sialang'],
['id' => 2274, 'district_id' => 505, 'name' => 'Kampung Sudi'],
['id' => 2275, 'district_id' => 505, 'name' => 'Pasar Baru'],
['id' => 2276, 'district_id' => 505, 'name' => 'Bungus'],

// Desa/Kelurahan di Kecamatan Kinali
['id' => 2277, 'district_id' => 506, 'name' => 'Kinali'],
['id' => 2278, 'district_id' => 506, 'name' => 'Sungai Gadang'],
['id' => 2279, 'district_id' => 506, 'name' => 'Nagari Bukit'],
['id' => 2280, 'district_id' => 506, 'name' => 'Jorong Kecil'],
['id' => 2281, 'district_id' => 506, 'name' => 'Tanjung Pial'],

// Desa/Kelurahan di Kecamatan Sasak Ranah Pasisie
['id' => 2282, 'district_id' => 507, 'name' => 'Sasak Ranah Pasisie'],
['id' => 2283, 'district_id' => 507, 'name' => 'Nagari Pasisie'],
['id' => 2284, 'district_id' => 507, 'name' => 'Sungai Pinang'],
['id' => 2285, 'district_id' => 507, 'name' => 'Padang Permatang'],
['id' => 2286, 'district_id' => 507, 'name' => 'Talang Tujuh'],

// Desa/Kelurahan di Kecamatan Talamau
['id' => 2287, 'district_id' => 508, 'name' => 'Talamau'],
['id' => 2288, 'district_id' => 508, 'name' => 'Nagari Ujung Gading'],
['id' => 2289, 'district_id' => 508, 'name' => 'Talu'],
['id' => 2290, 'district_id' => 508, 'name' => 'Pariaman'],
['id' => 2291, 'district_id' => 508, 'name' => 'Rambah'],

// Desa/Kelurahan di Kecamatan Padang Barat
['id' => 2292, 'district_id' => 509, 'name' => 'Padang Barat'],
['id' => 2293, 'district_id' => 509, 'name' => 'Bungus'],
['id' => 2294, 'district_id' => 509, 'name' => 'Kota Belakang'],
['id' => 2295, 'district_id' => 509, 'name' => 'Jati'],
['id' => 2296, 'district_id' => 509, 'name' => 'Limau Manis'],

// Desa/Kelurahan di Kecamatan Padang Timur
['id' => 2297, 'district_id' => 510, 'name' => 'Padang Timur'],
['id' => 2298, 'district_id' => 510, 'name' => 'Sungai Rumbai'],
['id' => 2299, 'district_id' => 510, 'name' => 'Labuhan'],
['id' => 2300, 'district_id' => 510, 'name' => 'Sungai Pinang'],
['id' => 2301, 'district_id' => 510, 'name' => 'Sijunjung'],

// Desa/Kelurahan di Kecamatan Padang Utara
['id' => 2302, 'district_id' => 511, 'name' => 'Padang Utara'],
['id' => 2303, 'district_id' => 511, 'name' => 'Sungai Solok'],
['id' => 2304, 'district_id' => 511, 'name' => 'Pauh'],
['id' => 2305, 'district_id' => 511, 'name' => 'Tanjung Sudi'],
['id' => 2306, 'district_id' => 511, 'name' => 'Baru'],

// Desa/Kelurahan di Kecamatan Kuranji
['id' => 2307, 'district_id' => 512, 'name' => 'Kuranji'],
['id' => 2308, 'district_id' => 512, 'name' => 'Panyalaan'],
['id' => 2309, 'district_id' => 512, 'name' => 'Tanjung Jaya'],
['id' => 2310, 'district_id' => 512, 'name' => 'Kampung Melintang'],
['id' => 2311, 'district_id' => 512, 'name' => 'Gorong-Gorong'],

// Desa/Kelurahan di Kecamatan Pauh
['id' => 2312, 'district_id' => 513, 'name' => 'Pauh'],
['id' => 2313, 'district_id' => 513, 'name' => 'Bukit Kapur'],
['id' => 2314, 'district_id' => 513, 'name' => 'Teluk Kabung'],
['id' => 2315, 'district_id' => 513, 'name' => 'Limo Jaya'],
['id' => 2316, 'district_id' => 513, 'name' => 'Tanjung Harapan'],

// Desa/Kelurahan di Kecamatan Lubuk Begalung
['id' => 2317, 'district_id' => 514, 'name' => 'Lubuk Begalung'],
['id' => 2318, 'district_id' => 514, 'name' => 'Bungus'],
['id' => 2319, 'district_id' => 514, 'name' => 'Koto Besi'],
['id' => 2320, 'district_id' => 514, 'name' => 'Sungai Limau'],
['id' => 2321, 'district_id' => 514, 'name' => 'Kampung Salak'],

// Desa/Kelurahan di Kecamatan Bungus Teluk Kabung
['id' => 2322, 'district_id' => 515, 'name' => 'Bungus Teluk Kabung'],
['id' => 2323, 'district_id' => 515, 'name' => 'Sungai Duri'],
['id' => 2324, 'district_id' => 515, 'name' => 'Nagari Malalak'],
['id' => 2325, 'district_id' => 515, 'name' => 'Pematang Baru'],
['id' => 2326, 'district_id' => 515, 'name' => 'Teluk Pandan'],

// Desa/Kelurahan di Kecamatan Tanjung Harapan
['id' => 2327, 'district_id' => 516, 'name' => 'Tanjung Harapan'],
['id' => 2328, 'district_id' => 516, 'name' => 'Sungai Rambah'],
['id' => 2329, 'district_id' => 516, 'name' => 'Pasir Hitam'],
['id' => 2330, 'district_id' => 516, 'name' => 'Batu Gadang'],
['id' => 2331, 'district_id' => 516, 'name' => 'Hutan Kampung'],

// Desa/Kelurahan di Kecamatan Lubuk Sikarah
['id' => 2332, 'district_id' => 517, 'name' => 'Lubuk Sikarah'],
['id' => 2333, 'district_id' => 517, 'name' => 'Pecindang'],
['id' => 2334, 'district_id' => 517, 'name' => 'Padang Luar'],
['id' => 2335, 'district_id' => 517, 'name' => 'Talang'],
['id' => 2336, 'district_id' => 517, 'name' => 'Sungai Rasau'],

// Desa/Kelurahan di Kecamatan Barangin
['id' => 2337, 'district_id' => 518, 'name' => 'Barangin'],
['id' => 2338, 'district_id' => 518, 'name' => 'Pasar Baru'],
['id' => 2339, 'district_id' => 518, 'name' => 'Sungai Lingkung'],
['id' => 2340, 'district_id' => 518, 'name' => 'Ulu Gadang'],
['id' => 2341, 'district_id' => 518, 'name' => 'Talang Jaya'],

// Desa/Kelurahan di Kecamatan Talawi
['id' => 2342, 'district_id' => 519, 'name' => 'Talawi'],
['id' => 2343, 'district_id' => 519, 'name' => 'Sungai Asam'],
['id' => 2344, 'district_id' => 519, 'name' => 'Rawa Indah'],
['id' => 2345, 'district_id' => 519, 'name' => 'Kelurahan Pasa'],
['id' => 2346, 'district_id' => 519, 'name' => 'Sungai Talang'],

// Desa/Kelurahan di Kecamatan Silungkang
['id' => 2347, 'district_id' => 520, 'name' => 'Silungkang'],
['id' => 2348, 'district_id' => 520, 'name' => 'Nagari Padang'],
['id' => 2349, 'district_id' => 520, 'name' => 'Sungai Pinang'],
['id' => 2350, 'district_id' => 520, 'name' => 'Pasar Baru'],
['id' => 2351, 'district_id' => 520, 'name' => 'Sungai Limau'],
// Desa/Kelurahan di Kecamatan Lembah Segar
['id' => 2352, 'district_id' => 521, 'name' => 'Lembah Segar'],
['id' => 2353, 'district_id' => 521, 'name' => 'Air Dingin'],
['id' => 2354, 'district_id' => 521, 'name' => 'Bukit Apit'],
['id' => 2355, 'district_id' => 521, 'name' => 'Pintu Kabun'],
['id' => 2356, 'district_id' => 521, 'name' => 'Tanah Lapang'],

// Desa/Kelurahan di Kecamatan Padang Panjang Barat
['id' => 2357, 'district_id' => 522, 'name' => 'Pasar Usang'],
['id' => 2358, 'district_id' => 522, 'name' => 'Balai-Balai'],
['id' => 2359, 'district_id' => 522, 'name' => 'Bukit Surungan'],
['id' => 2360, 'district_id' => 522, 'name' => 'Kampung Manggis'],
['id' => 2361, 'district_id' => 522, 'name' => 'Ekor Lubuk'],

// Desa/Kelurahan di Kecamatan Padang Panjang Timur
['id' => 2362, 'district_id' => 523, 'name' => 'Silaing Bawah'],
['id' => 2363, 'district_id' => 523, 'name' => 'Silaing Atas'],
['id' => 2364, 'district_id' => 523, 'name' => 'Ganting'],
['id' => 2365, 'district_id' => 523, 'name' => 'Tanah Hitam'],
['id' => 2366, 'district_id' => 523, 'name' => 'Koto Katik'],

// Desa/Kelurahan di Kecamatan Aur Birugo Tigo Baleh
['id' => 2367, 'district_id' => 524, 'name' => 'Aur Atas'],
['id' => 2368, 'district_id' => 524, 'name' => 'Birugo'],
['id' => 2369, 'district_id' => 524, 'name' => 'Tigo Baleh'],
['id' => 2370, 'district_id' => 524, 'name' => 'Pakan Kurai'],
['id' => 2371, 'district_id' => 524, 'name' => 'Bukik Cangang'],

// Desa/Kelurahan di Kecamatan Guguk Panjang
['id' => 2372, 'district_id' => 525, 'name' => 'Kampung Jawa'],
['id' => 2373, 'district_id' => 525, 'name' => 'Pakan Labuah'],
['id' => 2374, 'district_id' => 525, 'name' => 'Guguak Randah'],
['id' => 2375, 'district_id' => 525, 'name' => 'Manggis Ganting'],
['id' => 2376, 'district_id' => 525, 'name' => 'Pakan Sinayan'],

// Desa/Kelurahan di Kecamatan Mandiangin Koto Selayan
['id' => 2377, 'district_id' => 526, 'name' => 'Kampung Ladang'],
['id' => 2378, 'district_id' => 526, 'name' => 'Kayu Kubu'],
['id' => 2379, 'district_id' => 526, 'name' => 'Koto Selayan'],
['id' => 2380, 'district_id' => 526, 'name' => 'Mandiangin'],
['id' => 2381, 'district_id' => 526, 'name' => 'Puhun Pintu Kabun'],
// Desa/Kelurahan di Kecamatan Payakumbuh Barat
['id' => 2382, 'district_id' => 527, 'name' => 'Koto Nan Gadang'],
['id' => 2383, 'district_id' => 527, 'name' => 'Payolansek'],
['id' => 2384, 'district_id' => 527, 'name' => 'Bulakan Balai Kandi'],
['id' => 2385, 'district_id' => 527, 'name' => 'Padang Tangah Balai Nan Duo'],
['id' => 2386, 'district_id' => 527, 'name' => 'Tiakar'],

// Desa/Kelurahan di Kecamatan Payakumbuh Timur
['id' => 2387, 'district_id' => 528, 'name' => 'Balai Panjang'],
['id' => 2388, 'district_id' => 528, 'name' => 'Talawi'],
['id' => 2389, 'district_id' => 528, 'name' => 'Kubu Gadang'],
['id' => 2390, 'district_id' => 528, 'name' => 'Sicincin'],
['id' => 2391, 'district_id' => 528, 'name' => 'Padang Tiakar'],

// Desa/Kelurahan di Kecamatan Payakumbuh Utara
['id' => 2392, 'district_id' => 529, 'name' => 'Balai Jariang'],
['id' => 2393, 'district_id' => 529, 'name' => 'Padang Kaduduak'],
['id' => 2394, 'district_id' => 529, 'name' => 'Kapalo Koto Ampangan'],
['id' => 2395, 'district_id' => 529, 'name' => 'Ompang Tanah Sirah'],
['id' => 2396, 'district_id' => 529, 'name' => 'Koto Panjang'],

// Desa/Kelurahan di Kecamatan Lamposi Tigo Nagari
['id' => 2397, 'district_id' => 530, 'name' => 'Kampuang Nan Limo'],
['id' => 2398, 'district_id' => 530, 'name' => 'Sungai Durian'],
['id' => 2399, 'district_id' => 530, 'name' => 'Ampangan'],
['id' => 2400, 'district_id' => 530, 'name' => 'Balai Jariang'],
['id' => 2401, 'district_id' => 530, 'name' => 'Sungai Beringin'],

// Desa/Kelurahan di Kecamatan Pariaman Tengah
['id' => 2402, 'district_id' => 531, 'name' => 'Jati'],
['id' => 2403, 'district_id' => 531, 'name' => 'Pauh Barat'],
['id' => 2404, 'district_id' => 531, 'name' => 'Pauh Timur'],
['id' => 2405, 'district_id' => 531, 'name' => 'Kampung Pondok'],
['id' => 2406, 'district_id' => 531, 'name' => 'Kampung Baru'],

// Desa/Kelurahan di Kecamatan Pariaman Utara
['id' => 2407, 'district_id' => 532, 'name' => 'Pasir Sunur'],
['id' => 2408, 'district_id' => 532, 'name' => 'Sungai Pasak'],
['id' => 2409, 'district_id' => 532, 'name' => 'Sungai Rambai'],
['id' => 2410, 'district_id' => 532, 'name' => 'Sintuak'],
['id' => 2411, 'district_id' => 532, 'name' => 'Sungai Sirah'],

// Desa/Kelurahan di Kecamatan Pariaman Selatan
['id' => 2412, 'district_id' => 533, 'name' => 'Taluak'],
['id' => 2413, 'district_id' => 533, 'name' => 'Pungguang Kasiak'],
['id' => 2414, 'district_id' => 533, 'name' => 'Ujung Batuang'],
['id' => 2415, 'district_id' => 533, 'name' => 'Batang Kabung'],
['id' => 2416, 'district_id' => 533, 'name' => 'Sikapak Timur'],

// Desa/Kelurahan di Kecamatan Pariaman Timur
['id' => 2417, 'district_id' => 534, 'name' => 'Sikapak Barat'],
['id' => 2418, 'district_id' => 534, 'name' => 'Sikapak Timur'],
['id' => 2419, 'district_id' => 534, 'name' => 'Cubadak Air'],
['id' => 2420, 'district_id' => 534, 'name' => 'Rawang'],
['id' => 2421, 'district_id' => 534, 'name' => 'Talago Sariak'],

// Desa/Kelurahan di Kecamatan Bangkinang
['id' => 2422, 'district_id' => 535, 'name' => 'Langgini'],
['id' => 2423, 'district_id' => 535, 'name' => 'Pulau Lawas'],
['id' => 2424, 'district_id' => 535, 'name' => 'Rumbio'],
['id' => 2425, 'district_id' => 535, 'name' => 'Air Tiris'],
['id' => 2426, 'district_id' => 535, 'name' => 'Salo'],

// Desa/Kelurahan di Kecamatan Tembilahan
['id' => 2427, 'district_id' => 545, 'name' => 'Tembilahan Kota'],
['id' => 2428, 'district_id' => 545, 'name' => 'Pekan Arba'],
['id' => 2429, 'district_id' => 545, 'name' => 'Seberang Tembilahan'],
['id' => 2430, 'district_id' => 545, 'name' => 'Sungai Perak'],
['id' => 2431, 'district_id' => 545, 'name' => 'Kampung Baru'],
['id' => 2432, 'district_id' => 545, 'name' => 'Sungai Beringin'],
['id' => 2433, 'district_id' => 545, 'name' => 'Tembilahan Hulu'],
['id' => 2434, 'district_id' => 545, 'name' => 'Pulau Palas'],
['id' => 2435, 'district_id' => 545, 'name' => 'Harapan Jaya'],
['id' => 2436, 'district_id' => 545, 'name' => 'Sialang Panjang'],
['id' => 2437, 'district_id' => 545, 'name' => 'Tanjung Harapan'],
['id' => 2438, 'district_id' => 545, 'name' => 'Kampung Dagang'],
['id' => 2439, 'district_id' => 545, 'name' => 'Sungai Guntung'],
// Desa/Kelurahan di Kecamatan Tempuling
['id' => 2440, 'district_id' => 546, 'name' => 'Mumpa'],
['id' => 2441, 'district_id' => 546, 'name' => 'Harapan Jaya'],
['id' => 2442, 'district_id' => 546, 'name' => 'Teluk Kiambang'],
['id' => 2443, 'district_id' => 546, 'name' => 'Sungai Salak'],
['id' => 2444, 'district_id' => 546, 'name' => 'Tempuling'],

// Desa/Kelurahan di Kecamatan Gaung Anak Serka
['id' => 2445, 'district_id' => 547, 'name' => 'Belantaraya'],
['id' => 2446, 'district_id' => 547, 'name' => 'Sungai Iliran'],
['id' => 2447, 'district_id' => 547, 'name' => 'Teluk Dalam'],
['id' => 2448, 'district_id' => 547, 'name' => 'Tanjung Harapan'],
['id' => 2449, 'district_id' => 547, 'name' => 'Perigi Raja'],

// Desa/Kelurahan di Kecamatan Mandah
['id' => 2450, 'district_id' => 548, 'name' => 'Bakau Aceh'],
['id' => 2451, 'district_id' => 548, 'name' => 'Pulau Cawan'],
['id' => 2452, 'district_id' => 548, 'name' => 'Sepakat Jaya'],
['id' => 2453, 'district_id' => 548, 'name' => 'Pulai'],
['id' => 2454, 'district_id' => 548, 'name' => 'Mandah'],

// Desa/Kelurahan di Kecamatan Kateman
['id' => 2455, 'district_id' => 549, 'name' => 'Sungai Teritip'],
['id' => 2456, 'district_id' => 549, 'name' => 'Kuala Selat'],
['id' => 2457, 'district_id' => 549, 'name' => 'Tanjung Raja'],
['id' => 2458, 'district_id' => 549, 'name' => 'Tagagau'],
['id' => 2459, 'district_id' => 549, 'name' => 'Kampung Baru'],

// Desa/Kelurahan di Kecamatan Pangkalan Kerinci
['id' => 2460, 'district_id' => 550, 'name' => 'Kerinci Barat'],
['id' => 2461, 'district_id' => 550, 'name' => 'Kerinci Timur'],
['id' => 2462, 'district_id' => 550, 'name' => 'Rantau Baru'],
['id' => 2463, 'district_id' => 550, 'name' => 'Pangkalan Kerinci Kota'],
['id' => 2464, 'district_id' => 550, 'name' => 'Pangkalan Kerinci Timur'],

// Desa/Kelurahan di Kecamatan Ukui
['id' => 2465, 'district_id' => 551, 'name' => 'Ukui I'],
['id' => 2466, 'district_id' => 551, 'name' => 'Ukui II'],
['id' => 2467, 'district_id' => 551, 'name' => 'Bukit Jaya'],
['id' => 2468, 'district_id' => 551, 'name' => 'Lubuk Kembang Bunga'],
['id' => 2469, 'district_id' => 551, 'name' => 'Kuala Semundam'],

// Desa/Kelurahan di Kecamatan Pangkalan Lesung
['id' => 2470, 'district_id' => 552, 'name' => 'Pangkalan Lesung'],
['id' => 2471, 'district_id' => 552, 'name' => 'Sorek'],
['id' => 2472, 'district_id' => 552, 'name' => 'Kota Baru'],
['id' => 2473, 'district_id' => 552, 'name' => 'Lubuk Mandian Gajah'],
['id' => 2474, 'district_id' => 552, 'name' => 'Lubuk Terap'],

// Desa/Kelurahan di Kecamatan Langgam
['id' => 2475, 'district_id' => 553, 'name' => 'Segati'],
['id' => 2476, 'district_id' => 553, 'name' => 'Langgam'],
['id' => 2477, 'district_id' => 553, 'name' => 'Genduang'],
['id' => 2478, 'district_id' => 553, 'name' => 'Lubuk Ogong'],
['id' => 2479, 'district_id' => 553, 'name' => 'Tambak'],

// Desa/Kelurahan di Kecamatan Bunut
['id' => 2480, 'district_id' => 554, 'name' => 'Bunut'],
['id' => 2481, 'district_id' => 554, 'name' => 'Lubuk Mas'],
['id' => 2482, 'district_id' => 554, 'name' => 'Sialang Bungkuk'],
['id' => 2483, 'district_id' => 554, 'name' => 'Betung'],
['id' => 2484, 'district_id' => 554, 'name' => 'Batang Kulim'],

// Desa/Kelurahan di Kecamatan Ujung Batu
['id' => 2485, 'district_id' => 555, 'name' => 'Pematang Berangan'],
['id' => 2486, 'district_id' => 555, 'name' => 'Tanjung Belit'],
['id' => 2487, 'district_id' => 555, 'name' => 'Pekanbaru'],
['id' => 2488, 'district_id' => 555, 'name' => 'Sungai Kumango'],
['id' => 2489, 'district_id' => 555, 'name' => 'Ujung Batu'],

// Desa/Kelurahan di Kecamatan Rambah
['id' => 2490, 'district_id' => 556, 'name' => 'Pasir Pengaraian'],
['id' => 2491, 'district_id' => 556, 'name' => 'Rambah'],
['id' => 2492, 'district_id' => 556, 'name' => 'Bangun Purba'],
['id' => 2493, 'district_id' => 556, 'name' => 'Babussalam'],
['id' => 2494, 'district_id' => 556, 'name' => 'Rambah Tengah Hulu'],
// Desa/Kelurahan di Kecamatan Tambusai
['id' => 2495, 'district_id' => 557, 'name' => 'Sungai Kuning'],
['id' => 2496, 'district_id' => 557, 'name' => 'Tambusai'],
['id' => 2497, 'district_id' => 557, 'name' => 'Sungai Rawa'],
['id' => 2498, 'district_id' => 557, 'name' => 'Batang Kumu'],
['id' => 2499, 'district_id' => 557, 'name' => 'Tambusai Utara'],

// Desa/Kelurahan di Kecamatan Bangun Purba
['id' => 2500, 'district_id' => 558, 'name' => 'Bangun Purba'],
['id' => 2501, 'district_id' => 558, 'name' => 'Sungai Sempurna'],
['id' => 2502, 'district_id' => 558, 'name' => 'Tanjung Datuk'],
['id' => 2503, 'district_id' => 558, 'name' => 'Batu Rusa'],
['id' => 2504, 'district_id' => 558, 'name' => 'Sungai Rawa'],

// Desa/Kelurahan di Kecamatan Kunto Darussalam
['id' => 2505, 'district_id' => 559, 'name' => 'Sungai Luar'],
['id' => 2506, 'district_id' => 559, 'name' => 'Rantau Badak'],
['id' => 2507, 'district_id' => 559, 'name' => 'Kunto Darussalam'],
['id' => 2508, 'district_id' => 559, 'name' => 'Tanjung Sialang'],
['id' => 2509, 'district_id' => 559, 'name' => 'Tanjung Luar'],

// Desa/Kelurahan di Kecamatan Bagan Sinembah
['id' => 2510, 'district_id' => 560, 'name' => 'Bagan Sinembah'],
['id' => 2511, 'district_id' => 560, 'name' => 'Pekan Bagan'],
['id' => 2512, 'district_id' => 560, 'name' => 'Bagan Batubara'],
['id' => 2513, 'district_id' => 560, 'name' => 'Tebing Tinggi'],
['id' => 2514, 'district_id' => 560, 'name' => 'Sungai Keris'],

// Desa/Kelurahan di Kecamatan Bangko
['id' => 2515, 'district_id' => 561, 'name' => 'Bangko'],
['id' => 2516, 'district_id' => 561, 'name' => 'Kampung Baru'],
['id' => 2517, 'district_id' => 561, 'name' => 'Tebing Tinggi'],
['id' => 2518, 'district_id' => 561, 'name' => 'Tanjung Harapan'],
['id' => 2519, 'district_id' => 561, 'name' => 'Kampung Melayu'],

// Desa/Kelurahan di Kecamatan Tanah Putih
['id' => 2520, 'district_id' => 562, 'name' => 'Tanah Putih'],
['id' => 2521, 'district_id' => 562, 'name' => 'Sungai Apit'],
['id' => 2522, 'district_id' => 562, 'name' => 'Sungai Rawa'],
['id' => 2523, 'district_id' => 562, 'name' => 'Perkebunan'],
['id' => 2524, 'district_id' => 562, 'name' => 'Kampung Baru'],

// Desa/Kelurahan di Kecamatan Pujud
['id' => 2525, 'district_id' => 563, 'name' => 'Pujud'],
['id' => 2526, 'district_id' => 563, 'name' => 'Air Hitam'],
['id' => 2527, 'district_id' => 563, 'name' => 'Sungai Langit'],
['id' => 2528, 'district_id' => 563, 'name' => 'Buntut Sialang'],
['id' => 2529, 'district_id' => 563, 'name' => 'Mawar'],

// Desa/Kelurahan di Kecamatan Simpang Kanan
['id' => 2530, 'district_id' => 564, 'name' => 'Simpang Kanan'],
['id' => 2531, 'district_id' => 564, 'name' => 'Tanjung Pusaka'],
['id' => 2532, 'district_id' => 564, 'name' => 'Sungai Payang'],
['id' => 2533, 'district_id' => 564, 'name' => 'Pekan Jaya'],
['id' => 2534, 'district_id' => 564, 'name' => 'Tanjung Harapan'],

// Desa/Kelurahan di Kecamatan Siak
['id' => 2535, 'district_id' => 565, 'name' => 'Siak'],
['id' => 2536, 'district_id' => 565, 'name' => 'Sungai Pusaka'],
['id' => 2537, 'district_id' => 565, 'name' => 'Tanjung Rumbia'],
['id' => 2538, 'district_id' => 565, 'name' => 'Bengkalis'],
['id' => 2539, 'district_id' => 565, 'name' => 'Kampung Tengah'],
// Desa/Kelurahan di Kecamatan Sungai Apit
['id' => 2540, 'district_id' => 566, 'name' => 'Sungai Apit'],
['id' => 2541, 'district_id' => 566, 'name' => 'Sungai Pauh'],
['id' => 2542, 'district_id' => 566, 'name' => 'Sungai Rawa'],
['id' => 2543, 'district_id' => 566, 'name' => 'Kampung Baru'],
['id' => 2544, 'district_id' => 566, 'name' => 'Rantau Kuning'],

// Desa/Kelurahan di Kecamatan Dayun
['id' => 2545, 'district_id' => 567, 'name' => 'Dayun'],
['id' => 2546, 'district_id' => 567, 'name' => 'Sungai Tenam'],
['id' => 2547, 'district_id' => 567, 'name' => 'Sungai Bening'],
['id' => 2548, 'district_id' => 567, 'name' => 'Sumber Makmur'],
['id' => 2549, 'district_id' => 567, 'name' => 'Tunggal Jaya'],

// Desa/Kelurahan di Kecamatan Tualang
['id' => 2550, 'district_id' => 568, 'name' => 'Tualang'],
['id' => 2551, 'district_id' => 568, 'name' => 'Sungai Raja'],
['id' => 2552, 'district_id' => 568, 'name' => 'Sungai Limau'],
['id' => 2553, 'district_id' => 568, 'name' => 'Seraya'],
['id' => 2554, 'district_id' => 568, 'name' => 'Tunggal Jaya'],

// Desa/Kelurahan di Kecamatan Minas
['id' => 2555, 'district_id' => 569, 'name' => 'Minas'],
['id' => 2556, 'district_id' => 569, 'name' => 'Sungai Salak'],
['id' => 2557, 'district_id' => 569, 'name' => 'Sungai Mulia'],
['id' => 2558, 'district_id' => 569, 'name' => 'Sungai Karang'],
['id' => 2559, 'district_id' => 569, 'name' => 'Rantau Baru'],

// Desa/Kelurahan di Kecamatan Teluk Kuantan
['id' => 2560, 'district_id' => 570, 'name' => 'Teluk Kuantan'],
['id' => 2561, 'district_id' => 570, 'name' => 'Kuantan Hilir'],
['id' => 2562, 'district_id' => 570, 'name' => 'Pangean'],
['id' => 2563, 'district_id' => 570, 'name' => 'Cerenti'],
['id' => 2564, 'district_id' => 570, 'name' => 'Tanjung Rantau'],

// Desa/Kelurahan di Kecamatan Cerenti
['id' => 2565, 'district_id' => 571, 'name' => 'Cerenti'],
['id' => 2566, 'district_id' => 571, 'name' => 'Kuantan Hilir'],
['id' => 2567, 'district_id' => 571, 'name' => 'Logas Tanah Darat'],
['id' => 2568, 'district_id' => 571, 'name' => 'Sungai Kuning'],
['id' => 2569, 'district_id' => 571, 'name' => 'Batu Taba'],

// Desa/Kelurahan di Kecamatan Kuantan Hilir
['id' => 2570, 'district_id' => 572, 'name' => 'Kuantan Hilir'],
['id' => 2571, 'district_id' => 572, 'name' => 'Pangean'],
['id' => 2572, 'district_id' => 572, 'name' => 'Cerenti'],
['id' => 2573, 'district_id' => 572, 'name' => 'Tanjung Rantau'],
['id' => 2574, 'district_id' => 572, 'name' => 'Sungai Peras'],

// Desa/Kelurahan di Kecamatan Logas Tanah Darat
['id' => 2575, 'district_id' => 573, 'name' => 'Logas Tanah Darat'],
['id' => 2576, 'district_id' => 573, 'name' => 'Logas'],
['id' => 2577, 'district_id' => 573, 'name' => 'Tunggal Jaya'],
['id' => 2578, 'district_id' => 573, 'name' => 'Sungai Salak'],
['id' => 2579, 'district_id' => 573, 'name' => 'Tanah Merah'],

// Desa/Kelurahan di Kecamatan Pangean
['id' => 2580, 'district_id' => 574, 'name' => 'Pangean'],
['id' => 2581, 'district_id' => 574, 'name' => 'Kuantan Hilir'],
['id' => 2582, 'district_id' => 574, 'name' => 'Cerenti'],
['id' => 2583, 'district_id' => 574, 'name' => 'Sungai Kuning'],
['id' => 2584, 'district_id' => 574, 'name' => 'Tanah Putih'],

// Desa/Kelurahan di Kecamatan Bengkalis
['id' => 2585, 'district_id' => 575, 'name' => 'Bengkalis'],
['id' => 2586, 'district_id' => 575, 'name' => 'Pangkalan Jambi'],
['id' => 2587, 'district_id' => 575, 'name' => 'Sungai Selendang'],
['id' => 2588, 'district_id' => 575, 'name' => 'Rimba Melintang'],
['id' => 2589, 'district_id' => 575, 'name' => 'Rantau Panjang'],

// Desa/Kelurahan di Kecamatan Bantan
['id' => 2590, 'district_id' => 576, 'name' => 'Bantan'],
['id' => 2591, 'district_id' => 576, 'name' => 'Bantan Timur'],
['id' => 2592, 'district_id' => 576, 'name' => 'Bantan Barat'],
['id' => 2593, 'district_id' => 576, 'name' => 'Tebing Tinggi'],
['id' => 2594, 'district_id' => 576, 'name' => 'Kampung Baru'],

// Desa/Kelurahan di Kecamatan Siak Kecil
['id' => 2595, 'district_id' => 577, 'name' => 'Siak Kecil'],
['id' => 2596, 'district_id' => 577, 'name' => 'Sungai Selendang'],
['id' => 2597, 'district_id' => 577, 'name' => 'Tebing Tinggi'],
['id' => 2598, 'district_id' => 577, 'name' => 'Sungai Tohor'],
['id' => 2599, 'district_id' => 577, 'name' => 'Bunuraya'],

// Desa/Kelurahan di Kecamatan Mandau
['id' => 2600, 'district_id' => 578, 'name' => 'Mandau'],
['id' => 2601, 'district_id' => 578, 'name' => 'Duri'],
['id' => 2602, 'district_id' => 578, 'name' => 'Air Hitam'],
['id' => 2603, 'district_id' => 578, 'name' => 'Lubuk Gaung'],
['id' => 2604, 'district_id' => 578, 'name' => 'Sungai Duri'],

// Desa/Kelurahan di Kecamatan Rupat
['id' => 2605, 'district_id' => 579, 'name' => 'Rupat'],
['id' => 2606, 'district_id' => 579, 'name' => 'Rupat Barat'],
['id' => 2607, 'district_id' => 579, 'name' => 'Tebing Tinggi'],
['id' => 2608, 'district_id' => 579, 'name' => 'Rupat Timur'],
['id' => 2609, 'district_id' => 579, 'name' => 'Kampung Baru'],

// Desa/Kelurahan di Kecamatan Selat Panjang
['id' => 2610, 'district_id' => 580, 'name' => 'Selat Panjang'],
['id' => 2611, 'district_id' => 580, 'name' => 'Pulau Rangsang'],
['id' => 2612, 'district_id' => 580, 'name' => 'Rangsang Barat'],
['id' => 2613, 'district_id' => 580, 'name' => 'Sungai Merbau'],
['id' => 2614, 'district_id' => 580, 'name' => 'Kampung Merbau'],

// Desa/Kelurahan di Kecamatan Rangsang
['id' => 2615, 'district_id' => 581, 'name' => 'Rangsang'],
['id' => 2616, 'district_id' => 581, 'name' => 'Rangsang Barat'],
['id' => 2617, 'district_id' => 581, 'name' => 'Sungai Ranggas'],
['id' => 2618, 'district_id' => 581, 'name' => 'Kampung Baru'],
['id' => 2619, 'district_id' => 581, 'name' => 'Tanjung Meranti'],

// Desa/Kelurahan di Kecamatan Merbau
['id' => 2620, 'district_id' => 583, 'name' => 'Merbau'],
['id' => 2621, 'district_id' => 583, 'name' => 'Sungai Kuning'],
['id' => 2622, 'district_id' => 583, 'name' => 'Sungai Duri'],
['id' => 2623, 'district_id' => 583, 'name' => 'Sungai Salak'],
['id' => 2624, 'district_id' => 583, 'name' => 'Sungai Jaya'],

// Desa/Kelurahan di Kecamatan Pulau Merbau
['id' => 2625, 'district_id' => 584, 'name' => 'Pulau Merbau'],
['id' => 2626, 'district_id' => 584, 'name' => 'Sungai Kuning'],
['id' => 2627, 'district_id' => 584, 'name' => 'Pulau Kecil'],
['id' => 2628, 'district_id' => 584, 'name' => 'Tanjung Rantau'],
['id' => 2629, 'district_id' => 584, 'name' => 'Kampung Baru'],

// Desa/Kelurahan di Kecamatan Pekanbaru
['id' => 2630, 'district_id' => 585, 'name' => 'Pekanbaru'],
['id' => 2631, 'district_id' => 585, 'name' => 'Sukajadi'],
['id' => 2632, 'district_id' => 585, 'name' => 'Payung Sekaki'],
['id' => 2633, 'district_id' => 585, 'name' => 'Tenayan Raya'],
['id' => 2634, 'district_id' => 585, 'name' => 'Marpoyan Damai'],

// Desa/Kelurahan di Kecamatan Marpoyan Damai
['id' => 2635, 'district_id' => 586, 'name' => 'Marpoyan Damai'],
['id' => 2636, 'district_id' => 586, 'name' => 'Sukajadi'],
['id' => 2637, 'district_id' => 586, 'name' => 'Payung Sekaki'],
['id' => 2638, 'district_id' => 586, 'name' => 'Tebing Tinggi'],
['id' => 2639, 'district_id' => 586, 'name' => 'Kampung Baru'],

// Desa/Kelurahan di Kecamatan Payung Sekaki
['id' => 2640, 'district_id' => 587, 'name' => 'Payung Sekaki'],
['id' => 2641, 'district_id' => 587, 'name' => 'Marpoyan Damai'],
['id' => 2642, 'district_id' => 587, 'name' => 'Sukajadi'],
['id' => 2643, 'district_id' => 587, 'name' => 'Tebing Tinggi'],
['id' => 2644, 'district_id' => 587, 'name' => 'Tenayan Raya'],

// Desa/Kelurahan di Kecamatan Tenayan Raya
['id' => 2645, 'district_id' => 588, 'name' => 'Tenayan Raya'],
['id' => 2646, 'district_id' => 588, 'name' => 'Sukajadi'],
['id' => 2647, 'district_id' => 588, 'name' => 'Payung Sekaki'],
['id' => 2648, 'district_id' => 588, 'name' => 'Tebing Tinggi'],
['id' => 2649, 'district_id' => 588, 'name' => 'Marpoyan Damai'],

// Desa/Kelurahan di Kecamatan Sukajadi
['id' => 2650, 'district_id' => 589, 'name' => 'Sukajadi'],
['id' => 2651, 'district_id' => 589, 'name' => 'Sukajaya'],
['id' => 2652, 'district_id' => 589, 'name' => 'Tebing Tinggi'],
['id' => 2653, 'district_id' => 589, 'name' => 'Payung Sekaki'],
['id' => 2654, 'district_id' => 589, 'name' => 'Marpoyan Damai'],

// Desa/Kelurahan di Kecamatan Dumai
['id' => 2655, 'district_id' => 590, 'name' => 'Dumai'],
['id' => 2656, 'district_id' => 590, 'name' => 'Dumai Barat'],
['id' => 2657, 'district_id' => 590, 'name' => 'Dumai Timur'],
['id' => 2658, 'district_id' => 590, 'name' => 'Dumai Selatan'],
['id' => 2659, 'district_id' => 590, 'name' => 'Dumai Kota'],
// Desa/Kelurahan di Kecamatan Dumai Selatan
['id' => 2660, 'district_id' => 591, 'name' => 'Dumai Selatan'],
['id' => 2661, 'district_id' => 591, 'name' => 'Dumai Barat'],
['id' => 2662, 'district_id' => 591, 'name' => 'Dumai Timur'],
['id' => 2663, 'district_id' => 591, 'name' => 'Dumai Utara'],
['id' => 2664, 'district_id' => 591, 'name' => 'Medang Kampai'],

// Desa/Kelurahan di Kecamatan Dumai Timur
['id' => 2665, 'district_id' => 592, 'name' => 'Dumai Timur'],
['id' => 2666, 'district_id' => 592, 'name' => 'Dumai Selatan'],
['id' => 2667, 'district_id' => 592, 'name' => 'Dumai Utara'],
['id' => 2668, 'district_id' => 592, 'name' => 'Medang Kampai'],
['id' => 2669, 'district_id' => 592, 'name' => 'Dumai Kota'],

// Desa/Kelurahan di Kecamatan Dumai Utara
['id' => 2670, 'district_id' => 593, 'name' => 'Dumai Utara'],
['id' => 2671, 'district_id' => 593, 'name' => 'Dumai Barat'],
['id' => 2672, 'district_id' => 593, 'name' => 'Dumai Timur'],
['id' => 2673, 'district_id' => 593, 'name' => 'Medang Kampai'],
['id' => 2674, 'district_id' => 593, 'name' => 'Dumai Kota'],

// Desa/Kelurahan di Kecamatan Medang Kampai
['id' => 2675, 'district_id' => 594, 'name' => 'Medang Kampai'],
['id' => 2676, 'district_id' => 594, 'name' => 'Dumai Selatan'],
['id' => 2677, 'district_id' => 594, 'name' => 'Dumai Timur'],
['id' => 2678, 'district_id' => 594, 'name' => 'Dumai Utara'],
['id' => 2679, 'district_id' => 594, 'name' => 'Dumai Kota'],

// Desa/Kelurahan di Kecamatan Kerinci
['id' => 2680, 'district_id' => 595, 'name' => 'Kerinci'],
['id' => 2681, 'district_id' => 595, 'name' => 'Siulak'],
['id' => 2682, 'district_id' => 595, 'name' => 'Kayu Aro'],
['id' => 2683, 'district_id' => 595, 'name' => 'Gunung Kerinci'],
['id' => 2684, 'district_id' => 595, 'name' => 'Air Hangat'],

// Desa/Kelurahan di Kecamatan Siulak
['id' => 2685, 'district_id' => 596, 'name' => 'Siulak'],
['id' => 2686, 'district_id' => 596, 'name' => 'Kerinci'],
['id' => 2687, 'district_id' => 596, 'name' => 'Kayu Aro'],
['id' => 2688, 'district_id' => 596, 'name' => 'Gunung Kerinci'],
['id' => 2689, 'district_id' => 596, 'name' => 'Air Hangat'],

// Desa/Kelurahan di Kecamatan Kayu Aro
['id' => 2690, 'district_id' => 597, 'name' => 'Kayu Aro'],
['id' => 2691, 'district_id' => 597, 'name' => 'Siulak'],
['id' => 2692, 'district_id' => 597, 'name' => 'Kerinci'],
['id' => 2693, 'district_id' => 597, 'name' => 'Gunung Kerinci'],
['id' => 2694, 'district_id' => 597, 'name' => 'Air Hangat'],

// Desa/Kelurahan di Kecamatan Gunung Kerinci
['id' => 2695, 'district_id' => 598, 'name' => 'Gunung Kerinci'],
['id' => 2696, 'district_id' => 598, 'name' => 'Kayu Aro'],
['id' => 2697, 'district_id' => 598, 'name' => 'Siulak'],
['id' => 2698, 'district_id' => 598, 'name' => 'Kerinci'],
['id' => 2699, 'district_id' => 598, 'name' => 'Air Hangat'],

// Desa/Kelurahan di Kecamatan Air Hangat
['id' => 2700, 'district_id' => 599, 'name' => 'Air Hangat'],
['id' => 2701, 'district_id' => 599, 'name' => 'Kerinci'],
['id' => 2702, 'district_id' => 599, 'name' => 'Siulak'],
['id' => 2703, 'district_id' => 599, 'name' => 'Kayu Aro'],
['id' => 2704, 'district_id' => 599, 'name' => 'Gunung Kerinci'],

// Desa/Kelurahan di Kecamatan Bangko
['id' => 2705, 'district_id' => 600, 'name' => 'Bangko'],
['id' => 2706, 'district_id' => 600, 'name' => 'Jangkat'],
['id' => 2707, 'district_id' => 600, 'name' => 'Tabir'],
['id' => 2708, 'district_id' => 600, 'name' => 'Pangkalan Jambi'],
['id' => 2709, 'district_id' => 600, 'name' => 'Margo Tabir'],

// Desa/Kelurahan di Kecamatan Jangkat
['id' => 2710, 'district_id' => 601, 'name' => 'Jangkat'],
['id' => 2711, 'district_id' => 601, 'name' => 'Bangko'],
['id' => 2712, 'district_id' => 601, 'name' => 'Tabir'],
['id' => 2713, 'district_id' => 601, 'name' => 'Pangkalan Jambi'],
['id' => 2714, 'district_id' => 601, 'name' => 'Margo Tabir'],

// Desa/Kelurahan di Kecamatan Tabir
['id' => 2715, 'district_id' => 602, 'name' => 'Tabir'],
['id' => 2716, 'district_id' => 602, 'name' => 'Bangko'],
['id' => 2717, 'district_id' => 602, 'name' => 'Jangkat'],
['id' => 2718, 'district_id' => 602, 'name' => 'Pangkalan Jambi'],
['id' => 2719, 'district_id' => 602, 'name' => 'Margo Tabir'],

// Desa/Kelurahan di Kecamatan Pangkalan Jambi
['id' => 2720, 'district_id' => 603, 'name' => 'Pangkalan Jambi'],
['id' => 2721, 'district_id' => 603, 'name' => 'Bangko'],
['id' => 2722, 'district_id' => 603, 'name' => 'Jangkat'],
['id' => 2723, 'district_id' => 603, 'name' => 'Tabir'],
['id' => 2724, 'district_id' => 603, 'name' => 'Margo Tabir'],

// Desa/Kelurahan di Kecamatan Margo Tabir
['id' => 2725, 'district_id' => 604, 'name' => 'Margo Tabir'],
['id' => 2726, 'district_id' => 604, 'name' => 'Bangko'],
['id' => 2727, 'district_id' => 604, 'name' => 'Jangkat'],
['id' => 2728, 'district_id' => 604, 'name' => 'Tabir'],
['id' => 2729, 'district_id' => 604, 'name' => 'Pangkalan Jambi'],

// Desa/Kelurahan di Kecamatan Sarolangun
['id' => 2730, 'district_id' => 605, 'name' => 'Sarolangun'],
['id' => 2731, 'district_id' => 605, 'name' => 'Pelawan'],
['id' => 2732, 'district_id' => 605, 'name' => 'Singkut'],
['id' => 2733, 'district_id' => 605, 'name' => 'Mandiangin'],
['id' => 2734, 'district_id' => 605, 'name' => 'Limun'],
// Desa/Kelurahan di Kecamatan Pelawan
['id' => 2735, 'district_id' => 606, 'name' => 'Pelawan'],
['id' => 2736, 'district_id' => 606, 'name' => 'Sarolangun'],
['id' => 2737, 'district_id' => 606, 'name' => 'Singkut'],
['id' => 2738, 'district_id' => 606, 'name' => 'Mandiangin'],
['id' => 2739, 'district_id' => 606, 'name' => 'Limun'],

// Desa/Kelurahan di Kecamatan Singkut
['id' => 2740, 'district_id' => 607, 'name' => 'Singkut'],
['id' => 2741, 'district_id' => 607, 'name' => 'Sarolangun'],
['id' => 2742, 'district_id' => 607, 'name' => 'Pelawan'],
['id' => 2743, 'district_id' => 607, 'name' => 'Mandiangin'],
['id' => 2744, 'district_id' => 607, 'name' => 'Limun'],

// Desa/Kelurahan di Kecamatan Mandiangin
['id' => 2745, 'district_id' => 608, 'name' => 'Mandiangin'],
['id' => 2746, 'district_id' => 608, 'name' => 'Sarolangun'],
['id' => 2747, 'district_id' => 608, 'name' => 'Pelawan'],
['id' => 2748, 'district_id' => 608, 'name' => 'Singkut'],
['id' => 2749, 'district_id' => 608, 'name' => 'Limun'],

// Desa/Kelurahan di Kecamatan Limun
['id' => 2750, 'district_id' => 609, 'name' => 'Limun'],
['id' => 2751, 'district_id' => 609, 'name' => 'Sarolangun'],
['id' => 2752, 'district_id' => 609, 'name' => 'Pelawan'],
['id' => 2753, 'district_id' => 609, 'name' => 'Singkut'],
['id' => 2754, 'district_id' => 609, 'name' => 'Mandiangin'],

// Desa/Kelurahan di Kecamatan Muaro Bulian
['id' => 2755, 'district_id' => 610, 'name' => 'Muara Bulian'],
['id' => 2756, 'district_id' => 610, 'name' => 'Batanghari'],
['id' => 2757, 'district_id' => 610, 'name' => 'Maro Sebo'],
['id' => 2758, 'district_id' => 610, 'name' => 'Batin XXIV'],
['id' => 2759, 'district_id' => 610, 'name' => 'Pemayung'],

// Desa/Kelurahan di Kecamatan Batanghari
['id' => 2760, 'district_id' => 611, 'name' => 'Batanghari'],
['id' => 2761, 'district_id' => 611, 'name' => 'Muara Bulian'],
['id' => 2762, 'district_id' => 611, 'name' => 'Maro Sebo'],
['id' => 2763, 'district_id' => 611, 'name' => 'Batin XXIV'],
['id' => 2764, 'district_id' => 611, 'name' => 'Pemayung'],

// Desa/Kelurahan di Kecamatan Maro Sebo
['id' => 2765, 'district_id' => 612, 'name' => 'Maro Sebo'],
['id' => 2766, 'district_id' => 612, 'name' => 'Muara Bulian'],
['id' => 2767, 'district_id' => 612, 'name' => 'Batanghari'],
['id' => 2768, 'district_id' => 612, 'name' => 'Batin XXIV'],
['id' => 2769, 'district_id' => 612, 'name' => 'Pemayung'],

// Desa/Kelurahan di Kecamatan Batin XXIV
['id' => 2770, 'district_id' => 613, 'name' => 'Batin XXIV'],
['id' => 2771, 'district_id' => 613, 'name' => 'Muara Bulian'],
['id' => 2772, 'district_id' => 613, 'name' => 'Batanghari'],
['id' => 2773, 'district_id' => 613, 'name' => 'Maro Sebo'],
['id' => 2774, 'district_id' => 613, 'name' => 'Pemayung'],

// Desa/Kelurahan di Kecamatan Pemayung
['id' => 2775, 'district_id' => 614, 'name' => 'Pemayung'],
['id' => 2776, 'district_id' => 614, 'name' => 'Muara Bulian'],
['id' => 2777, 'district_id' => 614, 'name' => 'Batanghari'],
['id' => 2778, 'district_id' => 614, 'name' => 'Maro Sebo'],
['id' => 2779, 'district_id' => 614, 'name' => 'Batin XXIV'],
// Desa/Kelurahan di Kecamatan Sungai Gelam
['id' => 2786, 'district_id' => 616, 'name' => 'Tangkit'],
['id' => 2787, 'district_id' => 616, 'name' => 'Tangkit Baru'],
['id' => 2788, 'district_id' => 616, 'name' => 'Pematang Gajah'],
['id' => 2789, 'district_id' => 616, 'name' => 'Sungai Buluh'],

// Desa/Kelurahan di Kecamatan Jambi Luar Kota
['id' => 2790, 'district_id' => 617, 'name' => 'Pematang Jering'],
['id' => 2791, 'district_id' => 617, 'name' => 'Penyengat Olak'],
['id' => 2792, 'district_id' => 617, 'name' => 'Rengas Bandung'],
['id' => 2793, 'district_id' => 617, 'name' => 'Pijoan'],

// Desa/Kelurahan di Kecamatan Maro Sebo
['id' => 2794, 'district_id' => 618, 'name' => 'Mendalo Darat'],
['id' => 2795, 'district_id' => 618, 'name' => 'Mendalo Indah'],
['id' => 2796, 'district_id' => 618, 'name' => 'Pematang Raman'],
['id' => 2797, 'district_id' => 618, 'name' => 'Pematang Sulur'],

// Desa/Kelurahan di Kecamatan Sekernan
['id' => 2798, 'district_id' => 619, 'name' => 'Sekernan Ilir'],
['id' => 2799, 'district_id' => 619, 'name' => 'Sekernan Tengah'],
['id' => 2800, 'district_id' => 619, 'name' => 'Sekernan Timur'],
['id' => 2801, 'district_id' => 619, 'name' => 'Sekernan Barat'],

// Desa/Kelurahan di Kecamatan Tanjung Jabung Barat
['id' => 2802, 'district_id' => 620, 'name' => 'Adi Purwa'],
['id' => 2803, 'district_id' => 620, 'name' => 'Bukit Harapan'],
['id' => 2804, 'district_id' => 620, 'name' => 'Merlung'],
['id' => 2805, 'district_id' => 620, 'name' => 'Lubuk Terap'],

// Desa/Kelurahan di Kecamatan Kuala Tungkal
['id' => 2806, 'district_id' => 621, 'name' => 'Kuala Tungkal I'],
['id' => 2807, 'district_id' => 621, 'name' => 'Kuala Tungkal II'],
['id' => 2808, 'district_id' => 621, 'name' => 'Kuala Tungkal III'],
['id' => 2809, 'district_id' => 621, 'name' => 'Patunas'],
// Desa/Kelurahan di Kecamatan Betara
['id' => 2810, 'district_id' => 622, 'name' => 'Lubuk Bernai'],
['id' => 2811, 'district_id' => 622, 'name' => 'Muntialo'],
['id' => 2812, 'district_id' => 622, 'name' => 'Serdang Jaya'],
['id' => 2813, 'district_id' => 622, 'name' => 'Teluk Kulbi'],

// Desa/Kelurahan di Kecamatan Brangin
['id' => 2814, 'district_id' => 623, 'name' => 'Brangin I'],
['id' => 2815, 'district_id' => 623, 'name' => 'Brangin II'],
['id' => 2816, 'district_id' => 623, 'name' => 'Brangin Timur'],
['id' => 2817, 'district_id' => 623, 'name' => 'Brangin Barat'],

// Desa/Kelurahan di Kecamatan Senyerang
['id' => 2818, 'district_id' => 624, 'name' => 'Senyerang'],
['id' => 2819, 'district_id' => 624, 'name' => 'Teluk Sialang'],
['id' => 2820, 'district_id' => 624, 'name' => 'Sungai Landak'],
['id' => 2821, 'district_id' => 624, 'name' => 'Kuala Indah'],

// Desa/Kelurahan di Kecamatan Tanjung Jabung Timur
['id' => 2822, 'district_id' => 625, 'name' => 'Nipah Panjang'],
['id' => 2823, 'district_id' => 625, 'name' => 'Sungai Itik'],
['id' => 2824, 'district_id' => 625, 'name' => 'Teluk Majelis'],
['id' => 2825, 'district_id' => 625, 'name' => 'Sungai Tawar'],

// Desa/Kelurahan di Kecamatan Geragai
['id' => 2826, 'district_id' => 626, 'name' => 'Sungai Jambat'],
['id' => 2827, 'district_id' => 626, 'name' => 'Alang Alang'],
['id' => 2828, 'district_id' => 626, 'name' => 'Bukit Tempurung'],
['id' => 2829, 'district_id' => 626, 'name' => 'Sungai Beras'],

// Desa/Kelurahan di Kecamatan Dendang
['id' => 2830, 'district_id' => 627, 'name' => 'Dendang'],
['id' => 2831, 'district_id' => 627, 'name' => 'Sungai Dusun'],
['id' => 2832, 'district_id' => 627, 'name' => 'Sungai Tawar'],
['id' => 2833, 'district_id' => 627, 'name' => 'Sungai Raya'],

// Desa/Kelurahan di Kecamatan Mendahara Ulu
['id' => 2834, 'district_id' => 628, 'name' => 'Mendahara Tengah'],
['id' => 2835, 'district_id' => 628, 'name' => 'Sungai Lokan'],
['id' => 2836, 'district_id' => 628, 'name' => 'Sungai Cemara'],
['id' => 2837, 'district_id' => 628, 'name' => 'Bukit Baling'],

// Desa/Kelurahan di Kecamatan Mendahara
['id' => 2838, 'district_id' => 629, 'name' => 'Mendahara'],
['id' => 2839, 'district_id' => 629, 'name' => 'Lagan Ulu'],
['id' => 2840, 'district_id' => 629, 'name' => 'Sungai Benuh'],
['id' => 2841, 'district_id' => 629, 'name' => 'Mendahara Tengah'],

// Desa/Kelurahan di Kecamatan Muara Bungo
['id' => 2842, 'district_id' => 630, 'name' => 'Muara Bungo'],
['id' => 2843, 'district_id' => 630, 'name' => 'Pasar Muara Bungo'],
['id' => 2844, 'district_id' => 630, 'name' => 'Rimbo Tengah'],
['id' => 2845, 'district_id' => 630, 'name' => 'Bungo Taman Asri'],

// Desa/Kelurahan di Kecamatan Rimbo Tengah
['id' => 2846, 'district_id' => 631, 'name' => 'Sungai Pinang'],
['id' => 2847, 'district_id' => 631, 'name' => 'Pasar Tengah'],
['id' => 2848, 'district_id' => 631, 'name' => 'Tanjung Gedang'],
['id' => 2849, 'district_id' => 631, 'name' => 'Tebo Ilir'],

// Desa/Kelurahan di Kecamatan Bungo Dani
['id' => 2850, 'district_id' => 632, 'name' => 'Rantau Ikil'],
['id' => 2851, 'district_id' => 632, 'name' => 'Rantau Keloyang'],
['id' => 2852, 'district_id' => 632, 'name' => 'Lubuk Tenam'],
['id' => 2853, 'district_id' => 632, 'name' => 'Tanah Bekali'],

// Desa/Kelurahan di Kecamatan Jujuhan
['id' => 2854, 'district_id' => 633, 'name' => 'Jujuhan'],
['id' => 2855, 'district_id' => 633, 'name' => 'Pulau Batu'],
['id' => 2856, 'district_id' => 633, 'name' => 'Lubuk Benteng'],
['id' => 2857, 'district_id' => 633, 'name' => 'Rantau Panjang'],

// Desa/Kelurahan di Kecamatan Pelepat
['id' => 2858, 'district_id' => 634, 'name' => 'Pelepat'],
['id' => 2859, 'district_id' => 634, 'name' => 'Seberang Jaya'],
['id' => 2860, 'district_id' => 634, 'name' => 'Sungai Beringin'],
['id' => 2861, 'district_id' => 634, 'name' => 'Lubuk Landai'],

// Desa/Kelurahan di Kecamatan Tebo Ulu
['id' => 2862, 'district_id' => 635, 'name' => 'Tebo Ulu'],
['id' => 2863, 'district_id' => 635, 'name' => 'Teluk Kuali'],
['id' => 2864, 'district_id' => 635, 'name' => 'Pematang Sapat'],
['id' => 2865, 'district_id' => 635, 'name' => 'Sungai Keruh'],

// Desa/Kelurahan di Kecamatan Jambi
['id' => 2866, 'district_id' => 640, 'name' => 'Jelutung'],
['id' => 2867, 'district_id' => 640, 'name' => 'Danau Sipin'],
['id' => 2868, 'district_id' => 640, 'name' => 'Pasar Jambi'],
['id' => 2869, 'district_id' => 640, 'name' => 'Paal Merah'],
// Desa/Kelurahan di Kecamatan Pelayangan
['id' => 2870, 'district_id' => 641, 'name' => 'Tanjung Johor'],
['id' => 2871, 'district_id' => 641, 'name' => 'Olak Kemang'],
['id' => 2872, 'district_id' => 641, 'name' => 'Pasir Panjang'],
['id' => 2873, 'district_id' => 641, 'name' => 'Ulu Gedong'],

// Desa/Kelurahan di Kecamatan Telanaipura
['id' => 2874, 'district_id' => 642, 'name' => 'Mayang Mangurai'],
['id' => 2875, 'district_id' => 642, 'name' => 'Telanaipura'],
['id' => 2876, 'district_id' => 642, 'name' => 'Simpang IV Sipin'],
['id' => 2877, 'district_id' => 642, 'name' => 'Buluran Kenali'],

// Desa/Kelurahan di Kecamatan Danau Sipin
['id' => 2878, 'district_id' => 643, 'name' => 'Solok Sipin'],
['id' => 2879, 'district_id' => 643, 'name' => 'Legok'],
['id' => 2880, 'district_id' => 643, 'name' => 'Rawasari'],
['id' => 2881, 'district_id' => 643, 'name' => 'Kenali Besar'],

// Desa/Kelurahan di Kecamatan Kota Baru
['id' => 2882, 'district_id' => 644, 'name' => 'Beringin'],
['id' => 2883, 'district_id' => 644, 'name' => 'Kenali Asam Bawah'],
['id' => 2884, 'district_id' => 644, 'name' => 'Kenali Asam Atas'],
['id' => 2885, 'district_id' => 644, 'name' => 'Simpang III Sipin'],

// Desa/Kelurahan di Kecamatan Sungai Penuh
['id' => 2886, 'district_id' => 645, 'name' => 'Dusun Baru'],
['id' => 2887, 'district_id' => 645, 'name' => 'Pelayang Raya'],
['id' => 2888, 'district_id' => 645, 'name' => 'Sungai Liuk'],
['id' => 2889, 'district_id' => 645, 'name' => 'Pondok Agung'],

// Desa/Kelurahan di Kecamatan Pondok Tinggi
['id' => 2890, 'district_id' => 646, 'name' => 'Pondok Tinggi'],
['id' => 2891, 'district_id' => 646, 'name' => 'Tanjung Muda'],
['id' => 2892, 'district_id' => 646, 'name' => 'Koto Renah'],
['id' => 2893, 'district_id' => 646, 'name' => 'Sungai Tutung'],

// Desa/Kelurahan di Kecamatan Kota Sungai Penuh
['id' => 2894, 'district_id' => 647, 'name' => 'Koto Baru'],
['id' => 2895, 'district_id' => 647, 'name' => 'Debai'],
['id' => 2896, 'district_id' => 647, 'name' => 'Sungai Jernih'],
['id' => 2897, 'district_id' => 647, 'name' => 'Dusun Baru'],

// Desa/Kelurahan di Kecamatan Jangkat
['id' => 2898, 'district_id' => 648, 'name' => 'Pulau Tengah'],
['id' => 2899, 'district_id' => 648, 'name' => 'Muara Madras'],
['id' => 2900, 'district_id' => 648, 'name' => 'Lubuk Pungguk'],
['id' => 2901, 'district_id' => 648, 'name' => 'Renah Alai'],

// Desa/Kelurahan di Kecamatan Sungai Bungkal
['id' => 2902, 'district_id' => 649, 'name' => 'Sungai Bungkal'],
['id' => 2903, 'district_id' => 649, 'name' => 'Sungai Merah'],
['id' => 2904, 'district_id' => 649, 'name' => 'Bukit Berantai'],
['id' => 2905, 'district_id' => 649, 'name' => 'Sungai Penuh'],

// Desa/Kelurahan di Kecamatan Baturaja
['id' => 2906, 'district_id' => 650, 'name' => 'Baturaja Lama'],
['id' => 2907, 'district_id' => 650, 'name' => 'Baturaja Permai'],
['id' => 2908, 'district_id' => 650, 'name' => 'Kemelak'],
['id' => 2909, 'district_id' => 650, 'name' => 'Sekar Jaya'],

// Desa/Kelurahan di Kecamatan Kota Baturaja
['id' => 2910, 'district_id' => 651, 'name' => 'Pasar Baru'],
['id' => 2911, 'district_id' => 651, 'name' => 'Kemalaraja'],
['id' => 2912, 'district_id' => 651, 'name' => 'Sukaraya'],
['id' => 2913, 'district_id' => 651, 'name' => 'Tanjung Agung'],

// Desa/Kelurahan di Kecamatan Ogan Komering Ulu
['id' => 2914, 'district_id' => 652, 'name' => 'Lubuk Batang'],
['id' => 2915, 'district_id' => 652, 'name' => 'Pagar Dewa'],
['id' => 2916, 'district_id' => 652, 'name' => 'Simpang Tiga'],
['id' => 2917, 'district_id' => 652, 'name' => 'Penantian'],

// Desa/Kelurahan di Kecamatan Semidang Aji
['id' => 2918, 'district_id' => 653, 'name' => 'Gunung Megang'],
['id' => 2919, 'district_id' => 653, 'name' => 'Marga Mulya'],
['id' => 2920, 'district_id' => 653, 'name' => 'Tanjung Kemala'],
['id' => 2921, 'district_id' => 653, 'name' => 'Suka Pindah'],
// Desa/Kelurahan di Kecamatan Ulu Ogan
['id' => 2922, 'district_id' => 654, 'name' => 'Ulu Ogan'],
['id' => 2923, 'district_id' => 654, 'name' => 'Simpang Gelam'],
['id' => 2924, 'district_id' => 654, 'name' => 'Tanjung Raya'],
['id' => 2925, 'district_id' => 654, 'name' => 'Gunung Tiga'],

// Desa/Kelurahan di Kecamatan Kayuagung
['id' => 2926, 'district_id' => 655, 'name' => 'Kayuagung'],
['id' => 2927, 'district_id' => 655, 'name' => 'Kota Kayuagung'],
['id' => 2928, 'district_id' => 655, 'name' => 'Tanjung Lubuk'],
['id' => 2929, 'district_id' => 655, 'name' => 'Cengal'],

// Desa/Kelurahan di Kecamatan Cengal
['id' => 2930, 'district_id' => 656, 'name' => 'Cengal'],
['id' => 2931, 'district_id' => 656, 'name' => 'Pematang'],
['id' => 2932, 'district_id' => 656, 'name' => 'Tanjung Rejo'],
['id' => 2933, 'district_id' => 656, 'name' => 'Sungai Rengit'],

// Desa/Kelurahan di Kecamatan Pedamaran
['id' => 2934, 'district_id' => 657, 'name' => 'Pedamaran'],
['id' => 2935, 'district_id' => 657, 'name' => 'Batu Ampar'],
['id' => 2936, 'district_id' => 657, 'name' => 'Pematang Panggang'],
['id' => 2937, 'district_id' => 657, 'name' => 'Tanjung Burung'],

// Desa/Kelurahan di Kecamatan Tanjung Lubuk
['id' => 2938, 'district_id' => 658, 'name' => 'Tanjung Lubuk'],
['id' => 2939, 'district_id' => 658, 'name' => 'Tanjung Riau'],
['id' => 2940, 'district_id' => 658, 'name' => 'Suka Damai'],
['id' => 2941, 'district_id' => 658, 'name' => 'Cendana'],

// Desa/Kelurahan di Kecamatan Muara Enim
['id' => 2942, 'district_id' => 660, 'name' => 'Muara Enim'],
['id' => 2943, 'district_id' => 660, 'name' => 'Ujan Mas'],
['id' => 2944, 'district_id' => 660, 'name' => 'Lahat'],
['id' => 2945, 'district_id' => 660, 'name' => 'Tanjung Agung'],

// Desa/Kelurahan di Kecamatan Ujan Mas
['id' => 2946, 'district_id' => 661, 'name' => 'Ujan Mas'],
['id' => 2947, 'district_id' => 661, 'name' => 'Marga Tiga'],
['id' => 2948, 'district_id' => 661, 'name' => 'Tanjung Menang'],
['id' => 2949, 'district_id' => 661, 'name' => 'Batu Puyang'],

// Desa/Kelurahan di Kecamatan Lahat
['id' => 2950, 'district_id' => 662, 'name' => 'Lahat'],
['id' => 2951, 'district_id' => 662, 'name' => 'Tanjung Agung'],
['id' => 2952, 'district_id' => 662, 'name' => 'Kota Lahat'],
['id' => 2953, 'district_id' => 662, 'name' => 'Pagar Alam'],
// Desa/Kelurahan di Kecamatan Tanjung Agung
['id' => 2954, 'district_id' => 663, 'name' => 'Tanjung Agung'],
['id' => 2955, 'district_id' => 663, 'name' => 'Tanjung Sari'],
['id' => 2956, 'district_id' => 663, 'name' => 'Suka Merindu'],
['id' => 2957, 'district_id' => 663, 'name' => 'Muara Tiga'],

// Desa/Kelurahan di Kecamatan Belimbing
['id' => 2958, 'district_id' => 664, 'name' => 'Belimbing'],
['id' => 2959, 'district_id' => 664, 'name' => 'Pagar Batu'],
['id' => 2960, 'district_id' => 664, 'name' => 'Kampung Baru'],
['id' => 2961, 'district_id' => 664, 'name' => 'Rimba Jaya'],

// Desa/Kelurahan di Kecamatan Lahat
['id' => 2962, 'district_id' => 665, 'name' => 'Lahat'],
['id' => 2963, 'district_id' => 665, 'name' => 'Pajar Bulan'],
['id' => 2964, 'district_id' => 665, 'name' => 'Kota Lahat'],
['id' => 2965, 'district_id' => 665, 'name' => 'Merapi'],

// Desa/Kelurahan di Kecamatan Kota Lahat
['id' => 2966, 'district_id' => 666, 'name' => 'Kota Lahat'],
['id' => 2967, 'district_id' => 666, 'name' => 'Muara Lahat'],
['id' => 2968, 'district_id' => 666, 'name' => 'Pasar Baru'],
['id' => 2969, 'district_id' => 666, 'name' => 'Tanjung Agung'],

// Desa/Kelurahan di Kecamatan Merapi
['id' => 2970, 'district_id' => 667, 'name' => 'Merapi'],
['id' => 2971, 'district_id' => 667, 'name' => 'Tanjung Merapi'],
['id' => 2972, 'district_id' => 667, 'name' => 'Suka Merindu'],
['id' => 2973, 'district_id' => 667, 'name' => 'Sungai Merapi'],

// Desa/Kelurahan di Kecamatan Pajar Bulan
['id' => 2974, 'district_id' => 668, 'name' => 'Pajar Bulan'],
['id' => 2975, 'district_id' => 668, 'name' => 'Suka Agung'],
['id' => 2976, 'district_id' => 668, 'name' => 'Pagar Batu'],
['id' => 2977, 'district_id' => 668, 'name' => 'Muara Lahat'],

// Desa/Kelurahan di Kecamatan Kota Agung
['id' => 2978, 'district_id' => 669, 'name' => 'Kota Agung'],
['id' => 2979, 'district_id' => 669, 'name' => 'Muara Tiga'],
['id' => 2980, 'district_id' => 669, 'name' => 'Sungai Merapi'],
['id' => 2981, 'district_id' => 669, 'name' => 'Tanjung Agung'],

// Desa/Kelurahan di Kecamatan Musi Rawas
['id' => 2982, 'district_id' => 670, 'name' => 'Musi Rawas'],
['id' => 2983, 'district_id' => 670, 'name' => 'Sungai Lilin'],
['id' => 2984, 'district_id' => 670, 'name' => 'Muara Kelingi'],
['id' => 2985, 'district_id' => 670, 'name' => 'Tugumulyo'],

// Desa/Kelurahan di Kecamatan Sungai Lilin
['id' => 2986, 'district_id' => 671, 'name' => 'Sungai Lilin'],
['id' => 2987, 'district_id' => 671, 'name' => 'Sungai Rengit'],
['id' => 2988, 'district_id' => 671, 'name' => 'Tanjung Belitung'],
['id' => 2989, 'district_id' => 671, 'name' => 'Sungai Raya'],

// Desa/Kelurahan di Kecamatan Muara Kelingi
['id' => 2990, 'district_id' => 672, 'name' => 'Muara Kelingi'],
['id' => 2991, 'district_id' => 672, 'name' => 'Lama'],
['id' => 2992, 'district_id' => 672, 'name' => 'Tugumulyo'],
['id' => 2993, 'district_id' => 672, 'name' => 'Sungai Lilin'],

// Desa/Kelurahan di Kecamatan Tugumulyo
['id' => 2994, 'district_id' => 673, 'name' => 'Tugumulyo'],
['id' => 2995, 'district_id' => 673, 'name' => 'Sungai Raya'],
['id' => 2996, 'district_id' => 673, 'name' => 'Rimba Jaya'],
['id' => 2997, 'district_id' => 673, 'name' => 'Pagar Agung'],

// Desa/Kelurahan di Kecamatan Selangit
['id' => 2998, 'district_id' => 674, 'name' => 'Selangit'],
['id' => 2999, 'district_id' => 674, 'name' => 'Tanjung Raya'],
['id' => 3000, 'district_id' => 674, 'name' => 'Rimba Jaya'],
['id' => 3001, 'district_id' => 674, 'name' => 'Sungai Leko'],

// Desa/Kelurahan di Kecamatan Sekayu
['id' => 3002, 'district_id' => 675, 'name' => 'Sekayu'],
['id' => 3003, 'district_id' => 675, 'name' => 'Lais'],
['id' => 3004, 'district_id' => 675, 'name' => 'Banyuasin'],
['id' => 3005, 'district_id' => 675, 'name' => 'Sungai Keruh'],

// Desa/Kelurahan di Kecamatan Lais
['id' => 3006, 'district_id' => 676, 'name' => 'Lais'],
['id' => 3007, 'district_id' => 676, 'name' => 'Sungai Rengit'],
['id' => 3008, 'district_id' => 676, 'name' => 'Pematang Panggang'],
['id' => 3009, 'district_id' => 676, 'name' => 'Batu Puyang'],

// Desa/Kelurahan di Kecamatan Banyuasin
['id' => 3010, 'district_id' => 677, 'name' => 'Banyuasin'],
['id' => 3011, 'district_id' => 677, 'name' => 'Tanjung Raya'],
['id' => 3012, 'district_id' => 677, 'name' => 'Batu Ampar'],
['id' => 3013, 'district_id' => 677, 'name' => 'Muara Tiga'],

// Desa/Kelurahan di Kecamatan Sungai Keruh
['id' => 3014, 'district_id' => 678, 'name' => 'Sungai Keruh'],
['id' => 3015, 'district_id' => 678, 'name' => 'Tanjung Meranti'],
['id' => 3016, 'district_id' => 678, 'name' => 'Suka Merindu'],
['id' => 3017, 'district_id' => 678, 'name' => 'Batu Lapis'],

// Desa/Kelurahan di Kecamatan Kota Sekayu
['id' => 3018, 'district_id' => 679, 'name' => 'Kota Sekayu'],
['id' => 3019, 'district_id' => 679, 'name' => 'Banyuasin'],
['id' => 3020, 'district_id' => 679, 'name' => 'Sungai Keruh'],
['id' => 3021, 'district_id' => 679, 'name' => 'Sungai Sempurna'],
// Desa/Kelurahan di Kecamatan Banyuasin
['id' => 3022, 'district_id' => 680, 'name' => 'Banyuasin'],
['id' => 3023, 'district_id' => 680, 'name' => 'Tanjung Raya'],
['id' => 3024, 'district_id' => 680, 'name' => 'Batu Ampar'],
['id' => 3025, 'district_id' => 680, 'name' => 'Muara Tiga'],

// Desa/Kelurahan di Kecamatan Talang Kelapa
['id' => 3026, 'district_id' => 681, 'name' => 'Talang Kelapa'],
['id' => 3027, 'district_id' => 681, 'name' => 'Suka Damai'],
['id' => 3028, 'district_id' => 681, 'name' => 'Talang Buluh'],
['id' => 3029, 'district_id' => 681, 'name' => 'Pangkalan Panji'],

// Desa/Kelurahan di Kecamatan Sembawa
['id' => 3030, 'district_id' => 682, 'name' => 'Sembawa'],
['id' => 3031, 'district_id' => 682, 'name' => 'Sungai Pinang'],
['id' => 3032, 'district_id' => 682, 'name' => 'Sungai Lilin'],
['id' => 3033, 'district_id' => 682, 'name' => 'Teluk Betung'],

// Desa/Kelurahan di Kecamatan Muara Padang
['id' => 3034, 'district_id' => 683, 'name' => 'Muara Padang'],
['id' => 3035, 'district_id' => 683, 'name' => 'Sungai Menang'],
['id' => 3036, 'district_id' => 683, 'name' => 'Tanjung Baru'],
['id' => 3037, 'district_id' => 683, 'name' => 'Pulau Harapan'],

// Desa/Kelurahan di Kecamatan Kota Banyuasin
['id' => 3038, 'district_id' => 684, 'name' => 'Kota Banyuasin'],
['id' => 3039, 'district_id' => 684, 'name' => 'Sungai Rengit'],
['id' => 3040, 'district_id' => 684, 'name' => 'Tanjung Lago'],
['id' => 3041, 'district_id' => 684, 'name' => 'Pulau Rimau'],

// Desa/Kelurahan di Kecamatan Ogan Komering Ulu Timur
['id' => 3042, 'district_id' => 685, 'name' => 'Ogan Komering Ulu Timur'],
['id' => 3043, 'district_id' => 685, 'name' => 'Baturaja Timur'],
['id' => 3044, 'district_id' => 685, 'name' => 'Simpang'],
['id' => 3045, 'district_id' => 685, 'name' => 'Sungai Rumpun'],

// Desa/Kelurahan di Kecamatan Ulu Ogan Timur
['id' => 3046, 'district_id' => 689, 'name' => 'Ulu Ogan Timur'],
['id' => 3047, 'district_id' => 689, 'name' => 'Tanjung Agung'],
['id' => 3048, 'district_id' => 689, 'name' => 'Suka Maju'],
['id' => 3049, 'district_id' => 689, 'name' => 'Pagar Agung'],

// Desa/Kelurahan di Kecamatan Muaradua
['id' => 3050, 'district_id' => 690, 'name' => 'Muaradua'],
['id' => 3051, 'district_id' => 690, 'name' => 'Simpang'],
['id' => 3052, 'district_id' => 690, 'name' => 'Buay Pemuka'],
['id' => 3053, 'district_id' => 690, 'name' => 'Buay Rawan'],

// Desa/Kelurahan di Kecamatan Kota Agung
['id' => 3054, 'district_id' => 694, 'name' => 'Kota Agung'],
['id' => 3055, 'district_id' => 694, 'name' => 'Tanjung Raja'],
['id' => 3056, 'district_id' => 694, 'name' => 'Pemulutan'],
['id' => 3057, 'district_id' => 694, 'name' => 'Pemulutan Selatan'],
// Desa/Kelurahan di Kecamatan Tebing Tinggi
['id' => 3058, 'district_id' => 700, 'name' => 'Tebing Tinggi'],
['id' => 3059, 'district_id' => 700, 'name' => 'Indralaya'],
['id' => 3060, 'district_id' => 700, 'name' => 'Indralaya Selatan'],
['id' => 3061, 'district_id' => 700, 'name' => 'Tanjung Raja'],

// Desa/Kelurahan di Kecamatan Pendopo
['id' => 3062, 'district_id' => 701, 'name' => 'Pendopo'],
['id' => 3063, 'district_id' => 701, 'name' => 'Tanjung Agung'],
['id' => 3064, 'district_id' => 701, 'name' => 'Suka Merindu'],
['id' => 3065, 'district_id' => 701, 'name' => 'Muara Danau'],

// Desa/Kelurahan di Kecamatan Ulu Musi
['id' => 3066, 'district_id' => 702, 'name' => 'Ulu Musi'],
['id' => 3067, 'district_id' => 702, 'name' => 'Tanjung Raja'],
['id' => 3068, 'district_id' => 702, 'name' => 'Suka Maju'],
['id' => 3069, 'district_id' => 702, 'name' => 'Pagar Agung'],

// Desa/Kelurahan di Kecamatan Lahat
['id' => 3070, 'district_id' => 703, 'name' => 'Lahat'],
['id' => 3071, 'district_id' => 703, 'name' => 'Tanjung Bintang'],
['id' => 3072, 'district_id' => 703, 'name' => 'Suka Cinta'],
['id' => 3073, 'district_id' => 703, 'name' => 'Muara Dua'],

// Desa/Kelurahan di Kecamatan Sikap
['id' => 3074, 'district_id' => 704, 'name' => 'Sikap'],
['id' => 3075, 'district_id' => 704, 'name' => 'Tanjung Menang'],
['id' => 3076, 'district_id' => 704, 'name' => 'Suka Damai'],
['id' => 3077, 'district_id' => 704, 'name' => 'Pulau Panggung'],

// Desa/Kelurahan di Kecamatan Penukal
['id' => 3078, 'district_id' => 705, 'name' => 'Penukal'],
['id' => 3079, 'district_id' => 705, 'name' => 'Abab'],
['id' => 3080, 'district_id' => 705, 'name' => 'Lematang Ilir'],
['id' => 3081, 'district_id' => 705, 'name' => 'Talang Ubi'],

// Desa/Kelurahan di Kecamatan Kota Penukal
['id' => 3082, 'district_id' => 709, 'name' => 'Kota Penukal'],
['id' => 3083, 'district_id' => 709, 'name' => 'Sungai Pinang'],
['id' => 3084, 'district_id' => 709, 'name' => 'Tanjung Baru'],
['id' => 3085, 'district_id' => 709, 'name' => 'Pulau Harapan'],

// Desa/Kelurahan di Kecamatan Musirawas
['id' => 3086, 'district_id' => 710, 'name' => 'Musirawas'],
['id' => 3087, 'district_id' => 710, 'name' => 'Sungai Lilin'],
['id' => 3088, 'district_id' => 710, 'name' => 'Muara Kelingi'],
['id' => 3089, 'district_id' => 710, 'name' => 'Tugumulyo'],

// Desa/Kelurahan di Kecamatan Selangit
['id' => 3090, 'district_id' => 714, 'name' => 'Selangit'],
['id' => 3091, 'district_id' => 714, 'name' => 'Tanjung Agung'],
['id' => 3092, 'district_id' => 714, 'name' => 'Suka Maju'],
['id' => 3093, 'district_id' => 714, 'name' => 'Pagar Agung'],

// Desa/Kelurahan di Kecamatan Palembang
['id' => 3094, 'district_id' => 715, 'name' => 'Palembang'],
['id' => 3095, 'district_id' => 715, 'name' => 'Ilir Barat I'],
['id' => 3096, 'district_id' => 715, 'name' => 'Ilir Barat II'],
['id' => 3097, 'district_id' => 715, 'name' => 'Ulu II'],

// Desa/Kelurahan di Kecamatan Kertapati
['id' => 3098, 'district_id' => 719, 'name' => 'Kertapati'],
['id' => 3099, 'district_id' => 719, 'name' => 'Tanjung Agung'],
['id' => 3100, 'district_id' => 719, 'name' => 'Suka Damai'],
['id' => 3101, 'district_id' => 719, 'name' => 'Pulau Panggung'],

// Desa/Kelurahan di Kecamatan Pagar Alam
['id' => 3102, 'district_id' => 720, 'name' => 'Pagar Alam'],
['id' => 3103, 'district_id' => 720, 'name' => 'Tanjung Raja'],
['id' => 3104, 'district_id' => 720, 'name' => 'Suka Maju'],
['id' => 3105, 'district_id' => 720, 'name' => 'Pulau Harapan'],
// Desa/Kelurahan di Kecamatan Pagar Alam Selatan
['id' => 3106, 'district_id' => 721, 'name' => 'Pagar Alam Selatan'],
['id' => 3107, 'district_id' => 721, 'name' => 'Tanjung Baru'],
['id' => 3108, 'district_id' => 721, 'name' => 'Sukarame'],

// Desa/Kelurahan di Kecamatan Pagar Alam Utara
['id' => 3109, 'district_id' => 722, 'name' => 'Pagar Alam Utara'],
['id' => 3110, 'district_id' => 722, 'name' => 'Gunung Dempo'],
['id' => 3111, 'district_id' => 722, 'name' => 'Sukajadi'],

// Desa/Kelurahan di Kecamatan Dempo Selatan
['id' => 3112, 'district_id' => 723, 'name' => 'Dempo Selatan'],
['id' => 3113, 'district_id' => 723, 'name' => 'Kota Agung'],
['id' => 3114, 'district_id' => 723, 'name' => 'Taman Sari'],

// Desa/Kelurahan di Kecamatan Dempo Utara
['id' => 3115, 'district_id' => 724, 'name' => 'Dempo Utara'],
['id' => 3116, 'district_id' => 724, 'name' => 'Bumi Ayu'],
['id' => 3117, 'district_id' => 724, 'name' => 'Sriwijaya'],

// Desa/Kelurahan di Kecamatan Lubuklinggau
['id' => 3118, 'district_id' => 725, 'name' => 'Lubuklinggau'],
['id' => 3119, 'district_id' => 725, 'name' => 'Kota Baru'],
['id' => 3120, 'district_id' => 725, 'name' => 'Pahlawan'],

// Desa/Kelurahan di Kecamatan Lubuklinggau Utara I
['id' => 3121, 'district_id' => 726, 'name' => 'Lubuklinggau Utara I'],
['id' => 3122, 'district_id' => 726, 'name' => 'Sidorejo'],
['id' => 3123, 'district_id' => 726, 'name' => 'Kembang Jaya'],

// Desa/Kelurahan di Kecamatan Lubuklinggau Utara II
['id' => 3124, 'district_id' => 727, 'name' => 'Lubuklinggau Utara II'],
['id' => 3125, 'district_id' => 727, 'name' => 'Merdeka'],
['id' => 3126, 'district_id' => 727, 'name' => 'Bintang Jaya'],

// Desa/Kelurahan di Kecamatan Lubuklinggau Selatan I
['id' => 3127, 'district_id' => 728, 'name' => 'Lubuklinggau Selatan I'],
['id' => 3128, 'district_id' => 728, 'name' => 'Tanjung Batu'],
['id' => 3129, 'district_id' => 728, 'name' => 'Bumi Lestari'],

// Desa/Kelurahan di Kecamatan Lubuklinggau Selatan II
['id' => 3130, 'district_id' => 729, 'name' => 'Lubuklinggau Selatan II'],
['id' => 3131, 'district_id' => 729, 'name' => 'Pahlawan Baru'],
['id' => 3132, 'district_id' => 729, 'name' => 'Suka Maju'],

// Desa/Kelurahan di Kecamatan Prabumulih
['id' => 3133, 'district_id' => 730, 'name' => 'Prabumulih'],
['id' => 3134, 'district_id' => 730, 'name' => 'Tanah Abang'],
['id' => 3135, 'district_id' => 730, 'name' => 'Cinta Rakyat'],

// Desa/Kelurahan di Kecamatan Prabumulih Barat
['id' => 3136, 'district_id' => 731, 'name' => 'Prabumulih Barat'],
['id' => 3137, 'district_id' => 731, 'name' => 'Pahlawan Barat'],
['id' => 3138, 'district_id' => 731, 'name' => 'Gunung Rindu'],

// Desa/Kelurahan di Kecamatan Prabumulih Timur
['id' => 3139, 'district_id' => 732, 'name' => 'Prabumulih Timur'],
['id' => 3140, 'district_id' => 732, 'name' => 'Serdang'],
['id' => 3141, 'district_id' => 732, 'name' => 'Karang Sari'],

// Desa/Kelurahan di Kecamatan Prabumulih Selatan
['id' => 3142, 'district_id' => 733, 'name' => 'Prabumulih Selatan'],
['id' => 3143, 'district_id' => 733, 'name' => 'Bumi Maju'],
['id' => 3144, 'district_id' => 733, 'name' => 'Karya Bakti'],

// Desa/Kelurahan di Kecamatan Prabumulih Utara
['id' => 3145, 'district_id' => 734, 'name' => 'Prabumulih Utara'],
['id' => 3146, 'district_id' => 734, 'name' => 'Harapan Jaya'],
['id' => 3147, 'district_id' => 734, 'name' => 'Suka Damai'],

// Desa/Kelurahan di Kecamatan Bengkulu Selatan
['id' => 3148, 'district_id' => 735, 'name' => 'Bengkulu Selatan'],
['id' => 3149, 'district_id' => 735, 'name' => 'Padang Ulu'],
['id' => 3150, 'district_id' => 735, 'name' => 'Sungai Serut'],

// Desa/Kelurahan di Kecamatan Kota Manna
['id' => 3151, 'district_id' => 736, 'name' => 'Kota Manna'],
['id' => 3152, 'district_id' => 736, 'name' => 'Taman Sari'],
['id' => 3153, 'district_id' => 736, 'name' => 'Pasar Manna'],

// Desa/Kelurahan di Kecamatan Pino
['id' => 3154, 'district_id' => 737, 'name' => 'Pino'],
['id' => 3155, 'district_id' => 737, 'name' => 'Sukarami'],
['id' => 3156, 'district_id' => 737, 'name' => 'Kampung Baru'],

// Desa/Kelurahan di Kecamatan Seginim
['id' => 3157, 'district_id' => 738, 'name' => 'Seginim'],
['id' => 3158, 'district_id' => 738, 'name' => 'Bumi Rahayu'],
['id' => 3159, 'district_id' => 738, 'name' => 'Rantau Sialang'],

// Desa/Kelurahan di Kecamatan Pasar Manna
['id' => 3160, 'district_id' => 739, 'name' => 'Pasar Manna'],
['id' => 3161, 'district_id' => 739, 'name' => 'Manna Jaya'],
['id' => 3162, 'district_id' => 739, 'name' => 'Suka Maju'],

// Desa/Kelurahan di Kecamatan Rejang Lebong
['id' => 3163, 'district_id' => 740, 'name' => 'Rejang Lebong'],
['id' => 3164, 'district_id' => 740, 'name' => 'Kota Baru'],
['id' => 3165, 'district_id' => 740, 'name' => 'Kampung Jaya'],
['id' => 3166, 'district_id' => 740, 'name' => 'Tebat Tugu'],
['id' => 3167, 'district_id' => 740, 'name' => 'Suka Makmur'],
['id' => 3168, 'district_id' => 740, 'name' => 'Pahlawan'],
['id' => 3169, 'district_id' => 740, 'name' => 'Rimba Jaya'],
['id' => 3170, 'district_id' => 740, 'name' => 'Sumber Alam'],
['id' => 3171, 'district_id' => 740, 'name' => 'Kampung Tengah'],
['id' => 3172, 'district_id' => 740, 'name' => 'Tebat Baru'],

// Desa/Kelurahan di Kecamatan Curup
['id' => 3173, 'district_id' => 741, 'name' => 'Curup'],
['id' => 3174, 'district_id' => 741, 'name' => 'Tanjung Baru'],
['id' => 3175, 'district_id' => 741, 'name' => 'Batu Gajah'],

// Desa/Kelurahan di Kecamatan Selupu Rejang
['id' => 3176, 'district_id' => 742, 'name' => 'Selupu Rejang'],
['id' => 3177, 'district_id' => 742, 'name' => 'Serai'],
['id' => 3178, 'district_id' => 742, 'name' => 'Kota Jaya'],

// Desa/Kelurahan di Kecamatan Sindang Dataran
['id' => 3179, 'district_id' => 743, 'name' => 'Sindang Dataran'],
['id' => 3180, 'district_id' => 743, 'name' => 'Tanjung Agung'],
['id' => 3181, 'district_id' => 743, 'name' => 'Suka Rejo'],

// Desa/Kelurahan di Kecamatan Bermani Ulu
['id' => 3182, 'district_id' => 744, 'name' => 'Bermani Ulu'],
['id' => 3183, 'district_id' => 744, 'name' => 'Tebat Guo'],
['id' => 3184, 'district_id' => 744, 'name' => 'Kota Agung'],
['id' => 3185, 'district_id' => 744, 'name' => 'Tanjung Agung'],
// Desa/Kelurahan di Kecamatan Bengkulu Utara
['id' => 3186, 'district_id' => 745, 'name' => 'Pasar Pedati'],
['id' => 3187, 'district_id' => 745, 'name' => 'Talang Benih'],
['id' => 3188, 'district_id' => 745, 'name' => 'Tanjung Agung'],
['id' => 3189, 'district_id' => 745, 'name' => 'Suka Merindu'],

// Desa/Kelurahan di Kecamatan Arga Makmur
['id' => 3190, 'district_id' => 746, 'name' => 'Arga Makmur'],
['id' => 3191, 'district_id' => 746, 'name' => 'Tanjung Raman'],
['id' => 3192, 'district_id' => 746, 'name' => 'Kemumu'],
['id' => 3193, 'district_id' => 746, 'name' => 'Taba Padang'],

// Desa/Kelurahan di Kecamatan Lais
['id' => 3194, 'district_id' => 747, 'name' => 'Lais'],
['id' => 3195, 'district_id' => 747, 'name' => 'Tanjung Aur'],
['id' => 3196, 'district_id' => 747, 'name' => 'Suka Maju'],
['id' => 3197, 'district_id' => 747, 'name' => 'Kota Bani'],

// Desa/Kelurahan di Kecamatan Kota Arga Makmur
['id' => 3198, 'district_id' => 748, 'name' => 'Kota Arga Makmur'],
['id' => 3199, 'district_id' => 748, 'name' => 'Tanjung Agung'],
['id' => 3200, 'district_id' => 748, 'name' => 'Suka Negeri'],
['id' => 3201, 'district_id' => 748, 'name' => 'Taba Penanjung'],

// Desa/Kelurahan di Kecamatan Tanjung Agung
['id' => 3202, 'district_id' => 749, 'name' => 'Tanjung Agung'],
['id' => 3203, 'district_id' => 749, 'name' => 'Suka Merindu'],
['id' => 3204, 'district_id' => 749, 'name' => 'Talang Benih'],
['id' => 3205, 'district_id' => 749, 'name' => 'Pasar Pedati'],

// Desa/Kelurahan di Kecamatan Kaur
['id' => 3206, 'district_id' => 750, 'name' => 'Kaur'],
['id' => 3207, 'district_id' => 750, 'name' => 'Tanjung Iman'],
['id' => 3208, 'district_id' => 750, 'name' => 'Suka Maju'],
['id' => 3209, 'district_id' => 750, 'name' => 'Muara Sahung'],

// Desa/Kelurahan di Kecamatan Kaur Selatan
['id' => 3210, 'district_id' => 751, 'name' => 'Nasal'],
['id' => 3211, 'district_id' => 751, 'name' => 'Tanjung Betuah'],
['id' => 3212, 'district_id' => 751, 'name' => 'Suka Marga'],
['id' => 3213, 'district_id' => 751, 'name' => 'Padang Guci'],

// Desa/Kelurahan di Kecamatan Kaur Utara
['id' => 3214, 'district_id' => 752, 'name' => 'Maje'],
['id' => 3215, 'district_id' => 752, 'name' => 'Tanjung Aur'],
['id' => 3216, 'district_id' => 752, 'name' => 'Suka Negeri'],
['id' => 3217, 'district_id' => 752, 'name' => 'Muara Tetap'],

// Desa/Kelurahan di Kecamatan Maje
['id' => 3218, 'district_id' => 753, 'name' => 'Maje'],
['id' => 3219, 'district_id' => 753, 'name' => 'Tanjung Betung'],
['id' => 3220, 'district_id' => 753, 'name' => 'Suka Maju'],
['id' => 3221, 'district_id' => 753, 'name' => 'Padang Panjang'],

// Desa/Kelurahan di Kecamatan Nasal
['id' => 3222, 'district_id' => 754, 'name' => 'Nasal'],
['id' => 3223, 'district_id' => 754, 'name' => 'Tanjung Iman'],
['id' => 3224, 'district_id' => 754, 'name' => 'Suka Marga'],
['id' => 3225, 'district_id' => 754, 'name' => 'Muara Dua'],
// Desa/Kelurahan di Kecamatan Seluma
['id' => 3226, 'district_id' => 755, 'name' => 'Seluma'],
['id' => 3227, 'district_id' => 755, 'name' => 'Tanjung Agung'],
['id' => 3228, 'district_id' => 755, 'name' => 'Suka Merindu'],
['id' => 3229, 'district_id' => 755, 'name' => 'Talang Benih'],

// Desa/Kelurahan di Kecamatan Seluma Barat
['id' => 3230, 'district_id' => 756, 'name' => 'Seluma Barat'],
['id' => 3231, 'district_id' => 756, 'name' => 'Tanjung Raman'],
['id' => 3232, 'district_id' => 756, 'name' => 'Kemumu'],
['id' => 3233, 'district_id' => 756, 'name' => 'Taba Padang'],

// Desa/Kelurahan di Kecamatan Seluma Selatan
['id' => 3234, 'district_id' => 757, 'name' => 'Seluma Selatan'],
['id' => 3235, 'district_id' => 757, 'name' => 'Tanjung Aur'],
['id' => 3236, 'district_id' => 757, 'name' => 'Suka Maju'],
['id' => 3237, 'district_id' => 757, 'name' => 'Kota Bani'],

// Desa/Kelurahan di Kecamatan Seluma Timur
['id' => 3238, 'district_id' => 758, 'name' => 'Seluma Timur'],
['id' => 3239, 'district_id' => 758, 'name' => 'Tanjung Agung'],
['id' => 3240, 'district_id' => 758, 'name' => 'Suka Negeri'],
['id' => 3241, 'district_id' => 758, 'name' => 'Taba Penanjung'],

// Desa/Kelurahan di Kecamatan Seluma Utara
['id' => 3242, 'district_id' => 759, 'name' => 'Seluma Utara'],
['id' => 3243, 'district_id' => 759, 'name' => 'Pasar Pedati'],
['id' => 3244, 'district_id' => 759, 'name' => 'Talang Benih'],
['id' => 3245, 'district_id' => 759, 'name' => 'Suka Merindu'],

// Desa/Kelurahan di Kecamatan Mukomuko
['id' => 3246, 'district_id' => 760, 'name' => 'Mukomuko'],
['id' => 3247, 'district_id' => 760, 'name' => 'Tanjung Iman'],
['id' => 3248, 'district_id' => 760, 'name' => 'Suka Maju'],
['id' => 3249, 'district_id' => 760, 'name' => 'Muara Sahung'],

// Desa/Kelurahan di Kecamatan Air Rami
['id' => 3250, 'district_id' => 761, 'name' => 'Air Rami'],
['id' => 3251, 'district_id' => 761, 'name' => 'Tanjung Betuah'],
['id' => 3252, 'district_id' => 761, 'name' => 'Suka Marga'],
['id' => 3253, 'district_id' => 761, 'name' => 'Padang Guci'],

// Desa/Kelurahan di Kecamatan XIV Koto
['id' => 3254, 'district_id' => 762, 'name' => 'XIV Koto'],
['id' => 3255, 'district_id' => 762, 'name' => 'Tanjung Aur'],
['id' => 3256, 'district_id' => 762, 'name' => 'Suka Negeri'],
['id' => 3257, 'district_id' => 762, 'name' => 'Muara Tetap'],

// Desa/Kelurahan di Kecamatan Selupu Rejang
['id' => 3258, 'district_id' => 763, 'name' => 'Selupu Rejang'],
['id' => 3259, 'district_id' => 763, 'name' => 'Tanjung Betung'],
['id' => 3260, 'district_id' => 763, 'name' => 'Suka Maju'],
['id' => 3261, 'district_id' => 763, 'name' => 'Padang Panjang'],

// Desa/Kelurahan di Kecamatan Kota Mukomuko
['id' => 3262, 'district_id' => 764, 'name' => 'Kota Mukomuko'],
['id' => 3263, 'district_id' => 764, 'name' => 'Tanjung Iman'],
['id' => 3264, 'district_id' => 764, 'name' => 'Suka Marga'],
['id' => 3265, 'district_id' => 764, 'name' => 'Muara Dua'],

// Desa/Kelurahan di Kecamatan Lebong
['id' => 3266, 'district_id' => 765, 'name' => 'Lebong'],
['id' => 3267, 'district_id' => 765, 'name' => 'Tanjung Agung'],
['id' => 3268, 'district_id' => 765, 'name' => 'Suka Merindu'],
['id' => 3269, 'district_id' => 765, 'name' => 'Talang Benih'],

// Desa/Kelurahan di Kecamatan Lebong Sakti
['id' => 3270, 'district_id' => 766, 'name' => 'Lebong Sakti'],
['id' => 3271, 'district_id' => 766, 'name' => 'Tanjung Raman'],
['id' => 3272, 'district_id' => 766, 'name' => 'Kemumu'],
['id' => 3273, 'district_id' => 766, 'name' => 'Taba Padang'],

// Desa/Kelurahan di Kecamatan Amen
['id' => 3274, 'district_id' => 767, 'name' => 'Amen'],
['id' => 3275, 'district_id' => 767, 'name' => 'Tanjung Aur'],
['id' => 3276, 'district_id' => 767, 'name' => 'Suka Maju'],
['id' => 3277, 'district_id' => 767, 'name' => 'Kota Bani'],

// Desa/Kelurahan di Kecamatan Uram Jaya
['id' => 3278, 'district_id' => 768, 'name' => 'Uram Jaya'],
['id' => 3279, 'district_id' => 768, 'name' => 'Tanjung Agung'],
['id' => 3280, 'district_id' => 768, 'name' => 'Suka Negeri'],
['id' => 3281, 'district_id' => 768, 'name' => 'Taba Penanjung'],

// Desa/Kelurahan di Kecamatan Pelabai
['id' => 3282, 'district_id' => 769, 'name' => 'Pelabai'],
['id' => 3283, 'district_id' => 769, 'name' => 'Pasar Pedati'],
['id' => 3284, 'district_id' => 769, 'name' => 'Talang Benih'],
['id' => 3285, 'district_id' => 769, 'name' => 'Suka Merindu'],

// Desa/Kelurahan di Kecamatan Kepahiang
['id' => 3286, 'district_id' => 770, 'name' => 'Kepahiang'],
['id' => 3287, 'district_id' => 770, 'name' => 'Tanjung Iman'],
['id' => 3288, 'district_id' => 770, 'name' => 'Suka Maju'],
['id' => 3289, 'district_id' => 770, 'name' => 'Muara Sahung'],
// Desa/Kelurahan di Kecamatan Ujan Mas
['id' => 3290, 'district_id' => 771, 'name' => 'Ujan Mas'],
['id' => 3291, 'district_id' => 771, 'name' => 'Tanjung Raman'],
['id' => 3292, 'district_id' => 771, 'name' => 'Kemumu'],
['id' => 3293, 'district_id' => 771, 'name' => 'Taba Padang'],

// Desa/Kelurahan di Kecamatan Bengkulu
['id' => 3294, 'district_id' => 772, 'name' => 'Bengkulu'],
['id' => 3295, 'district_id' => 772, 'name' => 'Tanjung Agung'],
['id' => 3296, 'district_id' => 772, 'name' => 'Suka Merindu'],
['id' => 3297, 'district_id' => 772, 'name' => 'Talang Benih'],

// Desa/Kelurahan di Kecamatan Kepahiang
['id' => 3298, 'district_id' => 773, 'name' => 'Kepahiang'],
['id' => 3299, 'district_id' => 773, 'name' => 'Tanjung Iman'],
['id' => 3300, 'district_id' => 773, 'name' => 'Suka Maju'],
['id' => 3301, 'district_id' => 773, 'name' => 'Muara Sahung'],

// Desa/Kelurahan di Kecamatan Taba Penanjung
['id' => 3302, 'district_id' => 774, 'name' => 'Taba Penanjung'],
['id' => 3303, 'district_id' => 774, 'name' => 'Tanjung Betuah'],
['id' => 3304, 'district_id' => 774, 'name' => 'Suka Marga'],
['id' => 3305, 'district_id' => 774, 'name' => 'Padang Guci'],

// Desa/Kelurahan di Kecamatan Bengkulu Tengah
['id' => 3306, 'district_id' => 775, 'name' => 'Bengkulu Tengah'],
['id' => 3307, 'district_id' => 775, 'name' => 'Tanjung Aur'],
['id' => 3308, 'district_id' => 775, 'name' => 'Suka Negeri'],
['id' => 3309, 'district_id' => 775, 'name' => 'Muara Tetap'],

// Desa/Kelurahan di Kecamatan Karang Tinggi
['id' => 3310, 'district_id' => 776, 'name' => 'Karang Tinggi'],
['id' => 3311, 'district_id' => 776, 'name' => 'Tanjung Betung'],
['id' => 3312, 'district_id' => 776, 'name' => 'Suka Maju'],
['id' => 3313, 'district_id' => 776, 'name' => 'Padang Panjang'],

// Desa/Kelurahan di Kecamatan Pematang Tiga
['id' => 3314, 'district_id' => 777, 'name' => 'Pematang Tiga'],
['id' => 3315, 'district_id' => 777, 'name' => 'Tanjung Iman'],
['id' => 3316, 'district_id' => 777, 'name' => 'Suka Marga'],
['id' => 3317, 'district_id' => 777, 'name' => 'Muara Dua'],

// Desa/Kelurahan di Kecamatan Talang Empat
['id' => 3318, 'district_id' => 778, 'name' => 'Talang Empat'],
['id' => 3319, 'district_id' => 778, 'name' => 'Tanjung Agung'],
['id' => 3320, 'district_id' => 778, 'name' => 'Suka Merindu'],
['id' => 3321, 'district_id' => 778, 'name' => 'Talang Benih'],

// Desa/Kelurahan di Kecamatan Taba Penanjung
['id' => 3322, 'district_id' => 779, 'name' => 'Taba Penanjung'],
['id' => 3323, 'district_id' => 779, 'name' => 'Pasar Pedati'],
['id' => 3324, 'district_id' => 779, 'name' => 'Talang Benih'],
['id' => 3325, 'district_id' => 779, 'name' => 'Suka Merindu'],

// Desa/Kelurahan di Kecamatan Bengkulu
['id' => 3326, 'district_id' => 780, 'name' => 'Bengkulu'],
['id' => 3327, 'district_id' => 780, 'name' => 'Tanjung Iman'],
['id' => 3328, 'district_id' => 780, 'name' => 'Suka Maju'],
['id' => 3329, 'district_id' => 780, 'name' => 'Muara Sahung'],

// Desa/Kelurahan di Kecamatan Gading Cempaka
['id' => 3330, 'district_id' => 781, 'name' => 'Gading Cempaka'],
['id' => 3331, 'district_id' => 781, 'name' => 'Tanjung Betuah'],
['id' => 3332, 'district_id' => 781, 'name' => 'Suka Marga'],
['id' => 3333, 'district_id' => 781, 'name' => 'Padang Guci'],

// Desa/Kelurahan di Kecamatan Kampung Melayu
['id' => 3334, 'district_id' => 782, 'name' => 'Kampung Melayu'],
['id' => 3335, 'district_id' => 782, 'name' => 'Tanjung Aur'],
['id' => 3336, 'district_id' => 782, 'name' => 'Suka Negeri'],
['id' => 3337, 'district_id' => 782, 'name' => 'Muara Tetap'],

// Desa/Kelurahan di Kecamatan Ratu Agung
['id' => 3338, 'district_id' => 783, 'name' => 'Ratu Agung'],
['id' => 3339, 'district_id' => 783, 'name' => 'Tanjung Betung'],
['id' => 3340, 'district_id' => 783, 'name' => 'Suka Maju'],
['id' => 3341, 'district_id' => 783, 'name' => 'Padang Panjang'],

// Desa/Kelurahan di Kecamatan Teluk Segara
['id' => 3342, 'district_id' => 784, 'name' => 'Teluk Segara'],
['id' => 3343, 'district_id' => 784, 'name' => 'Tanjung Iman'],
['id' => 3344, 'district_id' => 784, 'name' => 'Suka Marga'],
['id' => 3345, 'district_id' => 784, 'name' => 'Muara Dua'],

// Desa/Kelurahan di Kecamatan Lampung Barat
['id' => 3346, 'district_id' => 785, 'name' => 'Lampung Barat'],
['id' => 3347, 'district_id' => 785, 'name' => 'Tanjung Agung'],
['id' => 3348, 'district_id' => 785, 'name' => 'Suka Merindu'],
['id' => 3349, 'district_id' => 785, 'name' => 'Talang Benih'],

// Desa/Kelurahan di Kecamatan Way Tenong
['id' => 3350, 'district_id' => 786, 'name' => 'Way Tenong'],
['id' => 3351, 'district_id' => 786, 'name' => 'Tanjung Raman'],
['id' => 3352, 'district_id' => 786, 'name' => 'Kemumu'],
['id' => 3353, 'district_id' => 786, 'name' => 'Taba Padang'],

// Desa/Kelurahan di Kecamatan Pagar Dewa
['id' => 3354, 'district_id' => 787, 'name' => 'Pagar Dewa'],
['id' => 3355, 'district_id' => 787, 'name' => 'Tanjung Aur'],
['id' => 3356, 'district_id' => 787, 'name' => 'Suka Maju'],
['id' => 3357, 'district_id' => 787, 'name' => 'Kota Bani'],

// Desa/Kelurahan di Kecamatan Batu Brak
['id' => 3358, 'district_id' => 788, 'name' => 'Batu Brak'],
['id' => 3359, 'district_id' => 788, 'name' => 'Tanjung Agung'],
['id' => 3360, 'district_id' => 788, 'name' => 'Suka Negeri'],
['id' => 3361, 'district_id' => 788, 'name' => 'Taba Penanjung'],

// Desa/Kelurahan di Kecamatan Sukau
['id' => 3362, 'district_id' => 789, 'name' => 'Sukau'],
['id' => 3363, 'district_id' => 789, 'name' => 'Pasar Pedati'],
['id' => 3364, 'district_id' => 789, 'name' => 'Talang Benih'],
['id' => 3365, 'district_id' => 789, 'name' => 'Suka Merindu'],

// Desa/Kelurahan di Kecamatan Tanggamus
['id' => 3366, 'district_id' => 790, 'name' => 'Tanggamus'],
['id' => 3367, 'district_id' => 790, 'name' => 'Tanjung Iman'],
['id' => 3368, 'district_id' => 790, 'name' => 'Suka Maju'],
['id' => 3369, 'district_id' => 790, 'name' => 'Muara Sahung'],
// Desa/Kelurahan di Kecamatan Kota Agung
['id' => 3370, 'district_id' => 791, 'name' => 'Kota Agung'],
['id' => 3371, 'district_id' => 791, 'name' => 'Kota Agung Timur'],
['id' => 3372, 'district_id' => 791, 'name' => 'Kota Agung Barat'],
['id' => 3373, 'district_id' => 791, 'name' => 'Pekon Susuk'],

// Desa/Kelurahan di Kecamatan Pugung
['id' => 3374, 'district_id' => 792, 'name' => 'Pugung'],
['id' => 3375, 'district_id' => 792, 'name' => 'Pugung Raharjo'],
['id' => 3376, 'district_id' => 792, 'name' => 'Pugung Mulio'],
['id' => 3377, 'district_id' => 792, 'name' => 'Pugung Jaya'],

// Desa/Kelurahan di Kecamatan Semaka
['id' => 3378, 'district_id' => 793, 'name' => 'Semaka'],
['id' => 3379, 'district_id' => 793, 'name' => 'Semaka Tengah'],
['id' => 3380, 'district_id' => 793, 'name' => 'Semaka Marga'],
['id' => 3381, 'district_id' => 793, 'name' => 'Semaka Jaya'],

// Desa/Kelurahan di Kecamatan Cukuh Balak
['id' => 3382, 'district_id' => 794, 'name' => 'Cukuh Balak'],
['id' => 3383, 'district_id' => 794, 'name' => 'Cukuh Balak Timur'],
['id' => 3384, 'district_id' => 794, 'name' => 'Cukuh Balak Barat'],
['id' => 3385, 'district_id' => 794, 'name' => 'Cukuh Balak Utara'],

// Desa/Kelurahan di Kecamatan Lampung Selatan
['id' => 3386, 'district_id' => 795, 'name' => 'Lampung Selatan'],
['id' => 3387, 'district_id' => 795, 'name' => 'Tanjung Sari'],
['id' => 3388, 'district_id' => 795, 'name' => 'Way Galih'],
['id' => 3389, 'district_id' => 795, 'name' => 'Bumi Agung'],

// Desa/Kelurahan di Kecamatan Kalianda
['id' => 3390, 'district_id' => 796, 'name' => 'Kalianda'],
['id' => 3391, 'district_id' => 796, 'name' => 'Kalianda Timur'],
['id' => 3392, 'district_id' => 796, 'name' => 'Kalianda Barat'],
['id' => 3393, 'district_id' => 796, 'name' => 'Kalianda Utara'],

// Desa/Kelurahan di Kecamatan Jati Agung
['id' => 3394, 'district_id' => 797, 'name' => 'Jati Agung'],
['id' => 3395, 'district_id' => 797, 'name' => 'Jati Agung Timur'],
['id' => 3396, 'district_id' => 797, 'name' => 'Jati Agung Barat'],
['id' => 3397, 'district_id' => 797, 'name' => 'Jati Agung Selatan'],

// Desa/Kelurahan di Kecamatan Sidomulyo
['id' => 3398, 'district_id' => 798, 'name' => 'Sidomulyo'],
['id' => 3399, 'district_id' => 798, 'name' => 'Sidomulyo Timur'],
['id' => 3400, 'district_id' => 798, 'name' => 'Sidomulyo Barat'],
['id' => 3401, 'district_id' => 798, 'name' => 'Sidomulyo Utara'],

// Desa/Kelurahan di Kecamatan Tanjung Bintang
['id' => 3402, 'district_id' => 799, 'name' => 'Tanjung Bintang'],
['id' => 3403, 'district_id' => 799, 'name' => 'Tanjung Bintang Timur'],
['id' => 3404, 'district_id' => 799, 'name' => 'Tanjung Bintang Barat'],
['id' => 3405, 'district_id' => 799, 'name' => 'Tanjung Bintang Selatan'],

// Desa/Kelurahan di Kecamatan Lampung Timur
['id' => 3406, 'district_id' => 800, 'name' => 'Lampung Timur'],
['id' => 3407, 'district_id' => 800, 'name' => 'Labuhan Ratu'],
['id' => 3408, 'district_id' => 800, 'name' => 'Way Jepara'],
['id' => 3409, 'district_id' => 800, 'name' => 'Sukadana'],

// Desa/Kelurahan di Kecamatan Sukadana
['id' => 3410, 'district_id' => 801, 'name' => 'Sukadana'],
['id' => 3411, 'district_id' => 801, 'name' => 'Sukadana Timur'],
['id' => 3412, 'district_id' => 801, 'name' => 'Sukadana Barat'],
['id' => 3413, 'district_id' => 801, 'name' => 'Sukadana Selatan'],

// Desa/Kelurahan di Kecamatan Way Jepara
['id' => 3414, 'district_id' => 802, 'name' => 'Way Jepara'],
['id' => 3415, 'district_id' => 802, 'name' => 'Way Jepara Timur'],
['id' => 3416, 'district_id' => 802, 'name' => 'Way Jepara Barat'],
['id' => 3417, 'district_id' => 802, 'name' => 'Way Jepara Selatan'],

// Desa/Kelurahan di Kecamatan Marga Tiga
['id' => 3418, 'district_id' => 803, 'name' => 'Marga Tiga'],
['id' => 3419, 'district_id' => 803, 'name' => 'Marga Tiga Timur'],
['id' => 3420, 'district_id' => 803, 'name' => 'Marga Tiga Barat'],
['id' => 3421, 'district_id' => 803, 'name' => 'Marga Tiga Selatan'],

// Desa/Kelurahan di Kecamatan Batanghari
['id' => 3422, 'district_id' => 804, 'name' => 'Batanghari'],
['id' => 3423, 'district_id' => 804, 'name' => 'Batanghari Timur'],
['id' => 3424, 'district_id' => 804, 'name' => 'Batanghari Barat'],
['id' => 3425, 'district_id' => 804, 'name' => 'Batanghari Selatan'],

// Desa/Kelurahan di Kecamatan Lampung Tengah
['id' => 3426, 'district_id' => 805, 'name' => 'Lampung Tengah'],
['id' => 3427, 'district_id' => 805, 'name' => 'Gunung Sugih'],
['id' => 3428, 'district_id' => 805, 'name' => 'Terbanggi Besar'],
['id' => 3429, 'district_id' => 805, 'name' => 'Seputih Banyak'],

// Desa/Kelurahan di Kecamatan Gunung Sugih
['id' => 3430, 'district_id' => 806, 'name' => 'Gunung Sugih'],
['id' => 3431, 'district_id' => 806, 'name' => 'Gunung Sugih Timur'],
['id' => 3432, 'district_id' => 806, 'name' => 'Gunung Sugih Barat'],
['id' => 3433, 'district_id' => 806, 'name' => 'Gunung Sugih Selatan'],

// Desa/Kelurahan di Kecamatan Terbanggi Besar
['id' => 3434, 'district_id' => 807, 'name' => 'Terbanggi Besar'],
['id' => 3435, 'district_id' => 807, 'name' => 'Terbanggi Besar Timur'],
['id' => 3436, 'district_id' => 807, 'name' => 'Terbanggi Besar Barat'],
['id' => 3437, 'district_id' => 807, 'name' => 'Terbanggi Besar Selatan'],

// Desa/Kelurahan di Kecamatan Seputih Banyak
['id' => 3438, 'district_id' => 808, 'name' => 'Seputih Banyak'],
['id' => 3439, 'district_id' => 808, 'name' => 'Seputih Banyak Timur'],
['id' => 3440, 'district_id' => 808, 'name' => 'Seputih Banyak Barat'],
['id' => 3441, 'district_id' => 808, 'name' => 'Seputih Banyak Selatan'],

// Desa/Kelurahan di Kecamatan Seputih Surabaya
['id' => 3442, 'district_id' => 809, 'name' => 'Seputih Surabaya'],
['id' => 3443, 'district_id' => 809, 'name' => 'Seputih Surabaya Timur'],
['id' => 3444, 'district_id' => 809, 'name' => 'Seputih Surabaya Barat'],
['id' => 3445, 'district_id' => 809, 'name' => 'Seputih Surabaya Selatan'],

// Desa/Kelurahan di Kecamatan Lampung Utara
['id' => 3446, 'district_id' => 810, 'name' => 'Lampung Utara'],
['id' => 3447, 'district_id' => 810, 'name' => 'Kotabumi'],
['id' => 3448, 'district_id' => 810, 'name' => 'Kotabumi Selatan'],
['id' => 3449, 'district_id' => 810, 'name' => 'Kotabumi Utara'],
// Desa/Kelurahan di Kecamatan Kotabumi
['id' => 3450, 'district_id' => 811, 'name' => 'Kotabumi Tengah'],
['id' => 3451, 'district_id' => 811, 'name' => 'Kotabumi Ilir'],
['id' => 3452, 'district_id' => 811, 'name' => 'Kotabumi Udik'],
['id' => 3453, 'district_id' => 811, 'name' => 'Kotabumi Jaya'],

// Desa/Kelurahan di Kecamatan Abung Selatan
['id' => 3454, 'district_id' => 812, 'name' => 'Sidomulyo'],
['id' => 3455, 'district_id' => 812, 'name' => 'Sumber Agung'],
['id' => 3456, 'district_id' => 812, 'name' => 'Tanjung Raja'],
['id' => 3457, 'district_id' => 812, 'name' => 'Bumi Agung'],

// Desa/Kelurahan di Kecamatan Abung Timur
['id' => 3458, 'district_id' => 813, 'name' => 'Sukadana'],
['id' => 3459, 'district_id' => 813, 'name' => 'Bumi Nabung'],
['id' => 3460, 'district_id' => 813, 'name' => 'Gunung Sugih'],
['id' => 3461, 'district_id' => 813, 'name' => 'Way Pengubuan'],

// Desa/Kelurahan di Kecamatan Abung Surakarta
['id' => 3462, 'district_id' => 814, 'name' => 'Surakarta'],
['id' => 3463, 'district_id' => 814, 'name' => 'Bumi Agung Jaya'],
['id' => 3464, 'district_id' => 814, 'name' => 'Sumber Rejo'],
['id' => 3465, 'district_id' => 814, 'name' => 'Tanjung Harapan'],

// Desa/Kelurahan di Kecamatan Way Kanan
['id' => 3466, 'district_id' => 815, 'name' => 'Way Tuba'],
['id' => 3467, 'district_id' => 815, 'name' => 'Gunung Labuhan'],
['id' => 3468, 'district_id' => 815, 'name' => 'Negeri Batin'],
['id' => 3469, 'district_id' => 815, 'name' => 'Suka Maju'],

// Desa/Kelurahan di Kecamatan Blambangan Umpu
['id' => 3470, 'district_id' => 816, 'name' => 'Blambangan Umpu'],
['id' => 3471, 'district_id' => 816, 'name' => 'Bumi Agung'],
['id' => 3472, 'district_id' => 816, 'name' => 'Gunung Katun'],
['id' => 3473, 'district_id' => 816, 'name' => 'Mekar Sari'],

// Desa/Kelurahan di Kecamatan Banjit
['id' => 3474, 'district_id' => 817, 'name' => 'Banjit'],
['id' => 3475, 'district_id' => 817, 'name' => 'Suka Negeri'],
['id' => 3476, 'district_id' => 817, 'name' => 'Tanjung Agung'],
['id' => 3477, 'district_id' => 817, 'name' => 'Bumi Ratu'],

// Desa/Kelurahan di Kecamatan Kasui
['id' => 3478, 'district_id' => 818, 'name' => 'Kasui'],
['id' => 3479, 'district_id' => 818, 'name' => 'Suka Maju'],
['id' => 3480, 'district_id' => 818, 'name' => 'Tanjung Harapan'],
['id' => 3481, 'district_id' => 818, 'name' => 'Bumi Agung'],

// Desa/Kelurahan di Kecamatan Negeri Agung
['id' => 3482, 'district_id' => 819, 'name' => 'Negeri Agung'],
['id' => 3483, 'district_id' => 819, 'name' => 'Suka Jaya'],
['id' => 3484, 'district_id' => 819, 'name' => 'Tanjung Rejo'],
['id' => 3485, 'district_id' => 819, 'name' => 'Bumi Makmur'],
['id' => 3486, 'district_id' => 820, 'name' => 'Dwi Warga Tunggal Jaya'],
    ['id' => 3487, 'district_id' => 820, 'name' => 'Tri Mulya Jaya'],
    ['id' => 3488, 'district_id' => 820, 'name' => 'Sumber Makmur'],
    ['id' => 3489, 'district_id' => 820, 'name' => 'Mekar Jaya'],
    ['id' => 3490, 'district_id' => 820, 'name' => 'Sido Mulyo'],
    ['id' => 3491, 'district_id' => 820, 'name' => 'Sumber Sari'],
    ['id' => 3492, 'district_id' => 820, 'name' => 'Sumber Agung'],
    ['id' => 3493, 'district_id' => 820, 'name' => 'Sumber Rejo'],
    ['id' => 3494, 'district_id' => 820, 'name' => 'Sumber Jaya'],
    ['id' => 3495, 'district_id' => 820, 'name' => 'Sumber Baru'],
    ['id' => 3496, 'district_id' => 821, 'name' => 'Ujung Gunung'],
    ['id' => 3497, 'district_id' => 821, 'name' => 'Menggala Kota'],
    ['id' => 3498, 'district_id' => 821, 'name' => 'Kagungan Rahayu'],
    ['id' => 3499, 'district_id' => 821, 'name' => 'Kagungan Dalam'],
    ['id' => 3500, 'district_id' => 821, 'name' => 'Kagungan Luar'],
    ['id' => 3501, 'district_id' => 821, 'name' => 'Kagungan Tengah'],
    ['id' => 3502, 'district_id' => 821, 'name' => 'Kagungan Ilir'],
    ['id' => 3503, 'district_id' => 821, 'name' => 'Kagungan Ulu'],
    ['id' => 3504, 'district_id' => 821, 'name' => 'Kagungan Jaya'],
    ['id' => 3505, 'district_id' => 821, 'name' => 'Kagungan Makmur'],
    ['id' => 3506, 'district_id' => 822, 'name' => 'Tirta Makmur'],
    ['id' => 3507, 'district_id' => 822, 'name' => 'Tirta Kencana'],
    ['id' => 3508, 'district_id' => 822, 'name' => 'Tirta Lestari'],
    ['id' => 3509, 'district_id' => 822, 'name' => 'Tirta Jaya'],
    ['id' => 3510, 'district_id' => 822, 'name' => 'Tirta Mulyo'],
    ['id' => 3511, 'district_id' => 822, 'name' => 'Tirta Sari'],
    ['id' => 3512, 'district_id' => 822, 'name' => 'Tirta Agung'],
    ['id' => 3513, 'district_id' => 822, 'name' => 'Tirta Rejo'],
    ['id' => 3514, 'district_id' => 822, 'name' => 'Tirta Baru'],
    ['id' => 3515, 'district_id' => 822, 'name' => 'Tirta Sari Mulyo'],
    ['id' => 3516, 'district_id' => 823, 'name' => 'Dente Makmur'],
    ['id' => 3517, 'district_id' => 823, 'name' => 'Dente Sejahtera'],
    ['id' => 3518, 'district_id' => 823, 'name' => 'Dente Indah'],
    ['id' => 3519, 'district_id' => 823, 'name' => 'Dente Jaya'],
    ['id' => 3520, 'district_id' => 823, 'name' => 'Dente Mulyo'],
    ['id' => 3521, 'district_id' => 823, 'name' => 'Dente Sari'],
    ['id' => 3522, 'district_id' => 823, 'name' => 'Dente Agung'],
    ['id' => 3523, 'district_id' => 823, 'name' => 'Dente Rejo'],
    ['id' => 3524, 'district_id' => 823, 'name' => 'Dente Baru'],
    ['id' => 3525, 'district_id' => 823, 'name' => 'Dente Sari Mulyo'],
    ['id' => 3526, 'district_id' => 824, 'name' => 'Bumi Ratu'],
    ['id' => 3527, 'district_id' => 824, 'name' => 'Gedung Karya Jitu'],
    ['id' => 3528, 'district_id' => 824, 'name' => 'Hargo Mulyo'],
    ['id' => 3529, 'district_id' => 824, 'name' => 'Hargo Rejo'],
    ['id' => 3530, 'district_id' => 824, 'name' => 'Karya Cipta Abadi'],
    ['id' => 3531, 'district_id' => 824, 'name' => 'Karya Jitu Mukti'],
    ['id' => 3532, 'district_id' => 824, 'name' => 'Medasari'],
    ['id' => 3533, 'district_id' => 824, 'name' => 'Yudha Karya Jitu'],
    ['id' => 3534, 'district_id' => 824, 'name' => 'Wono Agung'],
    ['id' => 3535, 'district_id' => 825, 'name' => 'Bagelen'],
    ['id' => 3536, 'district_id' => 825, 'name' => 'Sukadadi'],
    ['id' => 3537, 'district_id' => 825, 'name' => 'Suka Jaya'],
    ['id' => 3538, 'district_id' => 825, 'name' => 'Suka Maju'],
    ['id' => 3539, 'district_id' => 825, 'name' => 'Tanjung Agung'],
    ['id' => 3540, 'district_id' => 825, 'name' => 'Tanjung Rejo'],
    ['id' => 3541, 'district_id' => 825, 'name' => 'Way Layap'],
    ['id' => 3542, 'district_id' => 825, 'name' => 'Way Urang'],
    ['id' => 3543, 'district_id' => 825, 'name' => 'Gedong Tataan'],
    ['id' => 3544, 'district_id' => 826, 'name' => 'Gedong Tataan'],
    ['id' => 3545, 'district_id' => 826, 'name' => 'Bagelen'],
    ['id' => 3546, 'district_id' => 826, 'name' => 'Sukadadi'],
    ['id' => 3547, 'district_id' => 826, 'name' => 'Suka Jaya'],
    ['id' => 3548, 'district_id' => 826, 'name' => 'Suka Maju'],
    ['id' => 3549, 'district_id' => 826, 'name' => 'Tanjung Agung'],
    ['id' => 3550, 'district_id' => 826, 'name' => 'Tanjung Rejo'],
    ['id' => 3551, 'district_id' => 826, 'name' => 'Way Layap'],
    ['id' => 3552, 'district_id' => 826, 'name' => 'Way Urang'],
    ['id' => 3553, 'district_id' => 827, 'name' => 'Punduh Pidada'],
    ['id' => 3554, 'district_id' => 827, 'name' => 'Bunut'],
    ['id' => 3555, 'district_id' => 827, 'name' => 'Kota Jawa'],
    ['id' => 3556, 'district_id' => 827, 'name' => 'Pagar Jaya'],
    ['id' => 3557, 'district_id' => 827, 'name' => 'Simpang'],
    ['id' => 3558, 'district_id' => 827, 'name' => 'Sukajaya Punduh'],
    ['id' => 3559, 'district_id' => 827, 'name' => 'Sumber Jaya'],
    ['id' => 3560, 'district_id' => 827, 'name' => 'Way Harong'],
    ['id' => 3561, 'district_id' => 827, 'name' => 'Way Kepayang'],
    ['id' => 3562, 'district_id' => 827, 'name' => 'Way Tataan'],
    ['id' => 3563, 'district_id' => 828, 'name' => 'Harapan Jaya'],
    ['id' => 3564, 'district_id' => 828, 'name' => 'Kalirejo'],
    ['id' => 3565, 'district_id' => 828, 'name' => 'Khepong Jaya'],
    ['id' => 3566, 'district_id' => 828, 'name' => 'Padang Cermin'],
    ['id' => 3567, 'district_id' => 828, 'name' => 'Pekon Ampai'],
    ['id' => 3568, 'district_id' => 828, 'name' => 'Pekon Balak'],
    ['id' => 3569, 'district_id' => 828, 'name' => 'Pekon Sinar Harapan'],
    ['id' => 3570, 'district_id' => 828, 'name' => 'Pondok Betung'],
    ['id' => 3571, 'district_id' => 828, 'name' => 'Pondok Rejo'],
    ['id' => 3572, 'district_id' => 828, 'name' => 'Way Ratai'],
    // Desa/Kelurahan di Kecamatan Kedondong
    ['id' => 3573, 'district_id' => 829, 'name' => 'Kedondong'],
    ['id' => 3574, 'district_id' => 829, 'name' => 'Sumber Agung'],
    ['id' => 3575, 'district_id' => 829, 'name' => 'Pondok Rejo'],
    ['id' => 3576, 'district_id' => 829, 'name' => 'Harapan Jaya'],
    // Desa/Kelurahan di Kecamatan Pringsewu
    ['id' => 3577, 'district_id' => 830, 'name' => 'Pringsewu'],
    ['id' => 3578, 'district_id' => 830, 'name' => 'Fajar Agung'],
    ['id' => 3579, 'district_id' => 830, 'name' => 'Podomoro'],
    ['id' => 3580, 'district_id' => 830, 'name' => 'Rejosari'],

    // Desa/Kelurahan di Kecamatan Gading Rejo
    ['id' => 3581, 'district_id' => 831, 'name' => 'Gading Rejo'],
    ['id' => 3582, 'district_id' => 831, 'name' => 'Mataram'],
    ['id' => 3583, 'district_id' => 831, 'name' => 'Wates'],
    ['id' => 3584, 'district_id' => 831, 'name' => 'Sumberjo'],

    // Desa/Kelurahan di Kecamatan Pardasuka
    ['id' => 3585, 'district_id' => 832, 'name' => 'Pardasuka'],
    ['id' => 3586, 'district_id' => 832, 'name' => 'Kota Agung'],
    ['id' => 3587, 'district_id' => 832, 'name' => 'Sri Agung'],
    ['id' => 3588, 'district_id' => 832, 'name' => 'Sinar Harapan'],

    // Desa/Kelurahan di Kecamatan Sukoharjo
    ['id' => 3589, 'district_id' => 833, 'name' => 'Sukoharjo'],
    ['id' => 3590, 'district_id' => 833, 'name' => 'Sri Katon'],
    ['id' => 3591, 'district_id' => 833, 'name' => 'Suka Agung'],
    ['id' => 3592, 'district_id' => 833, 'name' => 'Margodadi'],

    // Desa/Kelurahan di Kecamatan Mesuji
    ['id' => 3593, 'district_id' => 835, 'name' => 'Mesuji'],
    ['id' => 3594, 'district_id' => 835, 'name' => 'Adi Luhur'],
    ['id' => 3595, 'district_id' => 835, 'name' => 'Bumi Harapan'],
    ['id' => 3596, 'district_id' => 835, 'name' => 'Sumber Makmur'],

    // Desa/Kelurahan di Kecamatan Tulang Bawang Barat
    ['id' => 3597, 'district_id' => 840, 'name' => 'Tulang Bawang Barat'],
    ['id' => 3598, 'district_id' => 840, 'name' => 'Candra Mukti'],
    ['id' => 3599, 'district_id' => 840, 'name' => 'Gunung Sari'],
    ['id' => 3600, 'district_id' => 840, 'name' => 'Makarti Jaya'],

    // Desa/Kelurahan di Kecamatan Pesisir Barat
    ['id' => 3601, 'district_id' => 845, 'name' => 'Pesisir Barat'],
    ['id' => 3602, 'district_id' => 845, 'name' => 'Way Haru'],
    ['id' => 3603, 'district_id' => 845, 'name' => 'Labuhan Jaya'],
    ['id' => 3604, 'district_id' => 845, 'name' => 'Sumber Alam'],

    // Desa/Kelurahan di Kecamatan Bandar Lampung
    ['id' => 3605, 'district_id' => 850, 'name' => 'Bandar Lampung'],
    ['id' => 3606, 'district_id' => 850, 'name' => 'Way Halim'],
    ['id' => 3607, 'district_id' => 850, 'name' => 'Sukabumi'],
    ['id' => 3608, 'district_id' => 850, 'name' => 'Tanjung Senang'],
    // Desa/Kelurahan di Kecamatan Tanjung Karang Pusat
['id' => 3609, 'district_id' => 851, 'name' => 'Pengajaran'],
['id' => 3610, 'district_id' => 851, 'name' => 'Gunung Sari'],
['id' => 3611, 'district_id' => 851, 'name' => 'Kebon Jeruk'],
['id' => 3612, 'district_id' => 851, 'name' => 'Pasir Gintung'],

// Desa/Kelurahan di Kecamatan Tanjung Karang Timur
['id' => 3613, 'district_id' => 852, 'name' => 'Sawah Lama'],
['id' => 3614, 'district_id' => 852, 'name' => 'Bumi Waras'],
['id' => 3615, 'district_id' => 852, 'name' => 'Kota Baru'],
['id' => 3616, 'district_id' => 852, 'name' => 'Way Lunik'],

// Desa/Kelurahan di Kecamatan Tanjung Karang Barat
['id' => 3617, 'district_id' => 853, 'name' => 'Pahoman'],
['id' => 3618, 'district_id' => 853, 'name' => 'Kupang Kota'],
['id' => 3619, 'district_id' => 853, 'name' => 'Kupang Raya'],
['id' => 3620, 'district_id' => 853, 'name' => 'Kupang Teba'],

// Desa/Kelurahan di Kecamatan Kedaton
['id' => 3621, 'district_id' => 854, 'name' => 'Penengahan'],
['id' => 3622, 'district_id' => 854, 'name' => 'Surabaya'],
['id' => 3623, 'district_id' => 854, 'name' => 'Sidodadi'],
['id' => 3624, 'district_id' => 854, 'name' => 'Way Dadi'],

// Desa/Kelurahan di Kecamatan Metro
['id' => 3625, 'district_id' => 855, 'name' => 'Ganjar Agung'],
['id' => 3626, 'district_id' => 855, 'name' => 'Ganjar Asri'],
['id' => 3627, 'district_id' => 855, 'name' => 'Mulyosari'],
['id' => 3628, 'district_id' => 855, 'name' => 'Rejomulyo'],

// Desa/Kelurahan di Kecamatan Metro Pusat
['id' => 3629, 'district_id' => 856, 'name' => 'Hadimulyo Barat'],
['id' => 3630, 'district_id' => 856, 'name' => 'Hadimulyo Timur'],
['id' => 3631, 'district_id' => 856, 'name' => 'Metro'],
['id' => 3632, 'district_id' => 856, 'name' => 'Yosodadi'],

// Desa/Kelurahan di Kecamatan Metro Timur
['id' => 3633, 'district_id' => 857, 'name' => 'Iringmulyo'],
['id' => 3634, 'district_id' => 857, 'name' => 'Tejosari'],
['id' => 3635, 'district_id' => 857, 'name' => 'Yosorejo'],
['id' => 3636, 'district_id' => 857, 'name' => 'Banjarrejo'],

// Desa/Kelurahan di Kecamatan Metro Barat
['id' => 3637, 'district_id' => 858, 'name' => 'Mulyojati'],
['id' => 3638, 'district_id' => 858, 'name' => 'Karangrejo'],
['id' => 3639, 'district_id' => 858, 'name' => 'Mulyosari'],
['id' => 3640, 'district_id' => 858, 'name' => 'Ganjar Agung'],

// Desa/Kelurahan di Kecamatan Metro Selatan
['id' => 3641, 'district_id' => 859, 'name' => 'Margodadi'],
['id' => 3642, 'district_id' => 859, 'name' => 'Margorejo'],
['id' => 3643, 'district_id' => 859, 'name' => 'Sumber Sari'],
['id' => 3644, 'district_id' => 859, 'name' => 'Rejomulyo'],
// Desa/Kelurahan di Kecamatan Bangka
['id' => 3645, 'district_id' => 860, 'name' => 'Batu Belubang'],
['id' => 3646, 'district_id' => 860, 'name' => 'Bangka'],
['id' => 3647, 'district_id' => 860, 'name' => 'Teluk Rubiah'],
['id' => 3648, 'district_id' => 860, 'name' => 'Sungailiat'],

// Desa/Kelurahan di Kecamatan Sungailiat
['id' => 3649, 'district_id' => 861, 'name' => 'Air Anyir'],
['id' => 3650, 'district_id' => 861, 'name' => 'Lontong'],
['id' => 3651, 'district_id' => 861, 'name' => 'Sungailiat'],
['id' => 3652, 'district_id' => 861, 'name' => 'Gelanggang'],

// Desa/Kelurahan di Kecamatan Merawang
['id' => 3653, 'district_id' => 862, 'name' => 'Merawang'],
['id' => 3654, 'district_id' => 862, 'name' => 'Batu Api'],
['id' => 3655, 'district_id' => 862, 'name' => 'Pasir Putih'],
['id' => 3656, 'district_id' => 862, 'name' => 'Tanjung'],

// Desa/Kelurahan di Kecamatan Riau Silip
['id' => 3657, 'district_id' => 863, 'name' => 'Kepulauan Bangka'],
['id' => 3658, 'district_id' => 863, 'name' => 'Riau Silip'],
['id' => 3659, 'district_id' => 863, 'name' => 'Selawang'],
['id' => 3660, 'district_id' => 863, 'name' => 'Bukit'],

// Desa/Kelurahan di Kecamatan Puding Besar
['id' => 3661, 'district_id' => 864, 'name' => 'Puding Besar'],
['id' => 3662, 'district_id' => 864, 'name' => 'Muntok'],
['id' => 3663, 'district_id' => 864, 'name' => 'Kampung Baru'],
['id' => 3664, 'district_id' => 864, 'name' => 'Batu Enam'],

// Desa/Kelurahan di Kecamatan Belitung
['id' => 3665, 'district_id' => 865, 'name' => 'Belitung'],
['id' => 3666, 'district_id' => 865, 'name' => 'Tanjung Pandan'],
['id' => 3667, 'district_id' => 865, 'name' => 'Sijuk'],
['id' => 3668, 'district_id' => 865, 'name' => 'Dendang'],

// Desa/Kelurahan di Kecamatan Tanjung Pandan
['id' => 3669, 'district_id' => 866, 'name' => 'Tanjung Pandan'],
['id' => 3670, 'district_id' => 866, 'name' => 'Sijuk'],
['id' => 3671, 'district_id' => 866, 'name' => 'Gantung'],
['id' => 3672, 'district_id' => 866, 'name' => 'Dendang'],

// Desa/Kelurahan di Kecamatan Sijuk
['id' => 3673, 'district_id' => 867, 'name' => 'Sijuk'],
['id' => 3674, 'district_id' => 867, 'name' => 'Dendang'],
['id' => 3675, 'district_id' => 867, 'name' => 'Gantung'],
['id' => 3676, 'district_id' => 867, 'name' => 'Tanjung Pandan'],

// Desa/Kelurahan di Kecamatan Dendang
['id' => 3677, 'district_id' => 868, 'name' => 'Dendang'],
['id' => 3678, 'district_id' => 868, 'name' => 'Sijuk'],
['id' => 3679, 'district_id' => 868, 'name' => 'Gantung'],
['id' => 3680, 'district_id' => 868, 'name' => 'Tanjung Pandan'],

// Desa/Kelurahan di Kecamatan Gantung
['id' => 3681, 'district_id' => 869, 'name' => 'Gantung'],
['id' => 3682, 'district_id' => 869, 'name' => 'Sijuk'],
['id' => 3683, 'district_id' => 869, 'name' => 'Dendang'],
['id' => 3684, 'district_id' => 869, 'name' => 'Tanjung Pandan'],
// Desa/Kelurahan di Kecamatan Bangka Barat
['id' => 3685, 'district_id' => 870, 'name' => 'Muntok'],
['id' => 3686, 'district_id' => 870, 'name' => 'Kepulauan Bangka'],
['id' => 3687, 'district_id' => 870, 'name' => 'Jebus'],
['id' => 3688, 'district_id' => 870, 'name' => 'Parittiga'],

// Desa/Kelurahan di Kecamatan Muntok
['id' => 3689, 'district_id' => 871, 'name' => 'Muntok'],
['id' => 3690, 'district_id' => 871, 'name' => 'Kepulauan Bangka'],
['id' => 3691, 'district_id' => 871, 'name' => 'Jebus'],
['id' => 3692, 'district_id' => 871, 'name' => 'Parittiga'],

// Desa/Kelurahan di Kecamatan Kepulauan Bangka
['id' => 3693, 'district_id' => 872, 'name' => 'Kepulauan Bangka'],
['id' => 3694, 'district_id' => 872, 'name' => 'Jebus'],
['id' => 3695, 'district_id' => 872, 'name' => 'Parittiga'],
['id' => 3696, 'district_id' => 872, 'name' => 'Muntok'],

// Desa/Kelurahan di Kecamatan Jebus
['id' => 3697, 'district_id' => 873, 'name' => 'Jebus'],
['id' => 3698, 'district_id' => 873, 'name' => 'Muntok'],
['id' => 3699, 'district_id' => 873, 'name' => 'Kepulauan Bangka'],
['id' => 3700, 'district_id' => 873, 'name' => 'Parittiga'],

// Desa/Kelurahan di Kecamatan Parittiga
['id' => 3701, 'district_id' => 874, 'name' => 'Parittiga'],
['id' => 3702, 'district_id' => 874, 'name' => 'Jebus'],
['id' => 3703, 'district_id' => 874, 'name' => 'Muntok'],
['id' => 3704, 'district_id' => 874, 'name' => 'Kepulauan Bangka'],

// Desa/Kelurahan di Kecamatan Bangka Tengah
['id' => 3705, 'district_id' => 875, 'name' => 'Koba'],
['id' => 3706, 'district_id' => 875, 'name' => 'Sungai Selan'],
['id' => 3707, 'district_id' => 875, 'name' => 'Pangkalan Baru'],
['id' => 3708, 'district_id' => 875, 'name' => 'Namang'],

// Desa/Kelurahan di Kecamatan Koba
['id' => 3709, 'district_id' => 876, 'name' => 'Koba'],
['id' => 3710, 'district_id' => 876, 'name' => 'Sungai Selan'],
['id' => 3711, 'district_id' => 876, 'name' => 'Pangkalan Baru'],
['id' => 3712, 'district_id' => 876, 'name' => 'Namang'],

// Desa/Kelurahan di Kecamatan Sungai Selan
['id' => 3713, 'district_id' => 877, 'name' => 'Sungai Selan'],
['id' => 3714, 'district_id' => 877, 'name' => 'Koba'],
['id' => 3715, 'district_id' => 877, 'name' => 'Pangkalan Baru'],
['id' => 3716, 'district_id' => 877, 'name' => 'Namang'],

// Desa/Kelurahan di Kecamatan Pangkalan Baru
['id' => 3717, 'district_id' => 878, 'name' => 'Pangkalan Baru'],
['id' => 3718, 'district_id' => 878, 'name' => 'Koba'],
['id' => 3719, 'district_id' => 878, 'name' => 'Sungai Selan'],
['id' => 3720, 'district_id' => 878, 'name' => 'Namang'],

// Desa/Kelurahan di Kecamatan Namang
['id' => 3721, 'district_id' => 879, 'name' => 'Namang'],
['id' => 3722, 'district_id' => 879, 'name' => 'Koba'],
['id' => 3723, 'district_id' => 879, 'name' => 'Sungai Selan'],
['id' => 3724, 'district_id' => 879, 'name' => 'Pangkalan Baru'],
// Desa/Kelurahan di Kecamatan Bangka Selatan
['id' => 3725, 'district_id' => 880, 'name' => 'Toboali'],
['id' => 3726, 'district_id' => 880, 'name' => 'Air Anyir'],
['id' => 3727, 'district_id' => 880, 'name' => 'Sungai Selan'],
['id' => 3728, 'district_id' => 880, 'name' => 'Pulau Lepar'],
// Desa/Kelurahan di Kecamatan Toboali
['id' => 3729, 'district_id' => 881, 'name' => 'Simpang Rimba'],
['id' => 3730, 'district_id' => 881, 'name' => 'Lepar Pongok'],
['id' => 3731, 'district_id' => 881, 'name' => 'Airgegas'],

// Desa/Kelurahan di Kecamatan Belitung Timur
['id' => 3732, 'district_id' => 885, 'name' => 'Manggar'],
['id' => 3733, 'district_id' => 885, 'name' => 'Damar'],
['id' => 3734, 'district_id' => 885, 'name' => 'Gantung'],
['id' => 3735, 'district_id' => 885, 'name' => 'Kelapa Kampit'],

// Desa/Kelurahan di Kecamatan Pangkal Pinang
['id' => 3736, 'district_id' => 890, 'name' => 'Gerunggang'],
['id' => 3737, 'district_id' => 890, 'name' => 'Rangkui'],
['id' => 3738, 'district_id' => 890, 'name' => 'Taman Sari'],
['id' => 3739, 'district_id' => 890, 'name' => 'Bukit Intan'],

// Desa/Kelurahan di Kecamatan Bintan
['id' => 3740, 'district_id' => 895, 'name' => 'Tanjung Uban'],
['id' => 3741, 'district_id' => 895, 'name' => 'Bintan Utara'],
['id' => 3742, 'district_id' => 895, 'name' => 'Bintan Timur'],
['id' => 3743, 'district_id' => 895, 'name' => 'Gunung Kijang'],
// Desa/Kelurahan di Kecamatan Karimun
['id' => 3744, 'district_id' => 900, 'name' => 'Tanjung Balai'],
['id' => 3745, 'district_id' => 900, 'name' => 'Pangke'],
['id' => 3746, 'district_id' => 900, 'name' => 'Sungai Raya'],
['id' => 3747, 'district_id' => 900, 'name' => 'Durai'],
['id' => 3748, 'district_id' => 900, 'name' => 'Baru'],
['id' => 3749, 'district_id' => 900, 'name' => 'Kundur'],
['id' => 3750, 'district_id' => 900, 'name' => 'Kundur Utara'],
['id' => 3751, 'district_id' => 900, 'name' => 'Kundur Barat'],
['id' => 3752, 'district_id' => 900, 'name' => 'Meral'],
// Desa/Kelurahan di Kecamatan Meral
['id' => 3753, 'district_id' => 901, 'name' => 'Tanjung Meral'],
['id' => 3754, 'district_id' => 901, 'name' => 'Kampung Laut'],
['id' => 3755, 'district_id' => 901, 'name' => 'Bintan Utara'],

// Desa/Kelurahan di Kecamatan Meral Barat
['id' => 3756, 'district_id' => 902, 'name' => 'Sungai Tohor'],
['id' => 3757, 'district_id' => 902, 'name' => 'Kampung Pahlawan'],
['id' => 3758, 'district_id' => 902, 'name' => 'Teluk Meranti'],

// Desa/Kelurahan di Kecamatan Buru
['id' => 3759, 'district_id' => 903, 'name' => 'Pulau Buru'],
['id' => 3760, 'district_id' => 903, 'name' => 'Teluk Meranti'],

// Desa/Kelurahan di Kecamatan Kundur
['id' => 3761, 'district_id' => 904, 'name' => 'Kundur Laut'],
['id' => 3762, 'district_id' => 904, 'name' => 'Kundur Barat'],

// Desa/Kelurahan di Kecamatan Natuna
['id' => 3763, 'district_id' => 905, 'name' => 'Kampung Air'],
['id' => 3764, 'district_id' => 905, 'name' => 'Tanjung Belungkor'],

// Desa/Kelurahan di Kecamatan Serasan
['id' => 3765, 'district_id' => 906, 'name' => 'Pulau Serasan'],
['id' => 3766, 'district_id' => 906, 'name' => 'Serasan Tengah'],

// Desa/Kelurahan di Kecamatan Pulau Tiga
['id' => 3767, 'district_id' => 907, 'name' => 'Pulau Tiga Barat'],
['id' => 3768, 'district_id' => 907, 'name' => 'Tanjung Berakit'],

// Desa/Kelurahan di Kecamatan Midai
['id' => 3769, 'district_id' => 908, 'name' => 'Pulau Midai'],
['id' => 3770, 'district_id' => 908, 'name' => 'Tanjung Merdeka'],
 // Desa/Kelurahan di Kecamatan Subi
 ['id' => 3771, 'district_id' => 909, 'name' => 'Subi Besar'],
 ['id' => 3772, 'district_id' => 909, 'name' => 'Subi Kecil'],
 ['id' => 3773, 'district_id' => 909, 'name' => 'Subi Timur'],
 ['id' => 3774, 'district_id' => 909, 'name' => 'Subi Selatan'],
 ['id' => 3775, 'district_id' => 909, 'name' => 'Subi Barat'],

 // Desa/Kelurahan di Kecamatan Lingga
 ['id' => 3776, 'district_id' => 910, 'name' => 'Daik'],
 ['id' => 3777, 'district_id' => 910, 'name' => 'Merawang'],
 ['id' => 3778, 'district_id' => 910, 'name' => 'Pancur'],
 ['id' => 3779, 'district_id' => 910, 'name' => 'Panggak Laut'],
 ['id' => 3780, 'district_id' => 910, 'name' => 'Kelumu'],

 // Desa/Kelurahan di Kecamatan Singkep
 ['id' => 3781, 'district_id' => 911, 'name' => 'Dabo'],
 ['id' => 3782, 'district_id' => 911, 'name' => 'Sungai Lumpur'],
 ['id' => 3783, 'district_id' => 911, 'name' => 'Sungai Buluh'],
 ['id' => 3784, 'district_id' => 911, 'name' => 'Tanjung Harapan'],
 ['id' => 3785, 'district_id' => 911, 'name' => 'Lumut'],

 // Desa/Kelurahan di Kecamatan Selayar
 ['id' => 3786, 'district_id' => 913, 'name' => 'Selayar'],
 ['id' => 3787, 'district_id' => 913, 'name' => 'Penuba'],
 ['id' => 3788, 'district_id' => 913, 'name' => 'Tanjung Kelit'],
 ['id' => 3789, 'district_id' => 913, 'name' => 'Kote'],
 ['id' => 3790, 'district_id' => 913, 'name' => 'Mentuda'],

 // Desa/Kelurahan di Kecamatan Kepulauan Lingga
 ['id' => 3791, 'district_id' => 914, 'name' => 'Benan'],
 ['id' => 3792, 'district_id' => 914, 'name' => 'Pulau Mepar'],
 ['id' => 3793, 'district_id' => 914, 'name' => 'Pulau Medang'],
 ['id' => 3794, 'district_id' => 914, 'name' => 'Pulau Batang'],
 ['id' => 3795, 'district_id' => 914, 'name' => 'Pulau Lalang'],

 // Desa/Kelurahan di Kecamatan Kepulauan Anambas
 ['id' => 3796, 'district_id' => 915, 'name' => 'Tarempa'],
 ['id' => 3797, 'district_id' => 915, 'name' => 'Tarempa Barat'],
 ['id' => 3798, 'district_id' => 915, 'name' => 'Tarempa Timur'],
 ['id' => 3799, 'district_id' => 915, 'name' => 'Tarempa Selatan'],
 ['id' => 3800, 'district_id' => 915, 'name' => 'Tarempa Barat Daya'],

 // Desa/Kelurahan di Kecamatan Siantan
 ['id' => 3801, 'district_id' => 916, 'name' => 'Pesisir Timur'],
 ['id' => 3802, 'district_id' => 916, 'name' => 'Sri Tanjung'],
 ['id' => 3803, 'district_id' => 916, 'name' => 'Tarempa Barat'],
 ['id' => 3804, 'district_id' => 916, 'name' => 'Tarempa Barat Daya'],
 ['id' => 3805, 'district_id' => 916, 'name' => 'Tarempa Selatan'],
 ['id' => 3806, 'district_id' => 916, 'name' => 'Tarempa Timur'],

 // Desa/Kelurahan di Kecamatan Palmatak
 ['id' => 3807, 'district_id' => 917, 'name' => 'Belibak'],
 ['id' => 3808, 'district_id' => 917, 'name' => 'Candi'],
 ['id' => 3809, 'district_id' => 917, 'name' => 'Ladan'],
 ['id' => 3810, 'district_id' => 917, 'name' => 'Langir'],
 ['id' => 3811, 'district_id' => 917, 'name' => 'Piabung'],
 ['id' => 3812, 'district_id' => 917, 'name' => 'Putik'],
 ['id' => 3813, 'district_id' => 917, 'name' => 'Tebang'],

 // Desa/Kelurahan di Kecamatan Sikakap
 ['id' => 3814, 'district_id' => 918, 'name' => 'Sikakap'],
 ['id' => 3815, 'district_id' => 918, 'name' => 'Taikako'],
 ['id' => 3816, 'district_id' => 918, 'name' => 'Matobe'],
 ['id' => 3817, 'district_id' => 918, 'name' => 'Makalo'],
 ['id' => 3818, 'district_id' => 918, 'name' => 'Silabu'],

 // Desa/Kelurahan di Kecamatan Tarempa
 ['id' => 3819, 'district_id' => 919, 'name' => 'Tarempa'],
 ['id' => 3820, 'district_id' => 919, 'name' => 'Tarempa Barat'],
 ['id' => 3821, 'district_id' => 919, 'name' => 'Tarempa Timur'],
 ['id' => 3822, 'district_id' => 919, 'name' => 'Tarempa Selatan'],
  // Desa/Kelurahan di Kecamatan Batam
  ['id' => 3823, 'district_id' => 920, 'name' => 'Baloi'],
  ['id' => 3824, 'district_id' => 920, 'name' => 'Teluk Tering'],
  ['id' => 3825, 'district_id' => 920, 'name' => 'Batu Ampar'],
  ['id' => 3826, 'district_id' => 920, 'name' => 'Kampung Seraya'],
  ['id' => 3827, 'district_id' => 920, 'name' => 'Sungai Jodoh'],

  // Desa/Kelurahan di Kecamatan Batu Aji
  ['id' => 3828, 'district_id' => 921, 'name' => 'Tanjung Uncang'],
  ['id' => 3829, 'district_id' => 921, 'name' => 'Buliang'],
  ['id' => 3830, 'district_id' => 921, 'name' => 'Bukit Tempayan'],
  ['id' => 3831, 'district_id' => 921, 'name' => 'Kibing'],

  // Desa/Kelurahan di Kecamatan Lubuk Baja
  ['id' => 3832, 'district_id' => 922, 'name' => 'Baloi Indah'],
  ['id' => 3833, 'district_id' => 922, 'name' => 'Kampung Pelita'],
  ['id' => 3834, 'district_id' => 922, 'name' => 'Lubuk Baja Kota'],
  ['id' => 3835, 'district_id' => 922, 'name' => 'Tanjung Uma'],

  // Desa/Kelurahan di Kecamatan Sekupang
  ['id' => 3836, 'district_id' => 923, 'name' => 'Tanjung Riau'],
  ['id' => 3837, 'district_id' => 923, 'name' => 'Tiban Indah'],
  ['id' => 3838, 'district_id' => 923, 'name' => 'Tiban Lama'],
  ['id' => 3839, 'district_id' => 923, 'name' => 'Patam Lestari'],

  // Desa/Kelurahan di Kecamatan Nongsa
  ['id' => 3840, 'district_id' => 924, 'name' => 'Kabil'],
  ['id' => 3841, 'district_id' => 924, 'name' => 'Sambau'],
  ['id' => 3842, 'district_id' => 924, 'name' => 'Ngenang'],
  ['id' => 3843, 'district_id' => 924, 'name' => 'Batu Besar'],

  // Desa/Kelurahan di Kecamatan Tanjung Pinang
  ['id' => 3844, 'district_id' => 925, 'name' => 'Tanjungpinang Barat'],
  ['id' => 3845, 'district_id' => 925, 'name' => 'Tanjungpinang Timur'],
  ['id' => 3846, 'district_id' => 925, 'name' => 'Tanjungpinang Kota'],
  ['id' => 3847, 'district_id' => 925, 'name' => 'Bukit Bestari'],
    // Desa/Kelurahan di Kecamatan Tanjung Pinang Timur
    ['id' => 3848, 'district_id' => 926, 'name' => 'Air Raja'],
    ['id' => 3849, 'district_id' => 926, 'name' => 'Pinang Kencana'],
    ['id' => 3850, 'district_id' => 926, 'name' => 'Dompak'],
    ['id' => 3851, 'district_id' => 926, 'name' => 'Sungai Jari'],

    // Desa/Kelurahan di Kecamatan Tanjung Pinang Barat
    ['id' => 3852, 'district_id' => 927, 'name' => 'Kemboja'],
    ['id' => 3853, 'district_id' => 927, 'name' => 'Kampung Baru'],
    ['id' => 3854, 'district_id' => 927, 'name' => 'Tanjung Unggat'],

    // Desa/Kelurahan di Kecamatan Bukit Bestari
    ['id' => 3855, 'district_id' => 928, 'name' => 'Tanjung Ayun Sakti'],
    ['id' => 3856, 'district_id' => 928, 'name' => 'Dompak'],
    ['id' => 3857, 'district_id' => 928, 'name' => 'Sei Jang'],

    // Desa/Kelurahan di Kecamatan Kota Tanjung Pinang
    ['id' => 3858, 'district_id' => 929, 'name' => 'Kampung Bugis'],
    ['id' => 3859, 'district_id' => 929, 'name' => 'Tanjungpinang Kota'],
    ['id' => 3860, 'district_id' => 929, 'name' => 'Penyengat'],

    // Desa/Kelurahan di Kecamatan Kepulauan Seribu
    ['id' => 3861, 'district_id' => 930, 'name' => 'Pulau Panggang'],
    ['id' => 3862, 'district_id' => 930, 'name' => 'Pulau Harapan'],

    // Desa/Kelurahan di Kecamatan Pulau Seribu Selatan
    ['id' => 3863, 'district_id' => 931, 'name' => 'Pulau Tidung'],
    ['id' => 3864, 'district_id' => 931, 'name' => 'Pulau Pari'],

    // Desa/Kelurahan di Kecamatan Pulau Seribu Utara
    ['id' => 3865, 'district_id' => 932, 'name' => 'Pulau Kelapa'],
    ['id' => 3866, 'district_id' => 932, 'name' => 'Pulau Pramuka'],

    // Desa/Kelurahan di Kecamatan Pulau Pramuka
    ['id' => 3867, 'district_id' => 934, 'name' => 'Pulau Pramuka'],

    // Desa/Kelurahan di Kecamatan Jakarta Selatan
    ['id' => 3868, 'district_id' => 935, 'name' => 'Mampang Prapatan'],
    ['id' => 3869, 'district_id' => 935, 'name' => 'Cilandak'],
    ['id' => 3870, 'district_id' => 935, 'name' => 'Pasar Minggu'],

    // Desa/Kelurahan di Kecamatan Kebayoran Baru
    ['id' => 3871, 'district_id' => 936, 'name' => 'Senayan'],
    ['id' => 3872, 'district_id' => 936, 'name' => 'Petogogan'],
    ['id' => 3873, 'district_id' => 936, 'name' => 'Gandaria'],

    // Desa/Kelurahan di Kecamatan Cilandak
    ['id' => 3874, 'district_id' => 937, 'name' => 'Lebak Bulus'],
    ['id' => 3875, 'district_id' => 937, 'name' => 'Cipete Selatan'],
    ['id' => 3876, 'district_id' => 937, 'name' => 'Pondok Labu'],

    // Desa/Kelurahan di Kecamatan Pancoran
    ['id' => 3877, 'district_id' => 938, 'name' => 'Kalibata'],
    ['id' => 3878, 'district_id' => 938, 'name' => 'Pancoran'],
    ['id' => 3879, 'district_id' => 938, 'name' => 'Duren Tiga'],

    // Desa/Kelurahan di Kecamatan Mampang Prapatan
    ['id' => 3880, 'district_id' => 939, 'name' => 'Mampang Prapatan'],
    ['id' => 3881, 'district_id' => 939, 'name' => 'Tegal Parang'],
    ['id' => 3882, 'district_id' => 939, 'name' => 'Bangka'],
    ['id' => 3883, 'district_id' => 939, 'name' => 'Pela Mampang'],
    ['id' => 3884, 'district_id' => 939, 'name' => 'Kuningan Barat'],

    // Desa/Kelurahan di Kecamatan Jakarta Timur
    ['id' => 3885, 'district_id' => 940, 'name' => 'Pulo Gadung'],
    ['id' => 3886, 'district_id' => 940, 'name' => 'Kramat Jati'],
    ['id' => 3887, 'district_id' => 940, 'name' => 'Cakung'],
     // Desa/Kelurahan di Kecamatan Cakung
     ['id' => 3888, 'district_id' => 941, 'name' => 'Jatinegara'],
     ['id' => 3889, 'district_id' => 941, 'name' => 'Penggilingan'],
     ['id' => 3890, 'district_id' => 941, 'name' => 'Cakung Barat'],
     ['id' => 3891, 'district_id' => 941, 'name' => 'Cakung Timur'],
 
     // Desa/Kelurahan di Kecamatan Duren Sawit
     ['id' => 3892, 'district_id' => 942, 'name' => 'Duren Sawit'],
     ['id' => 3893, 'district_id' => 942, 'name' => 'Pondok Bambu'],
     ['id' => 3894, 'district_id' => 942, 'name' => 'Klender'],
     ['id' => 3895, 'district_id' => 942, 'name' => 'Pondok Kopi'],
 
     // Desa/Kelurahan di Kecamatan Jatinegara
     ['id' => 3896, 'district_id' => 943, 'name' => 'Bali Mester'],
     ['id' => 3897, 'district_id' => 943, 'name' => 'Kampung Melayu'],
     ['id' => 3898, 'district_id' => 943, 'name' => 'Bidara Cina'],
     ['id' => 3899, 'district_id' => 943, 'name' => 'Rawa Bunga'],
 
     // Desa/Kelurahan di Kecamatan Matraman
     ['id' => 3900, 'district_id' => 944, 'name' => 'Palmeriam'],
     ['id' => 3901, 'district_id' => 944, 'name' => 'Kayu Manis'],
     ['id' => 3902, 'district_id' => 944, 'name' => 'Pisangan Baru'],
     ['id' => 3903, 'district_id' => 944, 'name' => 'Utan Kayu Selatan'],

    // Desa/Kelurahan di Kecamatan Jakarta Pusat
    ['id' => 3904, 'district_id' => 945, 'name' => 'Cempaka Putih'],
    ['id' => 3905, 'district_id' => 945, 'name' => 'Menteng'],
    ['id' => 3906, 'district_id' => 945, 'name' => 'Johar Baru'],

    // Desa/Kelurahan di Kecamatan Tanah Abang
    ['id' => 3907, 'district_id' => 947, 'name' => 'Bendungan Hilir'],
    ['id' => 3908, 'district_id' => 947, 'name' => 'Kebon Kacang'],
    ['id' => 3909, 'district_id' => 947, 'name' => 'Petamburan'],
     // Desa/Kelurahan di Kecamatan Senen
     ['id' => 3910, 'district_id' => 948, 'name' => 'Senen'],
     ['id' => 3911, 'district_id' => 948, 'name' => 'Kwitang'],
     ['id' => 3912, 'district_id' => 948, 'name' => 'Kenari'],
     ['id' => 3913, 'district_id' => 948, 'name' => 'Bungur'],

    // Desa/Kelurahan di Kecamatan Kemayoran
    ['id' => 3914, 'district_id' => 949, 'name' => 'Gunung Sahari'],
    ['id' => 3915, 'district_id' => 949, 'name' => 'Sumur Batu'],
    ['id' => 3916, 'district_id' => 949, 'name' => 'Cempaka Baru'],

    // Desa/Kelurahan di Kecamatan Jakarta Barat
    ['id' => 3917, 'district_id' => 950, 'name' => 'Grogol'],
    ['id' => 3918, 'district_id' => 950, 'name' => 'Kebon Jeruk'],
    ['id' => 3919, 'district_id' => 950, 'name' => 'Kalideres'],
    // Desa/Kelurahan di Kecamatan Grogol Petamburan
['id' => 3920, 'district_id' => 951, 'name' => 'Grogol'],
['id' => 3921, 'district_id' => 951, 'name' => 'Tanah Sereal'],
['id' => 3922, 'district_id' => 951, 'name' => 'Tanjung Duren Selatan'],
['id' => 3923, 'district_id' => 951, 'name' => 'Tanjung Duren Utara'],

// Desa/Kelurahan di Kecamatan Taman Sari
['id' => 3924, 'district_id' => 952, 'name' => 'Pinangsia'],
['id' => 3925, 'district_id' => 952, 'name' => 'Krukut'],
['id' => 3926, 'district_id' => 952, 'name' => 'Cideng'],
['id' => 3927, 'district_id' => 952, 'name' => 'Gajah Mada'],

// Desa/Kelurahan di Kecamatan Kebon Jeruk
['id' => 3928, 'district_id' => 953, 'name' => 'Kebon Jeruk'],
['id' => 3929, 'district_id' => 953, 'name' => 'Duri Kepa'],
['id' => 3930, 'district_id' => 953, 'name' => 'Sukabumi Utara'],
['id' => 3931, 'district_id' => 953, 'name' => 'Sukabumi Selatan'],

// Desa/Kelurahan di Kecamatan Palmerah
['id' => 3932, 'district_id' => 954, 'name' => 'Palmerah'],
['id' => 3933, 'district_id' => 954, 'name' => 'Tomang'],
['id' => 3934, 'district_id' => 954, 'name' => 'Gelora'],

// Desa/Kelurahan di Kecamatan Jakarta Utara
['id' => 3935, 'district_id' => 955, 'name' => 'Sunter Agung'],
['id' => 3936, 'district_id' => 955, 'name' => 'Sunter Jaya'],
['id' => 3937, 'district_id' => 955, 'name' => 'Sunter Permata'],
['id' => 3938, 'district_id' => 955, 'name' => 'Papanggo'],

// Desa/Kelurahan di Kecamatan Tanjung Priok
['id' => 3939, 'district_id' => 956, 'name' => 'Tanjung Priok'],
['id' => 3940, 'district_id' => 956, 'name' => 'Warakas'],
['id' => 3941, 'district_id' => 956, 'name' => 'Sungai Bambu'],

// Desa/Kelurahan di Kecamatan Koja
['id' => 3942, 'district_id' => 957, 'name' => 'Koja'],
['id' => 3943, 'district_id' => 957, 'name' => 'Rorotan'],
['id' => 3944, 'district_id' => 957, 'name' => 'Penjaringan'],

// Desa/Kelurahan di Kecamatan Cilincing
['id' => 3945, 'district_id' => 958, 'name' => 'Cilincing'],
['id' => 3946, 'district_id' => 958, 'name' => 'Semper Barat'],
['id' => 3947, 'district_id' => 958, 'name' => 'Semper Timur'],

// Desa/Kelurahan di Kecamatan Pademangan
['id' => 3948, 'district_id' => 959, 'name' => 'Pademangan Barat'],
['id' => 3949, 'district_id' => 959, 'name' => 'Pademangan Timur'],
['id' => 3950, 'district_id' => 959, 'name' => 'Ancol'],
// Desa/Kelurahan di Kecamatan Bandungan
['id' => 3951, 'district_id' => 960, 'name' => 'Bandungan'],
['id' => 3952, 'district_id' => 960, 'name' => 'Cidadap'],
['id' => 3953, 'district_id' => 960, 'name' => 'Cibiru'],
['id' => 3954, 'district_id' => 960, 'name' => 'Cileunyi'],

// Desa/Kelurahan di Kecamatan Kota Bandung
['id' => 3955, 'district_id' => 964, 'name' => 'Kota Bandung'],
['id' => 3956, 'district_id' => 964, 'name' => 'Sukajadi'],
['id' => 3957, 'district_id' => 964, 'name' => 'Cibeunying Kaler'],
['id' => 3958, 'district_id' => 964, 'name' => 'Cibeunying Kidul'],

// Desa/Kelurahan di Kecamatan Bekasi
['id' => 3959, 'district_id' => 965, 'name' => 'Bekasi'],
['id' => 3960, 'district_id' => 965, 'name' => 'Margahayu'],
['id' => 3961, 'district_id' => 965, 'name' => 'Bekasi Jaya'],
['id' => 3962, 'district_id' => 965, 'name' => 'Ciketing'],

// Desa/Kelurahan di Kecamatan Cikarang
['id' => 3963, 'district_id' => 966, 'name' => 'Cikarang Utara'],
['id' => 3964, 'district_id' => 966, 'name' => 'Cikarang Selatan'],
['id' => 3965, 'district_id' => 966, 'name' => 'Cikarang Barat'],
['id' => 3966, 'district_id' => 966, 'name' => 'Cikarang Timur'],

// Desa/Kelurahan di Kecamatan Cibitung
['id' => 3967, 'district_id' => 967, 'name' => 'Cibitung'],
['id' => 3968, 'district_id' => 967, 'name' => 'Setia Asih'],
['id' => 3969, 'district_id' => 967, 'name' => 'Jatiwangi'],
['id' => 3970, 'district_id' => 967, 'name' => 'Jatimulya'],

// Desa/Kelurahan di Kecamatan Babelan
['id' => 3971, 'district_id' => 968, 'name' => 'Babelan'],
['id' => 3972, 'district_id' => 968, 'name' => 'Kedungwaringin'],
['id' => 3973, 'district_id' => 968, 'name' => 'Sumberjaya'],
['id' => 3974, 'district_id' => 968, 'name' => 'Baleendah'],

// Desa/Kelurahan di Kecamatan Kota Bekasi
['id' => 3975, 'district_id' => 969, 'name' => 'Bekasi Timur'],
['id' => 3976, 'district_id' => 969, 'name' => 'Bekasi Barat'],
['id' => 3977, 'district_id' => 969, 'name' => 'Bekasi Selatan'],
['id' => 3978, 'district_id' => 969, 'name' => 'Bekasi Utara'],

// Desa/Kelurahan di Kecamatan Bogor
['id' => 3979, 'district_id' => 970, 'name' => 'Bogor Tengah'],
['id' => 3980, 'district_id' => 970, 'name' => 'Bogor Selatan'],
['id' => 3981, 'district_id' => 970, 'name' => 'Bogor Timur'],
['id' => 3982, 'district_id' => 970, 'name' => 'Bogor Barat'],
// Desa/Kelurahan di Kecamatan Cibinong
['id' => 3983, 'district_id' => 971, 'name' => 'Cibinong'],
['id' => 3984, 'district_id' => 971, 'name' => 'Citeureup'],
['id' => 3985, 'district_id' => 971, 'name' => 'Bojongsari'],
['id' => 3986, 'district_id' => 971, 'name' => 'Kampung Rambutan'],

// Desa/Kelurahan di Kecamatan Ciampea
['id' => 3987, 'district_id' => 972, 'name' => 'Ciampea'],
['id' => 3988, 'district_id' => 972, 'name' => 'Ciomas'],
['id' => 3989, 'district_id' => 972, 'name' => 'Ranca Kalong'],
['id' => 3990, 'district_id' => 972, 'name' => 'Cigudeg'],

// Desa/Kelurahan di Kecamatan Gunung Putri
['id' => 3991, 'district_id' => 973, 'name' => 'Gunung Putri'],
['id' => 3992, 'district_id' => 973, 'name' => 'Citeureup'],
['id' => 3993, 'district_id' => 973, 'name' => 'Kota Jaya'],
['id' => 3994, 'district_id' => 973, 'name' => 'Gunung Putri Selatan'],

// Desa/Kelurahan di Kecamatan Kota Bogor
['id' => 3995, 'district_id' => 974, 'name' => 'Kota Bogor'],
['id' => 3996, 'district_id' => 974, 'name' => 'Baranangsiang'],
['id' => 3997, 'district_id' => 974, 'name' => 'Ciwaringin'],
['id' => 3998, 'district_id' => 974, 'name' => 'Cibogor'],

// Desa/Kelurahan di Kecamatan Cianjur
['id' => 3999, 'district_id' => 975, 'name' => 'Cianjur'],
['id' => 4000, 'district_id' => 975, 'name' => 'Pacet'],
['id' => 4001, 'district_id' => 975, 'name' => 'Karangtengah'],
['id' => 4002, 'district_id' => 975, 'name' => 'Sukaresmi'],

// Desa/Kelurahan di Kecamatan Cugenang
['id' => 4003, 'district_id' => 976, 'name' => 'Cugenang'],
['id' => 4004, 'district_id' => 976, 'name' => 'Sukajaya'],
['id' => 4005, 'district_id' => 976, 'name' => 'Bojong'],
['id' => 4006, 'district_id' => 976, 'name' => 'Selajambe'],

// Desa/Kelurahan di Kecamatan Pacet
['id' => 4007, 'district_id' => 977, 'name' => 'Pacet'],
['id' => 4008, 'district_id' => 977, 'name' => 'Sukarame'],
['id' => 4009, 'district_id' => 977, 'name' => 'Haurwangi'],
['id' => 4010, 'district_id' => 977, 'name' => 'Cibodas'],

// Desa/Kelurahan di Kecamatan Sukaresmi
['id' => 4011, 'district_id' => 978, 'name' => 'Sukaresmi'],
['id' => 4012, 'district_id' => 978, 'name' => 'Sukaraja'],
['id' => 4013, 'district_id' => 978, 'name' => 'Sukamaju'],
['id' => 4014, 'district_id' => 978, 'name' => 'Cihideung'],

// Desa/Kelurahan di Kecamatan Karangtengah
['id' => 4015, 'district_id' => 979, 'name' => 'Karangtengah'],
['id' => 4016, 'district_id' => 979, 'name' => 'Cibodas'],
['id' => 4017, 'district_id' => 979, 'name' => 'Sukamaju'],
['id' => 4018, 'district_id' => 979, 'name' => 'Cidadap'],

// Desa/Kelurahan di Kecamatan Cirebon
['id' => 4019, 'district_id' => 980, 'name' => 'Cirebon'],
['id' => 4020, 'district_id' => 980, 'name' => 'Kecamatan Tengah'],
['id' => 4021, 'district_id' => 980, 'name' => 'Dukuh'],
['id' => 4022, 'district_id' => 980, 'name' => 'Sumber'],

// Desa/Kelurahan di Kecamatan Sumber
['id' => 4023, 'district_id' => 981, 'name' => 'Sumber'],
['id' => 4024, 'district_id' => 981, 'name' => 'Pondok Gede'],
['id' => 4025, 'district_id' => 981, 'name' => 'Cibadak'],
['id' => 4026, 'district_id' => 981, 'name' => 'Sumberjaya'],

// Desa/Kelurahan di Kecamatan Ciledug
['id' => 4027, 'district_id' => 982, 'name' => 'Ciledug'],
['id' => 4028, 'district_id' => 982, 'name' => 'Cipondoh'],
['id' => 4029, 'district_id' => 982, 'name' => 'Curug'],
['id' => 4030, 'district_id' => 982, 'name' => 'Kebon Jeruk'],

// Desa/Kelurahan di Kecamatan Panguragan
['id' => 4031, 'district_id' => 983, 'name' => 'Panguragan'],
['id' => 4032, 'district_id' => 983, 'name' => 'Patrol'],
['id' => 4033, 'district_id' => 983, 'name' => 'Lemahabang'],
['id' => 4034, 'district_id' => 983, 'name' => 'Tegal Sari'],

// Desa/Kelurahan di Kecamatan Kota Cirebon
['id' => 4035, 'district_id' => 984, 'name' => 'Kota Cirebon'],
['id' => 4036, 'district_id' => 984, 'name' => 'Kejaksan'],
['id' => 4037, 'district_id' => 984, 'name' => 'Panembahan'],
['id' => 4038, 'district_id' => 984, 'name' => 'Kebon Keju'],

// Desa/Kelurahan di Kecamatan Garut
['id' => 4039, 'district_id' => 985, 'name' => 'Garut'],
['id' => 4040, 'district_id' => 985, 'name' => 'Kecamatan Garut Kota'],
['id' => 4041, 'district_id' => 985, 'name' => 'Bubulak'],
['id' => 4042, 'district_id' => 985, 'name' => 'Kota'],

// Desa/Kelurahan di Kecamatan Cihurip
['id' => 4043, 'district_id' => 986, 'name' => 'Cihurip'],
['id' => 4044, 'district_id' => 986, 'name' => 'Cilawu'],
['id' => 4045, 'district_id' => 986, 'name' => 'Karang Pawitan'],
['id' => 4046, 'district_id' => 986, 'name' => 'Pamulihan'],

// Desa/Kelurahan di Kecamatan Cibatu
['id' => 4047, 'district_id' => 987, 'name' => 'Cibatu'],
['id' => 4048, 'district_id' => 987, 'name' => 'Pameungpeuk'],
['id' => 4049, 'district_id' => 987, 'name' => 'Karangpawitan'],
['id' => 4050, 'district_id' => 987, 'name' => 'Cihanjuang'],

// Desa/Kelurahan di Kecamatan Samarang
['id' => 4051, 'district_id' => 988, 'name' => 'Samarang'],
['id' => 4052, 'district_id' => 988, 'name' => 'Cigedug'],
['id' => 4053, 'district_id' => 988, 'name' => 'Sukawening'],
['id' => 4054, 'district_id' => 988, 'name' => 'Karangwangi'],

// Desa/Kelurahan di Kecamatan Kota Garut
['id' => 4055, 'district_id' => 989, 'name' => 'Kota Garut'],
['id' => 4056, 'district_id' => 989, 'name' => 'Cibunar'],
['id' => 4057, 'district_id' => 989, 'name' => 'Margawati'],
['id' => 4058, 'district_id' => 989, 'name' => 'Garut Kota'],

// Desa/Kelurahan di Kecamatan Indramayu
['id' => 4059, 'district_id' => 990, 'name' => 'Indramayu'],
['id' => 4060, 'district_id' => 990, 'name' => 'Jatibarang'],
['id' => 4061, 'district_id' => 990, 'name' => 'Kroya'],
['id' => 4062, 'district_id' => 990, 'name' => 'Bongas'],

// Desa/Kelurahan di Kecamatan Cikedung
['id' => 4063, 'district_id' => 991, 'name' => 'Cikedung'],
['id' => 4064, 'district_id' => 991, 'name' => 'Sumber'],
['id' => 4065, 'district_id' => 991, 'name' => 'Kalisapu'],
['id' => 4066, 'district_id' => 991, 'name' => 'Rengasdengklok'],

// Desa/Kelurahan di Kecamatan Kedokan Bunder
['id' => 4067, 'district_id' => 992, 'name' => 'Kedokan Bunder'],
['id' => 4068, 'district_id' => 992, 'name' => 'Arjawinangun'],
['id' => 4069, 'district_id' => 992, 'name' => 'Bungbulang'],

// Desa/Kelurahan di Kecamatan Sukra
['id' => 4070, 'district_id' => 993, 'name' => 'Sukra'],
['id' => 4071, 'district_id' => 993, 'name' => 'Karangmangu'],
['id' => 4072, 'district_id' => 993, 'name' => 'Bojonegara'],

// Desa/Kelurahan di Kecamatan Kota Indramayu
['id' => 4073, 'district_id' => 994, 'name' => 'Kota Indramayu'],
['id' => 4074, 'district_id' => 994, 'name' => 'Rengasdengklok'],
['id' => 4075, 'district_id' => 994, 'name' => 'Cikedung'],
['id' => 4076, 'district_id' => 994, 'name' => 'Rancamaya'],

// Desa/Kelurahan di Kecamatan Karawang
['id' => 4077, 'district_id' => 995, 'name' => 'Karawang'],
['id' => 4078, 'district_id' => 995, 'name' => 'Tanjungpura'],
['id' => 4079, 'district_id' => 995, 'name' => 'Pekandangan'],

// Desa/Kelurahan di Kecamatan Cikampek
['id' => 4080, 'district_id' => 996, 'name' => 'Cikampek'],
['id' => 4081, 'district_id' => 996, 'name' => 'Purwasari'],
['id' => 4082, 'district_id' => 996, 'name' => 'Karawang Timur'],

// Desa/Kelurahan di Kecamatan Kota Karawang
['id' => 4083, 'district_id' => 997, 'name' => 'Kota Karawang'],
['id' => 4084, 'district_id' => 997, 'name' => 'Telukjambe'],
['id' => 4085, 'district_id' => 997, 'name' => 'Karawang Barat'],

// Desa/Kelurahan di Kecamatan Rengasdengklok
['id' => 4086, 'district_id' => 998, 'name' => 'Rengasdengklok'],
['id' => 4087, 'district_id' => 998, 'name' => 'Mekarjaya'],
['id' => 4088, 'district_id' => 998, 'name' => 'Kaliurang'],

// Desa/Kelurahan di Kecamatan Telukjambe
['id' => 4089, 'district_id' => 999, 'name' => 'Telukjambe'],
['id' => 4090, 'district_id' => 999, 'name' => 'Karawang Timur'],
['id' => 4091, 'district_id' => 999, 'name' => 'Karawang Barat'],

// Desa/Kelurahan di Kecamatan Kuningan
['id' => 4092, 'district_id' => 1000, 'name' => 'Kuningan'],
['id' => 4093, 'district_id' => 1000, 'name' => 'Cibingbin'],
['id' => 4094, 'district_id' => 1000, 'name' => 'Cigugur'],
// Desa/Kelurahan di Kecamatan Cibingbin
['id' => 4095, 'district_id' => 1001, 'name' => 'Cibingbin'],
['id' => 4096, 'district_id' => 1001, 'name' => 'Cikijing'],
['id' => 4097, 'district_id' => 1001, 'name' => 'Kadu'],
['id' => 4098, 'district_id' => 1001, 'name' => 'Limbangan'],

// Desa/Kelurahan di Kecamatan Cilimus
['id' => 4099, 'district_id' => 1002, 'name' => 'Cilimus'],
['id' => 4100, 'district_id' => 1002, 'name' => 'Cisurupan'],
['id' => 4101, 'district_id' => 1002, 'name' => 'Kadipaten'],

// Desa/Kelurahan di Kecamatan Kadugede
['id' => 4102, 'district_id' => 1003, 'name' => 'Kadugede'],
['id' => 4103, 'district_id' => 1003, 'name' => 'Sumberjaya'],
['id' => 4104, 'district_id' => 1003, 'name' => 'Bojong'],

// Desa/Kelurahan di Kecamatan Kota Kuningan
['id' => 4105, 'district_id' => 1004, 'name' => 'Kota Kuningan'],
['id' => 4106, 'district_id' => 1004, 'name' => 'Cipari'],
['id' => 4107, 'district_id' => 1004, 'name' => 'Ciawigebang'],

// Desa/Kelurahan di Kecamatan Majalengka
['id' => 4108, 'district_id' => 1005, 'name' => 'Majalengka'],
['id' => 4109, 'district_id' => 1005, 'name' => 'Ligung'],
['id' => 4110, 'district_id' => 1005, 'name' => 'Cigasong'],

// Desa/Kelurahan di Kecamatan Cikijing
['id' => 4111, 'district_id' => 1006, 'name' => 'Cikijing'],
['id' => 4112, 'district_id' => 1006, 'name' => 'Sukahaji'],
['id' => 4113, 'district_id' => 1006, 'name' => 'Simpang'],

// Desa/Kelurahan di Kecamatan Sukahaji
['id' => 4114, 'district_id' => 1007, 'name' => 'Sukahaji'],
['id' => 4115, 'district_id' => 1007, 'name' => 'Kadipaten'],
['id' => 4116, 'district_id' => 1007, 'name' => 'Cigugur'],

// Desa/Kelurahan di Kecamatan Kota Majalengka
['id' => 4117, 'district_id' => 1008, 'name' => 'Kota Majalengka'],
['id' => 4118, 'district_id' => 1008, 'name' => 'Majasetra'],
['id' => 4119, 'district_id' => 1008, 'name' => 'Majalengka Utara'],

// Desa/Kelurahan di Kecamatan Jatiwangi
['id' => 4120, 'district_id' => 1009, 'name' => 'Jatiwangi'],
['id' => 4121, 'district_id' => 1009, 'name' => 'Sibunut'],
['id' => 4122, 'district_id' => 1009, 'name' => 'Sumberjaya'],

// Desa/Kelurahan di Kecamatan Purwakarta
['id' => 4123, 'district_id' => 1010, 'name' => 'Purwakarta'],
['id' => 4124, 'district_id' => 1010, 'name' => 'Plered'],
['id' => 4125, 'district_id' => 1010, 'name' => 'Darangdan'],

// Desa/Kelurahan di Kecamatan Bungursari
['id' => 4126, 'district_id' => 1011, 'name' => 'Bungursari'],
['id' => 4127, 'district_id' => 1011, 'name' => 'Ciwangi'],
['id' => 4128, 'district_id' => 1011, 'name' => 'Cijambe'],

// Desa/Kelurahan di Kecamatan Kota Purwakarta
['id' => 4129, 'district_id' => 1012, 'name' => 'Kota Purwakarta'],
['id' => 4130, 'district_id' => 1012, 'name' => 'Tegalwaru'],
['id' => 4131, 'district_id' => 1012, 'name' => 'Cibogo'],

// Desa/Kelurahan di Kecamatan Darangdan
['id' => 4132, 'district_id' => 1013, 'name' => 'Darangdan'],
['id' => 4133, 'district_id' => 1013, 'name' => 'Tegalwaru'],
['id' => 4134, 'district_id' => 1013, 'name' => 'Puspa'],

// Desa/Kelurahan di Kecamatan Plered
['id' => 4135, 'district_id' => 1014, 'name' => 'Plered'],
['id' => 4136, 'district_id' => 1014, 'name' => 'Soreang'],
['id' => 4137, 'district_id' => 1014, 'name' => 'Pangkalan'],

// Desa/Kelurahan di Kecamatan Subang
['id' => 4138, 'district_id' => 1015, 'name' => 'Subang'],
['id' => 4139, 'district_id' => 1015, 'name' => 'Cisurupan'],
['id' => 4140, 'district_id' => 1015, 'name' => 'Cijambe'],

// Desa/Kelurahan di Kecamatan Pabuaran
['id' => 4141, 'district_id' => 1016, 'name' => 'Pabuaran'],
['id' => 4142, 'district_id' => 1016, 'name' => 'Cigebog'],
['id' => 4143, 'district_id' => 1016, 'name' => 'Kampung Baru'],

// Desa/Kelurahan di Kecamatan Kota Subang
['id' => 4144, 'district_id' => 1017, 'name' => 'Kota Subang'],
['id' => 4145, 'district_id' => 1017, 'name' => 'Cikadu'],
['id' => 4146, 'district_id' => 1017, 'name' => 'Cipanas'],

// Desa/Kelurahan di Kecamatan Cijambe
['id' => 4147, 'district_id' => 1018, 'name' => 'Cijambe'],
['id' => 4148, 'district_id' => 1018, 'name' => 'Ciherang'],
['id' => 4149, 'district_id' => 1018, 'name' => 'Cigebog'],

// Desa/Kelurahan di Kecamatan Cisalak
['id' => 4150, 'district_id' => 1019, 'name' => 'Cisalak'],
['id' => 4151, 'district_id' => 1019, 'name' => 'Cijegol'],
['id' => 4152, 'district_id' => 1019, 'name' => 'Cigugur'],

// Desa/Kelurahan di Kecamatan Sukabumi
['id' => 4153, 'district_id' => 1020, 'name' => 'Sukabumi'],
['id' => 4154, 'district_id' => 1020, 'name' => 'Sukarame'],
['id' => 4155, 'district_id' => 1020, 'name' => 'Parung'],
// Desa/Kelurahan di Kecamatan Cisaat
['id' => 4156, 'district_id' => 1021, 'name' => 'Cisaat'],
['id' => 4157, 'district_id' => 1021, 'name' => 'Cikalong'],
['id' => 4158, 'district_id' => 1021, 'name' => 'Pasir Ipis'],

// Desa/Kelurahan di Kecamatan Cikembar
['id' => 4159, 'district_id' => 1022, 'name' => 'Cikembar'],
['id' => 4160, 'district_id' => 1022, 'name' => 'Cijambe'],
['id' => 4161, 'district_id' => 1022, 'name' => 'Gunung Medang'],

// Desa/Kelurahan di Kecamatan Kota Sukabumi
['id' => 4162, 'district_id' => 1023, 'name' => 'Kota Sukabumi'],
['id' => 4163, 'district_id' => 1023, 'name' => 'Cisarua'],
['id' => 4164, 'district_id' => 1023, 'name' => 'Kebonpedes'],

// Desa/Kelurahan di Kecamatan Cikidang
['id' => 4165, 'district_id' => 1024, 'name' => 'Cikidang'],
['id' => 4166, 'district_id' => 1024, 'name' => 'Pasir Sembung'],
['id' => 4167, 'district_id' => 1024, 'name' => 'Citarik'],

// Desa/Kelurahan di Kecamatan Sumedang
['id' => 4168, 'district_id' => 1025, 'name' => 'Sumedang'],
['id' => 4169, 'district_id' => 1025, 'name' => 'Tanjung Sari'],
['id' => 4170, 'district_id' => 1025, 'name' => 'Cimalaka'],

// Desa/Kelurahan di Kecamatan Jatinangor
['id' => 4171, 'district_id' => 1026, 'name' => 'Jatinangor'],
['id' => 4172, 'district_id' => 1026, 'name' => 'Cimanggung'],
['id' => 4173, 'district_id' => 1026, 'name' => 'Cikijing'],

// Desa/Kelurahan di Kecamatan Kota Sumedang
['id' => 4174, 'district_id' => 1027, 'name' => 'Kota Sumedang'],
['id' => 4175, 'district_id' => 1027, 'name' => 'Situraja'],
['id' => 4176, 'district_id' => 1027, 'name' => 'Cimanggung'],

// Desa/Kelurahan di Kecamatan Tanjungsari
['id' => 4177, 'district_id' => 1028, 'name' => 'Tanjungsari'],
['id' => 4178, 'district_id' => 1028, 'name' => 'Sukarame'],
['id' => 4179, 'district_id' => 1028, 'name' => 'Rancabango'],

// Desa/Kelurahan di Kecamatan Darmaraja
['id' => 4180, 'district_id' => 1029, 'name' => 'Darmaraja'],
['id' => 4181, 'district_id' => 1029, 'name' => 'Tanjungsari'],
['id' => 4182, 'district_id' => 1029, 'name' => 'Wado'],

// Desa/Kelurahan di Kecamatan Tasikmalaya
['id' => 4183, 'district_id' => 1030, 'name' => 'Tasikmalaya'],
['id' => 4184, 'district_id' => 1030, 'name' => 'Indihiang'],
['id' => 4185, 'district_id' => 1030, 'name' => 'Mangkubumi'],

// Desa/Kelurahan di Kecamatan Cisayong
['id' => 4186, 'district_id' => 1031, 'name' => 'Cisayong'],
['id' => 4187, 'district_id' => 1031, 'name' => 'Ciwuni'],
['id' => 4188, 'district_id' => 1031, 'name' => 'Sumberbango'],

// Desa/Kelurahan di Kecamatan Ciawi
['id' => 4189, 'district_id' => 1032, 'name' => 'Ciawi'],
['id' => 4190, 'district_id' => 1032, 'name' => 'Cijambe'],
['id' => 4191, 'district_id' => 1032, 'name' => 'Tanjungsari'],

// Desa/Kelurahan di Kecamatan Kota Tasikmalaya
['id' => 4192, 'district_id' => 1033, 'name' => 'Kota Tasikmalaya'],
['id' => 4193, 'district_id' => 1033, 'name' => 'Mangkubumi'],
['id' => 4194, 'district_id' => 1033, 'name' => 'Indihiang'],

// Desa/Kelurahan di Kecamatan Singaparna
['id' => 4195, 'district_id' => 1034, 'name' => 'Singaparna'],
['id' => 4196, 'district_id' => 1034, 'name' => 'Mangunreja'],
['id' => 4197, 'district_id' => 1034, 'name' => 'Cijeungjing'],

// Desa/Kelurahan di Kecamatan Bandung
['id' => 4198, 'district_id' => 1035, 'name' => 'Bandung'],
['id' => 4199, 'district_id' => 1035, 'name' => 'Cidadap'],
['id' => 4200, 'district_id' => 1035, 'name' => 'Cibiru'],

// Desa/Kelurahan di Kecamatan Cidadap
['id' => 4201, 'district_id' => 1036, 'name' => 'Cidadap'],
['id' => 4202, 'district_id' => 1036, 'name' => 'Cikutra'],
['id' => 4203, 'district_id' => 1036, 'name' => 'Sukapura'],

// Desa/Kelurahan di Kecamatan Cibiru
['id' => 4204, 'district_id' => 1037, 'name' => 'Cibiru'],
['id' => 4205, 'district_id' => 1037, 'name' => 'Kopo'],
['id' => 4206, 'district_id' => 1037, 'name' => 'Cimenyan'],

// Desa/Kelurahan di Kecamatan Kota Bandung
['id' => 4207, 'district_id' => 1038, 'name' => 'Kota Bandung'],
['id' => 4208, 'district_id' => 1038, 'name' => 'Cikudap'],
['id' => 4209, 'district_id' => 1038, 'name' => 'Mandalajati'],

// Desa/Kelurahan di Kecamatan Cileunyi
['id' => 4210, 'district_id' => 1039, 'name' => 'Cileunyi'],
['id' => 4211, 'district_id' => 1039, 'name' => 'Cimekar'],
['id' => 4212, 'district_id' => 1039, 'name' => 'Cibiru'],
// Desa/Kelurahan di Kecamatan Bekasi
['id' => 4213, 'district_id' => 1040, 'name' => 'Bekasi'],
['id' => 4214, 'district_id' => 1040, 'name' => 'Cikarang'],
['id' => 4215, 'district_id' => 1040, 'name' => 'Medan Satria'],
// Desa/Kelurahan di Kecamatan Cikarang
['id' => 4216, 'district_id' => 1041, 'name' => 'Cikarang Kota'],
['id' => 4217, 'district_id' => 1041, 'name' => 'Cikarang Utara'],
['id' => 4218, 'district_id' => 1041, 'name' => 'Cikarang Selatan'],

// Desa/Kelurahan di Kecamatan Kota Bekasi
['id' => 4219, 'district_id' => 1042, 'name' => 'Bekasi Selatan'],
['id' => 4220, 'district_id' => 1042, 'name' => 'Bekasi Barat'],
['id' => 4221, 'district_id' => 1042, 'name' => 'Bekasi Timur'],
['id' => 4222, 'district_id' => 1042, 'name' => 'Bekasi Utara'],

// Desa/Kelurahan di Kecamatan Cibitung
['id' => 4223, 'district_id' => 1043, 'name' => 'Cibitung'],
['id' => 4224, 'district_id' => 1043, 'name' => 'Mangunjaya'],
['id' => 4225, 'district_id' => 1043, 'name' => 'Karangbahagia'],

// Desa/Kelurahan di Kecamatan Babelan
['id' => 4226, 'district_id' => 1044, 'name' => 'Babelan'],
['id' => 4227, 'district_id' => 1044, 'name' => 'Sukadami'],
['id' => 4228, 'district_id' => 1044, 'name' => 'Segara Makmur'],
// Desa/Kelurahan di Kecamatan Bogor
['id' => 4229, 'district_id' => 1045, 'name' => 'Baranangsiang'],
['id' => 4230, 'district_id' => 1045, 'name' => 'Ciawi'],
['id' => 4231, 'district_id' => 1045, 'name' => 'Tanah Sareal'],

// Desa/Kelurahan di Kecamatan Cibinong
['id' => 4232, 'district_id' => 1046, 'name' => 'Cibinong'],
['id' => 4233, 'district_id' => 1046, 'name' => 'Nagrak'],
['id' => 4234, 'district_id' => 1046, 'name' => 'Citayam'],

// Desa/Kelurahan di Kecamatan Kota Bogor
['id' => 4235, 'district_id' => 1047, 'name' => 'Bogor Tengah'],
['id' => 4236, 'district_id' => 1047, 'name' => 'Bogor Utara'],
['id' => 4237, 'district_id' => 1047, 'name' => 'Bogor Selatan'],

// Desa/Kelurahan di Kecamatan Gunung Putri
['id' => 4238, 'district_id' => 1048, 'name' => 'Gunung Putri'],
['id' => 4239, 'district_id' => 1048, 'name' => 'Tugu Selatan'],
['id' => 4240, 'district_id' => 1048, 'name' => 'Kampung Baru'],

// Desa/Kelurahan di Kecamatan Ciampea
['id' => 4241, 'district_id' => 1049, 'name' => 'Ciampea'],
['id' => 4242, 'district_id' => 1049, 'name' => 'Cimandala'],
['id' => 4243, 'district_id' => 1049, 'name' => 'Sukaraja'],

// Desa/Kelurahan di Kecamatan Cimahi
['id' => 4244, 'district_id' => 1050, 'name' => 'Cimahi Tengah'],
['id' => 4245, 'district_id' => 1050, 'name' => 'Cimahi Selatan'],
['id' => 4246, 'district_id' => 1050, 'name' => 'Cimahi Utara'],

// Desa/Kelurahan di Kecamatan Cimahi Selatan
['id' => 4247, 'district_id' => 1051, 'name' => 'Cimahi Selatan'],
['id' => 4248, 'district_id' => 1051, 'name' => 'Ciwangun'],
['id' => 4249, 'district_id' => 1051, 'name' => 'Cibeureum'],

// Desa/Kelurahan di Kecamatan Cimahi Utara
['id' => 4250, 'district_id' => 1052, 'name' => 'Cimahi Utara'],
['id' => 4251, 'district_id' => 1052, 'name' => 'Cibeber'],
['id' => 4252, 'district_id' => 1052, 'name' => 'Cimapag'],

// Desa/Kelurahan di Kecamatan Kota Cimahi
['id' => 4253, 'district_id' => 1053, 'name' => 'Cimahi Kota'],
['id' => 4254, 'district_id' => 1053, 'name' => 'Cipageran'],
['id' => 4255, 'district_id' => 1053, 'name' => 'Cisarua'],

// Desa/Kelurahan di Kecamatan Cimahi Tengah
['id' => 4256, 'district_id' => 1054, 'name' => 'Cimahi Tengah'],
['id' => 4257, 'district_id' => 1054, 'name' => 'Dago'],
['id' => 4258, 'district_id' => 1054, 'name' => 'Cimahi Tengah Raya'],

// Desa/Kelurahan di Kecamatan Cirebon
['id' => 4259, 'district_id' => 1055, 'name' => 'Cirebon'],
['id' => 4260, 'district_id' => 1055, 'name' => 'Panjunan'],
['id' => 4261, 'district_id' => 1055, 'name' => 'Pegambiran'],

// Desa/Kelurahan di Kecamatan Sumber
['id' => 4262, 'district_id' => 1056, 'name' => 'Sumber'],
['id' => 4263, 'district_id' => 1056, 'name' => 'Sindang Laut'],
['id' => 4264, 'district_id' => 1056, 'name' => 'Sukapura'],

// Desa/Kelurahan di Kecamatan Kota Cirebon
['id' => 4265, 'district_id' => 1057, 'name' => 'Kota Cirebon'],
['id' => 4266, 'district_id' => 1057, 'name' => 'Kesambi'],
['id' => 4267, 'district_id' => 1057, 'name' => 'Harjamukti'],

// Desa/Kelurahan di Kecamatan Ciledug
['id' => 4268, 'district_id' => 1058, 'name' => 'Ciledug'],
['id' => 4269, 'district_id' => 1058, 'name' => 'Kujangsari'],
['id' => 4270, 'district_id' => 1058, 'name' => 'Bojonegoro'],

// Desa/Kelurahan di Kecamatan Panguragan
['id' => 4271, 'district_id' => 1059, 'name' => 'Panguragan'],
['id' => 4272, 'district_id' => 1059, 'name' => 'Cengkrong'],
['id' => 4273, 'district_id' => 1059, 'name' => 'Waringin'],

// Desa/Kelurahan di Kecamatan Kedawung
['id' => 4274, 'district_id' => 1060, 'name' => 'Kedawung'],
['id' => 4275, 'district_id' => 1060, 'name' => 'Cibuaya'],
['id' => 4276, 'district_id' => 1060, 'name' => 'Jatiwangi'],
// Desa/Kelurahan di Kecamatan Arjawinangun
['id' => 4277, 'district_id' => 1061, 'name' => 'Arjawinangun'],
['id' => 4278, 'district_id' => 1061, 'name' => 'Gegarungan'],
['id' => 4279, 'district_id' => 1061, 'name' => 'Sidamulya'],

// Desa/Kelurahan di Kecamatan Weru
['id' => 4280, 'district_id' => 1062, 'name' => 'Weru'],
['id' => 4281, 'district_id' => 1062, 'name' => 'Bojong'],
['id' => 4282, 'district_id' => 1062, 'name' => 'Rancasari'],

// Desa/Kelurahan di Kecamatan Plumbon
['id' => 4283, 'district_id' => 1063, 'name' => 'Plumbon'],
['id' => 4284, 'district_id' => 1063, 'name' => 'Palimanan'],
['id' => 4285, 'district_id' => 1063, 'name' => 'Citemu'],

// Desa/Kelurahan di Kecamatan Palimanan
['id' => 4286, 'district_id' => 1064, 'name' => 'Palimanan'],
['id' => 4287, 'district_id' => 1064, 'name' => 'Dukuh'],
['id' => 4288, 'district_id' => 1064, 'name' => 'Gegerkalong'],

// Desa/Kelurahan di Kecamatan Beji
['id' => 4289, 'district_id' => 1065, 'name' => 'Beji'],
['id' => 4290, 'district_id' => 1065, 'name' => 'Cisalak'],
['id' => 4291, 'district_id' => 1065, 'name' => 'Limo'],

// Desa/Kelurahan di Kecamatan Cimanggis
['id' => 4292, 'district_id' => 1066, 'name' => 'Cimanggis'],
['id' => 4293, 'district_id' => 1066, 'name' => 'Tanah Baru'],
['id' => 4294, 'district_id' => 1066, 'name' => 'Cipayung'],

// Desa/Kelurahan di Kecamatan Cinere
['id' => 4295, 'district_id' => 1067, 'name' => 'Cinere'],
['id' => 4296, 'district_id' => 1067, 'name' => 'Lenteng Agung'],
['id' => 4297, 'district_id' => 1067, 'name' => 'Pangkalan Jati'],

// Desa/Kelurahan di Kecamatan Limo
['id' => 4298, 'district_id' => 1068, 'name' => 'Limo'],
['id' => 4299, 'district_id' => 1068, 'name' => 'Setu'],
['id' => 4300, 'district_id' => 1068, 'name' => 'Pondok Rangon'],

// Desa/Kelurahan di Kecamatan Pancoran Mas
['id' => 4301, 'district_id' => 1069, 'name' => 'Pancoran Mas'],
['id' => 4302, 'district_id' => 1069, 'name' => 'Cilangkap'],
['id' => 4303, 'district_id' => 1069, 'name' => 'Cilodong'],

// Desa/Kelurahan di Kecamatan Baros
['id' => 4304, 'district_id' => 1070, 'name' => 'Baros'],
['id' => 4305, 'district_id' => 1070, 'name' => 'Kota Baru'],
['id' => 4306, 'district_id' => 1070, 'name' => 'Cisarua'],

// Desa/Kelurahan di Kecamatan Cikole
['id' => 4307, 'district_id' => 1071, 'name' => 'Cikole'],
['id' => 4308, 'district_id' => 1071, 'name' => 'Pakuan'],
['id' => 4309, 'district_id' => 1071, 'name' => 'Palasari'],

// Desa/Kelurahan di Kecamatan Citamiang
['id' => 4310, 'district_id' => 1072, 'name' => 'Citamiang'],
['id' => 4311, 'district_id' => 1072, 'name' => 'Sukasari'],
['id' => 4312, 'district_id' => 1072, 'name' => 'Panumbangan'],

// Desa/Kelurahan di Kecamatan Gunung Puyuh
['id' => 4313, 'district_id' => 1073, 'name' => 'Gunung Puyuh'],
['id' => 4314, 'district_id' => 1073, 'name' => 'Sindangjaya'],
['id' => 4315, 'district_id' => 1073, 'name' => 'Cimanggu'],

// Desa/Kelurahan di Kecamatan Warudoyong
['id' => 4316, 'district_id' => 1074, 'name' => 'Warudoyong'],
['id' => 4317, 'district_id' => 1074, 'name' => 'Bojong'],
['id' => 4318, 'district_id' => 1074, 'name' => 'Cintarasa'],

// Desa/Kelurahan di Kecamatan Cihideung
['id' => 4319, 'district_id' => 1075, 'name' => 'Cihideung'],
['id' => 4320, 'district_id' => 1075, 'name' => 'Kebon Kelapa'],
['id' => 4321, 'district_id' => 1075, 'name' => 'Pamoyanan'],

// Desa/Kelurahan di Kecamatan Cipedes
['id' => 4322, 'district_id' => 1076, 'name' => 'Cipedes'],
['id' => 4323, 'district_id' => 1076, 'name' => 'Cipari'],
['id' => 4324, 'district_id' => 1076, 'name' => 'Kebon Nanas'],

// Desa/Kelurahan di Kecamatan Indihiang
['id' => 4325, 'district_id' => 1077, 'name' => 'Indihiang'],
['id' => 4326, 'district_id' => 1077, 'name' => 'Kebon Cikal'],
['id' => 4327, 'district_id' => 1077, 'name' => 'Tajur'],

// Desa/Kelurahan di Kecamatan Kawalu
['id' => 4328, 'district_id' => 1078, 'name' => 'Kawalu'],
['id' => 4329, 'district_id' => 1078, 'name' => 'Puhun'],
['id' => 4330, 'district_id' => 1078, 'name' => 'Sukabumi'],

// Desa/Kelurahan di Kecamatan Mangkubumi
['id' => 4331, 'district_id' => 1079, 'name' => 'Mangkubumi'],
['id' => 4332, 'district_id' => 1079, 'name' => 'Sukamantri'],
['id' => 4333, 'district_id' => 1079, 'name' => 'Karanganyar'],

// Desa/Kelurahan di Kecamatan Banjarmangu
['id' => 4334, 'district_id' => 1080, 'name' => 'Banjarmangu'],
['id' => 4335, 'district_id' => 1080, 'name' => 'Tanjung'],
['id' => 4336, 'district_id' => 1080, 'name' => 'Batu Ampar'],
// Desa/Kelurahan di Kecamatan Banjarnegara
['id' => 4337, 'district_id' => 1081, 'name' => 'Banjarnegara'],
['id' => 4338, 'district_id' => 1081, 'name' => 'Pagentan'],
['id' => 4339, 'district_id' => 1081, 'name' => 'Karangkobar'],

// Desa/Kelurahan di Kecamatan Batur
['id' => 4340, 'district_id' => 1082, 'name' => 'Batur'],
['id' => 4341, 'district_id' => 1082, 'name' => 'Wangon'],
['id' => 4342, 'district_id' => 1082, 'name' => 'Kasenjono'],

// Desa/Kelurahan di Kecamatan Kalibening
['id' => 4343, 'district_id' => 1083, 'name' => 'Kalibening'],
['id' => 4344, 'district_id' => 1083, 'name' => 'Kuwu'],
['id' => 4345, 'district_id' => 1083, 'name' => 'Cigugur'],

// Desa/Kelurahan di Kecamatan Karangkobar
['id' => 4346, 'district_id' => 1084, 'name' => 'Karangkobar'],
['id' => 4347, 'district_id' => 1084, 'name' => 'Sukoharjo'],
['id' => 4348, 'district_id' => 1084, 'name' => 'Banjarsari'],

// Desa/Kelurahan di Kecamatan Ajibarang
['id' => 4349, 'district_id' => 1085, 'name' => 'Ajibarang'],
['id' => 4350, 'district_id' => 1085, 'name' => 'Tunggul'],
['id' => 4351, 'district_id' => 1085, 'name' => 'Gumbreg'],

// Desa/Kelurahan di Kecamatan Banyumas
['id' => 4352, 'district_id' => 1086, 'name' => 'Banyumas'],
['id' => 4353, 'district_id' => 1086, 'name' => 'Sumbang'],
['id' => 4354, 'district_id' => 1086, 'name' => 'Kebumen'],

// Desa/Kelurahan di Kecamatan Baturaden
['id' => 4355, 'district_id' => 1087, 'name' => 'Baturaden'],
['id' => 4356, 'district_id' => 1087, 'name' => 'Karangkobar'],
['id' => 4357, 'district_id' => 1087, 'name' => 'Gunung Slamet'],

// Desa/Kelurahan di Kecamatan Cilongok
['id' => 4358, 'district_id' => 1088, 'name' => 'Cilongok'],
['id' => 4359, 'district_id' => 1088, 'name' => 'Cipaku'],
['id' => 4360, 'district_id' => 1088, 'name' => 'Ciawi'],

// Desa/Kelurahan di Kecamatan Gumelar
['id' => 4361, 'district_id' => 1089, 'name' => 'Gumelar'],
['id' => 4362, 'district_id' => 1089, 'name' => 'Purwokerto'],
['id' => 4363, 'district_id' => 1089, 'name' => 'Banyumudal'],

// Desa/Kelurahan di Kecamatan Bandar
['id' => 4364, 'district_id' => 1090, 'name' => 'Bandar'],
['id' => 4365, 'district_id' => 1090, 'name' => 'Mulyorejo'],
['id' => 4366, 'district_id' => 1090, 'name' => 'Sendang'],

// Desa/Kelurahan di Kecamatan Batang
['id' => 4367, 'district_id' => 1091, 'name' => 'Batang'],
['id' => 4368, 'district_id' => 1091, 'name' => 'Kertosono'],
['id' => 4369, 'district_id' => 1091, 'name' => 'Bantur'],

// Desa/Kelurahan di Kecamatan Bawang
['id' => 4370, 'district_id' => 1092, 'name' => 'Bawang'],
['id' => 4371, 'district_id' => 1092, 'name' => 'Brambang'],
['id' => 4372, 'district_id' => 1092, 'name' => 'Kretek'],

// Desa/Kelurahan di Kecamatan Blado
['id' => 4373, 'district_id' => 1093, 'name' => 'Blado'],
['id' => 4374, 'district_id' => 1093, 'name' => 'Sumberrejo'],
['id' => 4375, 'district_id' => 1093, 'name' => 'Kalisalak'],

// Desa/Kelurahan di Kecamatan Gringsing
['id' => 4376, 'district_id' => 1094, 'name' => 'Gringsing'],
['id' => 4377, 'district_id' => 1094, 'name' => 'Kemiri'],
['id' => 4378, 'district_id' => 1094, 'name' => 'Gadungan'],
// Desa/Kelurahan di Kecamatan Blora
['id' => 4379, 'district_id' => 1095, 'name' => 'Blora'],
['id' => 4380, 'district_id' => 1095, 'name' => 'Japah'],
['id' => 4381, 'district_id' => 1095, 'name' => 'Bogorejo'],

// Desa/Kelurahan di Kecamatan Bogorejo
['id' => 4382, 'district_id' => 1096, 'name' => 'Bogorejo'],
['id' => 4383, 'district_id' => 1096, 'name' => 'Girikerto'],
['id' => 4384, 'district_id' => 1096, 'name' => 'Jatisrono'],

// Desa/Kelurahan di Kecamatan Cepu
['id' => 4385, 'district_id' => 1097, 'name' => 'Cepu'],
['id' => 4386, 'district_id' => 1097, 'name' => 'Cendono'],
['id' => 4387, 'district_id' => 1097, 'name' => 'Ngepeh'],

// Desa/Kelurahan di Kecamatan Japah
['id' => 4388, 'district_id' => 1098, 'name' => 'Japah'],
['id' => 4389, 'district_id' => 1098, 'name' => 'Banjarejo'],
['id' => 4390, 'district_id' => 1098, 'name' => 'Ngrawoh'],

// Desa/Kelurahan di Kecamatan Jati
['id' => 4391, 'district_id' => 1099, 'name' => 'Jati'],
['id' => 4392, 'district_id' => 1099, 'name' => 'Kunduran'],
['id' => 4393, 'district_id' => 1099, 'name' => 'Kalisari'],

// Desa/Kelurahan di Kecamatan Ampel
['id' => 4394, 'district_id' => 1100, 'name' => 'Ampel'],
['id' => 4395, 'district_id' => 1100, 'name' => 'Pucang'],
['id' => 4396, 'district_id' => 1100, 'name' => 'Mranggen'],

// Desa/Kelurahan di Kecamatan Andong
['id' => 4397, 'district_id' => 1101, 'name' => 'Andong'],
['id' => 4398, 'district_id' => 1101, 'name' => 'Kedunglengkong'],
['id' => 4399, 'district_id' => 1101, 'name' => 'Kunti'],

// Desa/Kelurahan di Kecamatan Banyudono
['id' => 4400, 'district_id' => 1102, 'name' => 'Banyudono'],
['id' => 4401, 'district_id' => 1102, 'name' => 'Dukuh'],
['id' => 4402, 'district_id' => 1102, 'name' => 'Jembungan'],

// Desa/Kelurahan di Kecamatan Boyolali
['id' => 4403, 'district_id' => 1103, 'name' => 'Boyolali'],
['id' => 4404, 'district_id' => 1103, 'name' => 'Banaran'],
['id' => 4405, 'district_id' => 1103, 'name' => 'Pulisen'],

// Desa/Kelurahan di Kecamatan Cepogo
['id' => 4406, 'district_id' => 1104, 'name' => 'Cepogo'],
['id' => 4407, 'district_id' => 1104, 'name' => 'Genting'],
['id' => 4408, 'district_id' => 1104, 'name' => 'Jombong'],

// Desa/Kelurahan di Kecamatan Banjarharjo
['id' => 4409, 'district_id' => 1105, 'name' => 'Banjarharjo'],
['id' => 4410, 'district_id' => 1105, 'name' => 'Ciawi'],
['id' => 4411, 'district_id' => 1105, 'name' => 'Cibendung'],

// Desa/Kelurahan di Kecamatan Bantarkawung
['id' => 4412, 'district_id' => 1106, 'name' => 'Bantarkawung'],
['id' => 4413, 'district_id' => 1106, 'name' => 'Banjarsari'],
['id' => 4414, 'district_id' => 1106, 'name' => 'Cibentang'],

// Desa/Kelurahan di Kecamatan Brebes
['id' => 4415, 'district_id' => 1107, 'name' => 'Brebes'],
['id' => 4416, 'district_id' => 1107, 'name' => 'Gandasuli'],
['id' => 4417, 'district_id' => 1107, 'name' => 'Limbangan Kulon'],

// Desa/Kelurahan di Kecamatan Bulakamba
['id' => 4418, 'district_id' => 1108, 'name' => 'Bulakamba'],
['id' => 4419, 'district_id' => 1108, 'name' => 'Bangsri'],
['id' => 4420, 'district_id' => 1108, 'name' => 'Banjaratma'],

// Desa/Kelurahan di Kecamatan Bumiayu
['id' => 4421, 'district_id' => 1109, 'name' => 'Bumiayu'],
['id' => 4422, 'district_id' => 1109, 'name' => 'Adiwerna'],
['id' => 4423, 'district_id' => 1109, 'name' => 'Kalierang'],

// Desa/Kelurahan di Kecamatan Adipala
['id' => 4424, 'district_id' => 1110, 'name' => 'Adipala'],
['id' => 4425, 'district_id' => 1110, 'name' => 'Bunton'],
['id' => 4426, 'district_id' => 1110, 'name' => 'Gombolharjo'],

// Desa/Kelurahan di Kecamatan Bantarsari
['id' => 4427, 'district_id' => 1111, 'name' => 'Bantarsari'],
['id' => 4428, 'district_id' => 1111, 'name' => 'Kamulyan'],
['id' => 4429, 'district_id' => 1111, 'name' => 'Kedungwadas'],

// Desa/Kelurahan di Kecamatan Binangun
['id' => 4430, 'district_id' => 1112, 'name' => 'Binangun'],
['id' => 4431, 'district_id' => 1112, 'name' => 'Alangamba'],
['id' => 4432, 'district_id' => 1112, 'name' => 'Banjarsari'],

// Desa/Kelurahan di Kecamatan Cilacap Selatan
['id' => 4433, 'district_id' => 1113, 'name' => 'Cilacap'],
['id' => 4434, 'district_id' => 1113, 'name' => 'Tegalreja'],
['id' => 4435, 'district_id' => 1113, 'name' => 'Sidakaya'],

// Desa/Kelurahan di Kecamatan Cilacap Tengah
['id' => 4436, 'district_id' => 1114, 'name' => 'Cilacap Tengah'],
['id' => 4437, 'district_id' => 1114, 'name' => 'Donan'],
['id' => 4438, 'district_id' => 1114, 'name' => 'Gunungsimping'],

// Desa/Kelurahan di Kecamatan Bonang
['id' => 4439, 'district_id' => 1115, 'name' => 'Bonang'],
['id' => 4440, 'district_id' => 1115, 'name' => 'Jali'],
['id' => 4441, 'district_id' => 1115, 'name' => 'Purworejo'],

// Desa/Kelurahan di Kecamatan Demak
['id' => 4442, 'district_id' => 1116, 'name' => 'Demak'],
['id' => 4443, 'district_id' => 1116, 'name' => 'Kadilangu'],
['id' => 4444, 'district_id' => 1116, 'name' => 'Bintoro'],

// Desa/Kelurahan di Kecamatan Dempet
['id' => 4445, 'district_id' => 1117, 'name' => 'Dempet'],
['id' => 4446, 'district_id' => 1117, 'name' => 'Harjowinangun'],
['id' => 4447, 'district_id' => 1117, 'name' => 'Surodadi'],

// Desa/Kelurahan di Kecamatan Gajah
['id' => 4448, 'district_id' => 1118, 'name' => 'Gajah'],
['id' => 4449, 'district_id' => 1118, 'name' => 'Jatisono'],
['id' => 4450, 'district_id' => 1118, 'name' => 'Karangawen'],

// Desa/Kelurahan di Kecamatan Guntur
['id' => 4451, 'district_id' => 1119, 'name' => 'Guntur'],
['id' => 4452, 'district_id' => 1119, 'name' => 'Mijen'],
['id' => 4453, 'district_id' => 1119, 'name' => 'Ngemplik'],

// Desa/Kelurahan di Kecamatan Brati
['id' => 4454, 'district_id' => 1120, 'name' => 'Brati'],
['id' => 4455, 'district_id' => 1120, 'name' => 'Karangrayung'],
['id' => 4456, 'district_id' => 1120, 'name' => 'Tarub'],
// Desa/Kelurahan di Kecamatan Gabus
['id' => 4457, 'district_id' => 1121, 'name' => 'Gabus'],
['id' => 4458, 'district_id' => 1121, 'name' => 'Bolo'],
['id' => 4459, 'district_id' => 1121, 'name' => 'Tlogotirto'],

// Desa/Kelurahan di Kecamatan Geyer
['id' => 4460, 'district_id' => 1122, 'name' => 'Geyer'],
['id' => 4461, 'district_id' => 1122, 'name' => 'Mlowokarangtalun'],
['id' => 4462, 'district_id' => 1122, 'name' => 'Kalangbancar'],

// Desa/Kelurahan di Kecamatan Godong
['id' => 4463, 'district_id' => 1123, 'name' => 'Godong'],
['id' => 4464, 'district_id' => 1123, 'name' => 'Karanganyar'],
['id' => 4465, 'district_id' => 1123, 'name' => 'Kedungrejo'],

// Desa/Kelurahan di Kecamatan Grobogan
['id' => 4466, 'district_id' => 1124, 'name' => 'Grobogan'],
['id' => 4467, 'district_id' => 1124, 'name' => 'Karangsari'],
['id' => 4468, 'district_id' => 1124, 'name' => 'Putat'],

// Desa/Kelurahan di Kecamatan Bangsri
['id' => 4469, 'district_id' => 1125, 'name' => 'Bangsri'],
['id' => 4470, 'district_id' => 1125, 'name' => 'Banjaran'],
['id' => 4471, 'district_id' => 1125, 'name' => 'Kedungleper'],

// Desa/Kelurahan di Kecamatan Batealit
['id' => 4472, 'district_id' => 1126, 'name' => 'Batealit'],
['id' => 4473, 'district_id' => 1126, 'name' => 'Bantrung'],
['id' => 4474, 'district_id' => 1126, 'name' => 'Mindahan'],

// Desa/Kelurahan di Kecamatan Donorojo
['id' => 4475, 'district_id' => 1127, 'name' => 'Donorojo'],
['id' => 4476, 'district_id' => 1127, 'name' => 'Bandungharjo'],
['id' => 4477, 'district_id' => 1127, 'name' => 'Ujungwatu'],

// Desa/Kelurahan di Kecamatan Jepara
['id' => 4478, 'district_id' => 1128, 'name' => 'Jepara'],
['id' => 4479, 'district_id' => 1128, 'name' => 'Demaan'],
['id' => 4480, 'district_id' => 1128, 'name' => 'Jobokuto'],

// Desa/Kelurahan di Kecamatan Kalinyamatan
['id' => 4481, 'district_id' => 1129, 'name' => 'Kalinyamatan'],
['id' => 4482, 'district_id' => 1129, 'name' => 'Bakalan'],
['id' => 4483, 'district_id' => 1129, 'name' => 'Bandengan'],

// Desa/Kelurahan di Kecamatan Colomadu
['id' => 4484, 'district_id' => 1130, 'name' => 'Colomadu'],
['id' => 4485, 'district_id' => 1130, 'name' => 'Malangjiwan'],
['id' => 4486, 'district_id' => 1130, 'name' => 'Ngasem'],

// Desa/Kelurahan di Kecamatan Gondangrejo
['id' => 4487, 'district_id' => 1131, 'name' => 'Gondangrejo'],
['id' => 4488, 'district_id' => 1131, 'name' => 'Pendem'],
['id' => 4489, 'district_id' => 1131, 'name' => 'Blulukan'],

// Desa/Kelurahan di Kecamatan Jaten
['id' => 4490, 'district_id' => 1132, 'name' => 'Jaten'],
['id' => 4491, 'district_id' => 1132, 'name' => 'Ngringo'],
['id' => 4492, 'district_id' => 1132, 'name' => 'Jati'],

// Desa/Kelurahan di Kecamatan Jatipuro
['id' => 4493, 'district_id' => 1133, 'name' => 'Jatipuro'],
['id' => 4494, 'district_id' => 1133, 'name' => 'Jatisobo'],
['id' => 4495, 'district_id' => 1133, 'name' => 'Jatiharjo'],

// Desa/Kelurahan di Kecamatan Jatiyoso
['id' => 4496, 'district_id' => 1134, 'name' => 'Jatiyoso'],
['id' => 4497, 'district_id' => 1134, 'name' => 'Wonokeling'],
['id' => 4498, 'district_id' => 1134, 'name' => 'Tugu'],

// Desa/Kelurahan di Kecamatan Banyumanik
['id' => 4499, 'district_id' => 1135, 'name' => 'Banyumanik'],
['id' => 4500, 'district_id' => 1135, 'name' => 'Gedawang'],
['id' => 4501, 'district_id' => 1135, 'name' => 'Padangsari'],

// Desa/Kelurahan di Kecamatan Candisari
['id' => 4502, 'district_id' => 1136, 'name' => 'Candisari'],
['id' => 4503, 'district_id' => 1136, 'name' => 'Jatingaleh'],
['id' => 4504, 'district_id' => 1136, 'name' => 'Tinjomoyo'],

// Desa/Kelurahan di Kecamatan Gajahmungkur
['id' => 4505, 'district_id' => 1137, 'name' => 'Gajahmungkur'],
['id' => 4506, 'district_id' => 1137, 'name' => 'Lempongsari'],
['id' => 4507, 'district_id' => 1137, 'name' => 'Bendungan'],

// Desa/Kelurahan di Kecamatan Gayamsari
['id' => 4508, 'district_id' => 1138, 'name' => 'Gayamsari'],
['id' => 4509, 'district_id' => 1138, 'name' => 'Sambirejo'],
['id' => 4510, 'district_id' => 1138, 'name' => 'Siwalan'],

// Desa/Kelurahan di Kecamatan Genuk
['id' => 4511, 'district_id' => 1139, 'name' => 'Genuk'],
['id' => 4512, 'district_id' => 1139, 'name' => 'Terboyo Wetan'],
['id' => 4513, 'district_id' => 1139, 'name' => 'Trimulyo'],

// Desa/Kelurahan di Kecamatan Banjarsari
['id' => 4514, 'district_id' => 1140, 'name' => 'Banjarsari'],
['id' => 4515, 'district_id' => 1140, 'name' => 'Pucangsawit'],
['id' => 4516, 'district_id' => 1140, 'name' => 'Sondakan'],

// Desa/Kelurahan di Kecamatan Jebres
['id' => 4517, 'district_id' => 1141, 'name' => 'Jebres'],
['id' => 4518, 'district_id' => 1141, 'name' => 'Mojosongo'],
['id' => 4519, 'district_id' => 1141, 'name' => 'Pucangsawit'],

// Desa/Kelurahan di Kecamatan Laweyan
['id' => 4520, 'district_id' => 1142, 'name' => 'Laweyan'],
['id' => 4521, 'district_id' => 1142, 'name' => 'Sondakan'],
['id' => 4522, 'district_id' => 1142, 'name' => 'Pajang'],

// Desa/Kelurahan di Kecamatan Pasar Kliwon
['id' => 4523, 'district_id' => 1143, 'name' => 'Pasar Kliwon'],
['id' => 4524, 'district_id' => 1143, 'name' => 'Gajahan'],
['id' => 4525, 'district_id' => 1143, 'name' => 'Kratonan'],

// Desa/Kelurahan di Kecamatan Serengan
['id' => 4526, 'district_id' => 1144, 'name' => 'Serengan'],
['id' => 4527, 'district_id' => 1144, 'name' => 'Danukusuman'],
['id' => 4528, 'district_id' => 1144, 'name' => 'Jayengan'],

// Desa/Kelurahan di Kecamatan Bambanglipuro
['id' => 4529, 'district_id' => 1145, 'name' => 'Bambanglipuro'],
['id' => 4530, 'district_id' => 1145, 'name' => 'Sidomulyo'],
['id' => 4531, 'district_id' => 1145, 'name' => 'Mulyodadi'],

// Desa/Kelurahan di Kecamatan Banguntapan
['id' => 4532, 'district_id' => 1146, 'name' => 'Banguntapan'],
['id' => 4533, 'district_id' => 1146, 'name' => 'Jambidan'],
['id' => 4534, 'district_id' => 1146, 'name' => 'Tamanan'],

// Desa/Kelurahan di Kecamatan Bantul
['id' => 4535, 'district_id' => 1147, 'name' => 'Bantul'],
['id' => 4536, 'district_id' => 1147, 'name' => 'Palbapang'],
['id' => 4537, 'district_id' => 1147, 'name' => 'Trirenggo'],

// Desa/Kelurahan di Kecamatan Dlingo
['id' => 4538, 'district_id' => 1148, 'name' => 'Dlingo'],
['id' => 4539, 'district_id' => 1148, 'name' => 'Mangunan'],
['id' => 4540, 'district_id' => 1148, 'name' => 'Temuwuh'],

// Desa/Kelurahan di Kecamatan Imogiri
['id' => 4541, 'district_id' => 1149, 'name' => 'Imogiri'],
['id' => 4542, 'district_id' => 1149, 'name' => 'Karangtengah'],
['id' => 4543, 'district_id' => 1149, 'name' => 'Selopamioro'],

// Desa/Kelurahan di Kecamatan Gedangsari
['id' => 4544, 'district_id' => 1150, 'name' => 'Gedangsari'],
['id' => 4545, 'district_id' => 1150, 'name' => 'Mertelu'],
['id' => 4546, 'district_id' => 1150, 'name' => 'Sampang'],

// Desa/Kelurahan di Kecamatan Girisubo
['id' => 4547, 'district_id' => 1151, 'name' => 'Girisubo'],
['id' => 4548, 'district_id' => 1151, 'name' => 'Balong'],
['id' => 4549, 'district_id' => 1151, 'name' => 'Pucung'],

// Desa/Kelurahan di Kecamatan Karangmojo
['id' => 4550, 'district_id' => 1152, 'name' => 'Karangmojo'],
['id' => 4551, 'district_id' => 1152, 'name' => 'Bejiharjo'],
['id' => 4552, 'district_id' => 1152, 'name' => 'Gedangrejo'],

// Desa/Kelurahan di Kecamatan Ngawen
['id' => 4553, 'district_id' => 1153, 'name' => 'Ngawen'],
['id' => 4554, 'district_id' => 1153, 'name' => 'Jurangjero'],
['id' => 4555, 'district_id' => 1153, 'name' => 'Tancep'],

// Desa/Kelurahan di Kecamatan Nglipar
['id' => 4556, 'district_id' => 1154, 'name' => 'Nglipar'],
['id' => 4557, 'district_id' => 1154, 'name' => 'Kedungpoh'],
['id' => 4558, 'district_id' => 1154, 'name' => 'Katongan'],

// Desa/Kelurahan di Kecamatan Galur
['id' => 4559, 'district_id' => 1155, 'name' => 'Galur'],
['id' => 4560, 'district_id' => 1155, 'name' => 'Banaran'],
['id' => 4561, 'district_id' => 1155, 'name' => 'Karangsewu'],

// Desa/Kelurahan di Kecamatan Girimulyo
['id' => 4562, 'district_id' => 1156, 'name' => 'Girimulyo'],
['id' => 4563, 'district_id' => 1156, 'name' => 'Purwosari'],
['id' => 4564, 'district_id' => 1156, 'name' => 'Jatimulyo'],

// Desa/Kelurahan di Kecamatan Kalibawang
['id' => 4565, 'district_id' => 1157, 'name' => 'Kalibawang'],
['id' => 4566, 'district_id' => 1157, 'name' => 'Banjararum'],
['id' => 4567, 'district_id' => 1157, 'name' => 'Banjarharjo'],

// Desa/Kelurahan di Kecamatan Kokap
['id' => 4568, 'district_id' => 1158, 'name' => 'Kokap'],
['id' => 4569, 'district_id' => 1158, 'name' => 'Hargowilis'],
['id' => 4570, 'district_id' => 1158, 'name' => 'Hargorejo'],

// Desa/Kelurahan di Kecamatan Lendah
['id' => 4571, 'district_id' => 1159, 'name' => 'Lendah'],
['id' => 4572, 'district_id' => 1159, 'name' => 'Gulurejo'],
['id' => 4573, 'district_id' => 1159, 'name' => 'Ngentakrejo'],

// Desa/Kelurahan di Kecamatan Berbah
['id' => 4574, 'district_id' => 1160, 'name' => 'Berbah'],
['id' => 4575, 'district_id' => 1160, 'name' => 'Sendangtirto'],
['id' => 4576, 'district_id' => 1160, 'name' => 'Tegaltirto'],
// Desa/Kelurahan di Kecamatan Cangkringan
['id' => 4577, 'district_id' => 1161, 'name' => 'Argomulyo'],
['id' => 4578, 'district_id' => 1161, 'name' => 'Wukirsari'],
['id' => 4579, 'district_id' => 1161, 'name' => 'Umbulharjo'],
['id' => 4580, 'district_id' => 1161, 'name' => 'Glagaharjo'],

// Desa/Kelurahan di Kecamatan Depok
['id' => 4581, 'district_id' => 1162, 'name' => 'Condongcatur'],
['id' => 4582, 'district_id' => 1162, 'name' => 'Maguwoharjo'],
['id' => 4583, 'district_id' => 1162, 'name' => 'Caturtunggal'],

// Desa/Kelurahan di Kecamatan Gamping
['id' => 4584, 'district_id' => 1163, 'name' => 'Ambarketawang'],
['id' => 4585, 'district_id' => 1163, 'name' => 'Balecatur'],
['id' => 4586, 'district_id' => 1163, 'name' => 'Nogotirto'],
['id' => 4587, 'district_id' => 1163, 'name' => 'Trihanggo'],
['id' => 4588, 'district_id' => 1163, 'name' => 'Sumberadi'],
['id' => 4589, 'district_id' => 1163, 'name' => 'Banyuraden'],

// Desa/Kelurahan di Kecamatan Godean
['id' => 4590, 'district_id' => 1164, 'name' => 'Sidorejo'],
['id' => 4591, 'district_id' => 1164, 'name' => 'Sidoagung'],
['id' => 4592, 'district_id' => 1164, 'name' => 'Sidoarum'],
['id' => 4593, 'district_id' => 1164, 'name' => 'Sidokarto'],
['id' => 4594, 'district_id' => 1164, 'name' => 'Sidoluhur'],
['id' => 4595, 'district_id' => 1164, 'name' => 'Sidomoyo'],
['id' => 4596, 'district_id' => 1164, 'name' => 'Sidorejo'],

// Kelurahan di Kecamatan Danurejan
['id' => 4597, 'district_id' => 1165, 'name' => 'Tegalpanggung'],
['id' => 4598, 'district_id' => 1165, 'name' => 'Suryatmajan'],
['id' => 4599, 'district_id' => 1165, 'name' => 'Bausasran'],

// Kelurahan di Kecamatan Gedongtengen
['id' => 4600, 'district_id' => 1166, 'name' => 'Pringgokusuman'],
['id' => 4601, 'district_id' => 1166, 'name' => 'Sosromenduran'],
['id' => 4602, 'district_id' => 1166, 'name' => 'Gedongtengen'],

// Kelurahan di Kecamatan Gondokusuman
['id' => 4603, 'district_id' => 1167, 'name' => 'Kotabaru'],
['id' => 4604, 'district_id' => 1167, 'name' => 'Demangan'],
['id' => 4605, 'district_id' => 1167, 'name' => 'Klitren'],
['id' => 4606, 'district_id' => 1167, 'name' => 'Terban'],
['id' => 4607, 'district_id' => 1167, 'name' => 'Baciro'],

// Kelurahan di Kecamatan Gondomanan
['id' => 4608, 'district_id' => 1168, 'name' => 'Ngupasan'],
['id' => 4609, 'district_id' => 1168, 'name' => 'Prawirodirjan'],
['id' => 4610, 'district_id' => 1168, 'name' => 'Purwokinanti'],

// Kelurahan di Kecamatan Jetis
['id' => 4611, 'district_id' => 1169, 'name' => 'Gowongan'],
['id' => 4612, 'district_id' => 1169, 'name' => 'Bumijo'],
['id' => 4613, 'district_id' => 1169, 'name' => 'Cokrodiningratan'],

// Kelurahan di Kecamatan Banyuwangi
['id' => 4614, 'district_id' => 1170, 'name' => 'Kampung Melayu'],
['id' => 4615, 'district_id' => 1170, 'name' => 'Kepatihan'],
['id' => 4616, 'district_id' => 1170, 'name' => 'Penganjuran'],
['id' => 4617, 'district_id' => 1170, 'name' => 'Tukangkayu'],
['id' => 4618, 'district_id' => 1170, 'name' => 'Lateng'],
['id' => 4619, 'district_id' => 1170, 'name' => 'Singotrunan'],
['id' => 4620, 'district_id' => 1170, 'name' => 'Pakis'],
['id' => 4621, 'district_id' => 1170, 'name' => 'Sobo'],
['id' => 4622, 'district_id' => 1170, 'name' => 'Kertosari'],
['id' => 4623, 'district_id' => 1170, 'name' => 'Karangrejo'],
['id' => 4624, 'district_id' => 1170, 'name' => 'Karangrejo'],
// Desa/Kelurahan di Kecamatan Cluring
['id' => 4625, 'district_id' => 1171, 'name' => 'Tampo'],
['id' => 4626, 'district_id' => 1171, 'name' => 'Tegalsari'],
['id' => 4627, 'district_id' => 1171, 'name' => 'Wringinpitu'],
// Desa/Kelurahan di Kecamatan Gambiran
['id' => 4628, 'district_id' => 1172, 'name' => 'Gambiran'],
['id' => 4629, 'district_id' => 1172, 'name' => 'Andongsari'],
['id' => 4630, 'district_id' => 1172, 'name' => 'Karanganyar'],
['id' => 4631, 'district_id' => 1172, 'name' => 'Pontang'],
['id' => 4632, 'district_id' => 1172, 'name' => 'Sabrang'],
['id' => 4633, 'district_id' => 1172, 'name' => 'Sumberejo'],
['id' => 4634, 'district_id' => 1172, 'name' => 'Tegalsari'],

// Desa/Kelurahan di Kecamatan Genteng
['id' => 4635, 'district_id' => 1173, 'name' => 'Genteng Kulon'],
['id' => 4636, 'district_id' => 1173, 'name' => 'Genteng Wetan'],
['id' => 4637, 'district_id' => 1173, 'name' => 'Kaligondo'],
['id' => 4638, 'district_id' => 1173, 'name' => 'Setail'],
['id' => 4639, 'district_id' => 1173, 'name' => 'Yosomulyo'],

// Desa/Kelurahan di Kecamatan Giri
['id' => 4640, 'district_id' => 1174, 'name' => 'Giri'],
['id' => 4641, 'district_id' => 1174, 'name' => 'Grogol'],
['id' => 4642, 'district_id' => 1174, 'name' => 'Klatak'],
['id' => 4643, 'district_id' => 1174, 'name' => 'Kalimoro'],
['id' => 4644, 'district_id' => 1174, 'name' => 'Kebondalem'],
['id' => 4645, 'district_id' => 1174, 'name' => 'Kedawung'],
['id' => 4646, 'district_id' => 1174, 'name' => 'Kepatihan'],
['id' => 4647, 'district_id' => 1174, 'name' => 'Pakis'],
['id' => 4648, 'district_id' => 1174, 'name' => 'Pengantigan'],
['id' => 4649, 'district_id' => 1174, 'name' => 'Sobo'],

// Desa/Kelurahan di Kecamatan Balongpanggang
['id' => 4650, 'district_id' => 1175, 'name' => 'Babatan'],
['id' => 4651, 'district_id' => 1175, 'name' => 'Balongpanggang'],
['id' => 4652, 'district_id' => 1175, 'name' => 'Banjaragung'],
['id' => 4653, 'district_id' => 1175, 'name' => 'Bandungsekaran'],
['id' => 4654, 'district_id' => 1175, 'name' => 'Brangkal'],
['id' => 4655, 'district_id' => 1175, 'name' => 'Dapet'],
['id' => 4656, 'district_id' => 1175, 'name' => 'Dohoagung'],
['id' => 4657, 'district_id' => 1175, 'name' => 'Ganggang'],
['id' => 4658, 'district_id' => 1175, 'name' => 'Jombangdelik'],
['id' => 4659, 'district_id' => 1175, 'name' => 'Karangsemanding'],
['id' => 4660, 'district_id' => 1175, 'name' => 'Kedungpring'],
['id' => 4661, 'district_id' => 1175, 'name' => 'Kedungsumber'],
['id' => 4662, 'district_id' => 1175, 'name' => 'Klotok'],
['id' => 4663, 'district_id' => 1175, 'name' => 'Mojogede'],
['id' => 4664, 'district_id' => 1175, 'name' => 'Ngampel'],
['id' => 4665, 'district_id' => 1175, 'name' => 'Ngasin'],
['id' => 4666, 'district_id' => 1175, 'name' => 'Pacuh'],
['id' => 4667, 'district_id' => 1175, 'name' => 'Pinggir'],
['id' => 4668, 'district_id' => 1175, 'name' => 'Pucung'],
['id' => 4669, 'district_id' => 1175, 'name' => 'Sekarputih'],
['id' => 4670, 'district_id' => 1175, 'name' => 'Tanahlandean'],
['id' => 4671, 'district_id' => 1175, 'name' => 'Tenggor'],
['id' => 4672, 'district_id' => 1175, 'name' => 'Wahas'],
['id' => 4673, 'district_id' => 1175, 'name' => 'Wonorejo'],
['id' => 4674, 'district_id' => 1175, 'name' => 'Wotansari'],

// Desa/Kelurahan di Kecamatan Benjeng
['id' => 4675, 'district_id' => 1176, 'name' => 'Balongmojo'],
['id' => 4676, 'district_id' => 1176, 'name' => 'Balongtunjung'],
['id' => 4677, 'district_id' => 1176, 'name' => 'Banter'],
['id' => 4678, 'district_id' => 1176, 'name' => 'Bengkelolor'],
['id' => 4679, 'district_id' => 1176, 'name' => 'Bulangkulon'],
['id' => 4680, 'district_id' => 1176, 'name' => 'Bulurejo'],
['id' => 4681, 'district_id' => 1176, 'name' => 'Deliksumber'],
['id' => 4682, 'district_id' => 1176, 'name' => 'Dukuhklopo'],
['id' => 4683, 'district_id' => 1176, 'name' => 'Gedangkulut'],
['id' => 4684, 'district_id' => 1176, 'name' => 'Glagahsari'],
['id' => 4685, 'district_id' => 1176, 'name' => 'Jatirogo'],
['id' => 4686, 'district_id' => 1176, 'name' => 'Jogodalu'],
['id' => 4687, 'district_id' => 1176, 'name' => 'Kepuhklagen'],
['id' => 4688, 'district_id' => 1176, 'name' => 'Munggugianti'],
['id' => 4689, 'district_id' => 1176, 'name' => 'Ngabetan'],
['id' => 4690, 'district_id' => 1176, 'name' => 'Serah'],
['id' => 4691, 'district_id' => 1176, 'name' => 'Sirnoboyo'],
['id' => 4692, 'district_id' => 1176, 'name' => 'Sumbergede'],
['id' => 4693, 'district_id' => 1176, 'name' => 'Sumberrejo'],

// Desa/Kelurahan di Kecamatan Bungah
['id' => 4694, 'district_id' => 1177, 'name' => 'Bungah'],
['id' => 4695, 'district_id' => 1177, 'name' => 'Kramat'],
['id' => 4696, 'district_id' => 1177, 'name' => 'Kemangi'],
['id' => 4697, 'district_id' => 1177, 'name' => 'Gumeno'],
['id' => 4698, 'district_id' => 1177, 'name' => 'Bedanten'],
['id' => 4699, 'district_id' => 1177, 'name' => 'Randuboto'],
['id' => 4700, 'district_id' => 1177, 'name' => 'Melirang'],

// Desa/Kelurahan di Kecamatan Cerme
['id' => 4701, 'district_id' => 1178, 'name' => 'Cerme Lor'],
['id' => 4702, 'district_id' => 1178, 'name' => 'Cerme Kidul'],
['id' => 4703, 'district_id' => 1178, 'name' => 'Jono'],
['id' => 4704, 'district_id' => 1178, 'name' => 'Banjarsari'],
['id' => 4705, 'district_id' => 1178, 'name' => 'Doho'],
['id' => 4706, 'district_id' => 1178, 'name' => 'Ngembung'],

// Desa/Kelurahan di Kecamatan Driyorejo
['id' => 4707, 'district_id' => 1179, 'name' => 'Driyorejo'],
['id' => 4708, 'district_id' => 1179, 'name' => 'Cangkir'],
['id' => 4709, 'district_id' => 1179, 'name' => 'Kesamben'],
['id' => 4710, 'district_id' => 1179, 'name' => 'Sumput'],
['id' => 4711, 'district_id' => 1179, 'name' => 'Bambe'],
['id' => 4712, 'district_id' => 1179, 'name' => 'Gadung'],

// Desa/Kelurahan di Kecamatan Ajung
['id' => 4713, 'district_id' => 1180, 'name' => 'Ajung'],
['id' => 4714, 'district_id' => 1180, 'name' => 'Klompangan'],
['id' => 4715, 'district_id' => 1180, 'name' => 'Wirowongso'],
['id' => 4716, 'district_id' => 1180, 'name' => 'Gambiran'],

// Desa/Kelurahan di Kecamatan Ambulu
['id' => 4717, 'district_id' => 1181, 'name' => 'Ambulu'],
['id' => 4718, 'district_id' => 1181, 'name' => 'Sumberejo'],
['id' => 4719, 'district_id' => 1181, 'name' => 'Andongsari'],
['id' => 4720, 'district_id' => 1181, 'name' => 'Tegalsari'],

// Desa/Kelurahan di Kecamatan Arjasa
['id' => 4721, 'district_id' => 1182, 'name' => 'Arjasa'],
['id' => 4722, 'district_id' => 1182, 'name' => 'Biting'],
['id' => 4723, 'district_id' => 1182, 'name' => 'Glagahwero'],
['id' => 4724, 'district_id' => 1182, 'name' => 'Kemuning'],

// Desa/Kelurahan di Kecamatan Balung
['id' => 4725, 'district_id' => 1183, 'name' => 'Balung'],
['id' => 4726, 'district_id' => 1183, 'name' => 'Tutul'],
['id' => 4727, 'district_id' => 1183, 'name' => 'Curahlele'],
['id' => 4728, 'district_id' => 1183, 'name' => 'Gambiran'],

// Desa/Kelurahan di Kecamatan Bangsalsari
['id' => 4729, 'district_id' => 1184, 'name' => 'Bangsalsari'],
['id' => 4730, 'district_id' => 1184, 'name' => 'Tisnogambar'],
['id' => 4731, 'district_id' => 1184, 'name' => 'Petung'],
['id' => 4732, 'district_id' => 1184, 'name' => 'Tegalwangi'],

// Desa/Kelurahan di Kecamatan Balerejo
['id' => 4733, 'district_id' => 1185, 'name' => 'Balerejo'],
['id' => 4734, 'district_id' => 1185, 'name' => 'Sidorejo'],
['id' => 4735, 'district_id' => 1185, 'name' => 'Klumpit'],
['id' => 4736, 'district_id' => 1185, 'name' => 'Candimulyo'],
// Desa/Kelurahan di Kecamatan Dagangan
['id' => 4737, 'district_id' => 1186, 'name' => 'Dagangan'],
['id' => 4738, 'district_id' => 1186, 'name' => 'Sidorejo'],
['id' => 4739, 'district_id' => 1186, 'name' => 'Klumpit'],
['id' => 4740, 'district_id' => 1186, 'name' => 'Candimulyo'],

// Desa/Kelurahan di Kecamatan Dolopo
['id' => 4741, 'district_id' => 1187, 'name' => 'Dolopo'],
['id' => 4742, 'district_id' => 1187, 'name' => 'Sidorejo'],
['id' => 4743, 'district_id' => 1187, 'name' => 'Klumpit'],
['id' => 4744, 'district_id' => 1187, 'name' => 'Candimulyo'],

// Desa/Kelurahan di Kecamatan Geger
['id' => 4745, 'district_id' => 1188, 'name' => 'Geger'],
['id' => 4746, 'district_id' => 1188, 'name' => 'Sidorejo'],
['id' => 4747, 'district_id' => 1188, 'name' => 'Klumpit'],
['id' => 4748, 'district_id' => 1188, 'name' => 'Candimulyo'],

// Desa/Kelurahan di Kecamatan Gemarang
['id' => 4749, 'district_id' => 1189, 'name' => 'Gemarang'],
['id' => 4750, 'district_id' => 1189, 'name' => 'Sidorejo'],
['id' => 4751, 'district_id' => 1189, 'name' => 'Klumpit'],
['id' => 4752, 'district_id' => 1189, 'name' => 'Candimulyo'],

// Desa/Kelurahan di Kecamatan Ampelgading
['id' => 4753, 'district_id' => 1190, 'name' => 'Ampelgading'],
['id' => 4754, 'district_id' => 1190, 'name' => 'Sidorejo'],
['id' => 4755, 'district_id' => 1190, 'name' => 'Klumpit'],
['id' => 4756, 'district_id' => 1190, 'name' => 'Candimulyo'],

// Desa/Kelurahan di Kecamatan Bantur
['id' => 4757, 'district_id' => 1191, 'name' => 'Bantur'],
['id' => 4758, 'district_id' => 1191, 'name' => 'Sidorejo'],
['id' => 4759, 'district_id' => 1191, 'name' => 'Klumpit'],
['id' => 4760, 'district_id' => 1191, 'name' => 'Candimulyo'],

// Desa/Kelurahan di Kecamatan Bululawang
['id' => 4761, 'district_id' => 1192, 'name' => 'Bululawang'],
['id' => 4762, 'district_id' => 1192, 'name' => 'Sidorejo'],
['id' => 4763, 'district_id' => 1192, 'name' => 'Klumpit'],
['id' => 4764, 'district_id' => 1192, 'name' => 'Candimulyo'],

// Desa/Kelurahan di Kecamatan Dampit
['id' => 4765, 'district_id' => 1193, 'name' => 'Dampit'],
['id' => 4766, 'district_id' => 1193, 'name' => 'Sidorejo'],
['id' => 4767, 'district_id' => 1193, 'name' => 'Klumpit'],
['id' => 4768, 'district_id' => 1193, 'name' => 'Candimulyo'],

// Desa/Kelurahan di Kecamatan Dau
['id' => 4769, 'district_id' => 1194, 'name' => 'Dau'],
['id' => 4770, 'district_id' => 1194, 'name' => 'Sidorejo'],
['id' => 4771, 'district_id' => 1194, 'name' => 'Klumpit'],
['id' => 4772, 'district_id' => 1194, 'name' => 'Candimulyo'],

// Desa/Kelurahan di Kecamatan Bangsal
['id' => 4773, 'district_id' => 1195, 'name' => 'Bangsal'],
['id' => 4774, 'district_id' => 1195, 'name' => 'Sidorejo'],
['id' => 4775, 'district_id' => 1195, 'name' => 'Klumpit'],
['id' => 4776, 'district_id' => 1195, 'name' => 'Candimulyo'],

// Desa/Kelurahan di Kecamatan Dawarblandong
['id' => 4777, 'district_id' => 1196, 'name' => 'Dawarblandong'],
['id' => 4778, 'district_id' => 1196, 'name' => 'Sidorejo'],
['id' => 4779, 'district_id' => 1196, 'name' => 'Klumpit'],
['id' => 4780, 'district_id' => 1196, 'name' => 'Candimulyo'],

// Desa/Kelurahan di Kecamatan Dlanggu
['id' => 4781, 'district_id' => 1197, 'name' => 'Dlanggu'],
['id' => 4782, 'district_id' => 1197, 'name' => 'Sidorejo'],
['id' => 4783, 'district_id' => 1197, 'name' => 'Klumpit'],
['id' => 4784, 'district_id' => 1197, 'name' => 'Candimulyo'],

// Desa/Kelurahan di Kecamatan Gedeg
['id' => 4785, 'district_id' => 1198, 'name' => 'Gedeg'],
['id' => 4786, 'district_id' => 1198, 'name' => 'Sidorejo'],
['id' => 4787, 'district_id' => 1198, 'name' => 'Klumpit'],
['id' => 4788, 'district_id' => 1198, 'name' => 'Candimulyo'],

// Desa/Kelurahan di Kecamatan Gondang
['id' => 4789, 'district_id' => 1199, 'name' => 'Gondang'],
['id' => 4790, 'district_id' => 1199, 'name' => 'Sidorejo'],
['id' => 4791, 'district_id' => 1199, 'name' => 'Klumpit'],
['id' => 4792, 'district_id' => 1199, 'name' => 'Candimulyo'],

// Desa/Kelurahan di Kecamatan Buduran
['id' => 4793, 'district_id' => 1200, 'name' => 'Buduran'],
['id' => 4794, 'district_id' => 1200, 'name' => 'Sidorejo'],
['id' => 4795, 'district_id' => 1200, 'name' => 'Klumpit'],
['id' => 4796, 'district_id' => 1200, 'name' => 'Candimulyo'],

// Desa/Kelurahan di Kecamatan Candi
['id' => 4797, 'district_id' => 1201, 'name' => 'Candi'],
['id' => 4798, 'district_id' => 1201, 'name' => 'Sidorejo'],
['id' => 4799, 'district_id' => 1201, 'name' => 'Klumpit'],
['id' => 4800, 'district_id' => 1201, 'name' => 'Candimulyo'],

// Desa/Kelurahan di Kecamatan Gedangan
['id' => 4801, 'district_id' => 1202, 'name' => 'Gedangan'],
['id' => 4802, 'district_id' => 1202, 'name' => 'Sidorejo'],
['id' => 4803, 'district_id' => 1202, 'name' => 'Klumpit'],
['id' => 4804, 'district_id' => 1202, 'name' => 'Candimulyo'],

// Desa/Kelurahan di Kecamatan Jabon
['id' => 4805, 'district_id' => 1203, 'name' => 'Jabon'],
['id' => 4806, 'district_id' => 1203, 'name' => 'Sidorejo'],
['id' => 4807, 'district_id' => 1203, 'name' => 'Klumpit'],
['id' => 4808, 'district_id' => 1203, 'name' => 'Candimulyo'],

// Desa/Kelurahan di Kecamatan Krembung
['id' => 4809, 'district_id' => 1204, 'name' => 'Krembung'],
['id' => 4810, 'district_id' => 1204, 'name' => 'Sidorejo'],
['id' => 4811, 'district_id' => 1204, 'name' => 'Klumpit'],
['id' => 4812, 'district_id' => 1204, 'name' => 'Candimulyo'],

// Desa/Kelurahan di Kecamatan Asemrowo
['id' => 4813, 'district_id' => 1205, 'name' => 'Asemrowo'],
['id' => 4814, 'district_id' => 1205, 'name' => 'Sidorejo'],
['id' => 4815, 'district_id' => 1205, 'name' => 'Klumpit'],
['id' => 4816, 'district_id' => 1205, 'name' => 'Candimulyo'],
// Desa/Kelurahan di Kecamatan Benowo
['id' => 9005, 'district_id' => 1206, 'name' => 'Benowo'],
['id' => 9006, 'district_id' => 1206, 'name' => 'Tambak Wedi'],
['id' => 9007, 'district_id' => 1206, 'name' => 'Romokalisari'],
['id' => 9008, 'district_id' => 1206, 'name' => 'Sememi'],

// Desa/Kelurahan di Kecamatan Bubutan
['id' => 9009, 'district_id' => 1207, 'name' => 'Bubutan'],
['id' => 9010, 'district_id' => 1207, 'name' => 'Peneleh'],
['id' => 9011, 'district_id' => 1207, 'name' => 'Krembangan Selatan'],
['id' => 9012, 'district_id' => 1207, 'name' => 'Alun-Alun Contong'],

// Desa/Kelurahan di Kecamatan Dukuh Pakis
['id' => 9013, 'district_id' => 1208, 'name' => 'Dukuh Pakis'],
['id' => 9014, 'district_id' => 1208, 'name' => 'Pradah Kalikendal'],
['id' => 9015, 'district_id' => 1208, 'name' => 'Gunung Sari'],
['id' => 9016, 'district_id' => 1208, 'name' => 'Dukuh Kupang'],

// Desa/Kelurahan di Kecamatan Gayungan
['id' => 9017, 'district_id' => 1209, 'name' => 'Gayungan'],
['id' => 9018, 'district_id' => 1209, 'name' => 'Ketintang'],
['id' => 9019, 'district_id' => 1209, 'name' => 'Menanggal'],
['id' => 9020, 'district_id' => 1209, 'name' => 'Dukuh Menanggal'],

// Desa/Kelurahan di Kecamatan Batu
['id' => 9021, 'district_id' => 1301, 'name' => 'Batu'],
['id' => 9022, 'district_id' => 1301, 'name' => 'Oro-Oro Ombo'],
['id' => 9023, 'district_id' => 1301, 'name' => 'Temas'],
['id' => 9024, 'district_id' => 1301, 'name' => 'Ngaglik'],

// Desa/Kelurahan di Kecamatan Junrejo
['id' => 9025, 'district_id' => 1302, 'name' => 'Junrejo'],
['id' => 9026, 'district_id' => 1302, 'name' => 'Pendem'],
['id' => 9027, 'district_id' => 1302, 'name' => 'Tlekung'],
['id' => 9028, 'district_id' => 1302, 'name' => 'Mojorejo'],

// Desa/Kelurahan di Kecamatan Bumiaji
['id' => 9029, 'district_id' => 1303, 'name' => 'Bumiaji'],
['id' => 9030, 'district_id' => 1303, 'name' => 'Giripurno'],
['id' => 9031, 'district_id' => 1303, 'name' => 'Pandanrejo'],
['id' => 9032, 'district_id' => 1303, 'name' => 'Bulukerto'],

// Desa/Kelurahan di Kecamatan Klojen
['id' => 9033, 'district_id' => 1304, 'name' => 'Klojen'],
['id' => 9034, 'district_id' => 1304, 'name' => 'Rampal Celaket'],
['id' => 9035, 'district_id' => 1304, 'name' => 'Bareng'],
['id' => 9036, 'district_id' => 1304, 'name' => 'Gading Kasri'],

// Desa/Kelurahan di Kecamatan Blimbing
['id' => 9037, 'district_id' => 1305, 'name' => 'Blimbing'],
['id' => 9038, 'district_id' => 1305, 'name' => 'Pandanwangi'],
['id' => 9039, 'district_id' => 1305, 'name' => 'Arjosari'],
['id' => 9040, 'district_id' => 1305, 'name' => 'Polowijen'],

// Desa/Kelurahan di Kecamatan Kedungkandang
['id' => 9041, 'district_id' => 1306, 'name' => 'Kedungkandang'],
['id' => 9042, 'district_id' => 1306, 'name' => 'Lesanpuro'],
['id' => 9043, 'district_id' => 1306, 'name' => 'Mergosono'],
['id' => 9044, 'district_id' => 1306, 'name' => 'Wonokoyo'],

// Desa/Kelurahan di Kecamatan Lowokwaru
['id' => 9045, 'district_id' => 1307, 'name' => 'Lowokwaru'],
['id' => 9046, 'district_id' => 1307, 'name' => 'Tulusrejo'],
['id' => 9047, 'district_id' => 1307, 'name' => 'Merjosari'],
['id' => 9048, 'district_id' => 1307, 'name' => 'Tunggulwulung'],

// Desa/Kelurahan di Kecamatan Sukun
['id' => 9049, 'district_id' => 1308, 'name' => 'Sukun'],
['id' => 9050, 'district_id' => 1308, 'name' => 'Ciptomulyo'],
['id' => 9051, 'district_id' => 1308, 'name' => 'Bandungrejosari'],
['id' => 9052, 'district_id' => 1308, 'name' => 'Tanjungrejo'],

// Desa/Kelurahan di Kecamatan Tegalsari
['id' => 9053, 'district_id' => 1309, 'name' => 'Tegalsari'],
['id' => 9054, 'district_id' => 1309, 'name' => 'Kedungdoro'],
['id' => 9055, 'district_id' => 1309, 'name' => 'Dr. Soetomo'],
['id' => 9056, 'district_id' => 1309, 'name' => 'Wonokromo'],

// Desa/Kelurahan di Kecamatan Simokerto
['id' => 9057, 'district_id' => 1310, 'name' => 'Simokerto'],
['id' => 9058, 'district_id' => 1310, 'name' => 'Kapasan'],
['id' => 9059, 'district_id' => 1310, 'name' => 'Pegirian'],
['id' => 9060, 'district_id' => 1310, 'name' => 'Kapasari'],

// Desa/Kelurahan di Kecamatan Genteng
['id' => 9061, 'district_id' => 1311, 'name' => 'Genteng'],
['id' => 9062, 'district_id' => 1311, 'name' => 'Ketabang'],
['id' => 9063, 'district_id' => 1311, 'name' => 'Pacar Keling'],
['id' => 9064, 'district_id' => 1311, 'name' => 'Embong Kaliasin'],

// Desa/Kelurahan di Kecamatan Tambaksari
['id' => 9065, 'district_id' => 1312, 'name' => 'Tambaksari'],
['id' => 9066, 'district_id' => 1312, 'name' => 'Pucang Sewu'],
['id' => 9067, 'district_id' => 1312, 'name' => 'Gading'],
['id' => 9068, 'district_id' => 1312, 'name' => 'Kapas Madya'],

// Desa/Kelurahan di Kecamatan Gubeng
['id' => 9069, 'district_id' => 1313, 'name' => 'Gubeng'],
['id' => 9070, 'district_id' => 1313, 'name' => 'Baratajaya'],
['id' => 9071, 'district_id' => 1313, 'name' => 'Kertajaya'],
['id' => 9072, 'district_id' => 1313, 'name' => 'Mojo'],

// Desa/Kelurahan di Kecamatan Bayah
['id' => 9073, 'district_id' => 1314, 'name' => 'Bayah'],
['id' => 9074, 'district_id' => 1314, 'name' => 'Cidikit'],
['id' => 9075, 'district_id' => 1314, 'name' => 'Cisuren'],
['id' => 9076, 'district_id' => 1314, 'name' => 'Pamubulan'],

// Desa/Kelurahan di Kecamatan Cibadak
['id' => 9077, 'district_id' => 1315, 'name' => 'Cibadak'],
['id' => 9078, 'district_id' => 1315, 'name' => 'Cimanggu'],
['id' => 9079, 'district_id' => 1315, 'name' => 'Cipalabuh'],
['id' => 9080, 'district_id' => 1315, 'name' => 'Cikate'],

// Desa/Kelurahan di Kecamatan Cibeber
['id' => 9081, 'district_id' => 1316, 'name' => 'Cibeber'],
['id' => 9082, 'district_id' => 1316, 'name' => 'Cikotok'],
['id' => 9083, 'district_id' => 1316, 'name' => 'Cikondang'],
['id' => 9084, 'district_id' => 1316, 'name' => 'Cikaret'],

// Desa/Kelurahan di Kecamatan Cigemblong
['id' => 9085, 'district_id' => 1317, 'name' => 'Cigemblong'],
['id' => 9086, 'district_id' => 1317, 'name' => 'Cikadu'],
['id' => 9087, 'district_id' => 1317, 'name' => 'Cihaur'],
['id' => 9088, 'district_id' => 1317, 'name' => 'Cikaret'],

// Desa/Kelurahan di Kecamatan Cihara
['id' => 9089, 'district_id' => 1318, 'name' => 'Cihara'],
['id' => 9090, 'district_id' => 1318, 'name' => 'Ciparahu'],
['id' => 9091, 'district_id' => 1318, 'name' => 'Ciparakan'],
['id' => 9092, 'district_id' => 1318, 'name' => 'Ciparay'],

// Desa/Kelurahan di Kecamatan Angsana
['id' => 9093, 'district_id' => 1319, 'name' => 'Angsana'],
['id' => 9094, 'district_id' => 1319, 'name' => 'Cibodas'],
['id' => 9095, 'district_id' => 1319, 'name' => 'Cikadu'],
['id' => 9096, 'district_id' => 1319, 'name' => 'Cikaret'],

// Desa/Kelurahan di Kecamatan Banjar
['id' => 9097, 'district_id' => 1320, 'name' => 'Banjar'],
['id' => 9098, 'district_id' => 1320, 'name' => 'Cibodas'],
['id' => 9099, 'district_id' => 1320, 'name' => 'Cikadu'],
['id' => 9100, 'district_id' => 1320, 'name' => 'Cikaret'],
// Desa/Kelurahan di Kecamatan Bojong
['id' => 9101, 'district_id' => 1321, 'name' => 'Bojong'],
['id' => 9102, 'district_id' => 1321, 'name' => 'Cileles'],
['id' => 9103, 'district_id' => 1321, 'name' => 'Cipanas'],
['id' => 9104, 'district_id' => 1321, 'name' => 'Ciberem'], 

// Desa/Kelurahan di Kecamatan Cadasari
['id' => 9105, 'district_id' => 1322, 'name' => 'Cadasari'],
['id' => 9106, 'district_id' => 1322, 'name' => 'Sukajaya'],
['id' => 9107, 'district_id' => 1322, 'name' => 'Cipeundeuy'],
['id' => 9108, 'district_id' => 1322, 'name' => 'Sinarjaya'],

// Desa/Kelurahan di Kecamatan Carita
['id' => 9109, 'district_id' => 1323, 'name' => 'Carita'],
['id' => 9110, 'district_id' => 1323, 'name' => 'Tamanjaya'],
['id' => 9111, 'district_id' => 1323, 'name' => 'Tanjung Lesung'],
['id' => 9112, 'district_id' => 1323, 'name' => 'Labuan'],

// Desa/Kelurahan di Kecamatan Anyar
['id' => 9113, 'district_id' => 1324, 'name' => 'Anyar'],
['id' => 9114, 'district_id' => 1324, 'name' => 'Cilegon'],
['id' => 9115, 'district_id' => 1324, 'name' => 'Kedaleman'],
['id' => 9116, 'district_id' => 1324, 'name' => 'Cibadak'],

// Desa/Kelurahan di Kecamatan Bandung
['id' => 9117, 'district_id' => 1325, 'name' => 'Bandung'],
['id' => 9118, 'district_id' => 1325, 'name' => 'Kasepuhan'],
['id' => 9119, 'district_id' => 1325, 'name' => 'Pangkalan'],
['id' => 9120, 'district_id' => 1325, 'name' => 'Sukanagara'],

// Desa/Kelurahan di Kecamatan Baros
['id' => 9121, 'district_id' => 1326, 'name' => 'Baros'],
['id' => 9122, 'district_id' => 1326, 'name' => 'Cisarua'],
['id' => 9123, 'district_id' => 1326, 'name' => 'Cigondeh'],
['id' => 9124, 'district_id' => 1326, 'name' => 'Sukaraja'],

// Desa/Kelurahan di Kecamatan Binuang
['id' => 9125, 'district_id' => 1327, 'name' => 'Binuang'],
['id' => 9126, 'district_id' => 1327, 'name' => 'Cibentang'],
['id' => 9127, 'district_id' => 1327, 'name' => 'Sukamantri'],
['id' => 9128, 'district_id' => 1327, 'name' => 'Cidadap'],

// Desa/Kelurahan di Kecamatan Bojonegara
['id' => 9129, 'district_id' => 1328, 'name' => 'Bojonegara'],
['id' => 9130, 'district_id' => 1328, 'name' => 'Bojong Lio'],
['id' => 9131, 'district_id' => 1328, 'name' => 'Pangkalan'],
['id' => 9132, 'district_id' => 1328, 'name' => 'Ciparigi'],

// Desa/Kelurahan di Kecamatan Balaraja
['id' => 9133, 'district_id' => 1329, 'name' => 'Balaraja'],
['id' => 9134, 'district_id' => 1329, 'name' => 'Cilame'],
['id' => 9135, 'district_id' => 1329, 'name' => 'Sukatani'],
['id' => 9136, 'district_id' => 1329, 'name' => 'Bojong Nangka'],

// Desa/Kelurahan di Kecamatan Cikupa
['id' => 9137, 'district_id' => 1330, 'name' => 'Cikupa'],
['id' => 9138, 'district_id' => 1330, 'name' => 'Sukamaju'],
['id' => 9139, 'district_id' => 1330, 'name' => 'Ciater'],
['id' => 9140, 'district_id' => 1330, 'name' => 'Rancawulung'],

// Desa/Kelurahan di Kecamatan Cisauk
['id' => 9141, 'district_id' => 1331, 'name' => 'Cisauk'],
['id' => 9142, 'district_id' => 1331, 'name' => 'Sukadiri'],
['id' => 9143, 'district_id' => 1331, 'name' => 'Tanjung Jaya'],
['id' => 9144, 'district_id' => 1331, 'name' => 'Rancainah'],

// Desa/Kelurahan di Kecamatan Cisoka
['id' => 9145, 'district_id' => 1332, 'name' => 'Cisoka'],
['id' => 9146, 'district_id' => 1332, 'name' => 'Cibatok'],
['id' => 9147, 'district_id' => 1332, 'name' => 'Kopong'],
['id' => 9148, 'district_id' => 1332, 'name' => 'Curug'],

// Desa/Kelurahan di Kecamatan Curug
['id' => 9149, 'district_id' => 1333, 'name' => 'Curug'],
['id' => 9150, 'district_id' => 1333, 'name' => 'Sukamaju'],
['id' => 9151, 'district_id' => 1333, 'name' => 'Ciporeat'],
['id' => 9152, 'district_id' => 1333, 'name' => 'Citemu'],

// Desa/Kelurahan di Kecamatan Cibeber
['id' => 9153, 'district_id' => 1334, 'name' => 'Cibeber'],
['id' => 9154, 'district_id' => 1334, 'name' => 'Cilawang'],
['id' => 9155, 'district_id' => 1334, 'name' => 'Cipinang'],
['id' => 9156, 'district_id' => 1334, 'name' => 'Cikande'],

// Desa/Kelurahan di Kecamatan Cilegon
['id' => 9157, 'district_id' => 1335, 'name' => 'Cilegon'],
['id' => 9158, 'district_id' => 1335, 'name' => 'Bojonegara'],
['id' => 9159, 'district_id' => 1335, 'name' => 'Ciwandan'],
['id' => 9160, 'district_id' => 1335, 'name' => 'Gerogol'],

// Desa/Kelurahan di Kecamatan Citangkil
['id' => 9161, 'district_id' => 1336, 'name' => 'Citangkil'],
['id' => 9162, 'district_id' => 1336, 'name' => 'Cilamaya'],
['id' => 9163, 'district_id' => 1336, 'name' => 'Cipeucang'],
['id' => 9164, 'district_id' => 1336, 'name' => 'Kranji'],

// Desa/Kelurahan di Kecamatan Ciwandan
['id' => 9165, 'district_id' => 1337, 'name' => 'Ciwandan'],
['id' => 9166, 'district_id' => 1337, 'name' => 'Ciwuni'],
['id' => 9167, 'district_id' => 1337, 'name' => 'Cibeber'],
['id' => 9168, 'district_id' => 1337, 'name' => 'Balong'],

// Desa/Kelurahan di Kecamatan Gerogol
['id' => 9169, 'district_id' => 1338, 'name' => 'Gerogol'],
['id' => 9170, 'district_id' => 1338, 'name' => 'Karang Asem'],
['id' => 9171, 'district_id' => 1338, 'name' => 'Sukarasa'],
['id' => 9172, 'district_id' => 1338, 'name' => 'Jati'],

// Desa/Kelurahan di Kecamatan Cipocok Jaya
['id' => 9173, 'district_id' => 1339, 'name' => 'Cipocok Jaya'],
['id' => 9174, 'district_id' => 1339, 'name' => 'Ciparay'],
['id' => 9175, 'district_id' => 1339, 'name' => 'Rancasumur'],
['id' => 9176, 'district_id' => 1339, 'name' => 'Sukasari'],

// Desa/Kelurahan di Kecamatan Curug
['id' => 9177, 'district_id' => 1340, 'name' => 'Curug'],
['id' => 9178, 'district_id' => 1340, 'name' => 'Sukarame'],
['id' => 9179, 'district_id' => 1340, 'name' => 'Kebon Manggis'],
['id' => 9180, 'district_id' => 1340, 'name' => 'Ciputat'],
// Desa/Kelurahan di Kecamatan Kasemen
['id' => 9181, 'district_id' => 1341, 'name' => 'Kasemen'],
['id' => 9182, 'district_id' => 1341, 'name' => 'Kalimukti'],
['id' => 9183, 'district_id' => 1341, 'name' => 'Ciwulan'],
['id' => 9184, 'district_id' => 1341, 'name' => 'Cigadung'], 

// Desa/Kelurahan di Kecamatan Serang
['id' => 9185, 'district_id' => 1342, 'name' => 'Serang'],
['id' => 9186, 'district_id' => 1342, 'name' => 'Cipocok Jaya'],
['id' => 9187, 'district_id' => 1342, 'name' => 'Taktakan'],
['id' => 9188, 'district_id' => 1342, 'name' => 'Bojonegara'],

// Desa/Kelurahan di Kecamatan Taktakan
['id' => 9189, 'district_id' => 1343, 'name' => 'Taktakan'],
['id' => 9190, 'district_id' => 1343, 'name' => 'Pondok Blanter'],
['id' => 9191, 'district_id' => 1343, 'name' => 'Karangasem'], 

// Desa/Kelurahan di Kecamatan Batuceper
['id' => 9192, 'district_id' => 1344, 'name' => 'Batuceper'],
['id' => 9193, 'district_id' => 1344, 'name' => 'Cigelam'],
['id' => 9194, 'district_id' => 1344, 'name' => 'Kelapa Dua'],

// Desa/Kelurahan di Kecamatan Benda
['id' => 9195, 'district_id' => 1345, 'name' => 'Benda'],
['id' => 9196, 'district_id' => 1345, 'name' => 'Ranca Buaya'],
['id' => 9197, 'district_id' => 1345, 'name' => 'Kosambi'],

// Desa/Kelurahan di Kecamatan Cibodas
['id' => 9198, 'district_id' => 1346, 'name' => 'Cibodas'],
['id' => 9199, 'district_id' => 1346, 'name' => 'Cibeber'],
['id' => 9200, 'district_id' => 1346, 'name' => 'Cipondoh'],

// Desa/Kelurahan di Kecamatan Ciledug
['id' => 9201, 'district_id' => 1347, 'name' => 'Ciledug'],
['id' => 9202, 'district_id' => 1347, 'name' => 'Kunciran'],
['id' => 9203, 'district_id' => 1347, 'name' => 'Kutabumi'],

// Desa/Kelurahan di Kecamatan Cipondoh
['id' => 9204, 'district_id' => 1348, 'name' => 'Cipondoh'],
['id' => 9205, 'district_id' => 1348, 'name' => 'Pondok Aren'],
['id' => 9206, 'district_id' => 1348, 'name' => 'Kampung Melayu'],

// Desa/Kelurahan di Kecamatan Ciputat
['id' => 9207, 'district_id' => 1349, 'name' => 'Ciputat'],
['id' => 9208, 'district_id' => 1349, 'name' => 'Ciputat Timur'],
['id' => 9209, 'district_id' => 1349, 'name' => 'Pamulang'],

// Desa/Kelurahan di Kecamatan Ciputat Timur
['id' => 9210, 'district_id' => 1350, 'name' => 'Ciputat Timur'],
['id' => 9211, 'district_id' => 1350, 'name' => 'Pondok Aren'],
['id' => 9212, 'district_id' => 1350, 'name' => 'Serpong'],

// Desa/Kelurahan di Kecamatan Pamulang
['id' => 9213, 'district_id' => 1351, 'name' => 'Pamulang'],
['id' => 9214, 'district_id' => 1351, 'name' => 'Pamulang Barat'],
['id' => 9215, 'district_id' => 1351, 'name' => 'Pamulang Timur'],

// Desa/Kelurahan di Kecamatan Pondok Aren
['id' => 9216, 'district_id' => 1352, 'name' => 'Pondok Aren'],
['id' => 9217, 'district_id' => 1352, 'name' => 'Ciputat'],
['id' => 9218, 'district_id' => 1352, 'name' => 'Pamulang'],

// Desa/Kelurahan di Kecamatan Serpong
['id' => 9219, 'district_id' => 1353, 'name' => 'Serpong'],
['id' => 9220, 'district_id' => 1353, 'name' => 'Serpong Utara'],
['id' => 9221, 'district_id' => 1353, 'name' => 'Kunciran'],

// Desa/Kelurahan di Kecamatan Abiansemal
['id' => 9222, 'district_id' => 1354, 'name' => 'Abiansemal'],
['id' => 9223, 'district_id' => 1354, 'name' => 'Petang'],
['id' => 9224, 'district_id' => 1354, 'name' => 'Marga'],

// Desa/Kelurahan di Kecamatan Kuta
['id' => 9225, 'district_id' => 1355, 'name' => 'Kuta'],
['id' => 9226, 'district_id' => 1355, 'name' => 'Legian'],
['id' => 9227, 'district_id' => 1355, 'name' => 'Seminyak'],

// Desa/Kelurahan di Kecamatan Kuta Selatan
['id' => 9228, 'district_id' => 1356, 'name' => 'Kuta Selatan'],
['id' => 9229, 'district_id' => 1356, 'name' => 'Jimbaran'],
['id' => 9230, 'district_id' => 1356, 'name' => 'Ungasan'],

// Desa/Kelurahan di Kecamatan Kuta Utara
['id' => 9231, 'district_id' => 1357, 'name' => 'Kuta Utara'],
['id' => 9232, 'district_id' => 1357, 'name' => 'Canggu'],
['id' => 9233, 'district_id' => 1357, 'name' => 'Pererenan'],

// Desa/Kelurahan di Kecamatan Mengwi
['id' => 9234, 'district_id' => 1358, 'name' => 'Mengwi'],
['id' => 9235, 'district_id' => 1358, 'name' => 'Baha'],
['id' => 9236, 'district_id' => 1358, 'name' => 'Tampaksiring'],

// Desa/Kelurahan di Kecamatan Bangli
['id' => 9237, 'district_id' => 1359, 'name' => 'Bangli'],
['id' => 9238, 'district_id' => 1359, 'name' => 'Batur'],
['id' => 9239, 'district_id' => 1359, 'name' => 'Tamanbali'],

// Desa/Kelurahan di Kecamatan Kintamani
['id' => 9240, 'district_id' => 1360, 'name' => 'Kintamani'],
['id' => 9241, 'district_id' => 1360, 'name' => 'Penelokan'],
['id' => 9242, 'district_id' => 1360, 'name' => 'Tegallalang'],
// Desa/Kelurahan di Kecamatan Susut
['id' => 9243, 'district_id' => 1361, 'name' => 'Beling'],
['id' => 9244, 'district_id' => 1361, 'name' => 'Buntut'],
['id' => 9245, 'district_id' => 1361, 'name' => 'Sangsit'], 

// Desa/Kelurahan di Kecamatan Tembuku
['id' => 9246, 'district_id' => 1362, 'name' => 'Tembuku'],
['id' => 9247, 'district_id' => 1362, 'name' => 'Sidan'],
['id' => 9248, 'district_id' => 1362, 'name' => 'Desa Apuan'],

// Desa/Kelurahan di Kecamatan Banjar
['id' => 9249, 'district_id' => 1363, 'name' => 'Banjar'],
['id' => 9250, 'district_id' => 1363, 'name' => 'Benculuk'],
['id' => 9251, 'district_id' => 1363, 'name' => 'Kalibukbuk'],

// Desa/Kelurahan di Kecamatan Buleleng
['id' => 9252, 'district_id' => 1364, 'name' => 'Buleleng'],
['id' => 9253, 'district_id' => 1364, 'name' => 'Dencarik'],
['id' => 9254, 'district_id' => 1364, 'name' => 'Kedisan'],

// Desa/Kelurahan di Kecamatan Busungbiu
['id' => 9255, 'district_id' => 1365, 'name' => 'Busungbiu'],
['id' => 9256, 'district_id' => 1365, 'name' => 'Pucaksari'],
['id' => 9257, 'district_id' => 1365, 'name' => 'Singaraja'],

// Desa/Kelurahan di Kecamatan Gerokgak
['id' => 9258, 'district_id' => 1366, 'name' => 'Gerokgak'],
['id' => 9259, 'district_id' => 1366, 'name' => 'Penuktukan'],
['id' => 9260, 'district_id' => 1366, 'name' => 'Banyuatis'],

// Desa/Kelurahan di Kecamatan Kubutambahan
['id' => 9261, 'district_id' => 1367, 'name' => 'Kubutambahan'],
['id' => 9262, 'district_id' => 1367, 'name' => 'Klungkung'],
['id' => 9263, 'district_id' => 1367, 'name' => 'Anturan'],

// Desa/Kelurahan di Kecamatan Blahbatuh
['id' => 9264, 'district_id' => 1368, 'name' => 'Blahbatuh'],
['id' => 9265, 'district_id' => 1368, 'name' => 'Batuan'],
['id' => 9266, 'district_id' => 1368, 'name' => 'Tampaksiring'],

// Desa/Kelurahan di Kecamatan Gianyar
['id' => 9267, 'district_id' => 1369, 'name' => 'Gianyar'],
['id' => 9268, 'district_id' => 1369, 'name' => 'Tegalalang'],
['id' => 9269, 'district_id' => 1369, 'name' => 'Kampung Bugis'],

// Desa/Kelurahan di Kecamatan Payangan
['id' => 9270, 'district_id' => 1370, 'name' => 'Payangan'],
['id' => 9271, 'district_id' => 1370, 'name' => 'Bunga'],
['id' => 9272, 'district_id' => 1370, 'name' => 'Suwung'],

// Desa/Kelurahan di Kecamatan Sukawati
['id' => 9273, 'district_id' => 1371, 'name' => 'Sukawati'],
['id' => 9274, 'district_id' => 1371, 'name' => 'Cekik'],
['id' => 9275, 'district_id' => 1371, 'name' => 'Abiansemal'],

// Desa/Kelurahan di Kecamatan Tegallalang
['id' => 9276, 'district_id' => 1372, 'name' => 'Tegallalang'],
['id' => 9277, 'district_id' => 1372, 'name' => 'Canggu'],
['id' => 9278, 'district_id' => 1372, 'name' => 'Paksebali'],

// Desa/Kelurahan di Kecamatan Jembrana
['id' => 9279, 'district_id' => 1373, 'name' => 'Jembrana'],
['id' => 9280, 'district_id' => 1373, 'name' => 'Melaya'],
['id' => 9281, 'district_id' => 1373, 'name' => 'Mendoyo'],

// Desa/Kelurahan di Kecamatan Melaya
['id' => 9282, 'district_id' => 1374, 'name' => 'Melaya'],
['id' => 9283, 'district_id' => 1374, 'name' => 'Tuban'],
['id' => 9284, 'district_id' => 1374, 'name' => 'Tempekan'],

// Desa/Kelurahan di Kecamatan Mendoyo
['id' => 9285, 'district_id' => 1375, 'name' => 'Mendoyo'],
['id' => 9286, 'district_id' => 1375, 'name' => 'Baturiti'],
['id' => 9287, 'district_id' => 1375, 'name' => 'Pengambengan'],

// Desa/Kelurahan di Kecamatan Negara
['id' => 9288, 'district_id' => 1376, 'name' => 'Negara'],
['id' => 9289, 'district_id' => 1376, 'name' => 'Bali'],
['id' => 9290, 'district_id' => 1376, 'name' => 'Singaraja'],

// Desa/Kelurahan di Kecamatan Pekutatan
['id' => 9291, 'district_id' => 1377, 'name' => 'Pekutatan'],
['id' => 9292, 'district_id' => 1377, 'name' => 'Anturan'],
['id' => 9293, 'district_id' => 1377, 'name' => 'Pakumbang'],

// Desa/Kelurahan di Kecamatan Abang
['id' => 9294, 'district_id' => 1378, 'name' => 'Abang'],
['id' => 9295, 'district_id' => 1378, 'name' => 'Bubunan'],
['id' => 9296, 'district_id' => 1378, 'name' => 'Telaga'],

// Desa/Kelurahan di Kecamatan Bebandem
['id' => 9297, 'district_id' => 1379, 'name' => 'Bebandem'],
['id' => 9298, 'district_id' => 1379, 'name' => 'Subagan'],
['id' => 9299, 'district_id' => 1379, 'name' => 'Tista'],

// Desa/Kelurahan di Kecamatan Karangasem
['id' => 9300, 'district_id' => 1380, 'name' => 'Karangasem'],
['id' => 9301, 'district_id' => 1380, 'name' => 'Amed'],
['id' => 9302, 'district_id' => 1380, 'name' => 'Sidemen'],
// Desa/Kelurahan di Kecamatan Kubu
['id' => 9303, 'district_id' => 1381, 'name' => 'Kubu'],
['id' => 9304, 'district_id' => 1381, 'name' => 'Tegalwangi'],
['id' => 9305, 'district_id' => 1381, 'name' => 'Tejakula'],

// Desa/Kelurahan di Kecamatan Manggis
['id' => 9306, 'district_id' => 1382, 'name' => 'Manggis'],
['id' => 9307, 'district_id' => 1382, 'name' => 'Buda'],
['id' => 9308, 'district_id' => 1382, 'name' => 'Kerta'],

// Desa/Kelurahan di Kecamatan Banjarangkan
['id' => 9309, 'district_id' => 1383, 'name' => 'Banjarangkan'],
['id' => 9310, 'district_id' => 1383, 'name' => 'Tusan'],
['id' => 9311, 'district_id' => 1383, 'name' => 'Pering'],

// Desa/Kelurahan di Kecamatan Dawan
['id' => 9312, 'district_id' => 1384, 'name' => 'Dawan'],
['id' => 9313, 'district_id' => 1384, 'name' => 'Tenganan'],
['id' => 9314, 'district_id' => 1384, 'name' => 'Pakraman'],

// Desa/Kelurahan di Kecamatan Klungkung
['id' => 9315, 'district_id' => 1385, 'name' => 'Klungkung'],
['id' => 9316, 'district_id' => 1385, 'name' => 'Semarapura'],
['id' => 9317, 'district_id' => 1385, 'name' => 'Pentas'],

// Desa/Kelurahan di Kecamatan Nusapenida
['id' => 9318, 'district_id' => 1386, 'name' => 'Nusapenida'],
['id' => 9319, 'district_id' => 1386, 'name' => 'Toyapakeh'],
['id' => 9320, 'district_id' => 1386, 'name' => 'Banjarasem'],

// Desa/Kelurahan di Kecamatan Baturiti
['id' => 9321, 'district_id' => 1387, 'name' => 'Baturiti'],
['id' => 9322, 'district_id' => 1387, 'name' => 'Br. Tegal'],
['id' => 9323, 'district_id' => 1387, 'name' => 'Buwit'],

// Desa/Kelurahan di Kecamatan Kediri
['id' => 9324, 'district_id' => 1388, 'name' => 'Kediri'],
['id' => 9325, 'district_id' => 1388, 'name' => 'Pasung'],
['id' => 9326, 'district_id' => 1388, 'name' => 'Sembung'],

// Desa/Kelurahan di Kecamatan Kerambitan
['id' => 9327, 'district_id' => 1389, 'name' => 'Kerambitan'],
['id' => 9328, 'district_id' => 1389, 'name' => 'Tampaksiring'],
['id' => 9329, 'district_id' => 1389, 'name' => 'Suwung'],

// Desa/Kelurahan di Kecamatan Marga
['id' => 9330, 'district_id' => 1390, 'name' => 'Marga'],
['id' => 9331, 'district_id' => 1390, 'name' => 'Seririt'],
['id' => 9332, 'district_id' => 1390, 'name' => 'Teluk'],

// Desa/Kelurahan di Kecamatan Penebel
['id' => 9333, 'district_id' => 1391, 'name' => 'Penebel'],
['id' => 9334, 'district_id' => 1391, 'name' => 'Soka'],
['id' => 9335, 'district_id' => 1391, 'name' => 'Pengepul'],

// Desa/Kelurahan di Kecamatan Denpasar Barat
['id' => 9336, 'district_id' => 1392, 'name' => 'Denpasar Barat'],
['id' => 9337, 'district_id' => 1392, 'name' => 'Catur Muka'],
['id' => 9338, 'district_id' => 1392, 'name' => 'Sudirman'],

// Desa/Kelurahan di Kecamatan Denpasar Selatan
['id' => 9339, 'district_id' => 1393, 'name' => 'Denpasar Selatan'],
['id' => 9340, 'district_id' => 1393, 'name' => 'Niti Mandala'],
['id' => 9341, 'district_id' => 1393, 'name' => 'Pemogan'],

// Desa/Kelurahan di Kecamatan Denpasar Timur
['id' => 9342, 'district_id' => 1394, 'name' => 'Denpasar Timur'],
['id' => 9343, 'district_id' => 1394, 'name' => 'Bali Taman'],
['id' => 9344, 'district_id' => 1394, 'name' => 'Kesiman'],

// Desa/Kelurahan di Kecamatan Denpasar Utara
['id' => 9345, 'district_id' => 1395, 'name' => 'Denpasar Utara'],
['id' => 9346, 'district_id' => 1395, 'name' => 'Kaja'],
['id' => 9347, 'district_id' => 1395, 'name' => 'Sanur'],

// Desa/Kelurahan di Kecamatan Ambalawi
['id' => 9348, 'district_id' => 1396, 'name' => 'Ambalawi'],
['id' => 9349, 'district_id' => 1396, 'name' => 'Belo'],
['id' => 9350, 'district_id' => 1396, 'name' => 'Bolo'],

// Desa/Kelurahan di Kecamatan Belo
['id' => 9351, 'district_id' => 1397, 'name' => 'Belo'],
['id' => 9352, 'district_id' => 1397, 'name' => 'Donggo'],
['id' => 9353, 'district_id' => 1397, 'name' => 'Lambitu'],

// Desa/Kelurahan di Kecamatan Bolo
['id' => 9354, 'district_id' => 1398, 'name' => 'Bolo'],
['id' => 9355, 'district_id' => 1398, 'name' => 'Labuan'],
['id' => 9356, 'district_id' => 1398, 'name' => 'Sangiang'],

// Desa/Kelurahan di Kecamatan Donggo
['id' => 9357, 'district_id' => 1399, 'name' => 'Donggo'],
['id' => 9358, 'district_id' => 1399, 'name' => 'Jambu'],
['id' => 9359, 'district_id' => 1399, 'name' => 'Tegera'],

// Desa/Kelurahan di Kecamatan Lambitu
['id' => 9360, 'district_id' => 1400, 'name' => 'Lambitu'],
['id' => 9361, 'district_id' => 1400, 'name' => 'Serai'],
['id' => 9362, 'district_id' => 1400, 'name' => 'Pahu'],

// Desa/Kelurahan di Kecamatan Dompu
['id' => 9363, 'district_id' => 1401, 'name' => 'Dompu'],
['id' => 9364, 'district_id' => 1401, 'name' => 'Doro'],
['id' => 9365, 'district_id' => 1401, 'name' => 'Pajo'],

// Desa/Kelurahan di Kecamatan Hu'u
['id' => 9366, 'district_id' => 1402, 'name' => 'Hu\'u'],
['id' => 9367, 'district_id' => 1402, 'name' => 'Sanggar'],
['id' => 9368, 'district_id' => 1402, 'name' => 'Tente'],

// Desa/Kelurahan di Kecamatan Kempo
['id' => 9369, 'district_id' => 1403, 'name' => 'Kempo'],
['id' => 9370, 'district_id' => 1403, 'name' => 'Manta'],
['id' => 9371, 'district_id' => 1403, 'name' => 'Peresak'],

// Desa/Kelurahan di Kecamatan Kilo
['id' => 9372, 'district_id' => 1404, 'name' => 'Kilo'],
['id' => 9373, 'district_id' => 1404, 'name' => 'Giri Suko'],
['id' => 9374, 'district_id' => 1404, 'name' => 'Karang Sari'],

// Desa/Kelurahan di Kecamatan Manggalewa
['id' => 9375, 'district_id' => 1405, 'name' => 'Manggalewa'],
['id' => 9376, 'district_id' => 1405, 'name' => 'Sambelia'],
['id' => 9377, 'district_id' => 1405, 'name' => 'Tebolek'],

// Desa/Kelurahan di Kecamatan Batu Layar
['id' => 9378, 'district_id' => 1406, 'name' => 'Batu Layar'],
['id' => 9379, 'district_id' => 1406, 'name' => 'Lembar'],
['id' => 9380, 'district_id' => 1406, 'name' => 'Senggigi'],

// Desa/Kelurahan di Kecamatan Gerung
['id' => 9381, 'district_id' => 1407, 'name' => 'Gerung'],
['id' => 9382, 'district_id' => 1407, 'name' => 'Duman'],
['id' => 9383, 'district_id' => 1407, 'name' => 'Gili Gede'],

// Desa/Kelurahan di Kecamatan Gunungsari
['id' => 9384, 'district_id' => 1408, 'name' => 'Gunungsari'],
['id' => 9385, 'district_id' => 1408, 'name' => 'Pendidikan'],
['id' => 9386, 'district_id' => 1408, 'name' => 'Selat'],

// Desa/Kelurahan di Kecamatan Kediri
['id' => 9387, 'district_id' => 1409, 'name' => 'Kediri'],
['id' => 9388, 'district_id' => 1409, 'name' => 'Sumberkelombang'],
['id' => 9389, 'district_id' => 1409, 'name' => 'Sesela'],

// Desa/Kelurahan di Kecamatan Kuripan
['id' => 9390, 'district_id' => 1410, 'name' => 'Kuripan'],
['id' => 9391, 'district_id' => 1410, 'name' => 'Lendang Nangka'],
['id' => 9392, 'district_id' => 1410, 'name' => 'Tanjung Gading'],

// Desa/Kelurahan di Kecamatan Batukliang
['id' => 9393, 'district_id' => 1411, 'name' => 'Batukliang'],
['id' => 9394, 'district_id' => 1411, 'name' => 'Kelurahan Kota'],
['id' => 9395, 'district_id' => 1411, 'name' => 'Lendang'],

// Desa/Kelurahan di Kecamatan Batukliang Utara
['id' => 9396, 'district_id' => 1412, 'name' => 'Batukliang Utara'],
['id' => 9397, 'district_id' => 1412, 'name' => 'Selong'],
['id' => 9398, 'district_id' => 1412, 'name' => 'Serage'],

// Desa/Kelurahan di Kecamatan Janapria
['id' => 9399, 'district_id' => 1413, 'name' => 'Janapria'],
['id' => 9400, 'district_id' => 1413, 'name' => 'Dulang'],
['id' => 9401, 'district_id' => 1413, 'name' => 'Randa'],

// Desa/Kelurahan di Kecamatan Jonggat
['id' => 9402, 'district_id' => 1414, 'name' => 'Jonggat'],
['id' => 9403, 'district_id' => 1414, 'name' => 'Sumberejo'],
['id' => 9404, 'district_id' => 1414, 'name' => 'Gadang'],

// Desa/Kelurahan di Kecamatan Kopang
['id' => 9405, 'district_id' => 1415, 'name' => 'Kopang'],
['id' => 9406, 'district_id' => 1415, 'name' => 'Porey'],
['id' => 9407, 'district_id' => 1415, 'name' => 'Mekar'],

// Desa/Kelurahan di Kecamatan Aikmel
['id' => 9408, 'district_id' => 1416, 'name' => 'Aikmel'],
['id' => 9409, 'district_id' => 1416, 'name' => 'Mekar Sari'],
['id' => 9410, 'district_id' => 1416, 'name' => 'Selong'],

// Desa/Kelurahan di Kecamatan Jerowaru
['id' => 9411, 'district_id' => 1417, 'name' => 'Jerowaru'],
['id' => 9412, 'district_id' => 1417, 'name' => 'Penyo'],
['id' => 9413, 'district_id' => 1417, 'name' => 'Lubuan'],

// Desa/Kelurahan di Kecamatan Keruak
['id' => 9414, 'district_id' => 1418, 'name' => 'Keruak'],
['id' => 9415, 'district_id' => 1418, 'name' => 'Kepun'],
['id' => 9416, 'district_id' => 1418, 'name' => 'Batu Kumbung'],

// Desa/Kelurahan di Kecamatan Labuhan Haji
['id' => 9417, 'district_id' => 1419, 'name' => 'Labuhan Haji'],
['id' => 9418, 'district_id' => 1419, 'name' => 'Labuhan Kejak'],
['id' => 9419, 'district_id' => 1419, 'name' => 'Mekar Indah'],

// Desa/Kelurahan di Kecamatan Masbagik
['id' => 9420, 'district_id' => 1420, 'name' => 'Masbagik'],
['id' => 9421, 'district_id' => 1420, 'name' => 'Suka Sari'],
['id' => 9422, 'district_id' => 1420, 'name' => 'Sumber'],

// Desa/Kelurahan di Kecamatan Bayan
['id' => 9423, 'district_id' => 1421, 'name' => 'Bayan'],
['id' => 9424, 'district_id' => 1421, 'name' => 'Dani'],
['id' => 9425, 'district_id' => 1421, 'name' => 'Kayangan'],

// Desa/Kelurahan di Kecamatan Gangga
['id' => 9426, 'district_id' => 1422, 'name' => 'Gangga'],
['id' => 9427, 'district_id' => 1422, 'name' => 'Bagek'],
['id' => 9428, 'district_id' => 1422, 'name' => 'Montong Suka'],

// Desa/Kelurahan di Kecamatan Kayangan
['id' => 9429, 'district_id' => 1423, 'name' => 'Kayangan'],
['id' => 9430, 'district_id' => 1423, 'name' => 'Setia Laksana'],
['id' => 9431, 'district_id' => 1423, 'name' => 'Pujut'],

// Desa/Kelurahan di Kecamatan Pemenang
['id' => 9432, 'district_id' => 1424, 'name' => 'Pemenang'],
['id' => 9433, 'district_id' => 1424, 'name' => 'Gili Air'],
['id' => 9434, 'district_id' => 1424, 'name' => 'Tanjung'],

// Desa/Kelurahan di Kecamatan Tanjung
['id' => 9435, 'district_id' => 1425, 'name' => 'Tanjung'],
['id' => 9436, 'district_id' => 1425, 'name' => 'Kampung Baru'],
['id' => 9437, 'district_id' => 1425, 'name' => 'Sari Mekar'],

// Desa/Kelurahan di Kecamatan Alas
['id' => 9438, 'district_id' => 1426, 'name' => 'Alas'],
['id' => 9439, 'district_id' => 1426, 'name' => 'Bukit Malang'],
['id' => 9440, 'district_id' => 1426, 'name' => 'Tualang'],

// Desa/Kelurahan di Kecamatan Alas Barat
['id' => 9441, 'district_id' => 1427, 'name' => 'Alas Barat'],
['id' => 9442, 'district_id' => 1427, 'name' => 'Keramat'],
['id' => 9443, 'district_id' => 1427, 'name' => 'Sundak'],

// Desa/Kelurahan di Kecamatan Batulanteh
['id' => 9444, 'district_id' => 1428, 'name' => 'Batulanteh'],
['id' => 9445, 'district_id' => 1428, 'name' => 'Sumber Rejo'],
['id' => 9446, 'district_id' => 1428, 'name' => 'Pantai'],

// Desa/Kelurahan di Kecamatan Buer
['id' => 9447, 'district_id' => 1429, 'name' => 'Buer'],
['id' => 9448, 'district_id' => 1429, 'name' => 'Kepel'],
['id' => 9449, 'district_id' => 1429, 'name' => 'Sumber Makmur'],

// Desa/Kelurahan di Kecamatan Empang
['id' => 9450, 'district_id' => 1430, 'name' => 'Empang'],
['id' => 9451, 'district_id' => 1430, 'name' => 'Gintung'],
['id' => 9452, 'district_id' => 1430, 'name' => 'Kampung Baru'],
// Desa/Kelurahan di Kecamatan Brang Ene
['id' => 9453, 'district_id' => 1431, 'name' => 'Brang Ene'],
['id' => 9454, 'district_id' => 1431, 'name' => 'Brang Rea'],
['id' => 9455, 'district_id' => 1431, 'name' => 'Maluk'],

// Desa/Kelurahan di Kecamatan Brang Rea
['id' => 9456, 'district_id' => 1432, 'name' => 'Brang Rea'],
['id' => 9457, 'district_id' => 1432, 'name' => 'Jereweh'],
['id' => 9458, 'district_id' => 1432, 'name' => 'Poto Tano'],

// Desa/Kelurahan di Kecamatan Jereweh
['id' => 9459, 'district_id' => 1433, 'name' => 'Jereweh'],
['id' => 9460, 'district_id' => 1433, 'name' => 'Rusa'],
['id' => 9461, 'district_id' => 1433, 'name' => 'Sumber Harapan'],

// Desa/Kelurahan di Kecamatan Maluk
['id' => 9462, 'district_id' => 1434, 'name' => 'Maluk'],
['id' => 9463, 'district_id' => 1434, 'name' => 'Tebaro'],
['id' => 9464, 'district_id' => 1434, 'name' => 'Sumber Baru'],

// Desa/Kelurahan di Kecamatan Poto Tano
['id' => 9465, 'district_id' => 1435, 'name' => 'Poto Tano'],
['id' => 9466, 'district_id' => 1435, 'name' => 'Telaga Sari'],
['id' => 9467, 'district_id' => 1435, 'name' => 'Karang Sari'],

// Desa/Kelurahan di Kecamatan Asakota
['id' => 9468, 'district_id' => 1436, 'name' => 'Asakota'],
['id' => 9469, 'district_id' => 1436, 'name' => 'Sumbawa'],
['id' => 9470, 'district_id' => 1436, 'name' => 'Kelapa Satu'],

// Desa/Kelurahan di Kecamatan Mpunda
['id' => 9471, 'district_id' => 1437, 'name' => 'Mpunda'],
['id' => 9472, 'district_id' => 1437, 'name' => 'Panjang Sari'],
['id' => 9473, 'district_id' => 1437, 'name' => 'Kelapa Dua'],

// Desa/Kelurahan di Kecamatan Raba
['id' => 9474, 'district_id' => 1438, 'name' => 'Raba'],
['id' => 9475, 'district_id' => 1438, 'name' => 'Lombok Timur'],
['id' => 9476, 'district_id' => 1438, 'name' => 'Sumber Rejo'],

// Desa/Kelurahan di Kecamatan Rasanae Barat
['id' => 9477, 'district_id' => 1439, 'name' => 'Rasanae Barat'],
['id' => 9478, 'district_id' => 1439, 'name' => 'Kelapa Selatan'],
['id' => 9479, 'district_id' => 1439, 'name' => 'Gunung Sari'],

// Desa/Kelurahan di Kecamatan Rasanae Timur
['id' => 9480, 'district_id' => 1440, 'name' => 'Rasanae Timur'],
['id' => 9481, 'district_id' => 1440, 'name' => 'Telaga'],
['id' => 9482, 'district_id' => 1440, 'name' => 'Ratahan'],

// Desa/Kelurahan di Kecamatan Ampenan
['id' => 9483, 'district_id' => 1441, 'name' => 'Ampenan'],
['id' => 9484, 'district_id' => 1441, 'name' => 'Telaga Agung'],
['id' => 9485, 'district_id' => 1441, 'name' => 'Tungging'],

// Desa/Kelurahan di Kecamatan Cakranegara
['id' => 9486, 'district_id' => 1442, 'name' => 'Cakranegara'],
['id' => 9487, 'district_id' => 1442, 'name' => 'Pemenang'],
['id' => 9488, 'district_id' => 1442, 'name' => 'Mataram Timur'],

// Desa/Kelurahan di Kecamatan Mataram
['id' => 9489, 'district_id' => 1443, 'name' => 'Mataram'],
['id' => 9490, 'district_id' => 1443, 'name' => 'Ampenan'],
['id' => 9491, 'district_id' => 1443, 'name' => 'Sanggrahan'],

// Desa/Kelurahan di Kecamatan Sandubaya
['id' => 9492, 'district_id' => 1444, 'name' => 'Sandubaya'],
['id' => 9493, 'district_id' => 1444, 'name' => 'Selaparang'],
['id' => 9494, 'district_id' => 1444, 'name' => 'Tanjung Sari'],

// Desa/Kelurahan di Kecamatan Sekarbela
['id' => 9495, 'district_id' => 1445, 'name' => 'Sekarbela'],
['id' => 9496, 'district_id' => 1445, 'name' => 'Sayang'],
['id' => 9497, 'district_id' => 1445, 'name' => 'Baturetno'],
// Desa/Kelurahan di Kecamatan Alor Barat Daya
['id' => 9498, 'district_id' => 1446, 'name' => 'Alor Barat Daya'],
['id' => 9499, 'district_id' => 1446, 'name' => 'Alor Timur'],
['id' => 9500, 'district_id' => 1446, 'name' => 'Kelapa Kecil'],

// Desa/Kelurahan di Kecamatan Alor Barat Laut
['id' => 9501, 'district_id' => 1447, 'name' => 'Alor Barat Laut'],
['id' => 9502, 'district_id' => 1447, 'name' => 'Alor Tengah'],
['id' => 9503, 'district_id' => 1447, 'name' => 'Wuluhan'],

// Desa/Kelurahan di Kecamatan Alor Selatan
['id' => 9504, 'district_id' => 1448, 'name' => 'Alor Selatan'],
['id' => 9505, 'district_id' => 1448, 'name' => 'Kalabahi'],
['id' => 9506, 'district_id' => 1448, 'name' => 'Panglima'],

// Desa/Kelurahan di Kecamatan Alor Tengah Utara
['id' => 9507, 'district_id' => 1449, 'name' => 'Alor Tengah Utara'],
['id' => 9508, 'district_id' => 1449, 'name' => 'Riau'],
['id' => 9509, 'district_id' => 1449, 'name' => 'Waimang'],

// Desa/Kelurahan di Kecamatan Alor Timur
['id' => 9510, 'district_id' => 1450, 'name' => 'Alor Timur'],
['id' => 9511, 'district_id' => 1450, 'name' => 'Alor Utara'],
['id' => 9512, 'district_id' => 1450, 'name' => 'Kampung Baru'],
// Desa/Kelurahan di Kecamatan Atambua
['id' => 9513, 'district_id' => 1451, 'name' => 'Atambua Kota'],
['id' => 9514, 'district_id' => 1451, 'name' => 'Kabuna'],
['id' => 9515, 'district_id' => 1451, 'name' => 'Tublama'],
// Desa/Kelurahan di Kecamatan Kakuluk Mesak
['id' => 9516, 'district_id' => 1452, 'name' => 'Kakuluk'],
['id' => 9517, 'district_id' => 1452, 'name' => 'Batuhita'],
['id' => 9518, 'district_id' => 1452, 'name' => 'Nailaba'],
// Desa/Kelurahan di Kecamatan Lamaknen
['id' => 9519, 'district_id' => 1453, 'name' => 'Lamaknen Selatan'],
['id' => 9520, 'district_id' => 1453, 'name' => 'Lamaknen Utara'],
['id' => 9521, 'district_id' => 1453, 'name' => 'Kefamenanu'],
// Desa/Kelurahan di Kecamatan Ende Selatan
['id' => 9522, 'district_id' => 1454, 'name' => 'Kampung Ratu'],
['id' => 9523, 'district_id' => 1454, 'name' => 'Wologai'],
['id' => 9524, 'district_id' => 1454, 'name' => 'Pango'],
// Desa/Kelurahan di Kecamatan Ende Utara
['id' => 9525, 'district_id' => 1455, 'name' => 'Ende'],
['id' => 9526, 'district_id' => 1455, 'name' => 'Kelimutu'],
['id' => 9527, 'district_id' => 1455, 'name' => 'Watupari'],
// Desa/Kelurahan di Kecamatan Nangapanda
['id' => 9528, 'district_id' => 1456, 'name' => 'Nangapanda'],
['id' => 9529, 'district_id' => 1456, 'name' => 'Panta'],
['id' => 9530, 'district_id' => 1456, 'name' => 'Kampung Tua'],
// Desa/Kelurahan di Kecamatan Detusoko
['id' => 9531, 'district_id' => 1457, 'name' => 'Detusoko'],
['id' => 9532, 'district_id' => 1457, 'name' => 'Mata'],
['id' => 9533, 'district_id' => 1457, 'name' => 'Oisina'],
// Desa/Kelurahan di Kecamatan Maukaro
['id' => 9534, 'district_id' => 1458, 'name' => 'Maukaro'],
['id' => 9535, 'district_id' => 1458, 'name' => 'Silawan'],
['id' => 9536, 'district_id' => 1458, 'name' => 'Ledo'],
// Desa/Kelurahan di Kecamatan Larantuka
['id' => 9537, 'district_id' => 1459, 'name' => 'Larantuka Kota'],
['id' => 9538, 'district_id' => 1459, 'name' => 'Wolowona'],
['id' => 9539, 'district_id' => 1459, 'name' => 'Kota Baru'],
// Desa/Kelurahan di Kecamatan Titehena
['id' => 9540, 'district_id' => 1460, 'name' => 'Titehena'],
['id' => 9541, 'district_id' => 1460, 'name' => 'Kaja'],
['id' => 9542, 'district_id' => 1460, 'name' => 'Bali Bagu'],
// Desa/Kelurahan di Kecamatan Ile Mandiri
['id' => 9543, 'district_id' => 1461, 'name' => 'Ile Mandiri'],
['id' => 9544, 'district_id' => 1461, 'name' => 'Poco'],
['id' => 9545, 'district_id' => 1461, 'name' => 'Fatu'],
// Desa/Kelurahan di Kecamatan Adonara
['id' => 9546, 'district_id' => 1462, 'name' => 'Adonara Barat'],
['id' => 9547, 'district_id' => 1462, 'name' => 'Adonara Timur'],
['id' => 9548, 'district_id' => 1462, 'name' => 'Lembata'],
// Desa/Kelurahan di Kecamatan Solor
['id' => 9549, 'district_id' => 1463, 'name' => 'Solor Barat'],
['id' => 9550, 'district_id' => 1463, 'name' => 'Solor Timur'],
['id' => 9551, 'district_id' => 1463, 'name' => 'Solor Selatan'],
// Desa/Kelurahan di Kecamatan Kelapa Lima
['id' => 9552, 'district_id' => 1464, 'name' => 'Kelapa Lima'],
['id' => 9553, 'district_id' => 1464, 'name' => 'Kota Baru'],
['id' => 9554, 'district_id' => 1464, 'name' => 'Naibonat'],
// Desa/Kelurahan di Kecamatan Maulafa
['id' => 9555, 'district_id' => 1465, 'name' => 'Maulafa'],
['id' => 9556, 'district_id' => 1465, 'name' => 'Oebufu'],
['id' => 9557, 'district_id' => 1465, 'name' => 'Pisang'],
// Desa/Kelurahan di Kecamatan Oebobo
['id' => 9558, 'district_id' => 1466, 'name' => 'Oebobo'],
['id' => 9559, 'district_id' => 1466, 'name' => 'Oebufu'],
['id' => 9560, 'district_id' => 1466, 'name' => 'Nangake'],
// Desa/Kelurahan di Kecamatan Alak
['id' => 9561, 'district_id' => 1467, 'name' => 'Alak'],
['id' => 9562, 'district_id' => 1467, 'name' => 'Ubedol'],
['id' => 9563, 'district_id' => 1467, 'name' => 'Eban'],
// Desa/Kelurahan di Kecamatan Kota Lama
['id' => 9564, 'district_id' => 1468, 'name' => 'Kota Lama'],
['id' => 9565, 'district_id' => 1468, 'name' => 'Kauman'],
['id' => 9566, 'district_id' => 1468, 'name' => 'Kelurahan Baru'],
// Desa/Kelurahan di Kecamatan Ruteng
['id' => 9567, 'district_id' => 1469, 'name' => 'Ruteng'],
['id' => 9568, 'district_id' => 1469, 'name' => 'Kampung Baru'],
['id' => 9569, 'district_id' => 1469, 'name' => 'Watu'],
// Desa/Kelurahan di Kecamatan Langke Rembong
['id' => 9570, 'district_id' => 1470, 'name' => 'Langke Rembong'],
['id' => 9571, 'district_id' => 1470, 'name' => 'Kampung Teman'],
['id' => 9572, 'district_id' => 1470, 'name' => 'Sakof'],
// Desa/Kelurahan di Kecamatan Satar Mese
['id' => 9573, 'district_id' => 1471, 'name' => 'Satar Mese'],
['id' => 9574, 'district_id' => 1471, 'name' => 'Satar Mese Utara'],
['id' => 9575, 'district_id' => 1471, 'name' => 'Satar Mese Selatan'],
// Desa/Kelurahan di Kecamatan Reok
['id' => 9576, 'district_id' => 1472, 'name' => 'Reok'],
['id' => 9577, 'district_id' => 1472, 'name' => 'Reok Timur'],
['id' => 9578, 'district_id' => 1472, 'name' => 'Reok Barat'],
// Desa/Kelurahan di Kecamatan Cibal
['id' => 9579, 'district_id' => 1473, 'name' => 'Cibal'],
['id' => 9580, 'district_id' => 1473, 'name' => 'Cibal Selatan'],
['id' => 9581, 'district_id' => 1473, 'name' => 'Cibal Utara'],
// Desa/Kelurahan di Kecamatan Aesesa
['id' => 9582, 'district_id' => 1474, 'name' => 'Aesesa'],
['id' => 9583, 'district_id' => 1474, 'name' => 'Aesesa Selatan'],
['id' => 9584, 'district_id' => 1474, 'name' => 'Aesesa Barat'],
// Desa/Kelurahan di Kecamatan Boawae
['id' => 9585, 'district_id' => 1475, 'name' => 'Boawae'],
['id' => 9586, 'district_id' => 1475, 'name' => 'Boawae Selatan'],
['id' => 9587, 'district_id' => 1475, 'name' => 'Boawae Timur'],
// Desa/Kelurahan di Kecamatan Mauponggo
['id' => 9588, 'district_id' => 1476, 'name' => 'Mauponggo'],
['id' => 9589, 'district_id' => 1476, 'name' => 'Mauponggo Selatan'],
['id' => 9590, 'district_id' => 1476, 'name' => 'Mauponggo Timur'],
// Desa/Kelurahan di Kecamatan Nangaroro
['id' => 9591, 'district_id' => 1477, 'name' => 'Nangaroro'],
['id' => 9592, 'district_id' => 1477, 'name' => 'Nangaroro Selatan'],
['id' => 9593, 'district_id' => 1477, 'name' => 'Nangaroro Barat'],
// Desa/Kelurahan di Kecamatan Keo Tengah
['id' => 9594, 'district_id' => 1478, 'name' => 'Keo Tengah'],
['id' => 9595, 'district_id' => 1478, 'name' => 'Keo Tengah Selatan'],
['id' => 9596, 'district_id' => 1478, 'name' => 'Keo Tengah Utara'],
// Desa/Kelurahan di Kecamatan Maumere
['id' => 9597, 'district_id' => 1479, 'name' => 'Maumere'],
['id' => 9598, 'district_id' => 1479, 'name' => 'Maumere Timur'],
['id' => 9599, 'district_id' => 1479, 'name' => 'Maumere Barat'],
// Desa/Kelurahan di Kecamatan Kewapante
['id' => 9600, 'district_id' => 1480, 'name' => 'Kewapante'],
['id' => 9601, 'district_id' => 1480, 'name' => 'Kewapante Selatan'],
['id' => 9602, 'district_id' => 1480, 'name' => 'Kewapante Barat'],
// Desa/Kelurahan di Kecamatan Bola
['id' => 9603, 'district_id' => 1481, 'name' => 'Bola'],
['id' => 9604, 'district_id' => 1481, 'name' => 'Bola Selatan'],
['id' => 9605, 'district_id' => 1481, 'name' => 'Bola Timur'],
// Desa/Kelurahan di Kecamatan Nita
['id' => 9606, 'district_id' => 1482, 'name' => 'Nita'],
['id' => 9607, 'district_id' => 1482, 'name' => 'Nita Selatan'],
['id' => 9608, 'district_id' => 1482, 'name' => 'Nita Utara'],
// Desa/Kelurahan di Kecamatan Paga
['id' => 9609, 'district_id' => 1483, 'name' => 'Paga'],
['id' => 9610, 'district_id' => 1483, 'name' => 'Paga Selatan'],
['id' => 9611, 'district_id' => 1483, 'name' => 'Paga Timur'],
// Desa/Kelurahan di Kecamatan Waingapu
['id' => 9612, 'district_id' => 1484, 'name' => 'Waingapu'],
['id' => 9613, 'district_id' => 1484, 'name' => 'Waingapu Selatan'],
['id' => 9614, 'district_id' => 1484, 'name' => 'Waingapu Timur'],
// Desa/Kelurahan di Kecamatan Kanatang
['id' => 9615, 'district_id' => 1485, 'name' => 'Kanatang'],
['id' => 9616, 'district_id' => 1485, 'name' => 'Kanatang Barat'],
['id' => 9617, 'district_id' => 1485, 'name' => 'Kanatang Selatan'],
// Desa/Kelurahan di Kecamatan Kahaungu Eti
['id' => 9618, 'district_id' => 1486, 'name' => 'Kahaungu Eti'],
['id' => 9619, 'district_id' => 1486, 'name' => 'Kahaungu Selatan'],
['id' => 9620, 'district_id' => 1486, 'name' => 'Kahaungu Utara'],
// Desa/Kelurahan di Kecamatan Pahunga Lodu
['id' => 9621, 'district_id' => 1487, 'name' => 'Pahunga Lodu'],
['id' => 9622, 'district_id' => 1487, 'name' => 'Pahunga Lodu Timur'],
['id' => 9623, 'district_id' => 1487, 'name' => 'Pahunga Lodu Selatan'],
// Desa/Kelurahan di Kecamatan Tabundung
['id' => 9624, 'district_id' => 1488, 'name' => 'Tabundung'],
['id' => 9625, 'district_id' => 1488, 'name' => 'Tabundung Barat'],
['id' => 9626, 'district_id' => 1488, 'name' => 'Tabundung Timur'],
// Desa/Kelurahan di Kecamatan Kelapa Lima
['id' => 9627, 'district_id' => 1489, 'name' => 'Kelapa Lima'],
['id' => 9628, 'district_id' => 1489, 'name' => 'Kelapa Lima Barat'],
['id' => 9629, 'district_id' => 1489, 'name' => 'Kelapa Lima Timur'],
// Desa/Kelurahan di Kecamatan Maulafa
['id' => 9630, 'district_id' => 1490, 'name' => 'Maulafa'],
['id' => 9631, 'district_id' => 1490, 'name' => 'Maulafa Selatan'],
['id' => 9632, 'district_id' => 1490, 'name' => 'Maulafa Utara'],
// Desa/Kelurahan di Kecamatan Oebobo
['id' => 9633, 'district_id' => 1491, 'name' => 'Oebobo'],
['id' => 9634, 'district_id' => 1491, 'name' => 'Oebobo Selatan'],
['id' => 9635, 'district_id' => 1491, 'name' => 'Oebobo Utara'],
// Desa/Kelurahan di Kecamatan Alak
['id' => 9636, 'district_id' => 1492, 'name' => 'Alak'],
['id' => 9637, 'district_id' => 1492, 'name' => 'Alak Barat'],
['id' => 9638, 'district_id' => 1492, 'name' => 'Alak Timur'],
// Desa/Kelurahan di Kecamatan Kota Raja
['id' => 9639, 'district_id' => 1493, 'name' => 'Kota Raja'],
['id' => 9640, 'district_id' => 1493, 'name' => 'Kota Raja Selatan'],
['id' => 9641, 'district_id' => 1493, 'name' => 'Kota Raja Utara'],
// Desa/Kelurahan di Kecamatan Bengkayang
['id' => 9642, 'district_id' => 1494, 'name' => 'Bengkayang'],
['id' => 9643, 'district_id' => 1494, 'name' => 'Bengkayang Selatan'],
['id' => 9644, 'district_id' => 1494, 'name' => 'Bengkayang Timur'],
// Desa/Kelurahan di Kecamatan Ledo
['id' => 9645, 'district_id' => 1495, 'name' => 'Ledo'],
['id' => 9646, 'district_id' => 1495, 'name' => 'Ledo Barat'],
['id' => 9647, 'district_id' => 1495, 'name' => 'Ledo Selatan'],
// Desa/Kelurahan di Kecamatan Jagoi Babang
['id' => 9648, 'district_id' => 1496, 'name' => 'Jagoi Babang'],
['id' => 9649, 'district_id' => 1496, 'name' => 'Jagoi Babang Timur'],
['id' => 9650, 'district_id' => 1496, 'name' => 'Jagoi Babang Selatan'],
// Desa/Kelurahan di Kecamatan Teriak
['id' => 9651, 'district_id' => 1497, 'name' => 'Teriak'],
['id' => 9652, 'district_id' => 1497, 'name' => 'Teriak Timur'],
['id' => 9653, 'district_id' => 1497, 'name' => 'Teriak Barat'],
// Desa/Kelurahan di Kecamatan Sanggau Ledo
['id' => 9654, 'district_id' => 1498, 'name' => 'Sanggau Ledo'],
['id' => 9655, 'district_id' => 1498, 'name' => 'Sanggau Ledo Utara'],
['id' => 9656, 'district_id' => 1498, 'name' => 'Sanggau Ledo Selatan'],
// Desa/Kelurahan di Kecamatan Putussibau Utara
['id' => 9657, 'district_id' => 1499, 'name' => 'Putussibau Utara'],
['id' => 9658, 'district_id' => 1499, 'name' => 'Putussibau Utara Barat'],
['id' => 9659, 'district_id' => 1499, 'name' => 'Putussibau Utara Timur'],
// Desa/Kelurahan di Kecamatan Putussibau Selatan
['id' => 9660, 'district_id' => 1500, 'name' => 'Putussibau Selatan'],
['id' => 9661, 'district_id' => 1500, 'name' => 'Putussibau Selatan Barat'],
['id' => 9662, 'district_id' => 1500, 'name' => 'Putussibau Selatan Timur'],
// Desa/Kelurahan di Kecamatan Empanang
['id' => 9663, 'district_id' => 1501, 'name' => 'Empanang'],
['id' => 9664, 'district_id' => 1501, 'name' => 'Empanang Barat'],
['id' => 9665, 'district_id' => 1501, 'name' => 'Empanang Timur'],
// Desa/Kelurahan di Kecamatan Boyan Tanjung
['id' => 9666, 'district_id' => 1502, 'name' => 'Boyan Tanjung'],
['id' => 9667, 'district_id' => 1502, 'name' => 'Boyan Tanjung Barat'],
['id' => 9668, 'district_id' => 1502, 'name' => 'Boyan Tanjung Selatan'],
// Desa/Kelurahan di Kecamatan Selimbau
['id' => 9669, 'district_id' => 1503, 'name' => 'Selimbau'],
['id' => 9670, 'district_id' => 1503, 'name' => 'Selimbau Barat'],
['id' => 9671, 'district_id' => 1503, 'name' => 'Selimbau Timur'],
// Desa/Kelurahan di Kecamatan Ketapang
['id' => 9672, 'district_id' => 1504, 'name' => 'Ketapang'],
['id' => 9673, 'district_id' => 1504, 'name' => 'Ketapang Barat'],
['id' => 9674, 'district_id' => 1504, 'name' => 'Ketapang Selatan'],
// Desa/Kelurahan di Kecamatan Manis Mata
['id' => 9675, 'district_id' => 1505, 'name' => 'Manis Mata'],
['id' => 9676, 'district_id' => 1505, 'name' => 'Manis Mata Barat'],
['id' => 9677, 'district_id' => 1505, 'name' => 'Manis Mata Selatan'],
// Desa/Kelurahan di Kecamatan Sungai Melayu Rayak
['id' => 9678, 'district_id' => 1506, 'name' => 'Sungai Melayu Rayak'],
['id' => 9679, 'district_id' => 1506, 'name' => 'Sungai Melayu Rayak Barat'],
['id' => 9680, 'district_id' => 1506, 'name' => 'Sungai Melayu Rayak Selatan'],
// Desa/Kelurahan di Kecamatan Kendawangan
['id' => 9681, 'district_id' => 1507, 'name' => 'Kendawangan'],
['id' => 9682, 'district_id' => 1507, 'name' => 'Kendawangan Barat'],
['id' => 9683, 'district_id' => 1507, 'name' => 'Kendawangan Selatan'],
// Desa/Kelurahan di Kecamatan Tumbang Titi
['id' => 9684, 'district_id' => 1508, 'name' => 'Tumbang Titi'],
['id' => 9685, 'district_id' => 1508, 'name' => 'Tumbang Titi Barat'],
['id' => 9686, 'district_id' => 1508, 'name' => 'Tumbang Titi Timur'],
// Desa/Kelurahan di Kecamatan Sungai Raya
['id' => 9687, 'district_id' => 1509, 'name' => 'Sungai Raya'],
['id' => 9688, 'district_id' => 1509, 'name' => 'Sungai Raya Barat'],
['id' => 9689, 'district_id' => 1509, 'name' => 'Sungai Raya Selatan'],
// Desa/Kelurahan di Kecamatan Rasau Jaya
['id' => 9690, 'district_id' => 1510, 'name' => 'Rasau Jaya'],
['id' => 9691, 'district_id' => 1510, 'name' => 'Rasau Jaya Barat'],
['id' => 9692, 'district_id' => 1510, 'name' => 'Rasau Jaya Timur'],
// Desa/Kelurahan di Kecamatan Teluk Pakedai
['id' => 9693, 'district_id' => 1511, 'name' => 'Teluk Pakedai'],
['id' => 9694, 'district_id' => 1511, 'name' => 'Teluk Pakedai Barat'],
['id' => 9695, 'district_id' => 1511, 'name' => 'Teluk Pakedai Timur'],
// Desa/Kelurahan di Kecamatan Kuala Mandor B
['id' => 9696, 'district_id' => 1512, 'name' => 'Kuala Mandor B'],
['id' => 9697, 'district_id' => 1512, 'name' => 'Kuala Mandor B Selatan'],
['id' => 9698, 'district_id' => 1512, 'name' => 'Kuala Mandor B Utara'],
// Desa/Kelurahan di Kecamatan Terentang
['id' => 9699, 'district_id' => 1513, 'name' => 'Terentang'],
['id' => 9700, 'district_id' => 1513, 'name' => 'Terentang Barat'],
['id' => 9701, 'district_id' => 1513, 'name' => 'Terentang Timur'],
// Desa/Kelurahan di Kecamatan Mempawah Hilir
['id' => 9702, 'district_id' => 1514, 'name' => 'Mempawah Hilir'],
['id' => 9703, 'district_id' => 1514, 'name' => 'Mempawah Hilir Selatan'],
['id' => 9704, 'district_id' => 1514, 'name' => 'Mempawah Hilir Utara'],
// Desa/Kelurahan di Kecamatan Mempawah Timur
['id' => 9705, 'district_id' => 1515, 'name' => 'Mempawah Timur'],
['id' => 9706, 'district_id' => 1515, 'name' => 'Mempawah Timur Selatan'],
['id' => 9707, 'district_id' => 1515, 'name' => 'Mempawah Timur Barat'],
// Desa/Kelurahan di Kecamatan Toho
['id' => 9708, 'district_id' => 1516, 'name' => 'Toho'],
['id' => 9709, 'district_id' => 1516, 'name' => 'Toho Barat'],
['id' => 9710, 'district_id' => 1516, 'name' => 'Toho Timur'],
// Desa/Kelurahan di Kecamatan Segedong
['id' => 9711, 'district_id' => 1517, 'name' => 'Segedong'],
['id' => 9712, 'district_id' => 1517, 'name' => 'Segedong Selatan'],
['id' => 9713, 'district_id' => 1517, 'name' => 'Segedong Timur'],
// Desa/Kelurahan di Kecamatan Sungai Kunyit
['id' => 9714, 'district_id' => 1518, 'name' => 'Sungai Kunyit'],
['id' => 9715, 'district_id' => 1518, 'name' => 'Sungai Kunyit Selatan'],
['id' => 9716, 'district_id' => 1518, 'name' => 'Sungai Kunyit Barat'],
// Desa/Kelurahan di Kecamatan Sambas
['id' => 9717, 'district_id' => 1519, 'name' => 'Sambas'],
['id' => 9718, 'district_id' => 1519, 'name' => 'Sambas Selatan'],
['id' => 9719, 'district_id' => 1519, 'name' => 'Sambas Utara'],
// Desa/Kelurahan di Kecamatan Pemangkat
['id' => 9720, 'district_id' => 1520, 'name' => 'Pemangkat'],
['id' => 9721, 'district_id' => 1520, 'name' => 'Pemangkat Selatan'],
['id' => 9722, 'district_id' => 1520, 'name' => 'Pemangkat Utara'],
// Desa/Kelurahan di Kecamatan Teluk Keramat
['id' => 9723, 'district_id' => 1521, 'name' => 'Teluk Keramat'],
['id' => 9724, 'district_id' => 1521, 'name' => 'Teluk Keramat Selatan'],
['id' => 9725, 'district_id' => 1521, 'name' => 'Teluk Keramat Timur'],
// Desa/Kelurahan di Kecamatan Paloh
['id' => 9726, 'district_id' => 1522, 'name' => 'Paloh'],
['id' => 9727, 'district_id' => 1522, 'name' => 'Paloh Selatan'],
['id' => 9728, 'district_id' => 1522, 'name' => 'Paloh Barat'],
// Desa/Kelurahan di Kecamatan Jawai
['id' => 9729, 'district_id' => 1523, 'name' => 'Jawai'],
['id' => 9730, 'district_id' => 1523, 'name' => 'Jawai Timur'],
['id' => 9731, 'district_id' => 1523, 'name' => 'Jawai Selatan'],
// Desa/Kelurahan di Kecamatan Sanggau
['id' => 9732, 'district_id' => 1524, 'name' => 'Sanggau'],
['id' => 9733, 'district_id' => 1524, 'name' => 'Sanggau Selatan'],
['id' => 9734, 'district_id' => 1524, 'name' => 'Sanggau Barat'],
// Desa/Kelurahan di Kecamatan Tayan Hilir
['id' => 9735, 'district_id' => 1525, 'name' => 'Tayan Hilir'],
['id' => 9736, 'district_id' => 1525, 'name' => 'Tayan Hilir Selatan'],
['id' => 9737, 'district_id' => 1525, 'name' => 'Tayan Hilir Timur'],
// Desa/Kelurahan di Kecamatan Sekayam
['id' => 9738, 'district_id' => 1526, 'name' => 'Sekayam'],
['id' => 9739, 'district_id' => 1526, 'name' => 'Sekayam Selatan'],
['id' => 9740, 'district_id' => 1526, 'name' => 'Sekayam Barat'],
// Desa/Kelurahan di Kecamatan Meliau
['id' => 9741, 'district_id' => 1527, 'name' => 'Meliau'],
['id' => 9742, 'district_id' => 1527, 'name' => 'Meliau Selatan'],
['id' => 9743, 'district_id' => 1527, 'name' => 'Meliau Timur'],
// Desa/Kelurahan di Kecamatan Entikong
['id' => 9744, 'district_id' => 1528, 'name' => 'Entikong'],
['id' => 9745, 'district_id' => 1528, 'name' => 'Entikong Selatan'],
['id' => 9746, 'district_id' => 1528, 'name' => 'Entikong Barat'],
// Desa/Kelurahan di Kecamatan Sintang
['id' => 9747, 'district_id' => 1529, 'name' => 'Sintang'],
['id' => 9748, 'district_id' => 1529, 'name' => 'Sintang Selatan'],
['id' => 9749, 'district_id' => 1529, 'name' => 'Sintang Timur'],
// Desa/Kelurahan di Kecamatan Ketungau Hilir
['id' => 9750, 'district_id' => 1530, 'name' => 'Ketungau Hilir'],
['id' => 9751, 'district_id' => 1530, 'name' => 'Ketungau Hilir Barat'],
['id' => 9752, 'district_id' => 1530, 'name' => 'Ketungau Hilir Selatan'],
// Desa/Kelurahan di Kecamatan Ketungau Tengah
['id' => 9753, 'district_id' => 1531, 'name' => 'Ketungau Tengah'],
['id' => 9754, 'district_id' => 1531, 'name' => 'Ketungau Tengah Barat'],
['id' => 9755, 'district_id' => 1531, 'name' => 'Ketungau Tengah Selatan'],
// Desa/Kelurahan di Kecamatan Tempunak
['id' => 9756, 'district_id' => 1532, 'name' => 'Tempunak'],
['id' => 9757, 'district_id' => 1532, 'name' => 'Tempunak Barat'],
['id' => 9758, 'district_id' => 1532, 'name' => 'Tempunak Selatan'],
// Desa/Kelurahan di Kecamatan Kayan Hulu
['id' => 9759, 'district_id' => 1533, 'name' => 'Kayan Hulu'],
['id' => 9760, 'district_id' => 1533, 'name' => 'Kayan Hulu Barat'],
['id' => 9761, 'district_id' => 1533, 'name' => 'Kayan Hulu Selatan'],
// Desa/Kelurahan di Kecamatan Pontianak Kota
['id' => 9762, 'district_id' => 1534, 'name' => 'Pontianak Kota'],
['id' => 9763, 'district_id' => 1534, 'name' => 'Pontianak Kota Timur'],
['id' => 9764, 'district_id' => 1534, 'name' => 'Pontianak Kota Barat'],
// Desa/Kelurahan di Kecamatan Pontianak Barat
['id' => 9765, 'district_id' => 1535, 'name' => 'Pontianak Barat'],
['id' => 9766, 'district_id' => 1535, 'name' => 'Pontianak Barat Selatan'],
['id' => 9767, 'district_id' => 1535, 'name' => 'Pontianak Barat Timur'],
// Desa/Kelurahan di Kecamatan Pontianak Timur
['id' => 9768, 'district_id' => 1536, 'name' => 'Pontianak Timur'],
['id' => 9769, 'district_id' => 1536, 'name' => 'Pontianak Timur Selatan'],
['id' => 9770, 'district_id' => 1536, 'name' => 'Pontianak Timur Barat'],
// Desa/Kelurahan di Kecamatan Pontianak Selatan
['id' => 9771, 'district_id' => 1537, 'name' => 'Pontianak Selatan'],
['id' => 9772, 'district_id' => 1537, 'name' => 'Pontianak Selatan Timur'],
['id' => 9773, 'district_id' => 1537, 'name' => 'Pontianak Selatan Barat'],
// Desa/Kelurahan di Kecamatan Pontianak Utara
['id' => 9774, 'district_id' => 1538, 'name' => 'Pontianak Utara'],
['id' => 9775, 'district_id' => 1538, 'name' => 'Pontianak Utara Selatan'],
['id' => 9776, 'district_id' => 1538, 'name' => 'Pontianak Utara Timur'],
// Desa/Kelurahan di Kecamatan Singkawang Barat
['id' => 9777, 'district_id' => 1539, 'name' => 'Singkawang Barat'],
['id' => 9778, 'district_id' => 1539, 'name' => 'Singkawang Barat Selatan'],
['id' => 9779, 'district_id' => 1539, 'name' => 'Singkawang Barat Timur'],
// Desa/Kelurahan di Kecamatan Singkawang Tengah
['id' => 9780, 'district_id' => 1540, 'name' => 'Singkawang Tengah'],
['id' => 9781, 'district_id' => 1540, 'name' => 'Singkawang Tengah Selatan'],
['id' => 9782, 'district_id' => 1540, 'name' => 'Singkawang Tengah Timur'],
// Desa/Kelurahan di Kecamatan Singkawang Timur
['id' => 9783, 'district_id' => 1541, 'name' => 'Singkawang Timur'],
['id' => 9784, 'district_id' => 1541, 'name' => 'Singkawang Timur Selatan'],
['id' => 9785, 'district_id' => 1541, 'name' => 'Singkawang Timur Barat'],
// Desa/Kelurahan di Kecamatan Singkawang Selatan
['id' => 9786, 'district_id' => 1542, 'name' => 'Singkawang Selatan'],
['id' => 9787, 'district_id' => 1542, 'name' => 'Singkawang Selatan Timur'],
['id' => 9788, 'district_id' => 1542, 'name' => 'Singkawang Selatan Barat'],
// Desa/Kelurahan di Kecamatan Singkawang Utara
['id' => 9789, 'district_id' => 1543, 'name' => 'Singkawang Utara'],
['id' => 9790, 'district_id' => 1543, 'name' => 'Singkawang Utara Timur'],
['id' => 9791, 'district_id' => 1543, 'name' => 'Singkawang Utara Selatan'],
// Desa/Kelurahan di Kecamatan Buntok
['id' => 9792, 'district_id' => 1544, 'name' => 'Buntok'],
['id' => 9793, 'district_id' => 1544, 'name' => 'Buntok Selatan'],
['id' => 9794, 'district_id' => 1544, 'name' => 'Buntok Barat'],
// Desa/Kelurahan di Kecamatan Dusun Selatan
['id' => 9795, 'district_id' => 1545, 'name' => 'Dusun Selatan'],
['id' => 9796, 'district_id' => 1545, 'name' => 'Dusun Selatan Barat'],
['id' => 9797, 'district_id' => 1545, 'name' => 'Dusun Selatan Timur'],
// Desa/Kelurahan di Kecamatan Dusun Utara
['id' => 9798, 'district_id' => 1546, 'name' => 'Dusun Utara'],
['id' => 9799, 'district_id' => 1546, 'name' => 'Dusun Utara Barat'],
['id' => 9800, 'district_id' => 1546, 'name' => 'Dusun Utara Timur'],
// Desa/Kelurahan di Kecamatan Gunung Bintang Awai
['id' => 9801, 'district_id' => 1547, 'name' => 'Gunung Bintang Awai'],
['id' => 9802, 'district_id' => 1547, 'name' => 'Gunung Bintang Awai Selatan'],
['id' => 9803, 'district_id' => 1547, 'name' => 'Gunung Bintang Awai Timur'],
// Desa/Kelurahan di Kecamatan Jenamas
['id' => 9804, 'district_id' => 1548, 'name' => 'Jenamas'],
['id' => 9805, 'district_id' => 1548, 'name' => 'Jenamas Selatan'],
['id' => 9806, 'district_id' => 1548, 'name' => 'Jenamas Timur'],
// Desa/Kelurahan di Kecamatan Tamiang Layang
['id' => 9807, 'district_id' => 1549, 'name' => 'Tamiang Layang'],
['id' => 9808, 'district_id' => 1549, 'name' => 'Tamiang Layang Barat'],
['id' => 9809, 'district_id' => 1549, 'name' => 'Tamiang Layang Timur'],
// Desa/Kelurahan di Kecamatan Dusun Timur
['id' => 9810, 'district_id' => 1550, 'name' => 'Dusun Timur'],
['id' => 9811, 'district_id' => 1550, 'name' => 'Dusun Timur Barat'],
['id' => 9812, 'district_id' => 1550, 'name' => 'Dusun Timur Selatan'],
// Desa/Kelurahan di Kecamatan Paju Epat
['id' => 9813, 'district_id' => 1551, 'name' => 'Paju Epat'],
['id' => 9814, 'district_id' => 1551, 'name' => 'Paju Epat Barat'],
['id' => 9815, 'district_id' => 1551, 'name' => 'Paju Epat Timur'],
// Desa/Kelurahan di Kecamatan Karusen Janang
['id' => 9816, 'district_id' => 1552, 'name' => 'Karusen Janang'],
['id' => 9817, 'district_id' => 1552, 'name' => 'Karusen Janang Barat'],
['id' => 9818, 'district_id' => 1552, 'name' => 'Karusen Janang Timur'],
// Desa/Kelurahan di Kecamatan Pematang Karau
['id' => 9819, 'district_id' => 1553, 'name' => 'Pematang Karau'],
['id' => 9820, 'district_id' => 1553, 'name' => 'Pematang Karau Barat'],
['id' => 9821, 'district_id' => 1553, 'name' => 'Pematang Karau Timur'],
// Desa/Kelurahan di Kecamatan Muara Teweh
['id' => 9822, 'district_id' => 1554, 'name' => 'Muara Teweh'],
['id' => 9823, 'district_id' => 1554, 'name' => 'Muara Teweh Selatan'],
['id' => 9824, 'district_id' => 1554, 'name' => 'Muara Teweh Timur'],
// Desa/Kelurahan di Kecamatan Teweh Tengah
['id' => 9825, 'district_id' => 1555, 'name' => 'Teweh Tengah'],
['id' => 9826, 'district_id' => 1555, 'name' => 'Teweh Tengah Barat'],
['id' => 9827, 'district_id' => 1555, 'name' => 'Teweh Tengah Timur'],
// Desa/Kelurahan di Kecamatan Lahei
['id' => 9828, 'district_id' => 1556, 'name' => 'Lahei'],
['id' => 9829, 'district_id' => 1556, 'name' => 'Lahei Selatan'],
['id' => 9830, 'district_id' => 1556, 'name' => 'Lahei Barat'],
// Desa/Kelurahan di Kecamatan Gunung Purei
['id' => 9831, 'district_id' => 1557, 'name' => 'Gunung Purei'],
['id' => 9832, 'district_id' => 1557, 'name' => 'Gunung Purei Barat'],
['id' => 9833, 'district_id' => 1557, 'name' => 'Gunung Purei Timur'],
// Desa/Kelurahan di Kecamatan Teweh Baru
['id' => 9834, 'district_id' => 1558, 'name' => 'Teweh Baru'],
['id' => 9835, 'district_id' => 1558, 'name' => 'Teweh Baru Selatan'],
['id' => 9836, 'district_id' => 1558, 'name' => 'Teweh Baru Timur'],
// Desa/Kelurahan di Kecamatan Kapuas Hilir
['id' => 9837, 'district_id' => 1559, 'name' => 'Kapuas Hilir'],
['id' => 9838, 'district_id' => 1559, 'name' => 'Kapuas Hilir Barat'],
['id' => 9839, 'district_id' => 1559, 'name' => 'Kapuas Hilir Timur'],
// Desa/Kelurahan di Kecamatan Kapuas Hulu
['id' => 9840, 'district_id' => 1560, 'name' => 'Kapuas Hulu'],
['id' => 9841, 'district_id' => 1560, 'name' => 'Kapuas Hulu Barat'],
['id' => 9842, 'district_id' => 1560, 'name' => 'Kapuas Hulu Timur'],
// Desa/Kelurahan di Kecamatan Kapuas Kuala
['id' => 9843, 'district_id' => 1561, 'name' => 'Kapuas Kuala'],
['id' => 9844, 'district_id' => 1561, 'name' => 'Kapuas Kuala Barat'],
['id' => 9845, 'district_id' => 1561, 'name' => 'Kapuas Kuala Timur'],
// Desa/Kelurahan di Kecamatan Kapuas Timur
['id' => 9846, 'district_id' => 1562, 'name' => 'Kapuas Timur'],
['id' => 9847, 'district_id' => 1562, 'name' => 'Kapuas Timur Barat'],
['id' => 9848, 'district_id' => 1562, 'name' => 'Kapuas Timur Selatan'],
// Desa/Kelurahan di Kecamatan Kapuas Barat
['id' => 9849, 'district_id' => 1563, 'name' => 'Kapuas Barat'],
['id' => 9850, 'district_id' => 1563, 'name' => 'Kapuas Barat Selatan'],
['id' => 9851, 'district_id' => 1563, 'name' => 'Kapuas Barat Timur'],
// Desa/Kelurahan di Kecamatan Kasongan
['id' => 9852, 'district_id' => 1564, 'name' => 'Kasongan'],
['id' => 9853, 'district_id' => 1564, 'name' => 'Kasongan Selatan'],
['id' => 9854, 'district_id' => 1564, 'name' => 'Kasongan Timur'],
// Desa/Kelurahan di Kecamatan Katingan Hilir
['id' => 9855, 'district_id' => 1565, 'name' => 'Katingan Hilir'],
['id' => 9856, 'district_id' => 1565, 'name' => 'Katingan Hilir Selatan'],
['id' => 9857, 'district_id' => 1565, 'name' => 'Katingan Hilir Timur'],
// Desa/Kelurahan di Kecamatan Katingan Tengah
['id' => 9858, 'district_id' => 1566, 'name' => 'Katingan Tengah'],
['id' => 9859, 'district_id' => 1566, 'name' => 'Katingan Tengah Selatan'],
['id' => 9860, 'district_id' => 1566, 'name' => 'Katingan Tengah Timur'],
// Desa/Kelurahan di Kecamatan Katingan Hulu
['id' => 9861, 'district_id' => 1567, 'name' => 'Katingan Hulu'],
['id' => 9862, 'district_id' => 1567, 'name' => 'Katingan Hulu Selatan'],
['id' => 9863, 'district_id' => 1567, 'name' => 'Katingan Hulu Timur'],
// Desa/Kelurahan di Kecamatan Mendawai
['id' => 9864, 'district_id' => 1568, 'name' => 'Mendawai'],
['id' => 9865, 'district_id' => 1568, 'name' => 'Mendawai Selatan'],
['id' => 9866, 'district_id' => 1568, 'name' => 'Mendawai Timur'],
// Desa/Kelurahan di Kecamatan Pangkalan Bun
['id' => 9867, 'district_id' => 1569, 'name' => 'Pangkalan Bun'],
['id' => 9868, 'district_id' => 1569, 'name' => 'Pangkalan Bun Barat'],
['id' => 9869, 'district_id' => 1569, 'name' => 'Pangkalan Bun Timur'],
// Desa/Kelurahan di Kecamatan Kumai
['id' => 9870, 'district_id' => 1570, 'name' => 'Kumai'],
['id' => 9871, 'district_id' => 1570, 'name' => 'Kumai Barat'],
['id' => 9872, 'district_id' => 1570, 'name' => 'Kumai Timur'],
// Desa/Kelurahan di Kecamatan Kotawaringin Lama
['id' => 9873, 'district_id' => 1571, 'name' => 'Kotawaringin Lama'],
['id' => 9874, 'district_id' => 1571, 'name' => 'Kotawaringin Lama Selatan'],
['id' => 9875, 'district_id' => 1571, 'name' => 'Kotawaringin Lama Timur'],
// Desa/Kelurahan di Kecamatan Arut Selatan
['id' => 9876, 'district_id' => 1572, 'name' => 'Arut Selatan'],
['id' => 9877, 'district_id' => 1572, 'name' => 'Arut Selatan Barat'],
['id' => 9878, 'district_id' => 1572, 'name' => 'Arut Selatan Timur'],
// Desa/Kelurahan di Kecamatan Arut Utara
['id' => 9879, 'district_id' => 1573, 'name' => 'Arut Utara'],
['id' => 9880, 'district_id' => 1573, 'name' => 'Arut Utara Selatan'],
['id' => 9881, 'district_id' => 1573, 'name' => 'Arut Utara Timur'],
// Desa/Kelurahan di Kecamatan Sampit
['id' => 9882, 'district_id' => 1574, 'name' => 'Sampit'],
['id' => 9883, 'district_id' => 1574, 'name' => 'Sampit Barat'],
['id' => 9884, 'district_id' => 1574, 'name' => 'Sampit Timur'],
// Desa/Kelurahan di Kecamatan Mentaya Hilir Utara
['id' => 9885, 'district_id' => 1575, 'name' => 'Mentaya Hilir Utara'],
['id' => 9886, 'district_id' => 1575, 'name' => 'Mentaya Hilir Utara Selatan'],
['id' => 9887, 'district_id' => 1575, 'name' => 'Mentaya Hilir Utara Timur'],
// Desa/Kelurahan di Kecamatan Mentawa Baru
['id' => 9888, 'district_id' => 1576, 'name' => 'Mentawa Baru'],
['id' => 9889, 'district_id' => 1576, 'name' => 'Mentawa Baru Selatan'],
['id' => 9890, 'district_id' => 1576, 'name' => 'Mentawa Baru Timur'],
// Desa/Kelurahan di Kecamatan Baamang
['id' => 9891, 'district_id' => 1577, 'name' => 'Baamang'],
['id' => 9892, 'district_id' => 1577, 'name' => 'Baamang Selatan'],
['id' => 9893, 'district_id' => 1577, 'name' => 'Baamang Timur'],
// Desa/Kelurahan di Kecamatan Cempaga
['id' => 9894, 'district_id' => 1578, 'name' => 'Cempaga'],
['id' => 9895, 'district_id' => 1578, 'name' => 'Cempaga Barat'],
['id' => 9896, 'district_id' => 1578, 'name' => 'Cempaga Timur'],
// Desa/Kelurahan di Kecamatan Pahandut
['id' => 9897, 'district_id' => 1579, 'name' => 'Pahandut'],
['id' => 9898, 'district_id' => 1579, 'name' => 'Pahandut Barat'],
['id' => 9899, 'district_id' => 1579, 'name' => 'Pahandut Timur'],
// Desa/Kelurahan di Kecamatan Jekan Raya
['id' => 9900, 'district_id' => 1580, 'name' => 'Jekan Raya'],
['id' => 9901, 'district_id' => 1580, 'name' => 'Jekan Raya Selatan'],
['id' => 9902, 'district_id' => 1580, 'name' => 'Jekan Raya Timur'],
// Desa/Kelurahan di Kecamatan Sabangau
['id' => 9903, 'district_id' => 1581, 'name' => 'Tumbang Samba'],
['id' => 9904, 'district_id' => 1581, 'name' => 'Sabangau Lestari'],
['id' => 9905, 'district_id' => 1581, 'name' => 'Tumbang Nusa'],

// Desa/Kelurahan di Kecamatan Bukit Batu
['id' => 9906, 'district_id' => 1582, 'name' => 'Sungai Guntung'],
['id' => 9907, 'district_id' => 1582, 'name' => 'Tumbang Miri'],
['id' => 9908, 'district_id' => 1582, 'name' => 'Bukit Batu'],

// Desa/Kelurahan di Kecamatan Rakumpit
['id' => 9909, 'district_id' => 1583, 'name' => 'Rakumpit'],
['id' => 9910, 'district_id' => 1583, 'name' => 'Buntut Nangka'],
['id' => 9911, 'district_id' => 1583, 'name' => 'Sumber Sari'],

// Desa/Kelurahan di Kecamatan Paringin
['id' => 9912, 'district_id' => 1584, 'name' => 'Paringin'],
['id' => 9913, 'district_id' => 1584, 'name' => 'Sungai Tabuk'],
['id' => 9914, 'district_id' => 1584, 'name' => 'Batu Raya'],

// Desa/Kelurahan di Kecamatan Juai
['id' => 9915, 'district_id' => 1585, 'name' => 'Juai'],
['id' => 9916, 'district_id' => 1585, 'name' => 'Sungai Lulut'],
['id' => 9917, 'district_id' => 1585, 'name' => 'Batu Agung'],

// Desa/Kelurahan di Kecamatan Halong
['id' => 9918, 'district_id' => 1586, 'name' => 'Halong'],
['id' => 9919, 'district_id' => 1586, 'name' => 'Tungkaran'],
['id' => 9920, 'district_id' => 1586, 'name' => 'Batu Agung'],

// Desa/Kelurahan di Kecamatan Batu Mandi
['id' => 9921, 'district_id' => 1587, 'name' => 'Batu Mandi'],
['id' => 9922, 'district_id' => 1587, 'name' => 'Tungkap'],
['id' => 9923, 'district_id' => 1587, 'name' => 'Tumbang Muun'],

// Desa/Kelurahan di Kecamatan Lampihong
['id' => 9924, 'district_id' => 1588, 'name' => 'Lampihong'],
['id' => 9925, 'district_id' => 1588, 'name' => 'Tunggul Wulung'],
['id' => 9926, 'district_id' => 1588, 'name' => 'Sungai Tunjang'],

// Desa/Kelurahan di Kecamatan Martapura
['id' => 9927, 'district_id' => 1589, 'name' => 'Martapura'],
['id' => 9928, 'district_id' => 1589, 'name' => 'Pasar Martapura'],
['id' => 9929, 'district_id' => 1589, 'name' => 'Cempaka'],

// Desa/Kelurahan di Kecamatan Karang Intan
['id' => 9930, 'district_id' => 1590, 'name' => 'Karang Intan'],
['id' => 9931, 'district_id' => 1590, 'name' => 'Cinta Bumi'],
['id' => 9932, 'district_id' => 1590, 'name' => 'Sungai Tuan'],

// Desa/Kelurahan di Kecamatan Astambul
['id' => 9933, 'district_id' => 1591, 'name' => 'Astambul'],
['id' => 9934, 'district_id' => 1591, 'name' => 'Sungai Raya'],
['id' => 9935, 'district_id' => 1591, 'name' => 'Nangka'],

// Desa/Kelurahan di Kecamatan Sungai Tabuk
['id' => 9936, 'district_id' => 1592, 'name' => 'Sungai Tabuk'],
['id' => 9937, 'district_id' => 1592, 'name' => 'Sungai Talinga'],
['id' => 9938, 'district_id' => 1592, 'name' => 'Tungkaran'],

// Desa/Kelurahan di Kecamatan Gambut
['id' => 9939, 'district_id' => 1593, 'name' => 'Gambut'],
['id' => 9940, 'district_id' => 1593, 'name' => 'Sungai Mandai'],
['id' => 9941, 'district_id' => 1593, 'name' => 'Pasar Gambut'],

// Desa/Kelurahan di Kecamatan Barito Kuala
['id' => 9942, 'district_id' => 1594, 'name' => 'Barito Kuala'],
['id' => 9943, 'district_id' => 1594, 'name' => 'Sungai Raya'],
['id' => 9944, 'district_id' => 1594, 'name' => 'Tumbang Gading'],

// Desa/Kelurahan di Kecamatan Anjir Muara
['id' => 9945, 'district_id' => 1595, 'name' => 'Anjir Muara'],
['id' => 9946, 'district_id' => 1595, 'name' => 'Sungai Muara'],
['id' => 9947, 'district_id' => 1595, 'name' => 'Tungkaran'],

// Desa/Kelurahan di Kecamatan Anjir Pasar
['id' => 9948, 'district_id' => 1596, 'name' => 'Anjir Pasar'],
['id' => 9949, 'district_id' => 1596, 'name' => 'Tumbang Maru'],
['id' => 9950, 'district_id' => 1596, 'name' => 'Sungai Batu'],

// Desa/Kelurahan di Kecamatan Marabahan
['id' => 9951, 'district_id' => 1597, 'name' => 'Marabahan'],
['id' => 9952, 'district_id' => 1597, 'name' => 'Sungai Kuning'],
['id' => 9953, 'district_id' => 1597, 'name' => 'Tunggaru'],

// Desa/Kelurahan di Kecamatan Rantau Badauh
['id' => 9954, 'district_id' => 1598, 'name' => 'Rantau Badauh'],
['id' => 9955, 'district_id' => 1598, 'name' => 'Sungai Raya'],
['id' => 9956, 'district_id' => 1598, 'name' => 'Batu Kuning'],

// Desa/Kelurahan di Kecamatan Alalak
['id' => 9957, 'district_id' => 1599, 'name' => 'Alalak'],
['id' => 9958, 'district_id' => 1599, 'name' => 'Sungai Guntung'],
['id' => 9959, 'district_id' => 1599, 'name' => 'Tumbang Kuning'],

// Desa/Kelurahan di Kecamatan Kandangan
['id' => 9960, 'district_id' => 1600, 'name' => 'Kandangan'],
['id' => 9961, 'district_id' => 1600, 'name' => 'Sungai Kecil'],
['id' => 9962, 'district_id' => 1600, 'name' => 'Tungkap'],

// Desa/Kelurahan di Kecamatan Loksado
['id' => 9963, 'district_id' => 1601, 'name' => 'Loksado'],
['id' => 9964, 'district_id' => 1601, 'name' => 'Sungai Lalu'],
['id' => 9965, 'district_id' => 1601, 'name' => 'Tumbang Buai'],

// Desa/Kelurahan di Kecamatan Simpang Empat
['id' => 9966, 'district_id' => 1602, 'name' => 'Simpang Empat'],
['id' => 9967, 'district_id' => 1602, 'name' => 'Tumbang Kiri'],
['id' => 9968, 'district_id' => 1602, 'name' => 'Tungkap'],

// Desa/Kelurahan di Kecamatan Sungai Raya
['id' => 9969, 'district_id' => 1603, 'name' => 'Sungai Raya'],
['id' => 9970, 'district_id' => 1603, 'name' => 'Sungai Tujuh'],
['id' => 9971, 'district_id' => 1603, 'name' => 'Tungkal'],

// Desa/Kelurahan di Kecamatan Hantakan
['id' => 9972, 'district_id' => 1604, 'name' => 'Hantakan'],
['id' => 9973, 'district_id' => 1604, 'name' => 'Sungai Raya'],
['id' => 9974, 'district_id' => 1604, 'name' => 'Tungkal Raya'],

// Desa/Kelurahan di Kecamatan Barabai
['id' => 9975, 'district_id' => 1605, 'name' => 'Barabai'],
['id' => 9976, 'district_id' => 1605, 'name' => 'Sungai Baung'],
['id' => 9977, 'district_id' => 1605, 'name' => 'Tungkal'],

// Desa/Kelurahan di Kecamatan Batu Benawa
['id' => 9978, 'district_id' => 1606, 'name' => 'Batu Benawa'],
['id' => 9979, 'district_id' => 1606, 'name' => 'Sungai Benawa'],
['id' => 9980, 'district_id' => 1606, 'name' => 'Tungkap Benawa'],

// Desa/Kelurahan di Kecamatan Labuan Amas Selatan
['id' => 9981, 'district_id' => 1607, 'name' => 'Labuan Amas Selatan'],
['id' => 9982, 'district_id' => 1607, 'name' => 'Sungai Mas'],
['id' => 9983, 'district_id' => 1607, 'name' => 'Batu Mas'],

// Desa/Kelurahan di Kecamatan Labuan Amas Utara
['id' => 9984, 'district_id' => 1608, 'name' => 'Labuan Amas Utara'],
['id' => 9985, 'district_id' => 1608, 'name' => 'Sungai Waringin'],
['id' => 9986, 'district_id' => 1608, 'name' => 'Tungkal'],

// Desa/Kelurahan di Kecamatan Banjarmasin
['id' => 9987, 'district_id' => 1609, 'name' => 'Banjarmasin'],
['id' => 9988, 'district_id' => 1609, 'name' => 'Banjarmasin Barat'],
['id' => 9989, 'district_id' => 1609, 'name' => 'Banjarmasin Timur'],

// Desa/Kelurahan di Kecamatan Amuntai
['id' => 9990, 'district_id' => 1610, 'name' => 'Amuntai'],
['id' => 9991, 'district_id' => 1610, 'name' => 'Amuntai Barat'],
['id' => 9992, 'district_id' => 1610, 'name' => 'Amuntai Selatan'],

// Desa/Kelurahan di Kecamatan Banjang
['id' => 9993, 'district_id' => 1611, 'name' => 'Banjang'],
['id' => 9994, 'district_id' => 1611, 'name' => 'Sungai Banjang'],
['id' => 9995, 'district_id' => 1611, 'name' => 'Tungkal Banjang'],

// Desa/Kelurahan di Kecamatan Haur Gading
['id' => 9996, 'district_id' => 1612, 'name' => 'Haur Gading'],
['id' => 9997, 'district_id' => 1612, 'name' => 'Sungai Gading'],
['id' => 9998, 'district_id' => 1612, 'name' => 'Tungkal Gading'],

// Desa/Kelurahan di Kecamatan Sungai Pandan
['id' => 9999, 'district_id' => 1613, 'name' => 'Sungai Pandan'],
['id' => 10000, 'district_id' => 1613, 'name' => 'Sungai Padan'],
['id' => 10001, 'district_id' => 1613, 'name' => 'Tungkal Pandan'],

// Desa/Kelurahan di Kecamatan Sungai Tabuk
['id' => 10002, 'district_id' => 1614, 'name' => 'Sungai Tabuk'],
['id' => 10003, 'district_id' => 1614, 'name' => 'Sungai Waringin'],
['id' => 10004, 'district_id' => 1614, 'name' => 'Tungkap Tabuk'],

// Desa/Kelurahan di Kecamatan Kotabaru
['id' => 10005, 'district_id' => 1615, 'name' => 'Kotabaru'],
['id' => 10006, 'district_id' => 1615, 'name' => 'Sungai Raya Kotabaru'],
['id' => 10007, 'district_id' => 1615, 'name' => 'Tungkal Kotabaru'],

// Desa/Kelurahan di Kecamatan Pulau Laut Utara
['id' => 10008, 'district_id' => 1616, 'name' => 'Pulau Laut Utara'],
['id' => 10009, 'district_id' => 1616, 'name' => 'Sungai Laut'],
['id' => 10010, 'district_id' => 1616, 'name' => 'Tungkap Laut'],

// Desa/Kelurahan di Kecamatan Pulau Laut Tengah
['id' => 10011, 'district_id' => 1617, 'name' => 'Pulau Laut Tengah'],
['id' => 10012, 'district_id' => 1617, 'name' => 'Sungai Tengah'],
['id' => 10013, 'district_id' => 1617, 'name' => 'Tungkal Tengah'],

// Desa/Kelurahan di Kecamatan Pulau Laut Selatan
['id' => 10014, 'district_id' => 1618, 'name' => 'Pulau Laut Selatan'],
['id' => 10015, 'district_id' => 1618, 'name' => 'Sungai Selatan'],
['id' => 10016, 'district_id' => 1618, 'name' => 'Tungkal Selatan'],

// Desa/Kelurahan di Kecamatan Kelumpang Hilir
['id' => 10017, 'district_id' => 1619, 'name' => 'Kelumpang Hilir'],
['id' => 10018, 'district_id' => 1619, 'name' => 'Sungai Kelumpang'],
['id' => 10019, 'district_id' => 1619, 'name' => 'Tungkal Hilir'],

// Desa/Kelurahan di Kecamatan Batulicin
['id' => 10020, 'district_id' => 1620, 'name' => 'Batulicin'],
['id' => 10021, 'district_id' => 1620, 'name' => 'Sungai Batulicin'],
['id' => 10022, 'district_id' => 1620, 'name' => 'Tungkal Batulicin'],

// Desa/Kelurahan di Kecamatan Kusan Hilir
['id' => 10023, 'district_id' => 1621, 'name' => 'Kusan Hilir'],
['id' => 10024, 'district_id' => 1621, 'name' => 'Sungai Hilir'],
['id' => 10025, 'district_id' => 1621, 'name' => 'Tungkal Hilir'],

// Desa/Kelurahan di Kecamatan Kusan Hulu
['id' => 10026, 'district_id' => 1622, 'name' => 'Kusan Hulu'],
['id' => 10027, 'district_id' => 1622, 'name' => 'Sungai Hulu'],
['id' => 10028, 'district_id' => 1622, 'name' => 'Tungkal Hulu'],

// Desa/Kelurahan di Kecamatan Karang Bintang
['id' => 10029, 'district_id' => 1623, 'name' => 'Karang Bintang'],
['id' => 10030, 'district_id' => 1623, 'name' => 'Sungai Bintang'],
['id' => 10031, 'district_id' => 1623, 'name' => 'Tungkal Bintang'],

// Desa/Kelurahan di Kecamatan Mantewe
['id' => 10032, 'district_id' => 1624, 'name' => 'Mantewe'],
['id' => 10033, 'district_id' => 1624, 'name' => 'Sungai Mantewe'],
['id' => 10034, 'district_id' => 1624, 'name' => 'Tungkal Mantewe'],

// Desa/Kelurahan di Kecamatan Pelaihari
['id' => 10035, 'district_id' => 1625, 'name' => 'Pelaihari'],
['id' => 10036, 'district_id' => 1625, 'name' => 'Sungai Pelaihari'],
['id' => 10037, 'district_id' => 1625, 'name' => 'Tungkal Pelaihari'],

// Desa/Kelurahan di Kecamatan Batu Ampar
['id' => 10038, 'district_id' => 1626, 'name' => 'Batu Ampar'],
['id' => 10039, 'district_id' => 1626, 'name' => 'Sungai Ampar'],
['id' => 10040, 'district_id' => 1626, 'name' => 'Tungkal Ampar'],

// Desa/Kelurahan di Kecamatan Kintap
['id' => 10041, 'district_id' => 1627, 'name' => 'Kintap'],
['id' => 10042, 'district_id' => 1627, 'name' => 'Sungai Kintap'],
['id' => 10043, 'district_id' => 1627, 'name' => 'Tungkal Kintap'],

// Desa/Kelurahan di Kecamatan Jorong
['id' => 10044, 'district_id' => 1628, 'name' => 'Jorong'],
['id' => 10045, 'district_id' => 1628, 'name' => 'Sungai Jorong'],
['id' => 10046, 'district_id' => 1628, 'name' => 'Tungkal Jorong'],

// Desa/Kelurahan di Kecamatan Takisung
['id' => 10047, 'district_id' => 1629, 'name' => 'Takisung'],
['id' => 10048, 'district_id' => 1629, 'name' => 'Sungai Takisung'],
['id' => 10049, 'district_id' => 1629, 'name' => 'Tungkal Takisung'],

// Desa/Kelurahan di Kecamatan Banjarbaru Selatan
['id' => 10050, 'district_id' => 1630, 'name' => 'Banjarbaru Selatan'],
['id' => 10051, 'district_id' => 1630, 'name' => 'Sungai Banjarbaru'],
['id' => 10052, 'district_id' => 1630, 'name' => 'Tungkal Banjarbaru'],

// Desa/Kelurahan di Kecamatan Banjarbaru Utara
['id' => 10053, 'district_id' => 1631, 'name' => 'Banjarbaru Utara'],
['id' => 10054, 'district_id' => 1631, 'name' => 'Sungai Banjarbaru Utara'],
['id' => 10055, 'district_id' => 1631, 'name' => 'Tungkal Banjarbaru Utara'],

// Desa/Kelurahan di Kecamatan Cempaka
['id' => 10056, 'district_id' => 1632, 'name' => 'Cempaka'],
['id' => 10057, 'district_id' => 1632, 'name' => 'Sungai Cempaka'],
['id' => 10058, 'district_id' => 1632, 'name' => 'Tungkal Cempaka'],

// Desa/Kelurahan di Kecamatan Landasan Ulin
['id' => 10059, 'district_id' => 1633, 'name' => 'Landasan Ulin'],
['id' => 10060, 'district_id' => 1633, 'name' => 'Sungai Landasan Ulin'],
['id' => 10061, 'district_id' => 1633, 'name' => 'Tungkal Landasan Ulin'],

// Desa/Kelurahan di Kecamatan Guntung Manggis
['id' => 10062, 'district_id' => 1634, 'name' => 'Guntung Manggis'],
['id' => 10063, 'district_id' => 1634, 'name' => 'Sungai Guntung Manggis'],
['id' => 10064, 'district_id' => 1634, 'name' => 'Tungkal Guntung Manggis'],

// Desa/Kelurahan di Kecamatan Banjarmasin Selatan
['id' => 10065, 'district_id' => 1635, 'name' => 'Banjarmasin Selatan'],
['id' => 10066, 'district_id' => 1635, 'name' => 'Sungai Banjarmasin Selatan'],
['id' => 10067, 'district_id' => 1635, 'name' => 'Tungkal Banjarmasin Selatan'],

// Desa/Kelurahan di Kecamatan Banjarmasin Utara
['id' => 10068, 'district_id' => 1636, 'name' => 'Banjarmasin Utara'],
['id' => 10069, 'district_id' => 1636, 'name' => 'Sungai Banjarmasin Utara'],
['id' => 10070, 'district_id' => 1636, 'name' => 'Tungkal Banjarmasin Utara'],

// Desa/Kelurahan di Kecamatan Banjarmasin Tengah
['id' => 10071, 'district_id' => 1637, 'name' => 'Banjarmasin Tengah'],
['id' => 10072, 'district_id' => 1637, 'name' => 'Sungai Banjarmasin Tengah'],
['id' => 10073, 'district_id' => 1637, 'name' => 'Tungkal Banjarmasin Tengah'],

// Desa/Kelurahan di Kecamatan Banjarmasin Timur
['id' => 10074, 'district_id' => 1638, 'name' => 'Banjarmasin Timur'],
['id' => 10075, 'district_id' => 1638, 'name' => 'Sungai Banjarmasin Timur'],
['id' => 10076, 'district_id' => 1638, 'name' => 'Tungkal Banjarmasin Timur'],

// Desa/Kelurahan di Kecamatan Banjarmasin Barat
['id' => 10077, 'district_id' => 1639, 'name' => 'Banjarmasin Barat'],
['id' => 10078, 'district_id' => 1639, 'name' => 'Sungai Banjarmasin Barat'],
['id' => 10079, 'district_id' => 1639, 'name' => 'Tungkal Banjarmasin Barat'],

// Desa/Kelurahan di Kecamatan Tanjung Redeb
['id' => 10080, 'district_id' => 1640, 'name' => 'Tanjung Redeb'],
['id' => 10081, 'district_id' => 1640, 'name' => 'Sungai Tanjung Redeb'],
['id' => 10082, 'district_id' => 1640, 'name' => 'Tungkal Tanjung Redeb'],

// Desa/Kelurahan di Kecamatan Gunung Tabur
['id' => 10083, 'district_id' => 1641, 'name' => 'Gunung Tabur'],
['id' => 10084, 'district_id' => 1641, 'name' => 'Sungai Gunung Tabur'],
['id' => 10085, 'district_id' => 1641, 'name' => 'Tungkal Gunung Tabur'],

// Desa/Kelurahan di Kecamatan Kelay
['id' => 10086, 'district_id' => 1642, 'name' => 'Kelay'],
['id' => 10087, 'district_id' => 1642, 'name' => 'Sungai Kelay'],
['id' => 10088, 'district_id' => 1642, 'name' => 'Tungkal Kelay'],

// Desa/Kelurahan di Kecamatan Biatan
['id' => 10089, 'district_id' => 1643, 'name' => 'Biatan'],
['id' => 10090, 'district_id' => 1643, 'name' => 'Sungai Biatan'],
['id' => 10091, 'district_id' => 1643, 'name' => 'Tungkal Biatan'],

// Desa/Kelurahan di Kecamatan Batu Putih
['id' => 10092, 'district_id' => 1644, 'name' => 'Batu Putih'],
['id' => 10093, 'district_id' => 1644, 'name' => 'Sungai Batu Putih'],
['id' => 10094, 'district_id' => 1644, 'name' => 'Tungkal Batu Putih'],

// Desa/Kelurahan di Kecamatan Barong Tongkok
['id' => 10095, 'district_id' => 1645, 'name' => 'Barong Tongkok'],
['id' => 10096, 'district_id' => 1645, 'name' => 'Sungai Barong Tongkok'],
['id' => 10097, 'district_id' => 1645, 'name' => 'Tungkal Barong Tongkok'],

// Desa/Kelurahan di Kecamatan Batu Sopang
['id' => 10098, 'district_id' => 1646, 'name' => 'Batu Sopang'],
['id' => 10099, 'district_id' => 1646, 'name' => 'Sungai Batu Sopang'],
['id' => 10100, 'district_id' => 1646, 'name' => 'Tungkal Batu Sopang'],

// Desa/Kelurahan di Kecamatan Jempang
['id' => 10101, 'district_id' => 1647, 'name' => 'Jempang'],
['id' => 10102, 'district_id' => 1647, 'name' => 'Sungai Jempang'],
['id' => 10103, 'district_id' => 1647, 'name' => 'Tungkal Jempang'],

// Desa/Kelurahan di Kecamatan Melak
['id' => 10104, 'district_id' => 1648, 'name' => 'Melak'],
['id' => 10105, 'district_id' => 1648, 'name' => 'Sungai Melak'],
['id' => 10106, 'district_id' => 1648, 'name' => 'Tungkal Melak'],

// Desa/Kelurahan di Kecamatan Long Iram
['id' => 10107, 'district_id' => 1649, 'name' => 'Long Iram'],
['id' => 10108, 'district_id' => 1649, 'name' => 'Sungai Long Iram'],
['id' => 10109, 'district_id' => 1649, 'name' => 'Tungkal Long Iram'],

// Desa/Kelurahan di Kecamatan Tenggarong
['id' => 10110, 'district_id' => 1650, 'name' => 'Tenggarong'],
['id' => 10111, 'district_id' => 1650, 'name' => 'Sungai Tenggarong'],
['id' => 10112, 'district_id' => 1650, 'name' => 'Tungkal Tenggarong'],

// Desa/Kelurahan di Kecamatan Loa Janan
['id' => 10113, 'district_id' => 1651, 'name' => 'Loa Janan'],
['id' => 10114, 'district_id' => 1651, 'name' => 'Sungai Loa Janan'],
['id' => 10115, 'district_id' => 1651, 'name' => 'Tungkal Loa Janan'],

// Desa/Kelurahan di Kecamatan Kota Bangun
['id' => 10116, 'district_id' => 1652, 'name' => 'Kota Bangun'],
['id' => 10117, 'district_id' => 1652, 'name' => 'Sungai Kota Bangun'],
['id' => 10118, 'district_id' => 1652, 'name' => 'Tungkal Kota Bangun'],

// Desa/Kelurahan di Kecamatan Muara Kaman
['id' => 10119, 'district_id' => 1653, 'name' => 'Muara Kaman'],
['id' => 10120, 'district_id' => 1653, 'name' => 'Sungai Muara Kaman'],
['id' => 10121, 'district_id' => 1653, 'name' => 'Tungkal Muara Kaman'],

// Desa/Kelurahan di Kecamatan Samboja
['id' => 10122, 'district_id' => 1654, 'name' => 'Samboja'],
['id' => 10123, 'district_id' => 1654, 'name' => 'Sungai Samboja'],
['id' => 10124, 'district_id' => 1654, 'name' => 'Tungkal Samboja'],

// Desa/Kelurahan di Kecamatan Sangatta
['id' => 10125, 'district_id' => 1655, 'name' => 'Sangatta'],
['id' => 10126, 'district_id' => 1655, 'name' => 'Sungai Sangatta'],
['id' => 10127, 'district_id' => 1655, 'name' => 'Tungkal Sangatta'],

// Desa/Kelurahan di Kecamatan Bengalon
['id' => 10128, 'district_id' => 1656, 'name' => 'Bengalon'],
['id' => 10129, 'district_id' => 1656, 'name' => 'Sungai Bengalon'],
['id' => 10130, 'district_id' => 1656, 'name' => 'Tungkal Bengalon'],

// Desa/Kelurahan di Kecamatan Kaliorang
['id' => 10131, 'district_id' => 1657, 'name' => 'Kaliorang'],
['id' => 10132, 'district_id' => 1657, 'name' => 'Sungai Kaliorang'],
['id' => 10133, 'district_id' => 1657, 'name' => 'Tungkal Kaliorang'],

// Desa/Kelurahan di Kecamatan Rantau Pulung
['id' => 10134, 'district_id' => 1658, 'name' => 'Rantau Pulung'],
['id' => 10135, 'district_id' => 1658, 'name' => 'Sungai Rantau Pulung'],
['id' => 10136, 'district_id' => 1658, 'name' => 'Tungkal Rantau Pulung'],

// Desa/Kelurahan di Kecamatan Sandaran
['id' => 10137, 'district_id' => 1659, 'name' => 'Sandaran'],
['id' => 10138, 'district_id' => 1659, 'name' => 'Sungai Sandaran'],
['id' => 10139, 'district_id' => 1659, 'name' => 'Tungkal Sandaran'],

// Desa/Kelurahan di Kecamatan Long Bagun
['id' => 10140, 'district_id' => 1660, 'name' => 'Long Bagun'],
['id' => 10141, 'district_id' => 1660, 'name' => 'Sungai Long Bagun'],
['id' => 10142, 'district_id' => 1660, 'name' => 'Tungkal Long Bagun'],

// Desa/Kelurahan di Kecamatan Muara Pahu
['id' => 10143, 'district_id' => 1661, 'name' => 'Muara Pahu'],
['id' => 10144, 'district_id' => 1661, 'name' => 'Sungai Muara Pahu'],
['id' => 10145, 'district_id' => 1661, 'name' => 'Tungkal Muara Pahu'],

// Desa/Kelurahan di Kecamatan Barong Tongkok
['id' => 10146, 'district_id' => 1662, 'name' => 'Barong Tongkok'],
['id' => 10147, 'district_id' => 1662, 'name' => 'Sungai Barong Tongkok'],
['id' => 10148, 'district_id' => 1662, 'name' => 'Tungkal Barong Tongkok'],

// Desa/Kelurahan di Kecamatan Long Hubung
['id' => 10149, 'district_id' => 1663, 'name' => 'Long Hubung'],
['id' => 10150, 'district_id' => 1663, 'name' => 'Sungai Long Hubung'],
['id' => 10151, 'district_id' => 1663, 'name' => 'Tungkal Long Hubung'],

// Desa/Kelurahan di Kecamatan Long Iram
['id' => 10152, 'district_id' => 1664, 'name' => 'Long Iram'],
['id' => 10153, 'district_id' => 1664, 'name' => 'Sungai Long Iram'],
['id' => 10154, 'district_id' => 1664, 'name' => 'Tungkal Long Iram'],

// Desa/Kelurahan di Kecamatan Tanah Grogot
['id' => 10155, 'district_id' => 1665, 'name' => 'Tanah Grogot'],
['id' => 10156, 'district_id' => 1665, 'name' => 'Sungai Tanah Grogot'],
['id' => 10157, 'district_id' => 1665, 'name' => 'Tungkal Tanah Grogot'],

// Desa/Kelurahan di Kecamatan Batu Sopang
['id' => 10158, 'district_id' => 1666, 'name' => 'Batu Sopang'],
['id' => 10159, 'district_id' => 1666, 'name' => 'Sungai Batu Sopang'],
['id' => 10160, 'district_id' => 1666, 'name' => 'Tungkal Batu Sopang'],

// Desa/Kelurahan di Kecamatan Long Ikis
['id' => 10161, 'district_id' => 1667, 'name' => 'Long Ikis'],
['id' => 10162, 'district_id' => 1667, 'name' => 'Sungai Long Ikis'],
['id' => 10163, 'district_id' => 1667, 'name' => 'Tungkal Long Ikis'],

// Desa/Kelurahan di Kecamatan Pasir Belengkong
['id' => 10164, 'district_id' => 1668, 'name' => 'Pasir Belengkong'],
['id' => 10165, 'district_id' => 1668, 'name' => 'Sungai Pasir Belengkong'],
['id' => 10166, 'district_id' => 1668, 'name' => 'Tungkal Pasir Belengkong'],

// Desa/Kelurahan di Kecamatan Kuaro
['id' => 10167, 'district_id' => 1669, 'name' => 'Kuaro'],
['id' => 10168, 'district_id' => 1669, 'name' => 'Sungai Kuaro'],
['id' => 10169, 'district_id' => 1669, 'name' => 'Tungkal Kuaro'],

// Desa/Kelurahan di Kecamatan Penajam
['id' => 10170, 'district_id' => 1670, 'name' => 'Penajam'],
['id' => 10171, 'district_id' => 1670, 'name' => 'Sungai Penajam'],
['id' => 10172, 'district_id' => 1670, 'name' => 'Tungkal Penajam'],

// Desa/Kelurahan di Kecamatan Babulu
['id' => 10173, 'district_id' => 1671, 'name' => 'Babulu'],
['id' => 10174, 'district_id' => 1671, 'name' => 'Sungai Babulu'],
['id' => 10175, 'district_id' => 1671, 'name' => 'Tungkal Babulu'],

// Desa/Kelurahan di Kecamatan Waru
['id' => 10176, 'district_id' => 1672, 'name' => 'Waru'],
['id' => 10177, 'district_id' => 1672, 'name' => 'Sungai Waru'],
['id' => 10178, 'district_id' => 1672, 'name' => 'Tungkal Waru'],

// Desa/Kelurahan di Kecamatan Sepaku
['id' => 10179, 'district_id' => 1673, 'name' => 'Sepaku'],
['id' => 10180, 'district_id' => 1673, 'name' => 'Sungai Sepaku'],
['id' => 10181, 'district_id' => 1673, 'name' => 'Tungkal Sepaku'],

// Desa/Kelurahan di Kecamatan Long Kali
['id' => 10182, 'district_id' => 1674, 'name' => 'Long Kali'],
['id' => 10183, 'district_id' => 1674, 'name' => 'Sungai Long Kali'],
['id' => 10184, 'district_id' => 1674, 'name' => 'Tungkal Long Kali'],

// Desa/Kelurahan di Kecamatan Balikpapan Selatan
['id' => 10185, 'district_id' => 1675, 'name' => 'Balikpapan Selatan'],
['id' => 10186, 'district_id' => 1675, 'name' => 'Sungai Balikpapan Selatan'],
['id' => 10187, 'district_id' => 1675, 'name' => 'Tungkal Balikpapan Selatan'],

// Desa/Kelurahan di Kecamatan Balikpapan Utara
['id' => 10188, 'district_id' => 1676, 'name' => 'Balikpapan Utara'],
['id' => 10189, 'district_id' => 1676, 'name' => 'Sungai Balikpapan Utara'],
['id' => 10190, 'district_id' => 1676, 'name' => 'Tungkal Balikpapan Utara'],

// Desa/Kelurahan di Kecamatan Balikpapan Tengah
['id' => 10191, 'district_id' => 1677, 'name' => 'Balikpapan Tengah'],
['id' => 10192, 'district_id' => 1677, 'name' => 'Sungai Balikpapan Tengah'],
['id' => 10193, 'district_id' => 1677, 'name' => 'Tungkal Balikpapan Tengah'],

// Desa/Kelurahan di Kecamatan Balikpapan Timur
['id' => 10194, 'district_id' => 1678, 'name' => 'Balikpapan Timur'],
['id' => 10195, 'district_id' => 1678, 'name' => 'Sungai Balikpapan Timur'],
['id' => 10196, 'district_id' => 1678, 'name' => 'Tungkal Balikpapan Timur'],

// Desa/Kelurahan di Kecamatan Balikpapan Barat
['id' => 10197, 'district_id' => 1679, 'name' => 'Balikpapan Barat'],
['id' => 10198, 'district_id' => 1679, 'name' => 'Sungai Balikpapan Barat'],
['id' => 10199, 'district_id' => 1679, 'name' => 'Tungkal Balikpapan Barat'],

// Desa/Kelurahan di Kecamatan Samarinda Ilir
['id' => 10200, 'district_id' => 1680, 'name' => 'Samarinda Ilir'],
['id' => 10201, 'district_id' => 1680, 'name' => 'Sungai Samarinda Ilir'],
['id' => 10202, 'district_id' => 1680, 'name' => 'Tungkal Samarinda Ilir'],

// Desa/Kelurahan di Kecamatan Samarinda Ulu
['id' => 10203, 'district_id' => 1681, 'name' => 'Samarinda Ulu'],
['id' => 10204, 'district_id' => 1681, 'name' => 'Sungai Samarinda Ulu'],
['id' => 10205, 'district_id' => 1681, 'name' => 'Tungkal Samarinda Ulu'],

// Desa/Kelurahan di Kecamatan Samarinda Seberang
['id' => 10206, 'district_id' => 1682, 'name' => 'Samarinda Seberang'],
['id' => 10207, 'district_id' => 1682, 'name' => 'Sungai Samarinda Seberang'],
['id' => 10208, 'district_id' => 1682, 'name' => 'Tungkal Samarinda Seberang'],

// Desa/Kelurahan di Kecamatan Samarinda Kota
['id' => 10209, 'district_id' => 1683, 'name' => 'Samarinda Kota'],
['id' => 10210, 'district_id' => 1683, 'name' => 'Sungai Samarinda Kota'],
['id' => 10211, 'district_id' => 1683, 'name' => 'Tungkal Samarinda Kota'],

// Desa/Kelurahan di Kecamatan Samarinda Timur
['id' => 10212, 'district_id' => 1684, 'name' => 'Samarinda Timur'],
['id' => 10213, 'district_id' => 1684, 'name' => 'Sungai Samarinda Timur'],
['id' => 10214, 'district_id' => 1684, 'name' => 'Tungkal Samarinda Timur'],

// Desa/Kelurahan di Kecamatan Bontang Utara
['id' => 10215, 'district_id' => 1685, 'name' => 'Bontang Utara'],
['id' => 10216, 'district_id' => 1685, 'name' => 'Sungai Bontang Utara'],
['id' => 10217, 'district_id' => 1685, 'name' => 'Tungkal Bontang Utara'],

// Desa/Kelurahan di Kecamatan Bontang Selatan
['id' => 10218, 'district_id' => 1686, 'name' => 'Bontang Selatan'],
['id' => 10219, 'district_id' => 1686, 'name' => 'Sungai Bontang Selatan'],
['id' => 10220, 'district_id' => 1686, 'name' => 'Tungkal Bontang Selatan'],

// Desa/Kelurahan di Kecamatan Bontang Barat
['id' => 10221, 'district_id' => 1687, 'name' => 'Bontang Barat'],
['id' => 10222, 'district_id' => 1687, 'name' => 'Sungai Bontang Barat'],
['id' => 10223, 'district_id' => 1687, 'name' => 'Tungkal Bontang Barat'],

// Desa/Kelurahan di Kecamatan Bontang Lestari
['id' => 10224, 'district_id' => 1688, 'name' => 'Bontang Lestari'],
['id' => 10225, 'district_id' => 1688, 'name' => 'Sungai Bontang Lestari'],
['id' => 10226, 'district_id' => 1688, 'name' => 'Tungkal Bontang Lestari'],

// Desa/Kelurahan di Kecamatan Bontang Kuala
['id' => 10227, 'district_id' => 1689, 'name' => 'Bontang Kuala'],
['id' => 10228, 'district_id' => 1689, 'name' => 'Sungai Bontang Kuala'],
['id' => 10229, 'district_id' => 1689, 'name' => 'Tungkal Bontang Kuala'],

// Desa/Kelurahan di Kecamatan Tanjung Selor
['id' => 10230, 'district_id' => 1690, 'name' => 'Tanjung Selor'],
['id' => 10231, 'district_id' => 1690, 'name' => 'Sungai Tanjung Selor'],
['id' => 10232, 'district_id' => 1690, 'name' => 'Tungkal Tanjung Selor'],

// Desa/Kelurahan di Kecamatan Bunyu
['id' => 10233, 'district_id' => 1691, 'name' => 'Bunyu'],
['id' => 10234, 'district_id' => 1691, 'name' => 'Sungai Bunyu'],
['id' => 10235, 'district_id' => 1691, 'name' => 'Tungkal Bunyu'],

// Desa/Kelurahan di Kecamatan Peso
['id' => 10236, 'district_id' => 1692, 'name' => 'Peso'],
['id' => 10237, 'district_id' => 1692, 'name' => 'Sungai Peso'],
['id' => 10238, 'district_id' => 1692, 'name' => 'Tungkal Peso'],

// Desa/Kelurahan di Kecamatan Tanjung Palas
['id' => 10239, 'district_id' => 1693, 'name' => 'Tanjung Palas'],
['id' => 10240, 'district_id' => 1693, 'name' => 'Sungai Tanjung Palas'],
['id' => 10241, 'district_id' => 1693, 'name' => 'Tungkal Tanjung Palas'],

// Desa/Kelurahan di Kecamatan Tanjung Palas Timur
['id' => 10242, 'district_id' => 1694, 'name' => 'Tanjung Palas Timur'],
['id' => 10243, 'district_id' => 1694, 'name' => 'Sungai Tanjung Palas Timur'],
['id' => 10244, 'district_id' => 1694, 'name' => 'Tungkal Tanjung Palas Timur'],

// Desa/Kelurahan di Kecamatan Malinau Kota
['id' => 10245, 'district_id' => 1695, 'name' => 'Malinau Kota'],
['id' => 10246, 'district_id' => 1695, 'name' => 'Sungai Malinau Kota'],
['id' => 10247, 'district_id' => 1695, 'name' => 'Tungkal Malinau Kota'],

// Desa/Kelurahan di Kecamatan Malinau Selatan
['id' => 10248, 'district_id' => 1696, 'name' => 'Malinau Selatan'],
['id' => 10249, 'district_id' => 1696, 'name' => 'Sungai Malinau Selatan'],
['id' => 10250, 'district_id' => 1696, 'name' => 'Tungkal Malinau Selatan'],

// Desa/Kelurahan di Kecamatan Malinau Utara
['id' => 10251, 'district_id' => 1697, 'name' => 'Malinau Utara'],
['id' => 10252, 'district_id' => 1697, 'name' => 'Sungai Malinau Utara'],
['id' => 10253, 'district_id' => 1697, 'name' => 'Tungkal Malinau Utara'],

// Desa/Kelurahan di Kecamatan Malinau Barat
['id' => 10254, 'district_id' => 1698, 'name' => 'Malinau Barat'],
['id' => 10255, 'district_id' => 1698, 'name' => 'Sungai Malinau Barat'],
['id' => 10256, 'district_id' => 1698, 'name' => 'Tungkal Malinau Barat'],

// Desa/Kelurahan di Kecamatan Malinau Timur
['id' => 10257, 'district_id' => 1699, 'name' => 'Malinau Timur'],
['id' => 10258, 'district_id' => 1699, 'name' => 'Sungai Malinau Timur'],
['id' => 10259, 'district_id' => 1699, 'name' => 'Tungkal Malinau Timur'],

// Desa/Kelurahan di Kecamatan Nunukan
['id' => 10260, 'district_id' => 1700, 'name' => 'Nunukan'],
['id' => 10261, 'district_id' => 1700, 'name' => 'Sungai Nunukan'],
['id' => 10262, 'district_id' => 1700, 'name' => 'Tungkal Nunukan'],

// Desa/Kelurahan di Kecamatan Sebatik
['id' => 10263, 'district_id' => 1701, 'name' => 'Sebatik'],
['id' => 10264, 'district_id' => 1701, 'name' => 'Sungai Sebatik'],
['id' => 10265, 'district_id' => 1701, 'name' => 'Tungkal Sebatik'],

// Desa/Kelurahan di Kecamatan Lumbis Ogong
['id' => 10266, 'district_id' => 1702, 'name' => 'Lumbis Ogong'],
['id' => 10267, 'district_id' => 1702, 'name' => 'Sungai Lumbis Ogong'],
['id' => 10268, 'district_id' => 1702, 'name' => 'Tungkal Lumbis Ogong'],

// Desa/Kelurahan di Kecamatan Lumbis
['id' => 10269, 'district_id' => 1703, 'name' => 'Lumbis'],
['id' => 10270, 'district_id' => 1703, 'name' => 'Sungai Lumbis'],
['id' => 10271, 'district_id' => 1703, 'name' => 'Tungkal Lumbis'],

// Desa/Kelurahan di Kecamatan Sembakung
['id' => 10272, 'district_id' => 1704, 'name' => 'Sembakung'],
['id' => 10273, 'district_id' => 1704, 'name' => 'Sungai Sembakung'],
['id' => 10274, 'district_id' => 1704, 'name' => 'Tungkal Sembakung'],

// Desa/Kelurahan di Kecamatan Tana Tidung
['id' => 10275, 'district_id' => 1705, 'name' => 'Tana Tidung'],
['id' => 10276, 'district_id' => 1705, 'name' => 'Sungai Tana Tidung'],
['id' => 10277, 'district_id' => 1705, 'name' => 'Tungkal Tana Tidung'],

// Desa/Kelurahan di Kecamatan Sesayap
['id' => 10278, 'district_id' => 1706, 'name' => 'Sesayap'],
['id' => 10279, 'district_id' => 1706, 'name' => 'Sungai Sesayap'],
['id' => 10280, 'district_id' => 1706, 'name' => 'Tungkal Sesayap'],

// Desa/Kelurahan di Kecamatan KTT
['id' => 10281, 'district_id' => 1707, 'name' => 'KTT'],
['id' => 10282, 'district_id' => 1707, 'name' => 'Sungai KTT'],
['id' => 10283, 'district_id' => 1707, 'name' => 'Tungkal KTT'],

// Desa/Kelurahan di Kecamatan Tana Tidung Selatan
['id' => 10284, 'district_id' => 1708, 'name' => 'Tana Tidung Selatan'],
['id' => 10285, 'district_id' => 1708, 'name' => 'Sungai Tana Tidung Selatan'],
['id' => 10286, 'district_id' => 1708, 'name' => 'Tungkal Tana Tidung Selatan'],

// Desa/Kelurahan di Kecamatan Tana Tidung Utara
['id' => 10287, 'district_id' => 1709, 'name' => 'Tana Tidung Utara'],
['id' => 10288, 'district_id' => 1709, 'name' => 'Sungai Tana Tidung Utara'],
['id' => 10289, 'district_id' => 1709, 'name' => 'Tungkal Tana Tidung Utara'],

// Desa/Kelurahan di Kecamatan Tarakan Barat
['id' => 10290, 'district_id' => 1710, 'name' => 'Tarakan Barat'],
['id' => 10291, 'district_id' => 1710, 'name' => 'Sungai Tarakan Barat'],
['id' => 10292, 'district_id' => 1710, 'name' => 'Tungkal Tarakan Barat'],

// Desa/Kelurahan di Kecamatan Tarakan Timur
['id' => 10293, 'district_id' => 1711, 'name' => 'Tarakan Timur'],
['id' => 10294, 'district_id' => 1711, 'name' => 'Sungai Tarakan Timur'],
['id' => 10295, 'district_id' => 1711, 'name' => 'Tungkal Tarakan Timur'],

// Desa/Kelurahan di Kecamatan Tarakan Tengah
['id' => 10296, 'district_id' => 1712, 'name' => 'Tarakan Tengah'],
['id' => 10297, 'district_id' => 1712, 'name' => 'Sungai Tarakan Tengah'],
['id' => 10298, 'district_id' => 1712, 'name' => 'Tungkal Tarakan Tengah'],

// Desa/Kelurahan di Kecamatan Tarakan Selatan
['id' => 10299, 'district_id' => 1713, 'name' => 'Tarakan Selatan'],
['id' => 10300, 'district_id' => 1713, 'name' => 'Sungai Tarakan Selatan'],
['id' => 10301, 'district_id' => 1713, 'name' => 'Tungkal Tarakan Selatan'],

// Desa/Kelurahan di Kecamatan Tarakan Utara
['id' => 10302, 'district_id' => 1714, 'name' => 'Tarakan Utara'],
['id' => 10303, 'district_id' => 1714, 'name' => 'Sungai Tarakan Utara'],
['id' => 10304, 'district_id' => 1714, 'name' => 'Tungkal Tarakan Utara'],

// Desa/Kelurahan di Kecamatan Kotamobagu
['id' => 10305, 'district_id' => 1715, 'name' => 'Kotamobagu'],
['id' => 10306, 'district_id' => 1715, 'name' => 'Sungai Kotamobagu'],
['id' => 10307, 'district_id' => 1715, 'name' => 'Tungkal Kotamobagu'],

// Desa/Kelurahan di Kecamatan Bolaang
['id' => 10308, 'district_id' => 1716, 'name' => 'Bolaang'],
['id' => 10309, 'district_id' => 1716, 'name' => 'Sungai Bolaang'],
['id' => 10310, 'district_id' => 1716, 'name' => 'Tungkal Bolaang'],

// Desa/Kelurahan di Kecamatan Dumoga
['id' => 10311, 'district_id' => 1717, 'name' => 'Dumoga'],
['id' => 10312, 'district_id' => 1717, 'name' => 'Sungai Dumoga'],
['id' => 10313, 'district_id' => 1717, 'name' => 'Tungkal Dumoga'],

// Desa/Kelurahan di Kecamatan Dumoga Timur
['id' => 10314, 'district_id' => 1718, 'name' => 'Dumoga Timur'],
['id' => 10315, 'district_id' => 1718, 'name' => 'Sungai Dumoga Timur'],
['id' => 10316, 'district_id' => 1718, 'name' => 'Tungkal Dumoga Timur'],

// Desa/Kelurahan di Kecamatan Dumoga Utara
['id' => 10317, 'district_id' => 1719, 'name' => 'Dumoga Utara'],
['id' => 10318, 'district_id' => 1719, 'name' => 'Sungai Dumoga Utara'],
['id' => 10319, 'district_id' => 1719, 'name' => 'Tungkal Dumoga Utara'],

// Desa/Kelurahan di Kecamatan Bolaang Mongondow Selatan
['id' => 10320, 'district_id' => 1720, 'name' => 'Bolaang Mongondow Selatan'],
['id' => 10321, 'district_id' => 1720, 'name' => 'Sungai Bolaang Mongondow Selatan'],
['id' => 10322, 'district_id' => 1720, 'name' => 'Tungkal Bolaang Mongondow Selatan'],

// Desa/Kelurahan di Kecamatan Pinolosian
['id' => 10323, 'district_id' => 1721, 'name' => 'Pinolosian'],
['id' => 10324, 'district_id' => 1721, 'name' => 'Sungai Pinolosian'],
['id' => 10325, 'district_id' => 1721, 'name' => 'Tungkal Pinolosian'],

// Desa/Kelurahan di Kecamatan Pinolosian Tengah
['id' => 10326, 'district_id' => 1722, 'name' => 'Pinolosian Tengah'],
['id' => 10327, 'district_id' => 1722, 'name' => 'Sungai Pinolosian Tengah'],
['id' => 10328, 'district_id' => 1722, 'name' => 'Tungkal Pinolosian Tengah'],

// Desa/Kelurahan di Kecamatan Pinolosian Utara
['id' => 10329, 'district_id' => 1723, 'name' => 'Pinolosian Utara'],
['id' => 10330, 'district_id' => 1723, 'name' => 'Sungai Pinolosian Utara'],
['id' => 10331, 'district_id' => 1723, 'name' => 'Tungkal Pinolosian Utara'],

// Desa/Kelurahan di Kecamatan Bolaang
['id' => 10332, 'district_id' => 1724, 'name' => 'Bolaang'],
['id' => 10333, 'district_id' => 1724, 'name' => 'Sungai Bolaang'],
['id' => 10334, 'district_id' => 1724, 'name' => 'Tungkal Bolaang'],

// Desa/Kelurahan di Kecamatan Modayag
['id' => 10335, 'district_id' => 1725, 'name' => 'Modayag'],
['id' => 10336, 'district_id' => 1725, 'name' => 'Sungai Modayag'],
['id' => 10337, 'district_id' => 1725, 'name' => 'Tungkal Modayag'],

// Desa/Kelurahan di Kecamatan Modayag Barat
['id' => 10338, 'district_id' => 1726, 'name' => 'Modayag Barat'],
['id' => 10339, 'district_id' => 1726, 'name' => 'Sungai Modayag Barat'],
['id' => 10340, 'district_id' => 1726, 'name' => 'Tungkal Modayag Barat'],

// Desa/Kelurahan di Kecamatan Modayag Timur
['id' => 10341, 'district_id' => 1727, 'name' => 'Modayag Timur'],
['id' => 10342, 'district_id' => 1727, 'name' => 'Sungai Modayag Timur'],
['id' => 10343, 'district_id' => 1727, 'name' => 'Tungkal Modayag Timur'],

// Desa/Kelurahan di Kecamatan Bolaang
['id' => 10344, 'district_id' => 1728, 'name' => 'Bolaang'],
['id' => 10345, 'district_id' => 1728, 'name' => 'Sungai Bolaang'],
['id' => 10346, 'district_id' => 1728, 'name' => 'Tungkal Bolaang'],

// Desa/Kelurahan di Kecamatan Kaidipang
['id' => 10347, 'district_id' => 1729, 'name' => 'Kaidipang'],
['id' => 10348, 'district_id' => 1729, 'name' => 'Sungai Kaidipang'],
['id' => 10349, 'district_id' => 1729, 'name' => 'Tungkal Kaidipang'],

// Desa/Kelurahan di Kecamatan Bolaang
['id' => 10350, 'district_id' => 1730, 'name' => 'Bolaang'],
['id' => 10351, 'district_id' => 1730, 'name' => 'Sungai Bolaang'],
['id' => 10352, 'district_id' => 1730, 'name' => 'Tungkal Bolaang'],

// Desa/Kelurahan di Kecamatan Dumoga
['id' => 10353, 'district_id' => 1731, 'name' => 'Dumoga'],
['id' => 10354, 'district_id' => 1731, 'name' => 'Sungai Dumoga'],
['id' => 10355, 'district_id' => 1731, 'name' => 'Tungkal Dumoga'],

// Desa/Kelurahan di Kecamatan Sangihe
['id' => 10356, 'district_id' => 1732, 'name' => 'Sangihe'],
['id' => 10357, 'district_id' => 1732, 'name' => 'Sungai Sangihe'],
['id' => 10358, 'district_id' => 1732, 'name' => 'Tungkal Sangihe'],

// Desa/Kelurahan di Kecamatan Kepulauan Sangihe
['id' => 10359, 'district_id' => 1733, 'name' => 'Kepulauan Sangihe'],
['id' => 10360, 'district_id' => 1733, 'name' => 'Sungai Kepulauan Sangihe'],
['id' => 10361, 'district_id' => 1733, 'name' => 'Tungkal Kepulauan Sangihe'],

// Desa/Kelurahan di Kecamatan Siau
['id' => 10362, 'district_id' => 1734, 'name' => 'Siau'],
['id' => 10363, 'district_id' => 1734, 'name' => 'Sungai Siau'],
['id' => 10364, 'district_id' => 1734, 'name' => 'Tungkal Siau'],

// Desa/Kelurahan di Kecamatan Tagulandang
['id' => 10365, 'district_id' => 1735, 'name' => 'Tagulandang'],
['id' => 10366, 'district_id' => 1735, 'name' => 'Sungai Tagulandang'],
['id' => 10367, 'district_id' => 1735, 'name' => 'Tungkal Tagulandang'],

// Desa/Kelurahan di Kecamatan Biaro
['id' => 10368, 'district_id' => 1736, 'name' => 'Biaro'],
['id' => 10369, 'district_id' => 1736, 'name' => 'Sungai Biaro'],
['id' => 10370, 'district_id' => 1736, 'name' => 'Tungkal Biaro'],

// Desa/Kelurahan di Kecamatan Talaud
['id' => 10371, 'district_id' => 1737, 'name' => 'Talaud'],
['id' => 10372, 'district_id' => 1737, 'name' => 'Sungai Talaud'],
['id' => 10373, 'district_id' => 1737, 'name' => 'Tungkal Talaud'],

// Desa/Kelurahan di Kecamatan Kepulauan Talaud
['id' => 10374, 'district_id' => 1738, 'name' => 'Kepulauan Talaud'],
['id' => 10375, 'district_id' => 1738, 'name' => 'Sungai Kepulauan Talaud'],
['id' => 10376, 'district_id' => 1738, 'name' => 'Tungkal Kepulauan Talaud'],

// Desa/Kelurahan di Kecamatan Tondano
['id' => 10377, 'district_id' => 1739, 'name' => 'Tondano'],
['id' => 10378, 'district_id' => 1739, 'name' => 'Sungai Tondano'],
['id' => 10379, 'district_id' => 1739, 'name' => 'Tungkal Tondano'],

// Desa/Kelurahan di Kecamatan Kawangkoan
['id' => 10380, 'district_id' => 1740, 'name' => 'Kawangkoan'],
['id' => 10381, 'district_id' => 1740, 'name' => 'Sungai Kawangkoan'],
['id' => 10382, 'district_id' => 1740, 'name' => 'Tungkal Kawangkoan'],

// Desa/Kelurahan di Kecamatan Remboken
['id' => 10383, 'district_id' => 1741, 'name' => 'Remboken'],
['id' => 10384, 'district_id' => 1741, 'name' => 'Sungai Remboken'],
['id' => 10385, 'district_id' => 1741, 'name' => 'Tungkal Remboken'],

// Desa/Kelurahan di Kecamatan Langowan
['id' => 10386, 'district_id' => 1742, 'name' => 'Langowan'],
['id' => 10387, 'district_id' => 1742, 'name' => 'Sungai Langowan'],
['id' => 10388, 'district_id' => 1742, 'name' => 'Tungkal Langowan'],

// Desa/Kelurahan di Kecamatan Tomohon
['id' => 10389, 'district_id' => 1743, 'name' => 'Tomohon'],
['id' => 10390, 'district_id' => 1743, 'name' => 'Sungai Tomohon'],
['id' => 10391, 'district_id' => 1743, 'name' => 'Tungkal Tomohon'],

// Desa/Kelurahan di Kecamatan Amurang
['id' => 10392, 'district_id' => 1744, 'name' => 'Amurang'],
['id' => 10393, 'district_id' => 1744, 'name' => 'Sungai Amurang'],
['id' => 10394, 'district_id' => 1744, 'name' => 'Tungkal Amurang'],

// Desa/Kelurahan di Kecamatan Tumpaan
['id' => 10395, 'district_id' => 1745, 'name' => 'Tumpaan'],
['id' => 10396, 'district_id' => 1745, 'name' => 'Sungai Tumpaan'],
['id' => 10397, 'district_id' => 1745, 'name' => 'Tungkal Tumpaan'],

// Desa/Kelurahan di Kecamatan Suluun Tareran
['id' => 10398, 'district_id' => 1746, 'name' => 'Suluun Tareran'],
['id' => 10399, 'district_id' => 1746, 'name' => 'Sungai Suluun Tareran'],
['id' => 10400, 'district_id' => 1746, 'name' => 'Tungkal Suluun Tareran'],

// Desa/Kelurahan di Kecamatan Sinonsayang
['id' => 10401, 'district_id' => 1747, 'name' => 'Sinonsayang'],
['id' => 10402, 'district_id' => 1747, 'name' => 'Sungai Sinonsayang'],
['id' => 10403, 'district_id' => 1747, 'name' => 'Tungkal Sinonsayang'],

// Desa/Kelurahan di Kecamatan Modoinding
['id' => 10404, 'district_id' => 1748, 'name' => 'Modoinding'],
['id' => 10405, 'district_id' => 1748, 'name' => 'Sungai Modoinding'],
['id' => 10406, 'district_id' => 1748, 'name' => 'Tungkal Modoinding'],

// Desa/Kelurahan di Kecamatan Ratahan
['id' => 10407, 'district_id' => 1749, 'name' => 'Ratahan'],
['id' => 10408, 'district_id' => 1749, 'name' => 'Sungai Ratahan'],
['id' => 10409, 'district_id' => 1749, 'name' => 'Tungkal Ratahan'],

// Desa/Kelurahan di Kecamatan Tombatu
['id' => 10410, 'district_id' => 1750, 'name' => 'Tombatu'],
['id' => 10411, 'district_id' => 1750, 'name' => 'Sungai Tombatu'],
['id' => 10412, 'district_id' => 1750, 'name' => 'Tungkal Tombatu'],

// Desa/Kelurahan di Kecamatan Pusomaen
['id' => 10413, 'district_id' => 1751, 'name' => 'Pusomaen'],
['id' => 10414, 'district_id' => 1751, 'name' => 'Sungai Pusomaen'],
['id' => 10415, 'district_id' => 1751, 'name' => 'Tungkal Pusomaen'],

// Desa/Kelurahan di Kecamatan Belang
['id' => 10416, 'district_id' => 1752, 'name' => 'Belang'],
['id' => 10417, 'district_id' => 1752, 'name' => 'Sungai Belang'],
['id' => 10418, 'district_id' => 1752, 'name' => 'Tungkal Belang'],

// Desa/Kelurahan di Kecamatan Ratahan Timur
['id' => 10419, 'district_id' => 1753, 'name' => 'Ratahan Timur'],
['id' => 10420, 'district_id' => 1753, 'name' => 'Sungai Ratahan Timur'],
['id' => 10421, 'district_id' => 1753, 'name' => 'Tungkal Ratahan Timur'],

// Desa/Kelurahan di Kecamatan Airmadidi
['id' => 10422, 'district_id' => 1754, 'name' => 'Airmadidi'],
['id' => 10423, 'district_id' => 1754, 'name' => 'Sungai Airmadidi'],
['id' => 10424, 'district_id' => 1754, 'name' => 'Tungkal Airmadidi'],

// Desa/Kelurahan di Kecamatan Kalawat
['id' => 10425, 'district_id' => 1755, 'name' => 'Kalawat'],
['id' => 10426, 'district_id' => 1755, 'name' => 'Sungai Kalawat'],
['id' => 10427, 'district_id' => 1755, 'name' => 'Tungkal Kalawat'],

// Desa/Kelurahan di Kecamatan Likupang
['id' => 10428, 'district_id' => 1756, 'name' => 'Likupang'],
['id' => 10429, 'district_id' => 1756, 'name' => 'Sungai Likupang'],
['id' => 10430, 'district_id' => 1756, 'name' => 'Tungkal Likupang'],

// Desa/Kelurahan di Kecamatan Wori
['id' => 10431, 'district_id' => 1757, 'name' => 'Wori'],
['id' => 10432, 'district_id' => 1757, 'name' => 'Sungai Wori'],
['id' => 10433, 'district_id' => 1757, 'name' => 'Tungkal Wori'],

// Desa/Kelurahan di Kecamatan Dimembe
['id' => 10434, 'district_id' => 1758, 'name' => 'Dimembe'],
['id' => 10435, 'district_id' => 1758, 'name' => 'Sungai Dimembe'],
['id' => 10436, 'district_id' => 1758, 'name' => 'Tungkal Dimembe'],

// Desa/Kelurahan di Kecamatan Bitung Timur
['id' => 10437, 'district_id' => 1759, 'name' => 'Bitung Timur'],
['id' => 10438, 'district_id' => 1759, 'name' => 'Sungai Bitung Timur'],
['id' => 10439, 'district_id' => 1759, 'name' => 'Tungkal Bitung Timur'],

// Desa/Kelurahan di Kecamatan Bitung Barat
['id' => 10440, 'district_id' => 1760, 'name' => 'Bitung Barat'],
['id' => 10441, 'district_id' => 1760, 'name' => 'Sungai Bitung Barat'],
['id' => 10442, 'district_id' => 1760, 'name' => 'Tungkal Bitung Barat'],

// Desa/Kelurahan di Kecamatan Maesa
['id' => 10443, 'district_id' => 1761, 'name' => 'Maesa'],
['id' => 10444, 'district_id' => 1761, 'name' => 'Sungai Maesa'],
['id' => 10445, 'district_id' => 1761, 'name' => 'Tungkal Maesa'],

// Desa/Kelurahan di Kecamatan Aertembaga
['id' => 10446, 'district_id' => 1762, 'name' => 'Aertembaga'],
['id' => 10447, 'district_id' => 1762, 'name' => 'Sungai Aertembaga'],
['id' => 10448, 'district_id' => 1762, 'name' => 'Tungkal Aertembaga'],

// Desa/Kelurahan di Kecamatan Lembeh Selatan
['id' => 10449, 'district_id' => 1763, 'name' => 'Lembeh Selatan'],
['id' => 10450, 'district_id' => 1763, 'name' => 'Sungai Lembeh Selatan'],
['id' => 10451, 'district_id' => 1763, 'name' => 'Tungkal Lembeh Selatan'],

// Desa/Kelurahan di Kecamatan Kotamobagu Selatan
['id' => 10452, 'district_id' => 1764, 'name' => 'Kotamobagu Selatan'],
['id' => 10453, 'district_id' => 1764, 'name' => 'Sungai Kotamobagu Selatan'],
['id' => 10454, 'district_id' => 1764, 'name' => 'Tungkal Kotamobagu Selatan'],

// Desa/Kelurahan di Kecamatan Kotamobagu Utara
['id' => 10455, 'district_id' => 1765, 'name' => 'Kotamobagu Utara'],
['id' => 10456, 'district_id' => 1765, 'name' => 'Sungai Kotamobagu Utara'],
['id' => 10457, 'district_id' => 1765, 'name' => 'Tungkal Kotamobagu Utara'],

// Desa/Kelurahan di Kecamatan Kotamobagu Timur
['id' => 10458, 'district_id' => 1766, 'name' => 'Kotamobagu Timur'],
['id' => 10459, 'district_id' => 1766, 'name' => 'Sungai Kotamobagu Timur'],
['id' => 10460, 'district_id' => 1766, 'name' => 'Tungkal Kotamobagu Timur'],

// Desa/Kelurahan di Kecamatan Kotamobagu Barat
['id' => 10461, 'district_id' => 1767, 'name' => 'Kotamobagu Barat'],
['id' => 10462, 'district_id' => 1767, 'name' => 'Sungai Kotamobagu Barat'],
['id' => 10463, 'district_id' => 1767, 'name' => 'Tungkal Kotamobagu Barat'],

// Desa/Kelurahan di Kecamatan Manado Selatan
['id' => 10464, 'district_id' => 1768, 'name' => 'Manado Selatan'],
['id' => 10465, 'district_id' => 1768, 'name' => 'Sungai Manado Selatan'],
['id' => 10466, 'district_id' => 1768, 'name' => 'Tungkal Manado Selatan'],

// Desa/Kelurahan di Kecamatan Manado Utara
['id' => 10467, 'district_id' => 1769, 'name' => 'Manado Utara'],
['id' => 10468, 'district_id' => 1769, 'name' => 'Sungai Manado Utara'],
['id' => 10469, 'district_id' => 1769, 'name' => 'Tungkal Manado Utara'],

// Desa/Kelurahan di Kecamatan Manado Barat
['id' => 10470, 'district_id' => 1770, 'name' => 'Manado Barat'],
['id' => 10471, 'district_id' => 1770, 'name' => 'Sungai Manado Barat'],
['id' => 10472, 'district_id' => 1770, 'name' => 'Tungkal Manado Barat'],

// Desa/Kelurahan di Kecamatan Manado Timur
['id' => 10473, 'district_id' => 1771, 'name' => 'Manado Timur'],
['id' => 10474, 'district_id' => 1771, 'name' => 'Sungai Manado Timur'],
['id' => 10475, 'district_id' => 1771, 'name' => 'Tungkal Manado Timur'],

// Desa/Kelurahan di Kecamatan Manado Tengah
['id' => 10476, 'district_id' => 1772, 'name' => 'Manado Tengah'],
['id' => 10477, 'district_id' => 1772, 'name' => 'Sungai Manado Tengah'],
['id' => 10478, 'district_id' => 1772, 'name' => 'Tungkal Manado Tengah'],

// Desa/Kelurahan di Kecamatan Tomohon Selatan
['id' => 10479, 'district_id' => 1773, 'name' => 'Tomohon Selatan'],
['id' => 10480, 'district_id' => 1773, 'name' => 'Sungai Tomohon Selatan'],
['id' => 10481, 'district_id' => 1773, 'name' => 'Tungkal Tomohon Selatan'],

// Desa/Kelurahan di Kecamatan Tomohon Utara
['id' => 10482, 'district_id' => 1774, 'name' => 'Tomohon Utara'],
['id' => 10483, 'district_id' => 1774, 'name' => 'Sungai Tomohon Utara'],
['id' => 10484, 'district_id' => 1774, 'name' => 'Tungkal Tomohon Utara'],

// Desa/Kelurahan di Kecamatan Tomohon Barat
['id' => 10485, 'district_id' => 1775, 'name' => 'Tomohon Barat'],
['id' => 10486, 'district_id' => 1775, 'name' => 'Sungai Tomohon Barat'],
['id' => 10487, 'district_id' => 1775, 'name' => 'Tungkal Tomohon Barat'],

// Desa/Kelurahan di Kecamatan Tomohon Timur
['id' => 10488, 'district_id' => 1776, 'name' => 'Tomohon Timur'],
['id' => 10489, 'district_id' => 1776, 'name' => 'Sungai Tomohon Timur'],
['id' => 10490, 'district_id' => 1776, 'name' => 'Tungkal Tomohon Timur'],

// Desa/Kelurahan di Kecamatan Luwuk
['id' => 10491, 'district_id' => 1777, 'name' => 'Luwuk'],
['id' => 10492, 'district_id' => 1777, 'name' => 'Sungai Luwuk'],
['id' => 10493, 'district_id' => 1777, 'name' => 'Tungkal Luwuk'],

// Desa/Kelurahan di Kecamatan Toili
['id' => 10494, 'district_id' => 1778, 'name' => 'Toili'],
['id' => 10495, 'district_id' => 1778, 'name' => 'Sungai Toili'],
['id' => 10496, 'district_id' => 1778, 'name' => 'Tungkal Toili'],

// Desa/Kelurahan di Kecamatan Batui
['id' => 10497, 'district_id' => 1779, 'name' => 'Batui'],
['id' => 10498, 'district_id' => 1779, 'name' => 'Sungai Batui'],
['id' => 10499, 'district_id' => 1779, 'name' => 'Tungkal Batui'],

// Desa/Kelurahan di Kecamatan Bunta
['id' => 10500, 'district_id' => 1780, 'name' => 'Bunta'],
['id' => 10501, 'district_id' => 1780, 'name' => 'Sungai Bunta'],
['id' => 10502, 'district_id' => 1780, 'name' => 'Tungkal Bunta'],

// Desa/Kelurahan di Kecamatan Salakan
['id' => 10503, 'district_id' => 1781, 'name' => 'Salakan'],
['id' => 10504, 'district_id' => 1781, 'name' => 'Sungai Salakan'],
['id' => 10505, 'district_id' => 1781, 'name' => 'Tungkal Salakan'],

// Desa/Kelurahan di Kecamatan Liang
['id' => 10506, 'district_id' => 1782, 'name' => 'Liang'],
['id' => 10507, 'district_id' => 1782, 'name' => 'Sungai Liang'],
['id' => 10508, 'district_id' => 1782, 'name' => 'Tungkal Liang'],

// Desa/Kelurahan di Kecamatan Tinangkung
['id' => 10509, 'district_id' => 1783, 'name' => 'Tinangkung'],
['id' => 10510, 'district_id' => 1783, 'name' => 'Sungai Tinangkung'],
['id' => 10511, 'district_id' => 1783, 'name' => 'Tungkal Tinangkung'],

// Desa/Kelurahan di Kecamatan Totikum
['id' => 10512, 'district_id' => 1784, 'name' => 'Totikum'],
['id' => 10513, 'district_id' => 1784, 'name' => 'Sungai Totikum'],
['id' => 10514, 'district_id' => 1784, 'name' => 'Tungkal Totikum'],

// Desa/Kelurahan di Kecamatan Banggai
['id' => 10515, 'district_id' => 1785, 'name' => 'Banggai'],
['id' => 10516, 'district_id' => 1785, 'name' => 'Sungai Banggai'],
['id' => 10517, 'district_id' => 1785, 'name' => 'Tungkal Banggai'],

// Desa/Kelurahan di Kecamatan Banggai Utara
['id' => 10518, 'district_id' => 1786, 'name' => 'Banggai Utara'],
['id' => 10519, 'district_id' => 1786, 'name' => 'Sungai Banggai Utara'],
['id' => 10520, 'district_id' => 1786, 'name' => 'Tungkal Banggai Utara'],

// Desa/Kelurahan di Kecamatan Banggai Tengah
['id' => 10521, 'district_id' => 1787, 'name' => 'Banggai Tengah'],
['id' => 10522, 'district_id' => 1787, 'name' => 'Sungai Banggai Tengah'],
['id' => 10523, 'district_id' => 1787, 'name' => 'Tungkal Banggai Tengah'],

// Desa/Kelurahan di Kecamatan Banggai Selatan
['id' => 10524, 'district_id' => 1788, 'name' => 'Banggai Selatan'],
['id' => 10525, 'district_id' => 1788, 'name' => 'Sungai Banggai Selatan'],
['id' => 10526, 'district_id' => 1788, 'name' => 'Tungkal Banggai Selatan'],

// Desa/Kelurahan di Kecamatan Buol
['id' => 10527, 'district_id' => 1789, 'name' => 'Buol'],
['id' => 10528, 'district_id' => 1789, 'name' => 'Sungai Buol'],
['id' => 10529, 'district_id' => 1789, 'name' => 'Tungkal Buol'],

// Desa/Kelurahan di Kecamatan Biau
['id' => 10530, 'district_id' => 1790, 'name' => 'Biau'],
['id' => 10531, 'district_id' => 1790, 'name' => 'Sungai Biau'],
['id' => 10532, 'district_id' => 1790, 'name' => 'Tungkal Biau'],

// Desa/Kelurahan di Kecamatan Paleleh
['id' => 10533, 'district_id' => 1791, 'name' => 'Paleleh'],
['id' => 10534, 'district_id' => 1791, 'name' => 'Sungai Paleleh'],
['id' => 10535, 'district_id' => 1791, 'name' => 'Tungkal Paleleh'],

// Desa/Kelurahan di Kecamatan Tiloan
['id' => 10536, 'district_id' => 1792, 'name' => 'Tiloan'],
['id' => 10537, 'district_id' => 1792, 'name' => 'Sungai Tiloan'],
['id' => 10538, 'district_id' => 1792, 'name' => 'Tungkal Tiloan'],

// Desa/Kelurahan di Kecamatan Donggala
['id' => 10539, 'district_id' => 1793, 'name' => 'Donggala'],
['id' => 10540, 'district_id' => 1793, 'name' => 'Sungai Donggala'],
['id' => 10541, 'district_id' => 1793, 'name' => 'Tungkal Donggala'],

// Desa/Kelurahan di Kecamatan Banawa
['id' => 10542, 'district_id' => 1794, 'name' => 'Banawa'],
['id' => 10543, 'district_id' => 1794, 'name' => 'Sungai Banawa'],
['id' => 10544, 'district_id' => 1794, 'name' => 'Tungkal Banawa'],

// Desa/Kelurahan di Kecamatan Sindue
['id' => 10545, 'district_id' => 1795, 'name' => 'Sindue'],
['id' => 10546, 'district_id' => 1795, 'name' => 'Sungai Sindue'],
['id' => 10547, 'district_id' => 1795, 'name' => 'Tungkal Sindue'],

// Desa/Kelurahan di Kecamatan Sirenja
['id' => 10548, 'district_id' => 1796, 'name' => 'Sirenja'],
['id' => 10549, 'district_id' => 1796, 'name' => 'Sungai Sirenja'],
['id' => 10550, 'district_id' => 1796, 'name' => 'Tungkal Sirenja'],

// Desa/Kelurahan di Kecamatan Bungku
['id' => 10551, 'district_id' => 1797, 'name' => 'Bungku'],
['id' => 10552, 'district_id' => 1797, 'name' => 'Sungai Bungku'],
['id' => 10553, 'district_id' => 1797, 'name' => 'Tungkal Bungku'],

// Desa/Kelurahan di Kecamatan Bahodopi
['id' => 10554, 'district_id' => 1798, 'name' => 'Bahodopi'],
['id' => 10555, 'district_id' => 1798, 'name' => 'Sungai Bahodopi'],
['id' => 10556, 'district_id' => 1798, 'name' => 'Tungkal Bahodopi'],

// Desa/Kelurahan di Kecamatan Petasia
['id' => 10557, 'district_id' => 1799, 'name' => 'Petasia'],
['id' => 10558, 'district_id' => 1799, 'name' => 'Sungai Petasia'],
['id' => 10559, 'district_id' => 1799, 'name' => 'Tungkal Petasia'],

// Desa/Kelurahan di Kecamatan Mori Atas
['id' => 10560, 'district_id' => 1800, 'name' => 'Mori Atas'],
['id' => 10561, 'district_id' => 1800, 'name' => 'Sungai Mori Atas'],
['id' => 10562, 'district_id' => 1800, 'name' => 'Tungkal Mori Atas'],

// Desa/Kelurahan di Kecamatan Kolonedale
['id' => 10563, 'district_id' => 1801, 'name' => 'Kolonedale'],
['id' => 10564, 'district_id' => 1801, 'name' => 'Sungai Kolonedale'],
['id' => 10565, 'district_id' => 1801, 'name' => 'Tungkal Kolonedale'],

// Desa/Kelurahan di Kecamatan Bungku Utara
['id' => 10566, 'district_id' => 1802, 'name' => 'Bungku Utara'],
['id' => 10567, 'district_id' => 1802, 'name' => 'Sungai Bungku Utara'],
['id' => 10568, 'district_id' => 1802, 'name' => 'Tungkal Bungku Utara'],

// Desa/Kelurahan di Kecamatan Bungku Tengah
['id' => 10569, 'district_id' => 1803, 'name' => 'Bungku Tengah'],
['id' => 10570, 'district_id' => 1803, 'name' => 'Sungai Bungku Tengah'],
['id' => 10571, 'district_id' => 1803, 'name' => 'Tungkal Bungku Tengah'],

// Desa/Kelurahan di Kecamatan Bungku Selatan
['id' => 10572, 'district_id' => 1804, 'name' => 'Bungku Selatan'],
['id' => 10573, 'district_id' => 1804, 'name' => 'Sungai Bungku Selatan'],
['id' => 10574, 'district_id' => 1804, 'name' => 'Tungkal Bungku Selatan'],

// Desa/Kelurahan di Kecamatan Parigi
['id' => 10575, 'district_id' => 1805, 'name' => 'Parigi'],
['id' => 10576, 'district_id' => 1805, 'name' => 'Sungai Parigi'],
['id' => 10577, 'district_id' => 1805, 'name' => 'Tungkal Parigi'],

// Desa/Kelurahan di Kecamatan Moutong
['id' => 10578, 'district_id' => 1806, 'name' => 'Moutong'],
['id' => 10579, 'district_id' => 1806, 'name' => 'Sungai Moutong'],
['id' => 10580, 'district_id' => 1806, 'name' => 'Tungkal Moutong'],

// Desa/Kelurahan di Kecamatan Tinombo
['id' => 10581, 'district_id' => 1807, 'name' => 'Tinombo'],
['id' => 10582, 'district_id' => 1807, 'name' => 'Sungai Tinombo'],
['id' => 10583, 'district_id' => 1807, 'name' => 'Tungkal Tinombo'],

// Desa/Kelurahan di Kecamatan Ampibabo
['id' => 10584, 'district_id' => 1808, 'name' => 'Ampibabo'],
['id' => 10585, 'district_id' => 1808, 'name' => 'Sungai Ampibabo'],
['id' => 10586, 'district_id' => 1808, 'name' => 'Tungkal Ampibabo'],

// Desa/Kelurahan di Kecamatan Poso Kota
['id' => 10587, 'district_id' => 1809, 'name' => 'Poso Kota'],
['id' => 10588, 'district_id' => 1809, 'name' => 'Sungai Poso Kota'],
['id' => 10589, 'district_id' => 1809, 'name' => 'Tungkal Poso Kota'],

// Desa/Kelurahan di Kecamatan Pamona Selatan
['id' => 10590, 'district_id' => 1810, 'name' => 'Pamona Selatan'],
['id' => 10591, 'district_id' => 1810, 'name' => 'Sungai Pamona Selatan'],
['id' => 10592, 'district_id' => 1810, 'name' => 'Tungkal Pamona Selatan'],

// Desa/Kelurahan di Kecamatan Pamona Utara
['id' => 10593, 'district_id' => 1811, 'name' => 'Pamona Utara'],
['id' => 10594, 'district_id' => 1811, 'name' => 'Sungai Pamona Utara'],
['id' => 10595, 'district_id' => 1811, 'name' => 'Tungkal Pamona Utara'],

// Desa/Kelurahan di Kecamatan Lage
['id' => 10596, 'district_id' => 1812, 'name' => 'Lage'],
['id' => 10597, 'district_id' => 1812, 'name' => 'Sungai Lage'],
['id' => 10598, 'district_id' => 1812, 'name' => 'Tungkal Lage'],

// Desa/Kelurahan di Kecamatan Sigi Biromaru
['id' => 10599, 'district_id' => 1813, 'name' => 'Sigi Biromaru'],
['id' => 10600, 'district_id' => 1813, 'name' => 'Sungai Sigi Biromaru'],
['id' => 10601, 'district_id' => 1813, 'name' => 'Tungkal Sigi Biromaru'],

// Desa/Kelurahan di Kecamatan Dolo
['id' => 10602, 'district_id' => 1814, 'name' => 'Dolo'],
['id' => 10603, 'district_id' => 1814, 'name' => 'Sungai Dolo'],
['id' => 10604, 'district_id' => 1814, 'name' => 'Tungkal Dolo'],

// Desa/Kelurahan di Kecamatan Marawola
['id' => 10605, 'district_id' => 1815, 'name' => 'Marawola'],
['id' => 10606, 'district_id' => 1815, 'name' => 'Sungai Marawola'],
['id' => 10607, 'district_id' => 1815, 'name' => 'Tungkal Marawola'],

// Desa/Kelurahan di Kecamatan Kinovaro
['id' => 10608, 'district_id' => 1816, 'name' => 'Kinovaro'],
['id' => 10609, 'district_id' => 1816, 'name' => 'Sungai Kinovaro'],
['id' => 10610, 'district_id' => 1816, 'name' => 'Tungkal Kinovaro'],

// Desa/Kelurahan di Kecamatan Ampana Kota
['id' => 10611, 'district_id' => 1817, 'name' => 'Ampana Kota'],
['id' => 10612, 'district_id' => 1817, 'name' => 'Sungai Ampana Kota'],
['id' => 10613, 'district_id' => 1817, 'name' => 'Tungkal Ampana Kota'],

// Desa/Kelurahan di Kecamatan Una-Una
['id' => 10614, 'district_id' => 1818, 'name' => 'Una-Una'],
['id' => 10615, 'district_id' => 1818, 'name' => 'Sungai Una-Una'],
['id' => 10616, 'district_id' => 1818, 'name' => 'Tungkal Una-Una'],

// Desa/Kelurahan di Kecamatan Togean
['id' => 10617, 'district_id' => 1819, 'name' => 'Togean'],
['id' => 10618, 'district_id' => 1819, 'name' => 'Sungai Togean'],
['id' => 10619, 'district_id' => 1819, 'name' => 'Tungkal Togean'],

// Desa/Kelurahan di Kecamatan Walea Kepulauan
['id' => 10620, 'district_id' => 1820, 'name' => 'Walea Kepulauan'],
['id' => 10621, 'district_id' => 1820, 'name' => 'Sungai Walea Kepulauan'],
['id' => 10622, 'district_id' => 1820, 'name' => 'Tungkal Walea Kepulauan'],

// Desa/Kelurahan di Kecamatan Tolitoli Utara
['id' => 10623, 'district_id' => 1821, 'name' => 'Tolitoli Utara'],
['id' => 10624, 'district_id' => 1821, 'name' => 'Sungai Tolitoli Utara'],
['id' => 10625, 'district_id' => 1821, 'name' => 'Tungkal Tolitoli Utara'],

// Desa/Kelurahan di Kecamatan Tolitoli Selatan
['id' => 10626, 'district_id' => 1822, 'name' => 'Tolitoli Selatan'],
['id' => 10627, 'district_id' => 1822, 'name' => 'Sungai Tolitoli Selatan'],
['id' => 10628, 'district_id' => 1822, 'name' => 'Tungkal Tolitoli Selatan'],

// Desa/Kelurahan di Kecamatan Dampal Selatan
['id' => 10629, 'district_id' => 1823, 'name' => 'Dampal Selatan'],
['id' => 10630, 'district_id' => 1823, 'name' => 'Sungai Dampal Selatan'],
['id' => 10631, 'district_id' => 1823, 'name' => 'Tungkal Dampal Selatan'],

// Desa/Kelurahan di Kecamatan Dampal Utara
['id' => 10632, 'district_id' => 1824, 'name' => 'Dampal Utara'],
['id' => 10633, 'district_id' => 1824, 'name' => 'Sungai Dampal Utara'],
['id' => 10634, 'district_id' => 1824, 'name' => 'Tungkal Dampal Utara'],

// Desa/Kelurahan di Kecamatan Palu Barat
['id' => 10635, 'district_id' => 1825, 'name' => 'Palu Barat'],
['id' => 10636, 'district_id' => 1825, 'name' => 'Sungai Palu Barat'],
['id' => 10637, 'district_id' => 1825, 'name' => 'Tungkal Palu Barat'],

// Desa/Kelurahan di Kecamatan Palu Timur
['id' => 10638, 'district_id' => 1826, 'name' => 'Lasoani'],
['id' => 10639, 'district_id' => 1826, 'name' => 'Tondo'],
['id' => 10640, 'district_id' => 1826, 'name' => 'Besusu Timur'],

// Desa/Kelurahan di Kecamatan Palu Selatan
['id' => 10641, 'district_id' => 1827, 'name' => 'Petobo'],
['id' => 10642, 'district_id' => 1827, 'name' => 'Tawanjuka'],
['id' => 10643, 'district_id' => 1827, 'name' => 'Nunu'],

// Desa/Kelurahan di Kecamatan Palu Utara
['id' => 10644, 'district_id' => 1828, 'name' => 'Mamboro'],
['id' => 10645, 'district_id' => 1828, 'name' => 'Mamboro Barat'],
['id' => 10646, 'district_id' => 1828, 'name' => 'Lere'],

// Desa/Kelurahan di Kecamatan Bantaeng
['id' => 10647, 'district_id' => 1829, 'name' => 'Bonto Sunggu'],
['id' => 10648, 'district_id' => 1829, 'name' => 'Letta'],
['id' => 10649, 'district_id' => 1829, 'name' => 'Malleleng'],

// Desa/Kelurahan di Kecamatan Pajukukang
['id' => 10650, 'district_id' => 1830, 'name' => 'Bonto Jai'],
['id' => 10651, 'district_id' => 1830, 'name' => 'Bonto Cinde'],
['id' => 10652, 'district_id' => 1830, 'name' => 'Borong Rappoa'],

// Desa/Kelurahan di Kecamatan Uluere
['id' => 10653, 'district_id' => 1831, 'name' => 'Bonto Tangnga'],
['id' => 10654, 'district_id' => 1831, 'name' => 'Bonto Lojong'],
['id' => 10655, 'district_id' => 1831, 'name' => 'Labbo'],

// Desa/Kelurahan di Kecamatan Sinoa
['id' => 10656, 'district_id' => 1832, 'name' => 'Bonto Salluang'],
['id' => 10657, 'district_id' => 1832, 'name' => 'Bonto Majannang'],
['id' => 10658, 'district_id' => 1832, 'name' => 'Bonto Maccini'],

// Desa/Kelurahan di Kecamatan Barru
['id' => 10659, 'district_id' => 1833, 'name' => 'Biru'],
['id' => 10660, 'district_id' => 1833, 'name' => 'Coppo'],
['id' => 10661, 'district_id' => 1833, 'name' => 'Takkalasi'],

// Desa/Kelurahan di Kecamatan Pujananting
['id' => 10662, 'district_id' => 1834, 'name' => 'Bulo-Bulo'],
['id' => 10663, 'district_id' => 1834, 'name' => 'Gattareng'],
['id' => 10664, 'district_id' => 1834, 'name' => 'Pujananting'],

// Desa/Kelurahan di Kecamatan Balusu
['id' => 10665, 'district_id' => 1835, 'name' => 'Balusu'],
['id' => 10666, 'district_id' => 1835, 'name' => 'Kupa'],
['id' => 10667, 'district_id' => 1835, 'name' => 'Madello'],

// Desa/Kelurahan di Kecamatan Soppeng Riaja
['id' => 10668, 'district_id' => 1836, 'name' => 'Lompo Tengah'],
['id' => 10669, 'district_id' => 1836, 'name' => 'Tellumpanua'],
['id' => 10670, 'district_id' => 1836, 'name' => 'Ajakkang'],

// Desa/Kelurahan di Kecamatan Watampone
['id' => 10671, 'district_id' => 1837, 'name' => 'Bajoe'],
['id' => 10672, 'district_id' => 1837, 'name' => 'Watampone'],
['id' => 10673, 'district_id' => 1837, 'name' => 'Macanang'],

// Desa/Kelurahan di Kecamatan Barebbo
['id' => 10674, 'district_id' => 1838, 'name' => 'Lalebata'],
['id' => 10675, 'district_id' => 1838, 'name' => 'Lanca'],
['id' => 10676, 'district_id' => 1838, 'name' => 'Cinnong'],

// Desa/Kelurahan di Kecamatan Cina
['id' => 10677, 'district_id' => 1839, 'name' => 'Ujung'],
['id' => 10678, 'district_id' => 1839, 'name' => 'Cina'],
['id' => 10679, 'district_id' => 1839, 'name' => 'Mario'],

// Desa/Kelurahan di Kecamatan Ponre
['id' => 10680, 'district_id' => 1840, 'name' => 'Ponre'],
['id' => 10681, 'district_id' => 1840, 'name' => 'Bulu-Bulu'],
['id' => 10682, 'district_id' => 1840, 'name' => 'Tellulimpoe'],

// Desa/Kelurahan di Kecamatan Bulukumba
['id' => 10683, 'district_id' => 1841, 'name' => 'Tanete'],
['id' => 10684, 'district_id' => 1841, 'name' => 'Bontobangun'],
['id' => 10685, 'district_id' => 1841, 'name' => 'Bontotiro'],

// Desa/Kelurahan di Kecamatan Ujung Bulu
['id' => 10686, 'district_id' => 1842, 'name' => 'Kasimpureng'],
['id' => 10687, 'district_id' => 1842, 'name' => 'Eling-Eling'],
['id' => 10688, 'district_id' => 1842, 'name' => 'Lemo'],

// Desa/Kelurahan di Kecamatan Gantarang
['id' => 10689, 'district_id' => 1843, 'name' => 'Bontonyeleng'],
['id' => 10690, 'district_id' => 1843, 'name' => 'Bonto Bulaeng'],
['id' => 10691, 'district_id' => 1843, 'name' => 'Bontorannu'],

// Desa/Kelurahan di Kecamatan Kindang
['id' => 10692, 'district_id' => 1844, 'name' => 'Kindang'],
['id' => 10693, 'district_id' => 1844, 'name' => 'Sapobonto'],
['id' => 10694, 'district_id' => 1844, 'name' => 'Taccorong'],

// Desa/Kelurahan di Kecamatan Enrekang
['id' => 10695, 'district_id' => 1845, 'name' => 'Leoran'],
['id' => 10696, 'district_id' => 1845, 'name' => 'Cakke'],
['id' => 10697, 'district_id' => 1845, 'name' => 'Mataran'],

// Desa/Kelurahan di Kecamatan Cendana
['id' => 10698, 'district_id' => 1846, 'name' => 'Cendana'],
['id' => 10699, 'district_id' => 1846, 'name' => 'Patongloan'],
['id' => 10700, 'district_id' => 1846, 'name' => 'Tomenawa'],

// Desa/Kelurahan di Kecamatan Baraka
['id' => 10701, 'district_id' => 1847, 'name' => 'Baraka'],
['id' => 10702, 'district_id' => 1847, 'name' => 'Salukanan'],
['id' => 10703, 'district_id' => 1847, 'name' => 'Bone-Bone'],

// Desa/Kelurahan di Kecamatan Anggeraja
['id' => 10704, 'district_id' => 1848, 'name' => 'Anggeraja'],
['id' => 10705, 'district_id' => 1848, 'name' => 'Pangala'],
['id' => 10706, 'district_id' => 1848, 'name' => 'Saruran'],

// Desa/Kelurahan di Kecamatan Sungguminasa
['id' => 10707, 'district_id' => 1849, 'name' => 'Tamarunang'],
['id' => 10708, 'district_id' => 1849, 'name' => 'Kalegowa'],
['id' => 10709, 'district_id' => 1849, 'name' => 'Tombolo'],

// Desa/Kelurahan di Kecamatan Bontomarannu
['id' => 10710, 'district_id' => 1850, 'name' => 'Bontomarannu'],
['id' => 10711, 'district_id' => 1850, 'name' => 'Paccellekang'],
['id' => 10712, 'district_id' => 1850, 'name' => 'Romang Lompoa'],

// Desa/Kelurahan di Kecamatan Bajeng
['id' => 10713, 'district_id' => 1851, 'name' => 'Kalebajeng'],
['id' => 10714, 'district_id' => 1851, 'name' => 'Panyangkalang'],
['id' => 10715, 'district_id' => 1851, 'name' => 'Tompobulu'],

// Desa/Kelurahan di Kecamatan Somba Opu
['id' => 10716, 'district_id' => 1852, 'name' => 'Sungguminasa'],
['id' => 10717, 'district_id' => 1852, 'name' => 'Tamarunang'],
['id' => 10718, 'district_id' => 1852, 'name' => 'Romang Polong'],

// Desa/Kelurahan di Kecamatan Jeneponto
['id' => 10719, 'district_id' => 1853, 'name' => 'Balang'],
['id' => 10720, 'district_id' => 1853, 'name' => 'Pabiringa'],
['id' => 10721, 'district_id' => 1853, 'name' => 'Bontorappo'],

// Desa/Kelurahan di Kecamatan Bangkala
['id' => 10722, 'district_id' => 1854, 'name' => 'Bangkala'],
['id' => 10723, 'district_id' => 1854, 'name' => 'Bulu-Bulu'],
['id' => 10724, 'district_id' => 1854, 'name' => 'Lentu'],

// Desa/Kelurahan di Kecamatan Batang
['id' => 10725, 'district_id' => 1855, 'name' => 'Batang'],
['id' => 10726, 'district_id' => 1855, 'name' => 'Tarowang'],
['id' => 10727, 'district_id' => 1855, 'name' => 'Bontomate’ne'],

// Desa/Kelurahan di Kecamatan Arungkeke
['id' => 10728, 'district_id' => 1856, 'name' => 'Arungkeke'],
['id' => 10729, 'district_id' => 1856, 'name' => 'Turatea'],
['id' => 10730, 'district_id' => 1856, 'name' => 'Bontolebang'],

// Desa/Kelurahan di Kecamatan Belopa
['id' => 10731, 'district_id' => 1857, 'name' => 'Belopa'],
['id' => 10732, 'district_id' => 1857, 'name' => 'Baringeng'],
['id' => 10733, 'district_id' => 1857, 'name' => 'Lempangang'],

// Desa/Kelurahan di Kecamatan Bajo
['id' => 10734, 'district_id' => 1858, 'name' => 'Bajo'],
['id' => 10735, 'district_id' => 1858, 'name' => 'Batu Gajah'],
['id' => 10736, 'district_id' => 1858, 'name' => 'Padang Sappa'],

// Desa/Kelurahan di Kecamatan Bassesangtempe
['id' => 10737, 'district_id' => 1859, 'name' => 'Salassa'],
['id' => 10738, 'district_id' => 1859, 'name' => 'Bassesangtempe'],
['id' => 10739, 'district_id' => 1859, 'name' => 'To’barru'],

// Desa/Kelurahan di Kecamatan Larompong
['id' => 10740, 'district_id' => 1860, 'name' => 'Larompong'],
['id' => 10741, 'district_id' => 1860, 'name' => 'Buntu Batu'],
['id' => 10742, 'district_id' => 1860, 'name' => 'Tana Toraja'],

// Desa/Kelurahan di Kecamatan Malili
['id' => 10743, 'district_id' => 1861, 'name' => 'Malili'],
['id' => 10744, 'district_id' => 1861, 'name' => 'Wewangriu'],
['id' => 10745, 'district_id' => 1861, 'name' => 'Baruga'],

// Desa/Kelurahan di Kecamatan Towuti
['id' => 10746, 'district_id' => 1862, 'name' => 'Timampu'],
['id' => 10747, 'district_id' => 1862, 'name' => 'Lembo'],
['id' => 10748, 'district_id' => 1862, 'name' => 'Matano'],

// Desa/Kelurahan di Kecamatan Nuha
['id' => 10749, 'district_id' => 1863, 'name' => 'Nuha'],
['id' => 10750, 'district_id' => 1863, 'name' => 'Wasuponda'],
['id' => 10751, 'district_id' => 1863, 'name' => 'Soroako'],

// Desa/Kelurahan di Kecamatan Wasuponda
['id' => 10752, 'district_id' => 1864, 'name' => 'Wasuponda'],
['id' => 10753, 'district_id' => 1864, 'name' => 'Tominanga'],
['id' => 10754, 'district_id' => 1864, 'name' => 'Basseang'],

// Desa/Kelurahan di Kecamatan Masamba
['id' => 10755, 'district_id' => 1865, 'name' => 'Masamba'],
['id' => 10756, 'district_id' => 1865, 'name' => 'Limbong'],
['id' => 10757, 'district_id' => 1865, 'name' => 'Pincara'],

// Desa/Kelurahan di Kecamatan Sabbang
['id' => 10758, 'district_id' => 1866, 'name' => 'Sabbang'],
['id' => 10759, 'district_id' => 1866, 'name' => 'Baebunta'],
['id' => 10760, 'district_id' => 1866, 'name' => 'Tandukalua'],

// Desa/Kelurahan di Kecamatan Baebunta
['id' => 10761, 'district_id' => 1867, 'name' => 'Baebunta'],
['id' => 10762, 'district_id' => 1867, 'name' => 'Malimbu'],
['id' => 10763, 'district_id' => 1867, 'name' => 'Seko'],

// Desa/Kelurahan di Kecamatan Malangke
['id' => 10764, 'district_id' => 1868, 'name' => 'Malangke'],
['id' => 10765, 'district_id' => 1868, 'name' => 'Lembang'],
['id' => 10766, 'district_id' => 1868, 'name' => 'Marobo'],

// Desa/Kelurahan di Kecamatan Maros
['id' => 10767, 'district_id' => 1869, 'name' => 'Maros'],
['id' => 10768, 'district_id' => 1869, 'name' => 'Bonto Bahari'],
['id' => 10769, 'district_id' => 1869, 'name' => 'Turikale'],

// Desa/Kelurahan di Kecamatan Turikale
['id' => 10770, 'district_id' => 1870, 'name' => 'Turikale'],
['id' => 10771, 'district_id' => 1870, 'name' => 'Baju Bodoa'],
['id' => 10772, 'district_id' => 1870, 'name' => 'Pettuadae'],

// Desa/Kelurahan di Kecamatan Mandai
['id' => 10773, 'district_id' => 1871, 'name' => 'Mandai'],
['id' => 10774, 'district_id' => 1871, 'name' => 'Hasanuddin'],
['id' => 10775, 'district_id' => 1871, 'name' => 'Bontoa'],

// Desa/Kelurahan di Kecamatan Bontoa
['id' => 10776, 'district_id' => 1872, 'name' => 'Bontoa'],
['id' => 10777, 'district_id' => 1872, 'name' => 'Salomatti'],
['id' => 10778, 'district_id' => 1872, 'name' => 'Tellumpoccoe'],

// Desa/Kelurahan di Kecamatan Pangkajene
['id' => 10779, 'district_id' => 1873, 'name' => 'Pangkajene'],
['id' => 10780, 'district_id' => 1873, 'name' => 'Minasa Upa'],
['id' => 10781, 'district_id' => 1873, 'name' => 'Kalabbirang'],

// Desa/Kelurahan di Kecamatan Labakkang
['id' => 10782, 'district_id' => 1874, 'name' => 'Labakkang'],
['id' => 10783, 'district_id' => 1874, 'name' => 'Gentung'],
['id' => 10784, 'district_id' => 1874, 'name' => 'Baring'],

// Desa/Kelurahan di Kecamatan Segeri
['id' => 10785, 'district_id' => 1875, 'name' => 'Segeri'],
['id' => 10786, 'district_id' => 1875, 'name' => 'Pattalassang'],
['id' => 10787, 'district_id' => 1875, 'name' => 'Bulu Cindea'],

// Desa/Kelurahan di Kecamatan Minasa Tene
['id' => 10788, 'district_id' => 1876, 'name' => 'Minasa Tene'],
['id' => 10789, 'district_id' => 1876, 'name' => 'Bontoa'],
['id' => 10790, 'district_id' => 1876, 'name' => 'Pattalassang'],

// Desa/Kelurahan di Kecamatan Pinrang
['id' => 10791, 'district_id' => 1877, 'name' => 'Pinrang'],
['id' => 10792, 'district_id' => 1877, 'name' => 'Mamminasae'],
['id' => 10793, 'district_id' => 1877, 'name' => 'Penrang'],

// Desa/Kelurahan di Kecamatan Cempa
['id' => 10794, 'district_id' => 1878, 'name' => 'Cempa'],
['id' => 10795, 'district_id' => 1878, 'name' => 'Salipolo'],
['id' => 10796, 'district_id' => 1878, 'name' => 'Lero'],

// Desa/Kelurahan di Kecamatan Lembang
['id' => 10797, 'district_id' => 1879, 'name' => 'Lembang'],
['id' => 10798, 'district_id' => 1879, 'name' => 'Palesang'],
['id' => 10799, 'district_id' => 1879, 'name' => 'Pangia'],

// Desa/Kelurahan di Kecamatan Mattiro Bulu
['id' => 10800, 'district_id' => 1880, 'name' => 'Mattiro Bulu'],
['id' => 10801, 'district_id' => 1880, 'name' => 'Batu Papan'],
['id' => 10802, 'district_id' => 1880, 'name' => 'Tanra Tuo'],

// Desa/Kelurahan di Kecamatan Panca Rijang
['id' => 10803, 'district_id' => 1881, 'name' => 'Panca Rijang'],
['id' => 10804, 'district_id' => 1881, 'name' => 'Kalosi'],
['id' => 10805, 'district_id' => 1881, 'name' => 'Allakuang'],

// Desa/Kelurahan di Kecamatan Tellu Limpoe
['id' => 10806, 'district_id' => 1882, 'name' => 'Tellu Limpoe'],
['id' => 10807, 'district_id' => 1882, 'name' => 'Rappang'],
['id' => 10808, 'district_id' => 1882, 'name' => 'Teteaji'],

// Desa/Kelurahan di Kecamatan Watang Pulu
['id' => 10809, 'district_id' => 1883, 'name' => 'Watang Pulu'],
['id' => 10810, 'district_id' => 1883, 'name' => 'Tanete'],
['id' => 10811, 'district_id' => 1883, 'name' => 'Lawawoi'],

// Desa/Kelurahan di Kecamatan Baranti
['id' => 10812, 'district_id' => 1884, 'name' => 'Baranti'],
['id' => 10813, 'district_id' => 1884, 'name' => 'Bulo Wattang'],
['id' => 10814, 'district_id' => 1884, 'name' => 'Manisa'],

// Desa/Kelurahan di Kecamatan Sinjai
['id' => 10815, 'district_id' => 1885, 'name' => 'Sinjai'],
['id' => 10816, 'district_id' => 1885, 'name' => 'Biringere'],
['id' => 10817, 'district_id' => 1885, 'name' => 'Lamatti Riaja'],

// Desa/Kelurahan di Kecamatan Bulupoddo
['id' => 10818, 'district_id' => 1886, 'name' => 'Bulupoddo'],
['id' => 10819, 'district_id' => 1886, 'name' => 'Lamatti Riattang'],
['id' => 10820, 'district_id' => 1886, 'name' => 'Palangka'],

// Desa/Kelurahan di Kecamatan Sinjai Selatan
['id' => 10821, 'district_id' => 1887, 'name' => 'Sinjai Selatan'],
['id' => 10822, 'district_id' => 1887, 'name' => 'Bikeru'],
['id' => 10823, 'district_id' => 1887, 'name' => 'Sangiasseri'],

// Desa/Kelurahan di Kecamatan Sinjai Utara
['id' => 10824, 'district_id' => 1888, 'name' => 'Sinjai Utara'],
['id' => 10825, 'district_id' => 1888, 'name' => 'Balangnipa'],
['id' => 10826, 'district_id' => 1888, 'name' => 'Lappa'],

// Desa/Kelurahan di Kecamatan Watan Soppeng
['id' => 10827, 'district_id' => 1889, 'name' => 'Watan Soppeng'],
['id' => 10828, 'district_id' => 1889, 'name' => 'Botto'],
['id' => 10829, 'district_id' => 1889, 'name' => 'Lalabata Rilau'],

// Desa/Kelurahan di Kecamatan Lalabata
['id' => 10830, 'district_id' => 1890, 'name' => 'Lalabata'],
['id' => 10831, 'district_id' => 1890, 'name' => 'Bila'],
['id' => 10832, 'district_id' => 1890, 'name' => 'Apala'],

// Desa/Kelurahan di Kecamatan Marioriawa
['id' => 10833, 'district_id' => 1891, 'name' => 'Marioriawa'],
['id' => 10834, 'district_id' => 1891, 'name' => 'Panincong'],
['id' => 10835, 'district_id' => 1891, 'name' => 'Gattareng'],

// Desa/Kelurahan di Kecamatan Marioriwawo
['id' => 10836, 'district_id' => 1892, 'name' => 'Marioriwawo'],
['id' => 10837, 'district_id' => 1892, 'name' => 'Timusu'],
['id' => 10838, 'district_id' => 1892, 'name' => 'Jampu'],

// Desa/Kelurahan di Kecamatan Takalar
['id' => 10839, 'district_id' => 1893, 'name' => 'Takalar'],
['id' => 10840, 'district_id' => 1893, 'name' => 'Pattallassang'],
['id' => 10841, 'district_id' => 1893, 'name' => 'Kalabbirang'],

// Desa/Kelurahan di Kecamatan Galesong
['id' => 10842, 'district_id' => 1894, 'name' => 'Galesong'],
['id' => 10843, 'district_id' => 1894, 'name' => 'Pa\'lalakkang'],
['id' => 10844, 'district_id' => 1894, 'name' => 'Bontolebang'],

// Desa/Kelurahan di Kecamatan Mappakasunggu
['id' => 10845, 'district_id' => 1895, 'name' => 'Mappakasunggu'],
['id' => 10846, 'district_id' => 1895, 'name' => 'Lagaruda'],
['id' => 10847, 'district_id' => 1895, 'name' => 'Laikang'],

// Desa/Kelurahan di Kecamatan Sanrobone
['id' => 10848, 'district_id' => 1896, 'name' => 'Sanrobone'],
['id' => 10849, 'district_id' => 1896, 'name' => 'Soreang'],
['id' => 10850, 'district_id' => 1896, 'name' => 'Parangmata'],

// Desa/Kelurahan di Kecamatan Makale
['id' => 10851, 'district_id' => 1897, 'name' => 'Makale'],
['id' => 10852, 'district_id' => 1897, 'name' => 'Pantanakan Lolo'],
['id' => 10853, 'district_id' => 1897, 'name' => 'Rante Lemo'],

// Desa/Kelurahan di Kecamatan Saluputti
['id' => 10854, 'district_id' => 1898, 'name' => 'Saluputti'],
['id' => 10855, 'district_id' => 1898, 'name' => 'Tiku'],
['id' => 10856, 'district_id' => 1898, 'name' => 'Buntu Tanah'],

// Desa/Kelurahan di Kecamatan Bonggakaradeng
['id' => 10857, 'district_id' => 1899, 'name' => 'Bonggakaradeng'],
['id' => 10858, 'district_id' => 1899, 'name' => 'Buntu Buntu'],
['id' => 10859, 'district_id' => 1899, 'name' => 'Batuputih'],

// Desa/Kelurahan di Kecamatan Rantepao
['id' => 10860, 'district_id' => 1900, 'name' => 'Rantepao'],
['id' => 10861, 'district_id' => 1900, 'name' => 'Tondok Lembang'],
['id' => 10862, 'district_id' => 1900, 'name' => 'Kamang'],

// Desa/Kelurahan di Kecamatan Pangkajene
['id' => 10863, 'district_id' => 1873, 'name' => 'Pangkajene'],
['id' => 10864, 'district_id' => 1873, 'name' => 'Lau'],
['id' => 10865, 'district_id' => 1873, 'name' => 'Lattang'],

// Desa/Kelurahan di Kecamatan Labakkang
['id' => 10866, 'district_id' => 1874, 'name' => 'Labakkang'],
['id' => 10867, 'district_id' => 1874, 'name' => 'Bontoloe'],
['id' => 10868, 'district_id' => 1874, 'name' => 'Patampanua'],

// Desa/Kelurahan di Kecamatan Segeri
['id' => 10869, 'district_id' => 1875, 'name' => 'Segeri'],
['id' => 10870, 'district_id' => 1875, 'name' => 'Cempa'],
['id' => 10871, 'district_id' => 1875, 'name' => 'Wariyo'],

// Desa/Kelurahan di Kecamatan Minasa Tene
['id' => 10872, 'district_id' => 1876, 'name' => 'Minasa Tene'],
['id' => 10873, 'district_id' => 1876, 'name' => 'Pura'],
['id' => 10874, 'district_id' => 1876, 'name' => 'Tengah'],

// Desa/Kelurahan di Kecamatan Pinrang
['id' => 10875, 'district_id' => 1877, 'name' => 'Pinrang'],
['id' => 10876, 'district_id' => 1877, 'name' => 'Mattiro Bulu'],
['id' => 10877, 'district_id' => 1877, 'name' => 'Sirenreng'],

// Desa/Kelurahan di Kecamatan Cempa
['id' => 10878, 'district_id' => 1878, 'name' => 'Cempa'],
['id' => 10879, 'district_id' => 1878, 'name' => 'Batulappa'],
['id' => 10880, 'district_id' => 1878, 'name' => 'Pondok'],

// Desa/Kelurahan di Kecamatan Lembang
['id' => 10881, 'district_id' => 1879, 'name' => 'Lembang'],
['id' => 10882, 'district_id' => 1879, 'name' => 'Timu'],
['id' => 10883, 'district_id' => 1879, 'name' => 'Tikka'],

// Desa/Kelurahan di Kecamatan Mattiro Bulu
['id' => 10884, 'district_id' => 1880, 'name' => 'Mattiro Bulu'],
['id' => 10885, 'district_id' => 1880, 'name' => 'Pakkabaji'],
['id' => 10886, 'district_id' => 1880, 'name' => 'Lakawan'],

// Desa/Kelurahan di Kecamatan Panca Rijang
['id' => 10887, 'district_id' => 1881, 'name' => 'Panca Rijang'],
['id' => 10888, 'district_id' => 1881, 'name' => 'Saluponto'],
['id' => 10889, 'district_id' => 1881, 'name' => 'Pattallassang'],

// Desa/Kelurahan di Kecamatan Tellu Limpoe
['id' => 10890, 'district_id' => 1882, 'name' => 'Tellu Limpoe'],
['id' => 10891, 'district_id' => 1882, 'name' => 'Bontomatene'],
['id' => 10892, 'district_id' => 1882, 'name' => 'Pettuada'],

// Desa/Kelurahan di Kecamatan Watang Pulu
['id' => 10893, 'district_id' => 1883, 'name' => 'Watang Pulu'],
['id' => 10894, 'district_id' => 1883, 'name' => 'Pakkibone'],
['id' => 10895, 'district_id' => 1883, 'name' => 'Biring Romang'],

// Desa/Kelurahan di Kecamatan Baranti
['id' => 10896, 'district_id' => 1884, 'name' => 'Baranti'],
['id' => 10897, 'district_id' => 1884, 'name' => 'Tombolo'],
['id' => 10898, 'district_id' => 1884, 'name' => 'Cacokkong'],

// Desa/Kelurahan di Kecamatan Sinjai
['id' => 10899, 'district_id' => 1885, 'name' => 'Sinjai'],
['id' => 10900, 'district_id' => 1885, 'name' => 'Balangnipa'],
['id' => 10901, 'district_id' => 1885, 'name' => 'Biringere'],

// Desa/Kelurahan di Kecamatan Bulupoddo
['id' => 10902, 'district_id' => 1886, 'name' => 'Bulupoddo'],
['id' => 10903, 'district_id' => 1886, 'name' => 'Lamatti Riaja'],
['id' => 10904, 'district_id' => 1886, 'name' => 'Lamatti Riattang'],

// Desa/Kelurahan di Kecamatan Sinjai Selatan
['id' => 10905, 'district_id' => 1887, 'name' => 'Sinjai Selatan'],
['id' => 10906, 'district_id' => 1887, 'name' => 'Bonto'],
['id' => 10907, 'district_id' => 1887, 'name' => 'Talle'],

// Desa/Kelurahan di Kecamatan Sinjai Utara
['id' => 10908, 'district_id' => 1888, 'name' => 'Sinjai Utara'],
['id' => 10909, 'district_id' => 1888, 'name' => 'Biringere'],
['id' => 10910, 'district_id' => 1888, 'name' => 'Lamatti'],

// Desa/Kelurahan di Kecamatan Watan Soppeng
['id' => 10911, 'district_id' => 1889, 'name' => 'Watan Soppeng'],
['id' => 10912, 'district_id' => 1889, 'name' => 'Botto'],
['id' => 10913, 'district_id' => 1889, 'name' => 'Lalabata'],

// Desa/Kelurahan di Kecamatan Lalabata
['id' => 10914, 'district_id' => 1890, 'name' => 'Lalabata'],
['id' => 10915, 'district_id' => 1890, 'name' => 'Mattabulu'],
['id' => 10916, 'district_id' => 1890, 'name' => 'Tettikenrarae'],

// Desa/Kelurahan di Kecamatan Marioriawa
['id' => 10917, 'district_id' => 1891, 'name' => 'Marioriawa'],
['id' => 10918, 'district_id' => 1891, 'name' => 'Attang Salo'],
['id' => 10919, 'district_id' => 1891, 'name' => 'Goarie'],

// Desa/Kelurahan di Kecamatan Marioriwawo
['id' => 10920, 'district_id' => 1892, 'name' => 'Marioriwawo'],
['id' => 10921, 'district_id' => 1892, 'name' => 'Panincong'],
['id' => 10922, 'district_id' => 1892, 'name' => 'Abbanuang'],

// Desa/Kelurahan di Kecamatan Takalar
['id' => 10923, 'district_id' => 1893, 'name' => 'Takalar'],
['id' => 10924, 'district_id' => 1893, 'name' => 'Pattopakang'],
['id' => 10925, 'district_id' => 1893, 'name' => 'Bontomarannu'],

// Desa/Kelurahan di Kecamatan Galesong
['id' => 10926, 'district_id' => 1894, 'name' => 'Galesong'],
['id' => 10927, 'district_id' => 1894, 'name' => 'Bontokanang'],
['id' => 10928, 'district_id' => 1894, 'name' => 'Boddia'],

// Desa/Kelurahan di Kecamatan Mappakasunggu
['id' => 10929, 'district_id' => 1895, 'name' => 'Mappakasunggu'],
['id' => 10930, 'district_id' => 1895, 'name' => 'Sampulungan'],
['id' => 10931, 'district_id' => 1895, 'name' => 'Laikang'],

// Desa/Kelurahan di Kecamatan Sanrobone
['id' => 10932, 'district_id' => 1896, 'name' => 'Sanrobone'],
['id' => 10933, 'district_id' => 1896, 'name' => 'Cikoang'],
['id' => 10934, 'district_id' => 1896, 'name' => 'Kassiloe'],

// Desa/Kelurahan di Kecamatan Makale
['id' => 10935, 'district_id' => 1897, 'name' => 'Makale'],
['id' => 10936, 'district_id' => 1897, 'name' => 'Rantetayo'],
['id' => 10937, 'district_id' => 1897, 'name' => 'Buntu Datu'],

// Desa/Kelurahan di Kecamatan Saluputti
['id' => 10938, 'district_id' => 1898, 'name' => 'Saluputti'],
['id' => 10939, 'district_id' => 1898, 'name' => 'Tiku'],
['id' => 10940, 'district_id' => 1898, 'name' => 'Buntu Tanah'],

// Desa/Kelurahan di Kecamatan Bonggakaradeng
['id' => 10941, 'district_id' => 1899, 'name' => 'Bonggakaradeng'],
['id' => 10942, 'district_id' => 1899, 'name' => 'Buntu Buntu'],
['id' => 10943, 'district_id' => 1899, 'name' => 'Batuputih'],

// Desa/Kelurahan di Kecamatan Rantepao
['id' => 10944, 'district_id' => 1900, 'name' => 'Rantepao'],
['id' => 10945, 'district_id' => 1900, 'name' => 'Tondok Lembang'],
['id' => 10946, 'district_id' => 1900, 'name' => 'Kamang'],

// Desa/Kelurahan di Kecamatan Rindingallo
['id' => 10947, 'district_id' => 1901, 'name' => 'Rindingallo'],
['id' => 10948, 'district_id' => 1901, 'name' => 'Buntu Tabang'],
['id' => 10949, 'district_id' => 1901, 'name' => 'Sapan'],
['id' => 10950, 'district_id' => 1901, 'name' => 'Pangden'],

// Desa/Kelurahan di Kecamatan Sesean
['id' => 10951, 'district_id' => 1902, 'name' => 'Sesean'],
['id' => 10952, 'district_id' => 1902, 'name' => 'Suloara'],
['id' => 10953, 'district_id' => 1902, 'name' => 'Sangkaropi'],
['id' => 10954, 'district_id' => 1902, 'name' => 'Pangli'],

// Desa/Kelurahan di Kecamatan Nanggala
['id' => 10955, 'district_id' => 1903, 'name' => 'Nanggala'],
['id' => 10956, 'district_id' => 1903, 'name' => 'Rantebua'],
['id' => 10957, 'district_id' => 1903, 'name' => 'Rante Alang'],
['id' => 10958, 'district_id' => 1903, 'name' => 'Buntu Pepasan'],

// Desa/Kelurahan di Kecamatan Tondon
['id' => 10959, 'district_id' => 1904, 'name' => 'Tondon'],
['id' => 10960, 'district_id' => 1904, 'name' => 'Buntu Barana'],
['id' => 10961, 'district_id' => 1904, 'name' => 'Buntu La\'bo'],
['id' => 10962, 'district_id' => 1904, 'name' => 'Buntu Masakke'],

// Desa/Kelurahan di Kecamatan Sengkang
['id' => 10963, 'district_id' => 1905, 'name' => 'Sengkang'],
['id' => 10964, 'district_id' => 1905, 'name' => 'Salotungo'],
['id' => 10965, 'district_id' => 1905, 'name' => 'Maccile'],
['id' => 10966, 'district_id' => 1905, 'name' => 'Watang Sengkang'],

// Desa/Kelurahan di Kecamatan Tempe
['id' => 10967, 'district_id' => 1906, 'name' => 'Tempe'],
['id' => 10968, 'district_id' => 1906, 'name' => 'Atakkae'],
['id' => 10969, 'district_id' => 1906, 'name' => 'Salomenraleng'],
['id' => 10970, 'district_id' => 1906, 'name' => 'Padduppa'],

// Desa/Kelurahan di Kecamatan Belawa
['id' => 10971, 'district_id' => 1907, 'name' => 'Belawa'],
['id' => 10972, 'district_id' => 1907, 'name' => 'Lepangeng'],
['id' => 10973, 'district_id' => 1907, 'name' => 'Lalliseng'],
['id' => 10974, 'district_id' => 1907, 'name' => 'Lowa'],

// Desa/Kelurahan di Kecamatan Maniang Pajo
['id' => 10975, 'district_id' => 1908, 'name' => 'Maniang Pajo'],
['id' => 10976, 'district_id' => 1908, 'name' => 'Anabanua'],
['id' => 10977, 'district_id' => 1908, 'name' => 'Lowa'],
['id' => 10978, 'district_id' => 1908, 'name' => 'Patila'],

// Desa/Kelurahan di Kecamatan Bontoala
['id' => 10979, 'district_id' => 1909, 'name' => 'Bontoala'],
['id' => 10980, 'district_id' => 1909, 'name' => 'Baraya'],
['id' => 10981, 'district_id' => 1909, 'name' => 'Bontoala Tua'],
['id' => 10982, 'district_id' => 1909, 'name' => 'Gaddong'],

// Desa/Kelurahan di Kecamatan Makassar
['id' => 10983, 'district_id' => 1910, 'name' => 'Melayu'],
['id' => 10984, 'district_id' => 1910, 'name' => 'Bulogading'],
['id' => 10985, 'district_id' => 1910, 'name' => 'Ende'],
['id' => 10986, 'district_id' => 1910, 'name' => 'Buloa'],

// Desa/Kelurahan di Kecamatan Mariso
['id' => 10987, 'district_id' => 1911, 'name' => 'Mariso'],
['id' => 10988, 'district_id' => 1911, 'name' => 'Lette'],
['id' => 10989, 'district_id' => 1911, 'name' => 'Kampung Buyang'],
['id' => 10990, 'district_id' => 1911, 'name' => 'Tamarunang'],

// Desa/Kelurahan di Kecamatan Mamajang
['id' => 10991, 'district_id' => 1912, 'name' => 'Mamajang Luar'],
['id' => 10992, 'district_id' => 1912, 'name' => 'Mamajang Dalam'],
['id' => 10993, 'district_id' => 1912, 'name' => 'Karang Anyar'],
['id' => 10994, 'district_id' => 1912, 'name' => 'Parang'],

// Desa/Kelurahan di Kecamatan Tamalate
['id' => 10995, 'district_id' => 1913, 'name' => 'Tanjung Merdeka'],
['id' => 10996, 'district_id' => 1913, 'name' => 'Mannuruki'],
['id' => 10997, 'district_id' => 1913, 'name' => 'Pa’baeng-baeng'],
['id' => 10998, 'district_id' => 1913, 'name' => 'Parang Tambung'],

// Desa/Kelurahan di Kecamatan Rappocini
['id' => 10999, 'district_id' => 1914, 'name' => 'Rappocini'],
['id' => 11000, 'district_id' => 1914, 'name' => 'Minasa Upa'],
['id' => 11001, 'district_id' => 1914, 'name' => 'Kassi-Kassi'],
['id' => 11002, 'district_id' => 1914, 'name' => 'Gunung Sari'],

// Desa/Kelurahan di Kecamatan Ujung Pandang
['id' => 11003, 'district_id' => 1915, 'name' => 'Maloku'],
['id' => 11004, 'district_id' => 1915, 'name' => 'Losari'],
['id' => 11005, 'district_id' => 1915, 'name' => 'Pisang Selatan'],
['id' => 11006, 'district_id' => 1915, 'name' => 'Bulan'],

// Desa/Kelurahan di Kecamatan Wajo
['id' => 11007, 'district_id' => 1916, 'name' => 'Wajo'],
['id' => 11008, 'district_id' => 1916, 'name' => 'Pattingalloang'],
['id' => 11009, 'district_id' => 1916, 'name' => 'Ende'],
['id' => 11010, 'district_id' => 1916, 'name' => 'Pattunuang'],

// Desa/Kelurahan di Kecamatan Biringkanaya
['id' => 11011, 'district_id' => 1917, 'name' => 'Paccerakkang'],
['id' => 11012, 'district_id' => 1917, 'name' => 'Daya'],
['id' => 11013, 'district_id' => 1917, 'name' => 'Sudiang'],
['id' => 11014, 'district_id' => 1917, 'name' => 'Berua'],

// Desa/Kelurahan di Kecamatan Panakkukang
['id' => 11015, 'district_id' => 1918, 'name' => 'Karampuang'],
['id' => 11016, 'district_id' => 1918, 'name' => 'Tamamaung'],
['id' => 11017, 'district_id' => 1918, 'name' => 'Paropo'],
['id' => 11018, 'district_id' => 1918, 'name' => 'Masale'],

// Desa/Kelurahan di Kecamatan Tallo
['id' => 11019, 'district_id' => 1919, 'name' => 'Tallo'],
['id' => 11020, 'district_id' => 1919, 'name' => 'Rappojawa'],
['id' => 11021, 'district_id' => 1919, 'name' => 'Kalukuang'],
['id' => 11022, 'district_id' => 1919, 'name' => 'Ujung Tanah'],

// Desa/Kelurahan di Kecamatan Manggala
['id' => 11023, 'district_id' => 1920, 'name' => 'Antang'],
['id' => 11024, 'district_id' => 1920, 'name' => 'Batua'],
['id' => 11025, 'district_id' => 1920, 'name' => 'Borong'],
['id' => 11026, 'district_id' => 1920, 'name' => 'Bangkala'],

// Desa/Kelurahan di Kecamatan Tamalanrea
['id' => 11027, 'district_id' => 1921, 'name' => 'Tamalanrea'],
['id' => 11028, 'district_id' => 1921, 'name' => 'Bira'],
['id' => 11029, 'district_id' => 1921, 'name' => 'Kapasa'],
['id' => 11030, 'district_id' => 1921, 'name' => 'Parang Loe'],

// Desa/Kelurahan di Kecamatan Wara
['id' => 11031, 'district_id' => 1922, 'name' => 'Batu Pasi'],
['id' => 11032, 'district_id' => 1922, 'name' => 'Cappa Galung'],
['id' => 11033, 'district_id' => 1922, 'name' => 'Pongtiku'],
['id' => 11034, 'district_id' => 1922, 'name' => 'Batu Walenrang'],

// Desa/Kelurahan di Kecamatan Wara Timur
['id' => 11035, 'district_id' => 1923, 'name' => 'Tomarundung'],
['id' => 11036, 'district_id' => 1923, 'name' => 'Mawa'],
['id' => 11037, 'district_id' => 1923, 'name' => 'Mungkajang'],
['id' => 11038, 'district_id' => 1923, 'name' => 'Penggoli'],

// Desa/Kelurahan di Kecamatan Wara Selatan
['id' => 11039, 'district_id' => 1924, 'name' => 'Buntu Datu'],
['id' => 11040, 'district_id' => 1924, 'name' => 'Latuppa'],
['id' => 11041, 'district_id' => 1924, 'name' => 'Salubulo'],
['id' => 11042, 'district_id' => 1924, 'name' => 'Buntu Kunyi'],

// Desa/Kelurahan di Kecamatan Wara Barat
['id' => 11043, 'district_id' => 1925, 'name' => 'Jaya'],
['id' => 11044, 'district_id' => 1925, 'name' => 'Pontap'],
['id' => 11045, 'district_id' => 1925, 'name' => 'Karetan'],
['id' => 11046, 'district_id' => 1925, 'name' => 'Padang Lambe'],

// Desa/Kelurahan di Kecamatan Wara Utara
['id' => 11047, 'district_id' => 1926, 'name' => 'Salobulo'],
['id' => 11048, 'district_id' => 1926, 'name' => 'Battang'],
['id' => 11049, 'district_id' => 1926, 'name' => 'Battang Barat'],
['id' => 11050, 'district_id' => 1926, 'name' => 'Buntu Barana'],

// Desa/Kelurahan di Kecamatan Sendana
['id' => 11051, 'district_id' => 1927, 'name' => 'Sendana'],
['id' => 11052, 'district_id' => 1927, 'name' => 'Salubattang'],
['id' => 11053, 'district_id' => 1927, 'name' => 'Salulino'],
['id' => 11054, 'district_id' => 1927, 'name' => 'Bau'],

// Desa/Kelurahan di Kecamatan Bara
['id' => 11055, 'district_id' => 1928, 'name' => 'Bara'],
['id' => 11056, 'district_id' => 1928, 'name' => 'Buntu Barana'],
['id' => 11057, 'district_id' => 1928, 'name' => 'Rante Balla'],
['id' => 11058, 'district_id' => 1928, 'name' => 'Marobo'],

// Desa/Kelurahan di Kecamatan Bacukiki
['id' => 11059, 'district_id' => 1929, 'name' => 'Watang Bacukiki'],
['id' => 11060, 'district_id' => 1929, 'name' => 'Lumpue'],
['id' => 11061, 'district_id' => 1929, 'name' => 'Lumpangan'],
['id' => 11062, 'district_id' => 1929, 'name' => 'Sumpang Minangae'],

// Desa/Kelurahan di Kecamatan Bacukiki Barat
['id' => 11063, 'district_id' => 1930, 'name' => 'Galung Maloang'],
['id' => 11064, 'district_id' => 1930, 'name' => 'Watang Suppa'],
['id' => 11065, 'district_id' => 1930, 'name' => 'Ujung Loe'],
['id' => 11066, 'district_id' => 1930, 'name' => 'Tellumpanua'],

// Desa/Kelurahan di Kecamatan Soreang
['id' => 11067, 'district_id' => 1931, 'name' => 'Soreang'],
['id' => 11068, 'district_id' => 1931, 'name' => 'Lakessi'],
['id' => 11069, 'district_id' => 1931, 'name' => 'Bukit Harapan'],
['id' => 11070, 'district_id' => 1931, 'name' => 'Watang Soreang'],

// Desa/Kelurahan di Kecamatan Ujung
['id' => 11071, 'district_id' => 1932, 'name' => 'Ujung'],
['id' => 11072, 'district_id' => 1932, 'name' => 'Lappa'],
['id' => 11073, 'district_id' => 1932, 'name' => 'Macege'],
['id' => 11074, 'district_id' => 1932, 'name' => 'Ujung Lare'],

// Desa/Kelurahan di Kecamatan Rumbia
['id' => 11075, 'district_id' => 1933, 'name' => 'Rumbia'],
['id' => 11076, 'district_id' => 1933, 'name' => 'Karya Baru'],
['id' => 11077, 'district_id' => 1933, 'name' => 'Lantari'],
['id' => 11078, 'district_id' => 1933, 'name' => 'Mopute'],

// Desa/Kelurahan di Kecamatan Poleang
['id' => 11079, 'district_id' => 1934, 'name' => 'Lantari Jaya'],
['id' => 11080, 'district_id' => 1934, 'name' => 'Gundu-Gundu'],
['id' => 11081, 'district_id' => 1934, 'name' => 'Watumeeto'],
['id' => 11082, 'district_id' => 1934, 'name' => 'Bubu'],

// Desa/Kelurahan di Kecamatan Poleang Barat
['id' => 11083, 'district_id' => 1935, 'name' => 'Balo'],
['id' => 11084, 'district_id' => 1935, 'name' => 'Kondowa'],
['id' => 11085, 'district_id' => 1935, 'name' => 'Lambale'],
['id' => 11086, 'district_id' => 1935, 'name' => 'Mapila'],

// Desa/Kelurahan di Kecamatan Poleang Timur
['id' => 11087, 'district_id' => 1936, 'name' => 'Tanah Poleang'],
['id' => 11088, 'district_id' => 1936, 'name' => 'Tontonunu'],
['id' => 11089, 'district_id' => 1936, 'name' => 'Tomba'],
['id' => 11090, 'district_id' => 1936, 'name' => 'Langkowala'],

// Desa/Kelurahan di Kecamatan Poleang Utara
['id' => 11091, 'district_id' => 1937, 'name' => 'Rano Sangia'],
['id' => 11092, 'district_id' => 1937, 'name' => 'Masaloka'],
['id' => 11093, 'district_id' => 1937, 'name' => 'Ambapa'],
['id' => 11094, 'district_id' => 1937, 'name' => 'Dampala Jaya'],

// Desa/Kelurahan di Kecamatan Poleang Selatan
['id' => 11095, 'district_id' => 1938, 'name' => 'Kasipute'],
['id' => 11096, 'district_id' => 1938, 'name' => 'Lamoare'],
['id' => 11097, 'district_id' => 1938, 'name' => 'Mopaano'],
['id' => 11098, 'district_id' => 1938, 'name' => 'Tangkeno'],

// Desa/Kelurahan di Kecamatan Kabaena
['id' => 11099, 'district_id' => 1939, 'name' => 'Teomokole'],
['id' => 11100, 'district_id' => 1939, 'name' => 'Puuwatu'],
['id' => 11101, 'district_id' => 1939, 'name' => 'Baliara'],
['id' => 11102, 'district_id' => 1939, 'name' => 'Balo'],

// Desa/Kelurahan di Kecamatan Kabaena Barat
['id' => 11103, 'district_id' => 1940, 'name' => 'Wumbubangka'],
['id' => 11104, 'district_id' => 1940, 'name' => 'Tangkeno'],
['id' => 11105, 'district_id' => 1940, 'name' => 'Lengora'],
['id' => 11106, 'district_id' => 1940, 'name' => 'Bungin Permai'],

// Desa/Kelurahan di Kecamatan Kabaena Timur
['id' => 11107, 'district_id' => 1941, 'name' => 'Eemokolo'],
['id' => 11108, 'district_id' => 1941, 'name' => 'Lambale'],
['id' => 11109, 'district_id' => 1941, 'name' => 'Kombikuno'],
['id' => 11110, 'district_id' => 1941, 'name' => 'Toli-Toli'],

// Desa/Kelurahan di Kecamatan Kabaena Utara
['id' => 11111, 'district_id' => 1942, 'name' => 'Toburi'],
['id' => 11112, 'district_id' => 1942, 'name' => 'Ulungkura'],
['id' => 11113, 'district_id' => 1942, 'name' => 'Lantowua'],
['id' => 11114, 'district_id' => 1942, 'name' => 'Koeno'],

// Desa/Kelurahan di Kecamatan Kabaena Selatan
['id' => 11115, 'district_id' => 1943, 'name' => 'Dongkala'],
['id' => 11116, 'district_id' => 1943, 'name' => 'Epe'],
['id' => 11117, 'district_id' => 1943, 'name' => 'Lentua'],
['id' => 11118, 'district_id' => 1943, 'name' => 'Mata Rumbia'],

// Desa/Kelurahan di Kecamatan Mata Oleo
['id' => 11119, 'district_id' => 1944, 'name' => 'Langkowala'],
['id' => 11120, 'district_id' => 1944, 'name' => 'Tanggeau'],
['id' => 11121, 'district_id' => 1944, 'name' => 'Toari'],
['id' => 11122, 'district_id' => 1944, 'name' => 'Masaloka Selatan'],

// Desa/Kelurahan di Kecamatan Rarowatu
['id' => 11123, 'district_id' => 1945, 'name' => 'Rarowatu'],
['id' => 11124, 'district_id' => 1945, 'name' => 'Mokowu'],
['id' => 11125, 'district_id' => 1945, 'name' => 'Tapuwatu'],
['id' => 11126, 'district_id' => 1945, 'name' => 'Talabente'],

// Desa/Kelurahan di Kecamatan Rarowatu Utara
['id' => 11127, 'district_id' => 1946, 'name' => 'Rarowatu Utara'],
['id' => 11128, 'district_id' => 1946, 'name' => 'Mokowu'],
['id' => 11129, 'district_id' => 1946, 'name' => 'Lupia'],
['id' => 11130, 'district_id' => 1946, 'name' => 'Simbu'],

// Desa/Kelurahan di Kecamatan Lantari Jaya
['id' => 11131, 'district_id' => 1947, 'name' => 'Lantari Jaya'],
['id' => 11132, 'district_id' => 1947, 'name' => 'Lantari'],
['id' => 11133, 'district_id' => 1947, 'name' => 'Waisango'],

// Desa/Kelurahan di Kecamatan Mata Usu
['id' => 11134, 'district_id' => 1948, 'name' => 'Mata Usu'],
['id' => 11135, 'district_id' => 1948, 'name' => 'Panguna'],

// Desa/Kelurahan di Kecamatan Pasarwajo
['id' => 11136, 'district_id' => 1949, 'name' => 'Pasarwajo'],
['id' => 11137, 'district_id' => 1949, 'name' => 'Panta'],

// Desa/Kelurahan di Kecamatan Wolowa
['id' => 11138, 'district_id' => 1950, 'name' => 'Wolowa'],
['id' => 11139, 'district_id' => 1950, 'name' => 'Lobu'],

// Desa/Kelurahan di Kecamatan Wabula
['id' => 11140, 'district_id' => 1951, 'name' => 'Wabula'],
['id' => 11141, 'district_id' => 1951, 'name' => 'Buntu'],

// Desa/Kelurahan di Kecamatan Kapontori
['id' => 11142, 'district_id' => 1952, 'name' => 'Kapontori'],
['id' => 11143, 'district_id' => 1952, 'name' => 'Meka'],

// Desa/Kelurahan di Kecamatan Unaaha
['id' => 11144, 'district_id' => 1953, 'name' => 'Unaaha'],
['id' => 11145, 'district_id' => 1953, 'name' => 'Bombo'],

// Desa/Kelurahan di Kecamatan Wawotobi
['id' => 11146, 'district_id' => 1954, 'name' => 'Wawotobi'],
['id' => 11147, 'district_id' => 1954, 'name' => 'Lorangga'],

// Desa/Kelurahan di Kecamatan Pondidaha
['id' => 11148, 'district_id' => 1955, 'name' => 'Pondidaha'],
['id' => 11149, 'district_id' => 1955, 'name' => 'Ambelau'],

// Desa/Kelurahan di Kecamatan Wonggeduku
['id' => 11150, 'district_id' => 1956, 'name' => 'Wonggeduku'],
['id' => 11151, 'district_id' => 1956, 'name' => 'Bengkulu'],

// Desa/Kelurahan di Kecamatan Abuki
['id' => 11152, 'district_id' => 1957, 'name' => 'Abuki'],
['id' => 11153, 'district_id' => 1957, 'name' => 'Tefari'],

// Desa/Kelurahan di Kecamatan Lambuya
['id' => 11154, 'district_id' => 1958, 'name' => 'Lambuya'],
['id' => 11155, 'district_id' => 1958, 'name' => 'Pusat'],

// Desa/Kelurahan di Kecamatan Uepai
['id' => 11156, 'district_id' => 1959, 'name' => 'Uepai'],
['id' => 11157, 'district_id' => 1959, 'name' => 'Mata'],

// Desa/Kelurahan di Kecamatan Puriala
['id' => 11158, 'district_id' => 1960, 'name' => 'Puriala'],
['id' => 11159, 'district_id' => 1960, 'name' => 'Kodinga'],

// Desa/Kelurahan di Kecamatan Onembute
['id' => 11160, 'district_id' => 1961, 'name' => 'Onembute'],
['id' => 11161, 'district_id' => 1961, 'name' => 'Paku'],

// Desa/Kelurahan di Kecamatan Wonggeduku Barat
['id' => 11162, 'district_id' => 1963, 'name' => 'Wonggeduku Barat'],
['id' => 11163, 'district_id' => 1963, 'name' => 'Sampara'],

// Desa/Kelurahan di Kecamatan Besulutu
['id' => 11164, 'district_id' => 1964, 'name' => 'Besulutu'],
['id' => 11165, 'district_id' => 1964, 'name' => 'Kambaragundi'],

// Desa/Kelurahan di Kecamatan Bondoala
['id' => 11166, 'district_id' => 1965, 'name' => 'Bondoala'],
['id' => 11167, 'district_id' => 1965, 'name' => 'Nanggala'],

// Desa/Kelurahan di Kecamatan Kapoiala
['id' => 11168, 'district_id' => 1966, 'name' => 'Kapoiala'],
['id' => 11169, 'district_id' => 1966, 'name' => 'Kondowa'],

// Desa/Kelurahan di Kecamatan Lalonggasumeeto
['id' => 11170, 'district_id' => 1967, 'name' => 'Lalonggasumeeto'],
['id' => 11171, 'district_id' => 1967, 'name' => 'Maidaho'],

// Desa/Kelurahan di Kecamatan Sampara
['id' => 11172, 'district_id' => 1968, 'name' => 'Sampara'],
['id' => 11173, 'district_id' => 1968, 'name' => 'Tondowatu'],

// Desa/Kelurahan di Kecamatan Soropia
['id' => 11174, 'district_id' => 1969, 'name' => 'Soropia'],
['id' => 11175, 'district_id' => 1969, 'name' => 'Punu'],

// Desa/Kelurahan di Kecamatan Latoma
['id' => 11176, 'district_id' => 1970, 'name' => 'Latoma'],
['id' => 11177, 'district_id' => 1970, 'name' => 'Toge'],

// Desa/Kelurahan di Kecamatan Tongauna
['id' => 11178, 'district_id' => 1971, 'name' => 'Tongauna'],
['id' => 11179, 'district_id' => 1971, 'name' => 'Mimbu'],

// Desa/Kelurahan di Kecamatan Tongauna Utara
['id' => 11180, 'district_id' => 1972, 'name' => 'Tongauna Utara'],
['id' => 11181, 'district_id' => 1972, 'name' => 'Tondowatu'],

// Desa/Kelurahan di Kecamatan Asinua
['id' => 11182, 'district_id' => 1973, 'name' => 'Asinua'],
['id' => 11183, 'district_id' => 1973, 'name' => 'Sowa'],

// Desa/Kelurahan di Kecamatan Padangguni
['id' => 11184, 'district_id' => 1974, 'name' => 'Padangguni'],
['id' => 11185, 'district_id' => 1974, 'name' => 'Bola'],

// Desa/Kelurahan di Kecamatan Tirawuta
['id' => 11186, 'district_id' => 1975, 'name' => 'Tirawuta'],
['id' => 11187, 'district_id' => 1975, 'name' => 'Matuli'],

// Desa/Kelurahan di Kecamatan Raha
['id' => 11188, 'district_id' => 1976, 'name' => 'Raha'],
['id' => 11189, 'district_id' => 1976, 'name' => 'Kepungkur'],

// Desa/Kelurahan di Kecamatan Katobu
['id' => 11190, 'district_id' => 1977, 'name' => 'Katobu'],
['id' => 11191, 'district_id' => 1977, 'name' => 'Bone'],

// Desa/Kelurahan di Kecamatan Duruka
['id' => 11192, 'district_id' => 1978, 'name' => 'Duruka'],
['id' => 11193, 'district_id' => 1978, 'name' => 'Tondo'],

// Desa/Kelurahan di Kecamatan Lohia
['id' => 11194, 'district_id' => 1979, 'name' => 'Lohia'],
['id' => 11195, 'district_id' => 1979, 'name' => 'Matalibo'],

// Desa/Kelurahan di Kecamatan Watopute
['id' => 11196, 'district_id' => 1980, 'name' => 'Watopute'],
['id' => 11197, 'district_id' => 1980, 'name' => 'Bola'],

// Desa/Kelurahan di Kecamatan Kontunaga
['id' => 11198, 'district_id' => 1981, 'name' => 'Kontunaga'],
['id' => 11199, 'district_id' => 1981, 'name' => 'Batuli'],

// Desa/Kelurahan di Kecamatan Kabawo
['id' => 11200, 'district_id' => 1982, 'name' => 'Kabawo'],
['id' => 11201, 'district_id' => 1982, 'name' => 'Muna'],

// Desa/Kelurahan di Kecamatan Parigi
['id' => 11202, 'district_id' => 1983, 'name' => 'Parigi'],
['id' => 11203, 'district_id' => 1983, 'name' => 'Tode'],

// Desa/Kelurahan di Kecamatan Bone
['id' => 11204, 'district_id' => 1984, 'name' => 'Bone'],
['id' => 11205, 'district_id' => 1984, 'name' => 'Sokoi'],

// Desa/Kelurahan di Kecamatan Marobo
['id' => 11206, 'district_id' => 1985, 'name' => 'Marobo'],
['id' => 11207, 'district_id' => 1985, 'name' => 'Lobu'],

// Desa/Kelurahan di Kecamatan Kabangka
['id' => 11208, 'district_id' => 1986, 'name' => 'Kabangka'],
['id' => 11209, 'district_id' => 1986, 'name' => 'Batu Sila'],

// Desa/Kelurahan di Kecamatan Kontu Kowuna
['id' => 11210, 'district_id' => 1987, 'name' => 'Kontu Kowuna'],
['id' => 11211, 'district_id' => 1987, 'name' => 'Tondong'],

// Desa/Kelurahan di Kecamatan Maligano
['id' => 11212, 'district_id' => 1988, 'name' => 'Maligano'],
['id' => 11213, 'district_id' => 1988, 'name' => 'Tuna'],

// Desa/Kelurahan di Kecamatan Batukara
['id' => 11214, 'district_id' => 1989, 'name' => 'Batukara'],
['id' => 11215, 'district_id' => 1989, 'name' => 'Kondowa'],

// Desa/Kelurahan di Kecamatan Wangi-Wangi
['id' => 11216, 'district_id' => 1990, 'name' => 'Wangi-Wangi'],
['id' => 11217, 'district_id' => 1990, 'name' => 'Tati'],

// Desa/Kelurahan di Kecamatan Wangi-Wangi Selatan
['id' => 11218, 'district_id' => 1991, 'name' => 'Wangi-Wangi Selatan'],
['id' => 11219, 'district_id' => 1991, 'name' => 'Tutupulu'],

// Desa/Kelurahan di Kecamatan Kaledupa
['id' => 11220, 'district_id' => 1992, 'name' => 'Kaledupa'],
['id' => 11221, 'district_id' => 1992, 'name' => 'Kepungkur'],

// Desa/Kelurahan di Kecamatan Kaledupa Selatan
['id' => 11222, 'district_id' => 1993, 'name' => 'Kaledupa Selatan'],
['id' => 11223, 'district_id' => 1993, 'name' => 'Baho'],

// Desa/Kelurahan di Kecamatan Tomia
['id' => 11224, 'district_id' => 1994, 'name' => 'Tomia'],
['id' => 11225, 'district_id' => 1994, 'name' => 'Rongo'],

// Desa/Kelurahan di Kecamatan Tomia Timur
['id' => 11226, 'district_id' => 1995, 'name' => 'Tomia Timur'],
['id' => 11227, 'district_id' => 1995, 'name' => 'Pao'],

// Desa/Kelurahan di Kecamatan Binongko
['id' => 11228, 'district_id' => 1996, 'name' => 'Binongko'],
['id' => 11229, 'district_id' => 1996, 'name' => 'Sidoarjo'],

// Desa/Kelurahan di Kecamatan Togo Binongko
['id' => 11230, 'district_id' => 1997, 'name' => 'Togo Binongko'],
['id' => 11231, 'district_id' => 1997, 'name' => 'Jati'],

// Desa/Kelurahan di Kecamatan Betoambari
['id' => 11232, 'district_id' => 1998, 'name' => 'Betoambari'],
['id' => 11233, 'district_id' => 1998, 'name' => 'Lumbung'],

// Desa/Kelurahan di Kecamatan Murhum
['id' => 11234, 'district_id' => 1999, 'name' => 'Murhum'],
['id' => 11235, 'district_id' => 1999, 'name' => 'Indah'],

// Desa/Kelurahan di Kecamatan Batupoaro
['id' => 11236, 'district_id' => 2000, 'name' => 'Batupoaro'],
['id' => 11237, 'district_id' => 2000, 'name' => 'Tumbulawa'],

// Desa/Kelurahan di Kecamatan Wolio
['id' => 11238, 'district_id' => 2001, 'name' => 'Wolio'],
['id' => 11239, 'district_id' => 2001, 'name' => 'Bontoduri'],

// Desa/Kelurahan di Kecamatan Kokalukuna
['id' => 11240, 'district_id' => 2002, 'name' => 'Kokalukuna'],
['id' => 11241, 'district_id' => 2002, 'name' => 'Gorontalo'],

// Desa/Kelurahan di Kecamatan Sorawolio
['id' => 11242, 'district_id' => 2003, 'name' => 'Sorawolio'],
['id' => 11243, 'district_id' => 2003, 'name' => 'Tompo'],

// Desa/Kelurahan di Kecamatan Bungi
['id' => 11244, 'district_id' => 2004, 'name' => 'Bungi'],
['id' => 11245, 'district_id' => 2004, 'name' => 'Ujung'],

// Desa/Kelurahan di Kecamatan Lea-Lea
['id' => 11246, 'district_id' => 2005, 'name' => 'Lea-Lea'],
['id' => 11247, 'district_id' => 2005, 'name' => 'Sinau'],

// Desa/Kelurahan di Kecamatan Mandonga
['id' => 11248, 'district_id' => 2006, 'name' => 'Mandonga'],
['id' => 11249, 'district_id' => 2006, 'name' => 'Parigi'],

// Desa/Kelurahan di Kecamatan Kendari
['id' => 11250, 'district_id' => 2007, 'name' => 'Kendari'],
['id' => 11251, 'district_id' => 2007, 'name' => 'Kadia'],

// Desa/Kelurahan di Kecamatan Kendari Barat
['id' => 11252, 'district_id' => 2008, 'name' => 'Kendari Barat'],
['id' => 11253, 'district_id' => 2008, 'name' => 'Lapulu'],

// Desa/Kelurahan di Kecamatan Baruga
['id' => 11254, 'district_id' => 2009, 'name' => 'Baruga'],
['id' => 11255, 'district_id' => 2009, 'name' => 'Benua'],

// Desa/Kelurahan di Kecamatan Puuwatu
['id' => 11256, 'district_id' => 2010, 'name' => 'Puuwatu'],
['id' => 11257, 'district_id' => 2010, 'name' => 'Sempini'],

// Desa/Kelurahan di Kecamatan Kadia
['id' => 11258, 'district_id' => 2011, 'name' => 'Kadia'],
['id' => 11259, 'district_id' => 2011, 'name' => 'Wua-Wua'],

// Desa/Kelurahan di Kecamatan Wua-Wua
['id' => 11260, 'district_id' => 2012, 'name' => 'Poasia'],
['id' => 11261, 'district_id' => 2012, 'name' => 'Abeli'],

// Desa/Kelurahan di Kecamatan Poasia
['id' => 11262, 'district_id' => 2013, 'name' => 'Poasia'],
['id' => 11263, 'district_id' => 2013, 'name' => 'Sena'],

// Desa/Kelurahan di Kecamatan Abeli
['id' => 11264, 'district_id' => 2014, 'name' => 'Abeli'],
['id' => 11265, 'district_id' => 2014, 'name' => 'Batu'],

// Desa/Kelurahan di Kecamatan Tilamuta
['id' => 11266, 'district_id' => 2015, 'name' => 'Tilamuta'],
['id' => 11267, 'district_id' => 2015, 'name' => 'Mananggu'],

// Desa/Kelurahan di Kecamatan Mananggu
['id' => 11268, 'district_id' => 2016, 'name' => 'Mananggu'],
['id' => 11269, 'district_id' => 2016, 'name' => 'Paguyaman'],

// Desa/Kelurahan di Kecamatan Paguyaman
['id' => 11270, 'district_id' => 2017, 'name' => 'Paguyaman'],
['id' => 11271, 'district_id' => 2017, 'name' => 'Pantai'],

// Desa/Kelurahan di Kecamatan Paguyaman Pantai
['id' => 11272, 'district_id' => 2018, 'name' => 'Paguyaman Pantai'],
['id' => 11273, 'district_id' => 2018, 'name' => 'Sungai'],

// Desa/Kelurahan di Kecamatan Dulupi
['id' => 11274, 'district_id' => 2019, 'name' => 'Dulupi'],
['id' => 11275, 'district_id' => 2019, 'name' => 'Taman'],

// Desa/Kelurahan di Kecamatan Wonosari
['id' => 11276, 'district_id' => 2020, 'name' => 'Wonosari'],
['id' => 11277, 'district_id' => 2020, 'name' => 'Patu'],

// Desa/Kelurahan di Kecamatan Limboto
['id' => 11278, 'district_id' => 2021, 'name' => 'Limboto'],
['id' => 11279, 'district_id' => 2021, 'name' => 'Baruga'],

// Desa/Kelurahan di Kecamatan Telaga
['id' => 11280, 'district_id' => 2022, 'name' => 'Telaga'],
['id' => 11281, 'district_id' => 2022, 'name' => 'Batu'],

// Desa/Kelurahan di Kecamatan Telaga Biru
['id' => 11282, 'district_id' => 2023, 'name' => 'Telaga Biru'],
['id' => 11283, 'district_id' => 2023, 'name' => 'Birurang'],

// Desa/Kelurahan di Kecamatan Telaga Jaya
['id' => 11284, 'district_id' => 2024, 'name' => 'Telaga Jaya'],
['id' => 11285, 'district_id' => 2024, 'name' => 'Gorontalo'],

// Desa/Kelurahan di Kecamatan Batudaa
['id' => 11286, 'district_id' => 2025, 'name' => 'Batudaa'],
['id' => 11287, 'district_id' => 2025, 'name' => 'Susu'],

// Desa/Kelurahan di Kecamatan Batudaa Pantai
['id' => 11288, 'district_id' => 2026, 'name' => 'Batudaa Pantai'],
['id' => 11289, 'district_id' => 2026, 'name' => 'Tumbulawa'],

// Desa/Kelurahan di Kecamatan Bongomeme
['id' => 11290, 'district_id' => 2027, 'name' => 'Bongomeme'],
['id' => 11291, 'district_id' => 2027, 'name' => 'Talumolo'],

// Desa/Kelurahan di Kecamatan Dungaliyo
['id' => 11292, 'district_id' => 2028, 'name' => 'Dungaliyo'],
['id' => 11293, 'district_id' => 2028, 'name' => 'Tonga'],

// Desa/Kelurahan di Kecamatan Pulubala
['id' => 11294, 'district_id' => 2029, 'name' => 'Pulubala'],
['id' => 11295, 'district_id' => 2029, 'name' => 'Benelan'],

// Desa/Kelurahan di Kecamatan Boliyohuto
['id' => 11296, 'district_id' => 2030, 'name' => 'Boliyohuto'],
['id' => 11297, 'district_id' => 2030, 'name' => 'Sidoarjo'],

// Desa/Kelurahan di Kecamatan Mootilango
['id' => 11298, 'district_id' => 2031, 'name' => 'Mootilango'],
['id' => 11299, 'district_id' => 2031, 'name' => 'Indah'],

// Desa/Kelurahan di Kecamatan Tibawa
['id' => 11300, 'district_id' => 2032, 'name' => 'Tibawa'],
['id' => 11301, 'district_id' => 2032, 'name' => 'Salamanca'],

// Desa/Kelurahan di Kecamatan Tabongo
['id' => 11302, 'district_id' => 2033, 'name' => 'Tabongo'],
['id' => 11303, 'district_id' => 2033, 'name' => 'Benoa'],

// Desa/Kelurahan di Kecamatan Bilihude
['id' => 11304, 'district_id' => 2034, 'name' => 'Bilihude'],
['id' => 11305, 'district_id' => 2034, 'name' => 'Mombulo'],

// Desa/Kelurahan di Kecamatan Marisa
['id' => 11306, 'district_id' => 2035, 'name' => 'Marisa'],
['id' => 11307, 'district_id' => 2035, 'name' => 'Pino'],

// Desa/Kelurahan di Kecamatan Buntulia
['id' => 11308, 'district_id' => 2036, 'name' => 'Buntulia'],
['id' => 11309, 'district_id' => 2036, 'name' => 'Sowata'],

// Desa/Kelurahan di Kecamatan Duhiadaa
['id' => 11310, 'district_id' => 2037, 'name' => 'Duhiadaa'],
['id' => 11311, 'district_id' => 2037, 'name' => 'Anggolu'],

// Desa/Kelurahan di Kecamatan Patilanggio
['id' => 11312, 'district_id' => 2038, 'name' => 'Patilanggio'],
['id' => 11313, 'district_id' => 2038, 'name' => 'Sungailimau'],

// Desa/Kelurahan di Kecamatan Randangan
['id' => 11314, 'district_id' => 2039, 'name' => 'Randangan'],
['id' => 11315, 'district_id' => 2039, 'name' => 'Korontuo'],

// Desa/Kelurahan di Kecamatan Taluditi
['id' => 11316, 'district_id' => 2040, 'name' => 'Taluditi'],
['id' => 11317, 'district_id' => 2040, 'name' => 'Batu Jaya'],

// Desa/Kelurahan di Kecamatan Wanggarasi
['id' => 11318, 'district_id' => 2041, 'name' => 'Wanggarasi Selatan'],
['id' => 11319, 'district_id' => 2041, 'name' => 'Wanggarasi Utara'],

// Desa/Kelurahan di Kecamatan Lemito
['id' => 11320, 'district_id' => 2042, 'name' => 'Lemito Barat'],
['id' => 11321, 'district_id' => 2042, 'name' => 'Lemito Timur'],

// Desa/Kelurahan di Kecamatan Popayato
['id' => 11322, 'district_id' => 2043, 'name' => 'Popayato Induk'],
['id' => 11323, 'district_id' => 2043, 'name' => 'Popayato Selatan'],

// Desa/Kelurahan di Kecamatan Popayato Timur
['id' => 11324, 'district_id' => 2044, 'name' => 'Popayato Timur Tengah'],
['id' => 11325, 'district_id' => 2044, 'name' => 'Popayato Timur Utara'],

// Desa/Kelurahan di Kecamatan Popayato Barat
['id' => 11326, 'district_id' => 2045, 'name' => 'Popayato Barat Selatan'],
['id' => 11327, 'district_id' => 2045, 'name' => 'Popayato Barat Timur'],

// Desa/Kelurahan di Kecamatan Dumbo Raya
['id' => 11328, 'district_id' => 2046, 'name' => 'Dumbo Raya Induk'],
['id' => 11329, 'district_id' => 2046, 'name' => 'Dumbo Raya Barat'],

// Desa/Kelurahan di Kecamatan Hulonthalangi
['id' => 11330, 'district_id' => 2047, 'name' => 'Hulonthalangi Timur'],
['id' => 11331, 'district_id' => 2047, 'name' => 'Hulonthalangi Barat'],

// Desa/Kelurahan di Kecamatan Dungingi
['id' => 11332, 'district_id' => 2048, 'name' => 'Dungingi Utara'],
['id' => 11333, 'district_id' => 2048, 'name' => 'Dungingi Selatan'],

// Desa/Kelurahan di Kecamatan Kota Barat
['id' => 11334, 'district_id' => 2049, 'name' => 'Kota Barat Induk'],
['id' => 11335, 'district_id' => 2049, 'name' => 'Kota Barat Timur'],

// Desa/Kelurahan di Kecamatan Kota Selatan
['id' => 11336, 'district_id' => 2050, 'name' => 'Kota Selatan Utara'],
['id' => 11337, 'district_id' => 2050, 'name' => 'Kota Selatan Barat'],

// Desa/Kelurahan di Kecamatan Kota Tengah
['id' => 11338, 'district_id' => 2051, 'name' => 'Kota Tengah Selatan'],
['id' => 11339, 'district_id' => 2051, 'name' => 'Kota Tengah Utara'],

// Desa/Kelurahan di Kecamatan Kota Timur
['id' => 11340, 'district_id' => 2052, 'name' => 'Kota Timur Induk'],
['id' => 11341, 'district_id' => 2052, 'name' => 'Kota Timur Barat'],

// Desa/Kelurahan di Kecamatan Kota Utara
['id' => 11342, 'district_id' => 2053, 'name' => 'Kota Utara Selatan'],
['id' => 11343, 'district_id' => 2053, 'name' => 'Kota Utara Timur'],

// Desa/Kelurahan di Kecamatan Sipatana
['id' => 11344, 'district_id' => 2054, 'name' => 'Sipatana Barat'],
['id' => 11345, 'district_id' => 2054, 'name' => 'Sipatana Utara'],

// Desa/Kelurahan di Kecamatan Banggae
['id' => 11346, 'district_id' => 2055, 'name' => 'Banggae Selatan'],
['id' => 11347, 'district_id' => 2055, 'name' => 'Banggae Timur'],

// Desa/Kelurahan di Kecamatan Banggae Timur
['id' => 11348, 'district_id' => 2056, 'name' => 'Banggae Timur Barat'],
['id' => 11349, 'district_id' => 2056, 'name' => 'Banggae Timur Utara'],

// Desa/Kelurahan di Kecamatan Pamboang
['id' => 11350, 'district_id' => 2057, 'name' => 'Pamboang Selatan'],
['id' => 11351, 'district_id' => 2057, 'name' => 'Pamboang Timur'],

// Desa/Kelurahan di Kecamatan Sendana
['id' => 11352, 'district_id' => 2058, 'name' => 'Sendana Utara'],
['id' => 11353, 'district_id' => 2058, 'name' => 'Sendana Selatan'],

// Desa/Kelurahan di Kecamatan Tammerodo Sendana
['id' => 11354, 'district_id' => 2059, 'name' => 'Tammerodo Sendana Barat'],
['id' => 11355, 'district_id' => 2059, 'name' => 'Tammerodo Sendana Timur'],

// Desa/Kelurahan di Kecamatan Tubbi Taramanu
['id' => 11356, 'district_id' => 2060, 'name' => 'Tubbi Taramanu Selatan'],
['id' => 11357, 'district_id' => 2060, 'name' => 'Tubbi Taramanu Utara'],

// Desa/Kelurahan di Kecamatan Malunda
['id' => 11358, 'district_id' => 2061, 'name' => 'Malunda Barat'],
['id' => 11359, 'district_id' => 2061, 'name' => 'Malunda Selatan'],

// Desa/Kelurahan di Kecamatan Ulumanda
['id' => 11360, 'district_id' => 2062, 'name' => 'Ulumanda Timur'],
['id' => 11361, 'district_id' => 2062, 'name' => 'Ulumanda Utara'],

// Desa/Kelurahan di Kecamatan Mamasa
['id' => 11362, 'district_id' => 2063, 'name' => 'Mamasa Induk'],
['id' => 11363, 'district_id' => 2063, 'name' => 'Mamasa Barat'],

// Desa/Kelurahan di Kecamatan Tanduk Kalua
['id' => 11364, 'district_id' => 2064, 'name' => 'Tanduk Kalua Timur'],
['id' => 11365, 'district_id' => 2064, 'name' => 'Tanduk Kalua Utara'],

// Desa/Kelurahan di Kecamatan Balla
['id' => 11366, 'district_id' => 2065, 'name' => 'Balla Selatan'],
['id' => 11367, 'district_id' => 2065, 'name' => 'Balla Barat'],

// Desa/Kelurahan di Kecamatan Sesenapadang
['id' => 11368, 'district_id' => 2066, 'name' => 'Sesenapadang Utara'],
['id' => 11369, 'district_id' => 2066, 'name' => 'Sesenapadang Timur'],

// Desa/Kelurahan di Kecamatan Tabulahan
['id' => 11370, 'district_id' => 2067, 'name' => 'Tabulahan Selatan'],
['id' => 11371, 'district_id' => 2067, 'name' => 'Tabulahan Utara'],

// Desa/Kelurahan di Kecamatan Mambi
['id' => 11372, 'district_id' => 2068, 'name' => 'Mambi Barat'],
['id' => 11373, 'district_id' => 2068, 'name' => 'Mambi Selatan'],

// Desa/Kelurahan di Kecamatan Mamuju
['id' => 11374, 'district_id' => 2069, 'name' => 'Mamuju Selatan'],
['id' => 11375, 'district_id' => 2069, 'name' => 'Mamuju Utara'],

// Desa/Kelurahan di Kecamatan Kalukku
['id' => 11376, 'district_id' => 2070, 'name' => 'Kalukku Barat'],
['id' => 11377, 'district_id' => 2070, 'name' => 'Kalukku Timur'],

// Desa/Kelurahan di Kecamatan Papalang
['id' => 11378, 'district_id' => 2071, 'name' => 'Papalang Utara'],
['id' => 11379, 'district_id' => 2071, 'name' => 'Papalang Selatan'],

// Desa/Kelurahan di Kecamatan Sampaga
['id' => 11380, 'district_id' => 2072, 'name' => 'Sampaga Timur'],
['id' => 11381, 'district_id' => 2072, 'name' => 'Sampaga Barat'],

// Desa/Kelurahan di Kecamatan Tommo
['id' => 11382, 'district_id' => 2073, 'name' => 'Tommo Selatan'],
['id' => 11383, 'district_id' => 2073, 'name' => 'Tommo Utara'],

// Desa/Kelurahan di Kecamatan Tobadak
['id' => 11384, 'district_id' => 2074, 'name' => 'Tobadak Barat'],
['id' => 11385, 'district_id' => 2074, 'name' => 'Tobadak Timur'],

// Desa/Kelurahan di Kecamatan Topoyo
['id' => 11386, 'district_id' => 2075, 'name' => 'Topoyo Selatan'],
['id' => 11387, 'district_id' => 2075, 'name' => 'Topoyo Utara'],

// Desa/Kelurahan di Kecamatan Budong-Budong
['id' => 11388, 'district_id' => 2076, 'name' => 'Budong-Budong Selatan'],
['id' => 11389, 'district_id' => 2076, 'name' => 'Budong-Budong Timur'],

// Desa/Kelurahan di Kecamatan Karossa
['id' => 11390, 'district_id' => 2077, 'name' => 'Karossa Barat'],
['id' => 11391, 'district_id' => 2077, 'name' => 'Karossa Selatan'],

// Desa/Kelurahan di Kecamatan Pangale
['id' => 11392, 'district_id' => 2078, 'name' => 'Pangale Timur'],
['id' => 11393, 'district_id' => 2078, 'name' => 'Pangale Utara'],

// Desa/Kelurahan di Kecamatan Pasangkayu
['id' => 11394, 'district_id' => 2079, 'name' => 'Pasangkayu Barat'],
['id' => 11395, 'district_id' => 2079, 'name' => 'Pasangkayu Selatan'],

// Desa/Kelurahan di Kecamatan Baras
['id' => 11396, 'district_id' => 2080, 'name' => 'Baras Utara'],
['id' => 11397, 'district_id' => 2080, 'name' => 'Baras Selatan'],

// Desa/Kelurahan di Kecamatan Bambalamotu
['id' => 11398, 'district_id' => 2081, 'name' => 'Bambalamotu Timur'],
['id' => 11399, 'district_id' => 2081, 'name' => 'Bambalamotu Selatan'],

// Desa/Kelurahan di Kecamatan Bambaira
['id' => 11400, 'district_id' => 2082, 'name' => 'Bambaira Barat'],
['id' => 11401, 'district_id' => 2082, 'name' => 'Bambaira Selatan'],

// Desa/Kelurahan di Kecamatan Sarjo
['id' => 11402, 'district_id' => 2083, 'name' => 'Sarjo Timur'],
['id' => 11403, 'district_id' => 2083, 'name' => 'Sarjo Utara'],

// Desa/Kelurahan di Kecamatan Polewali
['id' => 11404, 'district_id' => 2084, 'name' => 'Polewali Selatan'],
['id' => 11405, 'district_id' => 2084, 'name' => 'Polewali Utara'],

// Desa/Kelurahan di Kecamatan Wonomulyo
['id' => 11406, 'district_id' => 2085, 'name' => 'Wonomulyo Timur'],
['id' => 11407, 'district_id' => 2085, 'name' => 'Wonomulyo Selatan'],

// Desa/Kelurahan di Kecamatan Mapilli
['id' => 11408, 'district_id' => 2086, 'name' => 'Mapilli Barat'],
['id' => 11409, 'district_id' => 2086, 'name' => 'Mapilli Selatan'],

// Desa/Kelurahan di Kecamatan Tapango
['id' => 11410, 'district_id' => 2087, 'name' => 'Tapango Timur'],
['id' => 11411, 'district_id' => 2087, 'name' => 'Tapango Barat'],

// Desa/Kelurahan di Kecamatan Tinambung
['id' => 11412, 'district_id' => 2088, 'name' => 'Tinambung Selatan'],
['id' => 11413, 'district_id' => 2088, 'name' => 'Tinambung Utara'],

// Desa/Kelurahan di Kecamatan Namlea
['id' => 11414, 'district_id' => 2089, 'name' => 'Namlea Selatan'],
['id' => 11415, 'district_id' => 2089, 'name' => 'Namlea Timur'],

// Desa/Kelurahan di Kecamatan Air Buaya
['id' => 11416, 'district_id' => 2090, 'name' => 'Air Buaya Utara'],
['id' => 11417, 'district_id' => 2090, 'name' => 'Air Buaya Selatan'],

// Desa/Kelurahan di Kecamatan Waeapo
['id' => 11418, 'district_id' => 2091, 'name' => 'Waeapo Barat'],
['id' => 11419, 'district_id' => 2091, 'name' => 'Waeapo Timur'],

// Desa/Kelurahan di Kecamatan Batabual
['id' => 11420, 'district_id' => 2092, 'name' => 'Batabual Selatan'],
['id' => 11421, 'district_id' => 2092, 'name' => 'Batabual Timur'],

// Desa/Kelurahan di Kecamatan Lolong Guba
['id' => 11422, 'district_id' => 2093, 'name' => 'Lolong Guba Utara'],
['id' => 11423, 'district_id' => 2093, 'name' => 'Lolong Guba Selatan'],

// Desa/Kelurahan di Kecamatan Namrole
['id' => 11424, 'district_id' => 2094, 'name' => 'Namrole Barat'],
['id' => 11425, 'district_id' => 2094, 'name' => 'Namrole Timur'],

// Desa/Kelurahan di Kecamatan Leksula
['id' => 11426, 'district_id' => 2095, 'name' => 'Leksula Barat'],
['id' => 11427, 'district_id' => 2095, 'name' => 'Leksula Timur'],

// Desa/Kelurahan di Kecamatan Waesama
['id' => 11428, 'district_id' => 2096, 'name' => 'Waesama Selatan'],
['id' => 11429, 'district_id' => 2096, 'name' => 'Waesama Utara'],

// Desa/Kelurahan di Kecamatan Ambalau
['id' => 11430, 'district_id' => 2097, 'name' => 'Ambalau Selatan'],
['id' => 11431, 'district_id' => 2097, 'name' => 'Ambalau Utara'],

// Desa/Kelurahan di Kecamatan Fena Fafan
['id' => 11432, 'district_id' => 2098, 'name' => 'Fena Fafan Barat'],
['id' => 11433, 'district_id' => 2098, 'name' => 'Fena Fafan Selatan'],

// Desa/Kelurahan di Kecamatan Pulau-Pulau Aru
['id' => 11434, 'district_id' => 2099, 'name' => 'Pulau-Pulau Aru Barat'],
['id' => 11435, 'district_id' => 2099, 'name' => 'Pulau-Pulau Aru Timur'],

// Desa/Kelurahan di Kecamatan Aru Selatan
['id' => 11436, 'district_id' => 2100, 'name' => 'Aru Selatan Barat'],
['id' => 11437, 'district_id' => 2100, 'name' => 'Aru Selatan Timur'],

// Desa/Kelurahan di Kecamatan Aru Tengah
['id' => 11438, 'district_id' => 2101, 'name' => 'Aru Tengah Barat'],
['id' => 11439, 'district_id' => 2101, 'name' => 'Aru Tengah Timur'],

// Desa/Kelurahan di Kecamatan Aru Utara
['id' => 11440, 'district_id' => 2102, 'name' => 'Aru Utara Barat'],
['id' => 11441, 'district_id' => 2102, 'name' => 'Aru Utara Selatan'],

// Desa/Kelurahan di Kecamatan Sir-Sir
['id' => 11442, 'district_id' => 2103, 'name' => 'Sir-Sir Barat'],
['id' => 11443, 'district_id' => 2103, 'name' => 'Sir-Sir Timur'],

// Desa/Kelurahan di Kecamatan Tiakur
['id' => 11444, 'district_id' => 2104, 'name' => 'Tiakur Barat'],
['id' => 11445, 'district_id' => 2104, 'name' => 'Tiakur Selatan'],

// Desa/Kelurahan di Kecamatan Moain
['id' => 11446, 'district_id' => 2105, 'name' => 'Moain Barat'],
['id' => 11447, 'district_id' => 2105, 'name' => 'Moain Timur'],

// Desa/Kelurahan di Kecamatan Letti
['id' => 11448, 'district_id' => 2106, 'name' => 'Letti Barat'],
['id' => 11449, 'district_id' => 2106, 'name' => 'Letti Timur'],

// Desa/Kelurahan di Kecamatan Moa
['id' => 11450, 'district_id' => 2107, 'name' => 'Moa Barat'],
['id' => 11451, 'district_id' => 2107, 'name' => 'Moa Timur'],

// Desa/Kelurahan di Kecamatan Lakor
['id' => 11452, 'district_id' => 2108, 'name' => 'Lakor Barat'],
['id' => 11453, 'district_id' => 2108, 'name' => 'Lakor Selatan'],

// Desa/Kelurahan di Kecamatan Masohi
['id' => 11454, 'district_id' => 2109, 'name' => 'Masohi Selatan'],
['id' => 11455, 'district_id' => 2109, 'name' => 'Masohi Utara'],

// Desa/Kelurahan di Kecamatan Tehoru
['id' => 11456, 'district_id' => 2110, 'name' => 'Tehoru Barat'],
['id' => 11457, 'district_id' => 2110, 'name' => 'Tehoru Timur'],

// Desa/Kelurahan di Kecamatan Telutih
['id' => 11458, 'district_id' => 2111, 'name' => 'Telutih Selatan'],
['id' => 11459, 'district_id' => 2111, 'name' => 'Telutih Utara'],

// Desa/Kelurahan di Kecamatan Amahai
['id' => 11460, 'district_id' => 2112, 'name' => 'Amahai Barat'],
['id' => 11461, 'district_id' => 2112, 'name' => 'Amahai Selatan'],

// Desa/Kelurahan di Kecamatan Banda
['id' => 11462, 'district_id' => 2113, 'name' => 'Banda Barat'],
['id' => 11463, 'district_id' => 2113, 'name' => 'Banda Selatan'],

// Desa/Kelurahan di Kecamatan Tual
['id' => 11464, 'district_id' => 2114, 'name' => 'Tual Timur'],
['id' => 11465, 'district_id' => 2114, 'name' => 'Tual Barat'],
// Desa/Kelurahan di Kecamatan Kur Utara
['id' => 11522, 'district_id' => 2143, 'name' => 'Kur Utara Barat'],
['id' => 11523, 'district_id' => 2143, 'name' => 'Kur Utara Timur'],

// Desa/Kelurahan di Kecamatan Jailolo
['id' => 11524, 'district_id' => 2144, 'name' => 'Jailolo Barat'],
['id' => 11525, 'district_id' => 2144, 'name' => 'Jailolo Timur'],

// Desa/Kelurahan di Kecamatan Sahu
['id' => 11526, 'district_id' => 2145, 'name' => 'Sahu Barat'],
['id' => 11527, 'district_id' => 2145, 'name' => 'Sahu Timur'],

// Desa/Kelurahan di Kecamatan Ibu
['id' => 11528, 'district_id' => 2146, 'name' => 'Ibu Barat'],
['id' => 11529, 'district_id' => 2146, 'name' => 'Ibu Timur'],

// Desa/Kelurahan di Kecamatan Loloda
['id' => 11530, 'district_id' => 2147, 'name' => 'Loloda Barat'],
['id' => 11531, 'district_id' => 2147, 'name' => 'Loloda Timur'],

// Desa/Kelurahan di Kecamatan Tabaru
['id' => 11532, 'district_id' => 2148, 'name' => 'Tabaru Barat'],
['id' => 11533, 'district_id' => 2148, 'name' => 'Tabaru Timur'],

// Desa/Kelurahan di Kecamatan Weda
['id' => 11534, 'district_id' => 2149, 'name' => 'Weda Barat'],
['id' => 11535, 'district_id' => 2149, 'name' => 'Weda Timur'],

// Desa/Kelurahan di Kecamatan Patani
['id' => 11536, 'district_id' => 2150, 'name' => 'Patani Barat'],
['id' => 11537, 'district_id' => 2150, 'name' => 'Patani Timur'],

// Desa/Kelurahan di Kecamatan Pulau Gebe
['id' => 11538, 'district_id' => 2151, 'name' => 'Pulau Gebe Barat'],
['id' => 11539, 'district_id' => 2151, 'name' => 'Pulau Gebe Timur'],

// Desa/Kelurahan di Kecamatan Patani Utara
['id' => 11540, 'district_id' => 2152, 'name' => 'Patani Utara Barat'],
['id' => 11541, 'district_id' => 2152, 'name' => 'Patani Utara Timur'],

// Desa/Kelurahan di Kecamatan Patani Barat
['id' => 11542, 'district_id' => 2153, 'name' => 'Patani Barat Selatan'],
['id' => 11543, 'district_id' => 2153, 'name' => 'Patani Barat Utara'],

// Desa/Kelurahan di Kecamatan Labuha
['id' => 11544, 'district_id' => 2154, 'name' => 'Labuha Barat'],
['id' => 11545, 'district_id' => 2154, 'name' => 'Labuha Timur'],

// Desa/Kelurahan di Kecamatan Bacan
['id' => 11546, 'district_id' => 2155, 'name' => 'Bacan Barat'],
['id' => 11547, 'district_id' => 2155, 'name' => 'Bacan Timur'],

// Desa/Kelurahan di Kecamatan Gane Barat
['id' => 11548, 'district_id' => 2156, 'name' => 'Gane Barat Selatan'],
['id' => 11549, 'district_id' => 2156, 'name' => 'Gane Barat Utara'],

// Desa/Kelurahan di Kecamatan Gane Timur
['id' => 11550, 'district_id' => 2157, 'name' => 'Gane Timur Selatan'],
['id' => 11551, 'district_id' => 2157, 'name' => 'Gane Timur Utara'],

// Desa/Kelurahan di Kecamatan Kayoa
['id' => 11552, 'district_id' => 2158, 'name' => 'Kayoa Barat'],
['id' => 11553, 'district_id' => 2158, 'name' => 'Kayoa Timur'],

// Desa/Kelurahan di Kecamatan Maba
['id' => 11554, 'district_id' => 2159, 'name' => 'Maba Barat'],
['id' => 11555, 'district_id' => 2159, 'name' => 'Maba Timur'],

// Desa/Kelurahan di Kecamatan Wasile
['id' => 11556, 'district_id' => 2160, 'name' => 'Wasile Barat'],
['id' => 11557, 'district_id' => 2160, 'name' => 'Wasile Timur'],

// Desa/Kelurahan di Kecamatan Maba Selatan
['id' => 11558, 'district_id' => 2161, 'name' => 'Maba Selatan Barat'],
['id' => 11559, 'district_id' => 2161, 'name' => 'Maba Selatan Timur'],

// Desa/Kelurahan di Kecamatan Wasile Selatan
['id' => 11560, 'district_id' => 2162, 'name' => 'Wasile Selatan Barat'],
['id' => 11561, 'district_id' => 2162, 'name' => 'Wasile Selatan Timur'],

// Desa/Kelurahan di Kecamatan Wasile Utara
['id' => 11562, 'district_id' => 2163, 'name' => 'Wasile Utara Barat'],
['id' => 11563, 'district_id' => 2163, 'name' => 'Wasile Utara Timur'],

// Desa/Kelurahan di Kecamatan Tobelo
['id' => 11564, 'district_id' => 2164, 'name' => 'Tobelo Barat'],
['id' => 11565, 'district_id' => 2164, 'name' => 'Tobelo Timur'],

// Desa/Kelurahan di Kecamatan Galela
['id' => 11566, 'district_id' => 2165, 'name' => 'Galela Barat'],
['id' => 11567, 'district_id' => 2165, 'name' => 'Galela Timur'],

// Desa/Kelurahan di Kecamatan Loloda Utara
['id' => 11568, 'district_id' => 2166, 'name' => 'Loloda Utara Barat'],
['id' => 11569, 'district_id' => 2166, 'name' => 'Loloda Utara Timur'],

// Desa/Kelurahan di Kecamatan Kao
['id' => 11570, 'district_id' => 2167, 'name' => 'Kao Barat'],
['id' => 11571, 'district_id' => 2167, 'name' => 'Kao Timur'],

// Desa/Kelurahan di Kecamatan Tobelo Selatan
['id' => 11572, 'district_id' => 2168, 'name' => 'Tobelo Selatan Barat'],
['id' => 11573, 'district_id' => 2168, 'name' => 'Tobelo Selatan Timur'],

// Desa/Kelurahan di Kecamatan Sanana
['id' => 11574, 'district_id' => 2169, 'name' => 'Sanana Barat'],
['id' => 11575, 'district_id' => 2169, 'name' => 'Sanana Timur'],

// Desa/Kelurahan di Kecamatan Mangoli
['id' => 11576, 'district_id' => 2170, 'name' => 'Mangoli Barat'],
['id' => 11577, 'district_id' => 2170, 'name' => 'Mangoli Timur'],
// Desa/Kelurahan di Kecamatan Sulabesi
['id' => 11578, 'district_id' => 2171, 'name' => 'Sulabesi Barat'],
['id' => 11579, 'district_id' => 2171, 'name' => 'Sulabesi Timur'],

// Desa/Kelurahan di Kecamatan Mangoli Timur
['id' => 11580, 'district_id' => 2172, 'name' => 'Mangoli Timur Barat'],
['id' => 11581, 'district_id' => 2172, 'name' => 'Mangoli Timur Timur'],

// Desa/Kelurahan di Kecamatan Mangoli Barat
['id' => 11582, 'district_id' => 2173, 'name' => 'Mangoli Barat Selatan'],
['id' => 11583, 'district_id' => 2173, 'name' => 'Mangoli Barat Utara'],

// Desa/Kelurahan di Kecamatan Morotai Selatan
['id' => 11584, 'district_id' => 2174, 'name' => 'Morotai Selatan Barat'],
['id' => 11585, 'district_id' => 2174, 'name' => 'Morotai Selatan Timur'],

// Desa/Kelurahan di Kecamatan Morotai Utara
['id' => 11586, 'district_id' => 2175, 'name' => 'Morotai Utara Barat'],
['id' => 11587, 'district_id' => 2175, 'name' => 'Morotai Utara Timur'],

// Desa/Kelurahan di Kecamatan Morotai Timur
['id' => 11588, 'district_id' => 2176, 'name' => 'Morotai Timur Barat'],
['id' => 11589, 'district_id' => 2176, 'name' => 'Morotai Timur Timur'],

// Desa/Kelurahan di Kecamatan Morotai Barat
['id' => 11590, 'district_id' => 2177, 'name' => 'Morotai Barat Selatan'],
['id' => 11591, 'district_id' => 2177, 'name' => 'Morotai Barat Utara'],

// Desa/Kelurahan di Kecamatan Morotai Jaya
['id' => 11592, 'district_id' => 2178, 'name' => 'Morotai Jaya Barat'],
['id' => 11593, 'district_id' => 2178, 'name' => 'Morotai Jaya Timur'],

// Desa/Kelurahan di Kecamatan Ternate Selatan
['id' => 11594, 'district_id' => 2179, 'name' => 'Ternate Selatan Barat'],
['id' => 11595, 'district_id' => 2179, 'name' => 'Ternate Selatan Timur'],

// Desa/Kelurahan di Kecamatan Ternate Tengah
['id' => 11596, 'district_id' => 2180, 'name' => 'Ternate Tengah Barat'],
['id' => 11597, 'district_id' => 2180, 'name' => 'Ternate Tengah Timur'],

// Desa/Kelurahan di Kecamatan Ternate Utara
['id' => 11598, 'district_id' => 2181, 'name' => 'Ternate Utara Barat'],
['id' => 11599, 'district_id' => 2181, 'name' => 'Ternate Utara Timur'],

// Desa/Kelurahan di Kecamatan Pulau Ternate
['id' => 11600, 'district_id' => 2182, 'name' => 'Pulau Ternate Barat'],
['id' => 11601, 'district_id' => 2182, 'name' => 'Pulau Ternate Timur'],

// Desa/Kelurahan di Kecamatan Moti
['id' => 11602, 'district_id' => 2183, 'name' => 'Moti Barat'],
['id' => 11603, 'district_id' => 2183, 'name' => 'Moti Timur'],

// Desa/Kelurahan di Kecamatan Tidore
['id' => 11604, 'district_id' => 2184, 'name' => 'Tidore Barat'],
['id' => 11605, 'district_id' => 2184, 'name' => 'Tidore Timur'],

// Desa/Kelurahan di Kecamatan Tidore Selatan
['id' => 11606, 'district_id' => 2185, 'name' => 'Tidore Selatan Barat'],
['id' => 11607, 'district_id' => 2185, 'name' => 'Tidore Selatan Timur'],

// Desa/Kelurahan di Kecamatan Tidore Utara
['id' => 11608, 'district_id' => 2186, 'name' => 'Tidore Utara Barat'],
['id' => 11609, 'district_id' => 2186, 'name' => 'Tidore Utara Timur'],

// Desa/Kelurahan di Kecamatan Tidore Timur
['id' => 11610, 'district_id' => 2187, 'name' => 'Tidore Timur Barat'],
['id' => 11611, 'district_id' => 2187, 'name' => 'Tidore Timur Timur'],

// Desa/Kelurahan di Kecamatan Oba
['id' => 11612, 'district_id' => 2188, 'name' => 'Oba Barat'],
['id' => 11613, 'district_id' => 2188, 'name' => 'Oba Timur'],

// Desa/Kelurahan di Kecamatan Biak Kota
['id' => 11614, 'district_id' => 2189, 'name' => 'Biak Kota Selatan'],
['id' => 11615, 'district_id' => 2189, 'name' => 'Biak Kota Utara'],

// Desa/Kelurahan di Kecamatan Biak Timur
['id' => 11616, 'district_id' => 2190, 'name' => 'Biak Timur Barat'],
['id' => 11617, 'district_id' => 2190, 'name' => 'Biak Timur Timur'],

// Desa/Kelurahan di Kecamatan Biak Barat
['id' => 11618, 'district_id' => 2191, 'name' => 'Biak Barat Selatan'],
['id' => 11619, 'district_id' => 2191, 'name' => 'Biak Barat Utara'],

// Desa/Kelurahan di Kecamatan Biak Utara
['id' => 11620, 'district_id' => 2192, 'name' => 'Biak Utara Barat'],
['id' => 11621, 'district_id' => 2192, 'name' => 'Biak Utara Timur'],

// Desa/Kelurahan di Kecamatan Numfor Barat
['id' => 11622, 'district_id' => 2193, 'name' => 'Numfor Barat Selatan'],
['id' => 11623, 'district_id' => 2193, 'name' => 'Numfor Barat Utara'],

// Desa/Kelurahan di Kecamatan Sentani
['id' => 11624, 'district_id' => 2194, 'name' => 'Sentani Barat'],
['id' => 11625, 'district_id' => 2194, 'name' => 'Sentani Timur'],

// Desa/Kelurahan di Kecamatan Depapre
['id' => 11626, 'district_id' => 2195, 'name' => 'Depapre Selatan'],
['id' => 11627, 'district_id' => 2195, 'name' => 'Depapre Utara'],

// Desa/Kelurahan di Kecamatan Kemtuk
['id' => 11628, 'district_id' => 2196, 'name' => 'Kemtuk Barat'],
['id' => 11629, 'district_id' => 2196, 'name' => 'Kemtuk Timur'],

// Desa/Kelurahan di Kecamatan Nimboran
['id' => 11630, 'district_id' => 2197, 'name' => 'Nimboran Barat'],
['id' => 11631, 'district_id' => 2197, 'name' => 'Nimboran Timur'],

// Desa/Kelurahan di Kecamatan Unurum Guay
['id' => 11632, 'district_id' => 2198, 'name' => 'Unurum Guay Barat'],
['id' => 11633, 'district_id' => 2198, 'name' => 'Unurum Guay Timur'],

// Desa/Kelurahan di Kecamatan Wamena
['id' => 11634, 'district_id' => 2199, 'name' => 'Wamena Selatan'],
['id' => 11635, 'district_id' => 2199, 'name' => 'Wamena Utara'],

// Desa/Kelurahan di Kecamatan Kurulu
['id' => 11636, 'district_id' => 2200, 'name' => 'Kurulu Barat'],
['id' => 11637, 'district_id' => 2200, 'name' => 'Kurulu Timur'],
// Desa/Kelurahan di Kecamatan Asologaima
['id' => 11638, 'district_id' => 2201, 'name' => 'Asologaima Barat'],
['id' => 11639, 'district_id' => 2201, 'name' => 'Asologaima Timur'],

// Desa/Kelurahan di Kecamatan Hubikosi
['id' => 11640, 'district_id' => 2202, 'name' => 'Hubikosi Selatan'],
['id' => 11641, 'district_id' => 2202, 'name' => 'Hubikosi Utara'],

// Desa/Kelurahan di Kecamatan Walelagama
['id' => 11642, 'district_id' => 2203, 'name' => 'Walelagama Barat'],
['id' => 11643, 'district_id' => 2203, 'name' => 'Walelagama Timur'],

// Desa/Kelurahan di Kecamatan Arso
['id' => 11644, 'district_id' => 2204, 'name' => 'Arso Selatan'],
['id' => 11645, 'district_id' => 2204, 'name' => 'Arso Utara'],

// Desa/Kelurahan di Kecamatan Skanto
['id' => 11646, 'district_id' => 2205, 'name' => 'Skanto Barat'],
['id' => 11647, 'district_id' => 2205, 'name' => 'Skanto Timur'],

// Desa/Kelurahan di Kecamatan Waris
['id' => 11648, 'district_id' => 2206, 'name' => 'Waris Barat'],
['id' => 11649, 'district_id' => 2206, 'name' => 'Waris Timur'],

// Desa/Kelurahan di Kecamatan Towe
['id' => 11650, 'district_id' => 2207, 'name' => 'Towe Selatan'],
['id' => 11651, 'district_id' => 2207, 'name' => 'Towe Utara'],

// Desa/Kelurahan di Kecamatan Web
['id' => 11652, 'district_id' => 2208, 'name' => 'Web Selatan'],
['id' => 11653, 'district_id' => 2208, 'name' => 'Web Utara'],

// Desa/Kelurahan di Kecamatan Merauke
['id' => 11654, 'district_id' => 2209, 'name' => 'Merauke Barat'],
['id' => 11655, 'district_id' => 2209, 'name' => 'Merauke Timur'],

// Desa/Kelurahan di Kecamatan Sota
['id' => 11656, 'district_id' => 2210, 'name' => 'Sota Selatan'],
['id' => 11657, 'district_id' => 2210, 'name' => 'Sota Utara'],

// Desa/Kelurahan di Kecamatan Naukenjerai
['id' => 11658, 'district_id' => 2211, 'name' => 'Naukenjerai Barat'],
['id' => 11659, 'district_id' => 2211, 'name' => 'Naukenjerai Timur'],

// Desa/Kelurahan di Kecamatan Muting
['id' => 11660, 'district_id' => 2212, 'name' => 'Muting Barat'],
['id' => 11661, 'district_id' => 2212, 'name' => 'Muting Timur'],

// Desa/Kelurahan di Kecamatan Jagebob
['id' => 11662, 'district_id' => 2213, 'name' => 'Jagebob Barat'],
['id' => 11663, 'district_id' => 2213, 'name' => 'Jagebob Timur'],

// Desa/Kelurahan di Kecamatan Mimika Baru
['id' => 11664, 'district_id' => 2214, 'name' => 'Mimika Baru Selatan'],
['id' => 11665, 'district_id' => 2214, 'name' => 'Mimika Baru Utara'],

// Desa/Kelurahan di Kecamatan Mimika Timur
['id' => 11666, 'district_id' => 2215, 'name' => 'Mimika Timur Barat'],
['id' => 11667, 'district_id' => 2215, 'name' => 'Mimika Timur Timur'],

// Desa/Kelurahan di Kecamatan Mimika Barat
['id' => 11668, 'district_id' => 2216, 'name' => 'Mimika Barat Selatan'],
['id' => 11669, 'district_id' => 2216, 'name' => 'Mimika Barat Utara'],

// Desa/Kelurahan di Kecamatan Mimika Tengah
['id' => 11670, 'district_id' => 2217, 'name' => 'Mimika Tengah Barat'],
['id' => 11671, 'district_id' => 2217, 'name' => 'Mimika Tengah Timur'],

// Desa/Kelurahan di Kecamatan Mimika Timur Jauh
['id' => 11672, 'district_id' => 2218, 'name' => 'Mimika Timur Jauh Barat'],
['id' => 11673, 'district_id' => 2218, 'name' => 'Mimika Timur Jauh Timur'],

// Desa/Kelurahan di Kecamatan Nabire
['id' => 11674, 'district_id' => 2219, 'name' => 'Nabire Barat'],
['id' => 11675, 'district_id' => 2219, 'name' => 'Nabire Timur'],

// Desa/Kelurahan di Kecamatan Wanggar
['id' => 11676, 'district_id' => 2220, 'name' => 'Wanggar Barat'],
['id' => 11677, 'district_id' => 2220, 'name' => 'Wanggar Timur'],

// Desa/Kelurahan di Kecamatan Yaro
['id' => 11678, 'district_id' => 2221, 'name' => 'Yaro Selatan'],
['id' => 11679, 'district_id' => 2221, 'name' => 'Yaro Utara'],

// Desa/Kelurahan di Kecamatan Uwapa
['id' => 11680, 'district_id' => 2222, 'name' => 'Uwapa Selatan'],
['id' => 11681, 'district_id' => 2222, 'name' => 'Uwapa Utara'],

// Desa/Kelurahan di Kecamatan Makimi
['id' => 11682, 'district_id' => 2223, 'name' => 'Makimi Barat'],
['id' => 11683, 'district_id' => 2223, 'name' => 'Makimi Timur'],

// Desa/Kelurahan di Kecamatan Enarotali
['id' => 11684, 'district_id' => 2224, 'name' => 'Enarotali Barat'],
['id' => 11685, 'district_id' => 2224, 'name' => 'Enarotali Timur'],

// Desa/Kelurahan di Kecamatan Paniai Timur
['id' => 11686, 'district_id' => 2225, 'name' => 'Paniai Timur Selatan'],
['id' => 11687, 'district_id' => 2225, 'name' => 'Paniai Timur Utara'],

// Desa/Kelurahan di Kecamatan Paniai Barat
['id' => 11688, 'district_id' => 2226, 'name' => 'Paniai Barat Selatan'],
['id' => 11689, 'district_id' => 2226, 'name' => 'Paniai Barat Utara'],

// Desa/Kelurahan di Kecamatan Aradide
['id' => 11690, 'district_id' => 2227, 'name' => 'Aradide Selatan'],
['id' => 11691, 'district_id' => 2227, 'name' => 'Aradide Utara'],

// Desa/Kelurahan di Kecamatan Ekadide
['id' => 11692, 'district_id' => 2228, 'name' => 'Ekadide Barat'],
['id' => 11693, 'district_id' => 2228, 'name' => 'Ekadide Timur'],

// Desa/Kelurahan di Kecamatan Oksibil
['id' => 11694, 'district_id' => 2229, 'name' => 'Oksibil Selatan'],
['id' => 11695, 'district_id' => 2229, 'name' => 'Oksibil Utara'],

// Desa/Kelurahan di Kecamatan Kiwirok
['id' => 11696, 'district_id' => 2230, 'name' => 'Kiwirok Selatan'],
['id' => 11697, 'district_id' => 2230, 'name' => 'Kiwirok Utara'],
// Desa/Kelurahan di Kecamatan Batom
['id' => 11698, 'district_id' => 2231, 'name' => 'Batom Selatan'],
['id' => 11699, 'district_id' => 2231, 'name' => 'Batom Utara'],

// Desa/Kelurahan di Kecamatan Okbibab
['id' => 11700, 'district_id' => 2232, 'name' => 'Okbibab Barat'],
['id' => 11701, 'district_id' => 2232, 'name' => 'Okbibab Timur'],

// Desa/Kelurahan di Kecamatan Okbape
['id' => 11702, 'district_id' => 2233, 'name' => 'Okbape Selatan'],
['id' => 11703, 'district_id' => 2233, 'name' => 'Okbape Utara'],

// Desa/Kelurahan di Kecamatan Sarmi
['id' => 11704, 'district_id' => 2234, 'name' => 'Sarmi Barat'],
['id' => 11705, 'district_id' => 2234, 'name' => 'Sarmi Timur'],

// Desa/Kelurahan di Kecamatan Pantai Timur
['id' => 11706, 'district_id' => 2235, 'name' => 'Pantai Timur Selatan'],
['id' => 11707, 'district_id' => 2235, 'name' => 'Pantai Timur Utara'],

// Desa/Kelurahan di Kecamatan Pantai Barat
['id' => 11708, 'district_id' => 2236, 'name' => 'Pantai Barat Selatan'],
['id' => 11709, 'district_id' => 2236, 'name' => 'Pantai Barat Utara'],

// Desa/Kelurahan di Kecamatan Tor Atas
['id' => 11710, 'district_id' => 2237, 'name' => 'Tor Atas Selatan'],
['id' => 11711, 'district_id' => 2237, 'name' => 'Tor Atas Utara'],

// Desa/Kelurahan di Kecamatan Apawer Hulu
['id' => 11712, 'district_id' => 2238, 'name' => 'Apawer Hulu Barat'],
['id' => 11713, 'district_id' => 2238, 'name' => 'Apawer Hulu Timur'],

// Desa/Kelurahan di Kecamatan Supiori Selatan
['id' => 11714, 'district_id' => 2239, 'name' => 'Supiori Selatan Barat'],
['id' => 11715, 'district_id' => 2239, 'name' => 'Supiori Selatan Timur'],

// Desa/Kelurahan di Kecamatan Supiori Utara
['id' => 11716, 'district_id' => 2240, 'name' => 'Supiori Utara Barat'],
['id' => 11717, 'district_id' => 2240, 'name' => 'Supiori Utara Timur'],

// Desa/Kelurahan di Kecamatan Supiori Barat
['id' => 11718, 'district_id' => 2241, 'name' => 'Supiori Barat Selatan'],
['id' => 11719, 'district_id' => 2241, 'name' => 'Supiori Barat Utara'],

// Desa/Kelurahan di Kecamatan Supiori Timur
['id' => 11720, 'district_id' => 2242, 'name' => 'Supiori Timur Barat'],
['id' => 11721, 'district_id' => 2242, 'name' => 'Supiori Timur Timur'],

// Desa/Kelurahan di Kecamatan Kepulauan Aruri
['id' => 11722, 'district_id' => 2243, 'name' => 'Kepulauan Aruri Barat'],
['id' => 11723, 'district_id' => 2243, 'name' => 'Kepulauan Aruri Timur'],

// Desa/Kelurahan di Kecamatan Botawa
['id' => 11724, 'district_id' => 2244, 'name' => 'Botawa Selatan'],
['id' => 11725, 'district_id' => 2244, 'name' => 'Botawa Utara'],

// Desa/Kelurahan di Kecamatan Kirihi
['id' => 11726, 'district_id' => 2245, 'name' => 'Kirihi Barat'],
['id' => 11727, 'district_id' => 2245, 'name' => 'Kirihi Timur'],

// Desa/Kelurahan di Kecamatan Masirei
['id' => 11728, 'district_id' => 2246, 'name' => 'Masirei Barat'],
['id' => 11729, 'district_id' => 2246, 'name' => 'Masirei Timur'],

// Desa/Kelurahan di Kecamatan Risei Sayati
['id' => 11730, 'district_id' => 2247, 'name' => 'Risei Sayati Barat'],
['id' => 11731, 'district_id' => 2247, 'name' => 'Risei Sayati Timur'],

// Desa/Kelurahan di Kecamatan Urei Faisei
['id' => 11732, 'district_id' => 2248, 'name' => 'Urei Faisei Barat'],
['id' => 11733, 'district_id' => 2248, 'name' => 'Urei Faisei Timur'],

// Desa/Kelurahan di Kecamatan Dekai
['id' => 11734, 'district_id' => 2249, 'name' => 'Dekai Barat'],
['id' => 11735, 'district_id' => 2249, 'name' => 'Dekai Timur'],

// Desa/Kelurahan di Kecamatan Obio
['id' => 11736, 'district_id' => 2250, 'name' => 'Obio Barat'],
['id' => 11737, 'district_id' => 2250, 'name' => 'Obio Timur'],

// Desa/Kelurahan di Kecamatan Pasir Putih
['id' => 11738, 'district_id' => 2251, 'name' => 'Pasir Putih Selatan'],
['id' => 11739, 'district_id' => 2251, 'name' => 'Pasir Putih Utara'],

// Desa/Kelurahan di Kecamatan Seredela
['id' => 11740, 'district_id' => 2252, 'name' => 'Seredela Selatan'],
['id' => 11741, 'district_id' => 2252, 'name' => 'Seredela Utara'],

// Desa/Kelurahan di Kecamatan Suru Suru
['id' => 11742, 'district_id' => 2253, 'name' => 'Suru Suru Barat'],
['id' => 11743, 'district_id' => 2253, 'name' => 'Suru Suru Timur'],

// Desa/Kelurahan di Kecamatan Jayapura Selatan
['id' => 11744, 'district_id' => 2254, 'name' => 'Jayapura Selatan Barat'],
['id' => 11745, 'district_id' => 2254, 'name' => 'Jayapura Selatan Timur'],

// Desa/Kelurahan di Kecamatan Jayapura Utara
['id' => 11746, 'district_id' => 2255, 'name' => 'Jayapura Utara Barat'],
['id' => 11747, 'district_id' => 2255, 'name' => 'Jayapura Utara Timur'],
// Desa/Kelurahan di Kecamatan Abepura
['id' => 11748, 'district_id' => 2256, 'name' => 'Abepura Barat'],
['id' => 11749, 'district_id' => 2256, 'name' => 'Abepura Timur'],

// Desa/Kelurahan di Kecamatan Muara Tami
['id' => 11750, 'district_id' => 2257, 'name' => 'Muara Tami Selatan'],
['id' => 11751, 'district_id' => 2257, 'name' => 'Muara Tami Utara'],

// Desa/Kelurahan di Kecamatan Heram
['id' => 11752, 'district_id' => 2258, 'name' => 'Heram Barat'],
['id' => 11753, 'district_id' => 2258, 'name' => 'Heram Timur'],

// Desa/Kelurahan di Kecamatan Fakfak
['id' => 11754, 'district_id' => 2259, 'name' => 'Fakfak Selatan'],
['id' => 11755, 'district_id' => 2259, 'name' => 'Fakfak Utara'],

// Desa/Kelurahan di Kecamatan Fakfak Barat
['id' => 11756, 'district_id' => 2260, 'name' => 'Fakfak Barat Selatan'],
['id' => 11757, 'district_id' => 2260, 'name' => 'Fakfak Barat Utara'],

// Desa/Kelurahan di Kecamatan Fakfak Timur
['id' => 11758, 'district_id' => 2261, 'name' => 'Fakfak Timur Selatan'],
['id' => 11759, 'district_id' => 2261, 'name' => 'Fakfak Timur Utara'],

// Desa/Kelurahan di Kecamatan Karas
['id' => 11760, 'district_id' => 2262, 'name' => 'Karas Barat'],
['id' => 11761, 'district_id' => 2262, 'name' => 'Karas Timur'],

// Desa/Kelurahan di Kecamatan Kokas
['id' => 11762, 'district_id' => 2263, 'name' => 'Kokas Selatan'],
['id' => 11763, 'district_id' => 2263, 'name' => 'Kokas Utara'],

// Desa/Kelurahan di Kecamatan Kaimana
['id' => 11764, 'district_id' => 2264, 'name' => 'Kaimana Barat'],
['id' => 11765, 'district_id' => 2264, 'name' => 'Kaimana Timur'],

// Desa/Kelurahan di Kecamatan Buruway
['id' => 11766, 'district_id' => 2265, 'name' => 'Buruway Selatan'],
['id' => 11767, 'district_id' => 2265, 'name' => 'Buruway Utara'],

// Desa/Kelurahan di Kecamatan Teluk Arguni
['id' => 11768, 'district_id' => 2266, 'name' => 'Teluk Arguni Barat'],
['id' => 11769, 'district_id' => 2266, 'name' => 'Teluk Arguni Timur'],

// Desa/Kelurahan di Kecamatan Teluk Etna
['id' => 11770, 'district_id' => 2267, 'name' => 'Teluk Etna Selatan'],
['id' => 11771, 'district_id' => 2267, 'name' => 'Teluk Etna Utara'],

// Desa/Kelurahan di Kecamatan Yamor
['id' => 11772, 'district_id' => 2268, 'name' => 'Yamor Selatan'],
['id' => 11773, 'district_id' => 2268, 'name' => 'Yamor Utara'],

// Desa/Kelurahan di Kecamatan Manokwari
['id' => 11774, 'district_id' => 2269, 'name' => 'Manokwari Selatan Barat'],
['id' => 11775, 'district_id' => 2269, 'name' => 'Manokwari Selatan Timur'],

// Desa/Kelurahan di Kecamatan Manokwari Selatan
['id' => 11776, 'district_id' => 2270, 'name' => 'Manokwari Selatan Timur'],
['id' => 11777, 'district_id' => 2270, 'name' => 'Manokwari Selatan Barat'],

// Desa/Kelurahan di Kecamatan Warmare
['id' => 11778, 'district_id' => 2271, 'name' => 'Warmare Barat'],
['id' => 11779, 'district_id' => 2271, 'name' => 'Warmare Timur'],

// Desa/Kelurahan di Kecamatan Prafi
['id' => 11780, 'district_id' => 2272, 'name' => 'Prafi Barat'],
['id' => 11781, 'district_id' => 2272, 'name' => 'Prafi Timur'],

// Desa/Kelurahan di Kecamatan Masni
['id' => 11782, 'district_id' => 2273, 'name' => 'Masni Barat'],
['id' => 11783, 'district_id' => 2273, 'name' => 'Masni Timur'],

// Desa/Kelurahan di Kecamatan Ransiki
['id' => 11784, 'district_id' => 2274, 'name' => 'Ransiki Selatan'],
['id' => 11785, 'district_id' => 2274, 'name' => 'Ransiki Utara'],

// Desa/Kelurahan di Kecamatan Oransbari
['id' => 11786, 'district_id' => 2275, 'name' => 'Oransbari Barat'],
['id' => 11787, 'district_id' => 2275, 'name' => 'Oransbari Timur'],

// Desa/Kelurahan di Kecamatan Neney
['id' => 11788, 'district_id' => 2276, 'name' => 'Neney Barat'],
['id' => 11789, 'district_id' => 2276, 'name' => 'Neney Timur'],

// Desa/Kelurahan di Kecamatan Momi Waren
['id' => 11790, 'district_id' => 2277, 'name' => 'Momi Waren Barat'],
['id' => 11791, 'district_id' => 2277, 'name' => 'Momi Waren Timur'],

// Desa/Kelurahan di Kecamatan Tahota
['id' => 11792, 'district_id' => 2278, 'name' => 'Tahota Barat'],
['id' => 11793, 'district_id' => 2278, 'name' => 'Tahota Timur'],

// Desa/Kelurahan di Kecamatan Anggi
['id' => 11794, 'district_id' => 2279, 'name' => 'Anggi Barat'],
['id' => 11795, 'district_id' => 2279, 'name' => 'Anggi Timur'],

// Desa/Kelurahan di Kecamatan Anggi Gida
['id' => 11796, 'district_id' => 2280, 'name' => 'Anggi Gida Selatan'],
['id' => 11797, 'district_id' => 2280, 'name' => 'Anggi Gida Utara'],
// Desa/Kelurahan di Kecamatan Catubouw
['id' => 11798, 'district_id' => 2281, 'name' => 'Catubouw Barat'],
['id' => 11799, 'district_id' => 2281, 'name' => 'Catubouw Timur'],

// Desa/Kelurahan di Kecamatan Didohu
['id' => 11800, 'district_id' => 2282, 'name' => 'Didohu Barat'],
['id' => 11801, 'district_id' => 2282, 'name' => 'Didohu Timur'],

// Desa/Kelurahan di Kecamatan Hingk
['id' => 11802, 'district_id' => 2283, 'name' => 'Hingk Selatan'],
['id' => 11803, 'district_id' => 2283, 'name' => 'Hingk Utara'],

// Desa/Kelurahan di Kecamatan Waisai
['id' => 11804, 'district_id' => 2284, 'name' => 'Waisai Barat'],
['id' => 11805, 'district_id' => 2284, 'name' => 'Waisai Timur'],

// Desa/Kelurahan di Kecamatan Waigeo Selatan
['id' => 11806, 'district_id' => 2285, 'name' => 'Waigeo Selatan Barat'],
['id' => 11807, 'district_id' => 2285, 'name' => 'Waigeo Selatan Timur'],

// Desa/Kelurahan di Kecamatan Waigeo Barat
['id' => 11808, 'district_id' => 2286, 'name' => 'Waigeo Barat Selatan'],
['id' => 11809, 'district_id' => 2286, 'name' => 'Waigeo Barat Utara'],

// Desa/Kelurahan di Kecamatan Waigeo Utara
['id' => 11810, 'district_id' => 2287, 'name' => 'Waigeo Utara Barat'],
['id' => 11811, 'district_id' => 2287, 'name' => 'Waigeo Utara Timur'],

// Desa/Kelurahan di Kecamatan Waigeo Timur
['id' => 11812, 'district_id' => 2288, 'name' => 'Waigeo Timur Selatan'],
['id' => 11813, 'district_id' => 2288, 'name' => 'Waigeo Timur Utara'],

// Desa/Kelurahan di Kecamatan Sorong
['id' => 11814, 'district_id' => 2289, 'name' => 'Sorong Barat'],
['id' => 11815, 'district_id' => 2289, 'name' => 'Sorong Timur'],

// Desa/Kelurahan di Kecamatan Aimas
['id' => 11816, 'district_id' => 2290, 'name' => 'Aimas Selatan'],
['id' => 11817, 'district_id' => 2290, 'name' => 'Aimas Utara'],

// Desa/Kelurahan di Kecamatan Klamono
['id' => 11818, 'district_id' => 2291, 'name' => 'Klamono Selatan'],
['id' => 11819, 'district_id' => 2291, 'name' => 'Klamono Utara'],

// Desa/Kelurahan di Kecamatan Makbon
['id' => 11820, 'district_id' => 2292, 'name' => 'Makbon Barat'],
['id' => 11821, 'district_id' => 2292, 'name' => 'Makbon Timur'],

// Desa/Kelurahan di Kecamatan Mariat
['id' => 11822, 'district_id' => 2293, 'name' => 'Mariat Selatan'],
['id' => 11823, 'district_id' => 2293, 'name' => 'Mariat Utara'],

// Desa/Kelurahan di Kecamatan Teminabuan
['id' => 11824, 'district_id' => 2294, 'name' => 'Teminabuan Barat'],
['id' => 11825, 'district_id' => 2294, 'name' => 'Teminabuan Timur'],

// Desa/Kelurahan di Kecamatan Kais
['id' => 11826, 'district_id' => 2295, 'name' => 'Kais Selatan'],
['id' => 11827, 'district_id' => 2295, 'name' => 'Kais Utara'],

// Desa/Kelurahan di Kecamatan Kokoda
['id' => 11828, 'district_id' => 2296, 'name' => 'Kokoda Barat'],
['id' => 11829, 'district_id' => 2296, 'name' => 'Kokoda Timur'],

// Desa/Kelurahan di Kecamatan Moswaren
['id' => 11830, 'district_id' => 2297, 'name' => 'Moswaren Selatan'],
['id' => 11831, 'district_id' => 2297, 'name' => 'Moswaren Utara'],

// Desa/Kelurahan di Kecamatan Seremuk
['id' => 11832, 'district_id' => 2298, 'name' => 'Seremuk Selatan'],
['id' => 11833, 'district_id' => 2298, 'name' => 'Seremuk Utara'],

// Desa/Kelurahan di Kecamatan Bintuni
['id' => 11834, 'district_id' => 2299, 'name' => 'Bintuni Barat'],
['id' => 11835, 'district_id' => 2299, 'name' => 'Bintuni Timur'],

// Desa/Kelurahan di Kecamatan Manimeri
['id' => 11836, 'district_id' => 2300, 'name' => 'Manimeri Selatan'],
['id' => 11837, 'district_id' => 2300, 'name' => 'Manimeri Utara'],
// Desa/Kelurahan di Kecamatan Tembuni
['id' => 11838, 'district_id' => 2301, 'name' => 'Tembuni Selatan'],
['id' => 11839, 'district_id' => 2301, 'name' => 'Tembuni Utara'],

// Desa/Kelurahan di Kecamatan Aranday
['id' => 11840, 'district_id' => 2302, 'name' => 'Aranday Barat'],
['id' => 11841, 'district_id' => 2302, 'name' => 'Aranday Timur'],

// Desa/Kelurahan di Kecamatan Merdey
['id' => 11842, 'district_id' => 2303, 'name' => 'Merdey Selatan'],
['id' => 11843, 'district_id' => 2303, 'name' => 'Merdey Utara'],

// Desa/Kelurahan di Kecamatan Rasiei
['id' => 11844, 'district_id' => 2304, 'name' => 'Rasiei Barat'],
['id' => 11845, 'district_id' => 2304, 'name' => 'Rasiei Timur'],

// Desa/Kelurahan di Kecamatan Wasior
['id' => 11846, 'district_id' => 2305, 'name' => 'Wasior Selatan'],
['id' => 11847, 'district_id' => 2305, 'name' => 'Wasior Utara'],

// Desa/Kelurahan di Kecamatan Windesi
['id' => 11848, 'district_id' => 2306, 'name' => 'Windesi Barat'],
['id' => 11849, 'district_id' => 2306, 'name' => 'Windesi Timur'],

// Desa/Kelurahan di Kecamatan Roon
['id' => 11850, 'district_id' => 2307, 'name' => 'Roon Barat'],
['id' => 11851, 'district_id' => 2307, 'name' => 'Roon Timur'],

// Desa/Kelurahan di Kecamatan Wamesa
['id' => 11852, 'district_id' => 2308, 'name' => 'Wamesa Selatan'],
['id' => 11853, 'district_id' => 2308, 'name' => 'Wamesa Utara'],

// Desa/Kelurahan di Kecamatan Sorong Barat
['id' => 11854, 'district_id' => 2309, 'name' => 'Sorong Barat Selatan'],
['id' => 11855, 'district_id' => 2309, 'name' => 'Sorong Barat Utara'],

// Desa/Kelurahan di Kecamatan Sorong Kepulauan
['id' => 11856, 'district_id' => 2310, 'name' => 'Sorong Kepulauan Barat'],
['id' => 11857, 'district_id' => 2310, 'name' => 'Sorong Kepulauan Timur'],

// Desa/Kelurahan di Kecamatan Sorong Timur
['id' => 11858, 'district_id' => 2311, 'name' => 'Sorong Timur Selatan'],
['id' => 11859, 'district_id' => 2311, 'name' => 'Sorong Timur Utara'],

// Desa/Kelurahan di Kecamatan Sorong Utara
['id' => 11860, 'district_id' => 2312, 'name' => 'Sorong Utara Barat'],
['id' => 11861, 'district_id' => 2312, 'name' => 'Sorong Utara Timur'],

// Desa/Kelurahan di Kecamatan Sorong Manoi
['id' => 11862, 'district_id' => 2313, 'name' => 'Sorong Manoi Barat'],
['id' => 11863, 'district_id' => 2313, 'name' => 'Sorong Manoi Timur'],


        ];
        DB::table('villages')->insert($villages);

    }
}
