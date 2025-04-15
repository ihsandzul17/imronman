<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - MyApp</title>
    <link rel="icon" type="images/png" href="images/logo.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
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
            color: #333;
            margin-bottom: 20px;
        }

        .form-content form label {
            color: white
        }
    </style>
</head>
<body>
    <div class="image"></div>
    <div class="form-container">
        <div class="form-content">
            <div class="welcome text-white">Halaman Registrasi</div>
            <form method="post" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="image" class="form-label">Post Image</label>
                    <img class="img-preview img-fluid mb-3 col-sm-4" />
                    <input class="form-control @error('image') is-invalid @enderror" type="file" id="image" name="image" onchange="previewImage()">
                </div>
                <div class="input-group mb-3">
                    <input type="text" class="form-control @error('name') is-invalid @enderror" placeholder="Name" id="name" name="name" required value="{{old('name')}}">

                </div>
                <div class="input-group mb-3">
                    <input type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email" id="email" name="email" required value="{{old('email')}}">

                </div>
                <div class="input-group mb-3">
                    <input type="text" class="form-control @error('no_hp') is-invalid @enderror" placeholder="Nomor Telp" id="no_hp" name="no_hp" required value="{{old('no_hp')}}">

                </div>
                <div class="input-group mb-3">
                    <input type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" id="password" name="password" required>

                </div>
                <button type="submit" class="btn btn-danger">Register</button>
                <button class="btn btn-danger"><a href="/login" style="color: white; text-decoration: none;">Back</a></button>
            </form>
        </div>
    </div>
</body>
</html>
