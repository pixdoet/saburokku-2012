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

    public function sh_exec(string $cmd, string $outputfile = "", string $pidfile = "", bool $mergestderror = true, bool $bg = false) {
        $fullcmd = $cmd;
        if(strlen($outputfile) > 0) $fullcmd .= " >> " . $outputfile;
        if($mergestderror) $fullcmd .= " 2>&1";
        
        if($bg) {
            $fullcmd = "nohup " . $fullcmd . " &";
            if(strlen($pidfile)) $fullcmd .= " echo $! > " . $pidfile;
        } else {
            if(strlen($pidfile) > 0) $fullcmd .= "; echo $$ > " . $pidfile;
        }
        shell_exec($fullcmd);
    }

	public function __construct($conn){
        $this->__db = $conn;
	}

    function fetch_video_views(string $id) {
        $stmt = $this->__db->prepare("SELECT * FROM views WHERE videoid = :id");
        $stmt->bindParam(":id", $id);
        $stmt->execute();

        return $stmt->rowCount();
    }

    function get_comments_from_video($id) {
        $stmt = $this->__db->prepare("SELECT * FROM comments WHERE toid = :id");
        $stmt->bindParam(":id", $id);
        $stmt->execute();
    
        return $stmt->rowCount();
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
        $stmt = $this->__db->prepare("SELECT * FROM video_response WHERE toid = :id");
        $stmt->bindParam(":id", $id);
        $stmt->execute();
    
        return $stmt->rowCount();
    }

    function fetch_video_rid(string $rid) {
        $stmt = $this->__db->prepare("SELECT * FROM videos WHERE rid = :rid");
        $stmt->bindParam(":rid", $rid);
        $stmt->execute();

        return ($stmt->rowCount() === 0 ? 0 : $stmt->fetch(PDO::FETCH_ASSOC));
    }

    function get_video_stars_level($id, $level) {
        $stmt = $this->__db->prepare("SELECT * FROM stars WHERE reciever = :id AND type = :lvl");
        $stmt->bindParam(":id", $id);
        $stmt->bindParam(":lvl", $level, PDO::PARAM_INT);
        $stmt->execute();
    
        return $stmt->rowCount();
    }

    function video_exists($video) {
        $stmt = $this->__db->prepare("SELECT rid FROM videos WHERE rid = :rid");
        $stmt->bindParam(":rid", $video);
        $stmt->execute();
        
        return $stmt->rowCount() === 1;
    }

    function fetch_user_videos($v) {
        $stmt = $this->__db->prepare("SELECT rid FROM videos WHERE author = :v");
        $stmt->bindParam(":v", $v);
        $stmt->execute(); 
    
        return $stmt->rowCount();
    }
}

?>