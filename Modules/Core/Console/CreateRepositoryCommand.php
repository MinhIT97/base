<?php

namespace Modules\Core\Console;

use Illuminate\Console\Command;
use Illuminate\Filesystem\Filesystem;
use Illuminate\Support\Str;
use Nwidart\Modules\Traits\ModuleCommandTrait;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputOption;
use \Exception;

class CreateRepositoryCommand extends Command
{

    use ModuleCommandTrait;
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $name = 'module:make-repository';

    protected $argumentName = 'repository';
    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a repository class in module';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {

        $repositoryNames = $this->argument('repository');

        $interface_stub = $this->getInterfaceStub();
        $eloquent_stub  = $this->getEloquentStub();

        try {
            $this->makeRepository($this->getModuleName(), $repositoryNames, $interface_stub);
            $this->makeRepository($this->getModuleName(), $repositoryNames, $eloquent_stub, true);
        } catch (Exception $e) {
            $this->error($e->getMessage());
            return 1;
        }

        $this->info('Repository generate successful');

        return 0;
    }

    /**
     * Get the console command arguments.
     *
     * @return array
     */
    protected function getArguments()
    {
        return [
            ['repository', InputArgument::REQUIRED, 'The name of the controller class.'],
            ['module', InputArgument::OPTIONAL, 'The name of module will be used.'],
        ];
    }

    /**
     * Get the console command options.
     *
     * @return array
     */
    protected function getOptions()
    {
        return [
            ['example', null, InputOption::VALUE_OPTIONAL, 'An example option.', null],
        ];
    }

    /**
     * Get content in stub file
     *
     * @return string
     */
    protected function getInterfaceStub()
    {

        return app(Filesystem::class)->get(config('core.stubs.repository_interface'));
    }

    /**
     * Get content in stub file
     *
     * @return string
     */
    protected function getEloquentStub()
    {
        return app(Filesystem::class)->get(config('core.stubs.repository_eloquent'));
    }

    /**
     * Create repository file
     *
     * @return void
     */
    protected function makeRepository($packageName, $repositoryNames, $stub, $eloquent = false)
    {

        $module = $this->laravel['modules']->findOrFail($this->getModuleName());

        $nameSpace = $this->getClassNamespace($module) . '\Repositories';

        $names      = $repositoryNames;
        $className = $this->getRepositoryName();

        $fileSystem  = app(Filesystem::class);
        $package_path = base_path() . '/' . $this->laravel['modules']->config('namespace') . '/' . $packageName;

        $repositoryFolderPath = $package_path . '/Repositories';

        if (!$fileSystem->isDirectory($package_path)) {
            throw new Exception('Package does not exist');
        }

        $repositoryFolderPath = $repositoryFolderPath;

        $arrayClassName = explode('/', $className);


        if (count($arrayClassName) > 1) {
            $arrayClassName         = collect($arrayClassName);
            $className             = $arrayClassName->pop();
            $endNameFolder          = implode('/', $arrayClassName->all());
            $repositoryFolderPath = $repositoryFolderPath . '/' . $endNameFolder;

            $repositoryTemplate = str_replace('{{name}}', $className, $stub);

            $nameSpace .= '\\' . str_replace('/', '\\' , $endNameFolder);

            $repositoryTemplate    = str_replace('$CLASS_NAMESPACE$', $nameSpace , $repositoryTemplate);


        } else {
            $repositoryTemplate = str_replace('{{name}}', $className, $stub);
            $repositoryTemplate = str_replace('$CLASS_NAMESPACE$', $nameSpace, $repositoryTemplate);


        }

        if (!$fileSystem->isDirectory($repositoryFolderPath)) {
            $fileSystem->makeDirectory($repositoryFolderPath, 0755, true);
        }

        $file_path = $eloquent ? $repositoryFolderPath . '/' . $className . 'RepositoryEloquent.php' : $repositoryFolderPath . '/' . $className . 'Repository.php';

        if ($fileSystem->isFile($file_path)) {
            throw new Exception('Repository already existed');
        }

        $fileSystem->put($file_path, $repositoryTemplate);
    }

    public function getClassNamespace($module)
    {
        // $extra = str_replace($this->getClass(), '', $this->argument($this->argumentName));

        // $extra = str_replace('/', '\\', $extra);

        $namespace = $this->laravel['modules']->config('namespace');

        $namespace .= '\\' . $module->getStudlyName();

        // $namespace .= '\\' . $this->getDefaultNamespace();

        // $namespace .= '\\' . $extra;

        $namespace = str_replace('/', '\\', $namespace);
        return trim($namespace, '\\');
    }

    protected function getRepositoryName()
    {
        $repository = Str::studly($this->argument('repository'));
        return $repository;
    }

    public function getClass()
    {
        return class_basename($this->argument($this->argumentName));
    }
}
