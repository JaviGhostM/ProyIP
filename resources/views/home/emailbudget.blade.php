<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Primer correo</h1>
    <h2>Este es una prueba de correos.</h2>
    <p>Asunto: Presupuesto</p>
    <p>Nombre: {{$budget['name']}} {{$budget['app']}} {{$budget['apm']}}</p>
    <p>Fecha de nacimiento: {{$budget['birth']}}</p>
    <p>DNI: {{$budget['DNI']}}</p>
    <p>Género: {{$budget['gender']}}</p>
    <p>Teléfono: {{$budget['phone']}}</p>
    <p>Correo: {{$budget['email']}}</p>
    <h1>Consulta requerida</h1>
    <p>Especialidad: {{$budget['specialty']}}</p>
    <p>Tipo de consulta: {{$budget['consultation']}}</p>
    <p>Fecha con dispocisión: {{$budget['agend']}}</p>
    <p>Mensaje: {{$budget['message']}}</p>
</body>
</html>