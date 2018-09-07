<section id="inner-headline">
    <div class="container">
        <div class="row">
            <div class="span4">
                <div class="inner-heading">
                    <h2>Notícias</h2>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="content">
    <div class="container">
        <div class="row">
            <div class="span8">
                <?php if($detail){ ?>
                    <article>
                        <div class="row">
                            <div class="span8">
                                <div class="post-image">
                                    <div class="post-heading">
                                        <h3><?php echo $detail['title']; ?></h3>
                                    </div>
                                    <img src="<?php echo base_url('assets/img/news/').$detail['internal']; ?>" alt="" />
                                </div>
                                <?php echo $detail['content']; ?>
                                <div class="bottom-article">
                                    <ul class="meta-post">
                                        <li><i class="icon-calendar"></i><?php echo date('d-m-Y H:i', strtotime($detail['date'])); ?></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </article>
                <?php } ?>
                <?php if($detail){ ?>
                <div class="comment-area">                    
                    <?php if($sendcomment  != null){ ?>
                        <div class="<?php echo $sendcomment['class']; ?>">
                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                            <?php echo $sendcomment['message']; ?>
                        </div>
                    <?php } ?>
                    <?php if($comments){ ?>
                        <h4><?php 
                                if($num == 1){
                                    echo $num." comentário";
                                }else{
                                    echo $num." comentários";
                                }
                            ?>
                        </h4>
                        <?php foreach($comments as $comment){ ?>
                            <div class="media">
                                <div class="media-body">
                                    <div class="media-content">
                                        <h6><span><?php echo date('d-m-Y', strtotime($comment->date)); ?></span> <?php echo $comment->author; ?></h6>
                                        <p>
                                            <?php echo $comment->message; ?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    <?php }else{ ?>
                        <h5>Nenhum comentário. Seja o primeiro!</h5>
                    <?php } ?>
                    <h4>Deixe seu comentário</h4>
                    <form action="<?= base_url('news/sendcomment'); ?>" method="post" class="contactForm">
                        <div class="row">
                            <input type="hidden" id="news" name="news" value="<?= $detail['newsid']; ?>">
                            <div class="span4 form-group">
                                <input type="text" name="name" class="form-control" id="name" placeholder="Seu nome" data-rule="minlen:4" data-msg="Necessário no mínimo 4 caracteres" />
                                <div class="validation"></div>
                            </div>
                            <div class="span4 form-group">
                                <input type="text" name="email" class="form-control" id="email" placeholder="Seu email" />
                                <div class="validation"></div>
                            </div>
                            <div class="span8 margintop10 form-group">
                                <p>
                                    <textarea rows="12" name="comment" id="comment" class="input-block-level" placeholder="Escreva seu comentário" style="resize: none"></textarea>
                                </p>
                                <p class="text-center">
                                    <button class="btn btn-large btn-theme margintop10" type="submit">Enviar</button>
                                </p>
                            </div>
                        </div>
                    </form>
                </div>
                <?php } ?>
            </div>