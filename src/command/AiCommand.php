<?php

namespace command;

use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\Player;
use pocketmine\Server;

class AiCommand extends Command {

	private $plugin;

	/**
	 * AiCommand constructor.
	 *
	 * @param Main $plugin
	 */
	public function __construct($plugin) {
		parent::__construct('ai', 'Send a request to the AI', '/ai <message>');
		$this->plugin = $plugin;
		$this->setPermission('ai.request');
	}

	/**
	 * Execute the AI command.
	 *
	 * @param CommandSender $sender
	 * @param string $label
	 * @param array $args
	 * @return bool
	 */
	public function execute(CommandSender $sender, string $label, array $args): bool {
		if (!$sender instanceof Player) {
			$sender->sendMessage('§cThis command can only be executed in-game');
			return false;
		}

		if (!$this->testPermission($sender)) {
			return false;
		}

		if (empty($args)) {
			$sender->sendMessage('§cUsage: /ai <message>');
			return false;
		}

		return true;
	}
}
