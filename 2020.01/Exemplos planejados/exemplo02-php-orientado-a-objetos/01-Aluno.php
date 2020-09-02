<?php

/**
 * Definindo um novo tipo de dado: Aluno.
 * 
 * @author Prof. Me. Leonardo Villani <leonardo.villani@fatec.sp.gov.br>
 */
class Aluno
{

    /**
     * Armazena o nome de um objeto do tipo Aluno.
     * 
     * @var string
     */
    private $nome;

    /**
     * Armazena o número de matrícula de um objeto do tipo Aluno.
     * 
     * @var int
     */
    private $matricula;

    /**
     * Armazena a quantidade de objetos Aluno instanciados. O modificador 
     * 'static' indica que o atributo pertence à classe e não a um objeto da 
     * classe.
     * 
     * @var int
     */
    private static $qtdeAlunos = 0;

    /**
     * Método mágico construtor de um objeto Aluno. Exemplo de chamada:
     * 
     * $aluno = new Aluno('Leonardo', 2018);
     * 
     * @param string $nome Nome do aluno.
     * @param int $matricula Número de matrícula do aluno.
     */
    public function __construct(string $nome, int $matricula)
    {
        $this->nome = $nome;
        $this->matricula = $matricula;

        self::$qtdeAlunos++;
    }

    /**
     * Método mágico para obter o valor de um atributo privado. Exemplo de 
     * chamada:
     * 
     * echo $aluno->nome;
     * 
     * O valor 'nome' é passado como parâmetro do método __get, produzinho o 
     * 'return $this->nome'.
     * 
     * @param string $atributo Nome do atributo que se deseja obter o valor.
     * @return mixed Valor do atributo solicitado.
     */
    public function __get($atributo)
    {
        return $this->$atributo;
    }

    /**
     * Método mágico para alterar o valor de um atributo privado. Exemplo de
     * chamada:
     * 
     * $aluno->matricula = 201801;
     * 
     * O valor 'matricula' e o valor '201801' são passados, respectivamente, 
     * como parâmetros do métodos __set, produzinho '$this->matricula = 201801'.
     * 
     * @param mixed $atributo Nome do atributo que se deseja alterar o valor.
     * @param mixed $valor Novo valor do atributo indicado.
     */
    public function __set($atributo, $valor)
    {
        $this->$atributo = $valor;
    }

    /**
     * Método convencional que realiza  uma rotina qualquer e é chamado de modo
     * explícito. Exemplo de chamada:
     * 
     * print $aluno->verStatus();
     * 
     * @return string Se o aluno está aprovado ou não.
     */
    public function verStatus()
    {
        return 'APROVADO';
    }

    /**
     * Método da classe (porque contém o modificador 'static'), ou seja, não 
     * necessita de um objeto da classe para ser exectuado, pois  é chamado a 
     * partir da própria classe. Exemplo de chamada:
     * 
     * Aluno::contarAlunos();
     * 
     * @return int
     */
    public static function contarAlunos()
    {
        return self::$qtdeAlunos;
    }
}
