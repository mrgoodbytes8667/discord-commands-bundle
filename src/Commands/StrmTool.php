<?php


namespace Bytes\DiscordCommandsBundle\Commands;


use Bytes\DiscordClientBundle\Slash\SlashCommandInterface;
use Bytes\DiscordResponseBundle\Enums\ApplicationCommandOptionType as ACOT;
use Bytes\DiscordResponseBundle\Enums\Permissions;
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
        return ChatInputCommand::createChatCommand(static::getDefaultIndexName(), 'Have you heard about Strm.Tool?', [
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

    /**
     * @return bool False will prevent the permissions command from displaying the @everyone role.
     */
    public static function allowEveryoneRole(): bool
    {
        return true;
    }

    /**
     * Returns an array of Discord Permission enums that will be used by the add command to build a list of roles to get
     * access to run the command. Any role that has any permission in this list will get access.
     * @return Permissions[]
     */
    public static function getPermissionsForRoles(): array
    {
        return [];
    }
}