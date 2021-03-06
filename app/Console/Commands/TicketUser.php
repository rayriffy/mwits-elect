<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class TicketUser extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'ticket:user {amount : Amount of ticket to generate} {expire=18 : Hours from now to expire}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate Normal Ticket';

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
        $amount = $this->argument('amount');
        $expire = $this->argument('expire');
        if ($this->confirm('Do you want to generate '.$amount.' amount of Token that will expire in '.$expire.' hours?')) {
            for ($i=0 ; $i<$amount ; $i++) {
                $user_ticket = str_random(12);
                $user = new \App\USER;
                $user->ticket = $user_ticket;
                $user->is_admin = false;
                $user->expire = \Carbon\Carbon::now()->addHours($expire);
                $user->save();
                $this->info($user_ticket);
            }
        }
    }
}
