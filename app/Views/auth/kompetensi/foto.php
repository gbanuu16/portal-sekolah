<!-- Modal -->
<div class="modal fade" id="modalfoto" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><?= $title ?></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <?= form_open_multipart('', ['class' => 'formfoto']) ?>
            <?= csrf_field(); ?>
            <div class="modal-body">
                <h5>Foto Aktivitas / Kegiatan</h5>
                <div class="row">
                    <?php foreach ($foto as $foto) { ?>
                        <div class="col-lg-3 col-md-4 col-sm-6 mb-2">
                            <div class="card">
                                <img class="img-thumbnail" src="<?= base_url('img/foto/thumb/' . 'thumb_' . $foto['nama_foto']) ?>" alt="Foto">
                                <div class="card-body text-center">
                                    <h6 class="text-center"><?= esc($foto['ket_foto']) ?></h6>
                                    <a href="javascript:void(0)" id="hapusfoto" onclick="hapusfoto(<?= $foto['foto_id'] ?>)" class="btn btn-sm btn-danger"><i class="fa fa-trash-alt"></i></a>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
                <input type="hidden" value="<?= $kompetensi_id ?>" name="kompetensi_id">
                <div class="form-group row">
                    <label for="" class="col-sm-2 col-form-label">Keterangan</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="ket_foto" name="ket_foto">
                        <div class="invalid-feedback errorKeterangan">

                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="" class="col-sm-2 col-form-label">Upload</label>
                    <div class="col-sm-10">
                        <input type="file" class="form-control" id="nama_foto" name="nama_foto">
                        <div class="invalid-feedback errorFoto">

                        </div>
                    </div>
                </div>

            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary btnupload"><i class="fa fa-share-square"></i> Simpan</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>

            <?= form_close() ?>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        $('.btnupload').click(function(e) {
            e.preventDefault();
            let form = $('.formfoto')[0];
            let data = new FormData(form);
            $.ajax({
                type: "post",
                url: '<?= base_url('kompetensi/uploadfoto') ?>',
                data: data,
                enctype: 'multipart/form-data',
                processData: false,
                contentType: false,
                cache: false,
                dataType: "json",
                beforeSend: function() {
                    $('.btnupload').attr('disable', 'disable');
                    $('.btnupload').html('<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> <i>Loading...</i>');
                },
                complete: function() {
                    $('.btnupload').removeAttr('disable', 'disable');
                    $('.btnupload').html('<i class="fa fa-share-square"></i>  Simpan');
                },
                success: function(response) {
                    if (response.error) {
                        if (response.error.ket_foto) {
                            $('#ket_foto').addClass('is-invalid');
                            $('.errorKeterangan').html(response.error.ket_foto);
                        } else {
                            $('#ket_foto').removeClass('is-invalid');
                            $('.errorKeterangan').html('');
                        }

                        if (response.error.nama_foto) {
                            $('#nama_foto').addClass('is-invalid');
                            $('.errorFoto').html(response.error.nama_foto);
                        } else {
                            $('#nama_foto').removeClass('is-invalid');
                            $('.errorFoto').html('');
                        }

                    } else {
                        Swal.fire({
                            title: "Berhasil!",
                            text: response.sukses,
                            icon: "success",
                            showConfirmButton: false,
                            timer: 1500
                        });
                        $('#modalfoto').modal('hide');
                        listkompetensi()
                    }
                }
            });
        });
    });

    function hapusfoto(foto_id) {
        Swal.fire({
            title: 'Hapus foto?',
            text: `Apakah anda yakin menghapus foto ini?`,
            icon: 'warning',
            showCancelButton: true,
            cancelButtonColor: '#3085d6',
            confirmButtonColor: '#d33',
            confirmButtonText: 'Ya!',
            cancelButtonText: 'Tidak'
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    url: "<?= base_url('kompetensi/hapusfoto') ?>",
                    type: "post",
                    dataType: "json",
                    data: {
                        foto_id: foto_id
                    },
                    success: function(response) {
                        if (response.sukses) {
                            Swal.fire({
                                title: "Berhasil!",
                                text: response.sukses,
                                icon: "success",
                                showConfirmButton: false,
                                timer: 1500
                            });
                            $('#modalfoto').modal('hide');
                            listkompetensi();
                        }
                    }
                });
            }
        })
    }
</script>