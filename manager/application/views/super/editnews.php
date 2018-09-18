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
                                        <h4 class="title">Editar notícia</h4>
                                        <!-- <p class="category">Ordenadas por data</p> -->
                                    </div>
                                    <div class="col-md-3">
                                        <a type="btn" class="btn btn-wd btn-danger btn-block" href="<?= base_url('news'); ?>">Cancelar</a>
                                    </div>

                                </div>
                            </div>
                            <div class="content">
                                <form class="form-group" method="post" action="<?= base_url('editnews/update'); ?>" enctype="multipart/form-data">
                                    <input type="hidden" id="newsid" name="newsid" value="<?= $news['newsid']; ?>">
                                    <input type="hidden" id="date" name="date" value="<?= $news['date']; ?>">
                                    <input type="hidden" id="main" name="main" value="<?= $news['main']; ?>">
                                    <input type="hidden" id="internal" name="internal" value="<?= $news['internal']; ?>">
                                    <input type="hidden" id="thumb" name="thumb" value="<?= $news['thumb']; ?>">
                                    <input type="hidden" id="status" name="status" value="<?= $news['status']; ?>">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <label>Título</label>
                                                <input type="text" id="title" name="title" value="<?= $news['title']; ?>" class="form-control border-input" placeholder="Título" required="true">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Classificação</label>
                                                <select  class="form-control border-input" id="type" name="type" required="true">
                                                    <option value="0" <?= $news['type']=='2'?'selected':''; ?>> Normal </option>
                                                    <option value="1" <?= $news['type']=='2'?'selected':''; ?>> Importante </option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label title="Foto para a página inicial do site">Foto principal</label>
                                                <img src="<?= '/sindojusac/assets/img/news/'.$news['main'] ?>" height="250" width="310">
                                                <input type="file" id="mainup" name="mainup" placeholder="Principal">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label title="Foto a ser mostrada quando a notícia é aberta">Foto notícia</label>
                                                <img src="<?= '/sindojusac/assets/img/news/'.$news['internal'] ?>" height="250" width="310">
                                                <input type="file" id="internalup" name="internalup" placeholder="Interna">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label title="Foto a ser mostrada na página de lista de noticias">Thumbnail</label>
                                                <img src="<?= '/sindojusac/assets/img/news/'.$news['thumb'] ?>" height="250" width="310">
                                                <input type="file" id="thumbup" name="thumbup" placeholder="Thumbnail">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label title="Coloque cada parágrafo dentro das tags <p> </p>">Resumo</label>
                                                <textarea rows="5" class="form-control border-input" id="abstract" name="abstract" placeholder="Resumo" required="true"><?= $news['abstract']; ?></textarea>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label title="Coloque cada parágrafo dentro das tags <p> </p>">Conteúdo</label>
                                                <textarea rows="20" class="form-control border-input" id="content" name="content" placeholder="Conteúdo" required="true"><?= $news['content']; ?></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-info btn-fill btn-wd">Atualizar</button>
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
