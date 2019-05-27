<html>
    <head>
        <title> Segmento Editado </title>
    </head>
<body>
<?php

/**
 * @author Eletro Mococa
 * @copyright 2019
 */
    
    $id = $_POST['id'];
    
    $segmento = $_POST['segmento'];
    
    //echo "$id - $segmento";
    
    $con = mysqli_connect("localhost", "root", "", "ob1",3308); // mudança na porta, pela mudança de senha na antiga

    if ($con===false) { die("Falha na conexão con o servidor MySQL.");} //verifica a conexão com o bd (se houve falha)

    $res = mysqli_query($con, "update segmento set DescSegmProduto ='$segmento' where idSegmProduto = $id"); //mostra o resultado da conexao

?>
</body>
    <p> <?php echo mysqli_affected_rows($con); ?> registro(s) afetado(s) com sucesso!</p>
    <a href="exemploale.php" style="font-family: verdana; color: #80FF00; text-decoration: none;"> Voltar </a>
</html>