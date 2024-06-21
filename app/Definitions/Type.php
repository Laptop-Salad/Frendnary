<?php

namespace App\Definitions;

enum Type: int
{
    case Definition = 1;
    case Lore = 2;

    public function colour() {
        return match($this) {
            self::Definition => "bg-primary",
            self::Lore => "bg-action",
        };
    }
}
