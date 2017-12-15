<?php

Web2All_Manager_Main::loadClass('Web2All_Lock_LockInterface');

/**
 * Web2All Database Lock class
 *
 * Class to provide locking mechanisme using database. 
 *
 * @author David Arntzenius
 * @copyright (c) Copyright 2011 Web2All BV
 * @since 2012-07-03 
 */
class Web2All_Lock_Database_Lock extends Web2All_Manager_Plugin implements Web2All_Lock_LockInterface {
  
 /**
   * database connection
   *
   * @var ADOConnection
   */
  protected $db;  
  
  /**
   * name for lock
   *
   * @var string
   */
  protected $name;
  
  /**
   * timeout in seconds
   *
   * @var int
   */
  protected $timeout;
  
  /**
   * constructor
   *
   * @param Web2All_Manager_Main $web2all
   * @param ADOConnection $db 
   * @param string $name unique name for this lock (unique for database server!)
   * @param int $timeout timeout to wait for lock in seconds, default 0 (no wait)
   */
  public function __construct(Web2All_Manager_Main $web2all,$db,$name,$timeout=0) {
    parent::__construct($web2all);
    
    $this->db=$db;
    $this->name=$name;
    $this->timeout=$timeout;
  }
  
  /**
   * Retrieve (set) lock
   *
   * @return boolean, true if lock free and recieved, false if not free or not received
   */
  public function getLock() {
    $result = $this->db->Execute("SELECT GET_LOCK('".$this->name."',".$this->timeout.") AS lockreceived;");
    if ($result->RecordCount()>0) {
      $row=$result->FetchRow();
      if ($row['lockreceived']=='1') {
        return true;
      }
    }
    return false;
  }

  /**
   * Release lock
   */
  public function releaseLock() {
    $this->db->Execute("SELECT RELEASE_LOCK('".$this->name."');");
  }  
  
}

?>