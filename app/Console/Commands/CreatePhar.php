<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class CreatePhar extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'CreatePhar';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

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
        $fullPath = storage_path() . DIRECTORY_SEPARATOR . 'arch.phar';

        if (\Phar::canWrite()) {
            $archive = new \Phar($fullPath);
            $archive->buildFromDirectory(__DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'srcScriptsForPhar');
            $archive['index.php']->chmod(0755);

            if ($archive['index.php']->isExecutable()) {
                $this->info('Wu');
            }
        } else {
            $this->info('you need to change the option phar.readonly to 1 (On)');
        }
    }
}
