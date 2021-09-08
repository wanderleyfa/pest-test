<?php

declare(strict_types=1);
namespace App\Service;

use App\Entity\Game;

final class PlayGame {
    public function execute(Game $game): String {
        if ($game->movePlayerOne === $game->movePlayerTwo) {
            return "Empate";
        }

        if ($game->movePlayerOne === "Pedra" && $game->movePlayerTwo === "Tesoura") {
            return $game->playerOne->name;
        }

        if ($game->movePlayerOne === "Tesoura" && $game->movePlayerTwo === "Papel") {
            return $game->playerOne->name;
        }

        if ($game->movePlayerOne === "Papel" && $game->movePlayerTwo === "Pedra") {
            return $game->playerOne->name;
        }
        
        return $game->playerTwo->name;
    }
}