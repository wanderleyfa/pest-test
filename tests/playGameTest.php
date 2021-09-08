<?php

declare(strict_types=1);

use App\Entity\Player;
use App\Entity\Game;
use App\Service\PlayGame;

test('testa o empate', function () {
    $jogador1 = new Player("Felipe");
    $jogador2 = new Player("Zero");
    $partida = new Game($jogador1, $jogador2, "Pedra", "Pedra");

    $playGame = new PlayGame();
    $this->assertEquals($playGame->execute($partida),'Empate');
});

test('Pedra ganha', function () {
    $jogador1 = new Player("Felipe");
    $jogador2 = new Player("Zero");
    $partida = new Game($jogador1, $jogador2, "Pedra", "Tesoura");

    $playGame = new PlayGame();
    $this->assertEquals($playGame->execute($partida), "Felipe");
});

test('Tesoura Ganha', function () {
    $jogador1 = new Player("Felipe");
    $jogador2 = new Player("Zero");
    $partida = new Game($jogador1, $jogador2, "Tesoura", "Papel");

    $playGame = new PlayGame();
    $this->assertEquals($playGame->execute($partida), "Felipe");
});

test('Papel ganha', function () {
    $jogador1 = new Player("Felipe");
    $jogador2 = new Player("Zero");
    $partida = new Game($jogador1, $jogador2, "Pedra", "Papel");

    $playGame = new PlayGame();
    $this->assertEquals($playGame->execute($partida), "Zero");
});

test('Tesoura perde', function () {
    $jogador1 = new Player("Felipe");
    $jogador2 = new Player("Zero");
    $partida = new Game($jogador1, $jogador2, "Tesoura", "Pedra");

    $playGame = new PlayGame();
    $this->assertEquals($playGame->execute($partida), "Zero");
});
