<?php

// Template Name: Inicio

    get_header();

?>

    <!-- HERO -->
    <section id="hero">
        <img src="<?php echo CFS()->get('background_hero');?>" alt="" class="fundo-hero">

        <div class="container">
            <div class="main">
                <img src="<?php echo CFS()->get('logo_hero');?>" alt="">
                <h1><?php echo CFS()->get('headline_hero');?></h1>
            </div>      
        </div>

    </section>
    <!-- ~~ -->


    <!-- CARD HERO-->
    <section id="card-hero">
        <div class="details1"></div>
        <div class="card">
            <h3><?php echo CFS()->get('titulo_descricao_hero');?></h3>
            <p><?php echo CFS()->get('texto_descricao_hero');?></p>
        </div>
        <div class="details2"></div>
    </section>
    <!--  -->



    <?php
        if(CFS()->get('toggle_empreendimento_principal') == true){
    ?>
    <!-- EMPREENDIMENTOS -->
    <section id="empreendimentos">

        <div class="container">

            <div class="cont-left">

                <div class="swiper mySwiper">
                    <div class="swiper-wrapper">          

                    <?php 
                        foreach(CFS()->get('imagens_carrossel_empreendimento_principal') as $key){
                    ?>
                        <div class="swiper-slide">
                            <img class="img-slide" src="<?php echo $key['img_empreendimento_principal'];?>" alt="">                            
                        </div>
                    <?php
                        }
                    ?>

                    </div>

                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>

                </div>
                <img class="details-fundo" src="<?php echo get_template_directory_uri();?>/assets/img/details.png" alt="">
                
            </div>

            <div class="cont-right">

                <div class="cont-title">
                    <h3><?php echo CFS()->get('titulo_empreendimento_principal');?></h3>
                    <p><?php echo CFS()->get('descricao_empreendimento_principal');?></p>
                    <div class="cont-endereco">
                        <img src="<?php echo get_template_directory_uri();?>/assets/img/location.svg" alt="">
                        <p><?php echo CFS()->get('localizacao_empreendimento_principal');?></p>
                    </div>
                </div>

                <div class="diferenciais">
                    <p class="title">DIFERENCIAIS</p>
                    <div class="details"></div>

                    <div class="cont-wrap">
                        <div class="wrap">
                            <img src="<?php echo get_template_directory_uri();?>/assets/img/Group1.svg" alt="">
                            <p>Quartos <br> <span><?php echo CFS()->get('diferenciais_quartos');?></span></p>
                        </div>

                        <div class="wrap">
                            <img src="<?php echo get_template_directory_uri();?>/assets/img/Group2.svg" alt="">
                            <p>Suítes  <br> <span><?php echo CFS()->get('diferenciais_suites');?></span></p>
                        </div>

                        <div class="wrap">
                            <img src="<?php echo get_template_directory_uri();?>/assets/img/Group3.svg" alt="">
                            <p>Banheiros <br> <span><?php echo CFS()->get('diferenciais_banheiros');?></span></p>
                        </div>

                        

                        <div class="wrap">
                            <img src="<?php echo get_template_directory_uri();?>/assets/img/Group4.svg" alt="">
                            <p>Estacionamento <br> <span><?php echo CFS()->get('diferenciais_estacionamento');?></span></p>
                        </div>

                        <div class="wrap">
                            <img src="<?php echo get_template_directory_uri();?>/assets/img/Group5.svg" alt="">
                            <p>Área total <br> <span><?php echo CFS()->get('diferenciais_area_total');?></span></p>
                        </div>

                        <div class="wrap">
                            <img src="<?php echo get_template_directory_uri();?>/assets/img/Group6.svg" alt="">
                            <p>Aceita pet? <br> <span><?php echo CFS()->get('diferenciais_aceita_pet');?></span></p>
                        </div>

                    </div>
                </div>

                <div class="caracteristicas">
                    <p class="destaque">CARACTERÍSTICAS</p>

                    <div class="details"></div>

                    <div class="caract-wrap">

                        <?php

                            foreach(CFS()->get('caracteristicas_empreendimento_principal') as $key){

                        ?>
                            <div class="wrap">
                                <img src="<?php echo get_template_directory_uri();?>/assets/img/circle-check.svg" alt="">
                                <p><?php echo $key['texto_caracteristicas'];?></p>
                            </div>
                        <?php
                                
                            }
                        
                        ?>

                    </div>
                   
                </div>
                <a class="but-caract" href="<?php echo CFS()->get('links_botoes_config');?>">SAIBA MAIS</a>

            </div>
        </div>

        
       
    </section>
    <!--  -->
    

    <!-- ÁREAS DE  LAZER-->
    <section id="lazer">
        <div class="container">
            <p class="title">ÁREAS DE LAZER</p>
            <div class="details"></div>

            <div class="slides">


                <!-- CONTAINER LATERAL DE NAVEGAÇÃO -->
                <div class="cont-left">

                    <div class="menu">
                        <div class="menu-item" data-slide="0">
                            <div class="itens">
                                <div class="check">
                                    <div class="mark"></div>
                                </div>
                                <p><?php echo CFS()->get('titulo_carrossel_1');?></p>
                            </div>
                        </div>

                        <div class="menu-item" data-slide="1">
                            <div class="itens">
                                <div class="check">
                                    <div class="mark"></div>
                                </div>
                                <p><?php echo CFS()->get('titulo_carrossel_2');?></p>
                            </div>
                        </div>

                        <div class="menu-item" data-slide="2">
                            <div class="itens">
                                <div class="check">
                                    <div class="mark"></div>
                                </div>
                                <p><?php echo CFS()->get('titulo_carrossel_3');?></p>
                            </div>
                        </div>

                        <div class="menu-item" data-slide="3">
                            <div class="itens">
                                <div class="check">
                                    <div class="mark"></div>
                                </div>
                                <p><?php echo CFS()->get('titulo_carrossel_4');?></p>
                            </div>
                        </div>

                        <div class="menu-item" data-slide="4">
                            <div class="itens">
                                <div class="check">
                                    <div class="mark"></div>
                                </div>
                                <p><?php echo CFS()->get('titulo_carrossel_5');?></p>
                            </div>
                        </div>
                    </div>
     
                </div>
                <!-- ~~ -->


                <!-- CONTAINER DO SLIDE -->
                <div class="cont-right">
                    <div class="swiper mySwiper1">
                        <div class="swiper-wrapper">

                            <div class="swiper-slide" data-menu="0">
                                <img src="<?php echo CFS()->get('imagem_carrossel_1');?>" alt="">
                            </div>

                            <div class="swiper-slide" data-menu="1">
                                <img src="<?php echo CFS()->get('imagem_carrossel_2');?>" alt="">
                            </div>

                            <div class="swiper-slide" data-menu="2">
                                <img src="<?php echo CFS()->get('imagem_carrossel_3');?>" alt="">
                            </div>

                            <div class="swiper-slide" data-menu="3">
                                <img src="<?php echo CFS()->get('imagem_carrossel_4');?>" alt="">
                            </div>

                            <div class="swiper-slide" data-menu="4">
                                <img src="<?php echo CFS()->get('imagem_carrossel_5');?>" alt="">
                            </div>

                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
                <!-- ~~ -->

            </div>

           

        </div>
    </section>
    <!-- ~~ -->
    <?php } ?>


    <!-- OUTROS IMÓVEIS -->
    <section id="outros-empreen">
        <div class="container">
            <p class="title"><?php echo CFS()->get('titulo_outros_imoveis') ?></p>
            <div class="details"></div>

            <div class="cards-empreen">
            <?php

                foreach(CFS()->get('outros_empreendimentos') as $key){
                
            ?>
                <a class="card" href="<?php echo $key['link_empreendimento'];?>" target="_blank">
                    <img class="foto" src="<?php echo $key['imagem_empreendimento'];?>" alt="">
               
                    <div class="txt">
                        <div class="name">
                            <p><?php echo $key['titulo_empreendimento'];?></p>
                        </div>
                        <p class="price"><?php echo $key['valor_empreendimento'];?></p>
                    </div>
                </a>
            <?php

                }

            ?>
            </div>

        </div>

        
    </section>

    
    <!-- CALL TO ACTION -->
    <section id="call-action">
        <div class="details1"></div>
        <img class="fundo" src="<?php echo CFS()->get('background_cta');?>">

        <div class="container">
            <div class="chamada">
                <h2><?php echo CFS()->get('titulo_cta');?></h2>
                <p><?php echo CFS()->get('texto_cta');?></p>
                <a class="saiba-mais" href="<?php echo CFS()->get('links_botoes_config');?>"><?php echo CFS()->get('texto_botao_cta');?></a>
            </div>
        </div>
        <div class="details2"></div>
        
    </section>
    <!-- ~~ -->


<?php

    get_footer();

?>