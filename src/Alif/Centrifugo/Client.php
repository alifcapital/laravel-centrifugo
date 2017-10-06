<?php

namespace Alif\Centrifugo;

class Client extends \phpcent\Client
{
    /**
     * Generate common client token
     *
     * @param string $user
     * @param string $info
     * @return string
     */
    public function token($user = 'guest', $info = "")
    {
        return $this->generateClientToken($user, ''.time(), $info);
    }
}