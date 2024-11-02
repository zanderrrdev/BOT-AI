# BOT-AI

- **BOT-AI** is a [PocketMine-MP](https://github.com/pmmp/PocketMine-MP) plugin designed for Minecraft PE servers, enabling interaction with the AInnova AI model.
- With BOT-AI, players can send messages to an AI and receive dynamic responses directly within the game.
- This plugin works seamlessly with [AInnova MCPE Integration](https://github.com/zanderrrdev/AInnova-MCPE-Integration), which provides the core AI functionalities.

## Features

1. **In-game AI Messaging**: Players can use the `/ai` command to send requests and receive AI responses.
2. **Async Response Handling**: Keeps your server running smoothly without interrupting gameplay.
3. **Configurable Settings**: Customize your API token and model to tailor the AI’s responses.

## Requirements
- **PocketMine-MP**: Compatible with PocketMine-MP 3.0.0 (Minecraft PE 1.1.0 - 1.1.7).
- **AInnova Plugin**: Install the AInnova plugin from [AInnova MCPE Integration](https://github.com/zanderrrdev/AInnova-MCPE-Integration) for core AI functionalities.

## Installation

1. Clone or download the BOT-AI plugin files.
2. Place the `BOT-AI` folder into the `plugins` directory of your [PocketMine-MP](https://github.com/pmmp/PocketMine-MP) server.
3. Download and set up the [AInnova plugin](https://github.com/zanderrrdev/AInnova-MCPE-Integration) from the repository.
4. Restart your server.

## Configuration

Place a `settings.json` file in the BOT-AI plugin folder with the following structure:

```json
{
    "token": "your_api_token",
    "model": "your_model_id"
}
```

- Obtain the API token at [api.ai-nnova.ru](https://api.ai-nnova.ru).
- Explore available models at [api.ai-nnova.ru/models](https://api.ai-nnova.ru/models).

## Usage

In-game, players can use the `/ai <message>` command to send messages to the AI and receive responses. The plugin’s asynchronous handling ensures that server performance is not affected by these interactions.

## Example Code

```php
// Sending a message to the AI
$plugin = Main::getInstance();
$plugin->getObject()->sendMessage('Hello AI!', function (Server $server, array $response) {
    if (isset($response['response'])) {
        $server->getLogger()->info('AI Response: ' . $response['response']);
    } else {
        $server->getLogger()->error('Error: ' . ($response['error'] ?? 'Unknown error'));
    }
});
```

## Contributing

We welcome contributions! Please submit issues or pull requests to improve BOT-AI.

## License

This project is licensed under the MIT License.
