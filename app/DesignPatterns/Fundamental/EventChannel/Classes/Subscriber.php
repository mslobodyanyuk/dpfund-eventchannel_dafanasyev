<?php

namespace App\DesignPatterns\Fundamental\EventChannel\Classes;

use App\DesignPatterns\Fundamental\EventChannel\Interfaces\SubscriberInterface;

class Subscriber implements SubscriberInterface
{
	private $name;

	public function __construct($name)
	{
		$this->name = $name;
	}

	public function notify($data)
	{
		$msg = "{$this->getName()} оповещен(-а) данными [{$data}]";

		\Debugbar::info($msg);
	}

	public function getName()
	{
		return $this->name;
	}

}
