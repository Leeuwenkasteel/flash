<?php
namespace Leeuwenkasteel\Flash;

use Illuminate\Support\ServiceProvider;
use Illuminate\Routing\Router;
use Leeuwenkasteel\Flash\View\Components\Message;

class FlashServiceProvider extends ServiceProvider
{
    public function boot(){
    	$this->loadViewsFrom(__DIR__.'/resources/views', 'flash');
    	$this->loadTranslationsFrom(__DIR__.'/resources/lang', 'flash');
		
		$this->loadViewComponentsAs('flash', [
			Message::class,
		  ]);
    }

    public function register(){
		 
    }
}