<?php
defined('BASEPATH') OR exit('No direct script access allowed');
error_reporting(0);
ini_set(“display_errors”, 0 );
?>

<section id="inner-headline">
    <div class="container">
        <div class="row">
            <div class="span4">
                <div class="inner-heading">
                    <h2>Algo deu errado!</h2>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="content">

    <div class="container">
        <div class="row">
            <div class="span12">
                <?php if($loginfail){ ?>
                <div class="<?php echo $loginfail['class']; ?>">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <?php echo $loginfail['message']; ?>
                </div>
                <?php } ?>

                <form class="form-horizontal" method="get" action="<?= base_url('login/superin'); ?>" >
                    <div class="control-group">
                        <label class="control-label" for="username">Usuário</label>
                        <div class="controls">
                            <input type="text" id="username" name="username" placeholder="Usuário">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="password">Senha</label>
                        <div class="controls">
                            <input type="password" id="password" name="password" placeholder="Senha">
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="controls">
                            <button type="submit" class="btn">Entrar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>