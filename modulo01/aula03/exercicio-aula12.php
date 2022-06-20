<?php
$nome1 = "Lelo";
$sobrenome1 = "Morais";
$idade1 = "36";
$profissao1 = "Programador em Desenvolvimento";
$nome2 = "Juliana";
$sobrenome2 = "Mara";
$idade2 = "38";
$profissao2 = "Scrum Master em Desenvolvimento";

?>
<table border = "1" width="500">
    <tr>
        <th>Nome</th>
        <th>Sobrenome</th>
        <th>Idade</th>
        <th>Profissão</th>
    </tr>
    <tr>
        <td>
           <?php 
            echo $nome1;
           ?> 
        </td>
        <td>
            <?php 
                echo $sobrenome1;
            ?>         
        </td>
        <td>
            <?php 
                echo $idade1;
            ?> 
        </td>
        <td>
            <?php 
                echo $profissao1;
            ?> 
        </td>
    </tr>
    <tr>
        <td>           
            <?php 
                echo $nome2;
           ?> 
        </td>
        <td>           
            <?php 
                echo $sobrenome2;
           ?> 
        </td>
        <td>           
            <?php 
                echo $idade2;
            ?> 
        </td>
        <td>           
            <?php 
                echo $profissao2;
            ?> 
        </td>
    </tr>
</table>



