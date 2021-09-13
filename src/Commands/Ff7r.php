<?php


namespace Bytes\DiscordCommandsBundle\Commands;


use Bytes\DiscordClientBundle\Slash\SlashCommandInterface;
use Bytes\DiscordResponseBundle\Enums\ApplicationCommandOptionType as ACOT;
use Bytes\DiscordResponseBundle\Objects\Application\Command\ChatInputCommand;
use Bytes\DiscordResponseBundle\Objects\Slash\ApplicationCommand;
use Bytes\DiscordResponseBundle\Objects\Slash\ApplicationCommandOption as Option;
use Bytes\DiscordResponseBundle\Objects\Slash\ApplicationCommandOptionChoice;

/**
 *
 */
class Ff7r implements SlashCommandInterface
{
    /**
     * @return ApplicationCommand
     */
    public static function createCommand(): ApplicationCommand
    {
        return ChatInputCommand::createChatCommand('ff7r', 'How long will it be until Final Fantasy VII Remake releases?', [
            Option::create(ACOT::string(), 'Version', 'Which part of the remake?', false, [
                ApplicationCommandOptionChoice::create('Part 1'),
                ApplicationCommandOptionChoice::create('Part 1 Intergrade'),
                ApplicationCommandOptionChoice::create('Part 2')
            ])
        ]);
    }

    /**
     * Return the command name
     * @return string
     */
    public static function getDefaultIndexName(): string
    {
        return 'ff7r';
    }
}