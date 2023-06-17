<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class MakeUserStatus extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'status:admin {email}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Makes user status to 1';

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
     * @return int
     */
    public function handle()
    {
        try {
            $user = User::where('email', $this->argument('email'))->firstOrFail();
        } catch (ModelNotFoundException $exception) {
            $this->error("User {$this->argument('email')} not found");
            return;
        }

        if ($user->status) {
            $this->error("User {$this->argument('email')} already has status 0");
            return;
        }

        $user->status = 0;
        $user->save();

        $this->info("User {$this->argument('email')} got status 0");
    }
}
