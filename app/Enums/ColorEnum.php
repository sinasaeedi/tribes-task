<?php

namespace App\Enums;

use Filament\Support\Contracts\HasColor;
use Filament\Support\Contracts\HasLabel;

enum ColorEnum: string implements HasLabel, HasColor
{
    case RED    = 'red';
    case BLUE   = 'blue';
    case YELLOW = 'yellow';
    case GREEN  = 'green';

    public function getLabel(): string
    {
        return match ($this) {
            self::RED    => 'Red',
            self::BLUE   => 'Blue',
            self::YELLOW => 'Yellow',
            self::GREEN  => 'Green',
        };
    }

    public function getColor(): string|array|null
    {
        return match ($this) {
            self::RED    => 'danger',
            self::BLUE   => 'info',
            self::YELLOW => 'warning',
            self::GREEN  => 'success',
        };
    }
}
