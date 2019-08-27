<?php

namespace GCW;

class GCW
{

    private $webhook;

    public function __construct(string $webhook)
    {
        $this->webhook = $webhook;
    }

    public function enviarMensagem(string $mensagem)
    {

        $json = json_encode(['text' => $mensagem]);
        $options = stream_context_create(['http' => [
                'method'  => 'POST',
                'header'  => 'Content-type: application/json',
                'content' => $json
            ]
        ]);
        return file_get_contents($this->webhook, false, $options);
    }

}
