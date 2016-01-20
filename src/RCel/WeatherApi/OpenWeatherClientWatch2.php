<?php

	namespace RCel\WeatherApi;

	use Symfony\Component\Stopwatch\Stopwatch;
	
	class OpenWeatherClientWatch2 extends OpenWeatherClient2 {

		private $watch;
		private $times = 0;

		function __construct($buzz, $watch) {
			
			parent::__construct($buzz);
			$this->watch = $watch;

		}

		function getData($city) {
			
			$event = $this->watch->start('pomiar');
			parent::getData($city);
			$event = $this->watch->stop('pomiar');
			$this->times = $event->getDuration()/1000;

		}
		
		function displayTime() {
			
			return $this->times;
			
		}

	}
