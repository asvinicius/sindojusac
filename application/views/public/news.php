<head>
    <title>Notícias | SINDOJUS-AC</title>
</head>
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
                <?php if ($news) { ?>
                    <?php foreach ($news as $new) { ?>
                        <article>
                            <div class="row">
                                <div class="span8">
                                    <div class="post-image">
                                        <div class="post-heading">
                                            <h3><a href="<?= base_url('news/detail/' . $new->newsid); ?>"><?php echo $new->title; ?></a></h3>
                                        </div>
                                        <img src="<?php echo base_url('assets/img/news/').$new->thumb; ?>" alt="" />
                                    </div>
                                    <p>
                                        <?php echo $new->abstract; ?>
                                    </p>
                                    <div class="bottom-article">
                                        <ul class="meta-post">
                                            <li><i class="icon-calendar"></i><?php echo date('d-m-Y H:i', strtotime($new->date)); ?></li>
                                            <li><i class="icon-comments"></i>0 Comments</li>
                                        </ul>
                                        <a href="<?= base_url('news/detail/' . $new->newsid); ?>" class="pull-right">Continue lendo <i class="icon-angle-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </article>
                    <?php } ?>
                    <!--
                    <div id="pagination">
                        <span class="all">Page 1 of 3</span>
                        <span class="current">1</span>
                        <a href="#" class="inactive">2</a>
                        <a href="#" class="inactive">3</a>
                    </div>
                    -->
                <?php } ?>
            </div>