<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Validator;

class CreateAdmin extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'create:admin';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create an admin';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        do {
            $name = $this->ask('Name');
            $email = $this->ask('Email');
            $password = $this->secret('Password');

            $data = [
                'name' => $name,
                'email' => $email,
                'password' => $password,
                'status' => 1
            ];

            $validator = Validator::make(['email' => $email], [
                'email' => 'email',
            ]);

            if ($validator->fails()) {
                $this->info('The text is not a valid email address. Please re-enter.');
            }

            $admin = User::create($data);

            if ($admin->exists) {
                $this->info('Admin has been successfully created');
            }

        } while ($validator->fails());
    }
}
