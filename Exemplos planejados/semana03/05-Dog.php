<?php

/**
 * A implementação da interface Animal para um Cão.
 */
class Dog implements AnimalInterface
{

    /**
     * Retorna o som produzido pela boca de um cão.
     */
    public function toTalk(): string
    {
        return "Auau!\n";
    }

}