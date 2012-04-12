<?php
namespace Doctrine\Common;

use \TYPO3\FLOW3\Package\Package as BasePackage;

/**
 * FLOW3 Package Bootstrap for the Doctrine.Common package
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