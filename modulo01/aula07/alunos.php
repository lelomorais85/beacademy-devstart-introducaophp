<?php


$aluno1 = [
    'Huguinho', //0
    'huguinho@gmail.com', // 1
    '85 9 8889-0000', // 2
            [ //3
                9, 
                8.9,
                7.5,
                8,
            ]
];

$aluno2 = [
    'Zézinho',
    'zezinho@gmail.com',
    '85 9 9999-0000',
            [
                9,
                8.9,
                7.5,
                8,
            ]

];

$alunos= [ //dimensao 1
            
        $aluno1,
        $aluno2,

            [//dimensao 2

                [//dimensao 3
                    
                ]

            ]

        ];


//echo $alunos[0][0][0];

var_dump($alunos);