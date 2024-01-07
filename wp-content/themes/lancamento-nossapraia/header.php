<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nossa Praia</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="<?php echo CFS()->get('font_landing_page') ?>" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/style.css">

    <style>
    :root{
        /* Fontes */
        --font-primaria: '<?php echo CFS()->get("nome_font");?>', sans-serif;

        /* Cores */
        --cor-primaria: #FFFFFF;
        --cor-secundaria: #2C3240;
        --cor-terciaria: ;

        --background-primario: #E8E8E8;
        --background-secundario: #2C3240;

        /* Responsividade */
        --responsivo: 1320px;
    }
    </style>
</head>
<body>
    

    <!-- HEADER -->
    <header class="home">

        <div class="container">

            <!-- MENU NAVEGAÇÃO -->
            <nav class="menu-header">
                <div class="logo-header">
                    <img src="<?php echo CFS()->get('logo_cabecalho'); ?>" alt="">
                </div>

                <ul class="nav-list">
                    <li><a href="#hero">Início</a></li>
                    <li><a href="#empreendimentos">Características</a></li>
                    <li><a href="#lazer">Áreas de Lazer</a></li>
                    <li><a href="#outros-empreen">Imóveis</a></li>
                </ul>

                <a class="button" href="<?php echo CFS()->get('links_botoes_config');?>">Contato</a>
            </nav>

            <nav class="menu-nav-mobile">

                <div class="mobile-menu">
                    <div class="line1"></div>
                    <div class="line2"></div>
                    <div class="line3"></div>
                </div>
    
                <ul class="nav-list-mobile">
                    <li><a href="#hero">Início</a></li>
                    <li><a href="#empreendimentos">Características</a></li>
                    <li><a href="#lazer">Áreas</a></li>
                    <li><a href="#outros-empreen">Empreendimentos</a></li>
                    <li><a class="button" href="<?php echo CFS()->get('links_botoes_config');?>">Contato</a></li>
                </ul>
                
            </nav>
        </div>

    </header>
    <!-- ~~ -->

    <!-- WhatsApp Icon -->
    <a href="<?php echo CFS()->get('links_botoes_config');?>" id="whatsapp-btn"><img src="<?php echo get_template_directory_uri();?>/assets/img/whatsapp.svg"></a>
    <!-- ~~ -->