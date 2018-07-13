<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>SINDOJUS-AC | Sindicato dos Oficiais de Justiça do Acre</title>

        <!-- css -->
        <link href="https://fonts.googleapis.com/css?family=Noto+Serif:400,400italic,700|Open+Sans:300,400,600,700" rel="stylesheet">
        <link href="<?= base_url('assets/css/bootstrap.css'); ?>" rel="stylesheet" />
        <link href="<?= base_url('assets/css/bootstrap-responsive.css'); ?>" rel="stylesheet" />
        <link href="<?= base_url('assets/css/fancybox/jquery.fancybox.css'); ?>" rel="stylesheet">
        <link href="<?= base_url('assets/css/jcarousel.css'); ?>" rel="stylesheet" />
        <link href="<?= base_url('assets/css/animate.css'); ?>" rel="stylesheet" />
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
                                <ul>
                                    <li><a href="<?= base_url('login/signout');?>" data-toggle="modal"><i class="icon-signout"></i> Sair</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="span4">
                            <div class="logo">
                                <a href="<?= base_url(); ?>"><img src="<?= base_url('assets/img/logo.png'); ?>" alt="" class="logo" /></a>
                            </div>
                        </div>
                        
                        <div class="span8">
                            <div class="navbar navbar-static-top">
                                <div class="navigation">
                                    <nav>
                                        <ul class="nav topnav">
                                            <li class="dropdown active">
                                                <a href="<?= base_url(); ?>">Sindojus <i class="icon-angle-down"></i></a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="<?= base_url('history'); ?>">História</a></li>
                                                    <li><a href="#">Diretoria</a></li>
                                                    <li><a href="#">Estatuto</a></li>
                                                    <li><a href="#">Atas</a></li>
                                                </ul>
                                            </li>
                                            <li class="dropdown">
                                                <a href="#">Comunicação <i class="icon-angle-down"></i></a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="#">Notícias</a></li>
                                                    <li><a href="#">Plantões</a></li>
                                                    <li><a href="#">Assembléias</a></li>
                                                    <li><a href="#">Transparência</a></li>
                                                </ul>
                                            </li>
                                            <li class="dropdown">
                                                <a href="#">Mídia <i class="icon-angle-down"></i></a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="#">Convênios</a></li>
                                                    <li><a href="#">Galeria</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="#">Contato </a>
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
