<?php
include '../conn/connPostgres.php';

$login = $_POST["login"];
$senha = $_POST["senha"];

if (!$login and !$senha) {
  echo "Login e Senha não informados";
} else {
  $verificaUser = "select * from users where login_users = '$login' and senha_users = '$senha'";
  $result = pg_query($conn, $verificaUser);
  $rs = pg_num_rows($result);
  if ($rs != 0) {
    header('Location: dashboard.php');
    exit();
  } else {
    header('Location: relogin.php');
    exit();
  }
}
pg_close($conn);
