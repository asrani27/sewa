<!DOCTYPE html>
<!--
  Name: Flatty - Flat Administration Template
  Website: https://wrapbootstrap.com/theme/flatty-flat-administration-template-WB0P6NR1N?ref=metheus
  Version: 2.4.1
-->
<html lang='en'>
<head>
    <title>Login | Administration Sewa Gedung</title>
    <meta content='admin template, administration template, bootstrap icons, bootstrap template, dashboard, flat design, flat template, bootstrap flat' name='keywords'>
    <meta content='Flat administration template for Twitter Bootstrap. Twitter Bootstrap 3 template with Ruby on Rails support.' name='description'>
    <meta content='BublinaStudio.com' name='author'>
    <meta content='all' name='robots'>
    <meta content='text/html; charset=utf-8' http-equiv='Content-Type'>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!--[if IE]> <meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'> <![endif]-->
    <link href='/admin/assets/images/meta_icons/favicon.ico' rel='shortcut icon' type='image/x-icon'>
    <link href='/admin/assets/images/meta_icons/apple-touch-icon-precomposed.png' rel='apple-touch-icon-precomposed'>
    <!-- / START - page related stylesheets [optional] -->

    <link href="/admin/assets/stylesheets/bootstrap/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <link href="/admin/assets/stylesheets/light-theme.css" rel="stylesheet" type="text/css" media="all" id="color-settings-body-color" />
    <link href="/admin/assets/stylesheets/theme-colors.css" rel="stylesheet" type="text/css" media="all" />
    @toastr_css
</head>
<body class='contrast-blue login contrast-background'>
<div class='middle-container'>
    <div class='middle-row'>
        <div class='middle-wrapper'>
            <div class='login-container-header'>
                <div class='container'>
                    <div class='row'>
                        <div class='col-sm-12'>
                            <div class='text-center'>
                                Administration
                                {{-- <img width="121" height="31" src="/admin/assets/images/logo_lg.svg" /> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class='login-container'>
                <div class='container'>
                    <div class='row'>
                        <div class='col-sm-4 col-sm-offset-4'>
                            <h1 class='text-center title'>Register</h1>
                            <form action='/register' class='validate-form' method='post'>
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
                                <div class='form-group'>
                                    <div class='controls with-icon-over-input'>
                                        <input type="email" name="email" value="" placeholder="email" class="form-control" data-rule-required="true" required/>
                                        <i class='fa fa-user text-muted'></i>
                                    </div>
                                </div>
                                <div class='form-group'>
                                    <div class='controls with-icon-over-input'>
                                        <input type="text" name="nik" value="" placeholder="NIK KTP" class="form-control" data-rule-required="true" required/>
                                        <i class='fa fa-user text-muted'></i>
                                    </div>
                                </div>
                                <div class='form-group'>
                                    <div class='controls with-icon-over-input'>
                                        <input type="text" name="name" value="" placeholder="Nama Lengkap" class="form-control" data-rule-required="true" required/>
                                        <i class='fa fa-user text-muted'></i>
                                    </div>
                                </div>
                                <div class='form-group'>
                                    <div class='controls with-icon-over-input'>
                                        <input type="text" name="telp" value="" placeholder="No. Telp" class="form-control" data-rule-required="true" required/>
                                        <i class='fa fa-user text-muted'></i>
                                    </div>
                                </div>
                                <button class='btn btn-success btn-block' type="submit">Daftar</button>
                                <a href="{{ url('auth/google') }}" class='btn btn-primary btn-block'>Log in Via Google</a>
                                <a href="/login" class='btn btn-danger btn-block'>Kembali</a>
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
                                <a href='/login'>
                                    <i class='fa fa-user'></i>
                                    Sudah Memiliki Akun?
                                    <strong>Log in</strong>
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
</body>
</html>
