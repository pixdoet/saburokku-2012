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
        $stmt = $this->__db->prepare("SELECT * FROM channel_views WHERE viewer = ? AND channel = ?");
        $stmt->bind_param("ss", $user, $vidid);
        $stmt->execute();
        $result = $stmt->get_result();
        if($result->num_rows === 0) {
            $this->add_view_channel($vidid, $user);
        }
        $stmt->close();
    }
    
    function add_view_channel($vidid, $user) {
        $stmt = $this->__db->prepare("INSERT INTO channel_views (viewer, channel) VALUES (?, ?)");
        $stmt->bind_param("ss", $user, $vidid);
        $stmt->execute();
        $stmt->close();
    }   
}

?>