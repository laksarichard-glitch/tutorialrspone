<?php

declare(strict_types=1);

namespace Bga\Games\tutorialrspone\States;

use Bga\GameFramework\StateType;
use Bga\GameFramework\States\GameState;
use Bga\Games\tutorialrspone\Game;

class NewHand extends GameState
{
    public function __construct(protected Game $game)
    {
        parent::__construct(
            $game,
            id: 2, // the id of the state
            type: StateType::GAME, // This type means that no player is active, and the game will automatically progress
            updateGameProgression: true, // entering this state can update the progress bar of the game
        );
    }

    // The action we do when entering the state
    public function onEnteringState()
    {
        return PlayerTurn::class;
    }
}
