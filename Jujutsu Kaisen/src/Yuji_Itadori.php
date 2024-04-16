<?php

namespace App;

use App\Personagem;

class Yuji_Itadori implements Personagem{

    public function Atacar($nome_Habilidade, $custo_Habilidade){

        $classe = 'Yuji_Itadori';

        echo "
        \n --------------------------------------
        \n Classe: $classe
        \n Nome da Habilidade: $nome_Habilidade.
        \n Custo da Habilidade: $custo_Habilidade.
        \n --------------------------------------
        ";

    }
    
}

?>