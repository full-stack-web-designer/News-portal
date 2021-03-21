<!DOCTYPE html>
<html>
<head>
	<title>News Portal | Header Page</title>

		<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
       	<link href="css/core.css" rel="stylesheet" type="text/css" />
       	 <link href="css/components.css" rel="stylesheet" type="text/css" />

	<style type="text/css">

		.header{
			background-color: black;
			margin-top: 20px;
			height: 70px;
			width: 100%;
			opacity: 0.7;
		}
		.logo{
			height: 50px;
			width: 300px;
			padding: 10px;
		}
		.logout{
			text-align:right;
			font-size:25px;
			margin-bottom:-20px;
		}
		
		.menudropdown{
			width: 100%;
			height: 100px;
			margin: 0px auto;
		}
		.menudropdown ul{
			padding: 0px;
		}
		.menudropdown ul li{
			float:left;
			background-color: black;
			color: white;
			width:277px;
			height: 50px;
			line-height: 50px;
			font-size: 20px;
			text-align: center;
			list-style: none;
			opacity: 0.8;
		}
		.menudropdown ul li ul{
			display: none;
		}
		.menudropdown ul li:hover > ul{
			display: block;
		}
		.menudropdown ul li:hover{
			background-color: lightgreen;
			
		}
	</style>
</head>
<body>
	<div class="containner">
						<div class="logout">
							<a href="logout.php" id="text">Logout</a>
						</div>
		
		<div class="header">
			
				<div class="logo">
						<a href="dashboard.php"><img src="logo.png" height="50px" width="300px"></a>
						
				</div>
						
		</div>
		<div class="menudropdown">
			<ul>
				<li>Category
					<ul>
						<a href="add_category.php"><li>Add Category</li></a>
						<a href="manage_category.php"><li>Manage Category</li></a>
					</ul>
				</li>
				<li>Sub Category
					<ul>
						<a href="add_sub_category.php"><li>Add Sub Category</li></a>
						<a href="manage_sub_category.php"><li>Manage Sub Category</li></a>
					</ul>
				</li>
				<li>Posts
					<ul>
						<a href="add_post.php"><li>Add Posts</li></a>
						<a href="manage_posts.php"><li>Manage Posts</li></a>
					</ul>
				</li>
				<li>Comments
					<ul>
						<a href="unapprove_comments.php"><li>Un Approve Comments</li></a>
						<a href="approve_comments.php"><li>Approved Comments</li></a>
					</ul>
				</li>
			</ul>
		</div>
		
		
	</div>
</body>
</html>