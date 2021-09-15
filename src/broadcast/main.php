<?php

namespace broadcast;

use pocketmine\plugin\PluginBase;

class main extends PluginBase{
    public function onEnable(){
       $this->getLogger()->info("Plugin Enabled!");
       $this->scheduleTasks();
    }
    public function onLoad(){
       $this->getLogger()->info("Plugin Loading!");
    }
    public function onDisable(){
        $this->getLogger()->info("Plugin Disabled");
    }
    public function scheduleTasks(){
        $this->getScheduler()->scheduleRepeatingTask(new BroadcastTask(), 300);
    }
}