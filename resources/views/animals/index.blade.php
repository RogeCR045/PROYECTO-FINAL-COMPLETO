@extends('layouts.dashboard')
@section('title', 'Animales')
@section('content')
<div class="">
  <br><br>
  <div class="card">
    <div class="card-header">
      <div class="row">
        <div class="col md 8">
          <h2 class="card-title">Listado de animales registrados en la base de datos</h2>
        </div>
        <div class="col md 4">
          <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <a class="btn btn-outline-info mr-3" href="{{ url('/animals/import') }}"><i
                class="fas fa-file-import">Importar</i></a>
            <a class="btn btn-outline-info mr-3" href="{{ route('animals.create') }}"><i
                class="fas fa-border-all">Nuevo</i></a>
            <a class="btn btn-outline-info mr-3" href="{{ url('/animals/cards') }}"><i
                class="fas fa-border-all"></i>cards</a>
            <a class="btn btn-outline-info mr-3" href="{{ url('/animals/chart') }}"><i
                class="fas fa-chart-bar">Graficar</i></a>
            <a class="btn btn-outline-info mr-3" href="{{ url('/animals/exportToXlsx') }}"><i
                class="fa fa-file-excel nav-icon">Excel</i></a>
            <span data-href="/exportAnimalsToCSV" id="export" class="btn btn-outline-info mr-3"
              onclick="exportAnimals(event.target);"><i class="fa fa-file-csv nav-icon">CSV</i></span>
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
            <th>Nombre del animal</th>
            <th>Información</th>
            <th>Descripción</th>
          </tr>
        </thead>
        <tbody>
          @forelse ($animals as $animal)
          <tr>
            <td>
              <img style="width: 200px; height: 100px; object-fit: cover;" src="/images/animals/{{ $animal->image }}"
                alt="{{ $animal->animal }} {{ $animal->age }}">
            </td>
            <td>
              <a class="btn btn-info btn-small" href="{{ route('animals.show', $animal->id) }}">
                <h4>{{ $animal->animal }}</h4>
                <h4>{{ $animal->age }}</h4><b>Años</b></td>
            </a>
            <td>
              <p><b>Edad:</b> {{ $animal->age }} Años</p>
              <p><b>Lugar de origen :</b> {{ $animal->birthplace }}</p>
              <p><b>Clima:</b> {{ $animal->climate }}</p>
              <p><b>Color:</b> {{ $animal->color }}</b></p>
              <p><b>Pejale:</b> {{ $animal->fur }}</p>
              <p><b>Comida:</b> {{ $animal->food }}</p>
            </td>
            <td>
              <p>{{ $animal->comemmtanim }}</p>
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
    function exportAnimals(_this) {
      let _url = $(_this).data('href');
      window.location.href = _url;
    }
  </script>
  @endsection