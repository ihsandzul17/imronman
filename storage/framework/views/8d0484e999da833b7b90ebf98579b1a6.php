<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Pengaduan</title>
    <link rel="icon" type="images/png" href="images/logo.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
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

        .detail-image {
            width: 100%;
            max-height: 600px;
            object-fit: contain;
            border-radius: 8px;
            margin-bottom: 20px;
        }

    </style>
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
            <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-inline ms-2"> <!-- Added ms-2 class for margin -->
                <?php echo csrf_field(); ?>
            </form>
        </div>
    </nav>

    <div class="container mt-4">
        <div class="row">
            <div class="col-md-12">
                <h1><?php echo e($pengaduan->nama); ?></h1>
                <img src="<?php echo e($pengaduan->gambar ? asset('storage/' . $pengaduan->gambar) : 'https://via.placeholder.com/400'); ?>" alt="<?php echo e($pengaduan->nama); ?>" class="detail-image">
                <p><?php echo e($pengaduan->deskripsi); ?></p>
                <p>Tipe: <?php echo e($pengaduan->type); ?></p>
                <p>Lokasi:
                    <?php echo e(implode(', ', array_filter([
                        $pengaduan->province->name ?? null, 
                        $pengaduan->city->name ?? null, 
                        $pengaduan->district->name ?? null, 
                        $pengaduan->village->name ?? null
                    ]))); ?>

                </p>
                <p>Tanggal Dibuat: <?php echo e($pengaduan->created_at->format('d M Y')); ?></p>
                <a href="/dashboard" class="btn btn-primary">Back</a> <!-- Added Back button -->
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html><?php /**PATH C:\ironman\resources\views\dashboard\detail.blade.php ENDPATH**/ ?>