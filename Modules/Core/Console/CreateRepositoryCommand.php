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

        $repository_names = $this->argument('repository');

        $interface_stub = $this->getInterfaceStub();
        $eloquent_stub  = $this->getEloquentStub();

        try {
            $this->makeRepository($this->getModuleName(), $repository_names, $interface_stub);
            $this->makeRepository($this->getModuleName(), $repository_names, $eloquent_stub, true);
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
    protected function makeRepository($package_name, $repository_names, $stub, $eloquent = false)
    {

        $module = $this->laravel['modules']->findOrFail($this->getModuleName());


        $name_space = $this->getClassNamespace($module) . '\Repositories';

        $names               = $repository_names;
        $class_name          = $this->getRepositoryName();
        $repository_template = str_replace('{{name}}', $class_name, $stub);
        $repository_template = str_replace('$CLASS_NAMESPACE$', $name_space, $repository_template);

        $file_system  = app(Filesystem::class);
        $package_path = base_path() . '/' . $this->laravel['modules']->config('namespace') . '/' . $package_name;


        $repository_folder_path = $package_path . '/Repositories';

        if (!$file_system->isDirectory($package_path)) {
            throw new Exception('Package does not exist');
        }

        $repository_folder_path = $repository_folder_path;


        if (!$file_system->isDirectory($repository_folder_path)) {
            $file_system->makeDirectory($repository_folder_path, 0755, true);
        }

        $file_path = $eloquent ? $repository_folder_path . '/' . $class_name . 'RepositoryEloquent.php' : $repository_folder_path . '/' . $class_name . 'Repository.php';

        if ($file_system->isFile($file_path)) {
            throw new Exception('Repository already existed');
        }

        $file_system->put($file_path, $repository_template);
    }

    public function getClassNamespace($module)
    {
        $extra = str_replace($this->getClass(), '', $this->argument($this->argumentName));

        $extra = str_replace('/', '\\', $extra);

        $namespace = $this->laravel['modules']->config('namespace');

        $namespace .= '\\' . $module->getStudlyName();

        // $namespace .= '\\' . $this->getDefaultNamespace();

        $namespace .= '\\' . $extra;

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
