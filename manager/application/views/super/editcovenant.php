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
                                        <h4 class="title">Editar convênio</h4>
                                        <!-- <p class="category">Ordenadas por data</p> -->
                                    </div>
                                    <div class="col-md-3">
                                        <a type="btn" class="btn btn-wd btn-danger btn-block" href="<?= base_url('covenants'); ?>">Cancelar</a>
                                    </div>

                                </div>
                            </div>
                            <div class="content">
                                <form class="form-group" method="post" action="<?= base_url('editcovenant/update'); ?>" enctype="multipart/form-data">
                                    <input type="hidden" id="covenantsid" name="covenantsid" value="<?= $covenant['covenantsid']; ?>">
                                    <input type="hidden" id="covenantmain" name="covenantmain" value="<?= $covenant['covenantmain']; ?>">
                                    <input type="hidden" id="covenantmini" name="covenantmini" value="<?= $covenant['covenantmini']; ?>">
                                    <input type="hidden" id="signaturedate" name="signaturedate" value="<?= $covenant['signaturedate']; ?>">
                                    <input type="hidden" id="status" name="status" value="<?= $covenant['status']; ?>">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Nome da Companhia</label>
                                                <input type="text" id="company" name="company" value="<?= $covenant['company']; ?>" class="form-control border-input" placeholder="Nome da Companhia" required="true">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label title="Coloque cada parágrafo dentro das tags <p> </p>">Descrição do convênio</label>
                                                <textarea rows="5" class="form-control border-input" id="covenantdescription" name="covenantdescription" placeholder="Resumo" required="true"><?= $covenant['covenantdescription']; ?></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label title="Foto a ser mostrada na lista de covênios">Foto lista</label>
                                                <img src="<?= '/sindojusac/assets/img/covenants/'.$covenant['covenantmini'] ?>" height="250" width="310">
                                                <input type="file" id="covenantmini" name="covenantmini" placeholder="Thumbnail">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                               <label title="Foto a ser mostrada no detalhe do convênio">Foto detalhe</label>
                                                <img src="<?= '/sindojusac/assets/img/covenants/'.$covenant['covenantmain'] ?>" height="250" width="310">
                                                <input type="file" id="covenantmain" name="covenantmain" placeholder="Internal">
                                            </div>
                                        </div>
                                    </div>      
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-info btn-fill btn-wd">Salvar</button>
                                        <a type="btn" class="btn btn-danger btn-fill btn-wd" href="<?= base_url('covenants'); ?>">Cancelar</a>
                                    </div>
                                    <div class="clearfix"></div>
                                </form>
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
