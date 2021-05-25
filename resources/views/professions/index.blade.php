@extends('layouts.dashboard')
@section('title', 'Profesiones')
@section('content')
<div class="">
    <br><br>
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col md 8">
                    <h2 class="card-title">Listado de profesiones registrados en la base de datos</h2>
                </div>
                <div class="col md 4">
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <a class="btn btn-outline-info mr-3" href="{{ url('/professions/import') }}"><i
                                class="fas fa-file-import">Importar</i></a>
                        <a class="btn btn-outline-info mr-3" href="{{ route('professions.create') }}"><i
                                class="fas fa-plus-circle">Nuevo</i></a>
                        <a class="btn btn-outline-info mr-3" href="{{ url('/professions/cards') }}"><i
                                class="fas fa-border-all"></i>cards</a>
                        <a class="btn btn-outline-info mr-3" href="{{ url('/professions/chart') }}"><i
                                class="fas fa-chart-bar">Graficar</i></a>
                        <a class="btn btn-outline-info mr-3" href="{{ url('/professions/exportToXlsx') }}"><i
                                class="fa fa-file-excel nav-icon">Excel</i></a>
                        <span data-href="/exportProfessionsToCSV" id="export" class="btn btn-outline-info mr-3"
                            onclick="exportProfessions(event.target);"><i class="fa fa-file-csv nav-icon">CSV</i>
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-body">
            <table id="example" class="table table-striped">
                <thead>
                    <tr>
                        <th>Imagen</th>
                        <th>Nombre de la profesión</th>
                        <th>Información</th>
                        <th>Descripción</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($professions as $profession)
                    <tr>
                        <td>
                            <img style="width: 200px; height: 100px; object-fit: cover;"
                                src="/images/professions/{{ $profession->image }}"
                                alt="{{ $profession->profession }} {{ $profession->name }}">
                        </td>
                        <td>
                            <a class="btn btn-info btn-small" href="{{ route('professions.show', $profession->id) }}">
                                <h4>{{ $profession->profession }}</h4>
                        </td>
                        </a>
                        <td>
                            <p><b>Nombre:</b> {{ $profession->name  }}</p>
                            <p><b>Edad:</b> {{ $profession->ageyears }} Años</p>
                            <p><b>Número telefónico:</b> {{ $profession->phonenumber }}</p>
                            <p><b>Años trabajando en ello:</b> {{ $profession->yearsworking }} Año(s)</p>
                            <p><b>Le gusto por:</b> {{ $profession->inherited }}</p>
                            <p><b>Comentario de la carrera:</b> {{ $profession->commentcarr }}</p>
                        </td>
                        <td>
                            <p>{{ $profession->description }}</p>
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
        function exportProfessions(_this) {
            let _url = $(_this).data('href');
            window.location.href = _url;
        }
    </script>
    @endsection