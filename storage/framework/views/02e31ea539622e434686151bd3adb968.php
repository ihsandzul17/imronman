<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengaduan Masyarakat</title>
    <link rel="icon" type="images/png" href="images/logo.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.8.1/font/bootstrap-icons.min.css" rel="stylesheet"> <!-- Added Bootstrap Icons CSS -->
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
        }

        .navbar {
            background: linear-gradient(45deg, rgb(204, 0, 0), rgb(74, 0, 194));
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
        }

        .navbar img {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            object-fit: cover;
            margin: 0 15px;
            border: 2px solid #ffffff;
        }

        .btn-danger {
            background-color: #dc3545;
            border-color: #dc3545;
            font-weight: bold;
            transition: all 0.3s ease-in-out;
        }

        .btn-danger:hover {
            background-color: #a71d2a;
            border-color: #a71d2a;
            transform: scale(1.05);
        }

        .container {
            margin-top: 20px;
        }

        .card {
            max-width: 100%;
            margin: 5px;
            padding: 10px;
            flex: 1 1 calc(33.33% - 10px);
            /* Adjusted to fit 3 cards per row */
        }

        .card img {
            width: 100%;
            height: 230px;
            object-fit: cover;
        }
    </style>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>
    <?php if(!auth()->check() || auth()->user()->role === 'admin' || auth()->user()->role === 'staff'): ?>
    <script>
        window.location.href = "<?php echo e(url('/errors/404')); ?>";
    </script>
    <?php endif; ?>
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand" href="/dashboard">Pengaduan Masyarakat</a>
            <h6>Selamat Datang, <?php echo e(auth()->user()->name); ?></h6>
            <img src="<?php echo e(auth()->user()->image ? asset('storage/' . auth()->user()->image) : 'https://via.placeholder.com/400'); ?>" alt="Foto Profil">
            <button class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#laporanModal">Laporkan <i class="bi bi-flag"></i></button>
            <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-inline ms-2"> <!-- Added ms-2 class for margin -->
                <?php echo csrf_field(); ?>
                <!-- <button type="submit" class="btn btn-danger"><i class="bi bi-box-arrow-right"></i></button> -->
                <div class="btn-group dropstart">
                    <button class="btn btn-light dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi bi-list"></i>
                    </button>
                    <ul class="dropdown-menu">
                        <li>
                            <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#userProfile">
                                <i class="bi bi-person"></i> Profile
                            </a>
                        </li>
                        <li>
                            <form action="<?php echo e(route('logout')); ?>" method="POST">
                                <?php echo csrf_field(); ?>
                                <button type="submit" class="dropdown-item">
                                    <i class="bi bi-box-arrow-right"></i> Logout
                                </button>
                            </form>
                        </li>
                    </ul>

                    <div class="modal fade" id="userProfile" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content" style="max-width: 400px; margin: auto;">
                                <div class="modal-body text-center p-5">
                                    <!-- Profile Photo Section -->
                                    <div class="position-relative mx-auto" style="width: 120px; height: 120px;">
                                        <?php if(auth()->user()->image): ?>
                                        <img src="<?php echo e(asset('storage/' . auth()->user()->image)); ?>"
                                            class="rounded-circle img-thumbnail w-100 h-100"
                                            style="object-fit: cover;">
                                        <?php else: ?>
                                        <div class="rounded-circle bg-secondary d-flex align-items-center justify-content-center w-100 h-100">
                                            <i class="bi bi-person-fill text-white" style="font-size: 3rem;"></i>
                                        </div>
                                        <?php endif; ?>
                                    </div>

                                    <!-- User Info -->
                                    <div class="mt-4">
                                        <h5 class="mb-1"><?php echo e(auth()->user()->name); ?></h5>
                                        <p class="text-muted mb-3"><?php echo e(auth()->user()->email); ?></p>
                                        <p class="text-muted mb-3"><?php echo e(auth()->user()->no_hp); ?></p>

                                        <!-- Additional Info -->
                                        <div class="d-flex justify-content-center gap-4">
                                            <div>
                                                <div class="fw-bold">Role</div>
                                                <div class="text-muted small"><?php echo e(auth()->user()->role ?? 'Member'); ?></div>
                                            </div>
                                            <div>
                                                <div class="fw-bold">Joined</div>
                                                <div class="text-muted small"><?php echo e(auth()->user()->created_at->format('d M Y')); ?></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer justify-content-center border-top-0">
                                    <button type="button" class="btn btn-outline-dark px-4" data-bs-dismiss="modal">
                                        Close
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </nav>

    <div class="container">
        <form id="filter-form" class="mb-4">
            <div class="row">
                <div class="col-md-4">
                    <select id="filter-province" class="form-control" name="province_id" required>
                        <option value="">Pilih Provinsi</option>
                        <option value="all">Semua Wilayah</option> <!-- Added option for Semua Wilayah -->
                        <?php $__currentLoopData = $provinces; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $province): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($province->id); ?>"><?php echo e($province->name); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>
                <div class="col-md-2">
                    <button type="submit" class="btn btn-primary">Filter</button>
                </div>
            </div>
        </form>
        <?php if(session('success')): ?>
        <script>
            document.addEventListener("DOMContentLoaded", function() {
                Swal.fire({
                    icon: 'success',
                    title: 'Success',
                    text: '<?php echo e(session('
                    success ')); ?>',
                });
            });
        </script>
        <?php endif; ?>

        <?php if(session('login_success')): ?>
        <script>
            document.addEventListener("DOMContentLoaded", function() {
                Swal.fire({
                    icon: 'success',
                    title: 'Login Berhasil',
                    text: '<?php echo e(session('
                    login_success ')); ?>',
                });
            });
        </script>
        <?php endif; ?>

        <div class="row d-flex flex-wrap" id="pengaduan-container">
            <?php $__currentLoopData = $pengaduan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-lg-4 col-md-6 col-12 d-flex"> <!-- Adjusted col-lg to 4 to fit 3 cards per row -->
                <div class="card">
                    <img src="<?php echo e($p->gambar ? asset('storage/' . $p->gambar) : 'https://via.placeholder.com/400'); ?>" class="card-img-top" alt="Gambar Pengaduan">
                    <div class="card-body">
                        <h6 class="card-title"><b>Nama: <?php echo e($p->nama); ?></b></h6>
                        <p class="card-text"> Deskripsi: <?php echo e(Str::limit($p->deskripsi, 30, '...')); ?></p>
                        <p class="card-text">Tipe: <?php echo e($p->type); ?></p>

                        <p class="card-text">Lokasi:
                            <?php echo e(implode(', ', array_filter([
                                $p->province->name ?? null, 
                                $p->city->name ?? null, 
                                $p->district->name ?? null, 
                                $p->village->name ?? null
                            ]))); ?>

                        </p>
                        <p class="card-text">Tanggal dibuat: <?php echo e(\Carbon\Carbon::parse($p->created_at)->format('d M Y H:i:s')); ?> WIB</p>
                        <?php if($p->status == 'done' && $p->completed_at): ?>
                        <p class="card-text">Tanggal selesai: <?php echo e(\Carbon\Carbon::parse($p->completed_at)->format('d M Y H:i:s')); ?> WIB</p>
                        <?php else: ?>
                        <p class="card-text">Tanggal selesai: Belum tersedia</p>
                        <?php endif; ?> <p class="card-text">
                            Status:
                            <span class="badge 
                                <?php echo e($p->status == 'pending' ? 'bg-warning' : 
                                   ($p->status == 'done' ? 'bg-success' : 
                                   ($p->status == 'in_progress' ? 'bg-primary' : 'bg-danger'))); ?>">
                                <?php echo e($p->status); ?>

                            </span>
                        </p>
                        <div class="d-flex justify-content-between align-items-center">
                            <a href="<?php echo e(route('dashboard.detail', $p->id)); ?>" class="btn btn-primary detail-btn" data-id="<?php echo e($p->id); ?>">Selengkapnya</a> <!-- Added data-id attribute -->
                            <div class="d-flex align-items-center">
                                <button class="btn btn-outline-danger vote-btn" data-id="<?php echo e($p->id); ?>">
                                    <i class="bi bi-heart"></i> Vote <span class="vote-count"><?php echo e($p->votes); ?></span>
                                </button>
                                <div class="ms-2 d-flex align-items-center">
                                    <i class="bi bi-eye"></i> <span class="view-count"><?php echo e($p->views); ?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>

    </div>

    <!-- Modal Form Pengaduan -->
    <div class="modal fade" id="laporanModal" tabindex="-1" aria-labelledby="laporanModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="laporanModalLabel">Laporkan Pengaduan</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="<?php echo e(route('pengaduan.store')); ?>" method="POST" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <input type="hidden" name="user_id" value="<?php echo e(auth()->user()->id); ?>"> <!-- Tambahkan input hidden untuk user_id -->
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama</label>
                            <input type="text" class="form-control" name="nama" required>
                        </div>
                        <select id="province" class="form-control" name="province_id" required>
                            <option value="">Pilih Provinsi</option>
                            <?php $__currentLoopData = $provinces; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $province): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($province->id); ?>"><?php echo e($province->name); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>

                        <select id="city" class="form-control" name="city_id" disabled required>
                            <option value="">Pilih Kota/Kabupaten</option>
                        </select>

                        <select id="district" class="form-control" name="district_id" disabled required>
                            <option value="">Pilih Kecamatan</option>
                        </select>

                        <select id="village" class="form-control" name="village_id" disabled required>
                            <option value="">Pilih Desa/Kelurahan</option>
                        </select>

                        <select id="type" class="form-control" name="type" required>
                            <option value="">Pilih Tipe</option>
                            <option value="Kejahatan">Kejahatan</option>
                            <option value="Pembangunan">Pembangunan</option>
                            <option value="Sosial">Sosial</option>
                        </select>

                        <div class="mb-3">
                            <label for="deskripsi" class="form-label">Deskripsi Pengaduan</label>
                            <textarea class="form-control" name="deskripsi" rows="3" required></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="gambar" class="form-label">Upload Gambar</label>
                            <input type="file" class="form-control" name="gambar">
                        </div>
                        <button type="submit" class="btn btn-primary">Kirim Pengaduan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            let province = document.getElementById("province");
            let city = document.getElementById("city");
            let district = document.getElementById("district");
            let village = document.getElementById("village");
            let viewedComplaints = []; // Array to track viewed complaint IDs


            province.addEventListener("change", function() {
                fetch(`/cities/${this.value}`)
                    .then(response => response.json())
                    .then(data => {
                        city.innerHTML = '<option value="">Pilih Kota/Kabupaten</option>';
                        data.forEach(cityData => {
                            city.innerHTML += `<option value="${cityData.id}">${cityData.name}</option>`;
                        });
                        city.disabled = false;
                        district.innerHTML = '<option value="">Pilih Kecamatan</option>';
                        village.innerHTML = '<option value="">Pilih Desa/Kelurahan</option>';
                        district.disabled = true;
                        village.disabled = true;
                    });
            });

            city.addEventListener("change", function() {
                fetch(`/districts/${this.value}`)
                    .then(response => response.json())
                    .then(data => {
                        district.innerHTML = '<option value="">Pilih Kecamatan</option>';
                        data.forEach(districtData => {
                            district.innerHTML += `<option value="${districtData.id}">${districtData.name}</option>`;
                        });
                        district.disabled = false;
                        village.innerHTML = '<option value="">Pilih Desa/Kelurahan</option>';
                        village.disabled = true;
                    });
            });

            district.addEventListener("change", function() {
                fetch(`/villages/${this.value}`)
                    .then(response => response.json())
                    .then(data => {
                        village.innerHTML = '<option value="">Pilih Desa/Kelurahan</option>';
                        data.forEach(villageData => {
                            village.innerHTML += `<option value="${villageData.id}">${villageData.name}</option>`;
                        });
                        village.disabled = false;
                        document.getElementById("type").disabled = false;
                    });
            });

            document.getElementById("filter-form").addEventListener("submit", function(e) {
                e.preventDefault();
                let provinceId = document.getElementById("filter-province").value;

                let url = provinceId === 'all' ? '/dashboard/filter' : `/dashboard/filter?province_id=${provinceId}`;

                fetch(url)
                    .then(response => response.json())
                    .then(data => {
                        let container = document.getElementById("pengaduan-container");
                        container.innerHTML = '';
                        if (data.length > 0) {
                            data.forEach(p => {
                                container.innerHTML += `
                                    <div class="col-lg-4 col-md-6 col-12 d-flex">
                                        <div class="card">
                                            <img src="${p.gambar ? '/storage/' + p.gambar : 'https://via.placeholder.com/400'}" class="card-img-top" alt="Gambar Pengaduan">
                                            <div class="card-body">
                                                <h6 class="card-title"><b>Nama: ${p.nama}</b></h6>
                                                <p class="card-text"> Deskripsi: ${p.deskripsi.substring(0, 30)}...</p>
                                                <p class="card-text">Tipe: ${p.type}</p>
                                                <p class="card-text">Lokasi: ${p.province.name}, ${p.city.name}, ${p.district.name}, ${p.village.name}</p>
                                                <p class="card-text">Tanggal dibuat: ${new Date(p.created_at).toLocaleDateString('id-ID', { day: '2-digit', month: 'short', year: 'numeric' })}</p>
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <a href="/dashboard/detail/${p.id}" class="btn btn-primary detail-btn" data-id="${p.id}">Selengkapnya</a> <!-- Added data-id attribute -->
                                                    <div class="d-flex align-items-center">
                                                        <button class="btn btn-outline-danger vote-btn" data-id="${p.id}">
                                                            <i class="bi bi-heart"></i> Vote <span class="vote-count">${p.votes}</span>
                                                        </button>
                                                        <div class="ms-2 d-flex align-items-center">
                                                            <i class="bi bi-eye"></i> <span class="view-count">${p.views}</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                `;
                            });
                        } else {
                            container.innerHTML = '<p class="text-center">Tidak ada pengaduan untuk provinsi yang dipilih.</p>';
                        }
                    })
                    .catch(error => {
                        console.error('Error fetching data:', error);
                        container.innerHTML = '<p class="text-center text-danger">Terjadi kesalahan saat mengambil data.</p>';
                    });
            });

            document.querySelectorAll('.vote-btn').forEach(button => {
                button.addEventListener('click', function() {
                    let pengaduanId = this.getAttribute('data-id');
                    let voteButton = this;
                    fetch(`/vote/${pengaduanId}`, {
                            method: 'POST',
                            headers: {
                                'Content-Type': 'application/json',
                                'X-CSRF-TOKEN': '<?php echo e(csrf_token()); ?>'
                            }
                        })
                        .then(response => response.json())
                        .then(data => {
                            if (data.success) {
                                let voteCountSpan = voteButton.querySelector('.vote-count');
                                voteCountSpan.textContent = data.votes;
                                voteButton.disabled = true; // Disable the button after voting
                            } else {
                                Swal.fire({
                                    icon: 'error',
                                    title: 'Error',
                                    text: data.message || 'Failed to vote. Please try again.',
                                });
                            }
                        })
                        .catch(error => {
                            console.error('Error:', error);
                            Swal.fire({
                                icon: 'error',
                                title: 'Error',
                                text: 'An error occurred. Please try again.',
                            });
                        });
                });
            });

            document.querySelectorAll('.detail-btn').forEach(button => {
                button.addEventListener('click', function(e) {
                    e.preventDefault(); // Prevent default link behavior
                    let pengaduanId = this.getAttribute('data-id');
                    let detailUrl = `/dashboard/detail/${pengaduanId}`; // Set the URL to detail.blade.php

                    if (viewedComplaints.includes(pengaduanId)) {
                        // Show SweetAlert confirmation
                        Swal.fire({
                            title: 'Anda sudah melihat pengaduan ini, lihat lagi?',
                            icon: 'warning',
                            showCancelButton: true,
                            confirmButtonText: 'Ya',
                            cancelButtonText: 'Tidak'
                        }).then((result) => {
                            if (result.isConfirmed) {
                                // Redirect to detail page
                                window.location.href = detailUrl; // Redirect to the specific detail page
                            }
                        });
                    } else {
                        // Proceed to detail page and mark as viewed
                        viewedComplaints.push(pengaduanId);
                        fetch(`/view/${pengaduanId}`, {
                                method: 'POST',
                                headers: {
                                    'Content-Type': 'application/json',
                                    'X-CSRF-TOKEN': '<?php echo e(csrf_token()); ?>'
                                }
                            })
                            .then(response => response.json())
                            .then(data => {
                                if (data.success) {
                                    let viewCountSpan = this.parentElement.querySelector('.view-count');
                                    viewCountSpan.textContent = data.views;
                                    window.location.href = detailUrl; // Redirect to the specific detail page
                                }
                            })
                            .catch(error => console.error('Error:', error));
                    }
                });
            });
        });
    </script>
</body>

</html><?php /**PATH C:\ironman\resources\views\dashboard\index.blade.php ENDPATH**/ ?>