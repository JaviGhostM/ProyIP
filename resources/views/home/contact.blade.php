@extends('layout')
@section('Psicólogos', 'title')

@section('Content')
<div class="Content">
    <!-- Banner -->
    <div class="content-banner">
        <div class="banner-service fade">            
            <h2>Estamos aquí para atenderte, estamos cerca tuyo.</h2>
            <h1>Contacta con nosotros</h1>
            <img src="../public/images/serviciosdemoWEB.jpg" alt="">
        </div>
    </div>
    <!-- Fin Banner -->
    <!-- formulario de contacto en html y css -->
    <div class="contact_form">
        <div class="formulario">      
            <h1>Déjanos tu mensaje</h1>
              <h3>Escríbenos y en breve los pondremos en contacto contigo.</h3>
                <form action="{{route('contact.store')}}" method="POST">
                  @csrf
                  <div class="grid grid-cols-1 sm:grid-cols-2">
                      <div class="form-data">
                          <p>
                              <label for="nombre" class="colocar_nombre">Nombre <span class="obligatorio">*</span>
                              </label>
                                <input type="text" name="name" id="nombre" required="obligatorio" placeholder="Escribe tu nombre">                    
                            </p>
                            <p>
                              <label for="email" class="colocar_email">Email
                                <span class="obligatorio">*</span>
                              </label>
                                <input type="email" name="email" id="email" required="obligatorio" placeholder="Escribe tu Email">                    
                            </p>
                            <p>
                              <label for="telefone" class="colocar_telefono">Teléfono
                              </label>
                                <input type="tel" name="phone" id="telefono" placeholder="Escribe tu teléfono">
                            </p> 
                            <p>
                              <label for="asunto" class="colocar_asunto">Asunto
                                <span class="obligatorio">*</span>
                              </label>
                                <input type="text" name="asunto" id="assunto" required="obligatorio" placeholder="Escribe un asunto">                    
                            </p>  
                      </div>
                      <div class="form-message">
                          <p>
                                <label for="mensaje" class="colocar_mensaje">Mensaje
                                <span class="obligatorio">*</span>
                                </label>                     
                                <textarea name="message" class="texto_mensaje" id="mensaje" required="obligatorio" placeholder="Deja aquí tu comentario..."></textarea>                     
                            </p>
                      </div>
                  </div>  
                      <p><input class="check_politica" type="checkbox" name="politica" id="politica" required="obligatorio">  Acepto la <a href="#" target="_blank">Política de privacidad de la información</a>.</p>
                      <p><input class="check_politica" type="checkbox" name="politica" id="politica" required="obligatorio">  Acepto la <a href="#" target="_blank">Política de cookies</a>.</p>
                      <button type="submit" name="enviar_formulario" id="enviar"><p>Enviar</p></button>
                      <p class="aviso">
                        <span class="obligatorio"> * </span>los campos son obligatorios.
                      </p>  
                </form>
        </div>  
    </div>
    <!-- Fin Formulario de contacto -->
    <!-- Contenido 2 BannerServ -->
    <div class="grid grid-cols-1 sm:grid-cols-2 content-tree-psy">
        <div class="tree-psy-image">
            <img src="../images/serv-psi.jpg" alt="">
        </div>
        <div class="tree-psy-text">
        <h1>¿Quieres conocer todos nuestras especialidades?</h1>
        <h2>Estamos preparados para brindarte una atención integral y de alta complejidad</h2>
        <div class="tree-psy-btn">
            <a href="{{route('psy.index')}}">Conócelos aquí</a>
        </div>            
        </div>
    </div>
    <!-- Fin Contenido 3 BannerServ -->
</div>
<!-- Redes Sociales -->
<div class="contact-content-one" style="background-image: url(../images/grisweb.jpg); background-size:cover; background-position:cover;">
    <h1>Forma parte de nuestra comunidad</h1>
        <h2>Siguenos en nuestras redes</h2>
        <div class="box-icon-redsocial">            
           <div class="icon-redsocial"><a href="#"><i class="fa fa-facebook"></i></a></div>
           <div class="icon-redsocial"><a href="#"><i class="fa fa-facebook"></i></a></div>
          <div class="icon-redsocial"><a href="#"><i class="fa fa-facebook"></i></a></div>
        </div>
</div>
<!-- Fin Redes sociales -->
<!-- Dirección -->
<div class="content-five">
    <div class="content-five-text">
        <p>Estamos cerca de ti y tu familia</p>
    </div>
    <div class="content-five-direction" style="background-image: url(../images/maps-illa.jpeg); background-size:cover; background-position:cover;">        
        <div class="content-five-direction-info">
            <h1 style="border-bottom: #ffffff 1px solid; padding-bottom: 5px; margin-bottom: 15px;">Nuestra responsabilidad es contigo</h1>
            <div class="content-five-direction-icon">
                <img src="../images/icono-localizar.png" alt="">
            </div> 
            <p>
               <span style="font-size: 2vw; font-weight: 600">UBICACIÓN DE NUESTRA SEDE</span><br/>
                Av. Esteban Pabletich manzana A - Lote 11 <br/>
                Teléfono: +51 970 089 580<br/>
                Correo: illanetzx22@gmail.com

            </p>
            <div class="content-five-direction-btn">
               <a href="https://www.google.com.mx/maps/place/ILLANETZ/@-9.9472731,-76.2453451,17z/data=!3m1!4b1!4m5!3m4!1s0x91a7c3e372165653:0x224443ef0e652fc6!8m2!3d-9.9472842!4d-76.2431535?hl=es&authuser=0" target="_blank"><span>Localizar con Google Maps</span></a>
            </div>
        </div>
        
    </div>
</div>
<!-- Fin dirección -->
@if(session('info'))
<script>
    alert("{{session('info')}}")
</script>
@endif
@endsection