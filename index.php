<?php
    include("funcoes.php");
    $h = "127.0.0.1";
    $u = "root";
    $p = "";
    $d = "cadastrofico";

$con = mysqli_connect($h, $u, $p, $d);

$resultado = mysqli_query($con,"select * from usuario where sexo='m'");
$lista = converter($resultado);
    
?>

<html>

    <head></head>

    <body>

        <table border=1>
            <th>ID</th>
            <th>Nome</th>
            <th>Email</th>
            <th>SEXO</th>
            <th>CFP</th>
            <th>Telefone</th>
            
            
                <?php
                    foreach($lista as $linha)
                    {
                ?>
                    <tr>
                        <td><?= $linha ["id"] ?></td>
                        <td><?= $linha ["nome"] ?></td>
                        <td><?= $linha ["email"] ?></td>
                        <td><?= $linha ["sexo"] ?></td>
                        <td><?= $linha ["cpf"] ?></td>
                        <td><?= $linha ["telefone"] ?></td>
    
                    </tr>

                    <?php

                    }

                     ?> 
              
                  
        </table>


    </body>




</html>