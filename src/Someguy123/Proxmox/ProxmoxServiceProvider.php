<?php namespace Someguy123\Proxmox;

use Illuminate\Support\Facades\Config;
use Illuminate\Support\ServiceProvider;

class ProxmoxServiceProvider extends ServiceProvider {

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = false;

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
        $this->package('someguy123/proxmox');

        \App::bind('proxmox', function()
        {
            $credentials = Config::get('proxmox::server.server');
            var_dump($credentials);
            $proxmox = new \ProxmoxVE\Proxmox($credentials);
            return $proxmox;
        });


	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return array();
	}

}
