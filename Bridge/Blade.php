<?php
namespace UniversalTpl\Bridge;

use duncan3dc\Laravel\BladeInstance;

class Blade extends AbstractBridge {

	/**
	 * Blade constructor.
	 * @param array $parameters
	 * @throws \Exception
	 */
	public function __construct(array $parameters) {
		if (!class_exists('duncan3dc\Laravel\BladeInstance')) {
			throw new \Exception('Blade is not installed');
		}

		$blade = new BladeInstance($parameters['template_dir'], $parameters['compile_dir']);
		$this->setEngine($blade);
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