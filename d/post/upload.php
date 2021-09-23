<?php require_once($_SERVER['DOCUMENT_ROOT'] . "/static/important/config.inc.php"); ?>
<?php require_once($_SERVER['DOCUMENT_ROOT'] . "/static/lib/new/base.php"); ?>
<?php require_once($_SERVER['DOCUMENT_ROOT'] . "/static/lib/new/fetch.php"); ?>
<?php require_once($_SERVER['DOCUMENT_ROOT'] . "/static/lib/new/update.php"); ?>
<?php require_once($_SERVER['DOCUMENT_ROOT'] . "/static/lib/new/insert.php"); ?>
<?php
    $_user_fetch_utils = new user_fetch_utils();
    $_video_fetch_utils = new video_fetch_utils();
    $_video_insert_utils = new video_insert_utils();
    $_user_insert_utils = new user_insert_utils();
    $_user_update_utils = new user_update_utils();
    $_base_utils = new config_setup();
    
    $_base_utils->initialize_db_var($conn);
    $_video_fetch_utils->initialize_db_var($conn);
    $_video_insert_utils->initialize_db_var($conn);
    $_user_fetch_utils->initialize_db_var($conn);
    $_user_insert_utils->initialize_db_var($conn);
    $_user_update_utils->initialize_db_var($conn);


  $_base_utils->initialize_page_compass("post/upload");
?>
<?php
    $characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz-_';
    for ($i = 0; $i < 11; $i++)
        $rid .= $characters[mt_rand(0, 63)];

    $video_properties = (object) [
        'video_rid' => $rid,
        'video_title' => $_POST['title'],
        'video_description' => $_POST['comment'],
        'video_tags' => $_POST['tags'],
        'video_category' => $_POST['category'],
        'video_availability' => $_POST['privacy'],
        'video_filename' => "", // we will update this later
        'video_thumbnail' => "",
        'video_duration' => 0,
        'video_author' => $_SESSION['siteusername']
    ];

    $video_validation = (object) [
        'upload_ok' => true,
        'upload_error' => "",
        'moved_files' => true,
        'video_file_type' => "." . strtolower(pathinfo($_FILES["fileToUpload"]["name"], PATHINFO_EXTENSION)),
        'target_upload_name' => md5_file($_FILES["fileToUpload"]["tmp_name"]) . "." . strtolower(pathinfo($_FILES["fileToUpload"]["name"], PATHINFO_EXTENSION)) // use video_file_type plzs
    ];

    if(move_uploaded_file(
        $_FILES['fileToUpload']['tmp_name'], 
        "dynamic/temp/" . $video_properties->video_rid . $video_validation->video_file_type
    )) {
        echo $_FILES['fileToUpload']['error'];
        $video_properties->video_filename = "dynamic/temp/" . $video_properties->video_rid . $video_validation->video_file_type;
    } else {
        $video_validation->upload_error = "Failed to move temp file to dynamic folder. Pottential IO/permission problem.";
        $video_validation->upload_ok = 0;
        die($video_validation->upload_error);
    }

    /* 
        I'm going to hopefully guess that
        user input is fine because I moved
        the temp video name to a randomly
        generated video ID.....
    */

    if ($video_validation->upload_ok == 1) {
        /* Get the video duration. */
        $video_properties->video_duration = shell_exec('
            ffprobe -i ' . $video_properties->video_filename . ' -show_entries format=duration -v quiet -of csv="p=0"
        ');


        /* Process the video... */
        $video_validation->video_processing_logs = shell_exec('
            ffmpeg -hide_banner -loglevel error -i "' . $video_properties->video_filename . '" -vcodec h264 -acodec aac -pix_fmt yuv420p -threads 2 -preset medium -vf "scale=-1:480,pad=ceil(iw/2)*2:ceil(ih/2)*2" -b:v 2500k "dynamic/videos/' . $video_properties->video_rid . $video_validation->video_file_type . '"
        ');


        /* Process the thumbnail... */
        $video_properties->video_thumbnail = shell_exec('
            ffmpeg -hide_banner -loglevel panic -i "dynamic/videos/' . $video_properties->video_rid . $video_validation->video_file_type . '" -vf "select=eq(n\\,34),scale=-1:360" -vframes 1 "dynamic/thumbs/' . $video_properties->video_rid . '.png"
        ');

        /* For some reason, I have to do this manually for only the thumbnail */
        
        /* TODO: fetch 3 pngs' from video stream and somehow get them to the 
           ploader and let the user select which auto-gen thumbnail is best */
        $video_properties->video_thumbnail = 'dynamic/thumbs/' . $video_properties->video_rid . '.png';
    }
?>