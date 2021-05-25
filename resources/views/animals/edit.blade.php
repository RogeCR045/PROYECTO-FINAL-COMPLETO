@extends('layouts.dashboard')
@section('content')
<div class="container">
    <h1>Actualizar datos del animal <b>{{ $animal->animal }}</b></h1>
    <form action="{{ route('animals.update', $animal->id) }}" method="post">
        @csrf
        @method('PUT')
        <input type="hidden" name="id">
        <div class="row">
            <div class="col-xs-12 colo-sm-4 col-md-4 col-xl-4">
                <label for="">Animal:</label>
                <input class="form-control" type="text" name="animal" value="{{ $animal->animal }}" required>
            </div>
            <div class="col-xs-12 colo-sm-4 col-md-4 col-xl-4">
                <label for="">Edad en años:</label>
                <input class="form-control" type="number" name="age" value="{{ $animal->age }}" required>
            </div>
            <div class="col-xs-12 colo-sm-4 col-md-4 col-xl-4">
                <label for="">Lugar de origen:</label>
                <input class="form-control" type="text" name="birthplace" value="{{ $animal->birthplace }}" required>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-xs-12 colo-sm-4 col-md-4 col-xl-4">
                <label for="">Clima:</label>
                <input class="form-control" type="text" name="climate" value="{{ $animal->climate }}" required>
            </div>
            <div class="col-xs-12 colo-sm-4 col-md-4 col-xl-4">
                <label for="">Color:</label>
                <input class="form-control" type="text" name="color" value="{{ $animal->color }}" required>
            </div>
            <div class="col-xs-12 colo-sm-4 col-md-4 col-xl-4">
                <label for="">Pelaje:</label>
                <input class="form-control" type="text" name="fur" value="{{ $animal->fur }}" required>
            </div>
        </div>
        <br>
        <div>
            <label for="">Comida:</label>
            <input class="form-control" type="text" name="food" value="{{ $animal->food }}" required>
        </div>
        <div>
            <label for="">Comentario:</label>
            <textarea class="form-control" type="text" name="comemmtanim" id="" cols="15" rows="8"
                required>{{ $animal->comemmtanim }}</textarea>
        </div>
        <br>
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <input class="btn btn-info" type="reset" value="Restablecer">
            <input class="btn btn-primary" type="submit" value="Guardar">
        </div>
    </form>
</div>
@endsection