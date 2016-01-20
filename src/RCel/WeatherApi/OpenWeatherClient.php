<?php

	namespace RCel\WeatherApi;
	
	class OpenWeatherClient {

		private $buzz;
		private $url;
		private $json;
		public $temperature = 0;

		function __construct($buzz, $city) {
			
			$this->buzz = $buzz;
			$this->url = 'http://api.openweathermap.org/data/2.5/weather?q='.$city.'&APPID=96cdeb166e66f9c035e9e7f8ce665ec8';;
			
		}

		function getData() {

			$response = $this->buzz->get($this->url);
			$this->json = $response->getContent();
			$this->json = json_decode($this->json);
			$this->temperature = ($this->json->main->temp - 273.15);
		}
		
		function displayTemperature() {
		
			return $this->temperature;

		}

	}
