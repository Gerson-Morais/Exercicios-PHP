<?php

$categoria = [];
$categoria[] = 'infantil';
$categoria[] = 'adolescente';
$categoria[] = 'adulto';
//print_r($categoria);

$nome = 'Gerson';
$idade = 7;

//var_dump($nome);
//var_dump($idade);

if ($idade >= 6 && $idade <= 12 )
{
        for ($i = 0; $i < count($categoria); $i++)
        {
                if ($categoria [$i] == 'infantil')
                {
                        echo "O nadador ", $nome, " compete na categoria ", $categoria[$i];
                }
        }
}
else if ($idade >= 13 && $idade <= 18)
        {
            echo 'adolescente';
        }
    else
        {
            echo 'adulto';
        }