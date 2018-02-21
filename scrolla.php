<?php $title = "Visualizar Fotos"; ?>

<?php include 'layout/header.php'; ?>


<?php
$n = $_GET["num"];
echo '<img class="d-block w-100 h-100" src="img/festa/Basilio ('.$n.').jpg" alt="">';
?>

<?php
$n = intval($n) - 1;
echo '<a class="carousel-control-prev" href="scrolla.php?num="'.$n.'" role="button" data-slide="prev">
  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
  <span class="sr-only">Previous</span>
</a>';
?>
<?php
$n = intval($n) + 1;
echo '<a class="carousel-control-next" href="scrolla.php?num="'.$n.'" role="button" data-slide="next">
  <span class="carousel-control-next-icon" aria-hidden="true"></span>
  <span class="sr-only">Next</span>
</a>';
?>