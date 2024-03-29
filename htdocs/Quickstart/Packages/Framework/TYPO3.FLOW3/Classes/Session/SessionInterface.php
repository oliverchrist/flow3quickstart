<?php
namespace TYPO3\FLOW3\Session;

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
 * Contract for a simple session.
 *
 */
interface SessionInterface {

	/**
	 * Tells if the session has been started already.
	 *
	 * @return boolean
	 */
	public function isStarted();

	/**
	 * Starts the session, if is has not been already started
	 *
	 * @return void
	 */
	public function start();

	/**
	 * Returns TRUE if there is a session that can be resumed. FALSE otherwise
	 *
	 * @return boolean
	 */
	public function canBeResumed();

	/**
	 * Resumes an existing session, if any.
	 *
	 * @return void
	 */
	public function resume();

	/**
	 * Returns the current session ID.
	 *
	 * @return string The current session ID
	 * @throws \TYPO3\FLOW3\Session\Exception\SessionNotStartedException
	 */
	public function getId();

	/**
	 * Generates and propagates a new session ID and transfers all existing data
	 * to the new session.
	 *
	 * Renewing the session ID is one counter measure against Session Fixation Attacks.
	 *
	 * @return string The new session ID
	 */
	public function renewId();

	/**
	 * Returns the contents (array) associated with the given key.
	 *
	 * @param string $key An identifier for the content stored in the session.
	 * @return array The contents associated with the given key
	 * @throws \TYPO3\FLOW3\Session\Exception\SessionNotStartedException
	 */
	public function getData($key);

	/**
	 * Returns TRUE if $key is available.
	 *
	 * @param string $key
	 * @return boolean
	 */
	public function hasKey($key);

	/**
	 * Stores the given data under the given key in the session
	 *
	 * @param string $key The key under which the data should be stored
	 * @param object $data The data to be stored
	 * @return void
	 * @throws \TYPO3\FLOW3\Session\Exception\SessionNotStartedException
	 */
	public function putData($key, $data);

	/**
	 * Explicitly writes (persists) and closes the session
	 *
	 * @return void
	 * @throws \TYPO3\FLOW3\Session\Exception\SessionNotStartedException
	 */
	public function close();

	/**
	 * Explicitly destroys all session data
	 *
	 * @return void
	 * @throws \TYPO3\FLOW3\Session\Exception\SessionNotStartedException
	 */
	public function destroy();

}

?>