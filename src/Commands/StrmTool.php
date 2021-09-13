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
class StrmTool implements SlashCommandInterface
{
    /**
     * @return ApplicationCommand
     */
    public static function createCommand(): ApplicationCommand
    {
        return ChatInputCommand::createChatCommand('strmtool', 'Have you heard about Strm.Tool?', [
            Option::create(ACOT::string(), 'haveiheardofstrmtool', 'Yes or No?', true, [
                ApplicationCommandOptionChoice::create('No'),
                ApplicationCommandOptionChoice::create('Yes'),
            ])
        ]);
    }

    /**
     * Return the command name
     * @return string
     */
    public static function getDefaultIndexName(): string
    {
        return 'strmtool';
    }
}