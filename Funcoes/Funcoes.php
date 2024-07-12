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