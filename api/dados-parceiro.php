<?php

$nome       = "Nome";
$email      = "comercial@360saas.com.br";
$celular    = "43 9 9999-9999";
$numContato = "0800-010-7765";

if($numContato == ""){ $numContato = $celular; }

$endereco    = "Rua Santa Catarina";
$numero      = "50";
$complemento = "Sala T08";
$bairro      = "Centro";
$cidade      = "Londrina";
$uf          = "Paraná";
$cep         = "86010-470";

$celular_whats = "5543999503018";
$text_whats = "&text=Olá, eu gostaria de saber mais sobre o sistema.";
$link_whats = "https://api.whatsapp.com/send?phone={$celular_whats}";

?>