<?php
/*
Autor: Thiago Ciavolela
Data: 18/10/2023
Descrição: Projeto OpenSource trabalhado emcima da EvolutionApi, para disparos em Massa.
*/


// Configurações EvolutionApi

//KEY DO ARQUIVO ENV
$apiKey = "B6D711FCDE4D4FD5936544120E710011";

//Url envio de Texto
$url_api_txt = "http://217.76.56.58:8081/message/sendText/disparador";

//Url envio com imagem
$url_api_image = "http://217.76.56.58:808/message/sendMedia/disparador";

//Delay entre disparo de mensagem, tempo em segundos
$delay = "10";