@extends('layout')
@section('IllaPshychology', 'title')

@section('Content')
    <!-- Banner -->
    <div class="banner-blog">
        <div class="content-banner-blog" style="background-image: url(../images/serv-psi.jpg); background-size:cover; background-position:cover;">        
            <div class="content-banner-blog-info">
                <h1 >¿Necesitas un presupuesto?</h1>
                <h2>¿En qué podemos ayudarte hoy?</h2> 
            </div>
        </div>
    </div>
    <!-- Fin Banner -->
<div class="Content">
    <!-- Texto -->
    <div class="budget-content-one">
        <h1>¿Requieres alguna consulta?</h1>
        <h2>Llena el formulario y nuestro equipo responderá a la brevedad</h2>
    </div>    
    <!-- Fin Texto -->
    <!-- Formulario -->
    <div class="budget-form">
        <div class="budget-text">
            <h1>Datos personales</h1>
        </div>
        <form action="{{route('budget.store')}}" method="POST">
            @csrf
            <div class="budget-form">
                <div class="budget-form-name">
                    <input type="text" name="name" id="name" required="obligatorio" placeholder="Nombre*">
                    <input type="text" name="app" id="app" required="obligatorio" placeholder="Apellido paterno*">
                    <input type="text" name="apm" id="apm" required="obligatorio" placeholder="Apellido Materno*">
                </div>
                <div class="budget-form-other">
                    <input type="date" name="birth" id="birth" required="obligatorio" placeholder="Fecha de nacimiento*">
                    <input type="text" name="DNI" id="DNI" required="obligatorio" placeholder="DNI*">
                    <select name="gender" id="gender">
                        <option value="1" selected>Selecciona una opción</option>
                        <option value="Hombre">Hombre</option>
                        <option value="Mujer">Mujer</option>
                    </select>
                </div>
                <div class="budget-form-contact">
                    <input type="text" name="phone" id="phone" required="obligatorio" placeholder="Teléfono*">
                    <input type="text" name="email" id="email" required="obligatorio" placeholder="Correo electrónico*">
                </div>
                <div class="budget-text">
                    <h1>Datos de consulta</h1>
                </div>
                <div class="budget-form-name">
                    <input type="text" name="specialty" id="specialty" placeholder="Especialidad">
                    <input type="text" name="consultation" id="consultation" placeholder="Tipo de consulta">
                    <input type="date" name="agend" id="agend" placeholder="Día a agendar">
                </div>
                <div class="budget-form-message">
                    <textarea name="message" class="texto_mensaje" id="mensaje" placeholder="Deja aquí tu comentario..."></textarea>
                </div>
                <div class="budget-form-send">
                    <p><input class="check_politica" type="checkbox" name="politica" id="politica" required="obligatorio">  Acepto la <a href="#" target="_blank">Política de privacidad de la información</a>.</p>
                      <p><input class="check_politica" type="checkbox" name="politica" id="politica" required="obligatorio">  Acepto la <a href="#" target="_blank">Política de cookies</a>.</p>
                      <button type="submit" name="enviar_formulario" id="enviar"><p>Enviar</p></button>
                      <p class="aviso">
                        <span class="obligatorio"> * </span>los campos son obligatorios.
                      </p>
                </div>
            </div>
                           
        </form>        
    </div>
    <!-- Fin Formulario -->
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