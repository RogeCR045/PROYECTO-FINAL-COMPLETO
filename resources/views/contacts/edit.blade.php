@extends('layouts.dashboard')
@section('content')
<div class="container">
    <h1>Actualizar datos del contacto <b>{{ $contact->fullname }}</b></h1>
    <form action="{{ route('contacts.update', $contact->id) }}" method="post">
        @csrf
        @method('PUT')
        <input type="hidden" name="id">
        <div class="row">
            <div class="col-xs-12 colo-sm-4 col-md-4 col-xl-4">
                <label for="">Nombre completo:</label>
                <input class="form-control" type="text" name="fullname" value="{{ $contact->fullname }}" required>
            </div>
            <div class="col-xs-12 colo-sm-4 col-md-4 col-xl-4">
                <label for="">Edad en años:</label>
                <input class="form-control" type="number" name="years" value="{{ $contact->years }}" required>
            </div>
            <div class="col-xs-12 colo-sm-4 col-md-4 col-xl-4">
                <label for="">Dirección de correo:</label>
                <input class="form-control" type="email" name="mailaddress" value="{{ $contact->mailaddress }}"
                    required>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-xs-12 colo-sm-4 col-md-4 col-xl-4">
                <label for="">Contraseña:</label>
                <input class="form-control" type="password" name="password" value="{{ $contact->password }}" required>
            </div>
            <div class="col-xs-12 colo-sm-4 col-md-4 col-xl-4">
                <label for="">Calle y codigo postal:</label>
                <input class="form-control" type="text" name="Street" value="{{ $contact->Street }}" required>
            </div>
            <div class="col-xs-12 colo-sm-4 col-md-4 col-xl-4">
                <label for="">Localidad:</label>
                <input class="form-control" type="text" name="location" value="{{ $contact->location }}" required>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-xs-12 colo-sm-4 col-md-4 col-xl-4">
                <label for="">Ciudad:</label>
                <input class="form-control" type="text" name="city" value="{{ $contact->city }}" required>
            </div>
            <div class="col-xs-12 colo-sm-4 col-md-4 col-xl-4">
                <label for="">Estado:</label>
                <input class="form-control" type="text" name="condition" value="{{ $contact->condition }}" required>
            </div>
            <div>
                <label for="">Sitio web:</label>
                <textarea class="form-control" type="text" name="website" id="" cols="15" rows="8"
                    required>{{ $contact->website }}</textarea>
            </div>
        </div>
        <br>
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <input class="btn btn-info" type="reset" value="Restablecer">
            <input class="btn btn-primary" type="submit" value="Guardar">
        </div>
    </form>
</div>
@endsection