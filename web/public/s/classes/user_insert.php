<?php

/**
* @Auther: bhief
* @Version: 1.0
*
* Inserts user information
*
**/
class user_insert {
    public $__db;

	public function __construct($conn){
        $this->__db = $conn;
	}

    function check_view_channel($vidid, $user) {
        $stmt = $this->__db->prepare("SELECT * FROM channel_views WHERE viewer = :user AND channel = :vidid");
        $stmt->bindParam(":user", $user);
        $stmt->bindParam(":vidid", $vidid);
        $stmt->execute();
        if($stmt->rowCount() === 0) {
            $this->add_view_channel($vidid, $user);
        }
    }
    
    function add_view_channel($vidid, $user) {
        $stmt = $this->__db->prepare("INSERT INTO channel_views (viewer, channel) VALUES (:user, :vidid)");
        $stmt->bindParam(":user", $user);
        $stmt->bindParam(":vidid", $vidid);
        $stmt->execute();
    }   
}

?>