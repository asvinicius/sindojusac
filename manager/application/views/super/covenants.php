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
                    <div class="col-md-12">
                        <div class="card">
                            <div class="row">
                                <div class="header">
                                    <div class="col-md-9">
                                        <h4 class="title">Lista de convênios</h4>
                                        <!-- <p class="category">Ordenadas por data</p> -->
                                    </div>
                                    <div class="col-md-3">
                                        <a type="btn" class="btn btn-wd btn-info btn-block" href="<?= base_url('newcovenant'); ?>">Novo convênio</a>
                                    </div>

                                </div>
                            </div>
                            <div class="content">
                                <div class="content table-responsive table-full-width">
                                    <table class="table table-hover">
                                        <?php if ($covenants) { ?>
                                            <thead>
                                            <th title="Empresa">Empresa</th>
                                            <th title="Desde">Desde</th>
                                            <th title="Logo">Logo</th>
                                            <th title="Status">Status</th>
                                            <th title="Ações">Ações</th>
                                            </thead>
                                            <tbody>
                                                <?php foreach ($covenants as $covenant) { ?>
                                                    <tr>
                                                        <td><?php echo $covenant->company ?></td>
                                                        <td><?php echo date('d-m-Y H:i', strtotime($covenant->signaturedate)); ?></td>
                                                        <td><img src="<?= '/sindojusac/assets/img/covenants/'.$covenant->covenantmini ?>" width="60" alt="..."/></td>
                                                        <td>
                                                            <?php
                                                                if ($covenant->status == 1) {
                                                                    echo "Ativa";
                                                                } else {
                                                                    echo "Inativa";
                                                                }
                                                            ?>
                                                        </td>
                                                        <td>
                                                            <a href="<?= base_url('covenants/changestatus/' . $covenant->covenantsid); ?>" title="<?php if($covenant->status == 1){
                                                                    echo "Desativar convênio";
                                                                }else{
                                                                    echo "Ativar convênio";
                                                                }
                                                                    ?>" class="<?php if($covenant->status == 1){echo "icon-success";}else{echo "icon-danger";} ?>">
                                                                <i class="<?php if($covenant->status == 1){echo "ti-unlock";}else{echo "ti-lock";} ?>"></i>
                                                            </a>
                                                            <a href="<?= base_url('viewcovenant/index/' . $covenant->covenantsid); ?>" title="Visualizar convênio" class="icon-success">
                                                                <i class="ti-agenda"></i>
                                                            </a>
                                                            <a href="<?= base_url('editcovenant/index/' . $covenant->covenantsid); ?>" title="Editar convênio" class="icon-info">
                                                                <i class="ti-pencil"></i>
                                                            </a>
                                                            <a href="<?= base_url('covenants/delete/' . $covenant->covenantsid); ?>" title="Remover convênio" class="icon-danger"
                                                               onclick="return confirm('Tem certeza que deseja remover este convênio?');">
                                                                <i class="ti-trash"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                <?php } ?>
                                            </tbody>
                                        <?php }else{ ?>
                                            <h4> Não existem convênios registrados! </h4>
                                        <?php } ?>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
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
