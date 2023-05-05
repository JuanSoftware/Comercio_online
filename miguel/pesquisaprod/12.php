<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" type="text/css" href="pesquisa.css" media="screen" />
    <link rel="icon" type="image/png" href="/Images/fonelogo.png"/>  
    <title>site de e-commerce</title>
       
</head>
<body>
<main>
<header>
        <a href="#" class="logo"><i class='bx bx-headphone'>HeadPhone</i></a>
        <ul class="navegação">
            <li><a href="../inicio/inicio.html">inicio</a></li>
            <li><a href="#">Produtos</a></li>
            <li><a href="#">Contato</a></li>
        </ul>
        <!--navegação-->
        <div class="header-icons">
            <div id="caixa" class="search-div">                    
                <form method="post" action="12.php">
                <input type="text" name= "search" class="search-text" placeholder="Pesquisar">
                <button  type="submit">Pesquisar</button>
                </form>
            </div>
        <i class='bx bx-cart'></i>
    
        <div id ="menu"><i class='bx bx-menu'></i></div>
    
            <!--header-icons-->
</header>

<div class="container">
      <?php
          $titulo = 'produtos';
      ?>
      <h1>Página de <?php echo $titulo; ?></h1>
      <p>Lista de <?php echo $titulo; ?></p>
      <section>
      <?php
          function imprime_prod($descricao, $valor, $imagem){
              echo "<div class=\"lista\">";
              echo "Produto: $descricao - R$ $valor <br />";
              echo "
                  <figure>
                      <img src=\"$imagem\"  class=\"fig\" />
                      <figcaption>$valor</figcaption>
                  </figure>
              "; 
              echo "</div>";
          }
          if (isset($_POST['search']) && !empty($_POST['search'])) {
            $x = $_POST['search'];
        } else {
            $x = "";
        }

          $con = mysqli_connect('localhost', 'root', '', 'loja');
          $qr = "SELECT * FROM produtos WHERE nome LIKE '%$x%'";
          $res = mysqli_query($con, $qr);
  
          while ($linha = mysqli_fetch_array($res)) { 
              imprime_prod($linha[1],$linha[2],$linha[3]);
          }
      ?>
      </section>
      <div class="total">Total de <?php echo mysqli_affected_rows($con); ?> prdutos</div>
</div>
 <!--Rodape-->
 <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                          <h4>Sobre Nós</h4>
                          <p>Somos uma loja online que oferece os melhores produtos a preços acessíveis.</p>
                        </div>
                        <div class="col-md-3">
                          <h4>Categorias</h4>
                          <ul class="list-unstyled">
                            <li><a href="#">Fones</a></li>
                            <li><a href="#">Tipos de Fones</a></li>
                            <li><a href="#">Acessórios</a></li>
                            
                          </ul>
                        </div>
                        <div class="col-md-3">
                          <h4>Atendimento ao Cliente</h4>
                          <ul class="list-unstyled">
                            <li><a href="#">Central de Atendimento</a></li>
                            <li><a href="#">Perguntas Frequentes</a></li>
                            <li><a href="#">Política de Trocas e Devoluções</a></li>
                            <li><a href="#">Política de Privacidade</a></li>
                          </ul>
                        </div>
                        <div class="col-md-3">
                          <h4>Entre em Contato</h4>
                          <ul class="list-unstyled">
                            <li><i class="fa fa-envelope"></i> contato@lojaonline.com.br</li>
                            <li><i class="fa fa-phone"></i> (00) 5555-5555</li>
                            <li><i class="fa fa-map-marker"></i>Endereco : Em Breve</li>
                          </ul>
                        </div>
                    </div>
                </div>
    </footer>