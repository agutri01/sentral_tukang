<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>PT. UNICO | Dashboard</title>
    <!-- Source css -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="<?= theme() ?>bower_components/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= theme() ?>bower_components/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?= theme() ?>bower_components/Ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="<?= theme() ?>dist/css/AdminLTE.min.css">
    <link rel="stylesheet" href="<?= theme() ?>dist/css/skins/_all-skins.min.css">
    <link rel="stylesheet" href="<?= theme() ?>plugins/icomoon/styles.css">
    <link rel="stylesheet" href="<?= theme() ?>bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
    <link rel="stylesheet" href="<?= theme() ?>bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
    <link rel="stylesheet" href="<?= theme() ?>bower_components/source-sans/source-sans-pro.css">
    <!-- Source javascript -->
    <script src="<?= theme() ?>bower_components/jquery/dist/jquery.min.js"></script>
    <script src="<?= theme() ?>bower_components/jquery-ui/jquery-ui.min.js"></script>
    <script>
        $.widget.bridge('uibutton', $.ui.button);
    </script>
    <script src="<?= theme() ?>bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="<?= theme() ?>bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
    <script src="<?= theme() ?>bower_components/moment/min/moment.min.js"></script>
    <script src="<?= theme() ?>bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
    <!-- DataTables -->
    <script src="<?= theme() ?>bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="<?= theme() ?>bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="<?= theme() ?>bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
    <script src="<?= theme() ?>bower_components/fastclick/lib/fastclick.js"></script>
    <script src="<?= theme() ?>dist/js/adminlte.min.js"></script>
    <script src="<?= theme() ?>dist/js/pages/dashboard.js"></script>
    <script src="<?= theme() ?>dist/js/demo.js"></script>
    <script src="<?= theme() ?>bower_components/ckeditor/ckeditor.js"></script>
    <script>
        $(function() {
            $('.tabel-data').DataTable()
            CKEDITOR.replace('editor1')
            $('.textarea').wysihtml5()
        })
    </script>
</head>
<?php $urlp = $this->uri->segment(1) . '/' . $this->uri->segment(2); ?>

<body class="hold-transition skin-red sidebar-mini ">
    <div class="wrapper">
        <?php $this->load->view('layout/header') ?>
        <?php $this->load->view('layout/sidebar') ?>
        <div class="content-wrapper">
            <section class="content-header">
                <h1>
                    {judul}
                    <small>{subjudul}</small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="<?= site_url('home') ?>"><i class="fa fa-dashboard"></i> Home</a></li>
                    {links}
                </ol>
            </section>
            <section class="content">
                <?php
                if (isset($content) && $content)
                    $this->load->view($content);
                ?>
            </section>
        </div>
        <?php $this->load->view('layout/footer') ?>
    </div>
</body>

</html>