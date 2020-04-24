<?php
$lista = array();
$lista [0] ["nome"] = "Bruno Melhado";
$lista [0] ["id"] = "1";
$lista [0] ["email"] = "bruno@gmail.com";
$lista [0] ["sexo"] = "M";
$lista [0] ["cpf"] = "45496007801";
$lista [0] ["telefone"] = "999707407";
$lista [1] ["nome"] = "Evandro tomazine";
$lista [1] ["id"] = "2";
$lista [1] ["email"] = "evandro@gmail.com";
$lista [1] ["sexo"] = "M";
$lista [1] ["cpf"] = "45491237801";
$lista [1] ["telefone"] = "123465789";
$lista [2] ["nome"] = "Luizete";
$lista [2] ["id"] = "3";
$lista [2] ["email"] = "luiz@gmail.com";
$lista [2] ["sexo"] = "M";
$lista [2] ["cpf"] = "45491234801";
$lista [2] ["telefone"] = "12346578910";
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
                    foreach($lista as $linha){
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