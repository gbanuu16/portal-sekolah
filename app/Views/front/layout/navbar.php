<nav class="navbar navbar-expand-lg bg-body-tertiary ">
    <div class="container-fluid">

        <a class="navbar-brand" href="#">
            <div class="d-flex flex-row gap-3 align-items-center align-content-center">
                <img src="<?= base_url('img/konfigurasi/logo/' . $konfigurasi['logo']) ?>" alt="Logo" width="60" height="53" class="d-inline-block align-text-top">
                <div class="d-flex flex-column">
                    <h5 class="fw-semibold">SMK BINA TARUNA</h5>
                    <h5 class="fw-semibold">JALAN CAGAK</h5>
                </div>
            </div>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link " aria-current="page" href="<?= base_url('') ?>">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " aria-current="page" href="<?= base_url('home/profil_sekolah') ?>">Profile Sekolah</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('home/berita') ?>">Berita</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('home/kompetensi') ?>">Kompetensi Keahlian</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('home/pengumuman') ?>">Pengumuman</a>
                </li>
            </ul>
        </div>
    </div>
</nav>