<table id="listpekerjaan" class="table table-striped dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
    <thead>
        <tr>
            <th>#</th>
            <th>Nama pekerjaan</th>
          
            <th>Aksi</th>
        </tr>
    </thead>

    <tbody>
        <?php $nomor = 0;
        foreach ($list as $data) :
            $nomor++; ?>
            <tr>
                <td><?= $nomor ?></td>
                <td><?= esc($data['nama_pekerjaan']) ?></td>
          
                <td>
                    <button type="button" class="btn btn-primary btn-sm" onclick="edit('<?= $data['pekerjaan_id'] ?>')">
                        <i class="fa fa-edit"></i>
                    </button>
                    <button type="button" class="btn btn-danger btn-sm" onclick="hapus('<?= $data['pekerjaan_id'] ?>')">
                        <i class="fa fa-trash"></i>
                    </button>
                </td>
            </tr>

        <?php endforeach; ?>
    </tbody>
</table>

<script>
    $(document).ready(function() {
        $('#listpekerjaan').DataTable();
    });

    function edit(pekerjaan_id) {
        $.ajax({
            type: "post",
            url: "<?= site_url('pekerjaan/formeditpekerjaan') ?>",
            data: {
                pekerjaan_id: pekerjaan_id
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

    function hapus(pekerjaan_id) {
        Swal.fire({
            title: 'Hapus data?',
            text: `Apakah anda yakin menghapus data?`,
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya!',
            cancelButtonText: 'Tidak'
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    url: "<?= site_url('pekerjaan/hapuspekerjaan') ?>",
                    type: "post",
                    dataType: "json",
                    data: {
                        pekerjaan_id: pekerjaan_id
                    },
                    success: function(response) {
                        if (response.sukses) {
                            alertify.success("Data Pekerjaan Berhasil Dihapus");
                            listpekerjaan();
                        }
                    }
                });
            }
        })
    }
</script>