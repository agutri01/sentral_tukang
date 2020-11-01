<?php $urls = $this->uri->segment(1) ?>
<?php $urllap = $this->uri->segment(1) . '/' . $this->uri->segment(2) ?>
<aside class="main-sidebar">
    <section class="sidebar">
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?= theme() ?>dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p><?= users() ?></p>
                <a href="<?= theme() ?>#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">MAIN NAVIGATION</li>
            <li class="<?= $urls == null || $urls == "home" ? "active" : null ?>">
                <a href="<?= site_url('home') ?>">
                    <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                </a>
                    <li class="<?= $urls == "users" ? "active" : null ?>">
                        <a href="<?= site_url('users') ?>"><i class="fa fa-user"></i> User</a>
                    </li>
                    <li >
                        <a href="<?= site_url('logout') ?>"><i class="fa fa-sign-out"></i> Sign Out</a>
                    </li>  
        </ul>
    </section>
</aside>