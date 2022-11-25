@extends('layout')
@section('Servicios', 'title')

@section('Content')
<!-- Banner -->
<div class="banner-blog">
    <div class="content-banner-blog" style="background-image: url({{asset('images/new-banner.jpg')}}); background-size:cover; background-position:cover;">        
        <div class="content-banner-blog-info">
            <h1 >Nuestros servicios</h1>
            <h2>Estamos preparados para brindarte una atención integral y de alta complejidad.</h2>
    </div>
</div>
<!-- Fin Banner -->
<div class="Content">
    <!-- Contenedor 1 -->
    <div class="content-one-service">
        <div class="content-one-service-text">
            <h1>Te ofrecemos una atención de calidad de la mano de los mejores profesionales, infraestructura y equipamiento.</h1>
        </div>        
    </div>
    <!-- Fin Contenedor 1 -->
</div>
    <!-- Contenedor 2 -->
    <div class="content-two-service">
        <div class="content-two-service-text">
            <h1>Conoce nuestros servicios</h1>
            <p>Ponemos a tu disposición distintos servicios para el cuidado de tu salud.</p>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 content-two-service-two justify-items-center"> 
            @foreach($Service as $Services)           
            <div Class="seleccion-opc-service">
                <div class="icon-service">
                    <img src="{{$Services->boximage}}" alt="">
                </div>
                    <p>{{$Services->boxtittle}}</p>
                    <span>{{$Services->boxdesc}}</span> 
                    <a href="{{route('service.show', $Services)}}">Ver más...</a>
            </div>
            @endforeach
        </div>
    </div>
    <!-- Fin Contendor 2 -->
    <!-- Contenedor 3 -->
    <div class="content-tree-service">
        <div class="content-two-service">
            <div class="content-two-service-text">
                <h1>Planes y programas</h1>
                <p>Hemos diseñado diferentes programas pensando en ti.</p>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 content-two-service-two justify-items-center"> 
                @foreach($Program as $Programs)           
                <div Class="seleccion-opc-service">
                    <div class="icon-service">
                        <img src="{{$Programs->boximage}}" alt="">
                    </div>
                        <p>{{$Programs->boxtittle}}</p>
                        <span>{{$Programs->boxdesc}}</span> 
                        <a href="{{route('program.show', $Programs)}}">Ver más...</a>
                </div>
                @endforeach
            </div>
        </div>
    </div>    
    <!-- Fin Contendor 3 -->
@endsection