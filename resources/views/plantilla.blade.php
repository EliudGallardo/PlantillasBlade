<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('resources/css/app.css') }}">
    <title>Practica con blade</title>
</head>
<body>
    <section class="v-100">
        @include('components.navbar') <!-- Se corrigió la referencia -->
        <div class="container mt-4">
            @yield('contenido')
        </div>
    </section>  
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>

<style>
    body {
        background-color: #000;
        color: #fff;
    }

    h1 {
        color:rgb(63, 235, 235);
        text-shadow: 0px 0px 8px #00FFFF;
        margin-bottom: 20px;
    }
    h2 {
        color:rgb(236, 20, 121);
        text-shadow: 0px 0px 8px #00FFFF;
        margin-bottom: 20px;
    }

    img {
        border: 4px solid #FF00FF;
        border-radius: 10px;
        box-shadow: 0px 0px 12px #FF00FF;
        margin: 20px 0;
        display: block;
        margin-left: auto;
        margin-right: auto;
    }
</style>

