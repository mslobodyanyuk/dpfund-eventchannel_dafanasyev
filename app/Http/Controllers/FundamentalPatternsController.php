<?php

namespace App\Http\Controllers;

use App\DesignPatterns\Fundamental\EventChannel\Classes\EventChannelJob;

class FundamentalPatternsController extends Controller
{
	public function EventChannel()
	{
		$name = 'Канал событий (event channel)';
		$description = EventChannelJob::getDescription();

		$item = new EventChannelJob();
		$item->run();

		return view('dump', compact('name', 'description'));
	}
}
