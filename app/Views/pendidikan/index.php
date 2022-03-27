<?= $this->extend('themes/master') ?>

<?= $this->section('bc') ?>
<div class="col-sm-6">
    <h4 class="page-title"><?= $title ?></h4>
</div>
<div class="col-sm-6">
    <ol class="breadcrumb float-right">
        <li class="breadcrumb-item active">Pendidikan</li>
        <li class="breadcrumb-item"><a href="">Index</a></li>
    </ol>
</div>
<?= $this->endSection('bc') ?>

<?= $this->section('isi') ?>
<div class="col-12">
    <div class="card m-b-30">
        <div class="card-body">
            <p class="sub-title"> <button type="button" class="btn btn-primary btn-sm tambahpendidikan"><i
                        class=" fa fa-plus-circle"></i> Tambah Pendidikan</button>
            </p>
            <div class="viewdata">
            </div>

            <div class="viewmodal">
            </div>
        </div>
    </div>
</div>


<script>
function listpendidikan() {
    $.ajax({
        url: "<?= site_url('pendidikan/getpendidikan') ?>",
        dataType: "json",
        success: function(response) {
            $('.viewdata').html(response.data);
        }
    });
}

$(document).ready(function() {
    listpendidikan();
    $('.tambahpendidikan').click(function(e) {
        e.preventDefault();
        $.ajax({
            url: "<?= site_url('pendidikan/formpendidikan') ?>",
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