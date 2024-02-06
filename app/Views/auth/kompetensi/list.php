<?= form_open('kompetensi/hapusall', ['class' => 'formhapus']) ?>

<button type="submit" class="btn btn-danger btn-sm">
    <i class="fa fa-trash"></i> Hapus yang diceklist
</button>

<hr>
<table id="listkompetensi" class="table table-striped dt-responsive " style="border-collapse: collapse; border-spacing: 0; width: 100%;">
    <thead>
        <tr>
            <th>
                <input type="checkbox" id="centangSemua">
            </th>
            <th>#</th>
            <th>Nama Kompetensi Keahlian</th>
            <th>Slug</th>
            <th>Tanggal</th>
            <th>User Posting</th>
            <th>Sampul</th>
            <th>Aksi</th>
        </tr>
    </thead>

    <tbody>
        <?php $nomor = 0;
        foreach ($list as $data) :
            $nomor++; ?>
            <tr>
                <td>
                    <input type="checkbox" name="kompetensi_id[]" class="centangKompetensiid" value="<?= $data['kompetensi_id'] ?>">
                </td>
                <td><?= $nomor ?></td>
                <td><?= esc($data['nama_kompetensi']) ?></td>
                <td><?= esc($data['slug_kompetensi']) ?></td>
                <td><?= date_indo($data['tgl_kompetensi']) ?></td>
                <td><?= esc($data['nama']) ?></td>
                <td class="text-center"><img onclick="gambar('<?= $data['kompetensi_id'] ?>')" src="<?= base_url('img/sampul/thumb/' . 'thumb_' . $data['sampul']) ?>" width="120px" class="img-thumbnail">
                </td>
                <td>
                    <h6>
                        <button type="button" onclick="foto(<?= $data['kompetensi_id'] ?>)" class="btn btn-primary btn-sm"><i class="fa fa-eye"></i> FOTO</button>
                    </h6>
                    <button type="button" class="btn btn-primary btn-sm" onclick="edit('<?= $data['kompetensi_id'] ?>')">
                        <i class="fa fa-edit"></i>
                    </button>
                    <button type="button" class="btn btn-danger btn-sm" onclick="hapus('<?= $data['kompetensi_id'] ?>')">
                        <i class="fa fa-trash"></i>
                    </button>
                </td>
            </tr>

        <?php endforeach; ?>
    </tbody>
</table>
<?= form_close() ?>
<script>
    $(document).ready(function() {
        $('#listkompetensi').DataTable({
            language: {
                url: '//cdn.datatables.net/plug-ins/1.13.7/i18n/id.json',
            },
        });

        $('#centangSemua').click(function(e) {
            if ($(this).is(':checked')) {
                $('.centangKompetensiid').prop('checked', true);
            } else {
                $('.centangKompetensiid').prop('checked', false);
            }
        });

        $('.formhapus').submit(function(e) {
            e.preventDefault();
            let jmldata = $('.centangKompetensiid:checked');
            if (jmldata.length === 0) {
                Swal.fire({
                    icon: 'error',
                    title: 'Ooops!',
                    text: 'Silahkan pilih data!',
                    showConfirmButton: false,
                    timer: 1500
                })
            } else {
                Swal.fire({
                    title: `Apakah anda yakin ingin menghapus ${jmldata.length} kompetensi keahlian?`,
                    text: 'Semua foto yang ada didalam kompetensi keahlian akan terhapus!',
                    icon: 'warning',
                    showCancelButton: true,
                    cancelButtonColor: '#3085d6',
                    confirmButtonColor: '#d33',
                    confirmButtonText: 'Ya, Hapus!',
                    cancelButtonText: 'Tidak'
                }).then((result) => {
                    if (result.isConfirmed) {
                        $.ajax({
                            type: "post",
                            url: $(this).attr('action'),
                            data: $(this).serialize(),
                            dataType: "json",
                            success: function(response) {
                                Swal.fire({
                                    icon: 'success',
                                    title: 'Berhasil',
                                    text: response.sukses,
                                    showConfirmButton: false,
                                    timer: 1500
                                });
                                listkompetensi();
                            }
                        });
                    }
                })
            }
        });
    });

    function edit(kompetensi_id) {
        $.ajax({
            type: "post",
            url: "<?= base_url('kompetensi/formedit') ?>",
            data: {
                kompetensi_id: kompetensi_id
            },
            dataType: "json",
            success: function(response) {
                if (response.sukses) {
                    $('.viewmodal').html(response.sukses).show();
                    $('#modaledit').modal('show');
                }
            }
        });
    }

    function hapus(kompetensi_id) {
        Swal.fire({
            title: 'Hapus data?',
            text: `Apakah anda yakin menghapus data?`,
            icon: 'warning',
            showCancelButton: true,
            cancelButtonColor: '#3085d6',
            confirmButtonColor: '#d33',
            confirmButtonText: 'Ya!',
            cancelButtonText: 'Tidak'
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    url: "<?= base_url('kompetensi/hapus') ?>",
                    type: "post",
                    dataType: "json",
                    data: {
                        kompetensi_id: kompetensi_id
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
                            listkompetensi();
                        }
                    }
                });
            }
        })
    }

    function gambar(kompetensi_id) {
        $.ajax({
            type: "post",
            url: "<?= base_url('kompetensi/formupload') ?>",
            data: {
                kompetensi_id: kompetensi_id
            },
            dataType: "json",
            success: function(response) {
                if (response.sukses) {
                    $('.viewmodal').html(response.sukses).show();
                    $('#modalupload').modal('show');
                }
            }
        });
    }

    function foto(kompetensi_id) {
        $.ajax({
            type: "post",
            url: "<?= base_url('kompetensi/formfoto') ?>",
            data: {
                kompetensi_id: kompetensi_id
            },
            dataType: "json",
            success: function(response) {
                if (response.sukses) {
                    $('.viewmodal').html(response.sukses).show();
                    $('#modalfoto').modal('show');
                }
            }
        });
    }
</script>