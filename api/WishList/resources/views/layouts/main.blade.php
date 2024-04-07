<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>WishList - Tu app de regalos</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Custom Google font-->
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@100;200;300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css" rel="stylesheet" />
        <style>
    .carousel-control-prev-icon,
    .carousel-control-next-icon {
        filter: invert(100%);
    }
</style>

        <!-- Core theme CSS (includes Bootstrap)-->
        @vite(['resources/css/landing_styles.css'])
    </head>
    <body class="d-flex flex-column h-100">
        <main class="flex-shrink-0">
            <!-- Navigation-->
            <nav class="navbar navbar-expand-lg navbar-light bg-white py-3">
    <div class="container px-5">
        <a class="navbar-brand" href="index.html"><span class="fw-bolder text-primary">WishList</span></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
            <ul class="navbar-nav mb-2 mb-lg-0 small fw-bolder">
                <li class="nav-item"><a class="nav-link" href="index.html">Inicio</a></li>
                <li class="nav-item"><a class="nav-link" href="resume.html">Regalos</a></li>
                <li class="nav-item"><a class="nav-link" href="projects.html">Opiniones</a></li>
                <li class="nav-item"><a class="nav-link" href="contact.html">Descargar</a></li>
            </ul>
        </div>
        <div>
            <ul class="navbar-nav mb-2 mb-lg-0 small fw-bolder">
                <li class="nav-item"><a class="nav-link" href="{{route('login')}}">Iniciar Sesión</a></li>
                <li class="nav-item"><a class="nav-link" href="{{route('register')}}">Registrarse</a></li>
            </ul>
        </div>
    </div>
