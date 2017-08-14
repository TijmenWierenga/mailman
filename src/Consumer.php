<?php 
namespace TijmenWierenga\Mailman;

interface Consumer
{
    /**
     * Consume incoming messages
     */
    public function consume(string $exchangeName): void;
}
