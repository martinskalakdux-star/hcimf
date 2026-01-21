<?php

namespace App\Console\Commands;

use App\Models\Artist;
use App\Models\Program;
use Illuminate\Console\Command;

class Test extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:test';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $program = Program::find(1);
        $artist = Artist::find(1);
        $program->artists()->detach($program);

        dd($program, $artist);
    }
}
