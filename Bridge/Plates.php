<?php
namespace UniversalTpl\Bridge;

use League\Plates\Engine;

class Plates extends AbstractBridge {

	/**
	 * Plates constructor.
	 * @param array $parameters
	 * @throws \Exception
	 */
	public function __construct(array $parameters) {
		if (!class_exists('League\Plates\Engine')) {
			throw new \Exception('Plates engine is not installed');
		}

		$engine = new Engine();
		$engine->setDirectory($parameters['template_dir']);
		$this->setEngine($engine);
	}

	/**
	 * Render the template.
	 * @param string $file
	 * @param array  $vars
	 * @return string
	 */
	public function render($file, array $vars): string {
		return $this->getEngine()->render($file, $vars);
	}
}