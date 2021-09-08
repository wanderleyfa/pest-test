<?php

declare(strict_types=1);
namespace App\Entity;

final class Player {
    public string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }
}