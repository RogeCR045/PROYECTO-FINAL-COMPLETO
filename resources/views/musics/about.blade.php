@extends('layouts.app')
<title>About</title>
@section('content')
<!--Style personalizado-->
<link rel="stylesheet" type="text/css" href="{{ asset('/dist/css/index.css') }}">
<link rel="stylesheet" href="{{ asset('/dist/css/adminlte.css') }}" type="text/css">
<div class="container">
    <Center>
        <h1 class="text-primary"><b>HACERCA DE LA PAGINA MPCA🎵💼📱🐶</b></h1>
    </Center>
    <center>
        <figure><img src="/images/royer.jpeg" alt="#" height="200px" width="150px"></figure>
    </center>
    <Center>
        <h2 class="text-success"><b>Creador: Rogelio Castañeda Reyes</b></h2>
    </Center>
    <Center>
        <h2 class="text-warning"><b>Ingeníero Informático</b></h2>
    </Center>
    <br>
    <Center>
        <h2 class="text-danger"><b>Diseños de interfacez:</b></h2>
    </Center>
    <Center>
        <h2 class="text-info"><b>Modulo de canciones</b> 
            <picture><img src="/rock/images/1.jpg" alt="#" height="200px" width="150px"></picture>
        </h2>
    </Center>
    <Center>
        <h2 class="text-info"><b>Modulo de profesiones</b> 
            <picture><img src="/rock/images/trabajo.jpg" alt="#" height="200px" width="150px"></picture>
        </h2>
    </Center>
    <Center>
        <h2 class="text-info"><b>Modulo de contactos</b> 
            <picture><img src="/rock/images/contactos.jpg" alt="#" height="200px" width="150px"></picture>
        </h2>
    </Center>
    <Center>
        <h2 class="text-info"><b>Modulo de animales</b> 
            <picture><img src="/rock/images/animales.jpeg" alt="#" height="200px" width="150px"></picture>
        </h2>
    </Center>
</div>
@endsection