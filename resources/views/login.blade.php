<!DOCTYPE html>
<!--
  Name: Flatty - Flat Administration Template
  Website: https://wrapbootstrap.com/theme/flatty-flat-administration-template-WB0P6NR1N?ref=metheus
  Version: 2.4.1
-->
<html lang='en'>
<head>
    <title>Login | Administration Sewa Gedung</title>
    <meta content='sewa gedung banjarmasin, Sewa Gedung Raya, Gedung Raya 1, Gedung Raya 2, Sewa Gedung Raya Di Banjarmasin, Sewa Gedung Termurah Di Banjarmasin' name='keywords'>
    <meta content='sewa gedung banjarmasin, Sewa Gedung Raya, Gedung Raya 1, Gedung Raya 2, Sewa Gedung Raya Di Banjarmasin, Sewa Gedung Termurah Di Banjarmasin' name='description'>
    <meta content='gedungraya.com' name='author'>
    <meta content='all' name='robots'>
    <meta content='text/html; charset=utf-8' http-equiv='Content-Type'>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>

    <link href='/admin/assets/images/meta_icons/favicon.ico' rel='shortcut icon' type='image/x-icon'>
    <link href='/admin/assets/images/meta_icons/apple-touch-icon-precomposed.png' rel='apple-touch-icon-precomposed'>
    <link href="/admin/assets/stylesheets/bootstrap/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
     <link href="/admin/assets/stylesheets/light-theme.css" rel="stylesheet" type="text/css" media="all" id="color-settings-body-color" />
    <link href="/admin/assets/stylesheets/theme-colors.css" rel="stylesheet" type="text/css" media="all" />
    @toastr_css
    {{--<link href="/admin/assets/stylesheets/demo.css" rel="stylesheet" type="text/css" media="all" /> --}}
</head>
<body class='contrast-orange login contrast-background'>
<div class='middle-container'>
    <div class='middle-row'>
        <div class='middle-wrapper'>
            <div class='login-container-header'>
                <div class='container'>
                    <div class='row'>
                        <div class='col-sm-12'>
                            <div class='text-center'>
                                Administration
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class='login-container'>
                <div class='container'>
                    <div class='row'>
                        <div class='col-sm-4 col-sm-offset-4'>
                            <h1 class='text-center title'>Sign in</h1>
                            <form action='/login' class='validate-form' method='post'>
                                @csrf
                                <div class='form-group'>
                                    <div class='controls with-icon-over-input'>
                                        <input type="text" name="username" value="" placeholder="username" class="form-control" data-rule-required="true" required/>
                                        <i class='fa fa-user text-muted'></i>
                                    </div>
                                </div>
                                <div class='form-group'>
                                    <div class='controls with-icon-over-input'>
                                        <input type="password" name="password" value="" placeholder="Password" class="form-control" data-rule-required="true" required/>
                                        <i class='fa fa-lock text-muted'></i>
                                    </div>
                                </div>
                                <button type="submit" class='btn btn-success btn-block'>Log in</button>
                                <a href="/" class='btn btn-danger btn-block'>Kembali</a>
                            </form>
                            <div class='text-center'>
                                <hr class='hr-normal'>
                                <a href='/resetpass'>Lupa Password?</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class='login-container-footer'>
                <div class='container'>
                    <div class='row'>
                        <div class='col-sm-12'>
                            <div class='text-center'>
                                <a href='/register'>
                                    <i class='fa fa-user'></i>
                                    Belum Memiliki Akun?
                                    <strong>Register</strong>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="/admin/assets/javascripts/jquery/jquery.min.js" type="text/javascript"></script>
@toastr_js
@toastr_render
<!-- / jquery [required] -->
{{-- <script src="/admin/assets/javascripts/bootstrap/bootstrap.js" type="text/javascript"></script>
<script src="/admin/assets/javascripts/jquery/jquery-ui.min.js" type="text/javascript"></script>
<script src="/admin/assets/javascripts/jquery/jquery.mobile.custom.min.js" type="text/javascript"></script>
<script src="/admin/assets/javascripts/jquery/jquery.ui.touch-punch.min.js" type="text/javascript"></script>
<script src="/admin/assets/javascripts/plugins/modernizr/modernizr.min.js" type="text/javascript"></script>
<script src="/admin/assets/javascripts/plugins/retina/retina.js" type="text/javascript"></script>
<script src="/admin/assets/javascripts/plugins/validate/jquery.validate.min.js" type="text/javascript"></script>
<script src="/admin/assets/javascripts/theme.js" type="text/javascript"></script>
<script src="/admin/assets/javascripts/demo.js" type="text/javascript"></script>
<script src="/admin/assets/javascripts/plugins/validate/additional-methods.js" type="text/javascript"></script> --}}
</body>
</html>
