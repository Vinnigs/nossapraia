<!-- FOOTER -->
<footer>
        <div class="container">
            <div class="info-footer">
                <img class="logo-footer" src="<?php echo CFS()->get('logo_rodape');?>" alt="">

                <nav class="menu-footer">
                    <ul class="list-footer">

                        <li><a href="#hero">Início</a></li>
                        <div class="details"></div>

                        <li><a href="#empreendimentos">Características</a></li>
                        <div class="details"></div>

                        <li><a href="#lazer">Áreas de Lazer</a></li>
                        <div class="details"></div>

                        <li><a href="#outros-empreen">Imóveis</a></li>
                        
                    </ul>
                </nav>

                <div class="redes">
                    <a href="https://www.facebook.com/nossa.praiaimoveis/" target="_blank"><img src="<?php echo get_template_directory_uri();?>/assets/img/facebook.svg" alt=""></a>
                    <a href="https://www.instagram.com/nossapraia.imoveis/" target="_blank"><img src="<?php echo get_template_directory_uri();?>/assets/img/instagram.svg" alt=""></a>
                    <a href="https://www.youtube.com/channel/UCH-r7hHYSxd2z-4lJ6UO96A" target="_blank"><img src="<?php echo get_template_directory_uri();?>/assets/img/youtube.svg" alt=""></a>
                </div>

                <a href="#hero"  class="topo">
                    <img src="<?php echo get_template_directory_uri();?>/assets/img/set-footer.svg" alt="">
                    <p>Voltar ao Topo</p>
                </a>

            </div>

           

        </div>

        <div class="details-foot"></div>
        <div class="container">
           
            <div class="creditos">
                <p><?php echo CFS()->get('copyright_rodape');?></p>
                <p><?php echo CFS()->get('cnpj_rodape');?></p>
            </div>
    
        </div>
        
       

    </footer>
    <!-- ~~ -->
    
    <?php wp_footer();?>

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="<?php echo get_template_directory_uri();?>/assets/js/slide.js"></script>
    <script src="<?php echo get_template_directory_uri();?>/assets/js/menu-mobile.js"></script>
    <script src="<?php echo get_template_directory_uri();?>/assets/js/menu-nav.js"></script>
</body>
</html>