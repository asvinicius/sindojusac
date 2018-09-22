<?php
defined('BASEPATH') OR exit('No direct script access allowed');
error_reporting(0);
ini_set(“display_errors”, 0 );
?>
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
        <link href="<?= base_url('assets/css/animate.css'); ?>" rel="stylesheet" />
        <link href="<?= base_url('assets/css/flexslider.css'); ?>" rel="stylesheet" />
        <link href="<?= base_url('assets/css/style.css'); ?>" rel="stylesheet" />
        <link href="<?= base_url('assets/skins/default.css'); ?>" rel="stylesheet" />
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="ico/apple-touch-icon-144-precomposed.png" />
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="ico/apple-touch-icon-114-precomposed.png" />
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="ico/apple-touch-icon-72-precomposed.png" />
        <link rel="apple-touch-icon-precomposed" href="ico/apple-touch-icon-57-precomposed.png" />
        <link rel="shortcut icon" href="<?= base_url('assets/img/favicon.png'); ?>" />

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
                                    <!--<li><a href="#mySuperin" data-toggle="modal"><i class="icon-user"></i> Administrador</a></li>-->
                                    <a href="<?= base_url('manager'); ?>" target="_blank"><i class="icon-user"></i> Administrador</a>
                                </ul>
                            </div>
                            <!-- Signup Modal -->
                            <div id="mySignup" class="modal styled hide fade" tabindex="-1" role="dialog" aria-labelledby="mySignupModalLabel" aria-hidden="true">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                    <h4 id="mySignupModalLabel">Filie-se ao <strong>Sindojus-AC</strong></h4>
                                </div>
                                <div class="modal-body">
                                    Entre em contato no email <strong>sindojusac@gmail.com</strong> para solicitar sua filiação
<!--                                    <form class="form-horizontal">
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
                                    </form>-->
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
                                    Serviço ainda indisponivel!
<!--                                    <form class="form-horizontal">
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
                                                <p class="margintop20">
                                                    Não é filiado? <a href="#mySignup" data-dismiss="modal" aria-hidden="true" data-toggle="modal">Filie-se</a>
                                                </p>
                                            </div>
                                        </div>
                                    </form>-->
                                </div>
                            </div>
                            <!-- end signin modal -->
                            <div id="mySuperin" class="modal styled hide fade" tabindex="-1" role="dialog" aria-labelledby="mySigninModalLabel" aria-hidden="true">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                    <h4 id="mySigninModalLabel">Conta de <strong>administrador</strong></h4>
                                </div>
                                <div class="modal-body">
                                    <form class="form-horizontal" method="get" action="<?= base_url('login/superin');?>" >
                                        <div class="control-group">
                                            <label class="control-label" for="username">Usuário</label>
                                            <div class="controls">
                                                <input type="text" id="username" name="username" placeholder="Usuário">
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label" for="password">Senha</label>
                                            <div class="controls">
                                                <input type="password" id="password" name="password" placeholder="Senha">
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <div class="controls">
                                                <button type="submit" class="btn">Entrar</button>
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
                                                    <li><a href="<?= base_url('direction'); ?>">Diretoria</a></li>
                                                    <li><a href="<?= base_url('statute'); ?>">Estatuto</a></li>
                                                    <!-- <li><a href="<?= base_url('ata'); ?>">Atas</a></li> -->
                                                </ul>
                                            </li>
                                            <li class="dropdown">
                                                <a href="<?= base_url('news'); ?>">Comunicação <i class="icon-angle-down"></i></a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="<?= base_url('news'); ?>">Notícias</a></li>
                                                    <!--
                                                    <li><a href="<?= base_url('shifts'); ?>">Plantões</a></li>
                                                    <li><a href="<?= base_url('assemblies'); ?>">Assembleias</a></li>
                                                    <li><a href="<?= base_url('legislation'); ?>">Legislação</a></li>
                                                    -->
                                                    <li><a href="https://www.tjac.jus.br/tribunal/administrativo/coger/legislacao/" target="_blank">Legislação</a></li>
                                                    <!--
                                                    <li><a href="<?= base_url('covenants'); ?>">Convênios</a></li>
                                                    <li><a href="#">Transparência</a></li>
                                                    <li><a href="#">Aniversariantes</a></li>
                                                    -->
                                                </ul>
                                            </li>
                                            <li class="dropdown">
                                                <a href="<?= base_url('gallery'); ?>">Mídia <i class="icon-angle-down"></i></a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="<?= base_url('gallery'); ?>">Galeria</a></li>
                                                    <!--
                                                    <li><a href="<?= base_url('models'); ?>">Modelos</a></li>
                                                    -->
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="<?= base_url('contact'); ?>">Contato </a>
                                            </li>
                                            <!--
                                            <li>
                                                <a href="#mySignup" data-toggle="modal">Filie-se </a>
                                            </li>
                                            <li>
                                                <a href="#mySignin" data-toggle="modal">Entrar </a>
                                            </li>
                                            -->
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>