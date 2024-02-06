<?= $this->extend('front/layout/base.php') ?>
<?= $this->section('content') ?>
<div class="background" style="background-image: url('<?= base_url('front/background.svg') ?>'); background-position: top; background-size: auto; background-repeat: no-repeat; background-size: cover;">
    <div class="px-4 py-5 text-center">
        <main id="main">
            <!-- ======= Cource Details Section ======= -->
            <section id="course-details" class="course-details">
                <div class="container">

                    <div class="row">
                        <div class="col-lg-12 text-start">
                            <!-- <img src="<?= base_url('img/sampul/thumb/' . 'thumb_' . $kompetensi->sampul) ?>" alt="" class="img-thumbnail w-50"> -->
                            <div class="mb-4 rounded-3" style="background: linear-gradient(rgba(0, 0, 0, 0.60), rgba(0, 0, 0, 0.60)), url('<?= base_url('img/sampul/thumb/' . 'thumb_' . $kompetensi->sampul) ?>') no-repeat center; background-size: auto; padding-block: 10%;">
                                <div class="container-fluid py-5">
                                </div>
                            </div>
                            <h2 class="display-5 text-center fw-medium"><?= $kompetensi->nama_kompetensi ?> </h2>
                            <hr class="border-bottom">

                            <?= $kompetensi->deskripsi_kompetensi ?>

                            <h2 class="display-6 text-center fw-medium">Foto Kegiatan <?= $kompetensi->nama_kompetensi ?></h2>
                            <hr class="border-bottom">
                            <div class="owl-carousel owl-theme d-block d-lg-block">
                                <?php foreach ($list_foto as $item) : ?>
                                    <div class="item">
                                        <img src="<?= base_url('img/foto/' . $item['nama_foto']) ?>" class="w-100 shadow-1-strong rounded mb-4" alt="" />
                                        <h6 class="text-center"><?= $item['ket_foto'] ?></h6>
                                    </div>
                                <?php endforeach ?>
                            </div>
                        </div>

                    </div>

                </div>
            </section><!-- End Cource Details Section -->

        </main>

    </div>
</div>

<?= $this->endSection() ?>