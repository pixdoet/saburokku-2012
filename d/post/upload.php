<?php require_once($_SERVER['DOCUMENT_ROOT'] . "/s/classes/config.inc.php"); ?>
<?php require_once($_SERVER['DOCUMENT_ROOT'] . "/s/classes/db_helper.php"); ?>
<?php require_once($_SERVER['DOCUMENT_ROOT'] . "/s/classes/time_manip.php"); ?>
<?php require_once($_SERVER['DOCUMENT_ROOT'] . "/s/classes/user_helper.php"); ?>
<?php require_once($_SERVER['DOCUMENT_ROOT'] . "/s/classes/video_helper.php"); ?>
<?php $__server->page_title = "test"; ?>
<?php $__video_h = new video_helper($__db); ?>
<?php $__user_h = new user_helper($__db); ?>
<?php $__db_h = new db_helper(); ?>
<?php $__time_h = new time_helper(); ?>
<?php
    $rid = "";
    $characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz-_';
    for ($i = 0; $i < 11; $i++)
        $rid .= $characters[mt_rand(0, 63)];

    $video_properties = (object) [
        'video_rid' => $rid,
        'video_title' => $_POST['title'],
        'video_description' => $_POST['description'],
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
        'video_file_type' => "." . strtolower(pathinfo($_FILES["video_file"]["name"], PATHINFO_EXTENSION)),
        'target_upload_name' => md5_file($_FILES["video_file"]["tmp_name"]) . "." . strtolower(pathinfo($_FILES["video_file"]["name"], PATHINFO_EXTENSION)) // use video_file_type plzs
    ];

    if(move_uploaded_file(
        $_FILES['video_file']['tmp_name'], 
        "../temp/" . $video_properties->video_rid . $video_validation->video_file_type
    )) {
        $video_properties->video_filename = "../temp/" . $video_properties->video_rid . $video_validation->video_file_type;
    } else {
        $video_validation->upload_error = "Failed to move temp file to dynamic folder. Pottential IO/permission problem.";
        $video_validation->upload_ok = 0;
    }

    /* 
        I'm going to hopefully guess that
        user input is fine because I moved
        the temp video name to a randomly
        generated video ID.....
    */

    if ($video_validation->upload_ok == true) {

        /* Get the video duration. */
        $video_properties->video_duration = shell_exec('
            ' . $__server->ffprobe_binary . ' -i "' . $video_properties->video_filename . '" -show_entries format=duration -v quiet -of csv="p=0"
        ');

        echo system('powershell -Command "ffmpeg -i \'' . $video_properties->video_filename . '\' -show_entries format=duration -v quiet -of csv="p=0" 2>&1\'');

        /* Process the video... */
        $video_validation->video_processing_logs = shell_exec('
            ' . $__server->ffmpeg_binary . ' -i "' . $video_properties->video_filename . '" -vcodec h264 -acodec aac -pix_fmt yuv420p -threads 2 -preset medium -vf "scale=-1:480,pad=ceil(iw/2)*2:ceil(ih/2)*2" -b:v 2500k "../videos/' . $video_properties->video_rid . $video_validation->video_file_type . '"
        ');


        /* Process the thumbnail... */
        $video_properties->video_thumbnail = shell_exec('
            ' . $__server->ffmpeg_binary . ' -i "../videos/' . $video_properties->video_rid . $video_validation->video_file_type . '" -vf "select=eq(n\\,34),scale=-1:360" -vframes 1 "../thumbs/' . $video_properties->video_rid . '.png"
        ');

        echo $video_properties->video_duration;
        echo $video_validation->video_processing_logs;
        echo $video_properties->video_thumbnail;

        /* For some reason, I have to do this manually for only the thumbnail */
        
        /* TODO: fetch 3 pngs' from video stream and somehow get them to the 
           ploader and let the user select which auto-gen thumbnail is best */
        $video_properties->video_thumbnail = '../thumbs/' . $video_properties->video_rid . '.png';
    }

    echo json_encode($video_properties, JSON_PRETTY_PRINT);
    echo json_encode($video_validation, JSON_PRETTY_PRINT);
?>
