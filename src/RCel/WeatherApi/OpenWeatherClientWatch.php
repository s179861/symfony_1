<?php

	namespace RCel\WeatherApi;

	use Symfony\Component\Stopwatch\Stopwatch;
	
	class OpenWeatherClientWatch extends OpenWeatherClient {

		private $watch;
		private $times = 0;

		function __construct($buzz, $city, $watch) {
			
			parent::__construct($buzz, $city);
			$this->watch = $watch;

		}

		function getData() {
			
			$event = $this->watch->start('pomiar');
			parent::getData();
			$event = $this->watch->stop('pomiar');
			$this->times = $event->getDuration()/1000;

		}
		
		function displayTime() {
			
			return $this->times;
			
		}

	}
