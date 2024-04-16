<?php

require 'vendor/autoload.php';
use App\Yuji_Itadori;
use App\Satoru_Gojo;
use App\Ryomen_Sukuna;

$Itadori = new Yuji_Itadori();
$Itadori->Atacar("Punho Divergente(Keitei Ken)", "4");

$Gojo = new Satoru_Gojo();
$Gojo->Atacar("Expansão do Domínio Vazio Ilimitado(Muryōkūsho)", "10");

$Sukuna = new Ryomen_Sukuna();
$Sukuna->Atacar("Expansão do Domínio Santuário Malevolente(Fukuma Mizushi)", "10");

?>