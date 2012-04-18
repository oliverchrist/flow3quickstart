<?php
namespace Zweiradspion\Demo\Domain\Model;

/*                                                                        *
 * This script belongs to the FLOW3 package "Zweiradspion.Demo".          *
 *                                                                        *
 *                                                                        */

use TYPO3\FLOW3\Annotations as FLOW3;

/**
 * A Coffee bean
 *
 * @FLOW3\Scope("prototype")
 * @FLOW3\Entity
 */
class CoffeeBean {

	/**
	 * The name
	 * @var string
	 */
	protected $name;


	/**
	 * Get the Coffee bean's name
	 *
	 * @return string The Coffee bean's name
	 */
	public function getName() {
		return $this->name;
	}

	/**
	 * Sets this Coffee bean's name
	 *
	 * @param string $name The Coffee bean's name
	 * @return void
	 */
	public function setName($name) {
		$this->name = $name;
	}

}
?>