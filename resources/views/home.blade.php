<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Landing Page</title>
    <link rel="icon" type="images/png" href="images/logo.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: url('/images/bc-landing.jpg') no-repeat center center fixed;
            background-size: cover;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            text-align: center;
            backdrop-filter: brightness(40%);
        }
        .overlay {
            background: rgba(0, 0, 0, 0.7);
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.3);
        }
        h1 {
            font-size: 2.5rem;
            font-weight: bold;
            margin-bottom: 20px;
        }
        .btn-custom {
            font-size: 1.2rem;
            padding: 10px 30px;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <div class="overlay">
        <h1>Selamat Datang di Website Pengaduan Masyarakat</h1>
        <p class="lead">Laporkan keluhan Anda dengan mudah dan cepat.</p>
        <a href="{{ route('login') }}" class="btn btn-danger btn-custom mt-3">Login</a>
    </div>
</body>
</html>
