<!DOCTYPE html>
<!--
  Name: Flatty - Flat Administration Template
  Website: https://wrapbootstrap.com/theme/flatty-flat-administration-template-WB0P6NR1N?ref=metheus
  Version: 2.4.1
-->
<html lang='en'>
<head>
    <title>Dashboard | Administration</title>
    <meta content='admin template, administration template, bootstrap icons, bootstrap template, dashboard, flat design, flat template, bootstrap flat' name='keywords'>
    <meta content='Flat administration template for Twitter Bootstrap. Twitter Bootstrap 3 template with Ruby on Rails support.' name='description'>
    <meta content='BublinaStudio.com' name='author'>
    <meta content='all' name='robots'>
    <meta content='text/html; charset=utf-8' http-equiv='Content-Type'>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!--[if IE]> <meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'> <![endif]-->
    <link href='/admin/assets/images/meta_icons/favicon.ico' rel='shortcut icon' type='image/x-icon'>
    <link href='/admin/assets/images/meta_icons/apple-touch-icon-precomposed.png' rel='apple-touch-icon-precomposed'>
    <link href="/admin/assets/stylesheets/bootstrap/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    @stack('css')
    <link href="/admin/assets/stylesheets/light-theme.css" rel="stylesheet" type="text/css" media="all" id="color-settings-body-color" />
    <link href="/admin/assets/stylesheets/theme-colors.css" rel="stylesheet" type="text/css" media="all" />
    <link href="/admin/assets/stylesheets/demo.css" rel="stylesheet" type="text/css" media="all" />
    
    @toastr_css
</head>
<body class='contrast-red '>
<header>
    <nav class='navbar navbar-default'>
        <a class='navbar-brand' href='index.html'>
            Administration
        </a>
        <a class='toggle-nav btn pull-left' href='#'>
            <i class='fa fa-bars'></i>
        </a>
        <ul class='nav'>
            <li class='dropdown light only-icon'>
                <a class='dropdown-toggle' data-toggle='dropdown' href='#'>
                    <i class='fa fa-cog'></i>
                </a>
                <ul class='dropdown-menu color-settings'>
                    <li class='color-settings-body-color'>
                        <div class='color-title'>Change body color</div>
                        <a data-change-to='/admin/assets/stylesheets/light-theme.css' href='#'>
                            Light
                            <small>(default)</small>
                        </a>
                        <a data-change-to='/admin/assets/stylesheets/dark-theme.css' href='#'>
                            Dark
                        </a>
                        <a data-change-to='/admin/assets/stylesheets/dark-blue-theme.css' href='#'>
                            Dark blue
                        </a>
                    </li>
                    <li class='divider'></li>
                    <li class='color-settings-contrast-color'>
                        <div class='color-title'>Change contrast color</div>
                        <a data-change-to="contrast-red" href="#"><i class='fa fa-cog text-red'></i>
                            Red
                            <small>(default)</small>
                        </a>
                        <a data-change-to="contrast-blue" href="#"><i class='fa fa-cog text-blue'></i>
                            Blue
                        </a>
                        <a data-change-to="contrast-orange" href="#"><i class='fa fa-cog text-orange'></i>
                            Orange
                        </a>
                        <a data-change-to="contrast-purple" href="#"><i class='fa fa-cog text-purple'></i>
                            Purple
                        </a>
                        <a data-change-to="contrast-green" href="#"><i class='fa fa-cog text-green'></i>
                            Green
                        </a>
                        <a data-change-to="contrast-muted" href="#"><i class='fa fa-cog text-muted'></i>
                            Muted
                        </a>
                        <a data-change-to="contrast-fb" href="#"><i class='fa fa-cog text-fb'></i>
                            Facebook
                        </a>
                        <a data-change-to="contrast-dark" href="#"><i class='fa fa-cog text-dark'></i>
                            Dark
                        </a>
                        <a data-change-to="contrast-pink" href="#"><i class='fa fa-cog text-pink'></i>
                            Pink
                        </a>
                        <a data-change-to="contrast-grass-green" href="#"><i class='fa fa-cog text-grass-green'></i>
                            Grass green
                        </a>
                        <a data-change-to="contrast-sea-blue" href="#"><i class='fa fa-cog text-sea-blue'></i>
                            Sea blue
                        </a>
                        <a data-change-to="contrast-banana" href="#"><i class='fa fa-cog text-banana'></i>
                            Banana
                        </a>
                        <a data-change-to="contrast-dark-orange" href="#"><i class='fa fa-cog text-dark-orange'></i>
                            Dark orange
                        </a>
                        <a data-change-to="contrast-brown" href="#"><i class='fa fa-cog text-brown'></i>
                            Brown
                        </a>
                    </li>
                </ul>
            </li>
            {{-- <li class='dropdown medium only-icon widget'>
                <a class='dropdown-toggle' data-toggle='dropdown' href='#'>
                    <i class='fa fa-rss'></i>
                    <div class='label'>5</div>
                </a>
                <ul class='dropdown-menu'>
                    <li>
                        <a href='#'>
                            <div class='widget-body'>
                                <div class='pull-left icon'>
                                    <i class='fa fa-user text-success'></i>
                                </div>
                                <div class='pull-left text'>
                                    John Doe signed up
                                    <small class='text-muted'>just now</small>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class='divider'></li>
                    <li>
                        <a href='#'>
                            <div class='widget-body'>
                                <div class='pull-left icon'>
                                    <i class='fa fa-inbox text-error'></i>
                                </div>
                                <div class='pull-left text'>
                                    New Order #002
                                    <small class='text-muted'>3 minutes ago</small>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class='divider'></li>
                    <li>
                        <a href='#'>
                            <div class='widget-body'>
                                <div class='pull-left icon'>
                                    <i class='fa fa-comment text-warning'></i>
                                </div>
                                <div class='pull-left text'>
                                    America Leannon commented Flatty with veeery long text.
                                    <small class='text-muted'>1 hour ago</small>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class='divider'></li>
                    <li>
                        <a href='#'>
                            <div class='widget-body'>
                                <div class='pull-left icon'>
                                    <i class='fa fa-user text-success'></i>
                                </div>
                                <div class='pull-left text'>
                                    Jane Doe signed up
                                    <small class='text-muted'>last week</small>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class='divider'></li>
                    <li>
                        <a href='#'>
                            <div class='widget-body'>
                                <div class='pull-left icon'>
                                    <i class='fa fa-inbox text-error'></i>
                                </div>
                                <div class='pull-left text'>
                                    New Order #001
                                    <small class='text-muted'>1 year ago</small>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class='widget-footer'>
                        <a href='#'>All notifications</a>
                    </li>
                </ul>
            </li> --}}
            <li class='dropdown dark user-menu'>
                <a class='dropdown-toggle' data-toggle='dropdown' href='#'>
                    <img width="23" height="23" alt="Mila Kunis" src="/admin/assets/images/avatar.jpg" />
                    <span class='user-name'>{{Auth::user()->name}}</span>
                    <b class='caret'></b>
                </a>
                <ul class='dropdown-menu'>
                    <li>
                        <a href='/logout'>
                            <i class='fa fa-sign-out'></i>
                            Sign out
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
        <form action='search_results.html' class='navbar-form navbar-right hidden-xs' method='get'>
            <button class='btn btn-link fa fa-search' name='button' type='submit'></button>
            <div class='form-group'>
                <input type="text" name="q" value="" class="form-control" placeholder="Search..." autocomplete="off" id="q_header" />
            </div>
        </form>
    </nav>
