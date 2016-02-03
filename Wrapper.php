<?php
namespace UniversalTpl;

use UniversalTpl\Bridge\AbstractBridge;

class Wrapper {

	/** Properties */
	protected $configuration;
	protected $bridge;

	/**
	 * Wrapper constructor.
	 * @param Configuration $configuration
	 */
	public function __construct(Configuration $configuration) {
		$this->configuration = $configuration;

		$class = sprintf('\\UniversalTpl\\Bridge\\%s', $configuration->getEngine());
		$this->setBride(new $class($configuration->getParameters()));
	}

	/**
	 * Render the template.
	 * @param string $file
	 * @param array  $vars
	 * @return string
	 */
	public function render($file, array $vars = []): string {
		return $this->getBride()->render($file, $vars);
	}

	/**
	 * Set bridge class.
	 * @param AbstractBridge $bridge
	 * @return Wrapper
	 */
	protected function setBride(AbstractBridge $bridge): Wrapper {
		$this->bridge = $bridge;

		return $this;
	}

	/**
	 * Get bride class.
	 * @return AbstractBridge
	 */
	protected function getBride(): AbstractBridge {
		return $this->bridge;
	}

}