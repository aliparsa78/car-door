<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Contact;

class DeleteOldMessages extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'delete:old-messages';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Delete message older than 7 days';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        Contact::where('created_at','<',now()->subDays(7))->delete();
        $this->info('Old messages deleted successfuly !');
    }
}
