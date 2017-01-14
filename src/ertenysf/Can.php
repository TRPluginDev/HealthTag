<?php

namespace ertenysf;

use pocketmine\plugin\PluginBase;
use pocketmine\scheduler\PluginTask;
use pocketmine\Server;
use pocketmine\Player;
use pocketmine\Plugin;
use pocketmine\event\Listener;

class Can extends PluginBase implements Listener{
	
	public $config, $users, $particles;
	
	public function onEnable(){
	  $this->getLogger()->info("§aPlugin Aktif Edildi");
		$this->getServer()->getPluginManager()->registerEvents($this,$this);
				$this->getServer()->getScheduler()->scheduleRepeatingTask(new CanT($this),12);
			//	 if($this->getServer()->getPluginManager()->getPlugin("PureChat") != null){
        //    $this->pp = 1;
        //    $this->getLogger()->info("§7» §aPureChat ile bağlandı!");
        }
	    @mkdir($this->getDataFolder());
        if(!file_exists($this->getDataFolder()."config.yml")){
            $this->saveResource("config.yml");
         }
        $cfg = new Config($this->getDataFolder()."config.yml", Config::YAML);
        }
       }
