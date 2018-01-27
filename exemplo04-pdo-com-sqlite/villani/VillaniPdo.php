<?php
namespace villani;

use \PDO;

/**
 * Prover recursos para enviar e obter dados de uma fonte do tipo SQLite.
 * 
 * @author Leonardo Villani <leonardo.villani@fatec.sp.gov.br>
 */
class VillaniPdo
{

    /**
     * Nome da origem de dados (do inglês, Data Source Name). Para o SQLite é
     * necessário informar apenas  o nome do banco.
     * 
     * @var string
     */
    private static $dsn = 'sqlite:banco.db';

    /**
     * Mantém armazenado o Objeto PHP de Dados (PHP Data Object) se já tiver 
     * sido instanciado.
     * 
     * @var PDO
     */
    private static $pdo;

    /**
     * Abre uma conexão com a fonte de dados determinada e retorna a referência 
     * do objeto que representa essa conexão.
     * 
     * @return PDO A referência do objeto que representa essa conexão.
     */
    protected static function getPdo()
    {
        // Abre a conexão com a fonte de dados determinada pelo DSN.
        self::$pdo = new PDO(self::$dsn);

        // Define alguns atributos padrões para essa conexão. Neste caso, está
        // sendo definido que o tipo do resultado retornado de uma consulta de 
        // tabela deve ser um objeto ou um vetor de objetos.
        self::$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);

        return self::$pdo;
    }
}
