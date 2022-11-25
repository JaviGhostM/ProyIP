@extends('layout')
@section('title', 'Noticias')

@section('Content')
<!-- Banner -->
<div class="banner-blog">
    <div class="content-banner-blog" style="background-image: url({{$Serv->bannerimage}}); background-size:cover; background-position:cover;">        
        <div class="content-banner-blog-info">
            <h1 >{{$Serv->tittle}}</h1>
        </div>
    </div>
</div>
<!-- Fin Banner -->
<div class="Content">
    <div class="content-ads">
        <div class="ads-insert">
            {!! ($Serv->desc) !!}
        </div>        
    </div>   
</div>
@endsection