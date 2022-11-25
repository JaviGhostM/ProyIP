@extends('layout')
@section('Psicólogos', 'title')

@section('Content')
<div class="Content">
    <!-- Banner -->
    <div class="content-banner">
        <div class="banner-service fade">            
            <h2>Contamos con los mejores profesionales para atenderte a ti y a tu familia. ¡Agenda tu cita hoy mismo!.</h2>
            <h1>Nuestros Psicólogos</h1>
            <img src="../images/serviciosdemoWEB.jpg" alt="">
        </div>
    </div>
    <!-- Fin Banner -->
    <!-- Contenedor 1 -->
    <div class="content-one-psy">
        <div class="content-one-psy-text">
            <h1>Siempre listos para atenderte</h1>
        </div>        
    </div>
    <!-- Fin Contenedor 1 -->
    <!-- Contenido 2 Psicólogos -->
    <div class="content-two-psy">
        @foreach ($Psy as $Psys)
        <div class="content-two-psy-box">
            <div class="psy-box-img">
                <img src="{{$Psys->image}}" alt="">
            </div>
            <div class="psy-box-data">
                <h1>{{$Psys->specialty}}</h1>
                <h2>{{$Psys->name}} {{$Psys->app}} {{$Psys->apm}}</h2>
            </div>
            <div class="psy-box-btn">
                <a href="{{route('psy.show', $Psys)}}"><div class="psy-link">Conócelo aquí</div></a>
                <a href="#"><div class="psy-link-cite">Hacer cita</div></a>              
            </div>
        </div>
        @endforeach
        {{$Psy->links()}} 
    </div>
    <!-- Fin Contenido 2 Psicólogos -->
    <!-- Contenido 3 Psicólogos -->
    <div class="grid grid-cols-1 sm:grid-cols-2 content-tree-psy">
        <div class="tree-psy-image">
            <img src="../images/serv-psi.jpg" alt="">
        </div>
        <div class="tree-psy-text">
            <h1>¿Quieres conocer todos nuestros servicios?</h1>
            <h2>Estamos preparados para brindarte una atención integral y de alta complejidad</h2>
            <div class="tree-psy-btn">
                <a href="{{route('service.index')}}">Conócelos aquí</a>
            </div>            
        </div>
    </div>
    <!-- Fin Contenido 3 Psicólogos -->
</div>
@endsection