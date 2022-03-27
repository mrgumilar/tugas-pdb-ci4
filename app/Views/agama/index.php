<?= $this->extend('themes/master') ?>

<?= $this->section('bc') ?>
<div class="col-sm-6">
    <h4 class="page-title"><?= $title ?></h4>
</div>
<div class="col-sm-6">
    <ol class="breadcrumb float-right">
        <li class="breadcrumb-item active">Halaman</li>
        <li class="breadcrumb-item"><a href="">Agama</a></li>
    </ol>
</div>
<?= $this->endSection('bc') ?>

<?= $this->section('isi') ?>
<div class="col-12">
    <div class="card m-b-30">
        <div class="card-body">
            <p class="sub-title"> <button type="button" class="btn btn-primary btn-sm tambahagama"><i
                        class=" fa fa-plus-circle"></i> Tambah agama</button>
            </p>
            <div class="viewdata">
            </div>

            <div class="viewmodal">
            </div>
        </div>
    </div>
</div>


<script>
function listagama() {
    $.ajax({
        url: "<?= site_url('agama/getagama') ?>",
        dataType: "json",
        success: function(response) {
            $('.viewdata').html(response.data);
        }
    });
}

$(document).ready(function() {
    listagama();
    $('.tambahagama').click(function(e) {
        e.preventDefault();
        $.ajax({
            url: "<?= site_url('agama/formagama') ?>",
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