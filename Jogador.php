<?php

include('CartasPokemon.php');

class Jogador
{
    private $nome;
    private $cartas;
    private $pontuacao;

    public function __construct($nome)
    {
        $this->nome = $nome;
        $this->cartas = array();
        $this->pontuacao = 0;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function getCartas()
    {
        return $this->cartas;
    }

    public function getPontuacao()
    {
        return $this->pontuacao;
    }

    public function setPontuacao($pontuacao){
        $this->pontuacao = $pontuacao;
    }

    public function setCartas($deck)
    {
        shuffle($deck);
        for ($i = 0; $i < 6; $i++) {
            $this->cartas[] = new Pokemon($deck[$i]->getNome(), $deck[$i]->getTipo(), $deck[$i]->getFoto());
        }
    }

}
