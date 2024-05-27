 <?php
 	include "dbconnection.php";

 	if (isset($_POST['submit'])) {
 		$firstname = $_POST['firstname'];
 		$middlename = $_POST['middlename'];
 		$lastname =  $_POST['lastname'];

 		$gender =  $_POST['gender'];

 		$sql = "INSERT INTO `section1`(`student_id`, `firstname`, `middlename`, `lastname`, `exname`, `lrn`, `bdate`, `age`, `contact`, `gender`, `pobd`, `genave`, `option`, `houseno`, `streetname`, `barangay`, `province`, `city`, `country`, `father_first_name`, `father_middle_name`, `father_last_name`, `father_contact`, `mother_first_name`, `mother_middle_name`, `mother_last_name`, `mother_contact`, `guardian_first_name`, `guardian_middle_name`, `guardian_last_name`, `guardian_contact`, `balik_aral`, `year_completed`, `f_l_i_s_h_s`, `status`) VALUES (1,'$firstname','$middlename','$lastname','[value-5]','[value-6]','[value-7]','[value-8]','[value-9]','$gender','[value-11]','[value-12]','[value-13]','[value-14]','[value-15]','[value-16]','[value-17]','[value-18]','[value-19]','[value-20]','[value-21]','[value-22]','[value-23]','[value-24]','[value-25]','[value-26]','[value-27]','[value-28]','[value-29]','[value-30]','[value-31]','[value-32]','[value-33]','[value-34]','[value-35]')";


 		$result=mysqli_query($connection, $sql);

 		if ($result) {
 			header('Location: Dashboard.php?msg=New Student record add Successfully');
 		}else {
 			echo "Failed".mysqli_error($connection);
 		}
 	}
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
				<img src="imgs/logo.png" alt="cnhs logo">
				<h2>CNHS || ADMIN DASHBOARD</h2>
			</div>


			<div class="sidebar">
				<li><i class="fa-solid fa-graduation-cap"></i><a href="#">Grade 7</a></li>
				<li><i class="fa-solid fa-graduation-cap"></i><a href="#">Grade 8</a></li>
				<li><i class="fa-solid fa-graduation-cap"></i><a href="#">Grade 9</a></li>
				<li><i class="fa-solid fa-graduation-cap"></i><a href="#">Grade 10</a></li>
				<li><i class="fa-solid fa-users"></i><a href="#">Accounts</a></li>
				
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

			
			

			<div class="container">
				<div class="text-center mb-4">
					<h3 style="background: green; color: white; width:100%;">Add Student</h3>
					<p class="text-muted">Complete the requirements below.</p>
				</div>

				<div class="container d-flex justify-content-center">
					<form action="" method="post" style="width:50vw; min-width: 300px; border: 1px solid black; border-radius: 3px; box-shadow: green; padding: 10px;">
						<div class="mb-3">
								<label class="form-label">First Name</label>
								<input type="text" class="form-control" name="firstname" placeholder="First Name">
							</div>

						<div class="mb-3">
							<label class="form-label">Middle Name</label>
								<input type="text" class="form-control" name="middlename" placeholder="Middle">
						</div>


						<div class="mb-3">
							<label class="form-label">Last Name</label>
								<input type="text" class="form-control" name="lastname" placeholder="Last Name">
						</div>

						<div class="mb-3">
							<label class="form-label">Email</label>
								<input type="email" class="form-control" name="email" placeholder="Email">
						</div>

						<div class="form-group mb-3">
							<label>Gender:</label>

							<input type="radio" name="gender" id="male" value="Male" class="form-check-input">
							<label for="male" class="form-input-label">Male</label>

							<input type="radio" name="gender" id="female" value="Female" class="form-check-input">
							<label for="female" class="form-input-label">Female</label>
						</div>


						<center>
						<div>
							<button type="submit" class="btn btn-success" name="submit">Add</button>

							<a href=".php" class="btn btn-danger">Cancel</a>
						</div>
						</center>
					</form>
				</div>
			</div>
		</section>




		<!--Bootsrap-->
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

	</body>
</html>