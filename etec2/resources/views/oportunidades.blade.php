@extends('master.layout')


@section('content')

<div id="myCarousel" class="carousel slide mb-6" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <!--<button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>-->
    </div>
    <div class="carousel-inner"> 
      <div class="carousel-item active"> 
      <img src="{{ asset('img/oportunidades_carrosel1.jpeg') }}" class="d-block w-100" alt="Slide 1">
        

          <div class="carousel-caption text-start">
          <p class="opacity-75">Veja a seguir.</p>
            <h1>As oportunidades garantidas para você.</h1>
            
            
        </div>
      </div>
  </div>

  <div class="container">
    <!-- START THE FEATURETTES -->

    <hr class="featurette-divider"> 

    <div class="row featurette">
      <div class="col-md-7">
      
        <h2 class="featurette-heading fw-normal lh-1" style="font-size: 40px;"><strong>Concurso Público</strong></span></h2>
        <br>
        <p class="lead">Estão em andamento concursos públicos para contratação de 2,7 mil docentes e servidores administrativos para atuar em Escolas Técnicas (Etecs), Faculdades de Tecnologia (Fatecs) do Estado e na Administração Central do Centro Paula Souza (CPS). Os certames foram autorizados em junho de 2022 e as admissões ocorrem em 2023. O calendário do concurso para os cargos administrativos e os editais para docentes, que são liberados em lotes, estão disponíveis nos links abaixo.

A previsão é contratar 993 professores de Ensino Médio e Técnico, 594 docentes de Ensino Superior, 887 agentes técnicos e administrativos, 227 bibliotecários e 6 especialistas em planejamento educacional. Foi autorizado, ainda, o aproveitamento de 80 vagas de professores remanescentes de concursos anteriores.</p>
      </div>
      <div class="col-md-5">
      <img src="{{ asset('img/oportunidades_quadrado1.jpeg') }}" class="d-block w-100" alt="Slide 2" width="500" height="500">
      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7 order-md-2">
        <h2 class="featurette-heading fw-normal lh-1"><strong>Processo Seletivo Simplificado para Auxiliar de Docente</strong></h2>
        <br>
        <p class="lead">Prepare-se para embarcar em uma jornada de ensino e aprendizado! O Processo Seletivo Simplificado para Auxiliar de Docente nas renomadas Escolas Técnicas Estaduais (ETECs) ou Faculdades de Tecnologia (FATECs) está com inscrições abertas.

 

Participe deste processo seletivo e compartilhe seu conhecimento, experiência e paixão pelo ensino. As inscrições estão disponíveis para aqueles que desejam desempenhar um papel fundamental na educação técnica do Estado de São Paulo.</p>
      </div>
      <div class="col-md-5 order-md-1">
      <img src="{{ asset('img/oportunidades_quadrado2.jpeg') }}" class="d-block w-100" alt="Slide 3" width="500" height="500">
        </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading fw-normal lh-1"><strong>Programa Aprendiz Paulista</strong></span></h2>
        <br>
        <p class="lead">sua chance de ingressar no mercado de trabalho! Se você tem entre 14 e 24 anos, está matriculado em cursos técnicos profissionalizantes do Centro Estadual de Educação Tecnológica Paula Souza e reside em São Paulo, esta é a sua chance de conquistar uma vaga de aprendizagem em empresas parceiras.

Benefícios incluem salário mínimo por hora, vale transporte, férias remuneradas, FGTS e registro em carteira. Esteja preparado para uma jornada de aprendizado prático e teórico.<strong> Junte-se a nós e construa o seu futuro!</strong></p>
      </div>
      <div class="col-md-5">
      <img src="{{ asset('img/oportunidades_quadrado3.jpeg') }}" class="d-block w-100" alt="Slide 4" width="500" height="500">
    </div>
    </div>

    </div>
@endsection