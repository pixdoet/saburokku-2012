<?php
$requestedPage = explode("/", strtok($_SERVER['REQUEST_URI'], '?'));

switch ($requestedPage[1]) {
    case 'player':
        if($requestedPage[1] == "2009player" && $requestedPage[2] == "assets") {
            $a = implode("/", $requestedPage);
            $i = implode(".", $requestedPage);
            $file = file_get_contents($_SERVER['DOCUMENT_ROOT'] . $a);
            $file_info = new finfo(FILEINFO_MIME_TYPE);
            $mime_type = $file_info->buffer($file);
            header('Content-Type: ' . $mime_type);
            echo $file;
            break;
            die();
        }
        require_once($_SERVER['DOCUMENT_ROOT'] . "/" . $requestedPage[1] . "/" . $requestedPage[2] . ".php");
        break;
    case 'tos':
    case 'tos.php':
        header('Location: /t/terms');
        break;
    case 'api_qa':
    case 'api_qa.php':
        header('Location: /t/developers');
        break;
    case 'dynamic':
    case 'yt':
    case 's':
    case 'player_asset':
        $a = implode("/", $requestedPage);
        $i = implode(".", $requestedPage);
        // shitty fix plz dont use in production and stop using the shitty router bitch
        ini_set ('memory_limit', 400000000);

        // normal
        $file = file_get_contents($_SERVER['DOCUMENT_ROOT'] . $a);

        // subrocks proxy / for debug purposes & no filled data
        // $file = file_get_contents("https://subrock.rocks" . $a);

        // subrocks proxy LOCAL / hosting site data on another server mirror
        // $file = file_get_contents("http://192.168.1.7:8000" . $a);

        $file_info = new finfo(FILEINFO_MIME_TYPE);
        $mime_type = $file_info->buffer($file);
        if($mime_type == "text/plain")
            header('Content-Type: text/css');
        else
            header('Content-Type: ' . $mime_type);
        echo $file;
        break;
    case 'inbox':
    case 'get':
    case 'post':
    case 'forum':
    case 'admin':
    case '2009player':
        if ($requestedPage[2] == "") {
            $requestedPage[2] = "index";
        }
        require_once($_SERVER['DOCUMENT_ROOT'] . "/" . $requestedPage[1] . "/" . $requestedPage[2] . ".php");
        die();
        break;
	case 'd':
		if ($requestedPage[2] == "") {
			$requestedPage[2] = "index";
		}
		require_once($_SERVER['DOCUMENT_ROOT'] . "/" . $requestedPage[1] . "/" . $requestedPage[2] . ".php");
		die();
		break;
    case 'user':
        $_GET['n'] = $requestedPage[2];
        require_once($_SERVER['DOCUMENT_ROOT'] . "/channel.php");
        die();
        break;
    default:
		require_once($_SERVER['DOCUMENT_ROOT'] . "/s/classes/config.inc.php"); 
		require_once($_SERVER['DOCUMENT_ROOT'] . "/s/classes/db_helper.php"); 
		require_once($_SERVER['DOCUMENT_ROOT'] . "/s/classes/time_manip.php"); 
		require_once($_SERVER['DOCUMENT_ROOT'] . "/s/classes/user_helper.php"); 
		require_once($_SERVER['DOCUMENT_ROOT'] . "/s/classes/video_helper.php"); 
		$__video_h = new video_helper($__db); 
		$__user_h = new user_helper($__db); 
		$__db_h = new db_helper(); 
		$__time_h = new time_helper(); 
        
        if(empty($requestedPage[1]))
            require_once($_SERVER['DOCUMENT_ROOT'] . "/homepage.php");
        else
            require_once($_SERVER['DOCUMENT_ROOT'] . "/" . $requestedPage[1] . ".php");
        die();
        break;
}