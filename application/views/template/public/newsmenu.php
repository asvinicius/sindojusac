
            <div class="span4">
                <aside class="right-sidebar">
                    <div class="widget">
                        <form class="form-search">
                            <input placeholder="Busque algo..." type="text" class="input-medium search-query">
                            <button type="submit" class="btn btn-square btn-theme">Buscar</button>
                        </form>
                    </div>
                    <div class="widget">
                        <h5 class="widgetheading">Notícias importantes</h5>
                        <?php if ($news) { ?>
                            <ul class="recent">
                                <?php foreach ($news as $new) { ?>
                                    <li>
                                        <h6><a href="<?= base_url('news/detail/' . $new->newsid); ?>"><?php echo $new->title; ?></a></h6>
                                        <p>
                                            <?php echo $new->abstract; ?>
                                        </p>
                                    </li>
                                <?php } ?>
                            </ul>
                        <?php } ?>
                    </div>
                </aside>
            </div>
        </div>
    </div>
</section>