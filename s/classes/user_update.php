<?php

/**
* @Auther: bhief
* @Version: 1.0
*
* Sets user information (eg, cooldowns)
*
**/
class user_update {
    public $__db;

	public function __construct($conn){
        $this->__db = $conn;
	}

    function update_comment_cooldown_time($username) {
        $stmt = $this->__db->prepare("UPDATE users SET cooldown_comment = now() WHERE username = ?");
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $stmt->close();
    }

    function update_upload_cooldown_time($username) {
        $stmt = $this->__db->prepare("UPDATE users SET upload_cooldown = now() WHERE username = ?");
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $stmt->close();
    }
}

?>