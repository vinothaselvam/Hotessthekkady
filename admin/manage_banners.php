<?php
include_once 'config/Database.php';
include_once 'class/Post_banner.php';
$database = new Database();
$db = $database->getConnection();

$category = new Post_banner($db);

if(!empty($_POST['action']) && $_POST['action'] == 'bannerListing') {
	$category->bannerListing();
}
if(!empty($_POST['action']) && $_POST['action'] == 'bannerDelete') {
	$category->id = (isset($_POST['categoryId']) && $_POST['categoryId']) ? $_POST['categoryId'] : '0';
	$category->delete();
}
?>