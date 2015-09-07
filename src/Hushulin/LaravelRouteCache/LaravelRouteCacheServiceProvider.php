<?php namespace Hushulin\LaravelRouteCache;

use Illuminate\Support\ServiceProvider;

class LaravelRouteCacheServiceProvider extends ServiceProvider {

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		// 注册服务提供者到laravel router ,替换掉
		$this->reg();
	}

	public function reg()
	{
		$this->app['router'] = $this->app->share(function($app){
			$router = new Router($app['events'] , $app);
			return $router;
		});
	}
}
