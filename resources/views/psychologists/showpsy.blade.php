@extends('layout')
@section('title', 'Psicólogos')

@section('Content')
<!-- Banner -->
<div class="banner-blog">
    <div class="content-banner-blog" style="background-image: url( {{asset('images/equipo-trabajo.jpg')}}); background-size:cover; background-position:cover;">        
        <div class="content-banner-blog-info">
            <h1 >Nuestros psicólogos</h1>
            <h2>Estamos para atenderte</h2> 
        </div>
    </div>
</div>
<!-- Fin Banner -->
<div class="Content">
    <div class="sup-content-psy-info">
        <div class="content-info-psy">
            <div class="info-psy-name">
                <img src="{{$Psy->image}}" alt="">
                <h1>{{$Psy->name}} {{$Psy->app}} {{$Psy->apm}}</h1>
                <a href="#">
                <div class="info-psy-name-btn">
                    Agenda una cita
                </div></a>
            </div>
            <div class="info-psy-profession">
                <div class="info-psy-profession-content">
                    <div class="info-psy-profession-icon">
                        <i class="fa fa-drivers-license-o" aria-hidden="true"></i>
                    </div>
                    <div class="info-psy-prefession-desc">
                        <h1>Especialidad:</h1>
                        <p>{{$Psy->specialty}}</p>
                    </div>
                </div>  
                <div class="info-psy-profession-content">
                    <div class="info-psy-profession-icon">
                        <i class="fa fa-drivers-license-o" aria-hidden="true"></i>
                    </div>
                    <div class="info-psy-prefession-desc">
                        <h1>Áreas de interés:</h1>
                        <p>{{$Psy->area}}</p>
                    </div>
                </div> 
                <div class="info-psy-profession-content">
                    <div class="info-psy-profession-icon">
                        <i class="fa fa-drivers-license-o" aria-hidden="true"></i>
                    </div>
                    <div class="info-psy-prefession-desc">
                        <h1>Tipo de atención:</h1>
                        <p>{{$Psy->typeatt}}</p>
                    </div>
                </div>               
            </div>
        </div>
        <div class="content-info-psy-desc">
            <h1><i class="fa fa-address-card" aria-hidden="true"></i>  Trayectoria y formación</h1>
            <div class="info-psy-desc">
                {!! $Psy->descprofession !!}
            </div>
        </div>
    </div>
    <!-- Contenido 3 Psicólogos -->
    <div class="grid grid-cols-1 sm:grid-cols-2 content-tree-psy">
        <div class="tree-psy-image">
            <img src="{{asset('images/serv-psi.jpg')}}" alt="">
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