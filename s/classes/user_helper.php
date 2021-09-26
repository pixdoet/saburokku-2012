<?php

/**
* @Auther: bhief
* @Version: 1.0
* @Added Base
*
* Use this class for getting user information
*
**/
class user_helper {
    public $__db;

	public function __construct($conn){
        $this->__db = $conn;
	}

    function fetch_pfp($username) {
        $stmt = $this->__db->prepare("SELECT pfp FROM users WHERE username = ?");
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $result = $stmt->get_result();
        while($row = $result->fetch_assoc()) {
            $pfp = $row['pfp'];
        }

        if(!isset($pfp))
            return "default.png";
        else
            return $pfp;

        $stmt->close();
    }

    
    function fetch_unread_pms($user) {
        $stmt = $this->__db->prepare("SELECT * FROM pms WHERE touser = ? AND readed = 'n'");
        $stmt->bind_param("s", $user);
        $stmt->execute();
        $result = $stmt->get_result();
        $rows = mysqli_num_rows($result); 
        $stmt->close();
    
        return $rows;
    }

    function if_blocked($user, $reciever) {
            $stmt = $this->__db->prepare("SELECT `reciever` FROM block WHERE sender = ? AND reciever = ?");
            $stmt->bind_param("ss", $user, $reciever);
            $stmt->execute();
        $result = $stmt->get_result();
        $user = $result->fetch_assoc();
        if($result->num_rows === 1) { return true; } else { return false; }
        $stmt->close();
        
        return $user;
    }    

    function if_cooldown($user) {
        $stmt = $this->__db->prepare("SELECT * FROM users WHERE username = ? AND cooldown_comment >= NOW() - INTERVAL 1 MINUTE");
        $stmt->bind_param("s", $user);
        $stmt->execute();
        $result = $stmt->get_result();
        $user = $result->fetch_assoc();
        if($result->num_rows === 1) { return true; } else { return false; }
        $stmt->close();
        
        return $user;
    }

    function if_upload_cooldown($user) {
        $stmt = $this->__db->prepare("SELECT * FROM users WHERE username = ? AND upload_cooldown >= NOW() - INTERVAL 10 MINUTE");
        $stmt->bind_param("s", $user);
        $stmt->execute();
        $result = $stmt->get_result();
        $user = $result->fetch_assoc();
        if($result->num_rows === 1) { return true; } else { return false; }
        $stmt->close();
        
        return $user;
    }
}

?>