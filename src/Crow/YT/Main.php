<?php

namespace YT;

use pocketmine\Server;
use pocketmine\Player;
use pocketmine\plugin\PluginBase;

use pocketmine\command\{Command, CommandSender);

class Main extends PluginBase{

   public function onEnable()
}

public fuction onCommand(CommandSender $player,Command $cmd, string $label, array $args) :bool {

            switch($cmd->getName(){
              case "YT":
              if($player instanceof Player){
                  $player->sendMessage("YT : Crow Balde");
              }
              break;
            }
              return true;
            
            }
