<?php

namespace Bytes\DiscordCommandsBundle\Tests\Commands;

use Bytes\DiscordCommandsBundle\Commands\Ff7r;
use Bytes\DiscordResponseBundle\Objects\Application\Command\ChatInputCommand;
use Bytes\DiscordResponseBundle\Objects\Slash\ApplicationCommand;
use Bytes\Tests\Common\TestValidatorTrait;
use PHPUnit\Framework\TestCase;

/**
 *
 */
class Ff7rTest extends TestCase
{
    use TestValidatorTrait;

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

        $this->assertEquals(Ff7r::getDefaultIndexName(), Ff7r::createCommand()->getName());

        $this->assertEquals(1, $this->validate($command));
    }

    /**
     *
     */
    public function testAllowEveryoneRole()
    {
        $this->assertTrue(Ff7r::allowEveryoneRole());
    }

    /**
     *
     */
    public function testGetPermissionsForRoles()
    {
        $permissions = Ff7r::getPermissionsForRoles();

        $this->assertIsArray($permissions);
        $this->assertCount(0, $permissions);
    }
}