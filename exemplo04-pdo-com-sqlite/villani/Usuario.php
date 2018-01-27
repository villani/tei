<?php
namespace villani;

/**
 * Prover recursos para enviar e obter dados da tabela 'usuarios' de uma 
 * determinada fonte de dados.
 * 
 * @author Leonardo Villani <leonardo.villani@fatec.sp.gov.br>
 */
class Usuario extends VillaniPdo
{

    /**
     * Identificação exclusiva de um objeto Usuario.
     * 
     * @var int
     */
    private $id;

    /**
     * Nome de um objeto Usuario.
     * 
     * @var string
     */
    private $name;

    /**
     * Login de um objeto Usuario.
     * 
     * @var string
     */
    private $login;

    /**
     * Senha de um objeto Usuario.
     * 
     * @var string
     */
    private $password;

    /**
     * Referência para o objeto que representa a conexão com a fonte de dados.
     * 
     * @var PDO
     */
    private static $pdo = null;

    /**
     * Método mágico construtor de um objeto Usuario e que inicializa os valores
     * de todos os seus respectivos atributos.
     * 
     * @param int $id Identificação exclusiva de um objeto Usuario.
     * @param string $name Nome de um objeto Usuario.
     * @param string $login Login de um objeto Usuario.
     * @param string $password Senha de um objeto Usuario.
     */
    public function __construct(int $id, string $name, string $login, string $password)
    {
        $this->id = $id;
        $this->name = $name;
        $this->login = $login;
        $this->password = $password;
    }

    /**
     * Método mágico para alterar o valor de um dos atributos privados.
     * 
     * @param string $attribute Nome do atributo que se deseja alterar o valor.
     * @param mixed $value Novo valor do atributo indicado.
     */
    public function __set($attribute, $value)
    {
        $this->$attribute = $value;
    }

    /**
     * Método mágico para obter o valor de um atributo privado.
     * 
     * @param string $attribute Nome do atributo que se deseja obter o valor.
     * @return type Valor do atributo solicitado.
     */
    public function __get($attribute)
    {
        return $this->$attribute;
    }

    /**
     * Insere na tabela 'usuarios' um registro com os valores dos atributos do 
     * objeto instanciado.
     * 
     * @return bool Verdadeiro se a instrução foi executado com sucesso ou Falso
     * em caso de falhas.
     */
    public function save()
    {
        // Verifica se já existe uma conexão aberta.
        if (is_null(self::$pdo)) {

            // Abre uma conexão caso não existir.
            self::$pdo = parent::getPdo();
        }

        // Define a instrução SQL que será enviada a fonte de dados
        $comando = self::$pdo->prepare('INSERT INTO usuarios VALUES (:id, :name, :login, :password)');

        // Define os valores dos parâmetros da instrução SQL. O uso deste 
        // recurso previne a aplicação de ataques do tipo 'SQL INJECTION'.
        $comando->bindParam(':id', $this->id);
        $comando->bindParam(':name', $this->name);
        $comando->bindParam(':login', $this->login);
        $comando->bindParam(':password', $this->password);

        // Envia instrução à fonte de dados e armazena a resposta obtida.
        $retorno = $comando->execute();

        // Retorna a resposta.
        return $retorno;
    }

    /**
     * Retorna todos os registros da tabela 'usuarios' como um vetor de objetos 
     * Usuário.
     * 
     * @return \villani\Usuario Os registros da tabela 'usuarios'.
     */
    public static function getAll()
    {
        // Verifica se já existe uma conexão aberta.
        if (is_null(self::$pdo)) {

            // Abre uma conexão caso não existir.
            self::$pdo = parent::getPdo();
        }

        // Define a instrução SQL que será enviada a fonte de dados
        $comando = self::$pdo->query('SELECT * FROM usuarios');

        // Envia a consulta para a  fonte de dados e armazena um vetor de 
        // objetos padrão como resposta.
        $usuariosDefault = $comando->fetchAll();

        // Tratamento para NÃO retornar apenas um vetor de objetos padrões.
        $usuarios = array();
        foreach ($usuariosDefault as $u) {
            $usuario = new Usuario($u->id, $u->nome, $u->login, $u->senha);
            $usuarios[] = $usuario;
        }

        return $usuarios;
    }

    /**
     * Retorna como um objeto padrão o registro da tabela 'usuarios' que possui 
     * o 'id' correspondente ao informado por parâmetro.
     * 
     * @param int $id
     * @return type
     */
    public static function find(int $id)
    {
        // Verifica se já existe uma conexão aberta.
        if (is_null(self::$pdo)) {

            // Abre uma conexão caso não existir.
            self::$pdo = parent::getPdo();
        }

        // Define a instrução SQL que será enviada a fonte de dados
        $comando = self::$pdo->prepare('SELECT * FROM usuarios WHERE id = :id');

        // Define os valores dos parâmetros da instrução SQL.
        $comando->bindParam(':id', $id);

        // Envia instrução à fonte de dados e armazena a resposta obtida.
        $comando->execute();

        // Obtém um objeto padrão resultante da instrução SQL enviada ou false
        // em caso de falha.
        $usuario = $comando->fetch();

        return $usuario;
    }
}
