@extends('layout')
@section('Blog', 'title')

@section('Content')

    <!-- Banner -->
    <div class="banner-blog">
        <div class="content-banner-blog" style="background-image: url(../images/serv-psi.jpg); background-size:cover; background-position:cover;">        
            <div class="content-banner-blog-info">
                <h1 >Tips para tu bienestar</h1>
                <h2>Todo lo que necesitas saber</h2> 
            </div>
        </div>
    </div>
    <!-- Fin Banner -->
<div class="Content">
    <!-- Contenido 1 Artículos -->
    <div class="blog-content-one">
        @foreach ($Blog as $Blogs) 
        <div class="blog-content-one-box">
            <div class="blog-box-info">
                <div class="blog-box-info-image">
                    <img src="{{$Blogs->boximage}}" alt="">
                </div>
                <div class="blog-box-info-text">
                    <h1>{{$Blogs->boxtittle}}</h1>
                    <h2>{{$Blogs->boxdesc}}</h2>
                   <div class="btn-blog"><a href="{{route('blog.show', $Blogs)}}">Aprende más</a></div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    <!-- Fin Contenido 1 Artículos -->
</div>
@endsection