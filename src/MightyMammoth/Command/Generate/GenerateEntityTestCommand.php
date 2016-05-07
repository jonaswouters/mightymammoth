<?php declare(strict_types = 1);

namespace MightyMammoth\Command\Generate;

use ReflectionClass;
use ReflectionProperty;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Templating\EngineInterface;

/**
 * Class GenerateEntityTestCommand
 *
 * @package MightyMammoth\Command\Generator
 */
class GenerateEntityTestCommand extends Command
{
    /**
     * @var EngineInterface
     */
    private $templating;

    /**
     * Configures the current command.
     */
    protected function configure()
    {
        $this
            ->setName('generate:entity-test')
            ->setDescription('Generates tests for an entity')
            ->addArgument(
                'entity',
                InputArgument::REQUIRED,
                'For what entity do you want to generate tests?'
            )
            ->addOption('dry-run', 'd', InputOption::VALUE_OPTIONAL, 'Dry-run don\'t write to file', false);
    }

    /**
     * Executes the current command.
     *
     * @param InputInterface $input An InputInterface instance
     * @param OutputInterface $output An OutputInterface instance
     *
     * @return null|int null or 0 if everything went fine, or an error code
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $dryRun = $input->getOption('dry-run');
        $entityName = $input->getArgument('entity');
        $entity = '\\MightyMammoth\\Entity\\' . $entityName;
        $entityPath = '/MightyMammoth/Entity/' . $entityName . 'Test.php';

        $instance = new $entity;

        $reflect = new ReflectionClass($instance);
        $reflectionProperties = $reflect->getProperties(ReflectionProperty::IS_PRIVATE | ReflectionProperty::IS_PROTECTED);

        $properties = [];
        foreach ($reflectionProperties as $property) {
            $properties[] = ucfirst($property->name);
        }

        $result = $this->getTemplating()->render('command/generate/entity-test-generator/class.twig', [
            'entity_dir' => null,
            'entity_name' => $entityName,
            'properties' => $properties,
        ]);

        $output->writeln('Generating tests for entity ' . $entity);

        if (!$dryRun) {
            $this->saveClass($entityPath, $result);
        } else {
            $output->writeln('Class content (dry-run):');
            $output->write($result);
        }

        $output->writeln('Done Generating tests');
    }

    /**
     * @return EngineInterface
     */
    public function getTemplating() : EngineInterface
    {
        return $this->templating;
    }

    /**
     * @param EngineInterface $templating
     *
     * @return GenerateEntityTestCommand
     */
    public function setTemplating(EngineInterface $templating) : GenerateEntityTestCommand
    {
        $this->templating = $templating;

        return $this;
    }

    /**
     * @param string $entityPath
     * @param string $result
     * @codeCoverageIgnore
     */
    protected function saveClass($entityPath, $result)
    {
        file_put_contents('tests' . $entityPath, $result);
    }
}
