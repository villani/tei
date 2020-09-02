<?php

/**
 * Define quais métodos uma classe deve implementar para ser considerada
 * um Animal.
 */
interface AnimalInterface
{

    /**
     * Retorna o som produzido pela boca de um animal.
     * 
     * @return string O produzido pela boca de um animal.
     */
    public function toTalk(): string;
    
}