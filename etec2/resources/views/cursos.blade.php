@extends('master.layout')


@section('content')

<div id="myCarousel" class="carousel slide mb-6" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <!--<button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>-->
    </div>
    <div class="carousel-inner"> 
      <div class="carousel-item active"> 
      <img src="{{ asset('img/curso_carrosel1.jpeg') }}" class="d-block w-100" alt="Slide 1">
        

          <div class="carousel-caption text-start">
            <h1>Desenvolvimento de Sistemas</h1>
            <p class="opacity-75">Cursos totalmente presenciais e de boa qualidade para o seu aprimoramento técnico e pessoal!</p>
            
        </div>
      </div>
  </div>
  
    <div class="container">
    <!-- START THE FEATURETTES -->

    <hr class="featurette-divider"> 

    <div class="row featurette">
      <div class="col-md-7">
      
        <h2 class="featurette-heading fw-normal lh-1">Ping Pong com os melhores da Etec? <span class="text-body-secondary">Temos.</span></h2>
        <p class="lead">Claro que só poderia ser de Desenvolvimento de Sistemas. Se você quer aprender a solucionar problemas de códigos e jogar ping Pong, venha fazer parte dessa família.</p>
      </div>
      <div class="col-md-5">
      <img src="{{ asset('img/curso_quadrado1.jpeg') }}" class="d-block w-100" alt="Slide 2" width="500" height="500">
      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7 order-md-2">
        <h2 class="featurette-heading fw-normal lh-1">O que fazemos nos nossos momento de lazer? <span class="text-body-secondary">Leia a seguir.</span></h2>
        <p class="lead">Temos nossos dias de luta, mas também temos nossos momento de glória. Como por exemplo no dia de Profissional de TI, entre outros dias comemorativos.</p>
      </div>
      <div class="col-md-5 order-md-1">
      <img src="{{ asset('img/curso_quadrado2.jpeg') }}" class="d-block w-100" alt="Slide 3" width="500" height="500">
        </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading fw-normal lh-1">Cadê os dias de luta? <span class="text-body-secondary">Não comentamos sobre...</span></h2>
        <p class="lead">O lado sombrio da mente do palhaço ninguém comenta, mas aqui está registros de desespero ao ver as temidas linhas vermelhas... Um momento de silencio para elas....</p>
      </div>
      <div class="col-md-5">
      <img src="{{ asset('img/curso_quadrado3.jpeg') }}" class="d-block w-100" alt="Slide 4" width="500" height="500">
    </div>


    <!-- /END THE FEATURETTES -->

    </div>
@endsection