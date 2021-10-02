<?php
    $__server = (object) [
        "page_title" => "",
        "featured_channels" => array("bhief", "CrazyFrog", "ItsJustAPlayer"),
        "ffmpeg_binary" => "C:\\ffmpeg\\bin\\ffmpeg", 
        "ffprobe_binary" => "C:\\ffmpeg\\bin\\ffprobe", 
        "ffmpeg_threads" => 2, 

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

    try
    {
        $__db = new PDO("mysql:host=".$__server->db_properties->db_host.";dbname=".$__server->db_properties->db_database.";charset=utf8mb4",
                        $__server->db_properties->db_user,
                        $__server->db_properties->db_password,
                        [
                            PDO::ATTR_EMULATE_PREPARES => false,
                            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
                        ]
                        );
        $__server->db_properties->db_connected = true;
    }
    catch(PDOException $e)
    {
        $__server->db_properties->db_connected = false;
        // wtf is the point of this? cant you just vomit out the error? why?????????????
    }

    session_start();
?>