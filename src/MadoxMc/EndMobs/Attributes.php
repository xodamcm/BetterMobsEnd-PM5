<?php
/*
 *
 *   This program is free software: you can redistribute it and/or modify
 *   it under the terms of the GNU Lesser General Public License as published by
 *   the Free Software Foundation, either version 3 of the License, or
 *   (at your option) any later version.
 *
 *   By: MadoxMc
 *   Discord: MadoxMC#3539
 */

declare(strict_types=1);

namespace MadoxMc\EndMobs;

class Attributes {
	public function isFlying(string $name) : bool {
		return in_array($name, ["EnderDragon"]);
	}

	public function isJumping(string $name) : bool {
		return in_array($name, ["Shulker"]);
	}

	public function isSwimming(string $name) : bool {
		return in_array($name, []);
	}

	public function isHostile(string $name) : bool {
		return in_array($name, [
			"EnderDragon", "Enderman", "Shulker", "Endermite", "Enderman1", "Enderman2", "Enderman3", "Enderman4"
		]);
	}
	
	public function canCatchFire(string $name) : bool {
		return in_array($name, ["Enderman100"]);
	}

	public function getMortalEnemy(string $name) : string {
		$enemies = array("Endermite" => "Enderman", "Endermite" => "Enderman1", "Endermite" => "Enderman2");
		foreach ($enemies as $source => $target) {
			if ($source === $name) {
				return $target;
			}
		}
		return "none";
	}
}
