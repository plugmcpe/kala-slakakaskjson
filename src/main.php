<?php

namespace heal;

use pocketmine/plugin/PluginBase;
use pocketmine/utils/TextFormat as Color;
use pocketmine/command/CommandSender;
use pocketmine/command/Command;

 class Main extends PluginBase{
public function onEnable() {
   $this->getserver()->getLogger()->info(Color::GREEN,"(healpluginOn)"


    public function onDisable() {
   $this->getserver()->getLogger()->info(Color::RED,"(healpluginOff)"


public function oncommand(CommandSender $sender, command $cmd, $lable, array $args){
   switch($cmd->getName())( /* Switch == Case || $cmd->getName() == command */
    case heal:
    $sender->sendMassage(Color::BLACK,"your are heal your health"
     $sender->getheal()->100();
