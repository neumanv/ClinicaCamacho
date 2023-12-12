@extends('template.template')

@section('header')
    <nav class="navbar navbar-expand-lg p-0 bg-caqui2">
        <div class="header container-fluid bg-caqui2">
            <a class="navbar-brand p-0" href="{{ route('index') }}"><img class="bg-caqui2" src="{{ URL::asset('img/logo-clinica.png') }}"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon bg-caqui2"></span>
            </button>
            <div class="collapse navbar-collapse bg-caqui2" id="navbarTogglerDemo02">
                <h1><ul class="navbar-nav rubik text-light me-auto mb-2 mb-lg-0">
                    <li class="nav-item bg-caqui2">
                        <a class="nav-link text-light">Home</a>
                    </li>
                    <li class="nav-item bg-caqui2">
                        <a class="nav-link text-light">Link</a>
                    </li>
                    <li class="nav-item bg-caqui2">
                        <a class="nav-link text-light">Disabled</a>
                    </li>
                </ul></h1>
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
                        <small class="copy-rights cursor-pointer">&#9400;2024 <a class="text-decoration-none text-dark"
                                target="_blank" href="https://github.com/neumanv">neumanv <i
                                    class="bi bi-github"></i></a></small><br>
                        <small>Copyright. All Rights Reserved.</small>
                    </div>
                    <div class="col-md-2 col-12 my-sm-0 mt-5">
                        <ul class="list-unstyled">
                            <li class="mt-md-1">sdfsdf</li>
                            <li class="mt-md-1">sdfsdf</li>
                            <li class="mt-md-1">sdfsdf</li>
                            <li class="mt-md-1">sdfsdf</li>
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
