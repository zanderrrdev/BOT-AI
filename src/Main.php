<?php

use pocketmine\plugin\PluginBase;

class Main extends PluginBase {

	private static $instance;

	/**
	 * Get the instance of the plugin
	 *
	 * @return self
	 */
	public static function getInstance(): self {
		return self::$instance;
	}

	public function onEnable() {
		self::$instance = $this;
		$this->getLogger()->info('BOT-AI plugin enabled');
	}
}
