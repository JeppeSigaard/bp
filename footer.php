<?php $options = get_option('smamo_theme_options');?>
            </main>
            <footer>
               <div class="box-full">				
                    <p></p>
                    <center>
                        <img alt="www.bpbiotransport.dk" src="<?php echo $options['logo_upload'] ?>" width="137" height="43">
                        <br>
                            <b>Telefon:</b> 
                            <?php echo $options['telefonnummer'] ?>
                        <br>
                            <b>Mail:</b>
                            <a title="Send mail til BP Biotransport" href="mailto:<?php echo $options['email'] ?>">
                                <?php echo $options['email'] ?>
                            </a>
                        <p></p>
                    </center>
                </div>
            </footer>
        </div>
        <?php wp_footer(); ?>
    </body>
</html>