<?php

include_once 'config/Database.php';
include_once 'class/User.php';
include_once 'class/Post.php';
include_once 'class/Category.php';

$database = new Database();
$db = $database->getConnection();

$user = new User($db);
$post = new Post($db);
$category = new Category($db);

if(!$user->loggedIn()) {
	header("location: index.php");
}

$post = new Post($db);

$categories = $post->getCategories();

$post->id = (isset($_GET['id']) && $_GET['id']) ? $_GET['id'] : '0';
$saveMessage = '';
if(!empty($_POST["savePost"]) && $_POST["title"]!=''&& $_POST["message"]!='') {
	
	$post->title = $_POST["title"];
	$post->message = $_POST["message"];
	$post->category = $_POST["category"];
	$post->status = $_POST["status"];	 	
	if($post->id) {	
		$post->updated = date('Y-m-d H:i:s');
		if($post->update()) {
			$userid = $post->id;
			// File upload configuration 
    $targetDir = "uploads/"; 
    $allowTypes = array('jpg','png','jpeg','gif'); 
     
    $statusMsg = $errorMsg = $insertValuesSQL = $errorUpload = $errorUploadType = ''; 
    $fileNames = array_filter($_FILES['files']['name']); 
    if(!empty($fileNames)){ 
        foreach($_FILES['files']['name'] as $key=>$val){ 
            // File upload path 
            $fileName = basename($_FILES['files']['name'][$key]); 
            $targetFilePath = $targetDir . $fileName; 
             
            // Check whether file type is valid 
            $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION); 
            if(in_array($fileType, $allowTypes)){ 
                // Upload file to server 
                if(move_uploaded_file($_FILES["files"]["tmp_name"][$key], $targetFilePath)){ 
                    // Image db insert sql 
                    $insertValuesSQL .= "('".$userid."','".$fileName."', NOW()),"; 
                }else{ 
                    $errorUpload .= $_FILES['files']['name'][$key].' | '; 
                } 
            }else{ 
                $errorUploadType .= $_FILES['files']['name'][$key].' | '; 
            } 
        } 
         
        // Error message 
        $errorUpload = !empty($errorUpload)?'Upload Error: '.trim($errorUpload, ' | '):''; 
        $errorUploadType = !empty($errorUploadType)?'File Type Error: '.trim($errorUploadType, ' | '):''; 
        $errorMsg = !empty($errorUpload)?'<br/>'.$errorUpload.'<br/>'.$errorUploadType:'<br/>'.$errorUploadType; 
         
        if(!empty($insertValuesSQL)){ 
            $insertValuesSQL = trim($insertValuesSQL, ','); 
            // Insert image file name into database 
            $insert = $db->query("INSERT INTO images (user_id,file_name, uploaded_on) VALUES $insertValuesSQL"); 
            if($insert){ 
                $statusMsg = "Files are uploaded successfully.".$errorMsg; 
            }else{ 
                $statusMsg = "Sorry, there was an error uploading your file."; 
            } 
        }else{ 
            $statusMsg = "Upload failed! ".$errorMsg; 
        } 
    }else{ 
        $statusMsg = 'Please select a file to upload.'; 
    } 
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
			// File upload configuration 
    $targetDir = "uploads/"; 
    $allowTypes = array('jpg','png','jpeg','gif'); 
     
    $statusMsg = $errorMsg = $insertValuesSQL = $errorUpload = $errorUploadType = ''; 
    $fileNames = array_filter($_FILES['files']['name']); 
    if(!empty($fileNames)){ 
        foreach($_FILES['files']['name'] as $key=>$val){ 
            // File upload path 
            $fileName = basename($_FILES['files']['name'][$key]); 
            $targetFilePath = $targetDir . $fileName; 
             
            // Check whether file type is valid 
            $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION); 
            if(in_array($fileType, $allowTypes)){ 
                // Upload file to server 
                if(move_uploaded_file($_FILES["files"]["tmp_name"][$key], $targetFilePath)){ 
                    // Image db insert sql 
                    $insertValuesSQL .= "('".$userid."','".$fileName."', NOW()),"; 
                }else{ 
                    $errorUpload .= $_FILES['files']['name'][$key].' | '; 
                } 
            }else{ 
                $errorUploadType .= $_FILES['files']['name'][$key].' | '; 
            } 
        } 
         
        // Error message 
        $errorUpload = !empty($errorUpload)?'Upload Error: '.trim($errorUpload, ' | '):''; 
        $errorUploadType = !empty($errorUploadType)?'File Type Error: '.trim($errorUploadType, ' | '):''; 
        $errorMsg = !empty($errorUpload)?'<br/>'.$errorUpload.'<br/>'.$errorUploadType:'<br/>'.$errorUploadType; 
         
        if(!empty($insertValuesSQL)){ 
            $insertValuesSQL = trim($insertValuesSQL, ','); 
            // Insert image file name into database 
            $insert = $db->query("INSERT INTO images (user_id,file_name, uploaded_on) VALUES $insertValuesSQL"); 
            if($insert){ 
                $statusMsg = "Files are uploaded successfully.".$errorMsg; 
            }else{ 
                $statusMsg = "Sorry, there was an error uploading your file."; 
            } 
        }else{ 
            $statusMsg = "Upload failed! ".$errorMsg; 
        } 
    }else{ 
        $statusMsg = 'Please select a file to upload.'; 
    } 
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
<script src="js/posts.js"></script>	
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
				  <div class="panel-heading">
					<h3 class="panel-title">Add New Post</h3>
				  </div>
				  <div class="panel-body">
				  
					<form method="post" id="postForm" enctype="multipart/form-data">							
						<?php if ($saveMessage != '') { ?>
							<div id="login-alert" class="alert alert-success col-sm-12"><?php echo $saveMessage; ?></div>                            
						<?php } ?>
						<div class="form-group">
							<label for="title" class="control-label">Title</label>
							<input type="text" class="form-control" id="title" name="title" value="<?php echo $postdetails['title']; ?>" placeholder="Post title..">							
						</div>
						
						<div class="form-group">
							<label for="lastname" class="control-label">Message</label>							
							<textarea class="form-control" rows="5" id="message" name="message" placeholder="Post message.."><?php echo $postdetails['message']; ?></textarea>					
						</div>	

						
						<div class="form-group">
							<label for="sel1">Category</label>
							<select class="form-control" id="category" name="category">
							<?php
							while ($category = $categories->fetch_assoc()) {
								$selected = '';
								if($category['name'] ==$postdetails['name']) {
									$selected = 'selected=selected';
								}									
								echo "<option value='".$category['id']."' $selected>".$category['name']."</option>";
							}
							?>							
							</select>
						</div>
							<div class="form-group">
							<label for="title" class="control-label">Upload Cover Picture</label>
							 <input type="file" 
                   name="uploadfile" 
                   value="" />						
						</div>
                       	<div class="form-group">
							<label for="title" class="control-label">Upload Picture</label>
							 <input type="file"    name="files[]" multiple />						
						</div>
						<div class="form-group">
							<label for="status" class="control-label"></label>							
							<label class="radio-inline">
								<input type="radio" name="status" id="publish" value="published" <?php if($postdetails['status'] == 'published') { echo "checked";} ?>>Publish
							</label>
							<label class="radio-inline">
								<input type="radio" name="status" id="draft" value="draft" <?php if($postdetails['status'] == 'draft') { echo "checked";} ?>>Draft
							</label>
							<label class="radio-inline">
								<input type="radio" name="status" id="archived" value="archived" <?php if($postdetails['status'] == 'archived') { echo "checked";} ?>>Archive
							</label>							
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
