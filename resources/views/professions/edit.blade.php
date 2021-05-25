@extends('layouts.dashboard')
@section('content')
<div class="container">
    <h1>Actualizar datos de la profesión <b>{{ $profession->profession }} </b></h1>
    <form action="{{ route('professions.update', $profession->id) }}" method="post">
        @csrf
        @method('PUT')
        <input type="hidden" name="id">
        <div class="row">
            <div class="col-xs-12 colo-sm-4 col-md-4 col-xl-4">
                <label for="">Nombre completo:</label>
                <input class="form-control" type="text" name="name" value="{{ $profession->name }}" required>
            </div>
            <div class="col-xs-12 colo-sm-4 col-md-4 col-xl-4">
                <label for="">Edad en años:</label>
                <input class="form-control" type="number" name="ageyears" value="{{ $profession->ageyears }}" required>
            </div>
            <div class="col-xs-12 colo-sm-4 col-md-4 col-xl-4">
                <label for="">Profesión:</label>
                <input class="form-control" type="text" name="profession" value="{{ $profession->profession }}"
                    required>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-xs-12 colo-sm-4 col-md-4 col-xl-4">
                <label for="">Número telefónico:</label>
                <input class="form-control" type="text" name="phonenumber" min="0" max="10000000000"
                    value="{{ $profession->phonenumber }}" required>
            </div>
            <div class="col-xs-12 colo-sm-4 col-md-4 col-xl-4">
                <label for="">Años trabajando en ello:</label>
                <input class="form-control" type="number" name="yearsworking" value="{{ $profession->yearsworking }}"
                    required>
            </div>
            <div class="col-xs-12 colo-sm-4 col-md-4 col-xl-4">
                <label for="">De quién lo heredo o por que le gusto:</label>
                <input class="form-control" type="text" name="inherited" value="{{ $profession->inherited }}" required>
            </div>
        </div>
        <br>
        <div>
            <label for="">Descripción de la carrera:</label>
            <textarea class="form-control" type="text" name="description" id="" cols="20" rows="15"
                required>{{ $profession->description }}"</textarea>
        </div>
        <div class="col-xs-12 colo-sm-4 col-md-4 col-xl-4">
            <label for="">Comentario:</label>
            <input class="form-control" type="text" name="commentcarr" value="{{ $profession->commentcarr }}">
        </div>
        <br>
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <input class="btn btn-info" type="reset" value="Restablecer">
            <input class="btn btn-primary" type="submit" value="Guardar">
        </div>
    </form>
</div>
@endsection