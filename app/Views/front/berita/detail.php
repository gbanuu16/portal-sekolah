<?= $this->extend('front/layout/base.php') ?>
<?= $this->section('content') ?>

<div class="background" style="background-image: url('<?= base_url('front/background.svg') ?>'); background-position: top; background-size: auto; background-repeat: no-repeat; background-size: cover;">

    <div class="px-4 py-5 text-center">
        <main id="main">
            <!-- ======= Cource Details Section ======= -->
            <section id="course-details" class="course-details">
                <div class="container">

                    <div class="row">
                        <div class="col-lg-8 text-start">
                            <div class="p-5 mb-4 rounded-3" style="background: linear-gradient(rgba(0, 0, 0, 0.60), rgba(0, 0, 0, 0.60)), url('<?= base_url('img/berita/thumb/' . 'thumb_' . $berita->gambar) ?>') no-repeat center; background-size: cover; ">
                                <div class="container-fluid py-5">
                                    <h2 class="display-5 text-white">
                                        <?= $berita->judul_berita ?> </h2>
                                    <p class="text-white-50">
                                        <?= date_indo($berita->tgl_berita) ?> oleh
                                        <a href="#">
                                            <?= $berita->nama ?> </a>
                                    </p>
                                </div>
                            </div>
                            <p>
                            </p>
                            <p><?= $berita->isi ?><br></p>
                            <p></p>
                            <nav class="mb-4" aria-label="Pagination">
                                <a href="<?= base_url('home/berita?kategori=' . $berita->nama_kategori) ?>" class="btn btn-outline-primary rounded-pill">#<?= $berita->nama_kategori ?></a>
                            </nav>
                        </div>
                        <div class="col-lg-4 text-start">

                            <div class="position-sticky" style="top: 2rem;">
                                <div class="text-start mb-4">
                                    <h4 class="fst-italic">Bagikan Berita</h4>
                                    <a href="http://www.facebook.com/sharer.php?u=<?= base_url('home/detail_berita/' . $berita->slug_berita) ?>" target="_blank" class="btn btn-primary"><i class="mdi mdi-facebook"></i> Facebook</a>
                                    <a href="http://twitter.com/share?url=<?= base_url('home/detail_berita/' . $berita->slug_berita) ?>" target="_blank" class="btn btn-info"><i class="mdi mdi-twitter"></i> Twitter</a>
                                    <a href="whatsapp://send?text=<?= base_url('home/detail_berita/' . $berita->slug_berita) ?>" target="_blank" data-action="share/whatsapp/share" class="btn btn-success"><i class="mdi mdi-whatsapp"></i> Whatsapp</a>
                                </div>
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
            </section><!-- End Cource Details Section -->

        </main>

    </div>
</div>
<?= $this->endSection() ?>