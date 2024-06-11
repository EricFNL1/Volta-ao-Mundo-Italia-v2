<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Pontos Turisticos.</title>
</head>
<body class="background">
    <h1>Pontos Turisticos!</h1>
    <nav class="navbar navbar-expand-lg navbarcolor">
        <div id="logo">
            <a href="{{ route('index') }}"><img class="img-fluid ml-5" width="100px" height="100px" src="img/genoa-italy.gif"></a>
        </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="btn btn-secondary dropdown-toggle"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav mx-auto mt-3 mb-2">
                <li class="nav-item active" id="cab">
                    <a class="nav-link mx-5 font-menu" href="{{ route('index') }}">Home</a>
                </li>
                <li class="nav-item" id="cab">
                    <a class="nav-link mx-5 font-menu" href="{{ route('cultura') }}">Cultura</a>
                </li>
                <li class="nav-item" id="cab">
                    <a class="nav-link mx-5 font-menu" href="{{ route('pontturisticos') }}">Pontos turísticos</a>
                </li>
                <li class="nav-item" id="cab">
                    <a class="nav-link mx-5 font-menu" href="{{ route('historia') }}">História</a>
                </li>

                @if (Auth::check())
                    @if (Auth::user()->id == 3)
                        <li class="nav-item" id="cab">
                            <a class="nav-link mx-5 font-menu" href="{{ route('admin.comments.index') }}">Painel Administrativo</a>
                        </li>
                    @endif
                    <li class="nav-item" id="cab">
                        <a class="nav-link mx-5 font-menu" href="{{ route('logout') }}"
                           onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            Logout
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </li>
                @else
                    <li class="nav-item" id="cab">
                        <a class="nav-link mx-5 font-menu" href="{{ route('login') }}">Login</a>
                    </li>
                @endif
            </ul>
        </div>
    </nav>

    <div class="container mt-3 text-center">
            @if ($weatherData)
                @foreach ($weatherData as $city => $weather)
                    <div class="weather-info d-inline-block mx-3">
                        <strong>{{ $city }}</strong>: {{ $weather['main']['temp'] }} °C, {{ $weather['weather'][0]['description'] }}
                    </div>
                @endforeach
            @else
                <p>Não foi possível obter os dados meteorológicos.</p>
            @endif
        </div>

    <div class="container mt-3">
        <div class="row">
            <!-- Cards de Pontos Turísticos -->
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-4 mb-4">
                        <div class="card">
                            <img class="card-img-top" src="img/coliseu-roma-italia-1-1024x683.jpg" alt="Imagem de capa do card">
                            <div class="card-body">
                                <h2 class="card-title">Coliseu de Roma</h2>
                                <p class="card-text">Comece sua incrível jornada na Itália visitando os pontos mais históricos de Roma. Símbolo da Itália e do Império romano, o Coliseu em Roma é um dos monumentos mais famosos do mundo e atrai nada mais nada menos do que 4 milhões de turistas todos os anos.
                                    <div class="card-text ler-mais-content">
                                        Sua construção se iniciou no ano de 72 d.C. e, durante décadas, serviu de palco para gladiadores que lutavam entre si ou com animais para um público de mais de 70 mil romanos. A visita às ruínas do Coliseu é um passeio obrigatório a todos os turistas que visitam Roma, não somente por sua grandeza mas por toda a sua história.
                                    </p>
                                    </div>
                                <button class="btn btn-primary ler-mais mt-2">Ler mais</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="card">
                            <img class="card-img-top" height="227px" src="img/veneza-ponte-dos-suspiros-italia.png" alt="Imagem de capa do card">
                            <div class="card-body">
                                <h2 class="card-title">Ponte dos Suspiros de Veneza</h2>
                                <p class="card-text">Outra ponte famosa da cidade é a dos Suspiros, que liga o Palazzo Ducale ao prédio onde funcionava a antiga prisão de Veneza. Por mais que seja uma ponte linda e que conquista turistas no primeiro olhar, a Ponte dos Suspiros tem esse nome por causa de prisioneiros.
                                    <div class="card-text ler-mais-content">
                                        a lenda, eles suspiravam ao passarem por ali, vendo o mundo pela última vez. É possível ver a ponte por três ângulos: do passeio de gôndola, da Ponte dela Canonica e da Ponte dela Paglia, situada ao lado do Palácio Ducal.
                                    </div>
                                <button class="btn btn-primary ler-mais mt-2">Ler mais</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="card">
                            <img class="card-img-top" height="227px" src="img/pisa5.jpg" alt="Imagem de capa do card">
                            <div class="card-body">
                                <h2 class="card-title">Torre inclinada de Pisa</h2>
                                <p class="card-text">Ir à Itália e não visitar um dos seus mais famosos pontos turísticos é como perder a chance de explorar bem cada região do país. A torre inclinada, mais conhecida como Torre de Pisa, está localizada no centro da cidade e é a verdadeira atração para os visitantes que vão até lá.
                                    <div class="card-text ler-mais-content">
                                        Já virou quase que uma tradição os seus turistas irem até o local e fazerem fotos engraçadas com o formato da torre. Por isso, não perca esta chance e aproveite também para apreciá-la em seus mínimos detalhes e ter a sensação de estar “tombando” para o lado quando subir seus mais de 300 degraus. Vale muito a pena!
                                    </div>
                                <button class="btn btn-primary ler-mais mt-2">Ler mais</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>

    <footer class="bg-secondary text-white pt-1 pb-1 mt-4">
        <div class="container text-center text-md-left">
            <div class="col-md-12 text-center mx-auto">
                <a href="https://github.com/EricFNL1"><img src="img/Github-Logo-Transparent-Background-PNG.png" width="100px" alt=""></a>
                <a href="https://www.instagram.com/erictech957/"><img src="img/instagram-logo-png-transparent-background.png" width="50px" alt=""></a>
                <a href="https://www.linkedin.com/in/ericf12/"><img src="img/linkedin-in-logo-png-1.png" class="ml-2" width="70px" alt=""></a>
                <h5 class="ml-3 mt-2">Desenvolvido por Eric Junior</h5>
            </div>
        </div>
    </footer>

    <script src="javascritpitalia.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script>$().button('toggle')</script>
    <script>$().button('dispose')</script>
</body>
</html>
