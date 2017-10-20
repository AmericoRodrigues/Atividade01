<!DOCTYPE html>
<html lang="pt-br">
<head>
  <link rel="icon" href="imagens/logo.jpg" type="image/x-icon" />
	<title>
		Pet Shop
	</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<!---->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/my-style.css">
<!---->
</head>
<body class="fundo">

	<div class="container fbranco">
<!---->
		   <div class="text-center">
          <br>
            
            
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="d-block w-100" src="./imagens/capa.png">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="./imagens/capa2.png" alt="PHP">
              <div class="carousel-caption d-none d-md-block text-justify">
                
              </div>

            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="./imagens/capa3.png" alt="HTML">
              <div class="carousel-caption d-none d-md-block text-justify">
                
              </div>
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

          </div>
<!---->

          <nav class="navbar navbar-expand-lg navbar-light bg-light">
        
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav menu">
            <a class="nav-item nav-link active" href="home.php">Home <span class="sr-only">(current)</span></a>
            <a class="nav-item nav-link" href="nova.php">Nova Solicitação</span></a>
            <a class="nav-item nav-link" href="dicas.php">Dicas e Saúde</span></a>
            <a class="nav-item nav-link" href="acessorio.php">Acessórios</span></a>
            <a class="nav-item nav-link" href="fale.php">Fale com o cuidador</span></a>
            <a class="nav-item nav-link" href="contato.php">Contatos</span></a>
<!-- area do login-->
             <div class="nav-item  nav-link" id="infuser">
               <b><span> Seu Aplicativo Favorito :</span>
               <span>PetSpace</span>
               <span >Usuario :</span>
               <span><?php echo "" ?> </span>
               <span><a href="index.php" >Sair</a></span></b>
<!-- fim da area do login-->
          </div>
        </div>
      </nav>
<!---->
          <hr>
           <h2 class="text-center">Dicas e Saúde!</h2>
          <hr>
<div class="row">

          <div class="col-md-4 d-md-block d-sm-none d-none">
            <img src="dicas/bloco1.jpg" class="img-fluid img-thumbnail">
          </div>

          <div class="col-md-8">
          
      <p class="text-justify">
      <br><i>Está em duvida de como cuidar das patinhas do seu pet? Aqui, temos dicas de como solucionar seus problemas.</i>

<h4>Patinhas e seus cuidados principais</h4><p>
Evite andar com seu pet em dias em que o sol está muito quente, é um modo de prevenir queimaduras nas partes de baixo nas patas, causando dores. Realizar a tosa nas patinhas também é um modo de evitar sujeiras ou até mesmo carrapatos ou outros animais que causam doenças para seu pet. Limpe as almofadinhas. Elas podem prender objetos estranhos. Portanto, verifique regularmente se, entre os dedos, não há pequenos pedaços de vidro quebrado ou outros detritos. Se você tiver que remover algum elemento irritante que possa estar preso lá, utilize uma pinça e faça a remoção em uma área de muita luz, de modo que você possa ter certeza que removeu tudo que o incomodava. Hidrate. As almofadas dos dedos de um cão podem ficar rachadas e ressecadas facilmente. Pergunte ao seu veterinário sobre um bom hidratante para as almofadinhas e use de acordo com as especificações.</p>      
 </div>

            <div class="col-md-8">
           <hr>
           
<p  class="text-justify">
<i>Aqui são os principais alimentos que não devemos dar de jeito algum para eles.</i>

<h4>Principais alimentos perigosos para a saúde de seu amigo.</h4><p>
Leite e seus derivados, também queijos, e todos os laticínios, podem causar náuseas, dores abdominais e diarreias, pois alguns animais apresentam certa intolerância a lactose, porque os organismos deles não possui quantidade suficiente de lactose, enzima essencial para digestão do leite e seus derivados.Então administre com cautela a ingestão desse alimento para seu amigo. Uva: A ingestão de uvas e passas podem causar sérios danos a saúde do cão, podendo levar a óbito. As uvas contém uma toxina que pode causar uma lesão hepática séria e insuficiência renal. Carne: O ideal é deixa-la bem cozida, pra evitar contaminação por bactérias, protozoários e verminoses. O risco da presença desses micróbios na carne é grande. Chocolate: Contém teobromina, uma substancia parecida com a cafeína, quanto mais escuro for, mais perigo. Mesmo uma pequena porção poderá causar diarreia, vomito, sede excessiva, taquicardia e outros danos ao coração e sistema muscular do seu cãozinho.
            </p>
           
          

            </div>
             <div class="col-md-4 d-md-block d-sm-none d-none">
            <img src="dicas/bloco2.jpg" class="img-fluid img-thumbnail">
          </div>
         </div>
         

           <div class="row">
  
          <div class="col-md-4 d-md-block d-sm-none d-none">
            <img src="dicas/bloco3.jpg" class="img-fluid img-thumbnail">
          </div>

          <div class="col-md-8">
          <hr>
            <p class="text-justify">
              <i>Não sabe se é só tristeza ou algo a mais? Talvez aqui voce possa descobrir</i>.

<h4>Como saber se seu cãozinho esta com febre e o que fazer .</h4><p>
O pet apresenta alguns sinais de que está com febre, como: focinho quente e seco, olhos lacrimejantes ou embaçados, apatia, falta de apetite e nervosismo. Quando a febre é muito alta, o cachorro, assim como as pessoas, pode sofrer tremores. Para amenizar a febre dê água fria ao animalzinho para que ela tenha o efeito de regular a temperatura do corpo do animal. Mude de lugar a sua cama e busque um lugar mais fresco para ele ficar. Fora de casa é uma boa opção se é de noite e não faz uma temperatura muito baixa, dar banho com água fria durante dez minutos é outra opção.</p>
</div><hr>
<div class="col-md-8"><hr>
<p class="text-justify">
<i>Muitas pessoas não tem ideia de quantos anos seu pet tem, aqui voce pode descobrir.</i>

<h4>Qual a idade do seu cão ? Como descobrir ?</h4><p>
8 semanas: o cão ainda tem todos os dentes-de-leite. 7 meses: o cão já tem todos os dentes permanentes, e eles são brancos e limpos. 1 a 2 anos: os dentes são mais firmes e os dentes de trás podem estar um pouco amarelos. 3 a 5 anos: todos os dentes podem mostrar sinais de tártaro (amarelado) e alguns podem estar desgastados. 5 a 10 anos: dentes bem desgastados e tem sinais de doenças. 10 a 15 anos: os dentes estão bem desgastados e um tártaro mais agressivo pode ser visto. Alguns dentes podem estar faltando.</p>
</div>        
  <div class="col-md-4 d-md-block d-sm-none d-none">
  <img src="dicas/bloco4.jpg" class="img-fluid img-thumbnail imag">
          </div>
</div>
     

	        
      <footer class="footer">
        <hr>
        <p class="text-center">
        Janaina Cardoso e Cleudayanne Barbosa - Todos os direitos reservados
        <br><br>
        </p>

      </footer>

      </div>
		

    <script src="js/jquery-3.2.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
            <script type="text/javascript" src="cordova.js"></script>
        <script type="text/javascript" src="js/index.js"></script>
</body>
</html>