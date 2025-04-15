<?php

namespace App\Exports;

use App\Models\Pengaduan;
use App\Models\User;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class PengaduanExport implements FromCollection, WithHeadings
{
    protected $selectedDate;

    public function __construct($selectedDate = null)
    {
        $this->selectedDate = $selectedDate;
    }

    public function collection()
    {
        $query = Pengaduan::with(['user', 'province', 'city', 'district', 'village']);

        if ($this->selectedDate) {
            $query->whereDate('created_at', $this->selectedDate);
        }

        return $query->get()->map(function ($pengaduan) {
            return [
                'id' => $pengaduan->id,
                'email' => $pengaduan->user->email ?? 'N/A',
                'tanggal_dilaporkan' => $pengaduan->created_at,
                'deskripsi' => $pengaduan->deskripsi,
                'gambar' => $pengaduan->gambar ? asset('storage/' . $pengaduan->gambar) : 'N/A',
                'lokasi' => implode(', ', [
                    $pengaduan->province->name ?? 'N/A',
                    $pengaduan->city->name ?? 'N/A',
                    $pengaduan->district->name ?? 'N/A',
                    $pengaduan->village->name ?? 'N/A',
                ]),
                'jumlah_vote' => $pengaduan->votes,
                'status_pengaduan' => $pengaduan->status,
                'progres_pengaduan' => $pengaduan->status,
                'staff_terkait' => $this->getStaffRelated($pengaduan),
            ];
        });
    }

    public function headings(): array
    {
        return [
            'ID',
            'Email Pelapor',
            'Tanggal Dilaporkan',
            'Deskripsi',
            'URL Gambar',
            'Lokasi',
            'Jumlah Vote',
            'Status Pengaduan',
            'Progres Pengaduan',
            'Staff Terkait',
        ];
    }

    private function getStaffRelated($pengaduan)
    {
        if ($pengaduan->last_action_by) {
            $staff = User::find($pengaduan->last_action_by);
            return $staff ? $staff->name : 'N/A';
        }
    
        return 'N/A';
    }
}