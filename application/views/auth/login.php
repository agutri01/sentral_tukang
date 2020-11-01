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

<body >
    <div class="login-box" style="margin-top: 50px">
        <div class="login-logo">
            <a href="<?= site_url('') ?>"><p class="text-danger"><b><i>Sentral</b>tukang</i></p></a>
        </div>
        <div class="login-box-body">
            <?php echo $this->session->flashdata('pesan');
                echo form_open('validate'); ?>
            <div class="form-group has-feedback">
                <input type="text" class="form-control" placeholder="Email" name="email" autofocus>
                <span class="error username text-danger"></span>
            </div>
            <div class="form-group has-feedback">
                <input type="password" class="form-control" placeholder="Password" name="password">
                <span class="error password text-danger"></span>
            </div>
            <div class="form-group has-feedback">
           </div>
            <div class="form-group has-feedback">
                    <button type="submit" class="btn btn-danger btn-md btn-block btn-flat" id="btnLogin">Login</button>
               <a href="<?= site_url('register') ?>" class="btn btn-danger btn-block btn-flat"></i> Registrasi</a>
            </div>
           <?php echo form_close(); ?>
        </div>
    </div>
</body>

</html>