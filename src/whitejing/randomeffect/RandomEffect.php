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

namespace whitejing\randomeffect;

use whitejing\randomeffect\command\RandomEffectCommand;

use pocketmine\plugin\PluginBase;

class RandomEffect extends PluginBase{
	
	/** @var string */
	public static $prefix = "§l§b[ §f랜덤 버프§b ]§r";
	
	public function onEnable() : void{
		$this->getServer()->getCommandMap()->register("랜덤버프", new RandomEffectCommand($this));
	}
}
