@extends('layouts.dashboard')
@section('title', 'cardsProfessions')
@section('content')
<div class="row">
    @forelse ($professions as $profession)
    <!--renderizar datos-->
    <div class="card col-xs-6 col-sm-6 col-md-5 col-lg-3 mb-3 mr-2 ml-2">
        <div class="card-header">
            <h2 class="text-primary">{{ $profession->profession }}
                <br>
                {{ $profession->name }}</h2>
        </div>
        <div class="card-body">
            <p class="card-text">{{ $profession->description }}</p>

            <div class="">
                <p class="text-muted">Numero telefonico: {{ $profession->phonenumber }}</p>
            </div>
            <br>
            <div class="">
                <p class="text-muted">Motivo: {{ $profession->inherited }}</p>
            </div>
        </div>
        <div class="card-footer bg-light d-grid gap-2 d-md-flex justify-content-md-end">
            <a class="btn btn-outline-info mr-3" href="#"><i class="fas fa-info"></i>Ver más</a>
        </div>
    </div>
    @empty
    <!--Mensaje por si no encuentra datos-->
    <h3>No hay registro en la base de datos</h3>
    @endforelse
</div>
@endsection