<head>
    <title>Inicio | SINDOJUS-AC</title>
</head>
<section id="featured">
    <?php if($news){ ?>
        <div id="nivo-slider">
            <div class="nivo-slider">
                <?php foreach($news as $new){ ?>
                    <img src="<?php echo base_url('assets/img/news/').$new->main; ?>" alt="" title="#caption-<?php echo $new->newsid; ?>" />
                <?php } ?>
            </div>
            <div class="container">
                <div class="row">
                    <div class="span12">
                        <?php foreach($news as $new){ ?>
                            <div class="nivo-caption" id="caption-<?php echo $new->newsid; ?>">
                                <div>
                                    <h2><?php echo $new->title; ?></h2>
                                    <p> <?php echo $new->abstract; ?> </p>
                                    <a href="<?= base_url('news/detail/' . $new->newsid); ?>" class="btn btn-theme">Leia mais</a>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    <?php } ?>
    <!-- end slider -->
</section>
<section class="callaction">
    <div class="container">
        <div class="row">
            <div class="span12">
                <div class="big-cta">
                    <div class="cta-text">
                        <h3>Somente com você podemos atingir <span class="highlight"><strong>100%</strong></span> de adesão!</h3>
                    </div>
                    <div class="cta floatright">
                        <a class="btn btn-large btn-theme btn-large" href="#mySignup" data-toggle="modal">Filie-se</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="content">
    <div class="container">
        <div class="row">
            <div class="span12">
                <div class="row">
                    
                    <!--
                    <div class="span3">
                        <div class="box aligncenter">
                            <div class="aligncenter icon">
                                <i class="icon-envelope icon-circled icon-64 active"></i>
                            </div>
                            <div class="text">
                                <h6>Modelos</h6>
                                <p>
                                    Modelos de documentos necessários para os Oficiais de Justiça disponíveis para filiados.
                                </p>
                                <a href="<?= base_url('models'); ?>">Saiba mais</a>
                            </div>
                        </div>
                    </div>
                    <div class="span3">
                        <div class="box aligncenter">
                            <div class="aligncenter icon">
                                <i class="icon-eye-open icon-circled icon-64 active"></i>
                            </div>
                            <div class="text">
                                <h6>Transparência</h6>
                                <p>
                                    Saiba de todas as ações tomadas pelo SINDOJUS-AC de forma detalhadas na seção de transparência.
                                </p>
                                <a href="#">Saiba mais</a>
                            </div>
                        </div>
                    </div>
                    -->
                    <div class="span3">
                        <div class="box aligncenter">
                            <div class="aligncenter icon">
                                <i class="icon-info-sign icon-circled icon-64 active"></i>
                            </div>
                            <div class="text">
                                <h6>Informações</h6>
                                <p>
                                    Tenha informações e notícias do universo dos Oficiais de Justiça.
                                </p>
                                <a href="<?= base_url('news'); ?>">Saiba mais</a>
                            </div>
                        </div>
                    </div>
                    <div class="span3">
                        <div class="box aligncenter">
                            <div class="aligncenter icon">
                                <i class="icon-comment icon-circled icon-64 active"></i>
                            </div>
                            <div class="text">
                                <h6>Comunicação</h6>
                                <p>
                                    Uma forma mais rápida e cômoda de ter contato com o SINDOJUS-AC.
                                </p>
                                <a href="<?= base_url('contact'); ?>">Saiba mais</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- divider -->
        <div class="row">
            <div class="span12">
                <div class="solidline">
                </div>
            </div>
        </div>
        <!-- end divider -->
        <!-- Portfolio Projects -->
        <div class="row">
            <div class="span12">
                <h4 class="heading">Parceiros do <strong>SINDOJUS-AC</strong></h4>
                <div class="row">
                    <section id="projects">
                        <ul id="thumbs" class="portfolio">
                            <li class="item-thumbs span3 design" data-id="id-0" data-type="web">
                                <a class="hover-wrap fancybox" data-fancybox-group="gallery" title="FOJEBRA" href="assets/img/partnerships/fojebramain.png">
                                    <span class="overlay-img"></span>
                                    <span class="overlay-img-thumb font-icon-plus"></span>
                                </a>
                                <img src="assets/img/partnerships/fojebramini.png" alt="A Federação das Entidades Representativas dos Oficiais de Justiça Estaduais do Brasil - Fojebra é a entidade nacional responsável por reunir todos os sindicatos e associações estaduais de Oficiais de Justiça do País.">
                            </li>
                            <!--
                            <li class="item-thumbs span3 design" data-id="id-0" data-type="web">
                                <a class="hover-wrap fancybox" data-fancybox-group="gallery" title="TJAC" href="assets/img/tjacbrasao.png">
                                    <span class="overlay-img"></span>
                                    <span class="overlay-img-thumb font-icon-plus"></span>
                                </a>
                                <img src="assets/img/tjacbrasao.png" alt="O Tribunal de Justiça do Acre é o responsável por dar suporte ao trabalho dos Oficiais de Justiça. Tem como missão, garantir os direitos do jurisdicionado no Estado do Acre, com justiça, agilidade e ética, promovendo o bem de toda a sociedade.">
                            </li>
                            -->
                        </ul>
                    </section>
                </div>
            </div>
        </div>
        
        <!--
        <div class="row">
            <div class="span12">
                <div class="solidline">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="span12">
                <h4>Convênios com o <strong>SINDOJUS-AC</strong></h4>
                <ul id="mycarousel" class="jcarousel-skin-tango recent-jcarousel clients">
                    <li>
                        <a href="#">
                            <img src="<?= base_url('assets/img/dummies/clients/client1.png'); ?>" class="client-logo" alt="" />
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="<?= base_url('assets/img/dummies/clients/client2.png'); ?>" class="client-logo" alt="" />
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="<?= base_url('assets/img/dummies/clients/client3.png'); ?>" class="client-logo" alt="" />
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="<?= base_url('assets/img/dummies/clients/client4.png'); ?>" class="client-logo" alt="" />
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="<?= base_url('assets/img/dummies/clients/client5.png'); ?>" class="client-logo" alt="" />
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="<?= base_url('assets/img/dummies/clients/client6.png'); ?>" class="client-logo" alt="" />
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        -->
    </div>
</section>