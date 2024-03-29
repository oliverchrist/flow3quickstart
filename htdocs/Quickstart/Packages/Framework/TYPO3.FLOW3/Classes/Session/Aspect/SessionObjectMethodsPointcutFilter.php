<?php
namespace TYPO3\FLOW3\Session\Aspect;

/*                                                                        *
 * This script belongs to the FLOW3 framework.                            *
 *                                                                        *
 * It is free software; you can redistribute it and/or modify it under    *
 * the terms of the GNU Lesser General Public License, either version 3   *
 * of the License, or (at your option) any later version.                 *
 *                                                                        *
 * The TYPO3 project - inspiring people to share!                         *
 *                                                                        */

use \TYPO3\FLOW3\Object\Configuration\Configuration as ObjectConfiguration;

use TYPO3\FLOW3\Annotations as FLOW3;

/**
 * Pointcut filter matching proxyable methods in objects of scope session
 *
 * @FLOW3\Scope("singleton")
 */
class SessionObjectMethodsPointcutFilter implements \TYPO3\FLOW3\AOP\Pointcut\PointcutFilterInterface {

	/**
	 * @var \TYPO3\FLOW3\Object\ObjectManagerInterface
	 */
	protected $objectManager;

	/**
	 * @var \TYPO3\FLOW3\Reflection\ReflectionService
	 */
	protected $reflectionService;

	/**
	 * @param \TYPO3\FLOW3\Object\ObjectManagerInterface $objectManager
	 * @return void
	 */
	public function injectObjectManager(\TYPO3\FLOW3\Object\ObjectManagerInterface $objectManager) {
		$this->objectManager = $objectManager;
	}

	/**
	 * @param \TYPO3\FLOW3\Reflection\ReflectionService $reflectionService
	 * @return void
	 */
	public function injectReflectionService(\TYPO3\FLOW3\Reflection\ReflectionService $reflectionService) {
		$this->reflectionService = $reflectionService;
	}

	/**
	 * Checks if the specified class and method matches against the filter
	 *
	 * @param string $className Name of the class to check against
	 * @param string $methodName Name of the method to check against
	 * @param string $methodDeclaringClassName Name of the class the method was originally declared in
	 * @param mixed $pointcutQueryIdentifier Some identifier for this query - must at least differ from a previous identifier. Used for circular reference detection.
	 * @return boolean TRUE if the class / method match, otherwise FALSE
	 */
	public function matches($className, $methodName, $methodDeclaringClassName, $pointcutQueryIdentifier) {
		if ($methodName === NULL) {
			return FALSE;
		}

		$objectName = $this->objectManager->getObjectNameByClassName($className);
		if (empty($objectName)) {
			return FALSE;
		}

		if ($this->objectManager->getScope($objectName) !== ObjectConfiguration::SCOPE_SESSION) {
			return FALSE;
		}

		if (preg_match('/^__wakeup|__construct|__destruct|__sleep|__serialize|__unserialize|__clone|shutdownObject|initializeObject|inject.*$/', $methodName) !== 0) {
			return FALSE;
		}

		return TRUE;
	}

	/**
	 * Returns TRUE if this filter holds runtime evaluations for a previously matched pointcut
	 *
	 * @return boolean TRUE if this filter has runtime evaluations
	 */
	public function hasRuntimeEvaluationsDefinition() {
		return FALSE;
	}

	/**
	 * Returns runtime evaluations for a previously matched pointcut
	 *
	 * @return array Runtime evaluations
	 */
	public function getRuntimeEvaluationsDefinition() {
	}

}
?>