</nav>


            <!-- Header-->
            <header class="py-5">
                <div class="container px-5 pb-5">
                    <div class="row gx-5 align-items-center">
                        <div class="col-xxl-5">
                            <!-- Header text content-->
                            <div class="text-center text-xxl-start">
                                <div class="badge bg-gradient-primary-to-secondary text-white mb-4"><div class="text-uppercase">Regalos &middot; Sorpresa &middot; Facilidad</div></div>
                                <h1 class="display-3 fw-bolder mb-5"><span class="text-gradient d-inline">Tu app para publicar tus deseos</span></h1>
								<p class="text-muted">¡Haz que tus regalos sean inolvidables conectando con los deseos de tus seres queridos! Con WishList, tú creas tu perfil personalizado y publicas los regalos que realmente quieres recibir. Ya no más sorpresas decepcionantes, ¡solo los regalos que realmente te hacen feliz!</p>
                                <div class="d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-xxl-start mb-3">
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-7">
                            <!-- Header profile picture-->
                            <div class="d-flex justify-content-center mt-5 mt-xxl-0">
                                <div class="profile bg-gradient-primary-to-secondary">
                                    <img class="profile-img" src="{{ asset('images/regalo.png') }}" alt="..." />
                                    <div class="dots-1">
                                        <!-- SVG Dots-->
                                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 191.6 1215.4" style="enable-background: new 0 0 191.6 1215.4" xml:space="preserve">
                                            <g transform="translate(0.000000,1280.000000) scale(0.100000,-0.100000)">
                                                <path d="M227.7,12788.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C383.7,12801.6,289.7,12808.6,227.7,12788.6z"></path>
                                                <path d="M1507.7,12788.6c-151-50-253-216-222-362c25-119,136-230,254-255c194-41,395,142,375,339c-11,105-90,213-190,262        C1663.7,12801.6,1569.7,12808.6,1507.7,12788.6z"></path>
                                                <path d="M227.7,11508.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C383.7,11521.6,289.7,11528.6,227.7,11508.6z"></path>
                                                <path d="M1507.7,11508.6c-151-50-253-216-222-362c25-119,136-230,254-255c194-41,395,142,375,339c-11,105-90,213-190,262        C1663.7,11521.6,1569.7,11528.6,1507.7,11508.6z"></path>
                                                <path d="M227.7,10228.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C383.7,10241.6,289.7,10248.6,227.7,10228.6z"></path>
                                                <path d="M1507.7,10228.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C1663.7,10241.6,1569.7,10248.6,1507.7,10228.6z"></path>
                                                <path d="M227.7,8948.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C383.7,8961.6,289.7,8968.6,227.7,8948.6z"></path>
                                                <path d="M1507.7,8948.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C1663.7,8961.6,1569.7,8968.6,1507.7,8948.6z"></path>
                                                <path d="M227.7,7668.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C383.7,7681.6,289.7,7688.6,227.7,7668.6z"></path>
                                                <path d="M1507.7,7668.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C1663.7,7681.6,1569.7,7688.6,1507.7,7668.6z"></path>
                                                <path d="M227.7,6388.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C383.7,6401.6,289.7,6408.6,227.7,6388.6z"></path>
                                                <path d="M1507.7,6388.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C1663.7,6401.6,1569.7,6408.6,1507.7,6388.6z"></path>
                                                <path d="M227.7,5108.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C383.7,5121.6,289.7,5128.6,227.7,5108.6z"></path>
                                                <path d="M1507.7,5108.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C1663.7,5121.6,1569.7,5128.6,1507.7,5108.6z"></path>
                                                <path d="M227.7,3828.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C383.7,3841.6,289.7,3848.6,227.7,3828.6z"></path>
                                                <path d="M1507.7,3828.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C1663.7,3841.6,1569.7,3848.6,1507.7,3828.6z"></path>
                                                <path d="M227.7,2548.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C383.7,2561.6,289.7,2568.6,227.7,2548.6z"></path>
                                                <path d="M1507.7,2548.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C1663.7,2561.6,1569.7,2568.6,1507.7,2548.6z"></path>
                                                <path d="M227.7,1268.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C383.7,1281.6,289.7,1288.6,227.7,1268.6z"></path>
                                                <path d="M1507.7,1268.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C1663.7,1281.6,1569.7,1288.6,1507.7,1268.6z"></path>
                                            </g>
                                        </svg>
                                        <!-- END of SVG dots-->
                                    </div>
                                    <div class="dots-2">
                                        <!-- SVG Dots-->
                                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 191.6 1215.4" style="enable-background: new 0 0 191.6 1215.4" xml:space="preserve">
                                            <g transform="translate(0.000000,1280.000000) scale(0.100000,-0.100000)">
                                                <path d="M227.7,12788.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C383.7,12801.6,289.7,12808.6,227.7,12788.6z"></path>
                                                <path d="M1507.7,12788.6c-151-50-253-216-222-362c25-119,136-230,254-255c194-41,395,142,375,339c-11,105-90,213-190,262        C1663.7,12801.6,1569.7,12808.6,1507.7,12788.6z"></path>
                                                <path d="M227.7,11508.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C383.7,11521.6,289.7,11528.6,227.7,11508.6z"></path>
                                                <path d="M1507.7,11508.6c-151-50-253-216-222-362c25-119,136-230,254-255c194-41,395,142,375,339c-11,105-90,213-190,262        C1663.7,11521.6,1569.7,11528.6,1507.7,11508.6z"></path>
                                                <path d="M227.7,10228.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C383.7,10241.6,289.7,10248.6,227.7,10228.6z"></path>
                                                <path d="M1507.7,10228.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C1663.7,10241.6,1569.7,10248.6,1507.7,10228.6z"></path>
                                                <path d="M227.7,8948.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C383.7,8961.6,289.7,8968.6,227.7,8948.6z"></path>
                                                <path d="M1507.7,8948.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C1663.7,8961.6,1569.7,8968.6,1507.7,8948.6z"></path>
                                                <path d="M227.7,7668.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C383.7,7681.6,289.7,7688.6,227.7,7668.6z"></path>
                                                <path d="M1507.7,7668.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C1663.7,7681.6,1569.7,7688.6,1507.7,7668.6z"></path>
                                                <path d="M227.7,6388.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C383.7,6401.6,289.7,6408.6,227.7,6388.6z"></path>
                                                <path d="M1507.7,6388.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C1663.7,6401.6,1569.7,6408.6,1507.7,6388.6z"></path>
                                                <path d="M227.7,5108.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C383.7,5121.6,289.7,5128.6,227.7,5108.6z"></path>
                                                <path d="M1507.7,5108.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C1663.7,5121.6,1569.7,5128.6,1507.7,5108.6z"></path>
                                                <path d="M227.7,3828.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C383.7,3841.6,289.7,3848.6,227.7,3828.6z"></path>
                                                <path d="M1507.7,3828.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C1663.7,3841.6,1569.7,3848.6,1507.7,3828.6z"></path>
                                                <path d="M227.7,2548.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C383.7,2561.6,289.7,2568.6,227.7,2548.6z"></path>
                                                <path d="M1507.7,2548.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C1663.7,2561.6,1569.7,2568.6,1507.7,2548.6z"></path>
                                                <path d="M227.7,1268.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C383.7,1281.6,289.7,1288.6,227.7,1268.6z"></path>
                                                <path d="M1507.7,1268.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C1663.7,1281.6,1569.7,1288.6,1507.7,1268.6z"></path>
                                            </g>
                                        </svg>
                                        <!-- END of SVG dots-->
                                    </div>
                                    <div class="dots-3">
                                        <!-- SVG Dots-->
                                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 191.6 1215.4" style="enable-background: new 0 0 191.6 1215.4" xml:space="preserve">
                                            <g transform="translate(0.000000,1280.000000) scale(0.100000,-0.100000)">
                                                <path d="M227.7,12788.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C383.7,12801.6,289.7,12808.6,227.7,12788.6z"></path>
                                                <path d="M1507.7,12788.6c-151-50-253-216-222-362c25-119,136-230,254-255c194-41,395,142,375,339c-11,105-90,213-190,262        C1663.7,12801.6,1569.7,12808.6,1507.7,12788.6z"></path>
                                                <path d="M227.7,11508.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C383.7,11521.6,289.7,11528.6,227.7,11508.6z"></path>
                                                <path d="M1507.7,11508.6c-151-50-253-216-222-362c25-119,136-230,254-255c194-41,395,142,375,339c-11,105-90,213-190,262        C1663.7,11521.6,1569.7,11528.6,1507.7,11508.6z"></path>
                                                <path d="M227.7,10228.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C383.7,10241.6,289.7,10248.6,227.7,10228.6z"></path>
                                                <path d="M1507.7,10228.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C1663.7,10241.6,1569.7,10248.6,1507.7,10228.6z"></path>
                                                <path d="M227.7,8948.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C383.7,8961.6,289.7,8968.6,227.7,8948.6z"></path>
                                                <path d="M1507.7,8948.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C1663.7,8961.6,1569.7,8968.6,1507.7,8948.6z"></path>
                                                <path d="M227.7,7668.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C383.7,7681.6,289.7,7688.6,227.7,7668.6z"></path>
                                                <path d="M1507.7,7668.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C1663.7,7681.6,1569.7,7688.6,1507.7,7668.6z"></path>
                                                <path d="M227.7,6388.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C383.7,6401.6,289.7,6408.6,227.7,6388.6z"></path>
                                                <path d="M1507.7,6388.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C1663.7,6401.6,1569.7,6408.6,1507.7,6388.6z"></path>
                                                <path d="M227.7,5108.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C383.7,5121.6,289.7,5128.6,227.7,5108.6z"></path>
                                                <path d="M1507.7,5108.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C1663.7,5121.6,1569.7,5128.6,1507.7,5108.6z"></path>
                                                <path d="M227.7,3828.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C383.7,3841.6,289.7,3848.6,227.7,3828.6z"></path>
                                                <path d="M1507.7,3828.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C1663.7,3841.6,1569.7,3848.6,1507.7,3828.6z"></path>
                                                <path d="M227.7,2548.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C383.7,2561.6,289.7,2568.6,227.7,2548.6z"></path>
                                                <path d="M1507.7,2548.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C1663.7,2561.6,1569.7,2568.6,1507.7,2548.6z"></path>
                                                <path d="M227.7,1268.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C383.7,1281.6,289.7,1288.6,227.7,1268.6z"></path>
                                                <path d="M1507.7,1268.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C1663.7,1281.6,1569.7,1288.6,1507.7,1268.6z"></path>
                                            </g>
                                        </svg>
                                        <!-- END of SVG dots-->
                                    </div>
                                    <div class="dots-4">
                                        <!-- SVG Dots-->
                                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 191.6 1215.4" style="enable-background: new 0 0 191.6 1215.4" xml:space="preserve">
                                            <g transform="translate(0.000000,1280.000000) scale(0.100000,-0.100000)">
                                                <path d="M227.7,12788.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C383.7,12801.6,289.7,12808.6,227.7,12788.6z"></path>
                                                <path d="M1507.7,12788.6c-151-50-253-216-222-362c25-119,136-230,254-255c194-41,395,142,375,339c-11,105-90,213-190,262        C1663.7,12801.6,1569.7,12808.6,1507.7,12788.6z"></path>
                                                <path d="M227.7,11508.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C383.7,11521.6,289.7,11528.6,227.7,11508.6z"></path>
                                                <path d="M1507.7,11508.6c-151-50-253-216-222-362c25-119,136-230,254-255c194-41,395,142,375,339c-11,105-90,213-190,262        C1663.7,11521.6,1569.7,11528.6,1507.7,11508.6z"></path>
                                                <path d="M227.7,10228.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C383.7,10241.6,289.7,10248.6,227.7,10228.6z"></path>
                                                <path d="M1507.7,10228.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C1663.7,10241.6,1569.7,10248.6,1507.7,10228.6z"></path>
                                                <path d="M227.7,8948.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C383.7,8961.6,289.7,8968.6,227.7,8948.6z"></path>
                                                <path d="M1507.7,8948.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C1663.7,8961.6,1569.7,8968.6,1507.7,8948.6z"></path>
                                                <path d="M227.7,7668.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C383.7,7681.6,289.7,7688.6,227.7,7668.6z"></path>
                                                <path d="M1507.7,7668.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C1663.7,7681.6,1569.7,7688.6,1507.7,7668.6z"></path>
                                                <path d="M227.7,6388.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C383.7,6401.6,289.7,6408.6,227.7,6388.6z"></path>
                                                <path d="M1507.7,6388.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C1663.7,6401.6,1569.7,6408.6,1507.7,6388.6z"></path>
                                                <path d="M227.7,5108.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C383.7,5121.6,289.7,5128.6,227.7,5108.6z"></path>
                                                <path d="M1507.7,5108.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C1663.7,5121.6,1569.7,5128.6,1507.7,5108.6z"></path>
                                                <path d="M227.7,3828.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C383.7,3841.6,289.7,3848.6,227.7,3828.6z"></path>
                                                <path d="M1507.7,3828.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C1663.7,3841.6,1569.7,3848.6,1507.7,3828.6z"></path>
                                                <path d="M227.7,2548.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C383.7,2561.6,289.7,2568.6,227.7,2548.6z"></path>
                                                <path d="M1507.7,2548.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C1663.7,2561.6,1569.7,2568.6,1507.7,2548.6z"></path>
                                                <path d="M227.7,1268.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C383.7,1281.6,289.7,1288.6,227.7,1268.6z"></path>
                                                <path d="M1507.7,1268.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C1663.7,1281.6,1569.7,1288.6,1507.7,1268.6z"></path>
                                            </g>
                                        </svg>
                                        <!-- END of SVG dots-->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
