<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
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
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand" href="/dashboard"><img src="/images/logo-tulisan.png" alt=""></a>
            <h6>Selamat Datang, {{ auth()->user()->name }}</h6>
            <img src="{{ auth()->user()->image ? asset('storage/' . auth()->user()->image) : 'https://via.placeholder.com/400' }}" alt="Foto Profil">
            <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#laporanModal">Laporkan</button>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-inline ms-2">
                @csrf
                <button type="submit" class="btn btn-danger"><i class="bi bi-box-arrow-right"></i></button>
            </form>
        </div>
    </nav>

    <div class="container mt-4">
        @yield('content')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
