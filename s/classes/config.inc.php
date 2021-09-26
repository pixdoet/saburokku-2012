<?php
    $__server = (object) [
        "page_title" => "",
        "featured_channels" => array("bhief", "CrazyFrog", "ItsJustAPlayer"),
        "page_embeds" => (object) [
            "page_title" => "bitch SubRocks",
            "page_description" => "",
            "page_url" => "",
            "page_image" => "",
        ],

        "db_properties" => (object) [
            "db_user" => "root",
            "db_password" => "",
            "db_host" => "127.0.0.1",
            "db_database" => "fulptube",
            "db_connected" => false,
        ], 

        "video_properties" => (object) [ "status" => "unloaded" ],
        "user_properties"  => (object) [ "status" => "unloaded" ],
        "group_properties" => (object) [ "status" => "unloaded" ],
        "forum_properties" => (object) [ "status" => "unloaded" ],
    ];

    // sorry pdo doesnt cworkd i cant get it 2 work
    $__db = new mysqli($__server->db_properties->db_host, 
                         $__server->db_properties->db_user, 
                         $__server->db_properties->db_password,
                         $__server->db_properties->db_database);

    if(!$__db->connect_error) {
        $__server->db_properties->db_connected = true;
    }
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    $__db->set_charset("utf8mb4");

    session_start();
?>