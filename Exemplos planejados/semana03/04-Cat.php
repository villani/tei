<?php

/**
 * A implementação da interface Animal para um Gato.
 */
class Cat implements AnimalInterface
{

    /**
     * Retorna o som produzido pela boca de um gato.
     */
    public function toTalk(): string
    {
        return "Miau!\n";
    }
    
}