<!-- Modal -->
<div class="modal fade" id="modaltambah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><?= $title ?></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <?= form_open('pendidikan/simpanpendidikan', ['class' => 'formtambah']) ?>
            <?= csrf_field(); ?>
            <div class="modal-body">
                <div class="form-group row">
                    <label for="" class="col-sm-4 col-form-label">Nama pendidikan</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="nama_pendidikan" name="nama_pendidikan">
                        <div class="invalid-feedback errorNamapendidikan">

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
    $('.formtambah').submit(function(e) {
        e.preventDefault();
        let title = $('input#nama_pendidikan').val()
        $.ajax({
            type: "post",
            url: $(this).attr('action'),
            data: {
                nama_pendidikan: $('input#nama_pendidikan').val(),
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
                    if (response.error.nama_pendidikan) {
                        $('#nama_pendidikan').addClass('is-invalid');
                        $('.errorNamapendidikan').html(response.error.nama_pendidikan);
                    } else {
                        $('#nama_pendidikan').removeClass('is-invalid');
                        $('.errorNamapendidikan').html('');
                    }

                } else {
                    Swal.fire({
                        title: "Berhasil!",
                        text: response.sukses,
                        icon: "success",
                        showConfirmButton: false,
                        timer: 1500
                    });
                    $('#modaltambah').modal('hide');
                    listpendidikan();
                }
            }
        });
    })
});
</script>