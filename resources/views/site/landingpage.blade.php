@extends('site.layouts.app')

@section('title' , 'Box Clean')

@section('header')

        <div class="header-area ">
            <div class="header-top_area d-none d-lg-block">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-4 col-lg-4">
                            <div class="logo">
                                <a href="index.html">
                                    <img src="storage/{{$config_geral->first()->logo}}" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-8 col-md-8">
                            <div class="header_right d-flex align-items-center">
                                <div class="short_contact_list">
                                    <ul>
                                        @foreach ($config_geral as $config)
                                            <li><a href="mailto:{{$config->email}}"> <i class="fa fa-envelope" style="color: #009CDE;"></i>{{$config->email}}</a></li>
                                            <li><a href="tel:{{$config->telefone}}"> <i class="fa fa-phone" style="color: #009CDE;"></i> {{$config->telefone}}</a></li>                                          
                                        @endforeach
                                    </ul>
                                </div>

                                <div class="book_btn d-none d-lg-block">
                                    <a class="boxed-btn3-line" href="{{$config->first()->url_botao}}">{{$config->first()->titulo_botao}}</a>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="sticky-header" class="main-header-area">
                <div class="container">
                    <div class="header_bottom_border">
                        <div class="row align-items-center">
                            <div class="col-12 d-block d-lg-none">
                                <div class="logo">
                                    <a href="index.html">
                                        <img src="img/logo.png" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="col-xl-9 col-lg-9">
                                <div class="main-menu  d-none d-lg-block">
                                    <nav>
                                        <ul id="navigation">
                                        @foreach ($menus as $menu)
                                            <li><a href="{{$menu->url}}">{{$menu->nome}}</a></li>
                                        @endforeach
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 d-none d-lg-block">
                                <div class="Appointment justify-content-end">
                                    <div class="search_btn">
                                        <a data-toggle="modal" data-target="#exampleModalCenter" href="#">
                                            <i class="ti-search"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mobile_menu d-block d-lg-none"></div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

@endsection


@section('slide')

        <div class="single_slider  d-flex align-items-center slider_bg_1">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-xl-8">
                        <div class="slider_text text-center justify-content-center">
                            <p>Box Clean</p>
                            <h3>Limpeza de Caixas D'Agua</h3>
                                <a class="boxed-btn3" href="service.html">Nossos serviços</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

@endsection


@section('itens-mid')
    <div id="itens_home" class="container">
        <div class="row">
            @foreach ($itens as $item)
            <div class="col-xl-4 col-lg-4 col-md-6">
                <div class="single_transport">
                    <div class="icon">
                        <img src="{{url("storage/$item->icone") }}" alt="{{$item->titulo_icone}}">
                    </div>
                    <h3>{{$item->titulo_icone}}</h3>
                    <p>{{$item->conteudo}}</p>
                </div>
            </div>
            @endforeach

        </div>
    </div>
@endsection 



@section('servicos')
    <div id="servicos_home" class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="section_title mb-50 text-center">
                    <h3>
                        Nossos Serviços
                    </h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-12">
                <div class="service_active owl-carousel">

                    @foreach ($servicos as $servico)
                    <div class="single_service">
                        <div class="thumb">                            
                            <img src=" {{url("storage/$servico->image") }}" alt="{{$servico->titulo_item}}">
                        </div>
                        <div class="service_info">
                            <h3><a href="service_details.html">{{$servico->titulo_item}}</a></h3>
                            <p>{{$servico->conteudo}}</p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection

@section('banner-contato')
<div id="contact_action_area" class="contact_action_area" style="background-image: url(storage/{{$banner_contato->first()->imagem}})" >
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-7 col-md-6">
                    <div class="action_heading">
                        <h3>{{$banner_contato->first()->titulo}}</h3>
                        <p>{{$banner_contato->first()->conteudo}}</p>
                    </div>
                </div>
                <div class="col-xl-5 col-md-6">
                    <div class="call_add_action">
                        <a href="{{$banner_contato->first()->url_numero}}" class="boxed-btn3">{{$banner_contato->first()->numero}}</a>
                    </div>
                </div>
            </div>
        </div> 
