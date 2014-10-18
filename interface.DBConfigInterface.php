<?php
/**
 * Interface declaring the methods to implement for database interaction.
 *
 * @author Nitesh Apte
 * @copyright 2014 Nitesh Apte
 * @version 1.0
 * @license GPL Version 3.0
 */
interface DBConfigInterface {
	
	/**
	 * Get the single instance of class
	 * 
	 * @param none
	 * @return Object
	 */
	public static function getInstance();
	
	/**
	 * Method for connecting to database
	 * 
	 * @param none
	 * @return none
	 */
	public function makeConnection();
	
	/**
	 * Execute a sql query
	 * 
	 * @param String $query
	 * @return Object
	 */
	public function executeSql($query);
	
	/**
	 * Begin the transaction
	 * 
	 * @param none
	 * @return none
	 */
	public function beginTransaction();
	
	/**
	 * Commit the transaction
	 *
	 * @param none
	 * @return none
	 */
	public function commitTransaction();
	
	/**
	 * Rolls back the transaction
	 *
	 * @param none
	 * @return none
	 */
	public function rollbackTransaction();
	
	/**
	 * Fetch associative array
	 * 
	 * @param none
	 * @return none
	 */
	public function fetchAssoc();
	
	/**
	 * Fetch enumerated array
	 *
	 * @param none
	 * @return none
	 */
	public function fetchArray();
	
	/**
	 * Fetch Object instead of array
	 *
	 * @param none
	 * @return none
	 */
	public function fetchObject();
	
	/**
	 * Fetch the number of affected rows
	 *
	 * @param none
	 * @return int number of rows
	 */
	public function affectedRows();
	
	/**
	 * Fetch the last inserted id
	 * 
	 * @param noe
	 * @return int last row id of table
	 */
	public function lastID();
	
	/**
	 * Fetch the ids of last entry
	 * 
	 * @param int $size
	 */
	public function multipleID($size);
	
	/**
	 * Frees the database result
	 * 
	 * @param none
	 * @return none
	 */
	public function freeResult();
}
?>
