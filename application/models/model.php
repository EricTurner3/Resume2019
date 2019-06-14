<?php
/***
 *     /$$      /$$  /$$$$$$  /$$$$$$$  /$$$$$$$$ /$$
 *    | $$$    /$$$ /$$__  $$| $$__  $$| $$_____/| $$
 *    | $$$$  /$$$$| $$  \ $$| $$  \ $$| $$      | $$
 *    | $$ $$/$$ $$| $$  | $$| $$  | $$| $$$$$   | $$
 *    | $$  $$$| $$| $$  | $$| $$  | $$| $$__/   | $$
 *    | $$\  $ | $$| $$  | $$| $$  | $$| $$      | $$
 *    | $$ \/  | $$|  $$$$$$/| $$$$$$$/| $$$$$$$$| $$$$$$$$
 *    |__/     |__/ \______/ |_______/ |________/|________/
 *
 *  This is the main model class, it sets up the connections to the database that the other model classes use
 *  The models are what actually talk to the database and return information from the database
 *  The controllers are what takes information from the model and can pass it to the views
 *  The views are the visual UI that the end user sees
 *
 */
include_once('application/libraries/adodb5/adodb.inc.php');
class Model {


    //Resume DB
	protected $database;
	
	public function __construct(){
		
		try{
            /***********************
             * DATABASE CONNECTION *
             ***********************/
			$this->database = newADOConnection('mysqli');
			$this->database->setConnectionParameter('characterSet','UTF-8');
			$this->database->connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
			//IMPORTANT: This returns as results as ['columnName'] -> 'data' vs as [index] -> 'data'
            $this->database->setFetchMode(ADODB_FETCH_ASSOC);
		
		} catch (exception $e){
			
			echo 'Connection failed: ' . $e->getMessage();
			
		}
		
	}



}
