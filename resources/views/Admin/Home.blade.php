@extends('layoutadmin')

@section('Content')
<script type="text/javascript" src="{{asset('js/ckeditor.js')}}"></script>
<form action="{{route('admin.store.slider')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <label>Texto superior:</label>
    <input type="text" name="texto1"><br/>
    <label>Texto inferior:</label>
    <input type="text" name="texto2"><br/>
    <label>Imagen de fondo:</label>
    <input type="file" name="image" accept="image/*"><br/>
    @error('image')
    <small>{{$message}}</small>
    @enderror
    <button type="submit">Crear Slider</button>
</form><br/><br/>
<form action="{{route('admin.store.banner')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <label>Texto:</label>
    <input type="text" name="texto"><br/>
    <label>Imagen de fondo:</label>
    <input type="file" name="image" accept="image/*"><br/>
    @error('image')
    <small>{{$message}}</small>
    @enderror
    <button type="submit">Crear Banner</button>
</form><br/><br/>
<form action="{{route('admin.store.ad')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <label>Ícono de inicio:</label>
    <input type="file" name="image" accept="image/*"><br/>
    @error('image')
    <small>{{$message}}</small>
    @enderror
    <label>Texto de inicio:</label>
    <input type="text" name="texto"><br/>
    <label>Imagen de banner:</label>
    <input type="file" name="imagebanner" accept="image/*"><br/>
    @error('image')
    <small>{{$message}}</small>
    @enderror
    <label>Título del enlace:</label>
    <input type="text" name="tittle"><br/>
    <label>Subtítulo del enlace:</label>
    <input type="text" name="subtittle"><br/>    
    <textarea name="desc" id="ckeditor" class="ckeditor"></textarea>    
    <br/>
    <button type="submit">Crear Enlaces</button>
</form><br/><br/>
<form action="{{route('admin.store.new')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <label>Imagen banner home:</label>
    <input type="file" name="homeimage" accept="image/*"><br/>
    @error('homeimage')
    <small>{{$message}}</small>
    @enderror
    <label>Título home:</label>
    <input type="text" name="hometittle"><br/>
    <label>Descripción home:</label>
    <input type="text" name="homedesc"><br/>
    <label>Imagen Banner:</label>
    <input type="file" name="bannerimage" accept="image/*"><br/>
    @error('bannerimage')
    <small>{{$message}}</small>
    @enderror
    <label>Título Noticia:</label>
    <input type="text" name="newtittle"><br/>
    <label>Descripción Noticia:</label>
    <textarea name="newdesc" id="ckeditor" class="ckeditor"></textarea>    
    <br/>
    <button type="submit">Crear Noticia</button>
</form><br/><br/>
<form action="{{route('admin.store.psy')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <label>Nombre:</label>
    <input type="text" name="name"><br/>
    <label>Apellido Paterno:</label>
    <input type="text" name="app"><br/>
    <label>Apellido Materno:</label>
    <input type="text" name="apm"><br/>
    <label>Especialidad:</label>
    <input type="text" name="specialty"><br/>
    <label>No de colegiatura:</label>
    <input type="text" name="NDC"><br/>
    <label>Detalle de profesión:</label>
    <input type="text" name="descprofession"><br/>
    <label>Foto:</label>
    <input type="file" name="image" accept="image/*"><br/>
    @error('image')
    <small>{{$message}}</small>
    @enderror
    <button type="submit">Cargar Psicólogo</button>
</form><br/><br/>
<form action="{{route('admin.store.service')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <label>Imagen banner caja:</label>
    <input type="file" name="boximage" accept="image/*"><br/>
    @error('boximage')
    <small>{{$message}}</small>
    @enderror
    <label>Título home:</label>
    <input type="text" name="boxtittle"><br/>
    <label>Descripción home:</label>
    <input type="text" name="boxdesc"><br/>
    <label>Imagen Banner:</label>
    <input type="file" name="bannerimage" accept="image/*"><br/>
    @error('bannerimage')
    <small>{{$message}}</small>
    @enderror
    <label>Título Noticia:</label>
    <input type="text" name="tittle"><br/>
    <label>Descripción Noticia:</label>
    <textarea name="desc" id="ckeditor" class="ckeditor"></textarea>    
    <br/>    
    <button type="submit">Crear Servicio</button>
</form><br/><br/>
<form action="{{route('admin.store.program')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <label>Imagen banner caja:</label>
    <input type="file" name="boximage" accept="image/*"><br/>
    @error('boximage')
    <small>{{$message}}</small>
    @enderror
    <label>Título home:</label>
    <input type="text" name="boxtittle"><br/>
    <label>Descripción home:</label>
    <input type="text" name="boxdesc"><br/>
    <label>Imagen Banner:</label>
    <input type="file" name="bannerimage" accept="image/*"><br/>
    @error('bannerimage')
    <small>{{$message}}</small>
    @enderror
    <label>Título Noticia:</label>
    <input type="text" name="tittle"><br/>
    <label>Descripción Noticia:</label>
    <textarea name="desc" id="ckeditor" class="ckeditor"></textarea>    
    <br/>
    <button type="submit">Crear Programa</button>
</form><br/><br/>
<form action="{{route('admin.store.blog')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <label>Imagen banner caja:</label>
    <input type="file" name="boximage" accept="image/*"><br/>
    @error('boximage')
    <small>{{$message}}</small>
    @enderror
    <label>Título home:</label>
    <input type="text" name="boxtittle"><br/>
    <label>Descripción home:</label>
    <input type="text" name="boxdesc"><br/>
    <label>Imagen Banner:</label>
    <input type="file" name="bannerimage" accept="image/*"><br/>
    @error('bannerimage')
    <small>{{$message}}</small>
    @enderror
    <label>Título Noticia:</label>
    <input type="text" name="tittle"><br/>
    <label>Descripción Noticia:</label>
    <textarea name="desc" id="ckeditor" class="ckeditor"></textarea>    
    <br/>
    <button type="submit">Crear Blog</button>
</form><br/><br/>
<script type="text/javascript">
    CKEDITOR.replace('ckeditor');
</script>
@endsection