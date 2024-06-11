<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>Página Inicial.</title>
</head>
<body class="background">
    <h1>Itália</h1>  
      <nav class="navbar navbar-expand-lg navbarcolor" >
         <div id="logo">
          <a href="{{ route('index') }}"><img class="img-fluid  ml-5 " width="100px" height="100px" src="img/genoa-italy.gif"></a>
        </div>
        <button class="navbar-toggler" type="button"  data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="btn btn-secondary dropdown-toggle" ></span>
        </button>
        <div class="collapse navbar-collapse " id="navbarTogglerDemo02">
            <ul class="navbar-nav mx-auto mt-3 mb-2">
                <li class="nav-item active " id="cab">
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
      <div id="carouselExampleIndicators" class="carousel slide container" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>

        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" width="800px" height="400px" src="img/Italia-Roteiro3-compressor.jpg" alt="Primeiro Slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" width="800px" height="400px" src="img/veneza-o-que-ver-e-fazer-grande-canal.jpg" alt="Segundo Slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" width="800px" height="400px" src="img/roma_italia(1).jpg" alt="Terceiro Slide">
          </div>
        </div>
        
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Anterior</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Próximo</span>
        </a>
      </div>
      <br>
      <br>
      <div class="row container text-center mx-auto">
        <div class="col-md-4">
          <div class="card regulartexto">
            <div class="card-body">
              <h2 class="card-title">Cultura italiana</h2>
              <p class="card-text">A cultura italiana está mergulhada nas artes, família, arquitetura, música e comida. Casa do Império Romano e um importante centro do Renascimento, a cultura da península italiana floresceu durante séculos. Aqui está uma breve visão geral dos costumes e tradições italianas. </p>
              <a href="{{ route('cultura') }}" class="btn btn-primary">Veja mais</a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card regulartexto">
            <div class="card-body">
              <h2 class="card-title">Pontos turísticos</h2>
              <p class="card-text">Comece sua incrível jornada na Itália visitando os pontos mais históricos de Roma. Símbolo da Itália e do Império romano, o Coliseu em Roma é um dos monumentos mais famosos do mundo, há também outros pontos turísticos como os passeios nos canais de Veneza, também há cidades como Milão.</p>
              <a href="{{ route('pontturisticos') }}" class="btn btn-primary">Veja mais</a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card regulartexto">
            <div class="card-body">
              <h2 class="card-title">História</h2>
              <p class="card-text">A Itália é um país da Europa meridional que faz fronteira ao norte com França, Suíça, Áustria e Eslovênia, cujo território principal forma uma península no mar Mediterrâneo e inclui duas grandes ilhas, a Sicília e a Sardenha. Sofreu, historicamente, a influência de etruscos, gregos e celtas.</p>
              <a href="{{ route('historia') }}" class="btn btn-primary">Veja mais</a>
            </div>
          </div>
        </div>
      </div>
      <div class="row container text-center mx-auto mt-2">
        <div class="card text-center col-md-12">
          <div class="card-body">
            <p class="card-text">Gostou do conteúdo acima?, clique no botão abaixo e receba mais informações abaixo!.</p>
            <a href="{{ route('register') }}" class="btn btn-danger">Inscreva-se</a>
          </div>
        </div>
      </div>
      <div class="container mt-3">
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <form method="POST" action="{{ route('comments.store') }}">
            @csrf
            <div class="form-group">
                <label for="comment">Deixe um Comentário:</label>
                <textarea name="comment" id="comment" class="form-control" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
        @if(isset($comments) && $comments->isEmpty())
        @elseif(isset($comments))
            @foreach($comments as $comment)
                <div class="comment">
                    <p><strong>{{ $comment->user->name }}</strong>: {{ $comment->comment }}</p>
                </div>
            @endforeach
        @else
        @endif
    </div>
    <div class="container">
      <a href="{{ route('comments.approved') }}">Clique aqui para exibir todos os comentarios</a>
    </div>
      <br>
      <br>
      <footer class="bg-secondary text-white pt-1 pb-1">
          <div class="container text-center text-md-left">
             <div class="col-md-12 text-center mx-auto ">
                <a href="https://github.com/EricFNL1"><img src="img/Github-Logo-Transparent-Background-PNG.png" width="100px" alt=""></a>
                <a href="https://www.instagram.com/erictech957/"><img src="img/instagram-logo-png-transparent-background.png" width="50px" alt=""></a>
                <a href="https://www.linkedin.com/in/ericf12/"><img src="img/linkedin-in-logo-png-1.png" class="ml-2" width="70px" alt=""></a>
                <h5 class="ml-3 mt-2">Desenvolvido por Eric Junior</h5>
              </div>
          </div>
      </footer>
     

    
    <script src="{{ asset('js/javascritpitalia.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script>$().button('toggle')</script>
    <script>$().button('dispose')</script>
</body>
</html>
