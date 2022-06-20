<?php

$al1 = [
    'nome' => "Huguinho",
    'email' => "huguinho@gmail.com",
    'telefone' =>"11 91234 5678",
    'notas' => [
         9,
         7.5,
         6,
    ]
];

$al2 = [
    'nome' => "Zézinho",
    'email' => "zezinho@gmail.com",
    'telefone' => "11 99876 5432",
    'notas' => [
       10,
      7.5,
      8.5,
    ]
];

$al3 = [
    'nome' => "Luizinho",
    'email' => "luizinho@gmail.com",
    'telefone' => "11 91827 3645",
    'notas' => [
       10,
      7.5,
      8.5,
    ]
];

$al4 = [
    'nome' => "Patrícia",
    'email' => "patrici@gmail.com",
    'telefone' => "11 95971 2892",
    'notas' => [
       10,
      7.5,
      8.5,
    ]
];

$alunos = [
    $al1,
    $al2,
    $al3,
    $al4,
];

?>

<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

<div class="container">
    <h1 class= 'mt-5'>Alunos de Introdução à web</h1>
    <hr>
    <table class="table table-success table-striped">
        <thead class="table-dark" >
            <tr>
                <th>Nome</th>
                <th>Email</th>
                <th>Telefone</th>
        </thead>
        <tbody>
            <?php
                foreach ( $alunos as $CadaAluno ) {
                    echo "<tr>";
                        echo '<td>' . $CadaAluno['nome'] . "</td>";
                        echo '<td>' . $CadaAluno['email'] . "</td>";
                        echo '<td>' . $CadaAluno['telefone'] . "</td>";
                    echo "</tr>";
                }
            ?>
        </tbody>
    </table>
</div>