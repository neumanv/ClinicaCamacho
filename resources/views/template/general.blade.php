@extends('template.template')

@section('header')
    <nav class="navbar navbar-expand-lg p-0 bg-caqui2">
        <div class="header container-fluid bg-caqui2">
            <a class="navbar-brand p-0" href="{{ route('index') }}"><img class="bg-caqui2"
                    src="{{ URL::asset('img/logo-clinica.png') }}"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02">
                <span class="navbar-toggler-icon bg-caqui2"></span>
            </button>
            <div class="collapse navbar-collapse bg-caqui2" id="navbarTogglerDemo02">
                <h2>
                    <ul class="navbar-nav rubik me-auto mb-2 mb-lg-0">
                        <li class="nav-item bg-caqui2 underline-btn">
                            <a href="{{ route('index') }}" id="letra-menu" class="nav-link mt-1">Inicio</a>
                        </li>
                        <li class="nav-item bg-caqui2 underline-btn">
                            <a id="letra-menu" class="nav-link mt-1">Clínica</a>
                        </li>
                        <li class="nav-item bg-caqui2 underline-btn">
                            <a id="letra-menu" class="nav-link mt-1">Procedimientos</a>
                        </li>
                        <li class="nav-item bg-caqui2 underline-btn">
                            <a href="{{ route('contacto') }}" id="letra-menu" class="nav-link mt-1">Contacto</a>
                        </li>
                        <div class="col">
                            <ul class="wrapper p-0">
                                <li class="icon facebook">
                                    <span class="tooltip rubik">Facebook</span>
                                    <span><i class="bi bi-facebook"></i></span>
                                </li>
                                <li class="icon twitter">
                                    <span class="tooltip">X</span>
                                    <span><i class="bi bi-twitter-x"></i></span>
                                </li>
                                <li class="icon instagram">
                                    <span class="tooltip">Instagram</span>
                                    <span><i class="bi bi-instagram"></i></span>
                                </li>
                                <li class="icon tiktok">
                                    <span class="tooltip">Tiktok</span>
                                    <span><i class="bi bi-tiktok"></i></span>
                                </li>
                                <li class="icon wasa">
                                    <span class="tooltip">Whatsapp</span>
                                    <span><i class="bi bi-whatsapp"></i></span>
                                </li>
                            </ul>
                        </div>
                    </ul>
                </h2>
            </div>
        </div>
    </nav>
@endsection

@section('footer')
    <div class="footer container-fluid rubik justify-content-center pt-5 pb-5 caqui">
        <div class="row justify-content-around">
            <div class="col-12">
                <div class="row justify-content-center">
                    <div class="col-md-2 col-12 font-italic align-items-center mt-md-3 mt-3">
                        <h5><span><img src="" class="img-fluid mb-1 "></span><b>CLÍNICA CAMACHO</b></h5>
                        <small class="copy-rights cursor-pointer"><i class="bi bi-c-circle"></i>2024 <a
                                class="text-decoration-none text-dark" target="_blank"
                                href="https://github.com/neumanv">neumanv <i class="bi bi-github"></i></a></small><br>
                        <small>Copyright. All Rights Reserved.</small>
                    </div>
                    <div class="col-md-2 col-12 my-sm-0 mt-5">
                        <ul class="list-unstyled">
                            <li class="mt-md-3 mt-4">sdfsdf</li>
                            <li>sdfsdf</li>
                            <li>sdfsdf</li>
                            <li>sdfsdf</li>
                        </ul>
                    </div>
                    <div class="col-md-2 col-12 my-sm-0 mt-5">
                        <ul class="list-unstyled">
                            <li class="mt-md-3 mt-4"></li>
                            <li>dg</li>
                            <li>dfg</li>
                            <li>gd</li>
                        </ul>
                    </div>
                    <div class="col-md-2 col-12 my-sm-0 mt-5">
                        <ul class="list-unstyled">
                            <li class="mt-md-3 mt-4">¿Qúe necesitas?</li>
                            <li>Licencia y seguridad</li>
                            <li>Nuestra empresa</li>
                            <li>Nuestros productos</li>
                            <li>Precios</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
