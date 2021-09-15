<?php

namespace broadcast;

use pocketmine\scheduler\Task;
use pocketmine\Server;
use pocketmine\utils\TextFormat;

class BroadcastTask extends Task{
    public function onRun(int $currentTick)
    {
        $messages = [
            TextFormat::DARK_GREEN . "Hello world",
            TextFormat::RED . "yall thought I gave up huh?",
            TextFormat::AQUA . "Planning this for months (3/12/21)",
            TextFormat::DARK_PURPLE . "AuraD...",
            TextFormat::GOLD . "GovHCF2.0!",
        ];
        Server::getInstance()->broadcastMessage(TextFormat::GOLD . "Broadcast: " . self::random($messages));
    }
    public static function random(array $array){
        return $array[array_rand($array)];
    }
}