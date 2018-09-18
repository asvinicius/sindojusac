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
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="row">
                                <div class="header">
                                    <div class="col-md-9">
                                        <h4 class="title">Nova notícia</h4>
                                        <!-- <p class="category">Ordenadas por data</p> -->
                                    </div>
                                    <div class="col-md-3">
                                        <a type="btn" class="btn btn-wd btn-danger btn-block" href="<?= base_url('news'); ?>">Cancelar</a>
                                    </div>

                                </div>
                            </div>
                            <div class="content">
                                <form class="form-group" method="post" action="<?= base_url('newnotice/save'); ?>" enctype="multipart/form-data">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <label>Título</label>
                                                <input type="text" id="title" name="title" class="form-control border-input" placeholder="Título" required="true">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Classificação</label>
                                                <select  class="form-control border-input" id="type" name="type" required="true">
                                                    <option value="0"> Normal </option>
                                                    <option value="1"> Importante </option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label title="Foto para a página inicial do site">Foto principal</label>
                                                <input type="file" id="main" name="main" placeholder="Principal" required="true">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label title="Foto a ser mostrada quando a notícia é aberta">Foto notícia</label>
                                                <input type="file" id="internal" name="internal" placeholder="Interna" required="true">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label title="Foto a ser mostrada na página de lista de noticias">Thumbnail</label>
                                                <input type="file" id="thumb" name="thumb" placeholder="Thumbnail" required="true">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label title="Coloque cada parágrafo dentro das tags <p> </p>">Resumo</label>
                                                <textarea rows="5" class="form-control border-input" id="abstract" name="abstract" placeholder="Resumo" required="true"></textarea>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label title="Coloque cada parágrafo dentro das tags <p> </p>">Conteúdo</label>
                                                <textarea rows="20" class="form-control border-input" id="content" name="content" placeholder="Conteúdo" required="true"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-info btn-fill btn-wd">Publicar</button>
                                        <a type="btn" class="btn btn-danger btn-fill btn-wd" href="<?= base_url('news'); ?>">Cancelar</a>
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
