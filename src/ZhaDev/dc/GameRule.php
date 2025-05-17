<?php

namespace ZhaDev\dc;

use pocketmine\network\mcpe\protocol\types\GameRule as PMGameRule;
use pocketmine\network\mcpe\protocol\types\GameRuleType;
use pocketmine\network\mcpe\protocol\serializer\PacketSerializer;

class GameRule extends PMGameRule{

	public function __construct(){
		parent::__construct(true);
	}

	public function getTypeId():int{
		return GameRuleType::BOOL;
	}

	public function encode(PacketSerializer $out): void {
		$out->putBool(true);
	}	
}
