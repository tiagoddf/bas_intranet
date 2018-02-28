<?php $title = "Inicial"; ?>

<?php include 'layout/header.php'; ?>
<?php include 'navbar.php'; ?>



    <div class="container">
      <h2>Search Glyph</h2>
      <p>Search icon: <span class="glyphicon glyphicon-search"></span></p>    
      <p>Search icon as a link:
        <a href="#">
          <span class="glyphicon glyphicon-search"></span>
        </a>
      </p>
      <p>Search icon on a button:
        <button type="button" class="btn btn-default btn-sm">
          <span class="glyphicon glyphicon-search"></span> Search 
        </button>
      </p>
      <p>Search icon on a styled link button:
        <a href="#" class="btn btn-info btn-lg">
          <span class="glyphicon glyphicon-search"></span> Search 
        </a>
      </p> 
      <p>Unicode:
        <span class="glyphicon">&#xe003;</span>
      </p> 
    </div>


<?php include 'layout/footer.php'; ?>