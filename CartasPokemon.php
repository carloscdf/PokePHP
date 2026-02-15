<?php

include('Pokemon.php');

class CartasPokemon
{
    public function exibirCartas($jogador1, $jogador2)
    {

        echo "<span class='title'>Cartas de ".$jogador1->getNome()."</span>";

        echo "<div class='cartas'>";
        foreach ($jogador1->getCartas() as $carta) {
            echo "<div class='carta'>";
            echo "<span class='nome'>".$carta->getNome() ."</span>";
            echo "<img class='pokemon' src=". $carta->getFoto() .">";
            echo "<span class='nivel'>".$carta->getNivel() ."</span>";
            echo "<span class='ntipo'>".$carta->getTipo() ."</span>";
            echo "</div>";
        }
        echo "</div>";

        echo "<div class='vs-box'><div class='vs'><span>V/S</span></div></div>";

        echo "<div class='cartas'>";
        foreach ($jogador2->getCartas() as $carta) {
            echo "<div class='carta'>";
            echo "<span class='nome'>".$carta->getNome() ."</span>";
            echo "<img class='pokemon' src=". $carta->getFoto() .">";
            echo "<span class='nivel'>".$carta->getNivel() ."</span>";
            echo "<span class='ntipo'>".$carta->getTipo() ."</span>";
            echo "</div>";
        }
        echo "</div>";
        echo "<span class='title'>Cartas de ".$jogador2->getNome()."</span>";
        echo "</div>";
    }



}
