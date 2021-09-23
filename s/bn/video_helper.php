<?php

/**
* @Auther: bhief
* @Version: 1.0
*
* Gets info from videos 
*
**/
class video_fetcher {
    public $__db;

	public function __construct($conn){
        $this->__db = $conn;
	}

    function fetch_video_views($id) {
        $stmt = $this->__db->prepare("SELECT * FROM views WHERE videoid = ?");
        $stmt->bind_param("s", $id);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->num_rows;
    }

    function shorten_description($description, $limit) {
        $description = trim($description);
        if(strlen($description) >= $limit) {
            $description = substr($description, 0, $limit) . "...";
        } 
        $description = htmlspecialchars($description);
        return $description;
    }
}

?>