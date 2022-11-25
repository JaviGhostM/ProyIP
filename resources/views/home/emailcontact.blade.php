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
    <p>Asunto: {{$contact['asunto']}}</p>
    <p>Nombre: {{$contact['name']}}</p>
    <p>Correo: {{$contact['email']}}</p>
    <p>Teléfono: {{$contact['phone']}}</p>
    <p>Mensaje: {{$contact['message']}}</p>
</body>
</html>