<?php if (session()->get('level') == 'admin') { ?>
<li class="menu-title">Menu</li>
<li>
    <a href="<?= base_url('dashboard')?>" class="waves-effect">
        <i class="icon-home"></i> <span> Dashboard
        </span>
    </a>
</li>

<li class="menu-title">Menu Master</li>
<li>
    <a href="<?= base_url('pekerjaan')?>" class="waves-effect">
        <i class="icon-case-2"></i> <span> Pekerjaan
        </span>
    </a>
</li>

<li>
    <a href="<?= base_url('pendidikan')?>" class="waves-effect">
        <i class="icon-paper-pen"></i> <span> Pendidikan
        </span>
    </a>
</li>


<li>
    <a href="<?= base_url('agama')?>" class="waves-effect">
        <i class="icon-heart"></i> <span> Agama
        </span>
    </a>
</li>


<li class="menu-title">Menu user</li>
<li>
    <a href="<?= base_url('konfigurasi/user')?>" class="waves-effect">
        <i class="icon-setting-1"></i> <span> Konfigurasi User
        </span>
    </a>
</li>
<?php } ?>

<li class="menu-title">Menu Pendaftaran</li>
<li>
    <a href="<?= base_url('pendaftaran')?>" class="waves-effect">
        <i class="icon-spread"></i> <span> Data Pendaftaran
        </span>
    </a>
</li>



