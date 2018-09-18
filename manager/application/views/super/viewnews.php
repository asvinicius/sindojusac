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
                <?php if($detail){ ?>
                    <div class="row">
                        <div class="col-lg-4 col-md-5">
                            <div class="card card-user">
                                <div class="image">
                                    <img src="<?= '/sindojusac/assets/img/news/'.$detail['internal'] ?>" alt="..."/>
                                </div>
                                <div class="content">
                                    <div class="author">
                                        <img class="avatar border-white" src="<?= '/sindojusac/assets/img/news/'.$detail['thumb'] ?>" alt="..."/>
                                        <h4 class="title"><?php echo $detail['title'] ?><br /></h4>
                                    </div>
                                    <p class="description text-center">
                                        <?php echo $detail['abstract'] ?>
                                    </p>
                                </div>
                                <div class="text-center">
                                    <a type="btn" class="btn btn-info btn-fill btn-icon" href="<?= base_url('editnews/index/' . $detail['newsid']); ?>" title="Editar notícia"><i class="fa ti-pencil"></i></a>
                                    <a type="btn" class="btn btn-warning btn-fill btn-icon" href="<?= base_url('news/changestatus/' . $detail['newsid']); ?>" 
                                       title="<?php if($detail['status'] == 1){
                                           echo "Desativar notícia";
                                       }else{
                                           echo "Ativar notícia";
                                       }
                                           ?>">
                                        <i class="fa <?php if($detail['status'] == 1){echo "ti-control-pause";}else{echo "ti-control-play";} ?>"></i>
                                    </a>
                                    <a type="btn" class="btn btn-danger btn-fill btn-icon" href="<?= base_url('news/delete/' . $detail['newsid']); ?>" title="Apagar notícia" onclick="return confirm('Tem certeza que deseja apagar esta notícia?');"><i class="fa ti-trash"></i></a>
                                </div>
                                <hr>
                                <div class="text-center">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <h5><?php echo date('d-m-Y H:i', strtotime($detail['date'])); ?><br /><small>Data</small></h5>
                                        </div>
                                        <div class="col-md-3">
                                            <h5><?php echo $num ?><br />
                                                <small>
                                                    <?php 
                                                        if($num == 1){
                                                            echo "Comentário";
                                                        }else{
                                                            echo "Comentários";
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
                                    <h4 class="title">Comentários</h4>
                                </div>
                                <div class="content">
                                    <?php if($comments){ 
                                        foreach ($comments as $comment){?>
                                            <div class="typo-line">
                                                <p class="category">
                                                    <a type="btn" class="btn btn-warning btn-fill btn-icon" href="<?= base_url('viewnews/changecommentstatus/' . $comment->commentid); ?>" 
                                                       title="<?php if($comment->status == 1){
                                                           echo "Desativar comentário";
                                                       }else{
                                                           echo "Ativar Comentário";
                                                       }
                                                           ?>">
                                                        <i class="fa <?php if($comment->status == 1){echo "ti-control-pause";}else{echo "ti-control-play";} ?>"></i>
                                                    </a>
                                                    <a type="btn" class="btn btn-danger btn-fill btn-icon" href="<?= base_url('viewnews/deletecomment/' . $comment->commentid); ?>" title="Apagar comentário" onclick="return confirm('Tem certeza que deseja apagar este comentário?');"><i class="fa ti-trash"></i></a>
                                                </p>
                                                <blockquote>
                                                 <p>
                                                     <?php echo $comment->message; ?>
                                                 </p>
                                                 <small>
                                                    <?php echo $comment->author; ?>
                                                 </small>
                                                </blockquote>
                                            </div>
                                        <?php }}else{ ?>
                                        <h5>Nenhum comentário.</h5>
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
