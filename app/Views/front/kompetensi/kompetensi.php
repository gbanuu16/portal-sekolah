<?= $this->extend('front/layout/base.php') ?>
<?= $this->section('content') ?>
<div class="background" style="background-image: url('<?= base_url('front/background.svg') ?>'); background-position: top; background-size: auto; background-repeat: no-repeat; background-size: cover;">

    <div class="px-5 py-5">
        <h1 class="text-center display-5 fw-bold text-body-emphasis">Kompetensi Keahlian</h1>
        <div class="border-bottom my-4"></div>
        <div class="container">

            <div class="row">

                <div class="col-lg-8 mx-auto">
                    <div class="row row-cols-1 row-cols-md-3 g-3 justify-content-center">
                        <?php
                        foreach ($kompetensi as $data) :
                        ?>
                            <div class="col">
                                <div class="card h-100">
                                    <img class="card-img-top rounded" src="<?= base_url('img/sampul/thumb/' . 'thumb_' . $data['sampul']) ?>" alt="" width="50%">
                                    <div class="card-body">
                                        <h4 class="card-title text-center"><?= $data['nama_kompetensi'] ?></h4>
                                    </div>
                                    <div class="card-footer d-flex flex-row justify-content-end align-items-center align-content-center">
                                        <a href="<?= base_url('home/detail_kompetensi/' . $data['kompetensi_id']) ?>" class=" btn btn-warning btn-sm">Lihat lebih lanjut..</a>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>