@extends('layouts.dashboard')
@section('content')
<div class="container">
    <h1>Actualizar datos de la canción: <b>{{ $music->songname }} {{ $music->artist }}</b></h1>
    <form action="{{ route('musics.update', $music->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <input type="hidden" name="id">
        <br>
        <!--<div class="row mb-3">
            <div class="col-xs-12 colo-sm-12 col-md-12 col-xl-12">
                <label for="">Imagen:</label>
                <input type="file" name="image" value="{{ $music->image }}" required>
            </div>
        </div>-->
        <div class="row">
            <div class="col-xs-12 colo-sm-4 col-md-4 col-xl-4">
                <label for="">Nombre de la canción:</label>
                <input class="form-control" type="text" name="songname" value="{{ $music->songname }}" required>
            </div>
            <div class="col-xs-12 colo-sm-4 col-md-4 col-xl-4">
                <label for="">Artista:</label>
                <input class="form-control" type="text" name="artist" value="{{ $music->artist }}" required>
            </div>
            <div class="col-xs-12 colo-sm-4 col-md-4 col-xl-4">
                <label for="">Género:</label>
                <input class="form-control" type="text" name="gender" value="{{ $music->gender }}" required>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-xs-12 colo-sm-4 col-md-4 col-xl-4">
                <label for="">Año de lanzamiento:</label>
                <input class="form-control" type="number" name="yearlaunch" value="{{ $music->yearlaunch }}" required>
            </div>
            <div class="col-xs-12 colo-sm-4 col-md-4 col-xl-4">
                <label for="">Album:</label>
                <input class="form-control" type="text" name="album" value="{{ $music->album }}" required>
            </div>
            <div class="col-xs-12 colo-sm-4 col-md-4 col-xl-4">
                <label for="">Redes sociales:</label>
                <input class="form-control" type="text" name="socialmedia" value="{{ $music->socialmedia }}" required>
            </div>
        </div>
        <br>
        <div>
            <label for="">Tiempo de año escuchandolo:</label>
            <input class="form-control" type="number" name="timelistening" value="{{ $music->timelistening }}" required>
        </div>
        <br>
        <div>
            <label for="">Letra de la cancion:</label>
            <textarea class="form-control" name="letter" id="" cols="30" rows="10"
                required>{{ $music->letter }}</textarea>
        </div>
        <br>
        <div class="col-xs-12 colo-sm-4 col-md-4 col-xl-4">
            <label for="">Comentario:</label>
            <input class="form-control" type="text" name="comment" value="{{ $music->comment }}">
        </div>
        <br>
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <a class="btn btn-success" href="{{ route('musics.show', $music->id) }}" value="Regresar">Regresar</a>
            <input class="btn btn-info" type="reset" value="Restablecer">
            <br>
            <input class="btn btn-primary" type="submit" value="Guardar">
        </div>
    </form>
</div>
@endsection