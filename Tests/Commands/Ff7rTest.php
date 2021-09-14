<?php

namespace Bytes\DiscordCommandsBundle\Tests\Commands;

use Bytes\DiscordCommandsBundle\Commands\Ff7r;
use Bytes\DiscordResponseBundle\Objects\Application\Command\ChatInputCommand;
use Bytes\DiscordResponseBundle\Objects\Slash\ApplicationCommand;
use PHPUnit\Framework\TestCase;

/**
 *
 */
class Ff7rTest extends TestCase
{
    /**
     *
     */
    public function testGetDefaultIndexName()
    {
        $this->assertEquals('ff7r', Ff7r::getDefaultIndexName());
    }

    /**
     *
     */
    public function testCreateCommand()
    {
        $command = Ff7r::createCommand();
        $this->assertInstanceOf(ApplicationCommand::class, $command);
        $this->assertInstanceOf(ChatInputCommand::class, $command);
    }
}