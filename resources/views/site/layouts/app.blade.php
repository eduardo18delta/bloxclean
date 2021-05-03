<!doctype html>
<html class="no-js" lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">    
    <meta name="viewport" content="width=device-width, initial-scale=1">
     <!-- Meta Tags - Open Graph -->
    <meta property="og:url" content="https://www.boxclean.com.br"/>
    <meta property="og:title" content="Box Clean"/>
    <meta property="og:description" content="Box Clean - Limpeza de Reservatorios e Caixas D'Agua"/>
    <meta property="og:site_name" content="Box Clean"/>    
    <meta property="og:locale" content="pt_BR"/>
    <!-- Meta Tags Comuns -->
    <meta name="robots" content="index, follow">
    <meta name="author" content="Eduardo Henrique">
    <meta name="copyright" content="Box Clean">
    <meta name="designer" content="Box Clean">
    <meta name="abstract" content="Box Clean - Limpeza de Reservatorios e Caixas D'Agua>
    <meta name="description" content="Box Clean - Limpeza de Reservatorios e Caixas D'Agua">
    <meta name="keywords" content="Limpeza de Reservatórios, Limpeza de Caixas D'Agua"/>    
    <!-- CSS here -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <link rel="stylesheet" href="css/nice-select.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/gijgo.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/slicknav.css">
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css">
    <link rel="stylesheet" href="css/style.css">
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->
</head>
<body> 
    
    <!-- Menu_area -->
    <header>
        @yield('header')
    </header>
    <!-- /Menu_area -->
    <!-- slide_area -->
    <div class="slider_area">
        @yield('slide')
    </div>
    <!-- /slide_area -->
    <!-- itens_action_area  -->
    <div class="transportaion_area">
        @yield('itens-mid')
    </div>
    <!-- /itens_action_area  -->
    <!-- service_action_area  -->
    <div class="service_area">
        @yield('servicos')
    </div>
    <!-- /service_action_area  -->
    <!-- contact_action_area  -->
         @yield('banner-contato')
    <!-- /contact_action_area  -->

    <!-- contact_location  -->
        @yield('contatos_2')
    <!--/ contact_location  -->

    <!-- footer_area -->
        @yield('footer')
    <!-- footer_area -->

    