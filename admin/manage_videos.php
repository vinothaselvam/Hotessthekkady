<?php
include_once 'config/Database.php';
include_once 'class/Video.php';

$database = new Database();
$db = $database->getConnection();

$post = new Video($db);


if(!empty($_POST['action']) && $_POST['action'] == 'postListing') {
	$post->getPostsListing();
}
if(!empty($_POST['action']) && $_POST['action'] == 'postDelete') {
	$post->id = (isset($_POST['postId']) && $_POST['postId']) ? $_POST['postId'] : '0';
	$post->delete();
}
?>