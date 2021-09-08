<?php

declare(strict_types=1);
namespace App\Entity;

final class Game {
    public Player $playerOne;
    public Player $playerTwo;
    public string $movePlayerOne;
    public string $movePlayerTwo;

    public function __construct($playerOne, $playerTwo, $movePlayerOne, $movePlayerTwo)
    {
        $this->playerOne = $playerOne;
        $this->playerTwo = $playerTwo;
        $this->movePlayerOne = $movePlayerOne;
        $this->movePlayerTwo = $movePlayerTwo;
    }
}