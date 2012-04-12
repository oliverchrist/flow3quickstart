<?php
namespace TYPO3\FLOW3\I18n\Cldr\Reader\Exception;

/*                                                                        *
 * This script belongs to the FLOW3 framework.                            *
 *                                                                        *
 * It is free software; you can redistribute it and/or modify it under    *
 * the terms of the GNU Lesser General Public License, either version 3   *
 * of the License, or (at your option) any later version.                 *
 *                                                                        *
 * The TYPO3 project - inspiring people to share!                         *
 *                                                                        */

/**
 * The "Invalid Format Length" exception
 *
 * Thrown when $formatLength parameter provided to any Readers' method is not
 * one of allowed values.
 *
 * @api
 */
class InvalidFormatLengthException extends \TYPO3\FLOW3\I18n\Exception\InvalidArgumentException {

}

?>