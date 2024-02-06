<?= $this->extend('front/layout/base.php') ?>
<?= $this->section('content') ?>
<div class="text-start">
    <div class="rounded-3" style="background: url('<?= base_url('front/herocover@2x.png') ?>') no-repeat center; background-size: cover; padding-block: 11%; ">
        <div class="container-fluid py-5 px-5 bg-dark bg-opacity-75">
            <?= $konfigurasi['deskripsi'] ?>
        </div>
    </div>
    <!-- <img class="" src="<?= base_url('front/herocover@2x.png') ?>" alt="" width="100%"> -->
</div>

<div class="px-5 py-5" style="background-color: #FFF600;">
    <div class="row flex-lg-row align-items-center g-5 py-5">
        <div class="col-10 col-sm-8 col-lg-6">
            <img src="<?= base_url('front/whatsapp-image-20231129-at-2224-1@2x.png') ?>" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700" height="500" loading="lazy">
        </div>
        <div class="col-lg-6">
            <h1 class="display-5 fw-bold text-body-emphasis lh-1 mb-3">Sambutan Kepala Sekolah
            </h1>
            <h4>Dedi Rohimat &nbsp;</h4>
            <h5>Assalamu‘alaikum Wr. Wb.</h5>
            <p class="lead">Semoga shalawat, salam, dan ridho Allah menyertai Anda, SMK BINA TARUNA adalah sekolah kejuruan dengan tujuan suci yang berdiri sejak tahun 2002 di Kabupaten Subang Jawa Barat untuk mendidik dan mempersiapkan generasi muda untuk masa depan
                yang menanti mereka di masa depan. Dengan 5 Program Keahlian berdasarkan kebutuhan industri global untuk menanamkan generasi penerus dengan penuh iman dan kepribadian patriotisme yang kuat yang akan menjawab tantangan dan mengintensifkan
                keterampilan kebutuhan industri global untuk masa depan yang lebih baik, juga untuk membantu mereka untuk pendidikan yang lebih tinggi.</p>
        </div>
    </div>
</div>
<div class="background" style="background-image: url('<?= base_url('front/background.svg') ?>'); background-position: top; background-size: auto; background-repeat: no-repeat; background-size: cover;">
    <div class="container p-5">
        <h2 class="text-center fw-semibold">Visi & Misi
        </h2>
        <hr class="border-bottom">
        <h3>Visi</h3>
        <hr>
        <h5><?= $konfigurasi['visi'] ?></h5>
        <h3>Misi</h3>
        <hr>
        <h5><?= $konfigurasi['misi'] ?></h5>
    </div>
</div>

<?= $this->endSection() ?>