<!DOCTYPE html>
<html lang="en">

<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>PAGINA MPCA🎵💼📱🐶</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('rock/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('rock/css/animate.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('rock/css/jquery.mCustomScrollbar.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('rock/css/owl.carousel.min.css') }}">
    <!-- style css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('rock/css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('rock/css/jquery-ui.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('rock/css/meanmenu.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('rock/css/nice-select.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('rock/css/normalize.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('rock/css/slick.css') }}">
    <!-- Responsive-->
    <link rel="stylesheet" type="text/css" href="{{ asset('rock/css/responsive.css') }}">
    <link rel="stylesheet" type="images/gif" href="{{ asset('rock/images/1.jpg') }}">
    <link rel="stylesheet" type="images/jpg" href="{{ asset('rock/images/2.jpg') }}">
    <link rel="stylesheet" type="images/jpg" href="{{ asset('rock/images/3.jpg') }}">
    <link rel="stylesheet" type="images/jpg" href="{{ asset('rock/images/5.jpg') }}">
    <link rel="stylesheet" type="images/jpg" href="{{ asset('rock/images/album1.jpg') }}">
    <link rel="stylesheet" type="images/jpg" href="{{ asset('rock/images/album2.jpg') }}">
    <link rel="stylesheet" type="images/gif" href="{{ asset('rock/images/loading.gif') }}">
    <link rel="stylesheet" type="images/jpg" href="{{ asset('rock/images/logo.jpg') }}">
    <link rel="stylesheet" type="images/jpg" href="{{ asset('rock/images/music1.jpg') }}">
    <link rel="stylesheet" type="images/jpg" href="{{ asset('rock/images/music2.jpg') }}">
    <link rel="stylesheet" type="images/jpg" href="{{ asset('rock/images/music3.jpg') }}">
    <link rel="stylesheet" type="images/jpg" href="{{ asset('rock/images/music4.jpg') }}">
    <link rel="stylesheet" type="images/jpg" href="{{ asset('rock/images/musicbg.jpg') }}">
    <link rel="stylesheet" type="images/png" href="{{ asset('rock/images/search_icon.png') }}">
    <link rel="stylesheet" type="images/png" href="{{ asset('rock/images/search.png') }}">

    <!-- icon -->
    <link rel="icon" href="{{ asset('rock/icon/1.png') }}" type="image/png" />
    <link rel="icon" href="{{ asset('rock/icon/2.png') }}" type="image/png" />
    <link rel="icon" href="{{ asset('rock/icon/3.png') }}" type="image/png" />
    <link rel="icon" href="{{ asset('rock/icon/fb.png') }}" type="image/png" />
    <link rel="icon" href="{{ asset('rock/icon/icon1.png') }}" type="image/png" />
    <link rel="icon" href="{{ asset('rock/icon/icon2.png') }}" type="image/png" />
    <link rel="icon" href="{{ asset('rock/icon/icon3.png') }}" type="image/png" />
    <link rel="icon" href="{{ asset('rock/icon/instagram.png') }}" type="image/png" />
    <link rel="icon" href="{{ asset('rock/icon/lin(2).png') }}" type="image/png" />
    <link rel="icon" href="{{ asset('rock/icon/tw.png') }}" type="image/png" />

    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="{{ asset('rock/css/jquery.mCustomScrollbar.min.css') }}">
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet"
        href="{{ asset('https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css') }}">
    <link rel="stylesheet"
        href="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css') }}"
        media="screen">
    <!-- [if lt IE 9]
      <script src="{{ asset('https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js') }}"></script>
      <script src="{{ asset('https://oss.maxcdn.com/respond/1.4.2/respond.min.js') }}"></script><![endif]-->
</head>
<!--<body>-->

<body class="main-layout">
    <!-- loader  -->
    <div class="loader_bg">
        <div class="loader"><img src="{{ asset('rock/images/loading.gif') }}" alt="#" /></div>
    </div>
    <!-- end loader -->
    <!-- header -->
    <header>
        <!-- header inner -->
        <div class="header">
            <div class="container">
                <div class="row">
                    <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 col logo_section">
                        <div class="full">
                            <div class="center-desk">
                                <div class="logo">
                                    <a href="#"><img src="{{ asset('rock/images/logo.jpg') }}" alt="logo" /></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-8 col-md-10 col-sm-10">
                        <div class="menu-area">
                            <div class="limit-box">
                                <nav class="main-menu">
                                    <ul class="menu-area-main">
                                        <li class="active"> <a href="#">Home</a> </li>
                                        <li class="active"> <a href="{{ url('/musics/about') }}">about</a> </li>
                                        <li class="active"> <a href="{{ url('/informations/create') }}">Contact</a>
                                        </li>
                                        <li class="active"> <a href="{{ route('login') }}">Login</a> </li>
                                        <li class="active"> <a href="{{ route('register') }}">Register</a> </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end header inner -->
    </header>
    <!-- end header -->
    <section class="banner_section">
        <div class="banner-main">
            <img src="{{ asset('rock/images/banner2.jpg') }}" />
            <div class="container">
                <div class="text-bg relative">
                    <h1>Rogelio<br><span class="Perfect">TU PAGINA MPCA</span><br>Bienvenido a tu sitio favorito</h1>
                    <p>La accion de un programador en la nueva era de tu sitio web favorito, implementando tus gustos
                        <br> Tu sitio favorito, tu mejor elección hoy más que nunca en el mundo</p>
                </div>
            </div>
        </div>
    </section>
    <!--Codigo para modulo de canciones-->
    <div id="" class="Lastestnews">
        <div class="container">
            <center>
                <h2 class="touch_text"><b>LISTA DE CANCIONES</b></h2>
            </center>
            <div class="">
                @forelse ($musics as $music)
                <div class="mt-3">
                    <img style="width: 100%; height: 450px; object-fit: cover;" src="/images/musics/{{ $music->image }}"
                        alt="{{ $music->songname }} {{ $music->artist }}">

                    <div class="titlepage">
                        <h3 class="touch_text"><b>{{ $music->songname }} {{ $music->artist  }}</b></h3>
                        <h2>
                            <p class="lorem_text text-dark">{{ $music->comment }}
                            </p>
                        </h2>
                    </div>
                </div>
                @empty
                <center>No hay registros en este momento</center>
            </div>
            @endforelse

            <!-- Vista -->
            <div id="screenshot" class="Lastestnews">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="titlepage">
                                <h2>La nueva era digital</h2>
                                <span>La accion de un programador en la nueva era de tu sitio web favorito,
                                    implementando tus gustos
                                    <br> Tu sitio favorito, tu mejor elección hoy más que nunca en el mundo</span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-11">
                            <div class="news-box">
                                <figure><img src="{{ asset('rock/images/1.jpg') }}" alt="img" /></figure>
                                <h3>Musica</h3>
                                <span>Pagina MPCA</span><span>Descripción</span>
                                <p>It is a long established fact that a reader will be distracted by the readable
                                    content of a page when looking at its layout. The point of using.</p>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-11">
                            <div class="news-box">
                                <figure><img src="{{ asset('rock/images/trabajo.jpg') }}" alt="img" /></figure>
                                <h3>Profesión</h3>
                                <span>Pagina MPCA</span><span>Descripción</span>
                                <p>It is a long established fact that a reader will be distracted by the readable
                                    content of a page when looking at its layout. The point of using.</p>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-11">
                            <div class="news-box">
                                <figure><img src="{{ asset('rock/images/contactos.jpg') }}" alt="img" /></figure>
                                <h3>Contacto</h3>
                                <span>Pagina MPCA</span><span>Descripción</span>
                                <p>It is a long established fact that a reader will be distracted by the readable
                                    content of a page when looking at its layout. The point of using.</p>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-11">
                            <div class="news-box">
                                <figure><img src="{{ asset('rock/images/animales.jpeg') }}" alt="img" /></figure>
                                <h3>Animal</h3>
                                <span>Pagina MPCA</span><span>Descripción</span>
                                <p>It is a long established fact that a reader will be distracted by the readable
                                    content of a page when looking at its layout. The point of using.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Contacto -->
            <div class="Newsletter">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h2>Información</h2>
                            <div class="row">
                                <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9 padding-right">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end Newsletter -->

            <!--  footer -->
            <footr id="footer_with_contact">
                <div class="footer">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-3 col-md-6 col-sm-12 width">
                                <div class="address">
                                    <h3>Contactanos</h3>
                                    <ul class="locarion_icon">
                                        <li><img src="{{ asset('rock/icon/1.png') }}" alt="icon" />104 Puebla, México
                                        </li>
                                        <li><img src="{{ asset('rock/icon/2.png') }}" alt="icon" />Phone : ( +52
                                            2315931602 )</li>
                                        <li><img src="{{ asset('rock/icon/3.png') }}" alt="icon" />Email :
                                            MPCA@gmail.com</li>
                                    </ul>
                                    <ul class="contant_icon">
                                        <li><img src="{{ asset('rock/icon/fb.png') }}" alt="icon" /></li>
                                        <li><img src="{{ asset('rock/icon/tw.png')}}" alt="icon" /></li>
                                        <li><img src="{{ asset('rock/icon/lin(2).png')}}" alt="icon" /></li>
                                        <li><img src="{{ asset('rock/icon/instagram.png')}}" alt="icon" /></li>
                                    </ul>
                                </div>
                            </div>

                            <!--Formulario para envio de datos invitado de la pagina-->

                            <div class="col-lg-6 col-md-6 col-sm-12 width">
                                <div class="address">
                                    <h3>Contacto</h3>
                                    <form>

                                        <form action="{{ route('informations.store') }}" method="post">

                                            @csrf

                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <input class="contactus" placeholder="Nombre" type="text"
                                                        name="nameuser" required>
                                                </div>
                                                <div class="col-sm-12">
                                                    <input class="contactus" placeholder="Telefono" type="text"
                                                        name="phone" min="0" max="10000000000" required>
                                                </div>
                                                <div class="col-sm-12">
                                                    <input class="contactus" placeholder="Email" type="email"
                                                        name="email" required>
                                                </div>
                                                <div class="col-sm-12">
                                                    <textarea class="textarea" placeholder="Mensaje" type="text"
                                                        name="message" required></textarea>
                                                </div>
                                                <div class="col-sm-12">
                                                    <input class="btn btn-info" type="reset" value="Restablecer"
                                                        class="btn btn-primary">
                                                    <input class="btn btn-primary" type="submit" value="Enviar">
                                                </div>
                                            </div>
                                        </form>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 width">
                                <div class="address">
                                    <h3>Nueva era digital</h3>
                                    <div class="row">
                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 ">
                                            <figure><img src="{{ asset('rock/images/1.jpg') }}" /></figure>
                                        </div>
                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 ">
                                            <figure><img src="{{ asset('rock/images/trabajo.jpg') }}" /></figure>
                                        </div>
                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 ">
                                            <figure><img src="{{ asset('rock/images/animales.jpeg') }}" /></figure>
                                        </div>
                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 ">
                                            <figure><img src="{{ asset('rock/images/contactos.jpg') }}" /></figure>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="copyright">
                        <p>© 2019 All Rights Reserved. <a href="https://html.design/">Free html Templates</a></p>
                    </div>
                </div>
            </footr>
            <!-- end footer -->
            <!-- Javascript files-->
            <script src="{{ asset('rock/js/jquery.min.js') }}"></script>
            <script src="{{ asset('rock/js/popper.min.js') }}"></script>
            <script src="{{ asset('rock/js/bootstrap.bundle.min.js') }}js/"></script>
            <script src="{{ asset('rock/js/jquery-3.0.0.min.js') }}"></script>
            <script src="{{ asset('rock/js/plugin.js') }}"></script>
            <!-- sidebar -->
            <script src="{{ asset('rock/js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
            <script src="{{ asset('rock/js/custom.js') }}"></script>
            <script src="{{ asset('https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js') }}">
            </script>
            <script>
                $(document).ready(function() {
                    $(".fancybox").fancybox({
                        openEffect: "none",
                        closeEffect: "none"
                    });
                    $(".zoom").hover(function() {
                        $(this).addClass('transition');
                    }, function() {
                        $(this).removeClass('transition');
                    });
                });
            </script>
</body>
</html>