<?php

/**
 * Definindo um novo tipo de dado baseado no tipo Carro.
 * 
 * @author Prof. Me. Leonardo Villani <leonardo.villani@fatec.sp.gov.br>
 */
class Fiat extends Carro
{
    // Herdando atributos e métodos (públicos ou protegidos) da classe Carro.

    /**
     * Atributo exclusivo de um objeto do tipo Fiat e que armazena o nome do 
     * modelo deste objeto.
     *
     * @var string 
     */
    private $modelo;

    /**
     * Método mágico para alterar o valor de um atributo privado.
     * 
     * @param string $atributo Nome do atributo que se deseja alterar o valor.
     * @param mixed $valor Novo valor do atributo indicado.
     */
    public function __set($atributo, $valor)
    {
        $this->$atributo = $valor;
    }

    /**
     * Sobrescrevendo comportamento herdado da classe pai.
     * 
     * @param string $atributo Nome do atributo que se deseja obter o valor.
     * @return mixed Valor do atributo solicitado.
     */
    public function __get($atributo)
    {
        if ($atributo == 'modelo') { // Tratamento específico para um atributo.
            return 'Fiat ' . $this->modelo;
        } else {
            return parent::__get($atributo); // Acessando membros da classe pai.
        }
    }
}
