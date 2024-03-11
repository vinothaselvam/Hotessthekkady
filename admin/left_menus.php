<div class="col-md-3">
	<div class="list-group">
		<a href="dashboard.php" class="list-group-item active main-color-bg"><span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
		Dashboard <span class="badge"></span>
		</a>		
		<a href="posts.php" class="list-group-item"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Manage Rooms<span class="badge"><?php echo $post->totalPost(); ?></span></a>
		
		<a href="users.php" class="list-group-item"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Manage Users <span class="badge"><?php echo $user->totalUser(); ?></span></a>
		<!-- <a href="banners.php" class="list-group-item"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> Banners<span class="badge"></span></a> -->
		<!--==== accordion list-3 =====-->

     <!--  <a href="contact-details.php" class="list-group-item"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> Contact Details</a>
     -->


	</div>
</div>