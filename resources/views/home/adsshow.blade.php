@extends('layout')
@section('title', '{!! $Ad->texto !!}')

@section('Content')
<!-- Banner -->
<div class="banner-blog">
    <div class="content-banner-blog" style="background-image: url({{$Ad->imagebanner}}); background-size:cover; background-position:cover;">        
        <div class="content-banner-blog-info">
            <h1 >{{$Ad->tittle}}</h1>
            <h2>{{$Ad->subtittle}}</h2> 
        </div>
    </div>
</div>
<!-- Fin Banner -->
<div class="Content">
    <div class="content-ads">
        <div class="ads-insert">
            {!! ($Ad->desc) !!}
        </div>        
    </div>   
</div>

@endsection