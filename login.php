<?php
if(isset($_POST['username']) && isset($_POST['password'])) {
    $adServer = "10.1.10.100";

    $ldap = ldap_connect($adServer);
    $username = $_POST['username'];
    $password = $_POST['password'];

    $ldaprdn = 'BASILIO' . "\\" . $username;

    ldap_set_option($ldap, LDAP_OPT_PROTOCOL_VERSION, 3);
    ldap_set_option($ldap, LDAP_OPT_REFERRALS, 0);

    $bind = @ldap_bind($ldap, $ldaprdn, $password);
    
    $msg = "display: none; color: red;";

    if ($bind) {
        
        session_start();
        $_SESSION['username'] = $username;
        header("Location: index.php");
    } else {
        echo "<script type=\"text/javascript\">
                    alert('Nome de usuário ou senha inválidos.');
                    window.location = '/bas_intranet/login.php';
              </script>";  
    }
} else {
?>

<html>
<head>
<link href="css/login.css" rel="stylesheet">
</head>

<body>
<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

<script src="http://mymaplist.com/js/vendor/TweenLite.min.js"></script>

<style>
input[type="submit"]{
  
  width:411px;
  padding:15px;
  border-radius:5px;
  background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#28D2DE), to(#1A878F));
  background-image: -webkit-linear-gradient(#28D2DE 0%, #1A878F 100%);
  background-image: -moz-linear-gradient(#28D2DE 0%, #1A878F 100%);
  background-image: -o-linear-gradient(#28D2DE 0%, #1A878F 100%);
  background-image: linear-gradient(#28D2DE 0%, #1A878F 100%);
  font:14px Oswald;
  color:#FFF;
  text-transform:uppercase;
  border:1px solid #000;
  opacity:0.7;
  -webkit-box-shadow: 0 8px 6px -6px rgba(0,0,0,0.7);
  -moz-box-shadow: 0 8px 6px -6px rgba(0,0,0,0.7);
  box-shadow: 0 8px 6px -6px rgba(0,0,0,0.7);
  border-top:1px solid rgba(255,255,255,0.8)!important;
  -webkit-box-reflect: below 0px -webkit-gradient(linear, left top, left bottom, from(transparent), color-stop(50%, transparent), to(rgba(255,255,255,0.2)));
}

input[type="submit"]:hover{
  opacity:1;
  cursor:pointer;
}
</style>

<main role="main" class="container_body">
<div class="container">
    <div class="row vertical-offset-100">
      <div class="col-md-4 col-md-offset-4">
      <div class="panel panel-default">
            <div class="panel-body">
                <form action="#" accept-charset="UTF-8" method="POST">
                <fieldset>
                    <div class="container-fluid" style="height:120; width:357;">
                        <img src="img/Fundo Branco.JPG" alt="" height="100%" width="100%">
                    </div> <!-- height="120" width="330" -->
                    <!-- <div id="errow" style="<?php echo $msg ?>"><p>Usuário ou senha incorreto!</p></div> -->
                    <div class="form-group">
                        <input id="username" class="form-control" placeholder="Usuário (usuário do computador)" name="username" type="text">
                    </div>
                    <div class="form-group">
                        <input id="password" class="form-control" placeholder="Senha (senha do computador)" name="password" type="password" value="">
                    </div>
                    <input class="btn btn-lg btn-success btn-block" style= "background: #083F2C !important;" type="submit" value="Entrar" />
                </fieldset>
                </form>
            </div>
  </div>
  </div>
    </div>
</div>
</main>

</body>
</html>

<?php
}
?> 