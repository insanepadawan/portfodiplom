<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class Promo extends Command
{

    protected $signature = 'promo:make {type} {model} {fields?} {--export}';

    protected $description = 'making with crud-generator controllers and views';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        if ($this->argument('type') == 'vc')
        {
            $this->call('crud:controller', [
                'name' => 'Admin/'.\Str::plural(ucfirst($this->argument('model'))).'Controller',
                '--crud-name' => \Str::plural(strtolower($this->argument('model'))),
                '--model-name' => ucfirst($this->argument('model')),
                '--view-path' => 'admin',
                '--route-group' => 'admin'
            ]);

            if ($this->argument('fields') == true)
            {
                $fields = $this->argument('fields');

                if (substr($fields, -1, 1) == ';')
                    $fields = strtolower(str_replace(' ', '', substr_replace($fields,'', -1, 1)));

                $this->call('crud:view', [
                    'name' => \Str::plural(ucfirst($this->argument('model'))),
                    '--fields' => $fields,
                    '--view-path' => 'admin',
                    '--form-helper' => 'html'
                ]);
            }

            if($this->option('export') == true){
                $this->call('make:export', [
                    'name' => \Str::plural(ucfirst($this->argument('model'))).'Export'
                ]);
            }
        }

        if ($this->argument('type') == 'export')
        {
            $this->call('make:export', [
                'name' => \Str::plural(ucfirst($this->argument('model'))).'Export'
            ]);
        }
    }

}
