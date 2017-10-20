<!DOCTYPE html>
<html lang="pt-br">
<head>
  <link rel="icon" href="imagens/logo.jpg" type="image/x-icon" />
	<title>
		PETSPACE
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
    <div class="row">
        <div class="col">
          <div class="text-center">
            <h1>Contatos</h1>            
            <hr>

            <p class="text-center">
            FONE: (096) 991156883/ (096)991434325<br>
            EMAIL: ketlemdayanne@gmail.com<br>
            ENDEREÇO: AV: raimundo nonato banha correa, 546, MUCA.
          </p>
          </div>
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