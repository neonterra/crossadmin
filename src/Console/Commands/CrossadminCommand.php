<?php

namespace Webjhin\Crossadmin\Console\Commands;

use Illuminate\Console\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputOption;

/**
 * The CrossadminCommand class.
 *
 * @package webjhin/crossadmin
 * @author  neonterra <neonterras@gmail.com>
 */
class CrossadminCommand extends Command
{
    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'crossadmin:demo';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Demo command for the [webjhin/crossadmin] package';

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
    public function fire()
    {
        $this->info('Welcome to first command for the [webjhin/crossadmin] package');
    }

    /**
     * Th alias of the fire() method.
     *
     * @return mixed
     */
    public function handle()
    {
        $this->fire();
    }

    /**
     * Get the console command arguments.
     *
     * @return array
     */
    protected function getArguments()
    {
        return [];
    }

    /**
     * Get the console command options.
     *
     * @return array
     */
    protected function getOptions()
    {
        return [];
    }
}
