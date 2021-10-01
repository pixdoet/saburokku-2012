<?php require_once($_SERVER['DOCUMENT_ROOT'] . "/s/classes/config.inc.php"); ?>
<?php require_once($_SERVER['DOCUMENT_ROOT'] . "/s/classes/db_helper.php"); ?>
<?php require_once($_SERVER['DOCUMENT_ROOT'] . "/s/classes/time_manip.php"); ?>
<?php require_once($_SERVER['DOCUMENT_ROOT'] . "/s/classes/user_helper.php"); ?>
<?php require_once($_SERVER['DOCUMENT_ROOT'] . "/s/classes/video_helper.php"); ?>
<?php require_once($_SERVER['DOCUMENT_ROOT'] . "/s/classes/user_update.php"); ?>
<?php $__server->page_title = "test"; ?>
<?php $__video_h = new video_helper($__db); ?>
<?php $__user_h = new user_helper($__db); ?>
<?php $__user_u = new user_update($__db); ?>
<?php $__db_h = new db_helper(); ?>
<?php $__time_h = new time_helper(); ?>
<?php
    function clean($string) {
        $string = str_replace(' ', '-', $string); // Replaces all spaces with hyphens.
    
        return preg_replace('/[^A-Za-z0-9\-]/', '', $string); // Removes special chars.
    }

        $stmt = $__db->prepare("UPDATE users SET layout = ? WHERE username = ?");
        $stmt->bind_param("ss", $_POST['layout'], $_SESSION['siteusername']);
        $stmt->execute();
        $stmt->close();

        $stmt = $__db->prepare("UPDATE users SET 2009_user_left = ? WHERE username = ?");
        $stmt->bind_param("ss", $clean, $_SESSION['siteusername']);
        $clean = $_POST['left'];
        $stmt->execute();
        $stmt->close();

        $stmt = $__db->prepare("UPDATE users SET 2009_user_right = ? WHERE username = ?");
        $stmt->bind_param("ss", $clean, $_SESSION['siteusername']);
        $clean = $_POST['right'];
        $stmt->execute();
        $stmt->close();

        if($_SERVER['REQUEST_METHOD'] == 'POST' && @$_FILES['pfpset']) {
            if(!empty($_FILES["pfpset"]["name"])) {
                $target_dir = "../pfp/";
                $imageFileType = strtolower(pathinfo($_FILES["pfpset"]["name"], PATHINFO_EXTENSION));
                $target_name = md5_file($_FILES["pfpset"]["tmp_name"]) . "." . $imageFileType;
        
                $target_file = $target_dir . $target_name;
        
                $uploadOk = true;
                $movedFile = false;
        
                if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
                    && $imageFileType != "gif" ) {
                    $fileerror = 'unsupported file type. must be jpg, png, jpeg, or gif';
                    $uploadOk = false;
                    goto skip;
                }
        
                if (file_exists($target_file)) {
                    $movedFile = true;
                } else {
                    $movedFile = move_uploaded_file($_FILES["pfpset"]["tmp_name"], $target_file);
                }
        
                if ($uploadOk) {
                    if ($movedFile) {
                        $stmt = $__db->prepare("UPDATE users SET pfp = ? WHERE `users`.`username` = ?;");
                        $stmt->bind_param("ss", $target_name, $_SESSION['siteusername']);
                        $stmt->execute();
                        $stmt->close();
                    } else {
                        $fileerror = 'fatal error';
                    }
                }
            }
        } else if($_SERVER['REQUEST_METHOD'] == 'POST' && @$_FILES['backgroundbgset']) {
            if(!empty($_FILES["backgroundbgset"]["name"])) {
                $target_dir = "../banners/";
                $imageFileType = strtolower(pathinfo($_FILES["backgroundbgset"]["name"], PATHINFO_EXTENSION));
                $target_name = md5_file($_FILES["backgroundbgset"]["tmp_name"]) . "." . $imageFileType;
    
                $target_file = $target_dir . $target_name;
    
                $uploadOk = true;
                $movedFile = false;
    
                if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
                    && $imageFileType != "gif" ) {
                    $fileerror = 'unsupported file type. must be jpg, png, jpeg, or gif';
                    $uploadOk = false;
                    goto skip;
                }
    
                if($uploadOk) { 
                    if (file_exists($target_file)) {
                        $movedFile = true;
                    } else {
                        $movedFile = move_uploaded_file($_FILES["backgroundbgset"]["tmp_name"], $target_file);
                    }
                }
    
                if ($uploadOk) {
                    if ($movedFile) {
                        $__user_u->update_user_bg_09(
                            $target_name, 
                            $_SESSION['siteusername']
                        );
                    } else {
                        $fileerror = 'fatal error';
                    }
                }
            }
        } else if($_SERVER['REQUEST_METHOD'] == 'POST' && @$_POST['bannerset']) {
            if(!empty($_FILES["file"]["name"])) {
                $target_dir = "../banners/";
                $imageFileType = strtolower(pathinfo($_FILES["file"]["name"], PATHINFO_EXTENSION));
                $target_name = md5_file($_FILES["file"]["tmp_name"]) . "." . $imageFileType;
    
                $target_file = $target_dir . $target_name;
    
                $uploadOk = true;
                $movedFile = false;
    
                if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
                    && $imageFileType != "gif" ) {
                    $fileerror = 'unsupported file type. must be jpg, png, jpeg, or gif';
                    $uploadOk = false;
                    goto skip;
                }
    
                if($uploadOk) { 
                    if (file_exists($target_file)) {
                        $movedFile = true;
                    } else {
                        $movedFile = move_uploaded_file($_FILES["file"]["tmp_name"], $target_file);
                    }
                }
    
                if ($uploadOk) {
                    if ($movedFile) {
                        $__user_u->update_user_banner(
                            $target_name, 
                            $_SESSION['siteusername']
                        );
                    } else {
                        $fileerror = 'fatal error';
                    }
                } 
            }
        } else if($_SERVER['REQUEST_METHOD'] == 'POST' && @$_FILES['videopagebanner']) {
            if(!empty($_FILES["videopagebanner"]["name"])) {
                $target_dir = "../subscribe/";
                $imageFileType = strtolower(pathinfo($_FILES["videopagebanner"]["name"], PATHINFO_EXTENSION));
                $target_name = md5_file($_FILES["videopagebanner"]["tmp_name"]) . "." . $imageFileType;
    
                $target_file = $target_dir . $target_name;
    
                $uploadOk = true;
                $movedFile = false;
    
                if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
                    && $imageFileType != "gif" ) {
                    $fileerror = 'unsupported file type. must be jpg, png, jpeg, or gif';
                    $uploadOk = false;
                    goto skip;
                }
    
                if($uploadOk) { 
                    if (file_exists($target_file)) {
                        $movedFile = true;
                    } else {
                        $movedFile = move_uploaded_file($_FILES["videopagebanner"]["tmp_name"], $target_file);
                    }
                }
    
                if ($uploadOk) {
                    if ($movedFile) {
                        $__user_u->update_user_video_banner(
                            $target_name, 
                            $_SESSION['siteusername']
                        );
                    } else {
                        $fileerror = 'fatal error';
                    }
                }
            }
        }

        if(!empty($_POST['bio'])) { 
            $__user_u->update_user_bio(
                $_SESSION['siteusername'], 
                $_POST['bio']
            );
        }

        if(!empty($_POST['videoid'])) { 
            $__user_u->update_user_channels(
                $_SESSION['siteusername'], 
                $_POST['videoid']
            );
        }
    
        if(!empty($_POST['css'])) {
            $__user_u->update_user_css(
                $_SESSION['siteusername'], 
                $_POST['css']
            );
        }

        if(!empty($_POST['videoid'])) {
            $__user_u->update_user_featured_video(
                $_SESSION['siteusername'], 
                $_POST['videoid']
            );
        }

        if(!empty($_POST['solidcolor'])) {
            $__user_u->update_user_primary_color(
                $_SESSION['siteusername'], 
                $_POST['solidcolor']
            );
        }

        if(!empty($_POST['transparency'])) {
            $__user_u->update_user_transparency(
                $_SESSION['siteusername'], 
                $_POST['transparency']
            );
        }

        if(!empty($_POST['genre'])) {
            $__user_u->update_user_genre(
                $_SESSION['siteusername'], 
                $_POST['genre']
            );
        }

        if(!empty($_POST['bordercolor'])) {
            $__user_u->update_user_border_color(
                $_SESSION['siteusername'], 
                $_POST['bordercolor']
            );
        }

        if(!empty($_POST['country'])) {
            $__user_u->update_user_country(
                $_SESSION['siteusername'], 
                $_POST['country']
            );
        }

        if(!empty($_POST['header'])) {
            $__user_u->update_user_header(
                $_SESSION['siteusername'], 
                $_POST['header']
            );
        }

        if(!empty($_POST['channels'])) {
            $__user_u->update_user_channels(
                $_SESSION['siteusername'], 
                $_POST['channels']
            );
        }

        if(!empty($_POST['customtext'])) {
            $__user_u->update_user_text(
                $_SESSION['siteusername'], 
                $_POST['customtext']
            );
        }

        if(!empty($_POST['country'])) {
            $__user_u->update_user_text(
                $_SESSION['siteusername'], 
                $_POST['country']
            );
        }

        if(!empty($_POST['website'])) {
            $__user_u->update_user_website(
                $_SESSION['siteusername'], 
                $_POST['website']
            );
        }
    
        if(!empty($_POST['channelboxcolor'])) {
            $__user_u->update_user_secondary_color(
                $_SESSION['siteusername'], 
                $_POST['channelboxcolor']
            );
        }

        if(!empty($_POST['backgroundcolor'])) {
            $__user_u->update_user_third_color(
                $_POST['backgroundcolor'], 
                $_SESSION['siteusername']
            );
        }

        if(!empty($_POST['textmaincolor'])) {
            $__user_u->update_user_primary_text_color(
                $_SESSION['siteusername'], 
                $_POST['textmaincolor']
            );
        }

    if(!empty($_POST['bgoptionset'])) {
        $bgoption = $_POST['bgoption'];
        $bgcolor = $_POST['solidcolor'];
        $default = "default.png";

        $__user_u->update_user_bg_option_09(
            $bgoption, 
            $_SESSION['siteusername']
        );

        $__user_u->update_user_bg_color_09(
            $bgcolor, 
            $_SESSION['siteusername']
        );  

        if($bgoption == "solid") {
            $__user_u->update_user_bg_color_09(
                $bgcolor, 
                $_SESSION['siteusername']
            );    
            
            $__user_u->update_user_bg_09(
                $default, 
                $_SESSION['siteusername']
            );
        }
    }
    
    skip:

    print_r($_POST);
    print_R($_FILES);

    //echo "<script>
    //window.location = '/channel_2?n=" . htmlspecialchars($_SESSION['siteusername']) . "';
    //</script>";
?>