<!-- About Section-->
<section class="bg-light py-5">
    <div class="container px-5">
        <div class="text-center my-5">
            <h2 class="display-5 fw-bolder"><span class="text-gradient d-inline">Los deseos de otros usuarios</span></h2>
        </div>
        <div class="row gx-5 justify-content-center">
            <div class="col-xxl-8">
                <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="row">
                                <div class="col">
                                    <div class="card">
                                        <!-- Aquí puedes incluir la URL de la imagen del regalo como fondo de la tarjeta -->
                                        <div class="card-img-top" style="background-image: url('https://m.media-amazon.com/images/I/71ic9iy3vVL._AC_SX679_.jpg'); height: 200px; background-size: cover;"></div>
                                        <div class="card-body">
                                            <!-- Nombre del regalo -->
                                            <h5 class="card-title">PlayStation 5</h5>
                                            <!-- Descripción del regalo -->
                                            <p class="card-text">Consola de Videojuegos</p>
                                            <!-- Precio del regalo -->
                                            <p class="card-text">Precio: $9,199.00 MXN</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card">
                                        <!-- Aquí puedes incluir la URL de la imagen del regalo como fondo de la tarjeta -->
                                        <div class="card-img-top" style="background-image: url('https://m.media-amazon.com/images/I/71vhvdg7pXL._AC_SX679_.jpg'); height: 200px; background-size: cover;"></div>
                                        <div class="card-body">
                                            <!-- Nombre del regalo -->
                                            <h5 class="card-title">Peluche Kanye West</h5>
                                            <!-- Descripción del regalo -->
                                            <p class="card-text">Oso del album Graduation</p>
                                            <!-- Precio del regalo -->
                                            <p class="card-text">Precio: $265.00 MXN</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card">
                                        <!-- Aquí puedes incluir la URL de la imagen del regalo como fondo de la tarjeta -->
                                        <div class="card-img-top" style="background-image: url('https://m.media-amazon.com/images/I/71RFRgMnrLL._AC_SX679_.jpg'); height: 200px; background-size: cover;"></div>
                                        <div class="card-body">
                                            <!-- Nombre del regalo -->
                                            <h5 class="card-title">Rtx 4090</h5>
                                            <!-- Descripción del regalo -->
                                            <p class="card-text">Tarjeta grafica Nvidia</p>
                                            <!-- Precio del regalo -->
                                            <p class="card-text">Precio: $265.00 MXN</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row">
                                <div class="col">
                                    <div class="card">
                                        <!-- Aquí puedes incluir la URL de la imagen del regalo como fondo de la tarjeta -->
                                        <div class="card-img-top" style="background-image: url('https://m.media-amazon.com/images/I/717uPwyXSPL._AC_SX679_.jpg'); height: 200px; background-size: cover;"></div>
                                        <div class="card-body">
                                            <!-- Nombre del regalo -->
                                            <h5 class="card-title">Tocadiscos</h5>
                                            <!-- Descripción del regalo -->
                                            <p class="card-text">Reproductor Vinilo</p>
                                            <!-- Precio del regalo -->
                                            <p class="card-text">Precio: $1,183.08 MXN</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card">
                                        <!-- Aquí puedes incluir la URL de la imagen del regalo como fondo de la tarjeta -->
                                        <div class="card-img-top" style="background-image: url('https://m.media-amazon.com/images/I/61S8i6Z8imL._AC_SX679_.jpg'); height: 200px; background-size: cover;"></div>
                                        <div class="card-body">
                                            <!-- Nombre del regalo -->
                                            <h5 class="card-title">Lampara de escritorio</h5>
                                            <!-- Descripción del regalo -->
                                            <p class="card-text">Lampara para leer</p>
                                            <!-- Precio del regalo -->
                                            <p class="card-text">Precio: $254.15 MXN</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card">
                                        <!-- Aquí puedes incluir la URL de la imagen del regalo como fondo de la tarjeta -->
                                        <div class="card-img-top" style="background-image: url('https://m.media-amazon.com/images/I/71qp5fCNp7L._AC_SX679_.jpg'); height: 200px; background-size: cover;"></div>
                                        <div class="card-body">
                                            <!-- Nombre del regalo -->
                                            <h5 class="card-title">Apple SmartWatch</h5>
                                            <!-- Descripción del regalo -->
                                            <p class="card-text">Reloj Inteligente</p>
                                            <!-- Precio del regalo -->
                                            <p class="card-text">Precio: $2,545.15 MXN</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Agrega más items de carousel-item para más tarjetas -->
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev" style="left: -100px;">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Anterior</span>
</button>
<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next" style="right: -100px;">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Siguiente</span>
</button>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="bg-light py-5">
<div class="text-center my-5">
    <h2><span class="text-gradient d-inline">Calificaciones y Opiniones</span></h2>
