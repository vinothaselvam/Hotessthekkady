<?php
include_once 'config/Database.php';
include_once 'class/User.php';
include_once 'class/Post.php';
include_once 'class/Category.php';
include_once 'class/Post_banner.php';
include_once 'class/Video.php';

include_once 'class/Team.php';

$database = new Database();
$db = $database->getConnection();

$user = new User($db);
$post = new Post($db);

$category = new Category($db);
$team = new Team($db);
$video=new Video($db);

if(!$user->loggedIn()) {
	header("location: index.php");
}




//$category = new Post_banner($db);

if(!$user->loggedIn()) {
	header("location: index.php");
}

$category = new Post_banner($db);

$category->id = (isset($_GET['id']) && $_GET['id']) ? $_GET['id'] : '0';

$saveMessage = '';
if(!empty($_POST["postSave"]) && $_POST["bannerName"]!='') {
	
	$category->name = $_POST["bannerName"];
	$category->description = $_POST["description"];
	//Single file Upload
			$filename = $_FILES["uploadfile"]["name"];
            $tempname = $_FILES["uploadfile"]["tmp_name"];  
           // $date_update = date('Y-m-d H:i:s');   
            $folder = "boxbanner/".$filename;
          $category->filename = $folder;
		       if (move_uploaded_file($tempname, $folder))  {
		       	 
		            $msg = "Image uploaded successfully";
		        }	
	if($category->id) {			
		if($category->update()) {
           $folder = "boxbanner/".$filename;
          $category->filename = $folder;
		       if (move_uploaded_file($tempname, $folder))  {
		       	 
		            $msg = "Image uploaded successfully";
		        }
			$saveMessage = "Category updated successfully!";
		}
	} else {			
		$lastInserId = $category->insert();
		if($lastInserId) {
			$category->id = $lastInserId;
			$saveMessage = "Category saved successfully!";
		}
	}
}

$categoryDetails = $category->getBanner();

include('inc/header.php');
?>
<script src="js/jquery.dataTables.min.js"></script>
<script src="js/dataTables.bootstrap.min.js"></script>		
<link rel="stylesheet" href="css/dataTables.bootstrap.min.css" />
<script src="js/banner.js"></script>	
<link href="css/style.css" rel="stylesheet" type="text/css" >  
</head>
<body>
<?php include "menus.php"; ?>
<!-- <header id="header">
	<div class="container">
		<div class="row">
			<div class="col-md-10">
				<h2><span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Dashboard <small>Manage Your Site</small></h2>
			</div>
			<br>			
		</div>
	</div>
</header> -->
<br>
<section id="main">
	<div class="container">
		<div class="row">	
		<?php include "left_menus.php"; ?>
			<div class="col-md-9">
				<div class="panel panel-default">
				  <div class="panel-heading" style="background-color:  #095f59;">
					<!-- <h3 class="panel-title" style="color:  white;">Add / Edit Banner</h3> -->
				  </div>
				  <div class="panel-body">
				  
					<form method="post" id="postForm" enctype="multipart/form-data">							
						<?php if ($saveMessage != '') { ?>
							<div id="login-alert" class="alert alert-success col-sm-12"><?php echo $saveMessage; ?></div>                            
						<?php } ?>
						
						<div class="form-group">
							<label for="title" class="control-label">Title</label>
							<input type="text" class="form-control" id="bannerName" name="bannerName" value="<?php echo $categoryDetails['name']; ?>" placeholder="Title..">							
						</div>				
							
							<div class="form-group">
							<label for="title" class="control-label">Upload Cover Picture</label>
							 <input type="file" required="" name="uploadfile" value="" />						
						</div>
						<div class="form-group">
							<label for="title" class="control-label">Description</label>
							<input type="text" class="form-control" id="description" name="description" value="<?php echo $categoryDetails['description']; ?>" placeholder="Description..">							
						</div>
						<input type="submit" name="postSave" id="postSave" class="btn btn-info" value="Save" />											
					</form>				
				  </div>
				</div>
			</div>
		</div>
	</div>
</section>
<?php include('inc/footer.php');?>
