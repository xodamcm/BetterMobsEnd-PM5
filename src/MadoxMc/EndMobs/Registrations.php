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

use pocketmine\data\bedrock\EntityLegacyIds;
use pocketmine\entity\EntityDataHelper;
use pocketmine\entity\EntityFactory;
use pocketmine\nbt\tag\CompoundTag;
use pocketmine\world\World;
use MadoxMc\EndMobs\Entities\MobsEntity;
use MadoxMc\EndMobs\Entities\Enderman1;
use MadoxMc\EndMobs\Entities\Enderman2;
use MadoxMc\EndMobs\Entities\Enderman3;
use MadoxMc\EndMobs\Entities\Enderman4;
use MadoxMc\EndMobs\Entities\Enderman5;
use MadoxMc\EndMobs\Entities\Enderman6;
use MadoxMc\EndMobs\Entities\Enderman7;
use MadoxMc\EndMobs\Entities\Enderman8;
use MadoxMc\EndMobs\Entities\Enderman9;
use MadoxMc\EndMobs\Entities\Enderman10;
use MadoxMc\EndMobs\Entities\Enderman11;
use MadoxMc\EndMobs\Entities\Enderman12;
use MadoxMc\EndMobs\Entities\Enderman13;
use MadoxMc\EndMobs\Entities\Enderman14;
use MadoxMc\EndMobs\Entities\Enderman15;
use MadoxMc\EndMobs\Entities\Enderman16;
use MadoxMc\EndMobs\Entities\Enderman17;
use MadoxMc\EndMobs\Entities\Enderman18;
use MadoxMc\EndMobs\Entities\Enderman19;
use MadoxMc\EndMobs\Entities\Enderman20;
use MadoxMc\EndMobs\Entities\Enderman21;
use MadoxMc\EndMobs\Entities\Enderman22;
use MadoxMc\EndMobs\Entities\Enderman23;
use MadoxMc\EndMobs\Entities\Enderman24;
use MadoxMc\EndMobs\Entities\Enderman25;
use MadoxMc\EndMobs\Entities\Enderman26;
use MadoxMc\EndMobs\Entities\Enderman27;
use MadoxMc\EndMobs\Entities\Enderman28;
use MadoxMc\EndMobs\Entities\Enderman29;
use MadoxMc\EndMobs\Entities\Enderman30;
use MadoxMc\EndMobs\Entities\Enderman31;
use MadoxMc\EndMobs\Entities\Enderman32;
use MadoxMc\EndMobs\Entities\Enderman33;
use MadoxMc\EndMobs\Entities\Enderman34;
use MadoxMc\EndMobs\Entities\Enderman35;
use MadoxMc\EndMobs\Entities\Enderman36;
use MadoxMc\EndMobs\Entities\Enderman37;
use MadoxMc\EndMobs\Entities\Enderman38;
use MadoxMc\EndMobs\Entities\Enderman39;
use MadoxMc\EndMobs\Entities\Enderman40;
use MadoxMc\EndMobs\Entities\Enderman41;
use MadoxMc\EndMobs\Entities\Enderman42;
use MadoxMc\EndMobs\Entities\Enderman43;
use MadoxMc\EndMobs\Entities\Enderman44;
use MadoxMc\EndMobs\Entities\Enderman45;
use MadoxMc\EndMobs\Entities\Enderman46;
use MadoxMc\EndMobs\Entities\Enderman47;
use MadoxMc\EndMobs\Entities\Enderman48;
use MadoxMc\EndMobs\Entities\Enderman49;
use MadoxMc\EndMobs\Entities\Enderman50;
use MadoxMc\EndMobs\Entities\Enderman51;
use MadoxMc\EndMobs\Entities\Enderman52;
use MadoxMc\EndMobs\Entities\Enderman53;
use MadoxMc\EndMobs\Entities\Enderman100;
use MadoxMc\EndMobs\Entities\Endermite;
use MadoxMc\EndMobs\Entities\Shulker;
use MadoxMc\EndMobs\Entities\Enderman;
use MadoxMc\EndMobs\Entities\EnderDragon;

class Registrations {
	public function registerEntities() {
		Main::$instance->classes = $this->getClasses();
		$entityFactory = EntityFactory::getInstance();
		foreach (Main::$instance->classes as $entityName => $typeClass) {
			$entityFactory->register($typeClass,
				static function(World $world, CompoundTag $nbt) use($typeClass): MobsEntity {
					return new $typeClass(EntityDataHelper::parseLocation($nbt, $world), $nbt);
				},
			[$entityName], $typeClass::TYPE_ID);
		}
	}

	public function getClasses() : array {
		return [
			"Enderman1" => Enderman1::class,
			"Enderman2" => Enderman2::class,
			"Enderman3" => Enderman3::class,
			"Enderman4" => Enderman4::class,
			"Enderman5" => Enderman5::class,
			"Enderman6" => Enderman6::class,
			"Enderman7" => Enderman7::class,
			"Enderman8" => Enderman8::class,
			"Enderman9" => Enderman9::class,
			"Enderman10" => Enderman10::class,
			"Enderman11" => Enderman11::class,
			"Enderman12" => Enderman12::class,
			"Enderman13" => Enderman13::class,
			"Enderman14" => Enderman14::class,
			"Enderman15" => Enderman15::class,
			"Enderman16" => Enderman16::class,
			"Enderman17" => Enderman17::class,
			"Enderman18" => Enderman18::class,
			"Enderman19" => Enderman19::class,
			"Enderman20" => Enderman20::class,
			"Enderman21" => Enderman21::class,
			"Enderman22" => Enderman22::class,
			"Enderman23" => Enderman23::class,
			"Enderman24" => Enderman24::class,
			"Enderman25" => Enderman25::class,
			"Enderman26" => Enderman26::class,
			"Enderman27" => Enderman27::class,
			"Enderman28" => Enderman28::class,
			"Enderman29" => Enderman29::class,
			"Enderman30" => Enderman30::class,
			"Enderman31" => Enderman31::class,
			"Enderman32" => Enderman32::class,
			"Enderman33" => Enderman33::class,
			"Enderman34" => Enderman34::class,
			"Enderman35" => Enderman35::class,
			"Enderman36" => Enderman36::class,
			"Enderman37" => Enderman37::class,
			"Enderman38" => Enderman38::class,
			"Enderman39" => Enderman39::class,
			"Enderman40" => Enderman40::class,
			"Enderman41" => Enderman41::class,
			"Enderman42" => Enderman43::class,
			"Enderman44" => Enderman44::class,
			"Enderman45" => Enderman45::class,
			"Enderman46" => Enderman46::class,
			"Enderman47" => Enderman47::class,
			"Enderman48" => Enderman48::class,
			"Enderman49" => Enderman49::class,
			"Enderman50" => Enderman51::class,
			"Enderman52" => Enderman52::class,
			"Enderman53" => Enderman53::class,
			"Enderman100" => Enderman100::class,			
			"Shulker" => Shulker::class,
			"Endermite" => Endermite::class,
			"Enderman" => Enderman::class,
			"EnderDragon" => EnderDragon::class
		];
	}
}
