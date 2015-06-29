<?php namespace App\Jobs;

use App\Http\Controllers\SongsController;
use App\Jobs\Job;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Bus\SelfHandling;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Http\Requests;
use Illuminate\Http\Request;

class EncolarMusica extends Job implements SelfHandling, ShouldQueue
{
    use InteractsWithQueue, SerializesModels;

   
    public function __construct($data)
    {
        $cancionn = $data;  
        echo "$cancionn";    
    }


    public function handle()
    {       
    }

    public function fire($job, $data){
        $query = DB::insert('INSERT INTO queue (timestamp) VALUES(NOW())');
        $job->delete();
    }
}
