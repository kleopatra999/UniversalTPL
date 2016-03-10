<?php
namespace FlexyProject\UniversalTpl\Bridge;

class Twig extends AbstractBridge {

	/**
	 * Twig constructor.
	 * @param array $parameters
	 * @throws \Exception
	 */
	public function __construct(array $parameters) {
		if (!class_exists('Twig_Environment')) {
			throw new \Exception('Twig engine is not installed');
		}

		$this->setFileExtension('.twig');
		$this->setEngine(new \Twig_Environment(new \Twig_Loader_Filesystem($parameters['template_dir'])));
	}
}