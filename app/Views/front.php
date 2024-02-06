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

    <div class="px-4 py-5 mt-5 text-center">
        <a href="<?= base_url('home/kompetensi') ?>" class="text-decoration-none text-body">
            <h1 class="display-5 fw-bold text-body-emphasis">Kompetensi Keahlian</h1>
        </a>
        <hr class="border-bottom">
        <div class="col-lg-8 mx-auto d-flex flex-row my-5">
            <div class="row row-cols-1 row-cols-md-3 g-4 justify-content-around">
                <?php
                foreach ($kompetensi as $data) :
                ?>
                    <div class="col">
                        <div class="card h-100 position-relative">
                            <img src="<?= base_url('img/sampul/thumb/' . 'thumb_' . $data['sampul']) ?>" class="card-img-top" />
                            <div class="card-body">
                                <a href="<?= base_url('home/detail_kompetensi/' . $data['kompetensi_id']) ?>" class="stretched-link text-decoration-none text-body">
                                    <h5 class="card-title"><?= $data['nama_kompetensi'] ?></h5>
                                </a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>

            </div>
        </div>
    </div>

    <div class="px-4 py-5 my-2 text-center">
        <h1 class="display-5 fw-bold text-body-emphasis">Pengumuman</h1>
        <div class="border-bottom my-4"></div>
        <div class="col-lg-6 mx-auto">
            <div class="row row-cols-1 row-cols-md-2 g-4">
                <?php
                foreach ($pengumuman as $data) :
                ?>
                    <div class="col">
                        <div class="card h-100">
                            <div class="card-body">
                                <h2 class="card-title"><?= $data['judul_pengumuman'] ?></h2>
                                <p class="card-subtitle"><?= substr(strip_tags($data['isi_pengumuman']), 0, 160) ?> ...</p>
                            </div>
                            <div class="card-footer d-flex flex-row justify-content-between align-items-center align-content-center">
                                <div class="d-flex flex-column align-content-start align-items-start">
                                    <small><i class="fa-solid fa-calendar"></i> <?= date_indo($data['tanggal']) ?></small>
                                </div>
                                <button class="btn btn-warning btn-sm" onclick="lihat('<?= $data['pengumuman_id'] ?>')">Baca lebih lengkap...</button>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>

    <div class="px-4 py-5 mt-5 text-center">
        <a href="<?= base_url('home/berita') ?>" class="text-decoration-none text-body">
            <h1 class="display-5 fw-bold text-body-emphasis">Berita</h1>
        </a>
        <div class="border-bottom my-4"></div>
        <div class="col-lg-8 mx-auto">
            <div class="row row-cols-1 row-cols-md-3 g-3 justify-content-center">
                <?php
                foreach ($berita as $data) :
                ?>
                    <div class="col">
                        <div class="card h-100">
                            <div class="card-body d-flex flex-column">
                                <!-- <hr> -->
                                <div class="d-flex flex-column">
                                    <img class="card-img-top rounded" src="<?= base_url('img/berita/thumb/' . 'thumb_' . $data['gambar']) ?>" alt="" width="50%">
                                    <h4 class="card-title"><?= $data['judul_berita'] ?></h4>
                                    <small><?= date_indo($data['tgl_berita']) ?> oleh <?= $data['nama'] ?></small>
                                </div>
                                <hr>
                                <p class="card-subtitle"><?= substr(strip_tags($data['isi']), 0, 150) ?>...
                                </p>
                            </div>
                            <div class="card-footer d-flex flex-row justify-content-end align-items-center align-content-center">
                                <a href="<?= base_url('home/detail_berita/' . $data['slug_berita']) ?>" class=" btn btn-warning btn-sm">Baca lebih lengkap..</a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>
<div class=" viewmodal">
</div>
<script>
    function lihat(id_pengumuman) {
        $.ajax({
            type: "post",
            url: "<?= base_url('home/detail_pengumuman') ?>",
            data: {
                pengumuman_id: id_pengumuman
            },
            dataType: "json",
            success: function(response) {
                if (response.sukses) {
                    $('.viewmodal').html(response.sukses).show();
                    $('#modalLihat').modal('show');
                }
            }
        });
    }
</script>
<?= $this->endSection() ?>