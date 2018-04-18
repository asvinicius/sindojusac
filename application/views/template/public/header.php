<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="description" content="" />
        <meta name="author" content="" />

        <!-- css -->
        <link href="https://fonts.googleapis.com/css?family=Noto+Serif:400,400italic,700|Open+Sans:300,400,600,700" rel="stylesheet">
        <link href="<?= base_url('assets/css/bootstrap.css'); ?>" rel="stylesheet" />
        <link href="<?= base_url('assets/css/bootstrap-responsive.css'); ?>" rel="stylesheet" />
        <link href="<?= base_url('assets/css/fancybox/jquery.fancybox.css'); ?>" rel="stylesheet">
        <link href="<?= base_url('assets/css/jcarousel.css'); ?>" rel="stylesheet" />
        <link href="<?= base_url('assets/css/flexslider.css'); ?>" rel="stylesheet" />
        <link href="<?= base_url('assets/css/style.css'); ?>" rel="stylesheet" />
        <link href="<?= base_url('assets/skins/default.css'); ?>" rel="stylesheet" />
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="ico/apple-touch-icon-144-precomposed.png" />
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="ico/apple-touch-icon-114-precomposed.png" />
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="ico/apple-touch-icon-72-precomposed.png" />
        <link rel="apple-touch-icon-precomposed" href="ico/apple-touch-icon-57-precomposed.png" />
        <link rel="shortcut icon" href="assets/img/favicon.png" />

        <!-- =======================================================
          Theme Name: Flattern
          Theme URL: https://bootstrapmade.com/flattern-multipurpose-bootstrap-template/
          Author: BootstrapMade.com
          Author URL: https://bootstrapmade.com
        ======================================================= -->
    </head>

    <body>
        <div id="wrapper">
            <header>
                <div class="container ">
                    <div class="row nomargin">
                        <div class="span12">
                            <div class="headnav">
                            </div>
                            <!-- Signup Modal -->
                            <div id="mySignup" class="modal styled hide fade" tabindex="-1" role="dialog" aria-labelledby="mySignupModalLabel" aria-hidden="true">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                    <h4 id="mySignupModalLabel">Filie-se ao <strong>Sindojus-AC</strong></h4>
                                </div>
                                <div class="modal-body">
                                    <form class="form-horizontal">
                                        <div class="control-group">
                                            <label class="control-label" for="inputText">Nome</label>
                                            <div class="controls">
                                                <input type="text" id="inputText" placeholder="Nome">
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label" for="inputEmail">Email</label>
                                            <div class="controls">
                                                <input type="text" id="inputEmail" placeholder="Email">
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label" for="inputPhone">Telefone</label>
                                            <div class="controls">
                                                <input type="text" id="inputSPhone" placeholder="Telefone">
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <div class="controls">
                                                <button type="submit" class="btn">Solicitar</button>
                                                <p class="margintop20">
                                                    Já é filiado? <a href="#mySignin" data-dismiss="modal" aria-hidden="true" data-toggle="modal">Entre</a>
                                                </p>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!-- end signup modal -->
                            <!-- Sign in Modal -->
                            <div id="mySignin" class="modal styled hide fade" tabindex="-1" role="dialog" aria-labelledby="mySigninModalLabel" aria-hidden="true">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                    <h4 id="mySigninModalLabel">Entre na sua <strong>conta</strong></h4>
                                </div>
                                <div class="modal-body">
                                    <form class="form-horizontal">
                                        <div class="control-group">
                                            <label class="control-label" for="inputText">Usuário</label>
                                            <div class="controls">
                                                <input type="text" id="inputText" placeholder="Usuário">
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label" for="inputSigninPassword">Senha</label>
                                            <div class="controls">
                                                <input type="password" id="inputSigninPassword" placeholder="Senha">
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <div class="controls">
                                                <button type="submit" class="btn">Entrar</button>
                                                <p class="margintop20">
                                                    <a href="#myReset" data-dismiss="modal" aria-hidden="true" data-toggle="modal">Esqueci minha senha</a>
                                                </p>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!-- end signin modal -->
                            <!-- Reset Modal -->
                            <div id="myReset" class="modal styled hide fade" tabindex="-1" role="dialog" aria-labelledby="myResetModalLabel" aria-hidden="true">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                    <h4 id="myResetModalLabel">Recupere sua <strong>senha</strong></h4>
                                </div>
                                <div class="modal-body">
                                    <form class="form-horizontal">
                                        <div class="control-group">
                                            <label class="control-label" for="inputResetEmail">Email</label>
                                            <div class="controls">
                                                <input type="text" id="inputResetEmail" placeholder="Email">
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <div class="controls">
                                                <button type="submit" class="btn">Recuperar</button>
                                            </div>
                                            <p class="aligncenter margintop20">
                                                As instruções para recuperar sua senha serão enviadas para seu e-mail!
                                            </p>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!-- end reset modal -->
                        </div>
                    </div>
                    <div class="row">
                        <div class="span4">
                            <div class="logo">
                                <a href="index.html"><img src="<?= base_url('assets/img/logo.png'); ?>" alt="" class="logo" /></a>
                                <h1>Flat and trendy bootstrap template</h1>
                            </div>
                        </div>
                        <div class="span8">
                            <div class="navbar navbar-static-top">
                                <div class="navigation">
                                    <nav>
                                        <ul class="nav topnav">
                                            <li class="dropdown active">
                                                <a href="index.html">Home <i class="icon-angle-down"></i></a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="index-alt2.html">Homepage 2</a></li>
                                                    <li><a href="index-alt3.html">Homepage 3</a></li>
                                                </ul>
                                            </li>
                                            <li class="dropdown">
                                                <a href="#">Features <i class="icon-angle-down"></i></a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="typography.html">Typography</a></li>
                                                    <li><a href="table.html">Table</a></li>
                                                    <li><a href="components.html">Components</a></li>
                                                    <li><a href="animations.html">56 Animations</a></li>
                                                    <li><a href="icons.html">Icons</a></li>
                                                    <li><a href="icon-variations.html">Icon variations</a></li>
                                                    <li class="dropdown"><a href="#">3 Sliders <i class="icon-angle-right"></i></a>
                                                        <ul class="dropdown-menu sub-menu-level1">
                                                            <li><a href="index.html">Nivo slider</a></li>
                                                            <li><a href="index-alt2.html">Slit slider</a></li>
                                                            <li><a href="index-alt3.html">Parallax slider</a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="dropdown">
                                                <a href="#">Pages <i class="icon-angle-down"></i></a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="about.html">About us</a></li>
                                                    <li><a href="pricingbox.html">Pricing boxes</a></li>
                                                    <li><a href="testimonials.html">Testimonials</a></li>
                                                    <li><a href="404.html">404</a></li>
                                                </ul>
                                            </li>
                                            <li class="dropdown">
                                                <a href="#">Portfolio <i class="icon-angle-down"></i></a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="portfolio-2cols.html">Portfolio 2 columns</a></li>
                                                    <li><a href="portfolio-3cols.html">Portfolio 3 columns</a></li>
                                                    <li><a href="portfolio-4cols.html">Portfolio 4 columns</a></li>
                                                    <li><a href="portfolio-detail.html">Portfolio detail</a></li>
                                                </ul>
                                            </li>
                                            <li class="dropdown">
                                                <a href="#">Blog <i class="icon-angle-down"></i></a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="blog-left-sidebar.html">Blog left sidebar</a></li>
                                                    <li><a href="blog-right-sidebar.html">Blog right sidebar</a></li>
                                                    <li><a href="post-left-sidebar.html">Post left sidebar</a></li>
                                                    <li><a href="post-right-sidebar.html">Post right sidebar</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="contact.html">Contact </a>
                                            </li>
                                            <li>
                                                <a href="#mySignup" data-toggle="modal">Filie-se </a>
                                            </li>
                                            <li>
                                                <a href="#mySignin" data-toggle="modal">Entrar </a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
        </div>

        <script src="<?= base_url('assets/js/jquery.js'); ?>"></script>
        <script src="<?= base_url('assets/js/jquery.easing.1.3.js'); ?>"></script>
        <script src="<?= base_url('assets/js/bootstrap.js'); ?>"></script>
        <script src="<?= base_url('assets/js/jcarousel/jquery.jcarousel.min.js'); ?>"></script>
        <script src="<?= base_url('assets/js/jquery.fancybox.pack.js'); ?>"></script>
        <script src="<?= base_url('assets/js/jquery.fancybox-media.js'); ?>"></script>
        <script src="<?= base_url('assets/js/google-code-prettify/prettify.js'); ?>"></script>
        <script src="<?= base_url('assets/js/portfolio/jquery.quicksand.js'); ?>"></script>
        <script src="<?= base_url('assets/js/portfolio/setting.js'); ?>"></script>
        <script src="<?= base_url('assets/js/jquery.flexslider.js'); ?>"></script>
        <script src="<?= base_url('assets/js/jquery.nivo.slider.js'); ?>"></script>
        <script src="<?= base_url('assets/js/modernizr.custom.js'); ?>"></script>
        <script src="<?= base_url('assets/js/jquery.ba-cond.min.js'); ?>"></script>
        <script src="<?= base_url('assets/js/jquery.slitslider.js'); ?>"></script>
        <script src="<?= base_url('assets/js/animate.js'); ?>"></script>
        <script src="<?= base_url('assets/js/custom.js'); ?>"></script>

    </body>
</html>
