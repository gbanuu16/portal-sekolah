<?= $this->extend('front/layout/base') ?>
<?= $this->section('content') ?>
<div class="background" style="background-image: url('<?= base_url('front/background.svg') ?>'); background-position: top; background-size: auto; background-repeat: no-repeat; background-size: cover;">
    <div class="container p-5">
        <h2 class="text-center fw-semibold">Pengumuman
        </h2>
        <hr class="border-bottom">
        <div class="table-responsive bg-body-tertiary p-4 rounded">
            <table class="table table-stripped" id="listPengumuman">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Pengumuman</th>
                        <th>Tanggal</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 0;
                    foreach ($pengumuman as $item) : ?>
                        <tr>
                            <td><?= ++$no ?></td>
                            <td><?= $item['judul_pengumuman'] ?></td>
                            <td><?= date_indo($item['tanggal']) ?></td>
                            <td>
                                <a href="#" class="btn btn-secondary btn-sm" onclick="lihat('<?= $item['pengumuman_id'] ?>')">Lihat</a>
                            </td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
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