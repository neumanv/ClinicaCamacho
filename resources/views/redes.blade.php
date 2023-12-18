@extends('template.general')
@section('index')
    <div class="container text-center rubik bg-beige mt-4">
        <h3 class="titulo-page"><i>NUESTRAS REDES SOCIALES</i></h3>
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

    <div class="container p-4 text-center">
        <div class="row row-cols-2">
            <div class="col">Column</div>
            <div class="col">Column</div>
        </div>
    </div>
@endsection
