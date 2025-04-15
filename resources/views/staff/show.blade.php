<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detail Pengaduan</title>
    <link rel="icon" type="images/png" href="images/logo.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script> <!-- Include SweetAlert -->
</head>
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f8f9fa;
    }
    .navbar {
        background: linear-gradient(45deg,rgb(204, 0, 0),rgb(74, 0, 194));
        padding: 15px 20px;
        box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
    }
    .navbar-brand {
        font-size: 22px;
        font-weight: bold;
        color: #ffffff !important;
    }
    .navbar h6 {
        margin-left: auto;
        font-size: 18px;
        color: #ffffff;
        font-weight: 500;
        margin-right: 15px; /* Added margin-right for spacing */
    }
    .navbar .btn {
        margin-left: 10px; /* Added margin-left for spacing */
    }
    .container {
        margin-top: 20px;
    }
    .detail-image {
        width: 100%;
        max-height: 600px;
        object-fit: contain;
        border-radius: 8px;
        margin-bottom: 20px;
    }
</style>
<body>

@if(auth()->user()->role !== 'staff')
<script>
    window.location.href = "{{ url('/errors/404') }}";
</script>
@endif
<nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
        <a class="navbar-brand" href="/staff">Halaman Staff</a>
        <div class="d-flex align-items-center ms-auto"> <!-- Added d-flex and align-items-center classes -->
            <h6>Selamat Datang, {{ auth()->user()->name }}</h6>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-inline"> <!-- Removed ms-2 class -->
                @csrf
            </form>
        </div>
    </div>
</nav>

<div class="container mt-4">
    <div class="row">
        <div class="col-md-12">
            <h1>{{ $pengaduan->nama }}</h1>
            <img src="{{ $pengaduan->gambar ? asset('storage/' . $pengaduan->gambar) : 'https://via.placeholder.com/400' }}" alt="{{ $pengaduan->nama }}" class="detail-image">
            <p>{{ $pengaduan->deskripsi }}</p>
            <p>Tipe: {{ $pengaduan->type }}</p>
            <p>Lokasi:
                {{ implode(', ', array_filter([
                    $pengaduan->province->name ?? null, 
                    $pengaduan->city->name ?? null, 
                    $pengaduan->district->name ?? null, 
                    $pengaduan->village->name ?? null
                ])) }}
            </p>
            <p class="card-text">Tanggal dibuat: {{ \Carbon\Carbon::parse($pengaduan->created_at)->format('d M Y H:i:s') }} WIB</p>
            @if($pengaduan->status == 'done' && $pengaduan->completed_at)
                <p class="card-text">Tanggal selesai: {{ \Carbon\Carbon::parse($pengaduan->completed_at)->format('d M Y H:i:s') }} WIB</p>
            @else
                <p class="card-text">Tanggal selesai: Belum tersedia</p>
            @endif                <p>Status: {{ $pengaduan->status }}</p>
            <a href="/staff" class="btn btn-primary">back</a>
            
          <!-- Tombol Tindak Lanjut dan Selesai -->
            @if($pengaduan->status === 'pending')
            <button id="tindak-lanjut" class="btn btn-success" onclick="updateStatus('in_progress')">Tindak Lanjut</button>
            <button id="selesai" class="btn btn-warning" style="display:none;" onclick="updateStatus('done')">Selesai</button>
            @elseif($pengaduan->status === 'in_progress')
            <button id="tindak-lanjut" class="btn btn-success" style="display:none;">Tindak Lanjut</button>
            <button id="selesai" class="btn btn-success" onclick="updateStatus('done')">Selesai</button>
            @endif

           <!-- Tombol Tolak -->
            @if($pengaduan->status !== 'done')
            <button id="tolak" class="btn btn-danger" onclick="updateStatus('rejected')">Tolak</button>
            @endif
        </div>
    </div>
</div>


<script>
   function updateStatus(status) {
    const pengaduanId = {{ $pengaduan->id }};
    const url = "{{ route('pengaduan.updateStatus', ['id' => $pengaduan->id]) }}";

    Swal.fire({
        title: 'Konfirmasi',
        text: 'Apakah Anda yakin ingin mengubah status?',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonText: 'Ya',
        cancelButtonText: 'Tidak'
    }).then((result) => {
        if (result.isConfirmed) {
            fetch(url, {
                method: 'PUT',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                body: JSON.stringify({ status: status })
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    Swal.fire({
                        icon: 'success',
                        title: 'Berhasil',
                        text: 'Status berhasil diubah!',
                    }).then(() => {
                        location.reload();
                    });
                } else {
                    Swal.fire({
                        icon: 'error',
                        title: 'Gagal',
                        text: 'Gagal mengubah status.',
                    });
                }
            })
            .catch(error => {
                console.error('Error:', error);
                Swal.fire({
                    icon: 'error',
                    title: 'Kesalahan',
                    text: 'Terjadi kesalahan saat mengubah status.',
                });
            });
        }
    });
}
</script>
</body>
</html>
