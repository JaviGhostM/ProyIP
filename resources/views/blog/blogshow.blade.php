@extends('layout')
@section('title', 'Noticias')

@section('Content')
<!-- Banner -->
<div class="banner-blog">
    <div class="content-banner-blog" style="background-image: url({{$Blog->bannerimage}}); background-size:cover; background-position:cover;">        
        <div class="content-banner-blog-info">
            <h1 >{{$Blog->tittle}}</h1>
        </div>
    </div>
</div>
<!-- Fin Banner -->
<div class="Content">
    <div class="content-ads">
        <div class="ads-insert">
            {!! ($Blog->desc) !!}
        </div>        
    </div>   
</div>
@endsection