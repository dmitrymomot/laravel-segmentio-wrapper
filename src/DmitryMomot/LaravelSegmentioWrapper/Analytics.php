<?php namespace DmitryMomot\LaravelSegmentioWrapper;

use Segment;

class Analytics extends Segment {

	public function __construct()
	{
		$config = Config::get('laravel-segmentio-wrapper::config');
		
		static::init($config['write_key'], array(
			"consumer"      => $config['consumer'],
			"timeout"       => $config['timeout'],
			"debug"         => $config['debug'],
			"ssl"         	=> $config['ssl'],
			"error_handler" => $config['error_handler'],
		));
	}
}