@extends('master.layout')


@section('content')

<div id="myCarousel" class="carousel slide mb-6" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <!--<button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>-->
    </div>
    <div class="carousel-inner"> 
      <div class="carousel-item active"> 
      <img src="{{ asset('img/home_carrosel1.jpeg') }}" class="d-block w-100" alt="Slide 1">
        
          <div class="carousel-caption text-start">
            <h1>Coordenação de Cursos</h1>
            <p class="opacity-75">As Coordenações de Curso são responsáveis pelo conjunto de ações destinadas ao planejamento do ensino, à supervisão de sua execução, ao controle das atividades docentes em relação às diretrizes didáticas pedagógicas e administrativas, bem como pela otimização dos recursos físicos e didáticos disponíveis para os cursos mantidos pelas Etecs.</p>
            
        </div>
      </div>
  </div>
<br><br>

  <div class="jumbotron">
    <div class="container">
  <h1 class="display-4"></h1>
  <hr class="my-4">
  <br><br><br>
  <h1 class="lead" style="font-size: 40px;" ><strong> Coordenador Novotec</strong> </h1>
  <p class="lead" style="font-size: 20px;" >Giovanna Littiere (Novotec Administração) <br>
Leandro (Novotec Logística) <br>
Marcelo Collado (Novotec Desenvolvimento de Sistemas) <br>
Cibelle Ferreria Francoso (Novotec RH)<br>
Jeferson Roberto de Lima (Novotec Desenvolvimento de Sistemas AMS)</p>

<br><br>

<h1 class="lead" style="font-size: 40px;" ><strong> Coordenador Curso Técnico</strong> </h1>
  <p class="lead" style="font-size: 20px;" >Monyse Tesser Panacci (Técnico em Adminstração / Técnico em Contabilidade) <br>
Ediney Ciasi Barreto (Técnico em Desenvolvimento de Sistemas) <br>
Silvano Lack de Brito (Técnico em Logística / Técnico em Serviços Jurídicos)</p>

<br><br>

<h1 class="lead" style="font-size: 40px;" ><strong> Contato</strong> </h1>
  <p class="lead" style="font-size: 20px;" ><strong>Telefones:</strong> (11) 2045-4018</p>

</div>
</div>

  @endsection