<?php

namespace MightyMammoth\Command\Generate;

use Symfony\Component\Console\Application;
use Symfony\Component\Console\Tester\CommandTester;
use Symfony\Component\Templating\EngineInterface;

/**
 * Class GenerateEntityTestCommandTest
 *
 * @package MightyMammoth\Command\Generate
 */
class GenerateEntityTestCommandTest extends \PHPUnit_Framework_TestCase
{
    public function testExecution()
    {
        $commandTester = $this->getCommandTester();

        $commandTester->execute([
            'entity' => 'Contact',
        ]);

        $this->assertContains(
            'Generating tests for entity \MightyMammoth\Entity\Contact',
            $commandTester->getDisplay()
        );
    }

    public function testDryRunExecution()
    {
        $commandTester = $this->getCommandTester(0);

        $commandTester->execute([
            'entity' => 'Contact',
            '--dry-run' => true
        ]);

        $this->assertContains(
            'Class content (dry-run)',
            $commandTester->getDisplay()
        );
    }

    public function testTemplatingProperty()
    {
        $command = new GenerateEntityTestCommand();

        /** @var EngineInterface $templatingMock */
        $templatingMock = $this->getMock('Symfony\Component\Templating\EngineInterface');

        $this->assertInstanceOf(GenerateEntityTestCommand::class, $command->setTemplating($templatingMock));
        $this->assertInstanceOf(EngineInterface::class, $command->getTemplating());
    }

    /**
     * @param int $saveClassCalls
     *
     * @return CommandTester
     */
    public function getCommandTester($saveClassCalls = 1)
    {
        /** @var \Symfony\Component\HttpKernel\Kernel $kernelMock */
        $kernelMock = $this->getMockBuilder('Symfony\Component\HttpKernel\Kernel')
            ->disableOriginalConstructor()
            ->getMock();

        /** @var EngineInterface|\PHPUnit_Framework_MockObject_MockObject $templatingMock */
        $templatingMock = $this->getMockBuilder('Symfony\Component\Templating\EngineInterface')->getMock();
        $templatingMock->expects($this->exactly(1))->method('render')->withAnyParameters();

        /** @var GenerateEntityTestCommand|\PHPUnit_Framework_MockObject_MockObject $generateEntityTestCommand */
        $generateEntityTestCommand = $this->getMock(
            'MightyMammoth\Command\Generate\GenerateEntityTestCommand',
            ['saveClass']
        );
        $generateEntityTestCommand->expects($this->exactly($saveClassCalls))->method('saveClass')->withAnyParameters();
        $generateEntityTestCommand->setTemplating($templatingMock);

        $application = new Application($kernelMock);
        $application->add($generateEntityTestCommand);

        $command = $application->find('generate:entity-test');
        $commandTester = new CommandTester($command);
        return $commandTester;
    }
}
