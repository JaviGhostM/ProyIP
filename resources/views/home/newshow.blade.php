@extends('layout')
@section('title', 'Noticias')

@section('Content')
<!-- Banner -->
<div class="banner-blog">
    <div class="content-banner-blog" style="background-image: url({{$New->bannerimage}}); background-size:cover; background-position:cover;">        
        <div class="content-banner-blog-info">
            <h1 >{{$New->newtittle}}</h1>
        </div>
    </div>
</div>
<!-- Fin Banner -->
<div class="Content">
    <div class="content-ads">
        <div class="ads-insert">
            {!! ($New->newdesc) !!}
        </div>        
    </div>   
</div>
@endsection