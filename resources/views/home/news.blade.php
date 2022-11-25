@extends('layout')
@section('title', 'Noticias')

@section('Content')
<!-- Banner -->
<div class="banner-blog">
    <div class="content-banner-blog" style="background-image: url({{asset('images/new-banner.jpg')}}); background-size:cover; background-position:cover;">        
        <div class="content-banner-blog-info">
            <h1 >Te mantenemos informado</h1>
            <h2>Revisa nuestras recientes noticias</h2>
        </div>
    </div>
</div>
<!-- Fin Banner -->
<div class="Content">
<!-- Carrusel de noticias -->
<div class="content-four">
    <p>Profesionales formados en Psicología y Recursos Humanos: hemos desarrollado nuestra experiencia en Consultoría y en empresas a nivel nacional e internacional, ofreciendo un servicio innovador en adquisición de talento, acompañamiento paso a paso y ofreciendo soluciones a medida.</p>
    <p></p>
    <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 gap-5 content-four-new">
        @foreach ($New as $News)
        <div class="content-four-new-box">
            <div class="content-four-new-box-img"><img src="{{$News->homeimage}}" alt=""></div>
            <div><h2 class="new-title">{{$News->hometittle}}</h2></div>
            <div><h3 class="new-date">{{$News->created_at}}</h3></div>
            <div><h3 class="new-description">{{$News->homedesc}}</h3></div>
            <div class="new-more"><a href="{{route('news.show', $News)}}">Ver más...</a></div>
        </div>
        @endforeach
        {{$Psy->links()}} 
    </div>
</div>
<!-- Fin Carrusel de noticias -->
</div>

@endsection

