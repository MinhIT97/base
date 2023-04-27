<?php

namespace Modules\Core\Console;

use Exception;
use Illuminate\Console\Command;
use Illuminate\Filesystem\Filesystem;
use Illuminate\Support\Str;
use Nwidart\Modules\Traits\ModuleCommandTrait;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputOption;

class CreateTraitCommand extends Command
{

    use ModuleCommandTrait;
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $name = 'module:make-trait';

    protected $argumentName = 'trait';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create trait command';

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

        $traitStub = $this->getTraitStub();

        try {
            $this->makeTrait($this->getModuleName(), $traitStub);
        } catch (Exception $e) {
            $this->error($e->getMessage());
            return 1;
        }

        $this->info('Trait generate successful');

        return 0;
    }

    protected function getTraitStub()
    {
        return app(Filesystem::class)->get(config('core.stubs.trait'));
    }

    protected function makeTrait($packageName, $stub)
    {

        $module = $this->laravel['modules']->findOrFail($this->getModuleName());

        $nameSpace = $this->getClassNamespace($module) . '\Traits';

        $class_name = $this->getTraitName();

        $file_system  = app(Filesystem::class);
        $package_path = base_path() . '/' . $this->laravel['modules']->config('namespace') . '/' . $packageName;

        $traitFolder_path = $package_path . '/Traits';

        if (!$file_system->isDirectory($package_path)) {
            throw new Exception('Package does not exist');
        }

        $traitFolder_path = $traitFolder_path;

        $arrayClassName = explode('/', $class_name);



        if (count($arrayClassName) > 1) {
            $arrayClassName   = collect($arrayClassName);
            $class_name       = $arrayClassName->pop();
            $traitFemplate = str_replace('{{name}}', $class_name, $stub);
            $endNameFolder    = implode('/', $arrayClassName->all());
            $traitFolder_path = $traitFolder_path . '/' . $endNameFolder;
            $traitFemplate    = str_replace('$CLASS_NAMESPACE$', $nameSpace . '\\' . $endNameFolder, $traitFemplate);
        } else {
            $traitFemplate = str_replace('{{name}}', $class_name, $stub);
            $traitFemplate = str_replace('$CLASS_NAMESPACE$', $nameSpace, $traitFemplate);
        }

        if (!$file_system->isDirectory($traitFolder_path)) {
            $file_system->makeDirectory($traitFolder_path, 0755, true);
        }

        $file_path = $traitFolder_path . '/' . $class_name . 'Trait.php';

        if ($file_system->isFile($file_path)) {
            throw new Exception('Trait already existed');
        }

        $file_system->put($file_path, $traitFemplate);
    }

    protected function getTraitName()
    {
        $trait = Str::studly($this->argument('trait'));
        return $trait;
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

    public function getClass()
    {
        return class_basename($this->argument($this->argumentName));
    }
    /**
     * Get the console command arguments.
     *
     * @return array
     */
    protected function getArguments()
    {
        return [
            ['trait', InputArgument::REQUIRED, 'The name of the controller class.'],
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
}
