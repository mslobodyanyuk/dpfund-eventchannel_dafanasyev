<?php

namespace App\DesignPatterns\Fundamental\EventChannel\Classes;

use App\DesignPatterns\Fundamental\EventChannel\Classes\EventChannel;
use App\DesignPatterns\Fundamental\EventChannel\Classes\Publisher;
use App\DesignPatterns\Fundamental\EventChannel\Classes\Subscriber;

class EventChannelJob
{

	public function run()
	{
		$newsChannel = new EventChannel();

		$highgardenGroup = new Publisher('highgarden-news', $newsChannel);

		$winterfellNews = new Publisher('winterfell-news', $newsChannel);
		$winterfellDaily = new Publisher('winterfell-news', $newsChannel);

		$sansa = new Subscriber('Sansa Stark');
		$arya = new Subscriber('Arya Stark');
		$cersei = new Subscriber('Cersei Lannister');
		$snow = new Subscriber('John Snow');


		$newsChannel->subscribe('highgarden-news', $cersei);
		$newsChannel->subscribe('winterfell-news', $sansa);

		$newsChannel->subscribe('highgarden-news', $arya);
		$newsChannel->subscribe('winterfell-news', $arya);

		$newsChannel->subscribe('winterfell-news', $snow);


		$highgardenGroup->publish('New highgarden post');

		$winterfellNews->publish('New winterfell post');
		$winterfellDaily->publish('New altеrnative winterfell post');

		}

	static public function getDescription()
	{
        $description = [
                        'name' => 'Канал событий (event channel)',
                        'url' => 'App\Http\Controllers\FundamentalPatternsController@EventChannel',

                        'description' =>
                                        "Канал событий (event channel) — фундаментальный шаблон проектирования,
                                        используется для создания канала связи и коммуникации через него посредством
                                        событий.
                                        Этот канал обеспечивает возможность разным издателям публиковать
                                        события и подписчикам, подписываясь на них, получать уведомления.",

                        'url_wiki' => 'https://ru.wikipedia.org/wiki/Канал_событий_(шаблон_проектирования)',
                        ];

        return $description;
	}

}
