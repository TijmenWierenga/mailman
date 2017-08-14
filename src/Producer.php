<?php
namespace TijmenWierenga\Mailman;

interface Producer
{
    /**
     * Sends a message
     */
    public function publish(string $exchangeName, string $message): void;
}