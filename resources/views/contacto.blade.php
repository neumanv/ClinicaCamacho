@extends('template.general')
@section('index')
    <div class="container p-4 text-center">
        <div class="row">
            <div class="contacto-izq col-md-6 col-12 p-4">
                <div class="container bg-dorado p-2">
                    <h4>CONTACTO</h4>
                    <form action="" method="POST">
                        @method('PUT')@csrf
                    </form>
                </div>
            </div>
            <div class="contacto-der col-md-6 col-12 p-4">
                <div class="container bg-dorado">
                    @foreach ($clinicas as $clinica)
                        <li>{{ $clinica->ciudad }}</li>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
