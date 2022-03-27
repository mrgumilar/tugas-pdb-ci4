<li class="dropdown notification-list list-inline-item d-none d-md-inline-block">
    <a class="nav-link waves-effect" href="#" id="btn-fullscreen">
        <i class="mdi mdi-arrow-expand-all noti-icon"></i>
    </a>
</li>


<?php if (session()->get('user_id'))  { ?>
<li class="dropdown notification-list list-inline-item">
    <div class="dropdown notification-list nav-pro-img">
        <a class="dropdown-toggle nav-link arrow-none nav-user" data-toggle="dropdown" href="#" role="button"
            aria-haspopup="false" aria-expanded="false">
            <img src="<?= base_url()?>/themes/be/assets/images/users/user-4.jpg" alt="user" class="rounded-circle">
        </a>
        <div class="dropdown-menu dropdown-menu-right profile-dropdown ">

            <div class="dropdown-divider"></div>
            <a class="dropdown-item text-danger" href="#" id="logout"><i class="mdi mdi-power text-danger"></i>
                Logout</a>
        </div>
    </div>
</li>

<?php } ?>