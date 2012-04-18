<?php
namespace Zweiradspion\Demo\Controller;

/*                                                                        *
 * This script belongs to the FLOW3 package "Zweiradspion.Demo".          *
 *                                                                        *
 *                                                                        */

use TYPO3\FLOW3\Annotations as FLOW3;

use TYPO3\FLOW3\MVC\Controller\ActionController;
use \Zweiradspion\Demo\Domain\Model\CoffeeBean;

/**
 * CoffeeBean controller for the Zweiradspion.Demo package 
 *
 * @FLOW3\Scope("singleton")
 */
class CoffeeBeanController extends ActionController {

	/**
	 * @FLOW3\Inject
	 * @var \Zweiradspion\Demo\Domain\Repository\CoffeeBeanRepository
	 */
	protected $coffeeBeanRepository;

	/**
	 * Shows a list of coffee beans
	 *
	 * @return void
	 */
	public function indexAction() {
		$this->view->assign('coffeeBeans', $this->coffeeBeanRepository->findAll());
	}

	/**
	 * Shows a single coffee bean object
	 *
	 * @param \Zweiradspion\Demo\Domain\Model\CoffeeBean $coffeeBean The coffee bean to show
	 * @return void
	 */
	public function showAction(CoffeeBean $coffeeBean) {
		$this->view->assign('coffeeBean', $coffeeBean);
	}

	/**
	 * Shows a form for creating a new coffee bean object
	 *
	 * @return void
	 */
	public function newAction() {
	}

	/**
	 * Adds the given new coffee bean object to the coffee bean repository
	 *
	 * @param \Zweiradspion\Demo\Domain\Model\CoffeeBean $newCoffeeBean A new coffee bean to add
	 * @return void
	 */
	public function createAction(CoffeeBean $newCoffeeBean) {
		$this->coffeeBeanRepository->add($newCoffeeBean);
		$this->addFlashMessage('Created a new coffee bean.');
		$this->redirect('index');
	}

	/**
	 * Shows a form for editing an existing coffee bean object
	 *
	 * @param \Zweiradspion\Demo\Domain\Model\CoffeeBean $coffeeBean The coffee bean to edit
	 * @return void
	 */
	public function editAction(CoffeeBean $coffeeBean) {
		$this->view->assign('coffeeBean', $coffeeBean);
	}

	/**
	 * Updates the given coffee bean object
	 *
	 * @param \Zweiradspion\Demo\Domain\Model\CoffeeBean $coffeeBean The coffee bean to update
	 * @return void
	 */
	public function updateAction(CoffeeBean $coffeeBean) {
		$this->coffeeBeanRepository->update($coffeeBean);
		$this->addFlashMessage('Updated the coffee bean.');
		$this->redirect('index');
	}

	/**
	 * Removes the given coffee bean object from the coffee bean repository
	 *
	 * @param \Zweiradspion\Demo\Domain\Model\CoffeeBean $coffeeBean The coffee bean to delete
	 * @return void
	 */
	public function deleteAction(CoffeeBean $coffeeBean) {
		$this->coffeeBeanRepository->remove($coffeeBean);
		$this->addFlashMessage('Deleted a coffee bean.');
		$this->redirect('index');
	}

}

?>