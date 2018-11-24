<head>
    <title>Contato | SINDOJUS-AC</title>
</head>
<section id="inner-headline">
    <div class="container">
        <div class="row">
            <div class="span4">
                <div class="inner-heading">
                    <h2>Contato</h2>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="content">
    <div class="container">
        <div class="row">
            <div class="span12">
                <?php if($sendmessage  != null){ ?>
                    <div class="<?php echo $sendmessage['class']; ?>">
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <?php echo $sendmessage['message']; ?>
                    </div>
                <?php } ?>
                <h4>Nos mande uma mensagem</h4>

                <form action="<?= base_url('contact/sendmessage'); ?>" method="post" class="contactForm">
                    <div class="row">
                        <div class="span4 form-group">
                            <input type="text" name="name" class="form-control" id="name" placeholder="Nome" data-rule="minlen:4" data-msg="Forneça ao menos 4 caracteres!" />
                            <div class="validation"></div>
                        </div>
                        <div class="span4 form-group">
                            <input type="email" class="form-control" name="email" id="email" placeholder="Email" data-rule="email" data-msg="Forneça um email válido" />
                            <div class="validation"></div>
                        </div>
                        <div class="span4 form-group">
                            <input type="text" class="form-control" name="subject" id="subject" placeholder="Assunto" data-rule="minlen:4" data-msg="Forneça ao menos 4 caracteres!" />
                            <div class="validation"></div>
                        </div>
                        <div class="span12 margintop10 form-group">
                            <textarea class="form-control" name="message" rows="12" data-rule="required" data-msg="Escreva sua mensagem" placeholder="Escreva sua mensagem" style="resize: none"></textarea>
                            <div class="validation"></div>
                            <p class="text-center">
                                <button class="btn btn-large btn-theme margintop10" type="submit">Enviar</button>
                            </p>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>