<?php namespace App\Commands;

use App\Commands\Command;

use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Bus\SelfHandling;
use Illuminate\Contracts\Queue\ShouldBeQueued;

class EncolarMusica extends Command implements SelfHandling, ShouldBeQueued {

	use InteractsWithQueue, SerializesModels;

	/**
	 * Create a new command instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		//
	}

	/**
	 * Execute the command.
	 *run
	 * @return void
	 */
	public function handle()
	{
		$message = "/home/sly-019/Escritorio/1Proyecto/laravelProyecto/Canciones/If I Could Fly - Helloween.mp3";
		//echo "$message";
		Queue::push(new EncolarMusica($message));
		//Queue::push('NotifyController@sendExcluidedParteNotify', compact('parte', 'tipo'));




	}

}
