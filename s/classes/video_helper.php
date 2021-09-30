<?php

/**
* @Auther: bhief
* @Version: 1.0
*
* Gets info from videos 
*
**/
class video_helper {
    public $__db;

	public function __construct($conn){
        $this->__db = $conn;
	}

    function fetch_video_views(string $id) {
        $stmt = $this->__db->prepare("SELECT * FROM views WHERE videoid = ?");
        $stmt->bind_param("s", $id);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->num_rows;
    }

    function get_comments_from_video($id) {
        $stmt = $this->__db->prepare("SELECT * FROM comments WHERE toid = ?");
        $stmt->bind_param("s", $id);
        $stmt->execute();
        $result = $stmt->get_result();
        $rows = mysqli_num_rows($result); 
        $stmt->close();
    
        return $rows;
    }

    function shorten_description(string $description, int $limit, bool $newlines = false) {
        $description = trim($description);
        if(strlen($description) >= $limit) {
            $description = substr($description, 0, $limit) . "...";
        } 

        $description = htmlspecialchars($description);
        if($newlines) { $description = str_replace(PHP_EOL, "<br>", $description); }
        return $description;
    }

    function get_video_responses($id) {
        $stmt = $this->__db->prepare("SELECT * FROM video_response WHERE toid = ?");
        $stmt->bind_param("s", $id);
        $stmt->execute();
        $result = $stmt->get_result();
        $rows = mysqli_num_rows($result); 
        $stmt->close();
    
        return $rows;
    }

    function fetch_video_rid(string $rid) {
            $stmt = $this->__db->prepare("SELECT * FROM videos WHERE rid = ?");
            $stmt->bind_param("s", $rid);
            $stmt->execute();
        $result = $stmt->get_result();
        $video = $result->fetch_assoc();

        if($result->num_rows === 0) 
            return 0;
        else
            return $video;

        $stmt->close();
    }

    function get_video_stars_level($id, $level) {
        $stmt = $this->__db->prepare("SELECT * FROM stars WHERE reciever = ? AND type = ?");
        $stmt->bind_param("si", $id, $level);
        $stmt->execute();
        $result = $stmt->get_result();
        $rows = mysqli_num_rows($result); 
        $stmt->close();
    
        return $rows;
    }

    function video_exists($video) {
            $stmt = $this->__db->prepare("SELECT `rid` FROM videos WHERE rid = ?");
            $stmt->bind_param("s", $video);
            $stmt->execute();
        $result = $stmt->get_result();
        $user = $result->fetch_assoc();
        if($result->num_rows === 1) { return true; } else { return false; }
        $stmt->close();
        
        return $user;
    }

    function fetch_user_videos($v) {
        $stmt = $this->__db->prepare("SELECT rid FROM videos WHERE author = ?");
        $stmt->bind_param("s", $v);
        $stmt->execute(); 
        $result = $stmt->get_result();
        $rows = mysqli_num_rows($result); 
        $stmt->close();
    
        return $rows;
    }
}

?>