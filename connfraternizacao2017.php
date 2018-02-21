<?php $title = "2017"; ?>

<?php include 'layout/header.php'; ?>
<?php include 'navbar.php'; ?>

<main role="main" class="container_body">
  <div class="jumbotron">
    <?php
    $linha = 1;
    $contadorlinha = 0;

    echo "<table>";
    echo "<tr>";

    for($i = 1; $i < 347; $i++) {
      $github = 1; // repitir a img por causa do github, trocar github pra 1, e colocar as imgs de volta
      $url_imagem = "img/festa/Basilio (".$github.").jpg";
      $contadorlinha++;

        echo '<td><a href="'.$url_imagem.'"><img style="width: 300px; height: 150px;" src="'.$url_imagem.'" alt="" /></a></td>';
      if($contadorlinha == 4) {
        echo "</tr>";
        echo "<tr>";
        $contadorlinha = 0;
      }
    }
    echo "</tr>";
    echo "</table>";
    ?>
  </div>
</main>

<?php include 'layout/footer.php'; ?>