@extends('layouts.dashboard')
@section('title', 'Musicas')
@section('content')
<div class="">
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col md 8">
                    <h2 class="card-title">Listado de canciones registrados en la base de datos</h2>
                </div>
                <div class="col md 4">
                    <div class="d-grid gap-3 d-md-flex justify-content-md-end">
                        <a class="btn btn-outline-info mr-3" href="{{ url('/musics/import') }}"><i
                                class="fas fa-file-import">Importar</i></a>
                        <a class="btn btn-outline-info mr-3" href="{{ route('musics.create') }}"><i
                                class="fas fa-plus-circle">Nuevo</i></a>
                        <a class="btn btn-outline-info mr-3" href="{{ url('/musics/cards') }}"><i
                                class="fas fa-border-all"></i>cards</a>
                        <a class="btn btn-outline-info mr-3" href="{{ url('/musics/chart') }}"><i
                                class="fas fa-chart-bar"></i>Grafica</a>
                        <a class="btn btn-outline-info mr-3" href="{{ url('/musics/exportToXlsx') }}"><i
                                class="fa fa-file-excel nav-icon">Excel</i></a>
                        <a class="btn btn-outline-info mr-3" href="{{ url('/exportMusicsToCSV') }}"
                            onclick="exportMusics(event.target);"><i class="fa fa-file-csv nav-icon">csv</i></a>
                        <br>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-body">
            <table id="example" class="table table-striped">
                <thead>
                    <tr>
                        <th>Imagen</th>
                        <th>Nombre de la canción</th>
                        <th>Información</th>
                        <th>Descripción</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($musicas as $music)
                    <tr>
                        <td>
                            <img style="width: 200px; height: 100px; object-fit: cover;"
                                src="/images/musics/{{ $music->image }}"
                                alt="{{ $music->songname }} {{ $music->artist }}">
                        </td>
                        <td>
                            <a class="btn btn-info btn-small" href="{{ route('musics.show', $music->id) }}">
                                <h4>{{ $music->songname }}</h4>
                                <h4>{{ $music->artist }}</h4>
                        </td>
                        </a>
                        <td>
                            <p><b>Genéro:</b> {{ $music->gender }}</p>
                            <p><b>Año de lanzamiento:</b> {{ $music->yearlaunch }}</p>
                            <p><b>Album:</b> {{ $music->album }}</p>
                            <p><b>Redes sociales:</b> {{ $music->socialmedia }}</p>
                            <p><b>Letra de la cancion:</b>{{ $music->letter }}</p>
                        </td>
                        <td>
                            <p>{{ $music->comment }}</p>
                        </td>
                        @empty
                        <h1>La tabla no tiene datos</h1>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
    <!--DataTables-->
    <script src="{{ asset('assets/js/jquery-3.5.1.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.dataTables.min.js') }}"></script>
    <!--Aplicación de DataTable-->
    <script>
        $(function() {
            $('#example').DataTable({
                dom: 'Bfrtip',
                buttons: [
                    'copy', 'csv', 'excel', 'pdf', 'print'
                ]
            });
        });
    </script>
    <!--Agregar codigo scrip para poder extrar archivo csv-->
    <script>
        function exportMusics(_this) {
            let _url = $(_this).data('href');
            window.location.href = _url;
        }
    </script>

    <script>
        function Graficar(_this) {
            echo "Hola mundo";
        }
    </script>
    @endsection