<?php
require_once __DIR__ . '/vendor/autoload.php';

use PhpAmqpLib\Connection\AMQPStreamConnection;
use PhpAmqpLib\Message\AMQPMessage;
require_once 'config.php';

/**
* Inicia a conexão
*/
$connection = new AMQPStreamConnection('localhost', 5672, 'guest', 'guest');
$channel = $connection->channel();

/**
* Declara qual a fila que será usada
*/

$channel->queue_declare(Config::$queue, false, false, false, false);

/**
* Cria a nova mensagem
*/
$mensagem = 'Testando RabbitMQ mensageria !';
$msg = new AMQPMessage($mensagem);

/**
* Envia para a fila
*/
$channel->basic_publish($msg, '', Config::$queue);

echo " [x] Mensagem enviada :  '$mensagem' \n" ;
/**
* Encerra conexão
*/
$channel->close();
$connection->close();