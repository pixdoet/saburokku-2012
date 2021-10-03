<?php ob_start(); ?>
<?php require_once($_SERVER['DOCUMENT_ROOT'] . "/s/classes/config.inc.php"); ?>
<?php require_once($_SERVER['DOCUMENT_ROOT'] . "/s/classes/db_helper.php"); ?>
<?php require_once($_SERVER['DOCUMENT_ROOT'] . "/s/classes/time_manip.php"); ?>
<?php require_once($_SERVER['DOCUMENT_ROOT'] . "/s/classes/user_helper.php"); ?>
<?php require_once($_SERVER['DOCUMENT_ROOT'] . "/s/classes/video_helper.php"); ?>
<?php $__video_h = new video_helper($__db); ?>
<?php $__user_h = new user_helper($__db); ?>
<?php $__db_h = new db_helper(); ?>
<?php $__time_h = new time_helper(); ?>
<?php
$playlist = $_video_fetch_utils->fetch_playlist_rid($_GET['playlist']);

if($playlist['author'] == $_SESSION['siteusername']) {
    $b = json_decode($playlist['videos']);
    array_push($b, $_GET['id']);
    $b = json_encode($b);
    
    $stmt = $conn->prepare("UPDATE playlists SET videos = ? WHERE rid = ?");
    $stmt->bind_param("ss", $b, $_GET['playlist']);
    $videos = $playlist['videos'] . "|" . $_GET['playlist'];
    $stmt->execute();
    $stmt->close();
}

header('Location: /playlists');
?>