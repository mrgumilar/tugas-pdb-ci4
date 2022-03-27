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
<div class="col-lg-12 col-md-12 col-sm-12 ">
    <h5 class="page-title mb-3">FORMULIR PENERIMAAN PESERTA DIDIK BARU TAHUN 2020</h5>
    <div class="card rounded-0 border border-secondary mb-3">
        <div class="card-body">
            <form>
                <div class="form-group row mb-2">
                    <label for="is_transfer" class="col-sm-5 control-label">Jenis Pendaftaran <span
                            style="color: red">*</span></label>
                    <div class="col-sm-7">
                        <select name="is_transfer"
                            class="custom-select custom-select-sm rounded-0 border border-secondary" id="is_transfer">
                            <option value="" selected="selected">Pilih :</option>
                            <option value="false">Baru</option>
                            <option value="true">Pindahan</option>
                        </select>
                    </div>
                </div>

                <div class="form-group row mb-2">
                    <label for="admission_type_id" class="col-sm-5 control-label">Jalur Pendaftaran <span
                            style="color: red">*</span></label>
                    <div class="col-sm-7">
                        <select name="admission_type_id"
                            class="custom-select custom-select-sm rounded-0 border border-secondary"
                            id="admission_type_id" onchange="get_subject_settings()" onblur="get_subject_settings()"
                            onmouseup="get_subject_settings()">
                            <option value="" selected="selected">Pilih :</option>
                            <option value="175">MTs</option>
                            <option value="176">Prestasi</option>
                            <option value="177">zonasi</option>
                            <option value="178">afirmasi</option>
                        </select>
                    </div>
                </div>

                <div class="form-group row mb-2">
                    <label for="first_choice_id" class="col-sm-5 control-label">Pilihan I <span
                            style="color: red">*</span></label>
                    <div class="col-sm-7">
                        <select name="first_choice_id"
                            class="custom-select custom-select-sm rounded-0 border border-secondary"
                            id="first_choice_id" onchange="check_options(1); get_subject_settings();"
                            onblur="check_options(1); get_subject_settings();"
                            onmouseup="check_options(1); get_subject_settings();">
                            <option value="" selected="selected">Pilih :</option>
                        </select>
                    </div>
                </div>

                <div class="form-group row mb-2">
                    <label for="second_choice_id" class="col-sm-5 control-label">Pilihan II <span
                            style="color: red">*</span></label>
                    <div class="col-sm-7">
                        <select name="second_choice_id"
                            class="custom-select custom-select-sm rounded-0 border border-secondary"
                            id="second_choice_id" onchange="check_options(2); get_subject_settings();"
                            onblur="check_options(2); get_subject_settings();"
                            onmouseup="check_options(2); get_subject_settings();">
                            <option value="" selected="selected">Pilih :</option>
                        </select>
                    </div>
                </div>

                <div class="form-group row mb-2">
                    <label for="prev_school_name" class="col-sm-5 control-label">Nama Sekolah Asal <span
                            style="color: red">*</span></label>
                    <div class="col-sm-7">
                        <input type="text" value=""
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

                <div class="form-group row mb-2">
                    <label for="prev_exam_number" class="col-sm-5 control-label">Nomor Ujian Nasional Sebelumnya <span
                            style="color: red">*</span></label>
                    <div class="col-sm-7">
                        <input type="text" value=""
                            class="form-control form-control-sm rounded-0 border border-secondary" id="prev_exam_number"
                            name="prev_exam_number">
                    </div>
                </div>

                <div class="form-group row mb-2">
                    <label for="paud" class="col-sm-5 control-label">Apakah pernah PAUD <span
                            style="color: red">*</span></label>
                    <div class="col-sm-7">
                        <select name="paud" class="custom-select custom-select-sm rounded-0 border border-secondary"
                            id="paud">
                            <option value="" selected="selected">Pilih :</option>
                            <option value="false">Tidak</option>
                            <option value="true">Ya</option>
                        </select>
                    </div>
                </div>

                <div class="form-group row mb-2">
                    <label for="tk" class="col-sm-5 control-label">Apakah pernah TK <span
                            style="color: red">*</span></label>
                    <div class="col-sm-7">
                        <select name="tk" class="custom-select custom-select-sm rounded-0 border border-secondary"
                            id="tk">
                            <option value="" selected="selected">Pilih :</option>
                            <option value="false">Tidak</option>
                            <option value="true">Ya</option>
                        </select>
                    </div>
                </div>

                <div class="form-group row mb-2">
                    <label for="skhun" class="col-sm-5 control-label">Nomor Seri SKHUN Sebelumnya <span
                            style="color: red">*</span></label>
                    <div class="col-sm-7">
                        <input type="text" value=""
                            class="form-control form-control-sm rounded-0 border border-secondary" id="skhun"
                            name="skhun" placeholder="Nomor Surat Keterangan Hasil Ujian Nasional">
                    </div>
                </div>

                <div class="form-group row mb-2">
                    <label for="prev_diploma_number" class="col-sm-5 control-label">Nomor Seri Ijazah Sebelumnya <span
                            style="color: red">*</span></label>
                    <div class="col-sm-7">
                        <input type="text" value=""
                            class="form-control form-control-sm rounded-0 border border-secondary"
                            id="prev_diploma_number" name="prev_diploma_number"
                            placeholder="Nomor Seri Ijazah Sebelumnya">
                    </div>
                </div>

                <div class="form-group row mb-2">
                    <label for="achievement" class="col-sm-5 control-label">Prestasi yang Pernah Diraih <span
                            style="color: red">*</span></label>
                    <div class="col-sm-7">
                        <textarea rows="5" name="achievement" id="achievement"
                            class="form-control form-control-sm rounded-0 border border-secondary"></textarea>
                    </div>
                </div>

                <div class="form-group row mb-2">
                    <label for="hobby" class="col-sm-5 control-label">Hobi <span style="color: red">*</span></label>
                    <div class="col-sm-7">
                        <input type="text" value=""
                            class="form-control form-control-sm rounded-0 border border-secondary" id="hobby"
                            name="hobby">
                    </div>
                </div>

                <div class="form-group row mb-2">
                    <label for="ambition" class="col-sm-5 control-label">Cita-cita <span
                            style="color: red">*</span></label>
                    <div class="col-sm-7">
                        <input type="text" value=""
                            class="form-control form-control-sm rounded-0 border border-secondary" id="ambition"
                            name="ambition">
                    </div>
                </div>

                <div class="form-group row mb-2">
                    <label for="full_name" class="col-sm-5 control-label">Nama Lengkap <span
                            style="color: red">*</span></label>
                    <div class="col-sm-7">
                        <input type="text" value=""
                            class="form-control form-control-sm rounded-0 border border-secondary" id="full_name"
                            name="full_name">
                    </div>
                </div>

                <div class="form-group row mb-2">
                    <label for="gender" class="col-sm-5 control-label">Jenis Kelamin <span
                            style="color: red">*</span></label>
                    <div class="col-sm-7">
                        <select name="gender" class="custom-select custom-select-sm rounded-0 border border-secondary"
                            id="gender">
                            <option value="" selected="selected">Pilih :</option>
                            <option value="M">Laki-laki</option>
                            <option value="F">Perempuan</option>
                        </select>
                    </div>
                </div>

                <div class="form-group row mb-2">
                    <label for="nisn" class="col-sm-5 control-label">NISN <span style="color: red">*</span></label>
                    <div class="col-sm-7">
                        <input type="text" value=""
                            class="form-control form-control-sm rounded-0 border border-secondary" id="nisn" name="nisn"
                            placeholder="Nomor Induk Sekolah Nasional">
                    </div>
                </div>

                <div class="form-group row mb-2">
                    <label for="nik" class="col-sm-5 control-label">Nomor Induk Kependudukan / KTP <span
                            style="color: red">*</span></label>
                    <div class="col-sm-7">
                        <input type="text" value=""
                            class="form-control form-control-sm rounded-0 border border-secondary" id="nik" name="nik">
                    </div>
                </div>

                <div class="form-group row mb-2">
                    <label for="birth_place" class="col-sm-5 control-label">Tempat Lahir <span
                            style="color: red">*</span></label>
                    <div class="col-sm-7">
                        <input type="text" value=""
                            class="form-control form-control-sm rounded-0 border border-secondary" id="birth_place"
                            name="birth_place">
                    </div>
                </div>

                <div class="form-group row mb-2">
                    <label for="birth_date" class="col-sm-5 control-label">Tanggal Lahir <span
                            style="color: red">*</span></label>
                    <div class="col-sm-7">
                        <div class="input-group">
                            <input autocomplete="off" readonly type="text"
                                class="form-control form-control-sm rounded-0 border border-secondary date"
                                id="birth_date" placeholder="Masukan tanggal lahir anda dengan format : YYYY-MM-DD">
                            <div class="input-group-append">
                                <span class="btn btn-sm btn-outline-secondary rounded-0"><i
                                        class="fa fa-calendar text-dark"></i></span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-group row mb-2">
                    <label for="religion_id" class="col-sm-5 control-label">Agama <span
                            style="color: red">*</span></label>
                    <div class="col-sm-7">
                        <select name="religion_id"
                            class="custom-select custom-select-sm rounded-0 border border-secondary" id="religion_id">
                            <option value="" selected="selected">Pilih :</option>
                            <option value="94">Islam</option>
                            <option value="95">Kristen / Protestan</option>
                            <option value="96">Katholik</option>
                            <option value="97">Hindu</option>
                            <option value="98">Budha</option>
                            <option value="99">Khong Hu Chu</option>
                            <option value="100">Lainnya</option>
                        </select>
                    </div>
                </div>

                <div class="form-group row mb-2">
                    <label for="special_need_id" class="col-sm-5 control-label">Kebutuhan Khusus <span
                            style="color: red">*</span></label>
                    <div class="col-sm-7">
                        <select name="special_need_id"
                            class="custom-select custom-select-sm rounded-0 border border-secondary"
                            id="special_need_id">
                            <option value="23">Tidak</option>
                            <option value="24">Tuna Netra</option>
                            <option value="25">Tuna Rungu</option>
                            <option value="26">Tuna Grahita ringan</option>
                            <option value="27">Tuna Grahita Sedang</option>
                            <option value="28">Tuna Daksa Ringan</option>
                            <option value="29">Tuna Daksa Sedang</option>
                            <option value="30">Tuna Laras</option>
                            <option value="31">Tuna Wicara</option>
                            <option value="32">Tuna ganda</option>
                            <option value="33">Hiper aktif</option>
                            <option value="34">Cerdas Istimewa</option>
                            <option value="35">Bakat Istimewa</option>
                            <option value="36">Kesulitan Belajar</option>
                            <option value="37">Narkoba</option>
                            <option value="38">Indigo</option>
                            <option value="39">Down Sindrome</option>
                            <option value="40">Autis</option>
                            <option value="41">Lainnya</option>
                        </select>
                    </div>
                </div>

                <div class="form-group row mb-2">
                    <label for="street_address" class="col-sm-5 control-label">Alamat Jalan <span
                            style="color: red">*</span></label>
                    <div class="col-sm-7">
                        <textarea rows="4" name="street_address" id="street_address"
                            class="form-control form-control-sm rounded-0 border border-secondary"></textarea>
                    </div>
                </div>

                <div class="form-group row mb-2">
                    <label for="rt" class="col-sm-5 control-label">RT <span style="color: red">*</span></label>
                    <div class="col-sm-7">
                        <input type="text" value=""
                            class="form-control form-control-sm rounded-0 border border-secondary" id="rt" name="rt"
                            placeholder="Rukun Tetangga">
                    </div>
                </div>

                <div class="form-group row mb-2">
                    <label for="rw" class="col-sm-5 control-label">RW <span style="color: red">*</span></label>
                    <div class="col-sm-7">
                        <input type="text" value=""
                            class="form-control form-control-sm rounded-0 border border-secondary" id="rw" name="rw"
                            placeholder="Rukun Warga">
                    </div>
                </div>

                <div class="form-group row mb-2">
                    <label for="sub_village" class="col-sm-5 control-label">Nama Dusun <span
                            style="color: red">*</span></label>
                    <div class="col-sm-7">
                        <input type="text" value=""
                            class="form-control form-control-sm rounded-0 border border-secondary" id="sub_village"
                            name="sub_village">
                    </div>
                </div>

                <div class="form-group row mb-2">
                    <label for="village" class="col-sm-5 control-label">Nama Kelurahan/ Desa <span
                            style="color: red">*</span></label>
                    <div class="col-sm-7">
                        <input type="text" value=""
                            class="form-control form-control-sm rounded-0 border border-secondary" id="village"
                            name="village">
                    </div>
                </div>

                <div class="form-group row mb-2">
                    <label for="sub_district" class="col-sm-5 control-label">Kecamatan <span
                            style="color: red">*</span></label>
                    <div class="col-sm-7">
                        <input type="text" value=""
                            class="form-control form-control-sm rounded-0 border border-secondary" id="sub_district"
                            name="sub_district">
                    </div>
                </div>

                <div class="form-group row mb-2">
                    <label for="district" class="col-sm-5 control-label">Kabupaten <span
                            style="color: red">*</span></label>
                    <div class="col-sm-7">
                        <input type="text" value=""
                            class="form-control form-control-sm rounded-0 border border-secondary" id="district"
                            name="district">
                    </div>
                </div>

                <div class="form-group row mb-2">
                    <label for="postal_code" class="col-sm-5 control-label">Kode Pos <span
                            style="color: red">*</span></label>
                    <div class="col-sm-7">
                        <input type="text" value=""
                            class="form-control form-control-sm rounded-0 border border-secondary" id="postal_code"
                            name="postal_code">
                    </div>
                </div>

                <div class="form-group row mb-2">
                    <label for="residence_id" class="col-sm-5 control-label">Tempat Tinggal <span
                            style="color: red">*</span></label>
                    <div class="col-sm-7">
                        <select name="residence_id"
                            class="custom-select custom-select-sm rounded-0 border border-secondary" id="residence_id">
                            <option value="" selected="selected">Pilih :</option>
                            <option value="79">Bersama orang tua</option>
                            <option value="80">Wali</option>
                            <option value="81">Kos</option>
                            <option value="82">Asrama</option>
                            <option value="83">Panti Asuhan</option>
                            <option value="84">Lainnya</option>
                        </select>
                    </div>
                </div>

                <div class="form-group row mb-2">
                    <label for="transportation_id" class="col-sm-5 control-label">Moda Transportasi <span
                            style="color: red">*</span></label>
                    <div class="col-sm-7">
                        <select name="transportation_id"
                            class="custom-select custom-select-sm rounded-0 border border-secondary"
                            id="transportation_id">
                            <option value="" selected="selected">Pilih :</option>
                            <option value="85">Jalan kaki</option>
                            <option value="86">Kendaraan pribadi</option>
                            <option value="87">Kendaraan Umum / angkot / Pete-pete</option>
                            <option value="88">Jemputan Sekolah</option>
                            <option value="89">Kereta Api</option>
                            <option value="90">Ojek</option>
                            <option value="91">Andong / Bendi / Sado / Dokar / Delman / Beca</option>
                            <option value="92">Perahu penyebrangan / Rakit / Getek</option>
                            <option value="93">Lainnya</option>
                        </select>
                    </div>
                </div>

                <div class="form-group row mb-2">
                    <label for="mobile_phone" class="col-sm-5 control-label">Nomor Handphone <span
                            style="color: red">*</span></label>
                    <div class="col-sm-7">
                        <input type="text" value=""
                            class="form-control form-control-sm rounded-0 border border-secondary" id="mobile_phone"
                            name="mobile_phone">
                    </div>
                </div>

                <div class="form-group row mb-2">
                    <label for="phone" class="col-sm-5 control-label">Nomor Telepon <span
                            style="color: red">*</span></label>
                    <div class="col-sm-7">
                        <input type="text" value=""
                            class="form-control form-control-sm rounded-0 border border-secondary" id="phone"
                            name="phone">
                    </div>
                </div>

                <div class="form-group row mb-2">
                    <label for="email" class="col-sm-5 control-label">E-mail Pribadi <span
                            style="color: red">*</span></label>
                    <div class="col-sm-7">
                        <input type="text" value=""
                            class="form-control form-control-sm rounded-0 border border-secondary" id="email"
                            name="email">
                    </div>
                </div>

                <div class="form-group row mb-2 kis">
                    <label for="kis" class="col-sm-5 control-label">Nomor Kartu Indonesia Sehat (KIS) <span
                            style="color: red">*</span></label>
                    <div class="col-sm-7">
                        <input type="text" value=""
                            class="form-control form-control-sm rounded-0 border border-secondary" id="kis" name="kis">
                    </div>
                </div>

                <div class="form-group row mb-2 kip">
                    <label for="kip" class="col-sm-5 control-label">Nomor Kartu Indonesia Pintar (KIP) <span
                            style="color: red">*</span></label>
                    <div class="col-sm-7">
                        <input type="text" value=""
                            class="form-control form-control-sm rounded-0 border border-secondary" id="kip" name="kip">
                    </div>
                </div>

                <div class="form-group row mb-2 kps">
                    <label for="kps" class="col-sm-5 control-label">Nomor Kartu Pra Sejahtera (KPS) <span
                            style="color: red">*</span></label>
                    <div class="col-sm-7">
                        <input type="text" value=""
                            class="form-control form-control-sm rounded-0 border border-secondary" id="kps" name="kps">
                    </div>
                </div>

                <div class="form-group row mb-2 kks">
                    <label for="kks" class="col-sm-5 control-label">Nomor Kartu Keluarga Sejahtera (KKS) <span
                            style="color: red">*</span></label>
                    <div class="col-sm-7">
                        <input type="text" value=""
                            class="form-control form-control-sm rounded-0 border border-secondary" id="kks" name="kks">
                    </div>
                </div>

                <div class="form-group row mb-2 sktm">
                    <label for="sktm" class="col-sm-5 control-label">Nomor Surat Keterangan Tidak Mampu (SKTM) <span
                            style="color: red">*</span></label>
                    <div class="col-sm-7">
                        <input type="text" value=""
                            class="form-control form-control-sm rounded-0 border border-secondary" id="sktm"
                            name="sktm">
                    </div>
                </div>

                <div class="form-group row mb-2">
                    <label for="citizenship" class="col-sm-5 control-label">Kewarganegaraan <span
                            style="color: red">*</span></label>
                    <div class="col-sm-7">
                        <select name="citizenship" id="citizenship"
                            class="custom-select custom-select-sm rounded-0 border border-secondary"
                            onchange="change_country_field()" onblur="change_country_field()"
                            onmouseup="change_country_field()">
                            <option value="">Pilih :</option>
                            <option value="WNI">Warga Negara Indonesia (WNI)</option>
                            <option value="WNA">Warga Negara Asing (WNA)</option>
                        </select>
                    </div>
                </div>

                <div class="form-group row mb-2 country">
                    <label for="country" class="col-sm-5 control-label">Nama Negara <span
                            style="color: red">*</span></label>
                    <div class="col-sm-7">
                        <input type="text" value=""
                            class="form-control form-control-sm rounded-0 border border-secondary" id="country"
                            name="country" placeholder="Diisi jika warga negara asing">
                    </div>
                </div>

                <div class="form-group row mb-2">
                    <label for="file" class="col-sm-5 control-label">Foto <span style="color: red">*</span></label>
                    <div class="col-sm-7">
                        <input type="file" id="photo" name="photo">
                        <small class="form-text text-muted">Foto harus JPG dan ukuran file maksimal 1 Mb</small>
                    </div>
                </div>

                <div class="form-group row mb-2">
                    <label for="father_name" class="col-sm-5 control-label">Nama Ayah <span
                            style="color: red">*</span></label>
                    <div class="col-sm-7">
                        <input type="text" value=""
                            class="form-control form-control-sm rounded-0 border border-secondary" id="father_name"
                            name="father_name">
                    </div>
                </div>

                <div class="form-group row mb-2">
                    <label for="father_birth_year" class="col-sm-5 control-label">Tahun Lahir Ayah <span
                            style="color: red">*</span></label>
                    <div class="col-sm-7">
                        <input type="text" value=""
                            class="form-control form-control-sm rounded-0 border border-secondary"
                            id="father_birth_year" name="father_birth_year"
                            placeholder="Tahun Lahir Ayah Kandung. contoh : 1965">
                    </div>
                </div>

                <div class="form-group row mb-2">
                    <label for="father_education_id" class="col-sm-5 control-label">Pendidikan Ayah <span
                            style="color: red">*</span></label>
                    <div class="col-sm-7">
                        <select name="father_education_id"
                            class="custom-select custom-select-sm rounded-0 border border-secondary"
                            id="father_education_id">
                            <option value="" selected="selected">Pilih :</option>
                            <option value="42">Tidak sekolah</option>
                            <option value="43">Putus SD</option>
                            <option value="44">SD Sederajat</option>
                            <option value="45">SMP Sederajat</option>
                            <option value="46">SMA Sederajat</option>
                            <option value="47">D1</option>
                            <option value="48">D2</option>
                            <option value="49">D3</option>
                            <option value="50">D4/S1</option>
                            <option value="51">S2</option>
                            <option value="52">S3</option>
                            <option value="179">SMK</option>
                        </select>
                    </div>
                </div>

                <div class="form-group row mb-2">
                    <label for="father_employment_id" class="col-sm-5 control-label">Pekerjaan Ayah <span
                            style="color: red">*</span></label>
                    <div class="col-sm-7">
                        <select name="father_employment_id"
                            class="custom-select custom-select-sm rounded-0 border border-secondary"
                            id="father_employment_id">
                            <option value="" selected="selected">Pilih :</option>
                            <option value="10">Tidak bekerja</option>
                            <option value="11">Nelayan</option>
                            <option value="12">Petani</option>
                            <option value="13">Peternak</option>
                            <option value="14">PNS/TNI/POLRI</option>
                            <option value="15">Karyawan Swasta</option>
                            <option value="16">Pedagang Kecil</option>
                            <option value="17">Pedagang Besar</option>
                            <option value="18">Wiraswasta</option>
                            <option value="19">Wirausaha</option>
                            <option value="20">Buruh</option>
                            <option value="21">Pensiunan</option>
                            <option value="22">Lain-lain</option>
                        </select>
                    </div>
                </div>

                <div class="form-group row mb-2">
                    <label for="father_monthly_income_id" class="col-sm-5 control-label">Penghasilan Bulanan Ayah <span
                            style="color: red">*</span></label>
                    <div class="col-sm-7">
                        <select name="father_monthly_income_id"
                            class="custom-select custom-select-sm rounded-0 border border-secondary"
                            id="father_monthly_income_id">
                            <option value="" selected="selected">Pilih :</option>
                            <option value="68">Kurang dari Rp 1.000.000</option>
                            <option value="69">Rp 1.000.000 - Rp 2.000.000</option>
                            <option value="70">Lebih dari Rp 2.000.000</option>
                            <option value="71">Kurang dari Rp. 500,000</option>
                            <option value="72">Rp. 500,000 - Rp. 999,999</option>
                            <option value="73">Rp. 1,000,000 - Rp. 1,999,999</option>
                            <option value="74">Rp. 2,000,000 - Rp. 4,999,999</option>
                            <option value="75">Rp. 5,000,000 - Rp. 20,000,000</option>
                            <option value="76">Lebih dari Rp. 20,000,000</option>
                            <option value="77">Tidak Berpenghasilan</option>
                            <option value="78">Lainnya</option>
                        </select>
                    </div>
                </div>

                <div class="form-group row mb-2">
                    <label for="father_special_need_id" class="col-sm-5 control-label">Kebutuhan Khusus Ayah <span
                            style="color: red">*</span></label>
                    <div class="col-sm-7">
                        <select name="father_special_need_id"
                            class="custom-select custom-select-sm rounded-0 border border-secondary"
                            id="father_special_need_id">
                            <option value="23">Tidak</option>
                            <option value="24">Tuna Netra</option>
                            <option value="25">Tuna Rungu</option>
                            <option value="26">Tuna Grahita ringan</option>
                            <option value="27">Tuna Grahita Sedang</option>
                            <option value="28">Tuna Daksa Ringan</option>
                            <option value="29">Tuna Daksa Sedang</option>
                            <option value="30">Tuna Laras</option>
                            <option value="31">Tuna Wicara</option>
                            <option value="32">Tuna ganda</option>
                            <option value="33">Hiper aktif</option>
                            <option value="34">Cerdas Istimewa</option>
                            <option value="35">Bakat Istimewa</option>
                            <option value="36">Kesulitan Belajar</option>
                            <option value="37">Narkoba</option>
                            <option value="38">Indigo</option>
                            <option value="39">Down Sindrome</option>
                            <option value="40">Autis</option>
                            <option value="41">Lainnya</option>
                        </select>
                    </div>
                </div>

                <div class="form-group row mb-2">
                    <label for="mother_name" class="col-sm-5 control-label">Nama Ibu <span
                            style="color: red">*</span></label>
                    <div class="col-sm-7">
                        <input type="text" value=""
                            class="form-control form-control-sm rounded-0 border border-secondary" id="mother_name"
                            name="mother_name">
                    </div>
                </div>

                <div class="form-group row mb-2">
                    <label for="mother_birth_year" class="col-sm-5 control-label">Tahun Lahir Ibu <span
                            style="color: red">*</span></label>
                    <div class="col-sm-7">
                        <input type="text" value=""
                            class="form-control form-control-sm rounded-0 border border-secondary"
                            id="mother_birth_year" name="mother_birth_year"
                            placeholder="Tahun Lahir Ibu Kandung. contoh : 1965">
                    </div>
                </div>

                <div class="form-group row mb-2">
                    <label for="mother_education_id" class="col-sm-5 control-label">Pendidikan Ibu <span
                            style="color: red">*</span></label>
                    <div class="col-sm-7">
                        <select name="mother_education_id"
                            class="custom-select custom-select-sm rounded-0 border border-secondary"
                            id="mother_education_id">
                            <option value="" selected="selected">Pilih :</option>
                            <option value="42">Tidak sekolah</option>
                            <option value="43">Putus SD</option>
                            <option value="44">SD Sederajat</option>
                            <option value="45">SMP Sederajat</option>
                            <option value="46">SMA Sederajat</option>
                            <option value="47">D1</option>
                            <option value="48">D2</option>
                            <option value="49">D3</option>
                            <option value="50">D4/S1</option>
                            <option value="51">S2</option>
                            <option value="52">S3</option>
                            <option value="179">SMK</option>
                        </select>
                    </div>
                </div>

                <div class="form-group row mb-2">
                    <label for="mother_employment_id" class="col-sm-5 control-label">Pekerjaan Ibu <span
                            style="color: red">*</span></label>
                    <div class="col-sm-7">
                        <select name="mother_employment_id"
                            class="custom-select custom-select-sm rounded-0 border border-secondary"
                            id="mother_employment_id">
                            <option value="" selected="selected">Pilih :</option>
                            <option value="10">Tidak bekerja</option>
                            <option value="11">Nelayan</option>
                            <option value="12">Petani</option>
                            <option value="13">Peternak</option>
                            <option value="14">PNS/TNI/POLRI</option>
                            <option value="15">Karyawan Swasta</option>
                            <option value="16">Pedagang Kecil</option>
                            <option value="17">Pedagang Besar</option>
                            <option value="18">Wiraswasta</option>
                            <option value="19">Wirausaha</option>
                            <option value="20">Buruh</option>
                            <option value="21">Pensiunan</option>
                            <option value="22">Lain-lain</option>
                        </select>
                    </div>
                </div>

                <div class="form-group row mb-2">
                    <label for="mother_monthly_income_id" class="col-sm-5 control-label">Penghasilan Bulanan Ibu <span
                            style="color: red">*</span></label>
                    <div class="col-sm-7">
                        <select name="mother_monthly_income_id"
                            class="custom-select custom-select-sm rounded-0 border border-secondary"
                            id="mother_monthly_income_id">
                            <option value="" selected="selected">Pilih :</option>
                            <option value="68">Kurang dari Rp 1.000.000</option>
                            <option value="69">Rp 1.000.000 - Rp 2.000.000</option>
                            <option value="70">Lebih dari Rp 2.000.000</option>
                            <option value="71">Kurang dari Rp. 500,000</option>
                            <option value="72">Rp. 500,000 - Rp. 999,999</option>
                            <option value="73">Rp. 1,000,000 - Rp. 1,999,999</option>
                            <option value="74">Rp. 2,000,000 - Rp. 4,999,999</option>
                            <option value="75">Rp. 5,000,000 - Rp. 20,000,000</option>
                            <option value="76">Lebih dari Rp. 20,000,000</option>
                            <option value="77">Tidak Berpenghasilan</option>
                            <option value="78">Lainnya</option>
                        </select>
                    </div>
                </div>

                <div class="form-group row mb-2">
                    <label for="mother_special_need_id" class="col-sm-5 control-label">Kebutuhan Khusus Ibu <span
                            style="color: red">*</span></label>
                    <div class="col-sm-7">
                        <select name="mother_special_need_id"
                            class="custom-select custom-select-sm rounded-0 border border-secondary"
                            id="mother_special_need_id">
                            <option value="23">Tidak</option>
                            <option value="24">Tuna Netra</option>
                            <option value="25">Tuna Rungu</option>
                            <option value="26">Tuna Grahita ringan</option>
                            <option value="27">Tuna Grahita Sedang</option>
                            <option value="28">Tuna Daksa Ringan</option>
                            <option value="29">Tuna Daksa Sedang</option>
                            <option value="30">Tuna Laras</option>
                            <option value="31">Tuna Wicara</option>
                            <option value="32">Tuna ganda</option>
                            <option value="33">Hiper aktif</option>
                            <option value="34">Cerdas Istimewa</option>
                            <option value="35">Bakat Istimewa</option>
                            <option value="36">Kesulitan Belajar</option>
                            <option value="37">Narkoba</option>
                            <option value="38">Indigo</option>
                            <option value="39">Down Sindrome</option>
                            <option value="40">Autis</option>
                            <option value="41">Lainnya</option>
                        </select>
                    </div>
                </div>


                <div class="form-group row mb-2">
                    <label for="guardian_name" class="col-sm-5 control-label">Nama Wali <span
                            style="color: red">*</span></label>
                    <div class="col-sm-7">
                        <input type="text" value=""
                            class="form-control form-control-sm rounded-0 border border-secondary" id="guardian_name"
                            name="guardian_name">
                    </div>
                </div>

                <div class="form-group row mb-2">
                    <label for="guardian_birth_year" class="col-sm-5 control-label">Tahun Lahir Wali <span
                            style="color: red">*</span></label>
                    <div class="col-sm-7">
                        <input type="text" value=""
                            class="form-control form-control-sm rounded-0 border border-secondary"
                            id="guardian_birth_year" name="guardian_birth_year"
                            placeholder="Tahun Lahir Wali. contoh : 1965">
                    </div>
                </div>

                <div class="form-group row mb-2">
                    <label for="guardian_education_id" class="col-sm-5 control-label">Pendidikan Wali <span
                            style="color: red">*</span></label>
                    <div class="col-sm-7">
                        <select name="guardian_education_id"
                            class="custom-select custom-select-sm rounded-0 border border-secondary"
                            id="guardian_education_id">
                            <option value="" selected="selected">Pilih :</option>
                            <option value="42">Tidak sekolah</option>
                            <option value="43">Putus SD</option>
                            <option value="44">SD Sederajat</option>
                            <option value="45">SMP Sederajat</option>
                            <option value="46">SMA Sederajat</option>
                            <option value="47">D1</option>
                            <option value="48">D2</option>
                            <option value="49">D3</option>
                            <option value="50">D4/S1</option>
                            <option value="51">S2</option>
                            <option value="52">S3</option>
                            <option value="179">SMK</option>
                        </select>
                    </div>
                </div>

                <div class="form-group row mb-2">
                    <label for="guardian_employment_id" class="col-sm-5 control-label">Pekerjaan Wali <span
                            style="color: red">*</span></label>
                    <div class="col-sm-7">
                        <select name="guardian_employment_id"
                            class="custom-select custom-select-sm rounded-0 border border-secondary"
                            id="guardian_employment_id">
                            <option value="" selected="selected">Pilih :</option>
                            <option value="10">Tidak bekerja</option>
                            <option value="11">Nelayan</option>
                            <option value="12">Petani</option>
                            <option value="13">Peternak</option>
                            <option value="14">PNS/TNI/POLRI</option>
                            <option value="15">Karyawan Swasta</option>
                            <option value="16">Pedagang Kecil</option>
                            <option value="17">Pedagang Besar</option>
                            <option value="18">Wiraswasta</option>
                            <option value="19">Wirausaha</option>
                            <option value="20">Buruh</option>
                            <option value="21">Pensiunan</option>
                            <option value="22">Lain-lain</option>
                        </select>
                    </div>
                </div>

                <div class="form-group row mb-2">
                    <label for="guardian_monthly_income_id" class="col-sm-5 control-label">Penghasilan Bulanan Wali
                        <span style="color: red">*</span></label>
                    <div class="col-sm-7">
                        <select name="guardian_monthly_income_id"
                            class="custom-select custom-select-sm rounded-0 border border-secondary"
                            id="guardian_monthly_income_id">
                            <option value="" selected="selected">Pilih :</option>
                            <option value="68">Kurang dari Rp 1.000.000</option>
                            <option value="69">Rp 1.000.000 - Rp 2.000.000</option>
                            <option value="70">Lebih dari Rp 2.000.000</option>
                            <option value="71">Kurang dari Rp. 500,000</option>
                            <option value="72">Rp. 500,000 - Rp. 999,999</option>
                            <option value="73">Rp. 1,000,000 - Rp. 1,999,999</option>
                            <option value="74">Rp. 2,000,000 - Rp. 4,999,999</option>
                            <option value="75">Rp. 5,000,000 - Rp. 20,000,000</option>
                            <option value="76">Lebih dari Rp. 20,000,000</option>
                            <option value="77">Tidak Berpenghasilan</option>
                            <option value="78">Lainnya</option>
                        </select>
                    </div>
                </div>

                <div class="form-group row mb-2">
                    <label for="height" class="col-sm-5 control-label">Tinggi Badan (Cm) <span
                            style="color: red">*</span></label>
                    <div class="col-sm-7">
                        <input type="number" value=""
                            class="form-control form-control-sm rounded-0 border border-secondary" id="height"
                            name="height">
                    </div>
                </div>

                <div class="form-group row mb-2">
                    <label for="weight" class="col-sm-5 control-label">Berat Badan (Kg) <span
                            style="color: red">*</span></label>
                    <div class="col-sm-7">
                        <input type="number" value=""
                            class="form-control form-control-sm rounded-0 border border-secondary" id="weight"
                            name="weight">
                    </div>
                </div>

                <div class="form-group row mb-2">
                    <label for="mileage" class="col-sm-5 control-label">Jarak Tempat Tinggal ke Sekolah (Km) <span
                            style="color: red">*</span></label>
                    <div class="col-sm-7">
                        <input type="text" value=""
                            class="form-control form-control-sm rounded-0 border border-secondary" id="mileage"
                            name="mileage">
                    </div>
                </div>

                <div class="form-group row mb-2">
                    <label for="traveling_time" class="col-sm-5 control-label">Waktu Tempuh ke Sekolah (Menit) <span
                            style="color: red">*</span></label>
                    <div class="col-sm-7">
                        <input type="number" value=""
                            class="form-control form-control-sm rounded-0 border border-secondary" id="traveling_time"
                            name="traveling_time">
                    </div>
                </div>

                <div class="form-group row mb-2">
                    <label for="sibling_number" class="col-sm-5 control-label">Jumlah Saudara Kandung <span
                            style="color: red">*</span></label>
                    <div class="col-sm-7">
                        <input type="number" value=""
                            class="form-control form-control-sm rounded-0 border border-secondary" id="sibling_number"
                            name="sibling_number">
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
        <div class="card-footer">
            <div class="form-group row mb-0">
                <div class="offset-sm-5 col-sm-7">
                    <button type="button" onclick="student_registration(); return false;"
                        class="btn action-button rounded-0"><i class="fa fa-send"></i> Simpan Formulir
                        Pendaftaran</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /CONTENT -->
<?= $this->endSection('isi') ?>