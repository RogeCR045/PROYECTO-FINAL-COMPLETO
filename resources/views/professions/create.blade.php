@extends('layouts.dashboard')
@section('content')
<div class="container">
    <h1>👨‍💼😎🗂FORMULARIO DE PROFESIONES🏢📄💼</h1>
    <form action="{{ route('professions.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="row mb-3">
            <div class="col-xs-12 colo-sm-12 col-md-12 col-xl-12">
                <label for="">Imagen:</label>
                <input type="file" name="image" id="" accept="image/*" required>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-xs-12 colo-sm-4 col-md-4 col-xl-4">
                <label for="">Nombre completo:</label>
                <input class="form-control" type="text" name="name" id="" placeholder="Nombre completo" required>
            </div>
            <div class="col-xs-12 colo-sm-4 col-md-4 col-xl-4">
                <label for="">Edad en años:</label>
                <input class="form-control" type="number" name="ageyears" id="" placeholder="Edad en años" required>
            </div>
            <div class="col-xs-12 colo-sm-4 col-md-4 col-xl-4">
                <label for="">Profesión:</label>
                <input class="form-control" type="text" name="profession" id="" placeholder="Profesión" required>
            </div>
        </div>
        <br>
        <div class="row mb-3">
            <div class="col-xs-12 colo-sm-4 col-md-4 col-xl-4">
                <label for="">Número telefónico:</label>
                <input class="form-control" type="text" name="phonenumber" min="0" max="10000000000" id=""
                    placeholder="Número telefónico" required>
            </div>
            <div class="col-xs-12 colo-sm-4 col-md-4 col-xl-4">
                <label for="">Años trabajando en ello:</label>
                <input class="form-control" type="number" name="yearsworking" id=""
                    placeholder="Años trabajando en ello" required>
            </div>
            <div class="col-xs-12 colo-sm-4 col-md-4 col-xl-4">
                <label for="">De quién lo heredo o por que le gusto:</label>
                <input class="form-control" type="text" name="inherited" id=""
                    placeholder="De quién lo heredo o por que le gusto" required>
            </div>
        </div>
        <br>
        <div>
            <label for="">Descripción de la carrera:</label>
            <textarea class="form-control" type="text" name="description" id="" cols="20" rows="15" required></textarea>
        </div>

        <div>
            <label for="">Comentario:</label>
            <input class="form-control" type="text" name="commentcarr" id="" placeholder="Comentario">
        </div>
        <br>
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <input class="btn btn-info" type="reset" value="Restablecer">
            <input class="btn btn-primary" type="submit" value="Guardar">
        </div>
    </form>
</div>
@endsection