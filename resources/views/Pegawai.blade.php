<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Profil Pegawai</title>
    <!-- Bootstrap 5 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(135deg, #6dd5fa, #2980b9);
            min-height: 100vh;
            color: #fff;
            font-family: 'Segoe UI', sans-serif;
        }
        .container {
            max-width: 800px;
            margin-top: 40px;
        }
        .card {
            background-color: rgba(255,255,255,0.9);
            color: #333;
            border-radius: 15px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.2);
        }
        .card-title {
            font-size: 1.5rem;
            font-weight: bold;
            color: #2980b9;
        }
        .hobby-list li {
            background: #2980b9;
            color: #fff;
            padding: 8px 12px;
            border-radius: 8px;
            margin-bottom: 6px;
            display: inline-block;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="text-center mb-4">
            <h1 class="display-5 fw-bold">Profil Pegawai</h1>
            <p class="lead">Data lengkap pegawai dan progres studinya</p>
        </div>

        <div class="card mb-3 p-4">
            <h5 class="card-title">Nama</h5>
            <p class="card-text fs-5">{{ $name }}</p>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="card mb-3 p-4">
                    <h5 class="card-title">Umur</h5>
                    <p class="card-text fs-5">{{ $my_age }} tahun</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card mb-3 p-4">
                    <h5 class="card-title">Semester Saat Ini</h5>
                    <p class="card-text fs-5">{{ $current_semester }}</p>
                </div>
            </div>
        </div>

        <div class="card mb-3 p-4">
            <h5 class="card-title">Pesan Semester</h5>
            <p class="card-text fs-5">{{ $semester_message }}</p>
        </div>

        <div class="card mb-3 p-4">
            <h5 class="card-title">Hobi</h5>
            <ul class="hobby-list list-unstyled">
                @foreach($hobbies as $hobi)
                    <li>{{ $hobi }}</li>
                @endforeach
            </ul>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="card mb-3 p-4">
                    <h5 class="card-title">Tanggal Harus Wisuda</h5>
                    <p class="card-text fs-5">{{ $tgl_harus_wisuda }}</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card mb-3 p-4">
                    <h5 class="card-title">Jarak Hari ke Wisuda</h5>
                    <p class="card-text fs-5">{{ $time_to_study_left }} hari</p>
                </div>
            </div>
        </div>

        <div class="card mb-3 p-4">
            <h5 class="card-title">Cita-cita</h5>
            <p class="card-text fs-5">{{ $future_goal }}</p>
        </div>

        <div class="text-center mt-4">
            <a href="/" class="btn btn-light btn-lg shadow">Kembali ke Beranda</a>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
