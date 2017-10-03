<?php

namespace Alif\Centrifugo;

class Client extends \phpcent\Client
{

    /**
     * Send message into channel of namespace. data is an actual information you want to send into channel
     *
     * @param       $channel
     * @param array $data
     * @return mixed
     */
    public function publish($channel, $data = [])
    {
        $result = parent::publish($channel, $data);

        if (function_exists('event'))
            event(CentrifugoMessagePublished::class, $data);

        return $result;
    }

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