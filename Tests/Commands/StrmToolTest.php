<?php

namespace Bytes\DiscordCommandsBundle\Tests\Commands;

use Bytes\DiscordCommandsBundle\Commands\StrmTool;
use Bytes\DiscordResponseBundle\Objects\Application\Command\ChatInputCommand;
use Bytes\DiscordResponseBundle\Objects\Slash\ApplicationCommand;
use PHPUnit\Framework\TestCase;

/**
 *
 */
class StrmToolTest extends TestCase
{
    /**
     *
     */
    public function testGetDefaultIndexName()
    {
        $this->assertEquals('strmtool', StrmTool::getDefaultIndexName());
    }

    /**
     *
     */
    public function testCreateCommand()
    {
        $command = StrmTool::createCommand();
        $this->assertInstanceOf(ApplicationCommand::class, $command);
        $this->assertInstanceOf(ChatInputCommand::class, $command);
    }
}