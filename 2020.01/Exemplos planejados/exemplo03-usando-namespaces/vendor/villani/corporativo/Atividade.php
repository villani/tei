<?php
/**
 * Definindo o 'namespace' de uma classe.
 * 
 * @author Leonardo Villani <leonardo.villani@fatec.sp.gov.br>
 */
namespace villani\corporativo;

/**
 * Definindo um novo tipo de dado: Atividade
 */
class Atividade
{

    /**
     * Método mágico construtor de um objeto Atividade.
     */
    public function __construct()
    {
        /*
         * Usando as constantes mágicas: __CLASS__ e __NAMESPACE__. O valor 
         * dessas constantes variam de acordo com o escopo de onde elas 
         * estiverem.
         * 
         */
        print "<p>Um objeto do tipo <strong>" . __CLASS__ . "</strong> do namespace <strong>" . __NAMESPACE__ . "</strong> foi instanciado.</p>";
    }
}
