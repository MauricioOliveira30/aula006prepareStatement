<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 <?php

 require './inc/Config.inc.php';

 $conn = new Conn();

 $nome = "Cristina Marcia";

 $email = "cmarciaoliveira2011@bol.com.br";



 try {

     $cadastro = "INSERT INTO tblusuario(nome, email) VALUES(:nome, :email)";

     $cadastrar = $conn->getConn()->prepare($cadastro);

     $cadastrar->bindParam(':nome', $nome, PDO::PARAM_STR);

     $cadastrar->bindParam(':email', $email, PDO::PARAM_STR);

     $cadastrar->execute();

     if($cadastrar->rowCount()):

         echo "Cadastrado com sucesso!";

     endif;

 } catch (Exception $e) {

     //throw $th;

 }



?>
</body>
</html>