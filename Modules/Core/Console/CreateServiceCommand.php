<?php

namespace Modules\Core\Console;

use Exception;
use Illuminate\Console\Command;
use Illuminate\Filesystem\Filesystem;
use Illuminate\Support\Str;
use Nwidart\Modules\Traits\ModuleCommandTrait;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputOption;

class CreateServiceCommand extends Command
{

    use ModuleCommandTrait;
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $name = 'module:make-service';

    protected $argumentName = 'service';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a service class in module';

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
        $serviceName = $this->argument('service');

        $service_stub = $this->getServiceStub();

        try {
            $this->makeRepository($this->getModuleName(), $serviceName, $service_stub);
        } catch (Exception $e) {
            $this->error($e->getMessage());
            return 1;
        }

        $this->info('Service generate successful');

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
            ['service', InputArgument::REQUIRED, 'The name of the controller class.'],
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
    protected function getServiceStub()
    {

        return app(Filesystem::class)->get(config('core.stubs.service'));
    }

    /**
     * Create Service file
     *
     * @return void
     */
    protected function makeRepository($package_name, $service_names, $stub)
    {

        $module = $this->laravel['modules']->findOrFail($this->getModuleName());

        $name_space = $this->getClassNamespace($module) . '\Services';

        $names            = $service_names;
        $class_name       = $this->getServiceName();
        $service_template = str_replace('{{name}}', $class_name, $stub);
        $service_template = str_replace('$CLASS_NAMESPACE$', $name_space, $service_template);

        $file_system  = app(Filesystem::class);
        $package_path = base_path() . '/' . $this->laravel['modules']->config('namespace') . '/' . $package_name;

        $service_folder_path = $package_path . '/Services';

        if (!$file_system->isDirectory($package_path)) {
            throw new Exception('Package does not exist');
        }

        $service_folder_path = $service_folder_path;

        if (!$file_system->isDirectory($service_folder_path)) {
            $file_system->makeDirectory($service_folder_path, 0755, true);
        }

        $file_path = $service_folder_path . '/' . $class_name . 'Service.php';

        if ($file_system->isFile($file_path)) {
            throw new Exception('Repository already existed');
        }

        $file_system->put($file_path, $service_template);
    }

    protected function getServiceName()
    {
        $service = Str::studly($this->argument('service'));
        return $service;
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

    public function getClass()
    {
        return class_basename($this->argument($this->argumentName));
    }

}
