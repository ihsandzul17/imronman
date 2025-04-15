<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengaduan Masyarakat</title>
    <link rel="icon" type="images/png" href="images/logo.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.8.1/font/bootstrap-icons.min.css" rel="stylesheet">
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
            margin-right: 15px;
        }

        .navbar .btn {
            margin-left: 10px;
        }
    </style>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
    @if(auth()->user()->role !== 'staff')
        <script>
            window.location.href = "{{ url('/errors/404') }}";
        </script>
    @endif
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand" href="/staff">Halaman Staff</a>
            <div class="d-flex align-items-center ms-auto">
                <h6>Selamat Datang, {{ auth()->user()->name }}</h6>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-inline">
                    @csrf
                    <button type="submit" class="btn btn-danger"><i class="bi bi-box-arrow-right"></i></button>
                </form>
            </div>
        </div>
    </nav>

    <div class="container mt-4">
        <!-- Tombol Export dengan Modal -->
        <button type="button" class="btn btn-success mb-3" data-bs-toggle="modal" data-bs-target="#exportModal">
            Export to Excel
        </button>

        <!-- Tabel Data Pengaduan -->
        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Pelapor</th>
                        <th>Lokasi & Tanggal</th>
                        <th>Deskripsi</th>
                        <th>Jumlah Vote</th>
                        <th>Jumlah View</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($pengaduan as $p)
                        @if($p->relationLoaded('user'))
                            <tr>
                                <td>
                                    @if($p->user && $p->user->image)
                                        <img src="{{ asset('storage/' . $p->user->image) }}" alt="Profile Image" class="img-thumbnail" style="width: 50px; height: 50px;">
                                    @else
                                        <img src="{{ asset('images/default-profile.png') }}" alt="Default Profile Image" class="img-thumbnail" style="width: 50px; height: 50px;">
                                    @endif
                                    {{ $p->user->name ?? 'Unknown User' }}
                                </td>
                                <td>
                                    {{ implode(', ', array_filter([
                                        $p->province->name ?? null, 
                                        $p->city->name ?? null, 
                                        $p->district->name ?? null, 
                                        $p->village->name ?? null
                                    ])) }}
                                    <br>
                                    {{ $p->created_at->format('d M Y') }}
                                </td>
                                <td>{{ Str::limit($p->deskripsi, 20, '...') }}</td>
                                <td>{{ $p->votes }}</td>
                                <td>{{ $p->views }}</td>
                                <td>
                                    <a href="{{ route('staff.show', $p->id) }}" class="btn btn-primary detail-btn" data-id="{{ $p->id }}">Selengkapnya</a>
                                </td>
                            </tr>
                        @endif
                    @endforeach
                </tbody>
            </table>
        </div>

        <!-- Modal for Export Options -->
        <div class="modal fade" id="exportModal" tabindex="-1" aria-labelledby="exportModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exportModalLabel">Export Data</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form id="exportForm" action="{{ route('staff.export') }}" method="GET">
                            <div class="mb-3">
                                <label for="exportType" class="form-label">Pilih Jenis Export:</label>
                                <select class="form-select" id="exportType" name="exportType">
                                    <option value="all">Semua Data</option>
                                    <option value="date">Berdasarkan Tanggal</option>
                                </select>
                            </div>
                            <div class="mb-3" id="datePicker" style="display: none;">
                                <label for="selectedDate" class="form-label">Pilih Tanggal:</label>
                                <input type="date" class="form-control" id="selectedDate" name="selectedDate">
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary" id="exportButton">Export</button>
                    </div>
                </div>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
        <script>
            // Tampilkan atau sembunyikan input tanggal berdasarkan pilihan export
            document.getElementById('exportType').addEventListener('change', function() {
                var datePicker = document.getElementById('datePicker');
                if (this.value === 'date') {
                    datePicker.style.display = 'block';
                } else {
                    datePicker.style.display = 'none';
                }
            });

            // Handle tombol export
            document.getElementById('exportButton').addEventListener('click', function() {
                var exportType = document.getElementById('exportType').value;
                var form = document.getElementById('exportForm');
                if (exportType === 'date') {
                    var selectedDate = document.getElementById('selectedDate').value;
                    if (!selectedDate) {
                        alert('Silakan pilih tanggal.');
                        return;
                    }
                    form.action = "{{ route('staff.export') }}?exportType=date&selectedDate=" + selectedDate;
                } else {
                    form.action = "{{ route('staff.export') }}?exportType=all";
                }
                form.submit();
            });

            // SweetAlert untuk notifikasi login success
            @if(session('login_success'))
                Swal.fire({
                    icon: 'success',
                    title: 'Success',
                    text: '{{ session('login_success') }}',
                });
            @endif
        </script>
    </body>
</html>
