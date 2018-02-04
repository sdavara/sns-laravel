<?php

namespace Mitchdav\SNS;

/**
 * Class LumenProvider
 * @package Mitchdav\SNS
 */
class LumenProvider extends Provider
{
	public function boot()
	{
		$broadcastManager = new BroadcastManager($this->app);

		$this->app->make(\Illuminate\Contracts\Broadcasting\Broadcaster::class);

		/*$this->app->singleton(\Illuminate\Contracts\Broadcasting\Broadcaster::class, function($app, $config) use ($broadcastManager) {
			return $broadcastManager;
		});*/

		$this->app->singleton(\Illuminate\Broadcasting\BroadcastManager::class, function ($app, $config) use ($broadcastManager) {
			return $broadcastManager;
		});

		$this->bootWithRouter($this->app);
	}
}