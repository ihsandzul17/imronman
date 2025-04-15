<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - MyApp</title>
    <link rel="icon" type="images/png" href="images/logo.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <style>
        body {
            margin: 0;
            padding: 0;
            display: flex;
            width: 100vw;
            height: 100vh;
        }
        .image {
            flex: 1;
            background: url('../images/logo-tulisan-bawah.png') no-repeat center center/cover;
        }
        .form-container {
            flex: 1;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            background: linear-gradient(135deg,rgb(255, 8, 8),rgb(123, 6, 6));
        }
        .form-content {
            width: 80%;
            max-width: 400px;
        }
        .welcome {
            font-size: 28px;
            font-weight: bold;
            text-align: center;
            color: white;
            margin-bottom: 20px;
        }
        small {
            display: block;
            text-align: center;
            margin-top: 10px;
            color: white;
            font-size: 14px;
        }
    </style>
</head>
<body>
    <div class="image"></div>
    <div class="form-container">
        <div class="form-content">
            <div class="welcome text-white">Halaman Login</div>

            @if(session()->has('loginError'))
                <script>
                    document.addEventListener("DOMContentLoaded", function() {
                        Swal.fire({
                            icon: 'error',
                            title: 'Login Error',
                            text: '{{ session('loginError') }}',
                        });
                    });
                </script>
            @endif

            @if(session()->has('success'))
                <script>
                    document.addEventListener("DOMContentLoaded", function() {
                        Swal.fire({
                            icon: 'success',
                            title: 'Success',
                            text: '{{ session('success') }}',
                        });
                    });
                </script>
            @endif

            <form action="/login" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="email" class="form-label text-white">Email</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label text-white">Password</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                </div>
                <button type="submit" class="btn btn-danger w-100">Login</button>
            </form>

            <small>Not Registered? <a href="/register">Register</a></small>
        </div>
    </div>
</body>
</html>
