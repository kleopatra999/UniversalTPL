<?php
namespace FlexyProject\UniversalTpl\Bridge;

abstract class AbstractBridge {

	/** Properties */
	protected $engine;
	protected $fileExtension;

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
	 * Get fileExtension
	 * @return mixed
	 */
	public function getFileExtension() {
		return $this->fileExtension;
	}

	/**
	 * Set fileExtension
	 * @param mixed $fileExtension
	 * @return Twig
	 */
	public function setFileExtension($fileExtension) {
		$this->fileExtension = $fileExtension;

		return $this;
	}

	/**
	 * Bridge constructor.
	 * @param array $parameters
	 */
	abstract public function __construct(array $parameters);

	/**
	 * Render the template.
	 * @param string $file
	 * @param array  $vars
	 * @return string
	 */
	public function render($file, array $vars): string {
		if (null !== $this->getFileExtension()) {
			$file = $file . $this->getFileExtension();
		}

		return $this->getEngine()->render($file, $vars);
	}
}