</header>
<div id='wrapper'>
    <div id='main-nav-bg'></div>
    <nav id='main-nav'>
        <div class='navigation'>
            <div class='search'>
                <form action='search_results.html' method='get'>
                    <div class='search-wrapper'>
                        <input type="text" name="q" value="" class="search-query form-control" placeholder="Search..." autocomplete="off" />
                        <button class='btn btn-link fa fa-search' name='button' type='submit'></button>
                    </div>
                </form>
            </div>
            @include('layouts.menu');

        </div>
    </nav>
    <section id='content'>
        <div class='container'>
            <div class='row' id='content-wrapper'>
                @yield('content')
            </div>
            <footer id='footer'>
                <div class='footer-wrapper'>
                    <div class='row'>
                        <div class='col-sm-6 text'>
                            Copyright © 2020 Asran Dev
                        </div>
                        <div class='col-sm-6 buttons'>
                            <a class="btn btn-link" href="http://flatty-v2-4-1.bublinastudio.com/">Preview</a>
                            <a class="btn btn-link" href="https://wrapbootstrap.com/theme/flatty-flat-administration-template-WB0P6NR1N?ref=metheus">Purchase</a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </section>
</div>

<script src="/admin/assets/javascripts/jquery/jquery.min.js" type="text/javascript"></script>
<script src="/admin/assets/javascripts/jquery/jquery.mobile.custom.min.js" type="text/javascript"></script>
<script src="/admin/assets/javascripts/jquery/jquery-ui.min.js" type="text/javascript"></script>
<script src="/admin/assets/javascripts/bootstrap/bootstrap.js" type="text/javascript"></script>
<script src="/admin/assets/javascripts/theme.js" type="text/javascript"></script>
@stack('js')
@toastr_js
@toastr_render
</body>
</html>
