<?php
namespace Motd;
use pocketmine\plugin\PluginBase;
class PixelMotd extends PluginBase {
  public function onEnable(){
    @mkdir($this->getDataFolder());
    if(!file_exists($this->getDataFolder()."motd.pp")){
      touch($this->getDataFolder()."motd.pp");
    }
    $motd = file_get_contents($this->getDataFolder()."motd.pp");
    $this->getServer()->getNetwork()->setName(str_replace("{l}", PHP_EOL, $motd));
  }
}