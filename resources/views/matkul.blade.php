<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

        <style>
            .table-custom {
                background-color: #333;
                color: #fff;
            }
            .table-custom thead th {
                background-color: #555;
                color: #fff;
            }
            .table-custom tbody tr:nth-child(even) {
                background-color: #444;
            }
            .table-custom tbody tr:nth-child(odd) {
                background-color: #333;
            }
            .table-custom tbody td {
                border-color: #666;
            }
            .btn-custom {
                margin: 5px;
            }
        </style>
    </head>
    <body class="page" style="padding-top: 100pt">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 text-center mb-4">
                    <h2>Transkrip Mata Kuliah 3 Semester Terakhir</h2>
                    <p><strong>Nama Mahasiswa: </strong>Davin Lim</p>
                    <p><strong>Student ID: </strong>03081220036</p>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <table class="table table-bordered table-custom">
                        <thead>
                            <tr>
                                <th>Semester</th>
                                <th>Mata Kuliah</th>
                                <th>SKS</th>
                                <th>Nilai</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Semester 1 -->
                            <tr>
                                <td rowspan="8">Semester Ganjil 2023/2024</td>
                                <td>ETIKA</td>
                                <td>4</td>
                                <td>A-</td>
                            </tr>
                            <tr>
                                <td>PANCASILA</td>
                                <td>2</td>
                                <td>B+</td>
                            </tr>
                            <tr>
                                <td>LEADERSHIP AND ENTREPRENEURSHIP</td>
                                <td>2</td>
                                <td>A-</td>
                            </tr>
                            <tr>
                                <td>TECH SKILLS</td>
                                <td>2</td>
                                <td>B+</td>
                            </tr>
                            <tr>
                                <td>MANAJEMEN SISTEM INFORMASI</td>
                                <td>3</td>
                                <td>A</td>
                            </tr>
                            <tr>
                                <td>ANALISIS DAN DESAIN SISTEM</td>
                                <td>3</td>
                                <td>A</td>
                            </tr>
                            <tr>
                                <td>MANAJEMEN PROYEK SIS INFO</td>
                                <td>3</td>
                                <td>B+</td>
                            </tr>
                            <tr>
                                <td>DASAR TEKNOLOGI WEB</td>
                                <td>2</td>
                                <td>A-</td>
                            </tr>

                            <!-- Semester 2 -->
                            <tr>
                                <td rowspan="7">Semester Genap 2023/2024</td>
                                <td>KEWARGANEGARAAN</td>
                                <td>2</td>
                                <td>A</td>
                            </tr>
                            <tr>
                                <td>PENULISAN KARYA ILMIAH</td>
                                <td>2</td>
                                <td>B+</td>
                            </tr>
                            <tr>
                                <td>E-BUSINESS & E-COMMERCE</td>
                                <td>4</td>
                                <td>A</td>
                            </tr>
                            <tr>
                                <td>PERANCANGAN & PEMROGRAMAN WEB</td>
                                <td>3</td>
                                <td>B</td>
                            </tr>
                            <tr>
                                <td>PEMODELAN & ANALISI PROSES BIS</td>
                                <td>4</td>
                                <td>A</td>
                            </tr>
                            <tr>
                                <td>TATA KELOLA TI</td>
                                <td>3</td>
                                <td>B+</td>
                            </tr>
                            <tr>
                                <td>KEAMANAN TI & MANAJEMEN RISIKO</td>
                                <td>3</td>
                                <td>A-</td>
                            </tr>

                            <!-- Semester 3 -->
                            <tr>
                                <td rowspan="6">Semester Akselerasi 2023/2024</td>
                                <td>JARINGAN DAN KEAMANAN KOMPUTER</td>
                                <td>3</td>
                                <td>A</td>
                            </tr>
                            <tr>
                                <td>ARSITEKTUR PERUSAHAAN</td>
                                <td>3</td>
                                <td>A-</td>
                            </tr>
                            <tr>
                                <td>MULTIMEDIA AND THE WEB</td>
                                <td>3</td>
                                <td>B+</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="text-center mt-4">
                <a href="http://127.0.0.1:8000/Profile" class="btn btn-secondary btn-custom">Back to Profile</a>
                <a href="http://127.0.0.1:8000/Home" class="btn btn-primary btn-custom">Home</a>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body>
</html>
