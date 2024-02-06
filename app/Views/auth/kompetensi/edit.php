<!-- Modal -->
<div class="modal fade" id="modaledit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><?= $title ?></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <?= form_open('kompetensi/update', ['class' => 'formedit']) ?>
            <?= csrf_field(); ?>
            <div class="modal-body">
                <input type="hidden" class="form-control" id="kompetensi_id" value="<?= $kompetensi_id ?>" name="kompetensi_id" readonly>
                <div class="form-group">
                    <label>Nama Kompetensi Keahlian</label>
                    <input type="text" class="form-control" id="nama_kompetensi" value="<?= $nama_kompetensi ?>" name="nama_kompetensi">
                    <div class="invalid-feedback errorNama">
                    </div>
                </div>
                <div class="form-group">
                    <label>Deskripsi Kompetensi Keahlian</label>
                    <textarea name="deskripsi_kompetensi" id="deskripsi_kompetensi" cols="30" rows="10"><?= $deskripsi_kompetensi ?></textarea>
                    <div class="invalid-feedback errorDeskripsi">
                    </div>
                </div>

            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary btnsimpan"><i class="fa fa-share-square"></i> Simpan</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>

            <?= form_close() ?>
        </div>
    </div>
</div>
<script>
    $(document).ready(function() {
        $('textarea#deskripsi_kompetensi').summernote({
            height: 250,
            minHeight: null,
            maxHeight: null,
            focus: true
        });
        $('.formedit').submit(function(e) {
            let title = $('input#nama_kompetensi').val()
            e.preventDefault();
            $.ajax({
                type: "post",
                url: $(this).attr('action'),
                data: {
                    kompetensi_id: $('input#kompetensi_id').val(),
                    nama_kompetensi: $('input#nama_kompetensi').val(),
                    deskripsi_kompetensi: $('textarea#deskripsi_kompetensi').val(),
                    slug_kompetensi: title.replace(/[^a-z0-9]/gi, '-').replace(/-+/g, '-').replace(/^-|-$/g, ''),
                    tgl_kompetensi: date,
                    user_id: user_id
                },
                dataType: "json",
                beforeSend: function() {
                    $('.btnsimpan').attr('disable', 'disable');
                    $('.btnsimpan').html('<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> <i>Loading...</i>');
                },
                complete: function() {
                    $('.btnsimpan').removeAttr('disable', 'disable');
                    $('.btnsimpan').html('<i class="fa fa-share-square"></i>  Simpan');
                },
                success: function(response) {
                    if (response.error) {
                        if (response.error.nama_kompetensi) {
                            $('#nama_kompetensi').addClass('is-invalid');
                            $('.errorNama').html(response.error.nama_kompetensi);
                        } else {
                            $('#nama_kompetensi').removeClass('is-invalid');
                            $('.errorNama').html('');
                        }
                        if (response.error.deskripsi_kompetensi) {
                            $('#deskripsi_kompetensi').addClass('is-invalid');
                            $('.errorDeskripsi').html(response.error.deskripsi_kompetensi);
                        } else {
                            $('#deskripsi_kompetensi').removeClass('is-invalid');
                            $('.errorDeskripsi').html('');
                        }

                    } else {
                        Swal.fire({
                            title: "Berhasil!",
                            text: response.sukses,
                            icon: "success",
                            showConfirmButton: false,
                            timer: 1500
                        });
                        $('#modaledit').modal('hide');
                        listkompetensi();
                    }
                }
            });
        })
    });
</script>