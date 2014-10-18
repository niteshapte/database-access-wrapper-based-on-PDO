<?php
require 'class.PDOManager.php';

/**
 * Example class illustrating the use of PDOManager.
 * User profile acivities like login, change details, etc.
 *
 * @author Nitesh Apte
 * @copyright 2014 Nitesh Apte
 * @version 1.0
 * @license GPL Version 3.0
 */
class UserProfile {

	private $dataObject;
	
	public function __construct() {
		$this->dataObject = PDOManager::getInstance();
	}
	
	/**
	 * SELECT query example. 
	 * Method for user login.
	 */	
	public function _userLogin($_userName, $_userPass) {
		$sql = "SELECT * FROM user_table, user_access_level_table WHERE user_table.user_uname = :x1 AND user_table.user_passwd = :x2";
		$result = $this->dataObject->executeSql($sql, array($_userName, $_userPass))->fetchAssoc();
		
		return $result;
	}
	
	/**
	 * INSERT query example. 
	 * Method for user registration
	 */
	public function _userRegister($_userName, $_userFname, $_userLname, $_userEmail, $_userPass) {
		$sql = "INSERT INTO user_table(user_uname, user_fname, user_lname, user_email, user_passwd, user_activation_code, user_join_date) VALUES (:x1, :x2, :x3, :x4, :x5, '".md5(trim($_userEmail))."' , '".date("Y-m-d H:i:s",time())."')";		
		$result = $this->dataObject->executeSql($sql, array($_userName, $_userFname, $_userLname, $_userEmail))->affectedRows();
		
		return $result;		
	}
	
	/**
	 * UPDATE query example.
	 * Method to activate user's account
	 */
	public function _userActivate($_activationCode){
		$sql = "UPDATE user_table SET user_status='Active' WHERE user_activation_code=:x1 AND user_status='Inactive'";				
		$result = $this->dataObject->executeSql($sql, array($_activationCode))->affectedRows();

		return $result;		
	}

	/**
	 * DELETE query example.
	 * Method to activate user's account
	 */
	public function _deleteUser($_userID){
		$sql = "DELETE FROM user_table WHERE user_id=:x1 AND user_status='Inactive'";				
		$result = $this->dataObject->executeSql($sql, array($_userID))->affectedRows();

		return $result;		
	}	
}
?>
