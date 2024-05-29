<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Historia</title>
</head>
<body class="background">
    <h1>Historia Italiana.</h1>
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
               
      </nav> 

      <div class="row container text-center mx-auto mt-3">
        <div class="col-md-12">
          <div class="card">
            <img class="card-img-top" width="800px" height="400px" src="img/R.jpeg" alt="Imagem de capa do card">
            <div class="card-body">
              <h2 class="card-title">História da Itália</h2>
              <p class="card-text">A Itália é um país da Europa meridional que faz fronteira ao norte com França, Suíça, Áustria e Eslovênia, cujo território principal forma uma península no mar Mediterrâneo e inclui duas grandes ilhas, a Sicília e a Sardenha. Sofreu, historicamente, a influência de etruscos, gregos e celtas antes de ser unificada em 262 a.C. pelo domínio romano. Roma continua a ser a capital da Itália até hoje. O nome Itália vêm da Roma antiga. Os romanos chamavam de Itália o sul da Península Itálica ou Apenina, que significa "terra de bois" ou "terra de pastos".
                <div class="card-text ler-mais-content">
                  Civilizações Antigas: A região conhecida como Itália foi habitada por várias civilizações antigas, incluindo os etruscos, os gregos e os romanos. Os romanos, em particular, construíram um vasto império que dominou grande parte da Europa e do Mediterrâneo por séculos. <br><br>

                  Idade Média: Após a queda do Império Romano do Ocidente no século V, a península itálica foi dividida em vários reinos e estados independentes. Durante a Idade Média, a região experimentou uma série de conflitos entre reinos e cidades-estado rivais, como Veneza, Florença, Milão e Nápoles. <br><br>
                  
                  Renascimento: O Renascimento, um período de renovação cultural e artística, teve origem na Itália no século XIV. Grandes artistas, cientistas e pensadores como Leonardo da Vinci, Michelangelo, Dante Alighieri e Maquiavel emergiram durante esse período, tornando a Itália o centro da cultura europeia. <br><br>
                  
                  Unificação Italiana: No século XIX, o movimento pelo nacionalismo italiano ganhou força, e vários líderes, como Giuseppe Garibaldi e Camillo Cavour, trabalharam para unificar os estados italianos dispersos em um único país. A Itália foi finalmente unificada em 1861, com Roma tornando-se a capital em 1870. <br><br>
                  
                  Período Contemporâneo: Após a unificação, a Itália passou por períodos turbulentos, incluindo as duas Guerras Mundiais. Durante a Segunda Guerra Mundial, o país foi inicialmente aliado com a Alemanha nazista, mas depois mudou de lado para se juntar aos Aliados. Após a guerra, a Itália se tornou uma república democrática e experimentou um período de reconstrução econômica e desenvolvimento conhecido como "Milagre Econômico". <br><br>
                  
                  Hoje, a Itália é conhecida por sua rica herança cultural, arte, arquitetura, gastronomia e contribuições para a ciência e a política. É um dos destinos turísticos mais populares do mundo e desempenha um papel vital na política e na economia europeias.</p>
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

    <script src="javascritpitalia.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script>$().button('toggle')</script>
    <script>$().button('dispose')</script>
</body>
</html>