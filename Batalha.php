<?php
include('Jogador.php');

class Batalha
{

    public function realizarBatalha($jogador1, $jogador2)
    {
        $pontuacaoJ1 = 0;
        $pontuacaoJ2 = 0;
        for ($i = 0; $i < 6; $i++) {
            $retorno = $this->batalhar($jogador1->getCartas()[$i], $jogador2->getCartas()[$i]);
            if($retorno == 1){
                $pontuacaoJ1 ++;
            } elseif ($retorno == 2){
                $pontuacaoJ2 ++;
            }
        }

        $jogador1->setPontuacao($pontuacaoJ1);
        $jogador2->setPontuacao($pontuacaoJ2);
    }

    public function batalhar($carta1, $carta2)
    {
        $nivel1 = $carta1->getNivel();
        $nivel2 = $carta2->getNivel();

        if ($nivel1 > $nivel2) {
            return 1;
        } elseif ($nivel2 > $nivel1) {
            return 2;
        } else {
            return -1;
        }
    }

    public function verificarFimDeJogo($jogador1, $jogador2)
    {

        if ($jogador1->getPontuacao() > $jogador2->getPontuacao()) {
            return $jogador1->getNome() . " ganhou!";
        } elseif ($jogador2->getPontuacao() > $jogador1->getPontuacao()) {
            return $jogador2->getNome()  . " ganhou!";
        } else {
            return "Empate!";
        }
    }
}
