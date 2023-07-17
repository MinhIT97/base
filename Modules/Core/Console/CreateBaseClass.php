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
        $this->call('module:make-presenter',[
            'presenter' =>  $folder ,
            'module' =>  $module
        ]);
        $this->call('module:make-repository',[
            'repository' =>  $folder ,
            'module' =>  $module
        ]);
        $this->call('module:make-service',[
            'service' =>  $folder ,
            'module' =>  $module
        ]);
        $this->call('module:make-transformer',[
            'transformer' =>  $folder ,
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
