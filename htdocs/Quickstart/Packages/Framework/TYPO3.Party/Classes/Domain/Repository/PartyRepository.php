<?php
namespace TYPO3\Party\Domain\Repository;

/*                                                                        *
 * This script belongs to the FLOW3 package "Party".                      *
 *                                                                        *
 * It is free software; you can redistribute it and/or modify it under    *
 * the terms of the GNU Lesser General Public License, either version 3   *
 *  of the License, or (at your option) any later version.                *
 *                                                                        *
 * The TYPO3 project - inspiring people to share!                         *
 *                                                                        */

use TYPO3\FLOW3\Annotations as FLOW3;

/**
 * Repository for parties
 *
 * @FLOW3\Scope("singleton")
 */
class PartyRepository extends \TYPO3\FLOW3\Persistence\Repository {

	const ENTITY_CLASSNAME = 'TYPO3\Party\Domain\Model\AbstractParty';

}

?>