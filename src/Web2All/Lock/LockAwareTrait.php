<?php

/**
 * Web2All Lock LockAwareTrait
 *
 * Trait to be used by classes which wish to implement
 * Web2All_Lock_LockAwareInterface (use advisory locking).
 *
 * @author Merijn van den Kroonenberg
 * @copyright (c) Copyright 2017 Web2All BV
 * @since 2017-08-24 
 */
trait Web2All_Lock_LockAwareTrait {
  
  private $advisory_locking_mechanism;
  
  /**
   * Assign advisory locking mechanism
   *
   * @param Web2All_Lock_LockInterface $lock
   */
  public function setLockingMechanism($lock)
  {
    $this->advisory_locking_mechanism = $lock;
  }
  
  /**
   * Get advisory locking mechanism
   *
   * @return Web2All_Lock_LockInterface
   */
  protected function getLockingMechanism()
  {
    return $this->advisory_locking_mechanism;
  }
}

?>