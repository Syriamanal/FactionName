<?php
namespace Blubberboy333\FactionName

use pocketmine\event\player\PlayerChatEvent;
use pocketmine\event\player\PlayerJoinEvent;
use pocketmine\Player;
use FactionsPro\FactionsPro;
use pocketmine\event\PlayerLeaveEvent;

class Main extends PluginBase implements Litsener{

public function onEnable(){
	$FactionsPro = getServer()->getPluginManager()->getPlugin("FactionsPro");
	
	if($FactionsPro == null){
		$this->getLogger()->info(TextFormat::RED."You don't have FactionsPro! This plugin only works with FactionsPro!")
	}
}
	else{
	$this->getLogger()->info("FactionName loaded successfully!")
}

public function onDisable(){
	$this->getLogger()->info("FactionName disabled successfully!")
}

	$faction = $FactionsPro->getFactionName
public function onChat(PlayerChatEvent $event){
	$event->setFormat($this->format)
}

public function onJoin(PlayerJoinEvent $event){
			$this->updateRank($event->getPlayer());
	}
	
	public function getFaction(Player $player){
		if(isset($this->rankDatabase[strtolower($player->getName())])){
			return $this->rankDatabase[strtolower($player->getName())];
		}
		else{
			$this->rankDatabase[strtolower($player->getName())] = $this->getFactionsPro()->FactionName()->get("Faction");
			return $this->getFactionsPro()->FactionName()->get("Faction");

}
?>
