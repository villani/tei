<?php

/**
 * Usa um objeto \PDO para conexão com a base.
 */
class Conexao 
{
    /** @var string $dsn Nome da origem dos dados. */
    public static $dsn = "sqlite:portal.sqlite";

    /** @var \PDO|null $pdo Objeto PHP de dados. */
    public static $pdo = null;

    /**
     * Abre uma conexão com a base ou utiliza uma se já estiver aberta.
     */
    public static function conectar()
    {
        // Verificar se há conexão aberta.
        if (is_null(self::$pdo)) {

            // Abre uma se não existir.
            self::$pdo = new PDO(self::$dsn);
        }
        
    }

    /**
     * Retorna uma matriz com todos os registros da tabela informada por parâmetro.
     * 
     * @param string $tabela Nome da tabela.
     * 
     * @return array Uma matriz com todos os registros da tabela informada.
     */
    public static function obterRegistros(string $tabela): array
    {
        $sql = "SELECT * FROM $tabela";

        // "query" -> Define e executa um comando SQL SELECT.
        $comando = self::$pdo->query($sql);

        // "fetchAll" -> Retorna uma matriz com os registros obtidos.
        return $comando->fetchAll();
    }

    /** 
     * Insere os dados de um registro na tabela.
     * 
     * @param string $tabela Nome da tabela.
     * @param array $registro O vetor "associativo" com os campos e valores que devem ser inseridos.
     */
    public static function inserirRegistro(string $tabela, array $registro)
    {
        $insert = "INSERT INTO $tabela (";

        // "sizeof" -> Obtém o tamanho do vetor.
        $tamanho = sizeof($registro);
        $i = 0;

        // Montando a instrução de SQL INSERT.
        foreach ($registro as $campo => $valor) {
            if ($i == 0) {
                $insert .= "$campo";
                $i++;
            } else {
                $insert .= ",$campo";
                $i++;
            }            
        }
        $insert .= ") VALUES (";
        while ($i > 0) {
            if ($i == $tamanho) {
                $insert .= "?";
                $i--;
            } else {
                $insert .= ",?";
                $i--;
            }
            
        }
        $insert .= ")";
        // FIM - Montando a instrução de SQL INSERT.

        // "prepare" -> Define (mas não executa) um comando a partir do parâmetro recebido.
        $comando = self::$pdo->prepare($insert);

        // "array_values" -> Retorna um vetor com índices números.
        // O método "bindParam" não funciona bem com a estrutura "foreach". (???)
        $valores = array_values($registro);
        for ($i = 1; $i <= $tamanho; $i++) {

            // "bindParam" -> Atribui valores aos parâmetros da instrução SQL definida.
            $comando->bindParam($i, $valores[$i - 1]);
        }

        // "execute" -> Executa o comando preparado.
        $comando->execute();
    }
}