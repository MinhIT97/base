<?php

namespace Modules\Core\Console;

use Exception;
use Illuminate\Console\Command;
use Illuminate\Filesystem\Filesystem;
use Illuminate\Support\Str;
use Nwidart\Modules\Traits\ModuleCommandTrait;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputOption;

class CreateTransformerCommand extends Command
{

    use ModuleCommandTrait;
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $name = 'module:make-transformer';

    protected $argumentName = 'trait';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description.';

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
        $transformerStub = $this->getTransformerStub();

        try {
            $this->makeTrait($this->getModuleName(), $transformerStub);
        } catch (Exception $e) {
            $this->error($e->getMessage());
            return 1;
        }

        $this->info('Transformer generate successful');

        return 0;
    }

    protected function getTransformerStub()
    {
        return app(Filesystem::class)->get(config('core.stubs.transformers'));
    }

    protected function makeTrait($packageName, $stub)
    {

        $module = $this->laravel['modules']->findOrFail($this->getModuleName());

        $nameSpace = $this->getClassNamespace($module) . '\Transformers';

        $class_name = $this->getTransfomerName();

        $file_system  = app(Filesystem::class);
        $package_path = base_path() . '/' . $this->laravel['modules']->config('namespace') . '/' . $packageName;

        $transfomerFolderPath = $package_path . '/Transformers';

        if (!$file_system->isDirectory($package_path)) {
            throw new Exception('Package does not exist');
        }

        $transfomerFolderPath = $transfomerFolderPath;

        $arrayClassName = explode('/', $class_name);


        if (count($arrayClassName) > 1) {
            $arrayClassName       = collect($arrayClassName);
            $class_name           = $arrayClassName->pop();
            $endNameFolder        = implode('/', $arrayClassName->all());
            $transfomerFolderPath = $transfomerFolderPath . '/' . $endNameFolder;
            $traitFemplate = str_replace('{{name}}', $class_name, $stub);

            $nameSpace .= '\\' . str_replace('/', '\\' , $endNameFolder);

            $traitFemplate = str_replace('$CLASS_NAMESPACE$', $nameSpace, $traitFemplate);

        } else {
            $traitFemplate = str_replace('{{name}}', $class_name, $stub);
            $traitFemplate = str_replace('$CLASS_NAMESPACE$', $nameSpace, $traitFemplate);
        }

        if (!$file_system->isDirectory($transfomerFolderPath)) {
            $file_system->makeDirectory($transfomerFolderPath, 0755, true);
        }

        $file_path = $transfomerFolderPath . '/' . $class_name . 'Transformer.php';

        if ($file_system->isFile($file_path)) {
            throw new Exception('Transfomer already existed');
        }

        $file_system->put($file_path, $traitFemplate);
    }

    protected function getTransfomerName()
    {
        $trait = Str::studly($this->argument('transformer'));
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
            ['transformer', InputArgument::REQUIRED, 'The name of the controller class.'],
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
