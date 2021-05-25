@extends('layouts.dashboard')
@section('content')
<div class="container">
  <br><br>
  <div class="card">
    <div class="card-header">
      <div class="row">
        <div class="col md 8">
          <div class="card-title">
            <h2> Profesión:{{ $profession->profession }}</h2>
          </div>
        </div>
        <div class="col md 4">
          <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <a class="btn btn-primary" href="{{ route('professions.index') }}"><i class="fa fas-add"></i>
              < Regresar</a> </div> </div> </div> </div> <div class="card-body">
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th>Imagen de la profesión</th>
                      <th>Información</th>
                      <th>Descripción</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>
                        <img style="width: 200px; height: 100px; object-fit: cover;"
                          src="/images/professions/{{ $profession->image }}"
                          alt="{{ $profession->profession }} {{ $profession->name }}">
                      <td>
                        <p><b>Nombre:</b> {{ $profession->name }}</p>
                        <p><b>Edad:</b> {{ $profession-> ageyears }} Años</p>
                        <p><b>Número telefónico:</b> {{ $profession->phonenumber }}</p>
                        <p><b>Años trabajando en ello:</b> {{ $profession->yearsworking }} Año(s)</p>
                        <p><b>Le gusto por:</b> {{ $profession->inherited }}</b></p>
                        <p><b>Descripción de la carrera:</b> {{ $profession->description }}</p>
                      </td>
                      <td>
                        <p>{{ $profession->commentcarr }}</p>
                      </td>
                    </tr>
                  </tbody>
                </table>
          </div>
          <div class="card-footer">
            <div class="col md 4">
              <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <a class="btn btn-primary" href="{{ route('professions.edit', $profession->id) }}"><i
                    class="fa fas-add"></i>Editar</a>
                <form action="{{ route('professions.destroy', $profession->id) }}" method="post">
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