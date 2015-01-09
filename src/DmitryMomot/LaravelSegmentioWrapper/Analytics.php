<?php namespace DmitryMomot\LaravelSegmentioWrapper;

use Config;
use Segment;

class Analytics extends Segment {

	/**
	 * @return void
	 */
	public function __construct()
	{
		$config = Config::get('laravel-segmentio-wrapper::config');	
		static::init($config['write_key']);	
		// static::init($config['write_key'], array(
			// "consumer"      => $config['consumer'],
			// "timeout"       => $config['timeout'],
			// "debug"         => $config['debug'],
			// "ssl"         	=> $config['ssl'],
			// "error_handler" => $config['error_handler'],
		// ));
	}
}
