<?= $this->extend('themes/master') ?>

<?= $this->section('bc') ?>
<div class="col-sm-6">
    <h4 class="page-title"><?= $title ?></h4>
</div>
<div class="col-sm-6">
    <ol class="breadcrumb float-right">
        <li class="breadcrumb-item active">Halaman</li>
        <li class="breadcrumb-item"><a href="">Pendaftar</a></li>
    </ol>
</div>
<?= $this->endSection('bc') ?>

<?= $this->section('isi') ?>
<!-- CONTENT -->
<div class="col-lg-11 col-md-11 col-sm-11 ">
    <h5 class="page-title mb-3 text-center">FORMULIR PENERIMAAN PESERTA DIDIK BARU TAHUN 2022</h5>
    <div class="card rounded-0 border border-secondary mb-3">
        <div class="card-body">
            <form>
                


                <div class="form-group row mb-2">
                    <label for="prev_school_name" class="col-sm-5 control-label">Nama Siswa / Siswi<span
                            style="color: red">*</span></label>
                    <div class="col-sm-7">
                        <input type="text" value=""
                            class="form-control form-control-sm rounded-0 border border-secondary" id="prev_school_name"
                            name="prev_school_name">
                    </div>
                </div>



                <div class="form-group row mb-2">
                    <label for="prev_school_name" class="col-sm-5 control-label">No.Induk<span
                            style="color: red">*</span></label>
                    <div class="col-sm-7">
                        <input type="number" value=""
                            class="form-control form-control-sm rounded-0 border border-secondary" id="prev_school_name"
                            name="prev_school_name">
                    </div>
                </div>

                <div class="form-group row mb-2">
                    <label for="prev_school_name" class="col-sm-5 control-label">Tempat Lahir<span
                            style="color: red">*</span></label>
                    <div class="col-sm-7">
                        <input type="text" value=""
                            class="form-control form-control-sm rounded-0 border border-secondary" id="prev_school_name"
                            name="prev_school_name">
                    </div>
                </div>

                <div class="form-group row mb-2">
                    <label for="prev_school_name" class="col-sm-5 control-label">Tanggal Lahir<span
                            style="color: red">*</span></label>
                    <div class="col-sm-7">
                        <input type="date" value=""
                            class="form-control form-control-sm rounded-0 border border-secondary" id="prev_school_name"
                            name="prev_school_name">
                    </div>
                </div>


                <div class="form-group row mb-2">
                    <label for="is_transfer" class="col-sm-5 control-label">Jenis Kelamin <span
                            style="color: red">*</span></label>
                    <div class="col-sm-7">
                        <select name="is_transfer"
                            class="custom-select custom-select-sm rounded-0 border border-secondary" id="is_transfer">
                            <option value="" selected="selected">Pilih :</option>
                            <option value="L">L</option>
                            <option value="P">P</option>
                        </select>
                    </div>
                </div>

                <div class="form-group row mb-2">
                    <label for="prev_school_name" class="col-sm-5 control-label">Anak Ke-<span
                            style="color: red">*</span></label>
                    <div class="col-sm-7">
                        <input type="number" value=""
                            class="form-control form-control-sm rounded-0 border border-secondary" id="prev_school_name"
                            name="prev_school_name">
                    </div>
                </div>


                <div class="form-group row mb-2">
                    <label for="prev_school_name" class="col-sm-5 control-label">Status Keluarga<span
                            style="color: red">*</span></label>
                    <div class="col-sm-7">
                        <input type="text" value=""
                            class="form-control form-control-sm rounded-0 border border-secondary" id="prev_school_name"
                            name="prev_school_name">
                    </div>
                </div>

                <div class="form-group row mb-2">
                    <label for="achievement" class="col-sm-5 control-label">Alamat Siswa/i <span
                            style="color: red">*</span></label>
                    <div class="col-sm-7">
                        <textarea rows="5" name="achievement" id="achievement"
                            class="form-control form-control-sm rounded-0 border border-secondary"></textarea>
                    </div>
                </div>

                <div class="form-group row mb-2">
                    <label for="prev_school_name" class="col-sm-5 control-label">Telepon Siswa/i<span
                            style="color: red">*</span></label>
                    <div class="col-sm-7">
                        <input type="number" value=""
                            class="form-control form-control-sm rounded-0 border border-secondary" id="prev_school_name"
                            name="prev_school_name">
                    </div>
                </div>

                <div class="form-group row mb-2">
                    <label for="prev_school_address" class="col-sm-5 control-label">Alamat Sekolah Asal <span
                            style="color: red">*</span></label>
                    <div class="col-sm-7">
                        <input type="text" value=""
                            class="form-control form-control-sm rounded-0 border border-secondary"
                            id="prev_school_address" name="prev_school_address">
                    </div>
                </div>

                <h6 class="page-title mb-3"><span class="badge badge-success">Diterima di Madrasah ini</span></h6>

                <div class="form-group row mb-2">
                    <label for="prev_school_address" class="col-sm-5 control-label">Dikelas <span
                            style="color: red">*</span></label>
                    <div class="col-sm-7">
                        <input type="number" value=""
                            class="form-control form-control-sm rounded-0 border border-secondary"
                            id="prev_school_address" name="prev_school_address">
                    </div>
                </div>

                <div class="form-group row mb-2">
                    <label for="prev_school_address" class="col-sm-5 control-label">Pada Tanggal<span
                            style="color: red">*</span></label>
                    <div class="col-sm-7">
                        <input type="date" value=""
                            class="form-control form-control-sm rounded-0 border border-secondary"
                            id="prev_school_address" name="prev_school_address">
                    </div>
                </div>
                
                

                <div class="subject_scores"></div>

                <h6 class="page-title mb-3">Pernyataan dan Keamanan</h6>
                <div class="form-group row mb-2">
                    <label for="declaration" class="col-sm-5 control-label">Pernyataan <span
                            style="color: red">*</span></label>
                    <div class="col-sm-7">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="declaration" id="declaration">
                            <label class="form-check-label" for="declaration">
                                Saya yang bertandatangan dibawah ini menyatakan bahwa data yang tertera diatas adalah
                                yang sebenarnya.
                            </label>
                        </div>
                    </div>
                </div>
                <div class="form-group row mb-2">
                    <label class="col-sm-5 control-label"></label>
                    <div class="col-sm-7">
                        <div class="g-recaptcha" data-sitekey="6LduvpkUAAAAAHvfw7gAm4qdh-5YsoUY0Zvm_NVB"></div>
                    </div>
                </div>
            </form>
        </div>

        <div class="form-group text-center m-t-20">
            <div class="col-12">
                <button class="btn btn-primary btn-block btn-lg waves-effect waves-light btnlogin"
                    type="submit">Daftar</button>
            </div>
        </div>
    </div>
</div>
<!-- /CONTENT -->
<?= $this->endSection('isi') ?>