<?php
/**
 * Definição do tipo de dado Usuário para o sistema.
 */
class Usuario
{
    // Características de um usuário
    private $nome;
    private $email;
    private $senha;
    private $acesso;

    /**
     * Altera o valor de uma característica do usuário.
     * 
     * @param mixed $atributo Característica que receberá o valor.
     * @param mixed $valor Valor que será armazenado na característica.
     */
    public function __set($atributo, $valor)
    {
        if ($atributo == 'senha') {
            if (!is_numeric($valor)) {
                throw new Exception('A senha precisa ter somente números.');
            }
        }
        $this->$atributo = $valor;
    }

    /**
     * Obtém o valor de uma característica do usuário
     * 
     * @param mixed $atributo Característica que se deseja obter.
     * 
     * @return mixed Valor da característica solicitada.
     */
    public function __get($atributo)
    {
        return $this->$atributo;
    }

    /**
     * Verifica se um usuário está autenticado.
     * 
     * @return string Se um usuário está ou não autenticado.
     */
    public function autenticar(): string
    {
        return "não";
    }
}