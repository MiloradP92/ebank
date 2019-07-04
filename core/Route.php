<?php

	namespace App\Core;

	final class Route
	{		
		private $requestMethod;
		private $controller;
		private $method;
		private $pattern;

		private function __construct(string $requestmethod, string $controller, string $method, $pattern)
		{
			$this->requestMethod = $requestmethod;
			$this->controller = $controller;
			$this->method = $method;
			$this->pattern = $pattern;
		}

		public static function get(string $pattern, string $controller, string $method) : Route
		{
			return new Route('GET', $controller, $method, $pattern);
		}

		public static function post(string $pattern, string $controller, string $method) : Route
		{
			return new Route('POST', $controller, $method, $pattern);
		}

		public static function any(string $pattern, string $controller, string $method) : Route
		{
			return new Route('GET|POST', $controller, $method, $pattern);
		}

		public function matches(string $method, string $url): bool
		{						
			if (!preg_match('/^' . $this->requestMethod . '$/', $method))
			{
				return false;
			}

			return boolval(preg_match($this->pattern, $url));
		}

		public function getControllerName() : string
		{
			return $this->controller;
		}

		public function getMethodName() : string
		{
			return $this->method;
		}

		public function &extractArguments(string $url): array
		{
			$matches = [];
			$arguments = [];

			preg_match_all($this->pattern, $url, $matches);

			if (isset($matches[1]))
				$arguments = $matches[1];

			return $arguments;
		}

	}