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

        <div class="main-panel">
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar bar1"></span>
                            <span class="icon-bar bar2"></span>
                            <span class="icon-bar bar3"></span>
                        </button>
                        <p class="navbar-brand"><?= $pagename ?></p>
                    </div>
                    <div class="collapse navbar-collapse">
                        <ul class="nav navbar-nav navbar-right">
                            <li>
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="ti-bell"></i>
                                    <?php if($requests){ ?>
                                        <?php if($nreq > 1){ ?>
                                            <p><?= $nreq ?></p>
                                            <p>Solicitações</p>
                                        <?php }else{ ?>
                                            <p><?= $nreq ?></p>
                                            <p>Solicitação</p>
                                        <?php } ?>
                                    <?php }else{ ?>
                                        <p>0</p>
                                        <p>Solicitações</p>
                                    <?php } ?>
                                </a>
                            </li>
                            <li>
                                <a href="<?= base_url('login/signout'); ?>">
                                    <i class="ti-power-off"></i>
                                    <p>Sair</p>
                                </a>
                            </li>
                        </ul>

                    </div>
                </div>
            </nav>

    <!--   Core JS Files   -->
    <script src="<?= base_url('assets/js/jquery-1.10.2.js'); ?>" type="text/javascript"></script>
    <script src="<?= base_url('assets/js/bootstrap.min.js'); ?>" type="text/javascript"></script>
    <script src="<?= base_url('assets/js/bootstrap-checkbox-radio.js'); ?>"></script>
    <script src="<?= base_url('assets/js/chartist.min.js'); ?>"></script>
    <script src="<?= base_url('assets/js/bootstrap-notify.js'); ?>"></script>
    <script src="<?= base_url('assets/js/paper-dashboard.js'); ?>"></script>
    <script src="<?= base_url('assets/js/demo.js'); ?>"></script>

</html>
