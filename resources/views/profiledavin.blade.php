<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel Profile</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

        <style>
            .btn-custom {
                margin: 10px;
                padding: 10px 20px;
                font-size: 16px;
            }
            .container {
                padding: 20px;
            }
        </style>
    </head>
    <body style="padding-top: 100pt;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header text-center">
                            <h2>Profile Page</h2>
                        </div>
                        <div class="card-body">
                            <p><strong>Nama: </strong>Davin Lim</p>
                            <p><strong>Jurusan: </strong>Sistem Informasi</p>
                            <p><strong>Fakultas: </strong>Ilmu Komputer</p>
                            <p><strong>Hobi: </strong>Trading</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center mt-4">
                <div class="col-md-6 text-center">
                    <a href="http://127.0.0.1:8000/Matkul" class="btn btn-primary btn-custom">Go to Subject</a>
                    <a href="http://127.0.0.1:8000/Home" class="btn btn-secondary btn-custom">Back</a>
                </div>
            </div>
        </div>

        <!-- Bootstrap JS -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body>
</html>
