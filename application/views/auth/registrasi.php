<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>UNICO SENTRAL DISTRIBUSI | LOGIN</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="shortcut icon" href="<?= theme() ?>favicon.ico" />
    <link rel="stylesheet" href="<?= theme() ?>bower_components/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= theme() ?>bower_components/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?= theme() ?>bower_components/Ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="<?= theme() ?>dist/css/AdminLTE.min.css">
    <link rel="stylesheet" href="<?= theme() ?>plugins/iCheck/square/blue.css">
    <link rel="stylesheet" href="<?= theme() ?>bower_components/source-sans/source-sans-pro.css">
</head>

<body class="hold-transition login-page">
    <div class="login-box" style="margin-top: 50px">
        <div class="login-box-body">
        <div class="login-logo">
        <p class="text-danger"><b><i>Sentral</b>tukang</i></p>
        </div>
            <?= form_open('backend/auth/store', ['id' => 'form_create']) ?>
            <div class="modal-body">
                <span id="success_message"></span>
                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                        <input type="text" name="nama" class="form-control" placeholder="Nama Anda">
                    </div>
                    <span class="error nama text-danger"></span>
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                        <input type="text" name="email" class="form-control" placeholder="Email">
                    </div>
                    <span class="error email text-danger"></span>
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                        <input type="text" name="telp" class="form-control" placeholder="Telepon">
                    </div>
                    <span class="error telp text-danger"></span>
                </div>
                <div class="form-group">
                    <textarea class="form-control" name="alamat" rows="3" placeholder="Alamat"></textarea>
                    <span class="error alamat text-danger"></span>
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-key"></i></span>
                        <input type="password" name="pass" class="form-control" placeholder="Password">
                    </div>
                    <span class="error pass text-danger"></span>
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-key"></i></span>
                        <input type="password" name="retry" class="form-control" placeholder="Konfirmasi Password">
                    </div>
                    <span class="error retry text-danger"></span>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-danger btn-md btn-block btn-flat">BUAT AKUN</button>
                <a href="<?= site_url('welcome') ?>" class="btn btn-danger btn-block btn-flat"></i> KEMBALI</a>
            </div>             
          <?= form_close() ?>
        </div>
</body>
<script src="<?= theme() ?>bower_components/jquery/dist/jquery.min.js"></script>
    <script src="<?= theme() ?>bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="<?= theme() ?>plugins/iCheck/icheck.min.js"></script>
    <script>
        $(function() {
            $('input').iCheck({
                checkboxClass: 'icheckbox_square-blue',
                radioClass: 'iradio_square-blue',
                increaseArea: '20%' /* optional */
            });
        });
    $(document).ready(function() {
        $("#form_create").submit(function(e) {
            e.preventDefault();
            var formData = new FormData($("#form_create")[0]);
            $.ajax({
                url: $("#form_create").attr('action'),
                dataType: 'json',
                type: 'POST',
                data: formData,
                contentType: false,
                processData: false,
                success: function(resp) {
                    console.log(resp);
                    $('.error').html('');
                    if (resp.status == false) {
                        $.each(resp.pesan, function(i, m) {
                            $('.' + i).text(m);
                        });
                    } else {
                        $('#success_message').html(resp.pesan);
                        $('#form_create')[0].reset();
                    }
                }
            });
        });
    });
</script>
</html>