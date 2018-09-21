<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
        <link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon.png">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

        <title>Notícias</title>

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
                <?php if($covenant){ ?>
                    <div class="row">
                        <div class="col-lg-4 col-md-5">
                            <div class="card card-user">
                                <div class="image">
                                    <img src="<?= '/sindojusac/assets/img/covenants/'.$covenant['covenantmain'] ?>" alt="..."/>
                                </div>
                                <div class="content">
                                    <div class="author">
                                        <h4 class="title"><?php echo $covenant['company'] ?><br /></h4>
                                    </div>
                                    <p class="description text-center">
                                        <?php echo $covenant['covenantdescription'] ?>
                                    </p>
                                </div>
                                <div class="text-center">
                                    <a type="btn" class="btn btn-info btn-fill btn-icon" href="<?= base_url('editcovenant/index/' . $covenant['covenantsid']); ?>" title="Editar convênio"><i class="fa ti-pencil"></i></a>
                                    <a type="btn" class="btn btn-warning btn-fill btn-icon" href="<?= base_url('viewcovenant/changestatus/' . $covenant['covenantsid']); ?>" 
                                       title="<?php if($covenant['status'] == 1){
                                           echo "Desativar convênio";
                                       }else{
                                           echo "Ativar convênio";
                                       }
                                           ?>">
                                        <i class="fa <?php if($covenant['status'] == 1){echo "ti-control-pause";}else{echo "ti-control-play";} ?>"></i>
                                    </a>
                                    <a type="btn" class="btn btn-danger btn-fill btn-icon" href="<?= base_url('covenants/delete/' . $covenant['covenantsid']); ?>" title="Remover convênio" onclick="return confirm('Tem certeza que deseja remover este convênio?');"><i class="fa ti-trash"></i></a>
                                </div>
                                <hr>
                                <div class="text-center">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <h5><?php echo date('d-m-Y', strtotime($covenant['signaturedate'])); ?><br /><small>Assinatura</small></h5>
                                        </div>
                                        <div class="col-md-6">
                                            <h5><?php echo "0"; ?><br />
                                                <small>
                                                    <?php 
                                                        if(1 == 2){
                                                            echo "Oficial conveniado";
                                                        }else{
                                                            echo "Oficiais Conveniados";
                                                        }
                                                    ?>
                                                </small>
                                            </h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-7">
                            <div class="card">
                                <div class="header">
                                    <h4 class="title">Lista de oficiais conveniados</h4>
                                </div>
                                <div class="content">
                                    <?php if($agreements){ ?>
                                        <thead>
                                            <th title="Oficial">Oficial</th>
                                            <th title="Matricula">Matricula</th>
                                            <th title="Data convenio">Data convenio</th>
                                            <th title="Status">Status</th>
                                            <th title="Ações">Ações</th>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($agreements as $agreement) { ?>
                                                <td><?php echo $agreement->name ?></td>
                                                <td><?php echo $agreement->registration ?></td>
                                                <td><?php echo date('d-m-Y H:i', strtotime($agreement->dateagreed)); ?></td>
                                                <td><?php echo $agreement->status ?></td>
                                                <td><!-- td para ações como desativar relação de convenio com oficial, editar ou excluir --></td>
                                            <?php } ?>
                                    <?php }else{ ?>
                                    <h5 class="content"> Não existem oficiais registrados neste convênio! </h5>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>


                    </div>
                <?php } ?>
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
