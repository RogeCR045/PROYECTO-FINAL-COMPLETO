@extends('layouts.dashboard')
@section('title', 'Usuarios')
@section('content')
<div class="">
    <br><br>
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col md 8">
                    <h2 class="card-title">Listado de usuarios registrados en la base de datos</h2>
                </div>
                <div class="col md 4">
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <a class="btn btn-outline-info mr-3" href="{{ route('register') }}"><i
                                class="fas fa-border-all"></i> +Nuevo</a>
                        <a class="btn btn-outline-info mr-3" href="{{ url('/users/cards') }}"><i
                                class="fas fa-border-all"></i>cards</a>
                        <span data-href="/exportUsersToCSV" id="export" class="btn btn-outline-info mr-3"
                            onclick="exportUsers(event.target);"> <i class="fa fa-file-csv nav-icon">CSV</i></span>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-body">
            <table id="example" class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Image</th>
                        <th>Nombre</th>
                        <th>Email</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($users as $user)
                    <tr>
                        <td>
                            <p>{{ $user->id }}</p>
                        </td>
                        <td>
                            <img style="width: 200px; height: 100px; object-fit: cover;"
                                src="/images/users/{{ $user->image }}" alt="{{ $user->name }} {{ $user->email }}">
                        </td>
                        <td>
                            <!--<a class="btn btn-info btn-small" href="{{ route('users.show', $user->id) }}">-->
                            <a class="btn btn-info btn-small" href="#">
                                <h4>{{ $user->name }}</h4>
                            </a>
                        <td>
                            <p><b>Email:</b> {{ $user->email }}</p>
                        </td>
                        @empty
                        <h1>La tabla no tiene datos</h1>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
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
    function exportUsers(_this) {
        let _url = $(_this).data('href');
        window.location.href = _url;
    }
</script>
@endsection