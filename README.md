# google-chat-webhooks

Envia mensagem para o Google Chat via Webhooks

## Dependência

* PHP 7.3+

## Instalação

``` bash
$ composer require guilhermejr/google-chat-webhooks
```

## Exemplo de uso via código
```php
<?php

require 'vendor/autoload.php';

use GCW\GCW;

$gcw = new GCW("URL DO WEBHOOKS");
$gcw->enviarMensagem("Teste!");
```

## Contato
Dúvidas e Sugestões favor enviar e-mail para falecom@guilhermejr.net