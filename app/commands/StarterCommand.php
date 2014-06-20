<?php

use Illuminate\Console\Command;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputArgument;

class StarterCommand extends Command {

	/**
	 * The console command name.
	 *
	 * @var string
	 */
	protected $name = 'starter:install';

	/**
	 * The console command description.
	 *
	 * @var string
	 */
	protected $description = 'Install starter kit';

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
		// Run Catalyst/Sentry migrations
        $this->info('Migrating...');
        $this->call('migrate', ['--package' => 'cartalyst/sentry']);
        
        $this->info('Publishing configurations...');
        $this->call('config:publish', ['package' => 'cartalyst/sentry']);

        $this->info('Creating default groups and user...');

        try {
            $groupAdmin = Sentry::createGroup([
                'name' => 'Admin',
                'permissions' => [
                    'superuser' => 1
                ]
            ]);

            $groupUser = Sentry::createGroup([
                'name' => 'User'
            ]);

            $user = Sentry::createUser([
                'email' => 'admin@localhost',
                'password' => 'n0password'
            ], true);
            $user->addGroup($groupAdmin);
        } catch (Exception $ex) {
            $this->error($ex->getMessage());
        }
	}
}
