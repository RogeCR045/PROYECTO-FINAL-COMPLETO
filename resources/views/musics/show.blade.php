@extends('layouts.dashboard')
@section('content')


<div class="container">
    <br><br>

    <div class="card">

        <div class="card-header">

         <div class="row">
          <div class="col md 8">

            <div class="card-title">
                <h2> Canción:{{ $music->songname }} {{  $music->artist }}</h2>
            </div>
            </div>
            <div class="col md 4">
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                
               <a class="btn btn-primary" href="{{ route('musics.index') }}"><i class="fa fas-add"></i> < Regresar</a>
              
              </div>
            </div>
            </div>
        </div>

        

        <div class="card-body">
         <table class="table table-striped">

        <thead>
            <tr>
                <th>Imagen de la canción</th>
                <th>Información</th>
                <th>Descripción</th>
               
                
            </tr>
        </thead>

        <tbody>
          
       
        
       <tr>
       
      <td>
        
        <img style="width: 200px; height: 100px; object-fit: cover;" src="/images/musics/{{ $music->image }}" alt="{{ $music->songname }} {{ $music->artist }}">
   
      <td>
         <p><b>Genéro:</b> {{ $music->gender }}</p>
         <p><b>Año de lanzamiento:</b> {{ $music-> yearlaunch }}</p>
         <p><b>Album:</b> {{ $music->album }}</p>
         <p><b>Redes sociales:</b> {{ $music->socialmedia }}</p>
         <p><b>Tiempo escuchandolo:</b> {{ $music->timelistening }} Año(s)</b></p>
         <p><b>Letra de la cancion:</b> {{ $music->letter }}</p>
      </td>
      <td><p>{{ $music->comment }}</p></td>
       
      
        
     
       
    </tr>
       
    </tbody>
        </table> 

        </div>
        <div class="card-footer">
            <div class="col md 4">
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    
                   <a class="btn btn-primary" href="{{ route('musics.edit', $music->id) }}"><i class="fa fas-add"></i>Editar</a>
                   <form action="{{ route('musics.destroy', $music->id) }}" method="post">
                @csrf
                @method('DELETE')
                <input  class="btn btn-danger" type="submit" value="Eliminar">
                </form>
                  
                  </div>
                </div>
        </div>
        </div>
    </div>

    @endsection