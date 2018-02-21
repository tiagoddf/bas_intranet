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

    if ($bind) {
        session_start();
        $_SESSION['username'] = $username;
        header("Location: index.php");
    } else {
        $msg = "Invalid email address / password !";
        echo $msg;
    }
} else {
?>
    <form action="#" method="POST">
        <label for="username">Username: </label><input id="username" type="text" name="username" /> 
        <label for="password">Password: </label><input id="password" type="password" name="password" />
        <input type="submit" name="submit" value="Submit" />
    </form>
<?php
}
?> 