@extends('layouts.dashboard')
@section('title', 'cardsContacts')
@section('content')
<div class="row">
    @forelse ($contacts as $contact)
    <!--renderizar datos-->
    <div class="card col-xs-6 col-sm-6 col-md-5 col-lg-3 mb-3 mr-2 ml-2">
        <div class="card-header">
            <h2 class="text-primary">{{ $contact->fullname }}
                <br>
                {{ $contact->years }} Año(s)</h2>
        </div>
        <div class="card-body">
            <p class="card-text">{{ $contact->mailaddress }}</p>

            <div class="">
                <p class="text-muted">Ciudad: {{ $contact->city }}</p>
            </div>
            <br>
            <div class="">
                <p class="text-muted">Estado: {{ $contact->condition }}</p>
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