<?php
namespace UniversalTpl\Bridge;

class Smarty extends AbstractBridge {

	/**
	 * Smarty constructor.
	 * @param array $parameters
	 * @throws \Exception
	 */
	public function __construct(array $parameters) {
		if (!class_exists('Smarty')) {
			throw new \Exception('Smarty is not installed');
		}

		$smarty = new \Smarty();
		$smarty->setTemplateDir($parameters['template_dir']);
		$smarty->setCompileDir($parameters['compile_dir']);
		$smarty->setConfigDir($parameters['config_dir']);
		$smarty->setCacheDir($parameters['cache_dir']);
		$this->setEngine($smarty);
	}

	/**
	 * Render the template.
	 * @param string $file
	 * @param array  $vars
	 * @return string
	 */
	public function render($file, array $vars): string {
		foreach ($vars as $key => $value) {
			$this->getEngine()->assign($key, $value);
		}

		return $this->getEngine()->fetch($file);
	}
}