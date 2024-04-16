<?php

namespace App;

use App\Personagem;

class Satoru_Gojo implements Personagem{

    public function Atacar($nome_Habilidade, $custo_Habilidade){

        $classe = 'Satoru_Gojo';

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