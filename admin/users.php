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
$team = new Team($db);
$category = new Category($db);
$video =new Video($db);

if(!$user->loggedIn()) {
	header("location: index.php");
}


include('inc/header.php');
?>
<script src="js/jquery.dataTables.min.js"></script>
<script src="js/dataTables.bootstrap.min.js"></script>		
<link rel="stylesheet" href="css/dataTables.bootstrap.min.css" />
<script src="js/users.js"></script>	
<link href="css/style.css" rel="stylesheet" type="text/css" >  
</head>
<body>
<?php include "menus.php"; ?>

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
						<h3 class="panel-title" style="color:  white;">Latest Users</h3>
					</div>
					<div class="panel-body">
						<div class="panel-heading">
							<div class="row">
								<div class="col-md-10">
									<h3 class="panel-title"></h3>
								</div>
								 <div class="col-md-2" align="right">
									<a href="add_users.php" style="background-color: green;color: white;" class="btn btn-default btn-xs">Add New</a>				
								</div> 
							</div>
						</div>
						<table id="userList" class="table table-bordered table-striped">
							<thead>
								<tr>
									<th>Name</th>									
									<th>Email</th>
									<th>Type</th>	
									<th>Status</th>																				
									<th></th>
									 <th></th>	 
								</tr>
							</thead>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>


 <?php include('inc/footer.php');?>
