<?php

namespace ertenysf;

use pocketmine\plugin\PluginBase;
use pocketmine\scheduler\PluginTask;
use pocketmine\Server;
use pocketmine\Player;
use pocketmine\Plugin;
use pocketmine\event\Listener;
					
class CanT extends PluginTask {
 public function onRun($tick){
	   foreach($this->getOwner()->getServer()->getOnlinePlayers() as $o){
	    $player = $o;
		        $cfg = new Config($this->getDataFolder()."config.yml", Con
		$tag = strreplace("{oyuncu}", $o->getName(), $cfg->ge("Tag"));
	    $o->setNameTag($tag . "\n   " . ($o->getHealth() / $o->getMaxHealth() * 20).$cfg->get("Sembol"));
	  }
     }
	}
		