</div>
@endsection


@section('contatos_2')
    <div id="contact_location" class="contact_location">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-6">
                    <div class="location_left">
                        <div class="logo">
                            <a href="index.html">
                                <img src="storage/{{$config_geral->first()->logo}}" alt="">
                            </a>
                        </div>
                        <ul>
                            <li><a href="{{$config_geral->first()->url_facebook}}"> <i class="fa fa-facebook"></i> </a></li>
                            <li><a href="{{$config_geral->first()->url_instagram}}"> <i class="fa fa-instagram"></i> </a></li>
                            <li><a href="{{$config_geral->first()->url_twitter}}"> <i class="fa fa-twitter"></i> </a></li>
                            <li><a href="{{$config_geral->first()->url_youtube}}"> <i class="fa fa-youtube"></i> </a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-3 col-md-3">
                    <div class="single_location">
                        <h3> <img src="img/icon/address.svg" alt=""> Endereço</h3>
                        <p>{{$config_geral->first()->endereco}}</p>
                    </div>
                </div>
                <div class="col-xl-3 col-md-3">
                    <div class="single_location">
                        <h3> <img src="img/icon/support.svg" alt=""> Contato</h3>
                        <p>{{$config_geral->first()->telefone}}<br>
                            {{$config_geral->first()->email}}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


@section('footer')
 <!-- footer start -->
 <footer class="footer">
        <div class="footer_top">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-md-6 col-lg-3">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                Nossos Serviços
                            </h3>
                            <ul>
                                <li><a href="#"></a>link Exemplo</li>
                                <li><a href="#"></a>link Exemplo</li>
                                <li><a href="#"></a>link Exemplo</li>
                                <li><a href="#"></a>link Exemplo</li>                                
                            </ul>

                        </div>
                    </div>
                    <div class="col-xl-2 col-md-6 col-lg-2">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                Links Rápidos
                            </h3>
                            <ul>
                                <li><a href="#"></a>link Exemplo</li>
                                <li><a href="#"></a>link Exemplo</li>
                                <li><a href="#"></a>link Exemplo</li>
                                <li><a href="#"></a>link Exemplo</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-lg-3">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                Exemplo de Links
                            </h3>
                            <ul>
                                <li><a href="#"></a>link Exemplo</li>
                                <li><a href="#"></a>link Exemplo</li>
                                <li><a href="#"></a>link Exemplo</li>
                                <li><a href="#"></a>link Exemplo</li>
                                <li><a href="#"></a>link Exemplo</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6 col-lg-4">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                Newsletter
                            </h3>
                            <form action="#" class="newsletter_form">
                                <input type="text" placeholder="Seu Email">
                                <button type="submit">Nossa Newsletter</button>
                            </form>
                            <p class="newsletter_text">Receba nossas notícas em primera mão.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copy-right_text">
            <div class="container">
                <div class="footer_border"></div>
                <div class="row">
                    <div class="col-xl-12">
                        <p class="copy_right text-center">
                            Copyright &copy;<script>document.write(new Date().getFullYear());</script> Box Clean | Desenvolvido por <a href="#" target="_blank">Eduardo Henrique</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--/ footer end  -->
<!-- Button trigger modal -->
  
  <!-- Modal -->
  <div class="modal fade custom_search_pop" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="serch_form">
            <input type="text" placeholder="Digite o que procura">
            <button type="submit">Buscar</button>
        </div>
      </div>
    </div>
  </div>

    <!-- JS here -->
    <script src="js/vendor/modernizr-3.5.0.min.js"></script>
    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/ajax-form.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/imagesloaded.pkgd.min.js"></script>
    <script src="js/scrollIt.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/nice-select.min.js"></script>
    <script src="js/jquery.slicknav.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/plugins.js"></script>
    <!-- <script src="js/gijgo.min.js"></script> -->
    <script src="js/slick.min.js"></script>



    <!--contact js-->
    <script src="js/contact.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/jquery.form.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/mail-script.js"></script>


    <script src="js/main.js"></script>




</body>

</html>


@endsection