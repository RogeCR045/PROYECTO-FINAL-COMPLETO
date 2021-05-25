@extends('layouts.dashboard')
@section('content')
<div class="container">
  <br><br>
  <div class="card">
    <div class="card-header">
      <div class="row">
        <div class="col md 8">
          <div class="card-title">
            <h2> Animal:{{ $animal->animal }}</h2>
          </div>
        </div>
        <div class="col md 4">
          <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <a class="btn btn-primary" href="{{ route('animals.index') }}"><i class="fa fas-add"></i>
              < Regresar</a> </div> </div> </div> </div> <div class="card-body">
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th>Imagen de animal</th>
                      <th>Información</th>
                      <th>Descripción</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>
                        <img style="width: 200px; height: 100px; object-fit: cover;"
                          src="/images/animals/{{ $animal->image }}" alt="{{ $animal->animal }} {{ $animal->age }}">
                      <td>
                        <p><b>Edad:</b> {{ $animal->age }} Años</p>
                        <p><b>Lugar de origen:</b> {{ $animal->birthplace }}</p>
                        <p><b>Clima:</b> {{ $animal->climate }}</p>
                        <p><b>Color:</b> {{ $animal->color }}</p>
                        <p><b>Pejale:</b> {{ $animal->fur }}</b></p>
                        <p><b>Comida:</b> {{ $animal->food }}</p>
                      </td>
                      <td>
                        <p>{{ $animal->comemmtanim }}</p>
                      </td>
                    </tr>
                  </tbody>
                </table>
          </div>
          <div class="card-footer">
            <div class="col md 4">
              <div class="d-grid gap-2 d-md-flex justify-content-md-end">

                <a class="btn btn-primary" href="{{ route('animals.edit', $animal->id) }}"><i
                    class="fa fas-add"></i>Editar</a>

                <form action="{{ route('animals.destroy', $animal->id) }}" method="post">
                  @csrf
                  @method('DELETE')
                  <input class="btn btn-danger" type="submit" value="Eliminar">
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      @endsection