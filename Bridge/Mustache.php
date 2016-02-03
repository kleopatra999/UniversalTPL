<?php
namespace UniversalTpl\Bridge;

class Mustache extends AbstractBridge {

	/**
	 * Mustache constructor.
	 * @param array $parameters
	 * @throws \Exception
	 */
	public function __construct(array $parameters) {
		if (!class_exists('Mustache_Engine')) {
			throw new \Exception('Mustache engine is not installed');
		}

		$mustache = new \Mustache_Engine();
		$mustache->setLoader(new \Mustache_Loader_FilesystemLoader($parameters['template_dir']));
		$this->setEngine($mustache);
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