<?php

/**
 * Definindo um novo tipo de dado: Carro.
 * 
 * @author Prof. Me. Leonardo Villani <leonardo.villani@fatec.sp.gov.br>
 */
class Carro
{

    /**
     * Armazena as cilindradas de um objeto do tipo Carro. O modificador 
     * 'protected'indica que esse atributo deve ser visível às classes filhas.
     * 
     * @var float
     */
    protected $motor;

    /**
     * Armazena a quantidade de objetos Carro instanciados.
     *
     * @var int
     */
    public static $qtdeCarros;

    /**
     * Método mágico construtor de um objeto Carro.
     * 
     * @param float $motor Valor das cilindradas do objeto.
     */
    public function __construct(float $motor)
    {
        $this->motor = $motor; // Alterando o valor do atributo de um objeto.

        self::$qtdeCarros++; // Alterando o valor do atributo da classe.
    }

    /**
     * Método mágico para obter o valor de um atributo privado.
     * 
     * @param string $atributo Nome do atributo que se deseja obter o valor.
     * @return mixed Valor do atributo solicitado.
     */
    public function __get($atributo)
    {
        return $this->$atributo;
    }
}
