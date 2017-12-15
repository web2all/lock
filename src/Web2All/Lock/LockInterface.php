<?php

/**
 * Web2All Lock interface
 *
 * Interface to be implemented by advisory locking methods.
 *
 * @author Merijn van den Kroonenberg
 * @copyright (c) Copyright 2017 Web2All BV
 * @since 2017-08-24 
 */
interface Web2All_Lock_LockInterface {
  
  /**
   * Retrieve (set) lock
   *
   * @return boolean, true if lock free and recieved, false if not free or not received
   */
  public function getLock();

  /**
   * Release lock
   */
  public function releaseLock();
}

?>