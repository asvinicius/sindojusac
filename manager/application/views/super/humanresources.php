<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
        <link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon.png">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

        <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
        <meta name="viewport" content="width=device-width" />
        <link href="<?= base_url('assets/css/bootstrap.min.css'); ?>" rel="stylesheet" />
        <link href="<?= base_url('assets/css/animate.min.css'); ?>" rel="stylesheet"/>
        <link href="<?= base_url('assets/css/paper-dashboard.css'); ?>" rel="stylesheet"/>
        <link href="<?= base_url('assets/css/demo.css'); ?>" rel="stylesheet" />
        <link href="<?= base_url('assets/css/font-awesome.min.css'); ?>" rel="stylesheet">
        <link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
        <link href="<?= base_url('assets/css/themify-icons.css'); ?>" rel="stylesheet">

    </head>

        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-4 col-sm-4">
                        <a title="Solicitações" href="#">
                            <div class="card">
                                <div class="content">
                                    <div class="row">
                                        <div class="col-xs-3">
                                            <div class="icon-big icon-danger text-center">
                                                <i class="ti-bell"></i>
                                            </div>
                                        </div>
                                        <div class="col-xs-9">
                                            <div class="numbers">
                                                Solicitações
                                            </div>
                                        </div>
                                    </div>
                                    <div class="footer">
                                        <hr />
                                        <div class="stats"> 
                                            <?php if($requests){ ?>
                                                <?php if($nreq > 1){ ?>
                                                    <p><?= $nreq ?> novas solicitações</p>
                                                <?php }else{ ?>
                                                    <p><?= $nreq ?> nova solicitação</p>
                                                <?php } ?>
                                            <?php }else{ ?>
                                                Nenhuma nova solicitação
                                            <?php } ?>
                                             
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-4">
                        <a title="Diretoria" href="#">
                            <div class="card">
                                <div class="content">
                                    <div class="row">
                                        <div class="col-xs-3">
                                            <div class="icon-big icon-danger text-center">
                                                <i class="ti-user"></i>
                                            </div>
                                        </div>
                                        <div class="col-xs-9">
                                            <div class="numbers">
                                                Diretoria
                                            </div>
                                        </div>
                                    </div>
                                    <div class="footer">
                                        <hr />
                                        <div class="stats"> Diretoria do SINDOJUS-AC </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-4">
                        <a title="Legislação" href="#">
                            <div class="card">
                                <div class="content">
                                    <div class="row">
                                        <div class="col-xs-3">
                                            <div class="icon-big icon-danger text-center">
                                                <i class="ti-ruler-alt-2"></i>
                                            </div>
                                        </div>
                                        <div class="col-xs-9">
                                            <div class="numbers">
                                                Legislação
                                            </div>
                                        </div>
                                    </div>
                                    <div class="footer">
                                        <hr />
                                        <div class="stats"> Legislação relaconada so SINDOJUS-AC </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="row">
                    
                </div>
            </div>
        </div>

    <!--   Core JS Files   -->
    <script src="<?= base_url('assets/js/jquery-1.10.2.js'); ?>" type="text/javascript"></script>
    <script src="<?= base_url('assets/js/bootstrap.min.js'); ?>" type="text/javascript"></script>
    <script src="<?= base_url('assets/js/bootstrap-checkbox-radio.js'); ?>"></script>
    <script src="<?= base_url('assets/js/chartist.min.js'); ?>"></script>
    <script src="<?= base_url('assets/js/bootstrap-notify.js'); ?>"></script>
    <script src="<?= base_url('assets/js/paper-dashboard.js'); ?>"></script>
    <script src="<?= base_url('assets/js/demo.js'); ?>"></script>

</html>
