	<?php
/**
	User.php
	user class definition
*/


class User {

	public $userId;
	public $userName;
	public $userEmail;
	public $userPass;
	public $userHash;

	/**
     *	register class
     *	I'm going to init empty for now
     */
	public function __construct() {
		
	}

	/**
	 *	run login
	 */
	public function runLogin($userName,$userPass) {
		$userCreds = $this->getUserCreds();

	}

	/**
	 *	private function to do things
	 */
	private function getUserCreds() {
		/**
		  *	return codes:
		  *	0 failed - no db connection
		  * 1 failed - bad query
		  * 2 failed - no results
		  * 3 success, array($userName,(hashed) $userPass)
		  */
		$return = array();										//create dump array
		$return["code"] = 0;									//the code
		$return["str"] = "no db connection";					//the string
		$return["status"] = false;

		if(!$postgres) {										//check for a valid db connection
			return $return;										//return false
		}

		$return["code"] = 1;									//the code
		$return["str"] = "bad query";							//the string
		/**
			do the query
			also, need to see about adding exceptions here instead
		*/



			

		return $return;											//return the data
	}
}

?>