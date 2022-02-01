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
   
    $nomesituacao = "Camile";
   
    $criadoem = "2021-07-21";
    $modificadoem = "2022-08-30";
   
   
   
    try {
   
        $cadastro = "INSERT INTO tblsituacaousuario(nomesituacao, criadoem,modificadoem) VALUES(:nomesituacao, :criadoem,:modificadoem)";
   
        $cadastrar = $conn->getConn()->prepare($cadastro);
   
        $cadastrar->bindParam(':nomesituacao', $nomesituacao, PDO::PARAM_STR);
   
        $cadastrar->bindParam(':criadoem', $criadoem, PDO::PARAM_STR);
        $cadastrar->bindParam(':modificadoem', $modificadoem, PDO::PARAM_STR);
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