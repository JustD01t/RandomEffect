<?php

/*
 * 
 * __        ___     _ _           _ _
 * \ \      / / |__ (_) |_ ___    | (_)_ __   __ _
 *  \ \ /\ / /| '_ \| | __/ _ \_  | | | '_ \ / _` |
 *   \ V  V / | | | | | ||  __/ |_| | | | | | (_| |
 *    \_/\_/  |_| |_|_|\__\___|\___/|_|_| |_|\__, |
 *                                           |___/
 * 
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Lesser General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 * 
 * @author WhiteJing
 * @link https://github.com/JustD01t/RandomEffect
 * 
 * @team JustD01t (https://github.com/JustD01t/)
 * 
 * 
*/

declare(strict_types=1);

namespace whitejing\randomeffect\command;

use whitejing\randomeffect\RandomEffect;

use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\entity\Effect;
use pocketmine\entity\EffectInstance;

class RandomEffectCommand extends Command{
	
	private $plugin;
	
	public function __construct(RandomEffect $plugin){
		parent::__construct("랜덤버프", "랜덤버프 명령어", "/랜덤버프");
		$this->setPermission("random.effect.use");
		
		$this->plugin = $plugin;
	}
	
	public function execute(CommandSender $sender, string $label, array $args):bool{
		
		(int) $effect = mt_rand(1, 25);
		(int) $duration = mt_rand(30, 60)*20;
		(int) $amplifier = mt_rand(0, 3);
		
		(int) $second = $duration / 20;
		
		$sender->addEffect(new EffectInstance(Effect::getEffect($effect), $duration, $amplifier));
		$sender->sendMessage(RandomEffect::$prefix . " ID: {$effect} | {$amplifier}단계 | {$second}초 지급");
		
		return true;
	}
}
