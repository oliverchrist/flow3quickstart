<?php
namespace Zweiradspion\Demo\Controller;

/*                                                                        *
 * This script belongs to the FLOW3 package "Zweiradspion.Demo".          *
 *                                                                        *
 *                                                                        */

use TYPO3\FLOW3\Annotations as FLOW3;

/**
 * Standard controller for the Zweiradspion.Demo package
 *
 * @FLOW3\Scope("singleton")
 */
class StandardController extends \TYPO3\FLOW3\MVC\Controller\ActionController {

    /**
     * Index action
     *
     * @return void
     */
    public function indexAction() {
        $this->view->assign('foos', array(
            'bar', 'baz'
        ));
    }

    /**
     * Hello action
     *
     * @param string $name Your name
     * @return string The hello
     */
    public function helloAction($name) {
            return 'Hello ' . $name . '!';
    }
}

?>