<?php

/**
 * Data Hoje 
 * @return date Data Atual
 */
function Data_Hoje()
{
    return date('d-m-Y');
}


/**
 * Diferenca_entre_datas
 *
 * @param DateTime $data1 - Y-m-d
 * @param DateTime $data2 - Y-m-d
 * @return string - Quantidade de dias 
 */
function Diferenca_entre_datas($data1, $data2)
{
    $dt1 = new DateTime("$data1");
    $dt2 = new DateTime("$data2");
    $intervalo = $dt1->diff($dt2);
    return $intervalo->format('%a dia(s)');
}

/**
 * Contador de caracteres function
 *
 * @param [string] $palavra
 * @return void
 */
function Contador_de_caracteres($palavra){
    return strlen($palavra);
}


function array_generico($dados){
    $chaves  = array_keys($dados);
    foreach ($dados as $key => $value) {
        # realiza o implode nos valores do array
        $valores = implode(", ",$dados);
    }

    foreach ($chaves as $key => $value) {
        # realiza o implode nas chaves do array
        $campos = implode(", ",$chaves);
    }
    
    echo "</br> Campos: $campos";
    echo "</br> valores: $valores";
    
    #Execução:
    #$dado = array("size" => "XL", "color" => "gold");
    #array_generico($dado);
}

