<?php

declare(strict_types=1);

use App\Entity\Player;
use App\Entity\Game;
use App\Service\PlayGame;

test('Testa o empate', function () {
    $jogadorUm = new Player("JogadorUm");
    $jogadorDois = new Player("JogadorDois");
    $partida = new Game($jogadorUm, $jogadorDois, "Pedra", "Pedra");

    $playGame = new PlayGame();
    $this->assertEquals($playGame->execute($partida),'Empate');
});

test('Pedra ganha', function () {
    $jogadorUm = new Player("JogadorUm");
    $jogadorDois = new Player("JogadorDois");
    $partida = new Game($jogadorUm, $jogadorDois, "Pedra", "Tesoura");

    $playGame = new PlayGame();
    $this->assertEquals($playGame->execute($partida), "JogadorUm");
});

test('Tesoura Ganha', function () {
    $jogadorUm = new Player("JogadorUm");
    $jogadorDois = new Player("JogadorDois");
    $partida = new Game($jogadorUm, $jogadorDois, "Tesoura", "Papel");

    $playGame = new PlayGame();
    $this->assertEquals($playGame->execute($partida), "JogadorUm");
});

test('Papel ganha', function () {
    $jogadorUm = new Player("JogadorUm");
    $jogadorDois = new Player("JogadorDois");
    $partida = new Game($jogadorUm, $jogadorDois, "Pedra", "Papel");

    $playGame = new PlayGame();
    $this->assertEquals($playGame->execute($partida), "JogadorDois");
});

test('Tesoura perde', function () {
    $jogadorUm = new Player("JogadorUm");
    $jogadorDois = new Player("JogadorDois");
    $partida = new Game($jogadorUm, $jogadorDois, "Tesoura", "Pedra");

    $playGame = new PlayGame();
    $this->assertEquals($playGame->execute($partida), "JogadorDois");
});

test('Movimento jogador um inexistente', function () {
    $jogadorUm = new Player("JogadorUm");
    $jogadorDois = new Player("JogadorDois");
    $partida = new Game($jogadorUm, $jogadorDois, "Tesouras", "Pedra");

    $playGame = new PlayGame();
    $this->assertEquals($playGame->execute($partida), "Movimento inexistente");
});

test('Movimento jogador dois inexistente', function () {
    $jogadorUm = new Player("JogadorUm");
    $jogadorDois = new Player("JogadorDois");
    $partida = new Game($jogadorUm, $jogadorDois, "Tesoura", "rocha");

    $playGame = new PlayGame();
    $this->assertEquals($playGame->execute($partida), "Movimento inexistente");
});