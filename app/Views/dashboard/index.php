<?= $this->extend('themes/master')?>


<?= $this->section('bc')?>
<div class="col-sm-6">
    <h4 class="page-title">Dashboard</h4>
</div>
<div class="col-sm-6">
    <ol class="breadcrumb float-right">
        <li class="breadcrumb-item"><a href="javascript:void(0);">Halaman</a></li>
        <li class="breadcrumb-item active">Dashboard</li>
    </ol>
</div>
<?= $this->endSection('bc')?>


<?= $this->section('isi')?>
<div class="row">

    <div class="col-sm-6 col-xl-3">
        <div class="card">
            <div class="card-heading p-4">
                <div class="mini-stat-icon float-right">
                    <i class="mdi mdi-cube-outline bg-primary  text-white"></i>
                </div>
                <div>
                    <h5 class="font-16">Active Sessions</h5>
                </div>
                <h3 class="mt-4">43,225</h3>
               
            </div>
        </div>
    </div>

    <div class="col-sm-6 col-xl-3">
        <div class="card">
            <div class="card-heading p-4">
                <div class="mini-stat-icon float-right">
                    <i class="mdi mdi-briefcase-check bg-success text-white"></i>
                </div>
                <div>
                    <h5 class="font-16">Total Revenue</h5>
                </div>
                <h3 class="mt-4">$73,265</h3>
                
            </div>
        </div>
    </div>

    <div class="col-sm-6 col-xl-3">
        <div class="card">
            <div class="card-heading p-4">
                <div class="mini-stat-icon float-right">
                    <i class="mdi mdi-tag-text-outline bg-warning text-white"></i>
                </div>
                <div>
                    <h5 class="font-16">Average Price</h5>
                </div>
                <h3 class="mt-4">447</h3>
               
            </div>
        </div>
    </div>

    <div class="col-sm-6 col-xl-3">
        <div class="card">
            <div class="card-heading p-4">
                <div class="mini-stat-icon float-right">
                    <i class="mdi mdi-buffer bg-danger text-white"></i>
                </div>
                <div>
                    <h5 class="font-16">Add to Card</h5>
                </div>
                <h3 class="mt-4">86%</h3>
               
            </div>
        </div>
    </div>

</div>






<?= $this->endSection('isi')?>