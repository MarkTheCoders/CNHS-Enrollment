
<?php
?>

<!DOCTYPE html>
<html>
	<head>
		<title>CNHS || Admin Dashboard</title>
		<link rel="stylesheet" href="cs/admin.css">
		<link rel="icon" type="image/png" href="imgs/logo.png">
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">


<!-- Font--->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	</head>

	<body>

		
		<section id="menu">
			<div class="logo">
				<a href="../Dashboard.php" class="btn btn-danger">Back</a>
			</div>


			<div class="sidebar">
				<li><i class="fa-solid fa-home"></i><a href="../Grade7.php" >Grade 7</a></li>
				
				<li><i class="fa-solid fa-database"></i><a href="section1.php">Section 1</a></li>
				<li ><i class="fa-solid fa-database"></i><a href="section2.php">Section 2</a></li>
				<li style="border-bottom: 4px solid green;"><i class="fa-solid fa-database"></i><a href="section3.php">Section 3</a></li>
				<li><i class="fa-solid fa-database"></i><a href="section4.php">Section 4</a></li>
				<li><i class="fa-solid fa-database"></i><a href="section5.php">Section 5</a></li>
				
				
		</section>


		<section id="interface">
			<div class="nav">
				<div class="nav1">
					<div class="search">
						<i class="far fa-search"></i>
						<input type="search" name="search" placeholder="Search">
					</div>
				</div>


				<div class="profile">
					<i class="far fa-bell"></i>
					<img src="imgs/user1.png" alt="pfp">
				</div>
			</div>


<center>
			<h3 class="i-name mb4">
				Section 3|| Students List
			</h3>
</center>

			<dir class="board">
					<div class="container">
						<?php

						if (isset($_GET['msg'])) {
							$msg=$_GET['msg'];
							echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">'.$msg.'<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
						}
						

						?>

						<table class="table table-hover text-center mb3">
							<thead class="table-dark">
								<tr>
									<th scope="col">ID</th>
									<th scope="col">First Name</th>
									<th scope="col">Middle Name</th>
									<th scope="col">Last Name</th>
									<th scope="col">Gender</th>
									<th scope="col">Action</th>
								</tr>
							</thead>
							<tbody>
								<?php
								include "../dbconnection.php";
								$sql = "SELECT * FROM `section3`";
								$result= mysqli_query($connection,$sql);
								while ($row = mysqli_fetch_assoc($result)) {
								?>

								<tr>
									<td ><?php echo $row['student_id']?></td>
									<td ><?php echo $row['firstname']?></td>
									<td ><?php echo $row['middlename']?></td>
									<td ><?php echo $row['lastname']?></td>
									<td ><?php echo $row['gender']?></td>
									
									
									<td>
									
										<a href="../delete/Delete3.php?id=<?php echo $row['student_id']?>" class="link-dark"><i class="fa-solid fa-trash fs-5"></i></a>
											<a href="../View.php?id=<?php echo $row['student_id']?>" class="link-dark"><i class="fa-solid fa-eye fs-5"></i></a>
									</td>
								</tr>
								<?php
								}
								?>
								
							</tbody>
						</table>
					</div>
			</dir>
		</section>
		<!--Bootsrap-->
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

	</body>
</html>