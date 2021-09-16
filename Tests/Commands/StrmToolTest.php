<?php

namespace Bytes\DiscordCommandsBundle\Tests\Commands;

use Bytes\DiscordCommandsBundle\Commands\StrmTool;
use Bytes\DiscordResponseBundle\Objects\Application\Command\ChatInputCommand;
use Bytes\DiscordResponseBundle\Objects\Slash\ApplicationCommand;
use Bytes\Tests\Common\TestValidatorTrait;
use PHPUnit\Framework\TestCase;

/**
 *
 */
class StrmToolTest extends TestCase
{
    use TestValidatorTrait;

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

        $this->assertEquals(StrmTool::getDefaultIndexName(), StrmTool::createCommand()->getName());

        $this->assertEquals(1, $this->validate($command));
    }

    /**
     *
     */
    public function testAllowEveryoneRole()
    {
        $this->assertTrue(StrmTool::allowEveryoneRole());
    }

    /**
     *
     */
    public function testGetPermissionsForRoles()
    {
        $permissions = StrmTool::getPermissionsForRoles();

        $this->assertIsArray($permissions);
        $this->assertCount(0, $permissions);
    }
}