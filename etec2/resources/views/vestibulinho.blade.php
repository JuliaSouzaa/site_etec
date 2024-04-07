@extends('master.layout')


@section('content')

<div id="myCarousel" class="carousel slide mb-6" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <!--<button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>-->
    </div>
    <div class="carousel-inner"> 
      <div class="carousel-item active"> 
      <img src="{{ asset('img/vestibulinho_carrosel1.jpg') }}" class="d-block w-100" alt="Slide 1">
        

          <div class="carousel-caption text-start">
          <p class="opacity-75">Vestibulinho</p>
            <h1>O Vestibulhinho das Escolas Técnicas Estaduais Ocorrem de Forma Semestral</h1>
            
        </div>
      </div>
  </div>

  <div class="container">
    <!-- START THE FEATURETTES -->

    <hr class="featurette-divider"> 

    <div class="row featurette">
      <div class="col-md-7">
      
        <h2 class="featurette-heading fw-normal lh-1" style="font-size: 40px;"><strong>O Vestibulinho</strong></span></h2>
        <br>
        <p class="lead">O processo de vestibulinho na ETEC, segue um padrão definido pelo Centro Paula Souza. Primeiramente, é divulgado um edital contendo todas as informações essenciais, como datas, locais de prova, cursos oferecidos, requisitos de inscrição e documentação necessária. Os candidatos devem então se inscrever dentro do prazo estipulado, geralmente de forma online através do site oficial do vestibulinho da ETEC, e pagar uma taxa de inscrição conforme especificado no edital.</p>
      </div>
      <div class="col-md-5">
      <img src="{{ asset('img/vestibulinho_quadrado1.jpeg') }}" class="d-block w-100" alt="Slide 2" width="500" height="500">
      </div>
    </div>

    <br><br>
    <div class="jumbotron">
    <div class="container">
  <p class="lead">A prova do vestibulinho consiste em 50 questões de múltipla escolha, abrangendo várias áreas do conhecimento, incluindo Língua Portuguesa, Matemática, Ciências e questões específicas relacionadas ao curso técnico escolhido. Após a correção das provas, os resultados são divulgados dentro do prazo estabelecido, permitindo que os candidatos verifiquem sua pontuação e classificação. Os aprovados devem então proceder com a matrícula dentro do prazo estabelecido, seguindo as orientações fornecidas pela ETEC, o que inclui a apresentação de documentos e o preenchimento de formulários específicos.

É fundamental que você, candidato, esteja atento à modalidade de curso que escolheu, pois o Centro Paula Souza não assume responsabilidade por inscrições em cursos incorretos ou modalidades não desejadas. Certifique-se de selecionar cuidadosamente o curso e a modalidade desejados durante o processo de inscrição, garantindo assim uma participação adequada e de acordo com suas preferências e objetivos educacionais.</p>
<hr class="my-4">

<br>
<div class="jumbotron">
    <div class="container">
  <h1 class="display-4"><strong>A Prova</strong></h1>

  <br>

  <p class="lead">A prova do Vestibulhinho tem duração de quatro horas. Os candidatos devem responder a 50 questões-teste, cada uma valendo um ponto, com cinco opções de respostas: A, B, C, D, E, das quais apenas uma é correta.

A prova prestada para as vagas remanescentes, as quais dão acesso direto ao segundo módulo do Ensino Técnico, é constituída de 30 questões-teste, também com cinco opções de respostas: A, B, C, D, E, das quais apenas uma é correta.</p>
<hr class="my-4">

<br>
<div class="jumbotron">
    <div class="container">
  <h1 class="display-4"><strong>Informações Importantes sobre o exame do Vestibulinho ETEC</strong></h1>

  <br>

  <p class="lead"><strong>01 </strong> – A prova avalia conhecimentos nas principais matérias da Base Nacional Comum Curricular (BNCC) do Ensino Fundamental II, incluindo Linguagens (Língua Portuguesa), Matemática, Ciências Humanas (Geografia e História) e Ciências da Natureza; <br>

  <strong>02 </strong> – As questões não são separadas por disciplinas, podendo ser multidisciplinares ou específicas; <br>

  <strong>03 </strong> – Valores e ações que promovam uma sociedade mais humana, justa e sustentável são avaliados, exigindo atenção a temas atuais relacionados a esses tópicos; <br>

  <strong>04 </strong> – As questões abordam competências como interpretação de diversos tipos de texto, aplicação de conhecimentos do Ensino Fundamental para resolver problemas, análise crítica de argumentos, reconhecimento de diferentes formas de linguagem e avaliação de ações de acordo com critérios estabelecidos.</p>
</div>
</div>
</div>
    </div>
@endsection