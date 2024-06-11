<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Cultura</title>
</head>
<body class="background">
    <h1>Cultura Italiana.</h1>
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
      <div class="row container text-center mx-auto mt-3">
        <div class="col-md-4">
          <div class="card">
            <img class="card-img-top" src="img/idioma-na-italia-1.webp" alt="Imagem de capa do card">
            <div class="card-body">
              <h2 class="card-title">Idiomas da Itália</h2>
              <p class="card-text">A língua oficial do país é o italiano. Cerca de 93% da população italiana fala italiano como língua nativa, de acordo com a BBC. Existem vários dialetos da língua falada no país, incluindo:
                <div class="card-text ler-mais-content">
                  Sardenha; <br>
                  Friuliano;<br>
                  Napolitano;<br>
                  Siciliano;<br>
                  Liguriano;<br>
                  Piemontês;<br>
                  Veneziano;<br>
                  Calábrio.<br>
                  Outras línguas faladas pelos italianos nativos incluem o albanês, o bávaro, o catalão, o cimbriano, o corso, o croata, o francês, o alemão, o grego, o esloveno e o walser.</p>
                </div>
                <button class="btn btn-primary ler-mais mt-2">Ler mais</button>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card">
            <img class="card-img-top" src="img/pizza-marguerita.webp" alt="Imagem de capa do card">
            <div class="card-body">
              <h2 class="card-title">Culinária Italiana</h2>
              <p class="card-text ">A cozinha italiana influenciou a cultura alimentar em todo o mundo, vista por muitos como arte . Vinho, queijo e massas são parte importante das refeições italianas.
                Massas tem difrentes formas. </p>
              <div class="card-text ler-mais-content">
                Para os italianos, a comida não é apenas alimento, é a vida. As reuniões familiares são frequentes e muitas vezes centradas em alimentos.
                
                Nenhuma área da Itália come as mesmas coisas que a outra. Cada região tem sua própria “comida italiana”. Por exemplo, a maioria dos alimentos que os brasileiros vêem como italianos, como espaguete e pizza, vem do centro da Itália.
              </div>
              <button class="btn btn-primary ler-mais mt-2">Ler mais</button>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card">
            <img class="card-img-top" src="img/OIP.jpeg" alt="Imagem de capa do card">
            <div class="card-body">
              <h2 class="card-title">Feriados Italianos</h2>
              <p class="card-text">Os italianos celebram a maioria dos feriados cristãos. A celebração da Epifania, celebrada em 6 de janeiro, é muito parecida com o Natal. Existe a figura da Belfana, uma velha senhora que 
                
               </p>
                <div class="card-text ler-mais-content">
                  voa em sua vassoura, entrega presentes e guloseimas a crianças comportadas.

                Pasquetta, na segunda-feira depois da Páscoa, normalmente envolve piqueniques de família para marcar o início da primavera.
                  O dia 1 de novembro comemora o Dia dos Santos, um feriado religioso durante o qual os italianos tipicamente decoram as sepulturas de parentes falecidos com flores.
                
                  Muitas cidades e aldeias italianas celebram o dia de seu santo padroeiro. 19 de setembro, por exemplo, é a festa de San Gennaro, o santo padroeiro do Napoli.
                  
                  25 de abril é o dia da libertação, marcando a libertação de 1945, que terminou a Segunda Guerra Mundial na Itália.
                </div>
                <button class="btn btn-primary ler-mais mt-2">Ler mais</button>
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
<br>
<br>
<br>
<br>
<br>
<br>

      <footer class="bg-secondary text-white pt-1 pb-1">
        <div class="text-center text-md-left">
           <div class="col-md-12 text-center mx-auto ">
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