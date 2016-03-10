<?php
namespace FlexyProject\UniversalTpl;

class Configuration {

	/** Constants */
	const BLADE    = 'Blade';
	const DWOO     = 'Dwoo';
	const PLATES   = 'Plates';
	const MUSTACHE = 'Mustache';
	const SMARTY   = 'Smarty';
	const TWIG     = 'Twig';

	/** Properties */
	protected $engine;
	protected $parameters = [];

	/**
	 * Configuration constructor.
	 * @param string $engine
	 * @param array  $parameters
	 */
	public function __construct($engine, array $parameters) {
		$this->engine = $engine;
		$this->setParameters($parameters);
	}

	/**
	 * Get engine
	 * @return string
	 */
	public function getEngine(): string {
		return $this->engine;
	}

	/**
	 * Set engine
	 * @param mixed $engine
	 * @return Configuration
	 */
	public function setEngine(string $engine): Configuration {
		$this->engine = $engine;

		return $this;
	}

	/**
	 * Get parameters
	 * @return array
	 */
	public function getParameters(): array {
		return $this->parameters;
	}

	/**
	 * Get parameter value by name
	 * @param string $name
	 * @return null|string
	 */
	public function getParameter($name) {
		return $this->getParameters()[$name] ?? null;
	}

	/**
	 * Set parameters
	 * @param array $parameters
	 * @return Configuration
	 */
	public function setParameters(array $parameters): Configuration {
		$this->parameters = $parameters;

		return $this;
	}

}