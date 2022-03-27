<!-- Modal -->
<div class="modal fade" id="modaledit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><?= $title ?></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <?= form_open('pekerjaan/updatepekerjaan', ['class' => 'formedit']) ?>
            <?= csrf_field(); ?>
            <div class="modal-body">
                <input type="hidden" class="form-control" id="pekerjaan_id" value="<?= $pekerjaan_id ?>"
                    name="pekerjaan_id" readonly>
                <div class="form-group row">
                    <label for="" class="col-sm-4 col-form-label">Nama pekerjaan</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="nama_pekerjaan" value="<?= $nama_pekerjaan ?>"
                            name="nama_pekerjaan">
                        <div class="invalid-feedback errorNamapekerjaan">

                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary btnsimpan"><i class="fa fa-share-square"></i>
                    Simpan</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>

            <?= form_close() ?>
        </div>
    </div>
</div>
<script>
$(document).ready(function() {
    $('.formedit').submit(function(e) {
        e.preventDefault();
        let title = $('input#nama_pekerjaan').val()
        $.ajax({
            type: "post",
            url: $(this).attr('action'),
            data: {
                pekerjaan_id: $('input#pekerjaan_id').val(),
                nama_pekerjaan: $('input#nama_pekerjaan').val(),

            },
            dataType: "json",
            beforeSend: function() {
                $('.btnsimpan').attr('disable', 'disable');
                $('.btnsimpan').html(
                    '<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> <i>Loading...</i>'
                );
            },
            complete: function() {
                $('.btnsimpan').removeAttr('disable', 'disable');
                $('.btnsimpan').html('<i class="fa fa-share-square"></i>  Simpan');
            },
            success: function(response) {
                if (response.error) {
                    if (response.error.nama_pekerjaan) {
                        $('#nama_pekerjaan').addClass('is-invalid');
                        $('.errorNamapekerjaan').html(response.error.nama_pekerjaan);
                    } else {
                        $('#nama_pekerjaan').removeClass('is-invalid');
                        $('.errorNamapekerjaan').html('');
                    }

                } else {
                    alertify.success("Data Pekerjaan Berhasil Diupdate");
                    $('#modaledit').modal('hide');
                    listpekerjaan();
                }
            }
        });
    })
});
</script>