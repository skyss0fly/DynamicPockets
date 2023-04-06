
<?php

namespace skyss0fly\DynamicPockets;

use pocketmine\plugin\PluginBase;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;

class Main extends PluginBase{

switch($command->getName()){
if($sender->hasPermission("openpocket")){
$inventory = $this->getServer()->createInventory($player, 9, "My Pocket");
$player->addWindow($inventory);
$inventory->setContents([item1, item2, item3]);
