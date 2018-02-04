<?php

namespace Mitchdav\SNS;

use Illuminate\Broadcasting\BroadcastManager as BaseBroadcastManager;

/**
 * Class BroadcastManager
 * @package Mitchdav\SNS
 */
class BroadcastManager extends BaseBroadcastManager
{
	public function createSnsDriver(array $config)
	{
		return new Broadcaster($this->app[SNS::class]);
	}
}