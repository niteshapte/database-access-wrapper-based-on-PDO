<?php
require 'DBConfig.php';
/**
 * Initialize configuration of database
 *
 * @author Nitesh Apte
 * @copyright 2014 Nitesh Apte
 * @version 1.0
 * @license GPL Version 3.0
 */
abstract class DBConfig {

	/**
	 * @var Database host
	 * @access protected
	 */
	protected $sqlHost;

	/**
	 * @var Database user
	 * @access protected
	 */
	protected $sqlUser;

	/**
	 * @var Database password
	 * @access protected
	 */
	protected $sqlPass;

	/**
	 * @var Database name
	 * @access protected
	 */
	protected $sqlDB;
	
	/**
	 * @var Database type
	 * @access protected
	 */
	protected $dbType;
	
	/**
	 * @var Database port
	 * @access protected
	 */
	protected $dbport;
	

	/**
	 * Set the configuration values for Database Connectivity
	 *
	 * @param none
	 * @return none
	 */
	protected function initializeConfiguration() {
		$this->dbType  	= DBTYPE;
		$this->sqlHost 	= HOST;
		$this->sqlUser 	= USER;
		$this->sqlPass 	= PASSWORD;
		$this->sqlDB 	= DNAME;
		$this->dbport 	= PORT;
	}
}
?>
