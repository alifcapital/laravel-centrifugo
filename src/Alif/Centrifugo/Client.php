<?php

namespace Alif\Centrifugo;

class Client extends \phpcent\Client
{
    /**
     * Generate common client token
     *
     * @return string
     */
    public function token()
    {
        return $this->generateClientToken('guest', ''.time());
    }
}