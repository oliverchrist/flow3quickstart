<?php
namespace Doctrine\ORM;

use \TYPO3\FLOW3\Package\Package as BasePackage;

/**
 * FLOW3 Package Bootstrap for the Doctrine ORM package
 */
class Package extends BasePackage {

	/**
	 * @var boolean
	 */
	protected $protected = TRUE;

	/**
	 * Disable object management for this package.
	 * @var boolean
	 */
	protected $objectManagementEnabled = FALSE;

}

?>