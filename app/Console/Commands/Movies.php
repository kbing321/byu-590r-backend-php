<?php

namespace App\Console\Commands;

use App\Models\movie;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;
use App\Mail\MoviesMail;

class Movies extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'report:movies {--email=}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'This sends a list of all movies to stakeholders';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        //
        $sendToEmail = $this->option('email');
        error_log($sendToEmail);
        if(!$sendToEmail) {
            error_log('failure');
            return Command::FAILURE;
        }
        $movies = movie::all();

        error_log($movies);

        if ($movies->count() > 0) {
            Mail::to($sendToEmail)->send(new MoviesMail($movies));
        }

        return Command::SUCCESS;
    }
}
