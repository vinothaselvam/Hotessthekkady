<?php
include_once 'config/Database.php';
include_once 'class/Team.php';
$database = new Database();
$db = $database->getConnection();

$post = new Team($db);

if(!empty($_POST['action']) && $_POST['action'] == 'postListing') {
	$post->getPostsListing();
}
if(!empty($_POST['action']) && $_POST['action'] == 'postDelete') {
	$post->id = (isset($_POST['postId']) && $_POST['postId']) ? $_POST['postId'] : '0';
	$post->delete();
}
?>