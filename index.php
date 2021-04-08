<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Avanço das vacinações ao redor do mundo contra o vírus COVID-19.</title>
  <link rel="stylesheet" type="text/css" href="dist/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="dist/css/estilo.css">
</head>
<body data-spy="scroll" data-target=".navbarNav" data-offset="80">

  <div id="menu">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" role="navigation">
      <a class="navbar-brand" href="#"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link" href="#home">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#mundo">Mundo</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#rankings">Rankings</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#histogramas">Histogramas</a>
          </li>
        </ul>
      </div>
    </nav>
  </div>

  <div class="container">
    <section id="home">
      <h2 class="card-title text-center" style="margin-top: 8vh">Análises e visualizações sobre o avanço das vacinações ao redor do mundo
        contra o vírus COVID-19.
      </h2>
      <hr style="border: 1px solid black">

      <div class="card">
        <div class="card-body">
          <div class="row" style="margin-top: 5vh">
            <div class="col-xs-12 col-md-6">
              <img  style="margin-top: 10px" src="imgs/51002952314_a9396fb643_k.jpg" class="img-fluid" alt="" title="Fotos: Bruno Concha/Secom">
            </div>

            <div class="col-xs-12 col-md-6">
              <img style="margin-top: 10px" src="imgs/51084405153_e5d21fb5b4_k.jpg" class="img-fluid" alt="" title="Fotos: Bruno Concha/Secom">
            </div>

            <div>
              <small style="font-size: 12pt;margin-left: 10px">Fotos: Fernando Vivas/GOVBA <a href="https://fotospublicas.com/governo-da-bahia-recebe-mais-um-lote-de-vacinas-de-covid-19/">(https://fotospublicas.com/governo-da-bahia-recebe-mais-um-lote-de-vacinas-de-covid-19)</a></small>
            </div>
          </div>
        </div>
        
      </div>

      
      <div class="row">
        <div class="col-xs-12 col-md-12">
          <div class="card">
            <div class="card-body">
              <p class="card-text text-justify" style="margin-top: 2vh">Para elaboração do projeto serão utilizados dados coletados diariamente do
                repositório Our World in Data e disponibilizados no dataset Kaggle: COVID-19
                World Vaccination Progress. A escolha de tais dados adveio do fato de
                apresentarem a possibilidade da criação de algumas visões que tratam sobre
                o avanço das vacinações contra o COVID-19, além de propiciar algumas
                análises a respeito do assunto a nível global.
                As visualizações criadas exibirão informações por país em mapas
                geográficos e outros tipos de gráficos auxiliares que trarão dados para
                análise, a exemplo de gráficos: barras, bolhas, scatterplot, linhas e etc,
                contendo dados sobre o número total de vacinações, os tipos de vacina e as
                datas de efetivação das vacinas.
              </p>
            </div>
            <div class="text-center">
              <h5>Por Jussara Teixeira de Araújo Gonçalves e Washington da Costa Silva</h5>
            </div>
            
          </div>
        </div>
      </div>
    </section>

    <section id="mundo">
    <div class="row" style="margin-top: 5vh">
      <div class="col-xs-12 col-md-12">
        <div class="card">
          <div class="card-body">
            <h3 class="card-title">Avanço das vacinações contra o COVID-19</h3>
            <h6 style="margin-bottom: 30px">Total da população vacinada por cada pais (%)</h6>
            <img src="imgs/Mundi.jpg" class="img-fluid" alt="" title="">
            <p>
              <button class="btn btn-dark" data-toggle="collapse" href="#mapamundi" role="button" aria-expanded="false" aria-controls="collapseExample">Mais sobre este gráfico
              </button>
            </p>
            <div class="collapse" id="mapamundi">
              <div class="card-text card-body">
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>
              </div>
            </div>
            
          </div>
        </div>
      </div>
    </div>
</section>

<section id="rankings">
    <div class="row" style="margin-top: 5vh">
      <div class="col-xs-12 col-md-12">

        <h3>Ranking de vacinações</h3>
        <h6>Total da população vacinada por cada pais (%)</h6>

      </div>

      <div class="col-xs-12 col-md-6">
        <div class="card">
          <div class="card-body">
            <img src="imgs/top25_1.JPG" class="img-fluid" alt="" title="">
            <button class="btn btn-dark" data-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">Mais sobre este gráfico</button>
          </div>
        </div>
      </div>
      
      <div class="col-xs-12 col-md-6">
        <div class="card">
          <div class="card-body">
            <img src="imgs/top25_2.JPG" class="img-fluid" alt="" title="">
            <button class="btn btn-dark" type="button" data-toggle="collapse" data-target="#multiCollapseExample2" aria-expanded="false" aria-controls="multiCollapseExample2">Mais sobre este gráfico</button>
          </div>
        </div>
      </div>
      <p>

      </p>
      <div class="row">
        <div class="col">
          <div class="collapse multi-collapse" id="multiCollapseExample1">
            <div class="card card-body">
              Some placeholder content for the first collapse component of this multi-collapse example. This panel is hidden by default but revealed when the user activates the relevant trigger.
            </div>
          </div>
        </div>
        <div class="col">
          <div class="collapse multi-collapse" id="multiCollapseExample2">
            <div class="card card-body">
              Some placeholder content for the second collapse component of this multi-collapse example. This panel is hidden by default but revealed when the user activates the relevant trigger.
            </div>
          </div>
        </div>
      </div>
      
    </div>
  </section>
  </div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="dist/js/jquery.min.js"></script>
  <script src="dist/js/bootstrap.min.js"></script>
  <script src="dist/js/main.js"></script>
</body>
</html>