<?php

/**
 * @author Eletro Mococa
 * @copyright 2019
 */

$con = mysqli_connect("localhost", "root", "", "ob1",3308); // mudança na porta, pela mudança de senha na antiga

if ($con===false) { die("Falha na conexão con o servidor MySQL.");} //verifica a conexão com o bd (se houve falha)

$res = mysqli_query($con, "select * from segmento"); //mostra o resultado da conexao
 
if($res===false) { die("Falha na consulta: ".mysqli_error($con));} //se o resultado for falso, a conexao é cancelada

?>

<html>
    <head>
        <title> Segmentos </title>
    <style>
    table{
        border: 1px solid #000;
    } 
    td{
        border: 1px solid #000;
    }
    th{
        background-color: #1CACF2;
        border: 1px solid #000;
    }
    
    </style>
    </head>
  <body> 
    <table id="tbsegmento">
      <tr> 
        <th>ID</th> <th>Segmento</th> <th> &nbsp; </th>
      </tr>
      <?php while( $linha = mysqli_fetch_array($res, MYSQLI_BOTH) ){ //pego a tabela do bd para mostrar no php?>
    <tr>
     <td> <?php echo $linha[0]; // pego a linha 0 da coluna 1?></td> <td> <?php echo $linha[1]; //pego a linha 1 da coluna 2 ?></td> <td><a href="formeditar.php?id=<?php echo $linha[0];?>"> Editar </a></td>
    </tr>
    <?php } //finaliza o while ?>
    </table> <!-- termina a tabela --> </a> <br />
    
    <form action="cadsegmento.php" method="post" action="descricao">
     
     <table>
      
       <tr>
            <td> Segmento: </td> <td> <input name="descricao" type="text" value=""/> </td>
       </tr>
       <tr>
            <td colspan="2"> <input type="submit" value="Cadastrar" />  <input type="reset" value="Limpar"/> </td>
       </tr>
     
     </table>
    
    </form>
 
  </body>
</html>