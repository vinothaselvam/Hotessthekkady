<?php
include_once 'config/Database.php';
include_once 'class/User.php';
include_once 'class/Post.php';
include_once 'class/Category.php';
include_once 'class/Team.php';
include_once 'class/Video.php';

$database = new Database();
$db = $database->getConnection();

$user = new User($db);
$post = new Post($db);
$category = new Category($db);
$team = new Team($db);
$video =new Video($db);

if(!$user->loggedIn()) {
	header("location: index.php");
}


include('inc/header.php');
?>
<link href="css/style.css" rel="stylesheet" type="text/css" >  
</head>
<body>
<?php include "menus.php"; ?>

<!-- <header id="header">
	<div class="container">
		<div class="row">
			<div class="col-md-10">
				<h3><span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Dashboard <small>Manage Your Site</small></h3>
			</div>
			<br>
			<div class="col-md-2">
				<div class="dropdown">
					<button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Manage
					<span class="caret"></span></button>
					<ul class="dropdown-menu">						
						<li><a href="compose_post.php">Add Post</a></li>
						<li><a href="add_categories.php">Add Category</a></li>
					</ul>
				</div> 
			</div>
		</div>
	</div>
</header> -->


 <header id="header">
  <div class="container">
    <div class="row">
      <div class="col-md-10">
        <h2 ><span> <img src="logo.jpeg" alt="" height="70" width="100"> </span> Manage Your Site</h2>
        
        
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
    <h3 class="panel-title" style="color:  white;">Website Overview</h3>
  </div>
  <div class="panel-body">
   <div class="col-md-3">
     <div class="well dash-box">
       <h2><span class="glyphicon glyphicon-user" style="color:  green;"  aria-hidden="true"></span> <?php echo $user->totalUser(); ?></h2>
       <h4> Users </h4>
     </div>
   </div>
  
   <div class="col-md-3">
     <div class="well dash-box">
       <h2><span class="glyphicon glyphicon-picture" style="color:  green;"  aria-hidden="true"> </span><?php echo $post->totalPost(); ?></h2>
       <h4> Rooms</h4>
     </div>
   </div> 
     
  </div>
</div>


      </div>
    </div>
  </div>
</section>


 <?php include('inc/footer.php');?>
