<?= $this->extend('front/layout/base.php') ?>
<?= $this->section('content') ?>
<div class="background" style="background-image: url('<?= base_url('front/background.svg') ?>'); background-position: top; background-size: auto; background-repeat: no-repeat; background-size: cover;">

    <div class="px-5 py-5 ">
        <h1 class="text-center display-5 fw-bold text-body-emphasis">Berita</h1>
        <div class="border-bottom my-4"></div>
        <div class="container">
            <?php if (request()->getGet('kategori') != null) : ?>
                <div class="d-flex justify-content-between align-content-center align-items-center border-bottom mb-4">
                    <h3 class="fst-italic">Kategori: <?= request()->getGet('kategori') ?> </h3>
                    <a href="<?= base_url('home/berita') ?>" class="text-body text-decoration-none"><i class="fa-solid fa-xmark"></i> Reset</a>
                </div>
            <?php endif ?>
            <div class="row">
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
                                            <div class="d-flex flex-column align-content-start align-items-start">
                                                <small><?= date_indo($data['tgl_berita']) ?> oleh <?= $data['nama'] ?></small>

                                            </div>
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
                <div class="col-4">
                    <div class="position-sticky" style="top: 2rem;">
                        <div>
                            <h4 class="fst-italic">Berita terbaru</h4>
                            <ul class="list-unstyled">
                                <?php foreach ($beritaTerbaru as $data) : ?>
                                    <li>
                                        <a class="gap-3 py-3 d-flex flex-column flex-lg-row align-items-start align-items-lg-center link-body-emphasis text-decoration-none border-top" href="<?= base_url('home/detail_berita/' . $data['slug_berita']) ?>">
                                            <img src="<?= base_url('img/berita/thumb/' . 'thumb_' . $data['gambar']) ?>" width="50%" height="" class="img-fluid align-middle" alt="">
                                            <div class="col-lg-8">
                                                <h6 class="mb-0"><?= $data['judul_berita'] ?></h6>
                                                <small class="text-body-secondary"><?= $data['tgl_berita'] ?></small>
                                            </div>
                                        </a>
                                    </li>
                                <?php endforeach ?>

                            </ul>
                        </div>
                        <div class="p-4">
                            <h4 class="fst-italic">Kategori Berita</h4>
                            <ol class="mb-0 list-unstyled">
                                <li><a href="<?= base_url('home/berita') ?>">Semua Berita (<?= $beritaRaw->hitung_berita() ?>)</a></li>
                                <?php foreach ($kategori as $data) : ?>
                                    <?php foreach ($beritaRaw->hitung_berita_kategori($data['nama_kategori']) as $item) : ?>
                                        <li>
                                            <a href="<?= base_url('home/berita?kategori=' . $data['nama_kategori']) ?>"><?= $data['nama_kategori'] ?> (<?= $item['jumlah'] ?>)</a>
                                        </li>
                                    <?php endforeach ?>
                                <?php endforeach ?>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>