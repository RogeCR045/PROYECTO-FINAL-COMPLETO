@extends('layouts.dashboard')
@section('title', 'Contactos')
@section('content')
<div class="">
    <br><br>
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col md 8">
                    <h2 class="card-title">Listado de contactos registrados en la base de datos</h2>
                </div>
                <div class="col md 4">
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <a class="btn btn-outline-info mr-3" href="{{ url('/contacts/import') }}"><i
                                class="fas fa-file-import">Importar</i></a>
                        <a class="btn btn-outline-info mr-3" href="{{ route('contacts.create') }}"><i
                                class="fas fa-border-all">Nuevo</i></a>
                        <a class="btn btn-outline-info mr-3" href="{{ url('/contacts/cards') }}"><i
                                class="fas fa-border-all"></i>cards</a>
                        <a class="btn btn-outline-info mr-3" href="{{ url('/contacts/chart') }}"><i
                                class="fas fa-chart-bar">Graficar</i></a>
                        <a class="btn btn-outline-info mr-3" href="{{ url('/contacts/exportToXlsx') }}"><i
                                class="fa fa-file-excel nav-icon">Excel</i></a>
                        <span data-href="/exportContactsToCSV" id="export" class="btn btn-outline-info mr-3"
                            onclick="exportContacts(event.target);"><i class="fa fa-file-csv nav-icon">CSV</i>
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
                        <th>Nombre del contacto</th>
                        <th>Información</th>
                        <th>Descripción</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($contacts as $contact)
                    <tr>
                        <td>
                            <img style="width: 200px; height: 100px; object-fit: cover;"
                                src="/images/contacts/{{ $contact->image }}"
                                alt="{{ $contact->fullname }} {{ $contact->years }}">
                        </td>
                        <td>
                            <a class="btn btn-info btn-small" href="{{ route('contacts.show', $contact->id) }}">
                                <h4>{{ $contact->fullname }}</h4>
                                <h4>{{ $contact->years }} <b>Años</b></h4>
                        </td>
                        </a>
                        <td>
                            <p><b>Dirección de correo:</b> {{ $contact->mailaddress  }}</p>
                            <p><b>Calle y codigo postal:</b> {{ $contact->Street }}</p>
                            <p><b>Localidad:</b> {{ $contact->location }}</p>
                            <p><b>Ciudad:</b> {{ $contact->city }}</p>
                            <p><b>Estado:</b> {{ $contact->condition }}</p>
                        </td>
                        <td>
                            <p>{{ $contact->website }}</p>
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
                dom: 'Blfrtip',
                buttons: [
                    'copy', 'csv', 'excel', 'pdf', 'print'
                ]
            });
        });
    </script>
    <!--Agregar codigo scrip para poder extrar archivo csv-->
    <script>
        function exportContacts(_this) {
            let _url = $(_this).data('href');
            window.location.href = _url;
        }
    </script>
    @endsection