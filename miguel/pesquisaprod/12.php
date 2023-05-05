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
          $x = $_POST['search'] ;
          $con = mysqli_connect('localhost', 'root', '', 'loja');
          $qr = "SELECT * FROM produtos WHERE nome LIKE %$x";
          $res = mysqli_query($con, $qr);
  
          while ($linha = mysqli_fetch_array($res)) { 
              imprime_prod($linha[1],$linha[2],$linha[3]);
          }
      ?>
      </section>
      <div class="total">Total de <?php echo mysqli_affected_rows($con); ?> prdutos</div>
</div>