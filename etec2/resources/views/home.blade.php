@extends('master.layout')


@section('content')
<div id="myCarousel" class="carousel slide mb-6" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
      <img src="{{ asset('img/home_carrosel1.jpeg') }}" class="d-block w-100" alt="Slide 1">
        <div class="container">
          <div class="carousel-caption text-start">
            <h1>Bem Vindo a Etec Zona Leste</h1>
            <p class="opacity-75">Um lugar onde cada aluno é valorizado e inspirado a alcançar seu potencial máximo. </p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
      <img src="{{ asset('img/home_carrosel2.jpeg') }}" class="d-block w-100" alt="Slide 2">
        <div class="container">
          <div class="carousel-caption">
            <h1>Mais oportunidades?</h1>
            <br>
            <p>Venha descobrir um pouco mais de nós. Participar da nossa família!</p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
      <img src="{{ asset('img/home_carrosel3.jpeg') }}" class="d-block w-100" alt="Slide 3">
        <div class="container">
          <div class="carousel-caption text-end">
            <h1>Descubra mais sobre nossos cursos.</h1>
            <br>
            <p>Aprimore os seus conhecimentos com os Cursos Tecnicos e NOVOTEC que disponibilizamos.</p>
          </div>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
</div>


  <!-- Marketing messaging and featurettes
  ================================================== -->
  <!-- Wrap the rest of the page in another container to center all the content. -->

  <br><br>
  <div class="container marketing">

    <!-- Three columns of text below the carousel -->
    <div class="row">
      <div class="col-lg-4">
      <img src="{{ asset('img/home_bolinha1.jpeg') }}" alt="Imagem 1" class="rounded-circle" width="140" height="140">
        <h2 class="fw-normal">Oportunidades</h2>
        <p>Descubra o caminho para um futuro brilhante. Junte-se a nós e transforme sonhos em realidade!</p>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
      <img src="{{ asset('img/home_bolinha2.jpeg') }}" alt="Imagem 2" class="rounded-circle" width="140" height="140">
        <h2 class="fw-normal">Cursos</h2>
        <p>Cursos totalmente presenciais e de boa qualidade para o seu aprimoramento técnico e pessoal!</p>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
      <img src="{{ asset('img/home_bolinha3.jpeg') }}" alt="Imagem 3" class="rounded-circle" width="140" height="140">
        <h2 class="fw-normal">Vestibulinho</h2>
        <p>O Vestibulinho é a porta de entrada para os cursos que se dividem em modalidades.</p>
      </div><!-- /.col-lg-4 -->
    </div><!-- /.row -->


    <!-- START THE FEATURETTES -->

    <br><br>
    <hr class="my-4">

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading fw-normal lh-1">Descubra um futuro brilhante na ETEC Zona Leste. <span class="text-body-secondary"> Saiba mais.</span></h2>
        <br>
        <p class="lead">Na ETEC Zona Leste, a excelência educacional é a nossa prioridade máxima. Nossos cursos técnicos são ministrados por professores altamente qualificados, proporcionando uma educação satisfatória que combina conhecimentos acadêmicos sólidos com habilidades práticas essenciais para o mercado de trabalho.</p>
      </div>
      <div class="col-md-5">
      <img src="{{ asset('img/home_quadrado1.jpg') }}" alt="Imagem 1" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto"  width="500" height="500">
      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7 order-md-2">
        <h2 class="featurette-heading fw-normal lh-1">Nosso auditório. <span class="text-body-secondary">Saiba mais.</span></h2>
        <br>
        <p class="lead">Nossos alunos usufruem da melhor forma, com uma infraestrutura bem planejada e cuidada. A escola se torna não apenas um local de estudo mas também um espaço de convivência e realização pessoal. </p>
      </div>
      <div class="col-md-5 order-md-1">
      <img src="{{ asset('img/home_quadrado2.jpg') }}" alt="Imagem 1" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto"  width="500" height="500">
        </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading fw-normal lh-1">Nossos laboratórios. <span class="text-body-secondary">Saiba mais.</span></h2>
        <br>
        <p class="lead">Com salas de aula bem equipadas, laboratórios modernos, biblioteca ampla e acolhedora, quadras esportivas e espaços verdes, a escola se torna um local inspirador para a busca do conhecimento.</p>
      </div>
      <div class="col-md-5">
      <img src="{{ asset('img/home_quadrado3.jpg') }}" alt="Imagem 1" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto"  width="500" height="500">
        </div>
    </div>


    <!-- /END THE FEATURETTES -->

  </div><!-- /.container -->
@endsection