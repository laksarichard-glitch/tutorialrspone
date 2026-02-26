<?php

declare(strict_types=1);

namespace Bga\Games\tutorialrspone\States;

use Bga\GameFramework\StateType;
use Bga\Games\tutorialrspone\Game;
use Bga\GameFramework\States\GameState;
use Bga\Games\tutorialrspone\States\NewHand;

class EndHand extends GameState
{
    public function __construct(protected Game $game)
    {
        parent::__construct(
            $game,
            id: 40,
            type: StateType::GAME,
            description: "",
        );
    }

    public function onEnteringState()
    {
        return NewHand::class;
    }
}
