<?php

    $id = $_GET['id'];
 
    $con = mysqli_connect("localhost", "root", "", "ob1",3308); // mudan�a na porta, pela mudan�a de senha na antiga

    if ($con===false) { die("Falha na conex�o con o servidor MySQL.");} //verifica a conex�o com o bd (se houve falha)

    $res = mysqli_query($con, "select * from segmento where idSegmProduto = $id"); //mostra o resultado da conexao
 
    if($res===false) { die("Falha na consulta: ".mysqli_error($con));} //se o resultado for falso, a conexao � cancelada


?>


<html>
 <head>
  <title> Editar Segmentos </title>
  <style type="text/css">
    table{
        border: 1px solid black;
    }
  
  
  </style>
 </head>
   <body> 
    
    <form action="editsegmento.php" method="post">
    <table>
    <tr>
        <td> ID: <input type="text" name="id" readonly value=" <?php echo $id; ?>"/> </td> <br />
    </tr>
    <tr>    
        <td> Segmento: <input name="segmento" type="text" value="<?php echo $linha[1]; ?>"/> </td> <br />
    </tr>
    <tr>
       <td> <input type="submit" value="Enviar" /> </td> <td> <input type="reset" value="Limpar" /> </td>
    </tr>
    
    </table>
    </form>
    
   </body>
</html>