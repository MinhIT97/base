<?php

namespace Modules\Core\Console;

use Exception;
use Illuminate\Console\Command;
use Illuminate\Filesystem\Filesystem;
use Nwidart\Modules\Traits\ModuleCommandTrait;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputArgument;
use Illuminate\Support\Str;

class CreatePresenterCommand extends Command
{

    use ModuleCommandTrait;
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $name = 'module:make-presenter';

    protected $argumentName = 'presenter';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'create presenter';

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
        $transformerStub = $this->getPresenterStub();

        try {
            $this->makeTrait($this->getModuleName(), $transformerStub);
        } catch (Exception $e) {
            $this->error($e->getMessage());
            return 1;
        }

        $this->info('Presenter generate successful');

        return 0;
    }

    protected function makeTrait($packageName, $stub)
    {

        $module = $this->laravel['modules']->findOrFail($this->getModuleName());

        $nameSpace = $this->getClassNamespace($module) . '\Presenters';

        $className = $this->getPresenterName();

        $file_system  = app(Filesystem::class);
        $package_path = base_path() . '/' . $this->laravel['modules']->config('namespace') . '/' . $packageName;

        $transfomerFolderPath = $package_path . '/Presenters';

        if (!$file_system->isDirectory($package_path)) {
            throw new Exception('Package does not exist');
        }

        $transfomerFolderPath = $transfomerFolderPath;

        $arrayClassName = explode('/', $className);



        if (count($arrayClassName) > 1) {
            $arrayClassName       = collect($arrayClassName);
            $className           = $arrayClassName->pop();
            $endNameFolder        = implode('/', $arrayClassName->all());
            $transfomerFolderPath = $transfomerFolderPath . '/' . $endNameFolder;

            $traitFemplate = str_replace('{{name}}', $className, $stub);

            $nameSpace .= '\\' . str_replace('/', '\\' , $endNameFolder);

            $traitFemplate    = str_replace('$CLASS_NAMESPACE$', $nameSpace , $traitFemplate);

        } else {
            $traitFemplate = str_replace('{{name}}', $className, $stub);
            $traitFemplate = str_replace('$CLASS_NAMESPACE$', $nameSpace, $traitFemplate);
        }

        if (!$file_system->isDirectory($transfomerFolderPath)) {
            $file_system->makeDirectory($transfomerFolderPath, 0755, true);
        }

        $file_path = $transfomerFolderPath . '/' . $className . 'Presenter.php';

        if ($file_system->isFile($file_path)) {
            throw new Exception('Presenter already existed');
        }

        $file_system->put($file_path, $traitFemplate);
    }

    protected function getPresenterStub()
    {
        return app(Filesystem::class)->get(config('core.stubs.presenter'));
    }

    protected function getPresenterName()
    {
        $trait = Str::studly($this->argument('presenter'));
        return $trait;
    }

    protected function getArguments()
    {
        return [
            ['presenter', InputArgument::REQUIRED, 'The name of the controller class.'],
            ['module', InputArgument::OPTIONAL, 'The name of module will be used.'],
        ];
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
}
