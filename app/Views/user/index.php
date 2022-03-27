<?= $this->extend('themes/master') ?>

<?= $this->section('bc') ?>
<div class="col-sm-6">
    <h4 class="page-title"><?= $title ?></h4>
</div>
<div class="col-sm-6">
    <ol class="breadcrumb float-right">
        <li class="breadcrumb-item"><a href="javascript:void(0);">Konfigurasi User</a></li>
        <li class="breadcrumb-item active">List User</li>
    </ol>
</div>
<?= $this->endSection('bc') ?>

<?= $this->section('isi') ?>
<div class="col-12">
    <div class="card m-b-30">
        <div class="card-body">
            <p class="sub-title"> <button type="button" class="btn btn-primary btn-sm tambahuser"><i
                        class=" fa fa-plus-circle"></i> Tambah User</button>
                <br>
                <small> <i class="fa fa-info-circle"></i> Klik foto untuk memperbarui foto!</small>
            </p>
            <div class="viewdata">
            </div>

            <div class="viewmodal">
            </div>
        </div>
    </div>
</div>



<script>
function listuser() {
    $.ajax({
        url: "<?= site_url('konfigurasi/getuser') ?>",
        dataType: "json",
        success: function(response) {
            $('.viewdata').html(response.data);
        }
    });
}

$(document).ready(function() {
    listuser();
    $('.tambahuser').click(function(e) {
        e.preventDefault();
        $.ajax({
            url: "<?= site_url('konfigurasi/formuser') ?>",
            dataType: "json",
            success: function(response) {
                $('.viewmodal').html(response.data).show();

                $('#modaltambah').modal('show');
            }
        });
    });
});
</script>
<?= $this->endSection('isi') ?>