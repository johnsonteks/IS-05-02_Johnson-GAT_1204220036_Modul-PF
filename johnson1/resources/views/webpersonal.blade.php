<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    @vite('resources/sass/app.scss')
</head>

<body>
    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg fixed-top text-uppercase navbar bg-dark border-bottom border-body"
        data-bs-theme="dark">
        <div class="container" hero>
            <a class="navbar-brand fw-bold" href="#">JOHNSON</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active px-lg-4" aria-current="page" href="/webpersonal#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-lg-4" href="/webpersonal#hal2">Pengalaman</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-lg-4" href="/webpersonal#hal3">Prestasi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-lg-4" href="/webpersonal#hal4">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    
    <!-- HOME -->
    <div class="container py-5" id="home">
        <div class="row">
            <div class="col-md-6">
                <div class="mt-5">
                </div>
                <h2 class="display-5 mb-3 fw-bold">Hello, <br />I'm Johnson Gerald</h2>
                <p class="fs-5"> A Content Creator and Editor <br></p>
                <p class="fs-5"> Mahasiswa Aktif Telkom University Surabaya Jurusan Sistem Informasi. <br>

                </p>
                </a>
                <button type="button" class="btn btn-outline-dark btn-lg
                mb-3 px-4 py-2">Contact</button>
            </div>
            <div class="col-lg-5">
                <img class="img-fluid" src="{{ asset(Vite::asset('resources/images/JOJORM.png')) }}" alt="image" width="100%">
            </div>
        </div>
    </div>

    <!-- HALAMAN 2 -->
    <div class="bg-light mt-5" id="hal2">
        <div class="container py-5 px-4">
            <h2 class="mb-5 text-center">PENGALAMAN</h2>
            <div class="card-group">
                <div class="card">
                    <img class="card-img-top" src="{{ asset(Vite::asset('resources/images/OSIS.png')) }}" alt="image">
                    <div class="card-body">
                        <h5 class="card-title">OSIS</h5>
                        <p class="card-text">Ketua Divisi Kewirausahaan</p>
                        <p class="card-text"><small class="text-body-secondary">2020-2021</small></p>
                    </div>
                </div>
                <div class="card">
                    <img class="card-img-top" src="{{ asset(Vite::asset('resources/images/INCHER.png')) }}" alt="image">
                    <div class="card-body">
                        <h5 class="card-title">INCHER</h5>
                        <p class="card-text">Bendahara 2</p>
                        <p class="card-text"><small class="text-body-secondary">Agustus-September 2023</small></p>
                    </div>
                </div>
                <div class="card">
                    <img class="card-img-top" src="{{ asset(Vite::asset('resources/images/PKKMB.png')) }}" alt="image">
                    <div class="card-body">
                        <h5 class="card-title">PKKMB</h5>
                        <p class="card-text">Divisi Kafas</p>
                        <p class="card-text"><small class="text-body-secondary">Agustus-September 2023</small></p>
                    </div>
                </div>
                <div class="card">
                    <img class="card-img-top" src="{{ asset(Vite::asset('resources/images/KPPS.png')) }}" alt="image">
                    <div class="card-body">
                        <h5 class="card-title">KPPS</h5>
                        <p class="card-text">SIREKAP 2</p>
                        <p class="card-text"><small class="text-body-secondary">Januari-Februari 2024</small></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- HALAMAN 3 -->
    <div class="" id="hal3">
        <div class="container py-5 px-4">
            <h2 class="mb-5 text-center">PRESTASI</h2>
            <div class="card-group">
                <div class="card">
                    <img class="card-img-bottom" src="{{ asset(Vite::asset('resources/images/36.png')) }}" alt="image">
                    <div class="card-body">
                        <h5 class="card-title">MENGHARUMKAN NAMA SEKOLAH</h5>
                        <p class="card-text">Siswa Berprestasi Dengan Nilai UTBK Tertinggi</p>
                        <p class="card-text"><small class="text-body-secondary">2019</small></p>
                    </div>
                </div>
                <div class="card">
                    <img class="card-img-bottom" src="{{ asset(Vite::asset('resources/images/OLIM.png')) }}" alt="image">
                    <div class="card-body">
                        <h5 class="card-title">OLIMPIADE MATEMATIKA</h5>
                        <p class="card-text">Semifinal Olimpiade Matematika Se-Jawa Timur</p>
                        <p class="card-text"><small class="text-body-secondary">2021</small></p>
                    </div>
                </div>
                <div class="card">
                    <img class="card-img-bottom" src="{{ asset(Vite::asset('resources/images/SNMPTN.png')) }}" alt="image">
                    <div class="card-body">
                        <h5 class="card-title">SNMPTN</h5>
                        <p class="card-text">Nilai Tertinggi Ke-2 Jurusan IPA</p>
                        <p class="card-text"><small class="text-body-secondary">2022/small></p>
                    </div>
                </div>
                <div class="card">
                    <img class="card-img-bottom" src="{{ asset(Vite::asset('resources/images/IPK.png')) }}" alt="image">
                    <div class="card-body">
                        <h5 class="card-title">IPK TERTINGGI</h5>
                        <p class="card-text">IPK 4.0 Semester 1</p>
                        <p class="card-text"><small class="text-body-secondary">2023</small></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--Footer-->
    <div class="bg-black mt-5" id="hal4">
        <div class="container py-5 px-4">
            <p class="text-light text-center">Phone: (61-31) 853 9345; Fax: (62-31) 853 9323 | Email:
                johnsonanderson.teks@gmail.com | Jl. Bungurasih Timur 1/14, Waru, Sidoarjo, Jawa Timur</p>

        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy"
        crossorigin="anonymous"></script>
</body>

</html>