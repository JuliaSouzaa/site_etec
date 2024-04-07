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
            <h1>Nossa História</h1>
            <p class="opacity-75">Saiba mais sobre a Etec Zona Leste.</p>
            
        </div>
      </div>
  </div>
<br><br>

  <div class="jumbotron">
    <div class="container text-center">
  <h1 class="display-4">ETEC Zona Leste</h1>
  <hr class="my-4">
  <p class="lead">Localizada estrategicamente na Avenida Águia de Haia, na Zona Leste de São Paulo, a Etec Zona Leste se destaca como um importante polo educacional na região. Sua história remonta ao compromisso com a excelência educacional e o desenvolvimento profissional dos estudantes.

Fundada em [insira o ano de fundação], a Etec Zona Leste rapidamente se estabeleceu como uma instituição de referência no ensino técnico e tecnológico. Desde o início, sua missão foi proporcionar oportunidades de aprendizado que preparassem os alunos para os desafios do mercado de trabalho, além de incentivá-los a buscar a excelência acadêmica.

Ao longo dos anos, a escola tem evoluído e se adaptado às demandas da sociedade e do mercado, ampliando sua oferta de cursos e modernizando suas instalações. Com uma equipe dedicada de professores e funcionários, a Etec Zona Leste oferece uma variedade de cursos técnicos em áreas como informática, administração, eletrônica, entre outros, proporcionando aos alunos uma formação sólida e atualizada.

Além da excelência acadêmica, a Etec Zona Leste também se destaca por suas atividades extracurriculares, que incluem projetos de pesquisa, competições acadêmicas, eventos culturais e esportivos. Essas atividades complementam o currículo escolar, promovendo o desenvolvimento integral dos estudantes e estimulando o trabalho em equipe, a liderança e a criatividade.</p>

</div>
</div>

  @endsection