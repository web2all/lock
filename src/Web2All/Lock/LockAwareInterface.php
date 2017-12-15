<?php

/**
 * Web2All Lock LockAwareInterface
 *
 * Interface to be implemented by classes which wish to use
 * an advisory locking mechanism.
 *
 * @author Merijn van den Kroonenberg
 * @copyright (c) Copyright 2017 Web2All BV
 * @since 2017-08-24 
 */
interface Web2All_Lock_LockAwareInterface {
  
  /**
   * Assign advisory locking mechanism
   *
   * @param Web2All_Lock_LockInterface $lock
   */
  public function setLockingMechanism($lock);
}

?>