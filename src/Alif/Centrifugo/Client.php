<?php

namespace Alif\Centrifugo;

class Client extends \phpcent\Client
{
    /**
     * Generate common client token
     *
     * @param string $user
     * @return string
     */
    public function token($user = 'guest')
    {
        return $this->generateClientToken($user, ''.time());
    }
}