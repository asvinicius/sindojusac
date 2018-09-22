<head>
    <title>Galeria | SINDOJUS-AC</title>
</head>
<section id="inner-headline">
    <div class="container">
        <div class="row">
            <div class="span4">
                <div class="inner-heading">
                    <h2>Galeria</h2>
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
                    <section id="projects">
                        <ul id="thumbs" class="portfolio">
                            <?php if($gallery){ foreach ($gallery as $photo){?>
                                <li class="item-thumbs span3 design" data-id="id-0" data-type="web">
                                    <a class="hover-wrap fancybox" data-fancybox-group="gallery" title="<?= $photo->phototitle ?>" href="<?= base_url('assets/img/gallery/'.$photo->photoaddress); ?>">
                                        <span class="overlay-img"></span>
                                        <span class="overlay-img-thumb font-icon-plus"></span>
                                    </a>
                                    <!-- Thumb Image and Description -->
                                    <img src="<?= base_url('assets/img/gallery/'.$photo->photoaddress); ?>" alt="<?= date('d-m-Y', strtotime($photo->photodate)); ?>">
                                </li>
                            <?php }}else{ ?>
                                <h4> A galeria está vazia! </h4>
                            <?php } ?>
                        </ul>
                    </section>
                </div>
            </div>
        </div>
    </div>
</section>