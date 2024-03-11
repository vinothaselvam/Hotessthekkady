<?php

include_once 'config/Database.php';
include_once 'class/User.php';
include_once 'class/Team.php';
include_once 'class/Category.php';
include_once 'class/Post.php';
include_once 'class/Video.php';

$database = new Database();
$db = $database->getConnection();

$user = new User($db);
$post = new Team($db);
$category = new Category($db);
$team = new Team($db);
$video =new Video($db);

if(!$user->loggedIn()) {
	header("location: index.php");
}

$post = new Team($db);

$categories = $post->getCategories();

$post->id = (isset($_GET['id']) && $_GET['id']) ? $_GET['id'] : '0';
$saveMessage = '';
if(!empty($_POST["savePost"]) && $_POST["title"]!=''&& $_POST["message"]!='') {
	
	$post->title = $_POST["title"];
	$post->message = $_POST["message"];
	//$post->category = $_POST["category"];
	$post->status = $_POST["status"];

	
//Single file Upload
			$filename = $_FILES["uploadfile"]["name"];
            $tempname = $_FILES["uploadfile"]["tmp_name"];  
           // $date_update = date('Y-m-d H:i:s');   
            $folder = "profile/".$filename;
          $post->filename = $folder;
		       if (move_uploaded_file($tempname, $folder))  {
		       	 
		            $msg = "Image uploaded successfully";
		        }
	if($post->id) {	
		$post->updated = date('Y-m-d H:i:s');
		if($post->update()) {
			$userid = $post->id;
			
			$saveMessage = "Post updated successfully!";
		}
	} else {
		$post->userid = $_SESSION["userid"];
		$post->created = date('Y-m-d H:i:s'); 
		$post->updated = date('Y-m-d H:i:s'); 
        
		$lastInserId = $post->insert();
		if($lastInserId) {
			$post->id = $lastInserId;
			$userid = $post->id;

			

			$saveMessage = "Post saved successfully!";
		}
	}
}

$postdetails = $post->getPost();
 
include('inc/header.php');
?>
<script src="js/jquery.dataTables.min.js"></script>
<script src="js/dataTables.bootstrap.min.js"></script>		
<link rel="stylesheet" href="css/dataTables.bootstrap.min.css" />
<script src="js/team.js"></script>	
<link href="css/style.css" rel="stylesheet" type="text/css" >  
</head>
<body>
<?php include "menus.php"; ?>
<header id="header">
  <div class="container">
    <div class="row">
      <div class="col-md-10">
        <h2 ><span> <img src="logo.png" alt="" height="70" width="70"> </span> Manage Your Site</h2>
        
        
      </div>
      <br>      
    </div>
  </div>
</header> 
<br>

<section id="main">
  <div class="container">
    <div class="row">
      <?php include "left_menus.php"; ?>
      <div class="col-md-9">
        <div class="panel panel-default">
           <div class="panel-heading" style="background-color:  darkgreen;";>
					<h3 class="panel-title" style="color:  white;">Add New Team Member</h3>
				  </div>
				  <div class="panel-body">
				  
					<form method="post" id="postForm" enctype="multipart/form-data">							
						<?php if ($saveMessage != '') { ?>
							<div id="login-alert" style="background: #FF0000; color: white;"  class="alert alert-success col-sm-12"><?php echo $saveMessage; ?></div>                            
						<?php } ?>
						<div class="form-group">
							<label for="title" class="control-label">Name</label>
							<input type="text" class="form-control" id="title" name="title" value="<?php echo $postdetails['title']; ?>" placeholder="Name" required>							
						</div>
						
						<div class="form-group">
							<label for="lastname" class="control-label">Designation</label>	
							<input type="text" class="form-control" id="message" name="message" value="<?php echo $postdetails['message']; ?>" placeholder="Designation" required>							
											
						</div>	

						
						
							<div class="form-group">
							<label for="title" required class="control-label">Upload Profile Picture</label>
							 <input type="file" name="uploadfile" value="" required="" />						
						</div>
                       
						<div class="form-group">
							<label for="status" class="control-label"></label>							
							<label class="radio-inline">
								<input type="radio" name="status" id="publish" checked="" value="published" <?php if($postdetails['status'] == 'published') { echo "checked";} ?>>Publish
							</label>
							 <label class="radio-inline">
								<input type="radio" name="status" id="draft" value="draft" <?php if($postdetails['status'] == 'draft') { echo "checked";} ?>>Draft
							</label>
							<!-- <label class="radio-inline">
								<input type="radio" name="status" id="archived" value="archived" <?php if($postdetails['status'] == 'archived') { echo "checked";} ?>>Archive
							</label> 	 -->						
						</div>			 								
						<input type="submit" name="savePost" id="savePost" class="btn btn-info" value="Save" />											
					</form>				
				  </div>
				</div>
			</div>
		</div>
	</div>
</section>
<?php include('inc/footer.php');?>
