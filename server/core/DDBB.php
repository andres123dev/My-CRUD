<?php
/** Andrés Fernández Burón
 *  23/04/2023
 * 
 *  Copyright (C) 2023 All rights reserved
 * 
 */

/*
ini_set('display_errors','On');
error_reporting(E_ALL);
*/

class DDBB {
    
	private static $instance = null;
	
    private $conn;

    private function __construct() {

        // Harcoded credentials !!
        $host = "localhost";
        //$port = '3306';
        $username = "andres";
        $password = "andres";
        $db_name = "gamedb";

        $this->conn = new PDO(
            "mysql:host=$host;dbname=$db_name",
            $username, $password
        );
    }

    public static function get_instance() {
        if( self::$instance === null ) {
            self::$instance = new DDBB();
        }
        return self::$instance;
    }

    # EXECUTE SQL QUERY
    public function execute_query( $sql, $params=[] ) {
        $statement = $this->conn->prepare( $sql );
        $statement->execute($params);
        return $statement;
    }

    public function get_conn() {
        return $this->conn;
    }

}
