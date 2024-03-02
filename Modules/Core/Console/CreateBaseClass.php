<?php

namespace Modules\Core\Console;

use Illuminate\Console\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputOption;

class CreateBaseClass extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $name = 'module:make-base';

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
        $module = $this->argument('module');
        $folder = $this->argument('folder');

        $lastFolder =  explode('/' , $folder);
        $lastFolder =  end($lastFolder );


        $this->call('module:make-presenter',[
            'presenter' =>  $lastFolder ,
            'module' =>  $module
        ]);
        $this->call('module:make-repository',[
            'repository' =>  $lastFolder ,
            'module' =>  $module
        ]);
        $this->call('module:make-service',[
            'service' =>  $folder ,
            'module' =>  $module
        ]);
        $this->call('module:make-transformer',[
            'transformer' =>  $lastFolder ,
            'module' =>  $module
        ]);
        $this->call('module:make-policy',[
            'name' =>  $lastFolder.'Policy' ,
            'module' =>  $module
        ]);
        $this->call('module:make-controller',[
            'controller' =>  $folder.'Controller' ,
            'module' =>  $module
        ]);
        $this->call('module:make-provider',[
            'name' =>  'PolicyServiceProvider' ,
            'module' =>  $module
        ]);
        $this->call('module:make-provider',[
            'name' =>  'RepositoryServiceProvider' ,
            'module' =>  $module
        ]);
        $this->call('module:make-model',[
            'model' =>  $lastFolder ,
            'module' =>  $module
        ]);
    }

    /**
     * Get the console command arguments.
     *
     * @return array
     */
    protected function getArguments()
    {
        return [
            ['folder', InputArgument::REQUIRED, 'The name of the controller class.'],
            ['module', InputArgument::REQUIRED, 'An example argument.'],
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