</div>
    <div class="container px-4">
        <div class="row gx-4 justify-content-center">
            <div class="col-md-4 mb-4">
                <div class="card shadow border-0">
                    <div class="card-body p-3">
                        <h5 class="card-title fw-bold">Juan Pérez</h5>
                        <p class="card-text">Me encanta esta aplicación, es una forma genial de compartir regalos y sorprender a tus seres queridos. ¡Totalmente recomendada!</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="text-muted">Calificación:</div>
                            <div>
                                <span class="text-warning">&#9733;</span>
                                <span class="text-warning">&#9733;</span>
                                <span class="text-warning">&#9733;</span>
                                <span class="text-warning">&#9733;</span>
                                <span class="text-warning">&#9733;</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Tarjeta 2 -->
            <div class="col-md-4 mb-4">
                <div class="card shadow border-0">
                    <div class="card-body p-3">
                        <h5 class="card-title fw-bold">María López</h5>
                        <p class="card-text">Excelente app para regalar y recibir sorpresas. Me encanta la variedad de opciones y lo fácil que es de usar.</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="text-muted">Calificación:</div>
                            <div>
                                <span class="text-warning">&#9733;</span>
                                <span class="text-warning">&#9733;</span>
                                <span class="text-warning">&#9733;</span>
                                <span class="text-warning">&#9733;</span>
                                <span class="text-warning">&#9733;</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Tarjeta 3 -->
            <div class="col-md-4 mb-4">
                <div class="card shadow border-0">
                    <div class="card-body p-3">
                        <h5 class="card-title fw-bold">Carlos Martínez</h5>
                        <p class="card-text">La aplicación es increíble, me ha permitido enviar regalos de una manera muy rápida y sencilla. ¡La recomiendo al 100%!</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="text-muted">Calificación:</div>
                            <div>
                                <span class="text-warning">&#9733;</span>
                                <span class="text-warning">&#9733;</span>
                                <span class="text-warning">&#9733;</span>
                                <span class="text-warning">&#9733;</span>
                                <span class="text-warning">&#9733;</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Tarjeta 4 -->
            <div class="col-md-4 mb-4">
                <div class="card shadow border-0">
                    <div class="card-body p-3">
                        <h5 class="card-title fw-bold">Ana Rodríguez</h5>
                        <p class="card-text">Fantástica aplicación, me ha ayudado a organizar los regalos de una manera eficiente. La interfaz es muy amigable.</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="text-muted">Calificación:</div>
                            <div>
                                <span class="text-warning">&#9733;</span>
                                <span class="text-warning">&#9733;</span>
                                <span class="text-warning">&#9733;</span>
                                <span class="text-warning">&#9733;</span>
                                <span class="text-warning">&#9733;</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Tarjeta 5 -->
            <div class="col-md-4 mb-4">
                <div class="card shadow border-0">
                    <div class="card-body p-3">
                        <h5 class="card-title fw-bold">Luisa Gómez</h5>
                        <p class="card-text">¡Me encanta esta aplicación! He recibido regalos increíbles de amigos de todo el mundo. Es genial para conectar con personas.</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="text-muted">Calificación:</div>
                            <div>
                                <span class="text-warning">&#9733;</span>
                                <span class="text-warning">&#9733;</span>
                                <span class="text-warning">&#9733;</span>
                                <span class="text-warning">&#9733;</span>
                                <span class="text-warning">&#9733;</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Tarjeta 6 -->
            <div class="col-md-4 mb-4">
                <div class="card shadow border-0">
                    <div class="card-body p-3">
                        <h5 class="card-title fw-bold">Pedro García</h5>
                        <p class="card-text">Una aplicación maravillosa para hacer y recibir regalos. Es muy práctica y fácil de usar, ¡me ha ayudado mucho en ocasiones especiales!</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="text-muted">Calificación:</div>
                            <div>
                                <span class="text-warning">&#9733;</span>
                                <span class="text-warning">&#9733;</span>
                                <span class="text-warning">&#9733;</span>
                                <span class="text-warning">&#9733;</span>
                                <span class="text-warning">&#9733;</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="bg-light py-5">
    <div class="container px-5">
        <div class="row gx-5 justify-content-center">
            <div class="col-xxl-8">
                <div class="text-center my-5">
                    <h2><span class="text-gradient d-inline">¡Descubre cómo funciona!</span></h2>
                    <p class="lead fw-light mb-4">¡Es muy sencillo!</p>
                </div>
            </div>
        </div>
        <div class="row gx-5 justify-content-center">
            <div class="col-md-4">
                <div class="text-center">
                    <div class="mb-4">
                        <i class="bi bi-person-circle fs-1 text-primary"></i>
                    </div>
                    <h3 class="h4 mb-2">Crea tu perfil</h3>
                    <p class="text-muted mb-0">Regístrate y crea un perfil personalizado.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="text-center">
                    <div class="mb-4">
                        <i class="bi bi-megaphone fs-1 text-primary"></i>
                    </div>
                    <h3 class="h4 mb-2">Publica tus deseos</h3>
                    <p class="text-muted mb-0">Comparte los regalos que te gustaría recibir con tus amigos y seguidores.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="text-center">
                    <div class="mb-4">
                        <i class="bi bi-hand-thumbs-up fs-1 text-primary"></i>
                    </div>
                    <h3 class="h4 mb-2">¡Recibe regalos!</h3>
                    <p class="text-muted mb-0">Tus amigos pueden elegir regalarte lo que has deseado. ¡Sorpresa!</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="bg-light py-5">
    <div class="container px-5">
        <div class="row gx-5 justify-content-center">
            <div class="col-xxl-8">
                <div id="carouselBenefits" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="text-center my-5">
                                <h2 class="display-5 fw-bolder"><span class="text-gradient d-inline">Fácil de Usar</span></h2>
                                <p class="lead fw-light mb-4">Interfaz intuitiva para publicar y encontrar regalos</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="text-center my-5">
                                <h2 class="display-5 fw-bolder"><span class="text-gradient d-inline">Comunidad Activa</span></h2>
                                <p class="lead fw-light mb-4">Conéctate con personas dispuestas a hacer regalos</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="text-center my-5">
                                <h2 class="display-5 fw-bolder"><span class="text-gradient d-inline">Personalización</span></h2>
                                <p class="lead fw-light mb-4">Crea un perfil único y especifica tus deseos de regalos</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="text-center my-5">
                                <h2 class="display-5 fw-bolder"><span class="text-gradient d-inline">Interacción</span></h2>
                                <p class="lead fw-light mb-4">Califica y comenta los regalos recibidos para mejorar la experiencia</p>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselBenefits" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselBenefits" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="container-fluid">
    <div class="row">
        <div class="col-lg-6">
            <section class="bg-light py-5">
                <div class="container px-5">
                    <div class="row gx-5 justify-content-center">
                        <div class="col-xxl-8">
                            <div class="text-center my-5">
                                <h2 class="display-5 fw-bolder"><span class="text-gradient d-inline">Aqui va</span></h2>
                                <p class="lead fw-light mb-4">a ir</p>
                                <p class="text-muted">Sobre la empresa</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <div class="col-lg-6">
            <section class="bg-light py-5">
                <div class="container px-5">
                    <div class="row gx-5 justify-content-center">
                        <div class="col-xxl-8">
                            <div class="text-center my-5">
                                <h2 class="display-5 fw-bolder"><span class="text-gradient d-inline">Descarga la App</span></h2>
                                <img src="{{ asset('images/qr-code.png') }}" alt="" width="200" height="200">
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>

        </main>
        <!-- Footer-->
        <footer class="bg-white py-4 mt-auto">
            <div class="container px-5">
                <div class="row align-items-center justify-content-between flex-column flex-sm-row">
                    <div class="col-auto"><div class="small m-0">Copyright &copy; WishList. Todos los derechos reservados.
					Contacto | Términos y Condiciones | Política de Privacidad</div></div>
                </div>
            </div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
