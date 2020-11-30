<?php
session_start();

$login = $_POST['login'];
$senha= $_POST['senha'];


if ($login=='admin' && $senha=='1234') {

   $_SESSION["autenticacao"] = true;

    echo '
      <script>
        window.location.replace("https://trabalho-felipe.000webhostapp.com/principal.php");
        </script>
    ';
    
}else {
    session_unset ( ) ;
    
    $html="
     <html>
      <head><title>Erro Ao Acessar</title></head>
      <body>
           <h1> Não identificamos seu login e senha </h2>
           
           <p>Login= $login </p>
           <p>Senha= $senha </p>
      </body>
      </html>
    ";
    
}
    
echo $html ;

?>