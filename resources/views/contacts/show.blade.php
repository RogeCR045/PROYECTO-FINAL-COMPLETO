@extends('layouts.dashboard')
@section('content')
<div class="container">
  <br><br>
  <div class="card">
    <div class="card-header">
      <div class="row">
        <div class="col md 8">
          <div class="card-title">
            <h2> Contacto:{{ $contact->fullname }}</h2>
            <h2>{{ $contact->years }} Años</h2>
          </div>
        </div>
        <div class="col md 4">
          <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <a class="btn btn-primary" href="{{ route('contacts.index') }}"><i class="fa fas-add"></i>
              < Regresar</a> </div> </div> </div> </div> <div class="card-body">
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th>Imagen de contacto</th>
                      <th>Información</th>
                      <th>Descripción</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>
                        <img style="width: 200px; height: 100px; object-fit: cover;"
                          src="/images/contacts/{{ $contact->image }}"
                          alt="{{ $contact->fullname }} {{ $contact->years }}">
                      <td>
                        <p><b>Dirección de correo:</b> {{ $contact->mailaddress }}</p>
                        <p><b>Calle y codigo postal:</b> {{ $contact->Street }}</p>
                        <p><b>Localidad:</b> {{ $contact->location }}</p>
                        <p><b>Ciudad:</b> {{ $contact->city }}</b></p>
                        <p><b>Estado:</b> {{ $contact->condition }}</p>
                      </td>
                      <td>
                        <p>{{ $contact->website }}</p>
                      </td>
                    </tr>
                  </tbody>
                </table>
          </div>
          <div class="card-footer">
            <div class="col md 4">
              <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <a class="btn btn-primary" href="{{ route('contacts.edit', $contact->id) }}"><i
                    class="fa fas-add"></i>Editar</a>
                <form action="{{ route('contacts.destroy', $contact->id) }}" method="post">
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