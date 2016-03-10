<?php
namespace FlexyProject\UniversalTpl\Bridge;

use Dwoo\Core;

class Dwoo extends AbstractBridge {

	/**
	 * Dwoo constructor.
	 * @param array $parameters
	 * @throws \Dwoo\Exception\CoreException
	 * @throws \Exception
	 */
	public function __construct(array $parameters) {
		if (!class_exists('Dwoo\Core')) {
			throw new \Exception('Dwoo is not installed');
		}

		$this->setFileExtension('.tpl');

		$core = new Core();
		$core->setTemplateDir($parameters['template_dir']);
		$core->setCompileDir($parameters['compile_dir']);
		$core->setCacheDir($parameters['cache_dir']);
		$this->setEngine($core);
	}

	/**
	 * Render the template.
	 * @param string $file
	 * @param array  $vars
	 * @return string
	 */
	public function render($file, array $vars): string {
		return $this->getEngine()->get($file . $this->getFileExtension(), $vars);
	}
}