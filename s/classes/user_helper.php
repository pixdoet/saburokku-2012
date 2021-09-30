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

    function fetch_user_username($username) {
            $stmt = $this->__db->prepare("SELECT * FROM users WHERE username = ?");
            $stmt->bind_param("s", $username);
            $stmt->execute();
        $result = $stmt->get_result();
        $user = $result->fetch_assoc();

        if($result->num_rows === 0) 
            return 0;
        else
            return $user;

        $stmt->close();
    }

    function user_exists($user) {
            $stmt = $this->__db->prepare("SELECT `username` FROM users WHERE username = ?");
            $stmt->bind_param("s", $user);
            $stmt->execute();
        $result = $stmt->get_result();
        $user = $result->fetch_assoc();
        if($result->num_rows === 1) { return true; } else { return false; }
        $stmt->close();
        
        return $user;
    }

    function if_subscribed($user, $reciever) {
        $stmt = $this->__db->prepare("SELECT `reciever` FROM subscribers WHERE sender = ? AND reciever = ?");
        $stmt->bind_param("ss", $user, $reciever);
        $stmt->execute();
        $result = $stmt->get_result();
        $user = $result->fetch_assoc();
        if($result->num_rows === 1) { return true; } else { return false; }
        $stmt->close();
        
        return $user;
    }

    function fetch_subs_count($username) {
        $stmt = $this->__db->prepare("SELECT * FROM subscribers WHERE reciever = ?");
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $result = $stmt->get_result();
        $rows = mysqli_num_rows($result); 
        $stmt->close();
    
        return $rows;
    }

    function fetch_user_videos(string $id) {
        $stmt = $this->__db->prepare("SELECT rid FROM videos WHERE author = ?");
        $stmt->bind_param("s", $id);
        $stmt->execute(); 
        $result = $stmt->get_result();
        $rows = mysqli_num_rows($result); 
        $stmt->close();
    
        return $rows;
    }

    function fetch_user_favorites(string $username) {
        $stmt = $this->__db->prepare("SELECT reciever FROM favorite_video WHERE sender = ?");
        $stmt->bind_param("s", $username);
        $stmt->execute(); 
        $result = $stmt->get_result();
        $rows = mysqli_num_rows($result); 
        $stmt->close();
    
        return $rows;
    }

    function fetch_subscriptions($username) {
        $stmt = $this->__db->prepare("SELECT * FROM subscribers WHERE sender = ?");
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $result = $stmt->get_result();
        $rows = mysqli_num_rows($result); 
        $stmt->close();
    
        return $rows;
    }

    function get_channel_views(string $rid) {
            $stmt = $this->__db->prepare("SELECT * FROM channel_views WHERE channel = ?");
            $stmt->bind_param("s", $rid);
            $stmt->execute();
        $result = $stmt->get_result();
        return $result->num_rows;

        $stmt->close();
    }

    function fetch_friends_accepted($username) {
        $stmt = $this->__db->prepare("SELECT * FROM friends WHERE reciever = ? AND status = 'a'");
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $result = $stmt->get_result();
        $rows = mysqli_num_rows($result); 
        $stmt->close();
    
        $friends = $rows;

        $stmt = $this->__db->prepare("SELECT * FROM friends WHERE sender = ? AND status = 'a'");
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $result = $stmt->get_result();
        $rows = mysqli_num_rows($result); 
        $stmt->close();
    
        return $friends + $rows;
    }
}

?>