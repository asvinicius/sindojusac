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
                                        <h4 class="title">Editar parceria</h4>
                                        <!-- <p class="category">Ordenadas por data</p> -->
                                    </div>
                                    <div class="col-md-3">
                                        <a type="btn" class="btn btn-wd btn-danger btn-block" href="<?= base_url('partnerships'); ?>">Cancelar</a>
                                    </div>

                                </div>
                            </div>
                            <div class="content">
                                <form class="form-group" method="post" action="<?= base_url('editpartnership/update'); ?>" enctype="multipart/form-data">
                                    <input type="hidden" id="partnershipsid" name="partnershipsid" value="<?= $partnership['partnershipsid']; ?>">
                                    <input type="hidden" id="partnermain" name="partnermain" value="<?= $partnership['partnermain']; ?>">
                                    <input type="hidden" id="partnermini" name="partnermini" value="<?= $partnership['partnermini']; ?>">
                                    <input type="hidden" id="signaturedate" name="signaturedate" value="<?= $partnership['signaturedate']; ?>">
                                    <input type="hidden" id="status" name="status" value="<?= $partnership['status']; ?>">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Nome do Parceiro</label>
                                                <input type="text" id="partnername" name="partnername" value="<?= $partnership['partnername']; ?>" class="form-control border-input" placeholder="Nome do Parceiro" required="true">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label title="Coloque cada parágrafo dentro das tags <p> </p>">Descrição do parceiro</label>
                                                <textarea rows="5" class="form-control border-input" id="partnerdescription" name="partnerdescription" placeholder="Resumo" required="true"> <?= $partnership['partnerdescription']; ?> </textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label title="Foto a ser mostrada na lista de parceiros">Foto lista</label>
                                                <img src="<?= '/sindojusac/assets/img/partnerships/'.$partnership['partnermini'] ?>" height="250" width="310">
                                                <input type="file" id="partnermini" name="partnermini" placeholder="Thumbnail">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label title="Foto a ser mostrada na lista de parceiros">Foto lista</label>
                                                <img src="<?= '/sindojusac/assets/img/partnerships/'.$partnership['partnermain'] ?>" height="250" width="310">
                                                <input type="file" id="partnermini" name="partnermini" placeholder="Thumbnail">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                        </div>
                                    </div>
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-info btn-fill btn-wd">Salvar</button>
                                        <a type="btn" class="btn btn-danger btn-fill btn-wd" href="<?= base_url('partnerships'); ?>">Cancelar</a>
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
