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
                <div class="comment-area">
                    <?php if($comments){ ?>
                        <h4>4 Comments</h4>
                        <div class="media">
                            <div class="media-body">
                                <div class="media-content">
                                    <h6><span>March 12, 2013</span> Karen medisson</h6>
                                    <p>
                                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                                    </p>
                                </div>
                            </div>
                        </div>
                    <?php }else{ ?>
                        <h5>Nenhum comentário. Seja o primeiro!</h5>
                    <?php } ?>
                    <h4>Deixe seu comentário</h4>
                    <form id="commentform" action="#" method="post" name="comment-form">
                        <div class="row">
                            <div class="span4">
                                <input type="text" placeholder="Seu nome" />
                            </div>
                            <div class="span4">
                                <input type="text" placeholder="Sem email" />
                            </div>
                            <div class="span8 margintop10">
                                <p>
                                    <textarea rows="12" class="input-block-level" placeholder="Escreva seu comentário" style="resize: none"></textarea>
                                </p>
                                <p class="text-center">
                                    <button class="btn btn-large btn-theme margintop10" type="submit">Enviar</button>
                                </p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>