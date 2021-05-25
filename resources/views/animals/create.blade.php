@extends('layouts.dashboard')
@section('content')
<div class="container">
    <h1>🙊.😺·🦍FORMULARIO DE ANIMALES🐶·🐕·🐩</h1>
    <form action="{{ route('animals.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="row mb-3">
            <div class="col-xs-12 colo-sm-12 col-md-12 col-xl-12">
                <label for="">Imagen:</label>
                <input type="file" name="image" id="" accept="image/*" required>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-xs-12 colo-sm-4 col-md-4 col-xl-4">
                <label for="">Animal:</label>
                <input class="form-control" type="text" name="animal" id="" placeholder="Animal" required>
            </div>
            <div class="col-xs-12 colo-sm-4 col-md-4 col-xl-4">
                <label for="">Edad en años:</label>
                <input class="form-control" type="number" name="age" id="" placeholder="Edad en años" required>
            </div>
            <div class="col-xs-12 colo-sm-4 col-md-4 col-xl-4">
                <label for="">Lugar de origen:</label>
                <input class="form-control" type="text" name="birthplace" id="" placeholder="Lugar de origen" required>
            </div>
        </div>
        <br>
        <div class="row mb-3">
            <div class="col-xs-12 colo-sm-4 col-md-4 col-xl-4">
                <label for="">Clima:</label>
                <input class="form-control" type="text" name="climate" id="" placeholder="Clima" required>
            </div>
            <div class="col-xs-12 colo-sm-4 col-md-4 col-xl-4">
                <label for="">Color:</label>
                <input class="form-control" type="text" name="color" id="" placeholder="Color" required>
            </div>
            <div class="col-xs-12 colo-sm-4 col-md-4 col-xl-4">
                <label for="">Pelaje:</label>
                <input class="form-control" type="text" name="fur" id="" placeholder="Pelaje" required>
            </div>
        </div>
        <br>
        <div>
            <label for="">Comida:</label>
            <input class="form-control" type="text" name="food" id="" placeholder="Comida" required>
        </div>
        <div>
            <label for="">Comentario:</label>
            <textarea class="form-control" type="text" name="comemmtanim" id="" cols="15" rows="8" required></textarea>
        </div>
        <br>
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <input class="btn btn-info" type="reset" value="Restablecer">
            <input class="btn btn-primary" type="submit" value="Guardar">
        </div>
    </form>
</div>
@endsection