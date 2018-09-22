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
                                        <h4 class="title">Adicionar foto</h4>
                                        <!-- <p class="category">Ordenadas por data</p> -->
                                    </div>
                                    <div class="col-md-3">
                                        <a type="btn" class="btn btn-wd btn-danger btn-block" href="<?= base_url('gallery'); ?>">Cancelar</a>
                                    </div>

                                </div>
                            </div>
                            <div class="content">
                                <form class="form-group" method="post" action="<?= base_url('addphoto/save'); ?>" enctype="multipart/form-data">
                                    <div class="row">
                                        <div class="col-md-9">
                                            <div class="form-group">
                                                <label>Título da foto</label>
                                                <input type="text" id="phototitle" name="phototitle" class="form-control border-input" placeholder="Título da foto" required="true">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Data da foto</label>
                                                <input type="date" id="photodate" name="photodate" class="form-control border-input" placeholder="Título da foto" required="true">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label title="Foto a ser mostrada na aleria">Escolher foto</label>
                                                <input type="file" id="photoaddress" name="photoaddress" placeholder="Foto" required="true">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-info btn-fill btn-wd">Salvar</button>
                                        <a type="btn" class="btn btn-danger btn-fill btn-wd" href="<?= base_url('gallery'); ?>">Cancelar</a>
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
