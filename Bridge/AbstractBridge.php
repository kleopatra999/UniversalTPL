<?php
namespace UniversalTpl\Bridge;

abstract class AbstractBridge {

	/** Properties */
	protected $engine;

	/**
	 * Get engine
	 * @return object
	 */
	public function getEngine() {
		return $this->engine;
	}

	/**
	 * Set engine
	 * @param object $engine
	 * @return AbstractBridge
	 */
	protected function setEngine($engine): AbstractBridge {
		$this->engine = $engine;

		return $this;
	}

	/**
	 * Render the template.
	 * @param string $file
	 * @param array  $vars
	 * @return string
	 */
	abstract public function render($file, array $vars): string;

}