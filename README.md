# RabbitMQPhp
Implementando mensageria RabbitMq com PHP

Rodar no docker com o comando: 
docker run -it --rm --name rabbitmq -p 5672:5672 -p 15672:15672 rabbitmq:3.12-management
Após subir o servidor RabbitMQ, basta rodar o arquivo receive.php no navegador para ele escutar a fila de mensagens
Para enviar uma mensagem para a fila, basta rodar o arquivo send.php no navegador

Att: Deivis Vargas Pereira

