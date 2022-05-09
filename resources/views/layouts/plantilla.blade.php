<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <script src="https://cdn.tailwindcss.com"></script>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
	<title>Futbol Gestion</title>
</head>
<body>
    <header>
        <section class="flex flex-wrap items-center">
            <img src="{{URL::asset('/portada.jpg')}}"  class="h-450">
            <div class="items-center place-content-center">
                <div class="font-serif font-bold text-8xl text-orange-500 italic ">FutGes App</div>
                <h2 class="text-2xl">Tu aplicación de gestión de equipos y partidos</h2>
            
            </div>
            <p class= "italic text-center">Joli</p>
        </section>
        
    </header>
    
    <div class="content">
    @yield('content')
    </div>
</body>
</html>

