<?php

namespace App\DesignPatterns\Fundamental\EventChannel\Classes;

use App\DesignPatterns\Fundamental\EventChannel\Interfaces\EventChannelInterface;
use App\DesignPatterns\Fundamental\EventChannel\Interfaces\SubscriberInterface;

class EventChannel implements EventChannelInterface
{

	private $topics = [];

	public function subscribe($topic, SubscriberInterface $subscriber)
	{
		$this->topics[$topic][] = $subscriber;

		$msg = "{$subscriber->getName()} подписан(-а) на [{$topic}]";
		\Debugbar::debug($msg);
	}

	public function publish($topic, $data)
	{
		if (empty($this->topics[$topic])) {
			return;
		}

		foreach($this->topics[$topic] as $subscriber ) {
            $subscriber->notify($data);
		}
	}

}
