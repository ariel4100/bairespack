<!DOCTYPE html>

<html>
<style>
    body {
        font-family: Helvetica, sans-serif;
        color:#494949;
    }

    ul {
        list-style: none;
    }

    div{
        background-color: #F8F8F8;
        width: 85%;
        border-radius:20px;
        padding: 1rem 2rem;
    }
</style>
<body>
<div>
    <h2>Distren</h2>
    <h3>Contacto</h3>
    <p>Enviado desde la web </p>
    <br>
    <h3>Datos del contacto</h3>
    <ul>
        <li><strong>Nombre:</strong>{{ $contacto['nombre'] }}</li>
        <li><strong>Apellido:</strong>{{ $contacto['apellido'] }}</li>
        <li><strong>Email:</strong> {{ $contacto['email'] }}</li>
        <li><strong>Teléfono:</strong> {{ $contacto['telefono'] }}</li>
        <br>
        <br>
        <h4>{{ $contacto['nombre'] }}  {{ $contacto['apellido'] }} le escribe:</h4>
        <p>
            {{ $contacto['mensaje'] }}
        </p>
    </ul>
</div>
</body>
</html>