<div class="" style="background-color: #FFF600;">
    <footer class="container p-5">
        <div class="row">
            <div class="col-6 col-md-6 mb-3 d-flex flex-row align-items-center  ">
                <img src="<?= base_url('img/konfigurasi/logo/' . $konfigurasi['logo']) ?>" alt="" width="30%">
                <div class="d-flex flex-column text-center">
                    <h1 class="fw-semibold">SMK BINA TARUNA</h1>
                    <h1 class="fw-semibold">JALAN CAGAK</h1>
                </div>
            </div>

            <div class="col-md-5 offset-md-1 mb-3">
                <h4 class="fw-bold">Alamat</h4>
                <hr class="border-bottom">
                <div class="my-3"><i class="fa-solid fa-location-dot fa-xl"></i> <?= $konfigurasi['alamat'] ?>
                </div>
                <div class="my-3"><a class="text-decoration-none text-body" target="_blank" href="https://wa.me/<?= $konfigurasi['whatsapp'] ?>"><i class="fa-brands fa-whatsapp fa-xl"></i> <?= $konfigurasi['whatsapp'] ?></a></div>
                <div class="my-3"><a class="text-decoration-none text-body" target="_blank" href="mailto:<?= $konfigurasi['email'] ?>"><i class="fa-solid fa-envelope fa-xl"></i> <?= $konfigurasi['email'] ?></a></div>
            </div>
        </div>

    </footer>
    <div class="bg-white">

        <div class="container d-flex flex-column flex-sm-row justify-content-between pt-4 mt-4 border-top">
            <p>© <?= date('Y') ?> SMK Bina Taruna</p>
            <ul class="list-unstyled d-flex">
                <li class="ms-3"><a class="link-body-emphasis" target="_blank" href="<?= $konfigurasi['instagram'] ?>"><i class="fa-brands fa-xl fa-instagram"></i></a></li>
                <li class="ms-3"><a class="link-body-emphasis" target="_blank" href="<?= $konfigurasi['facebook'] ?>"><i class="fa-brands fa-xl fa-facebook"></i></a></li>
            </ul>
        </div>
    </div>
</div>