<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="../css/add_contact.css">
	<link rel="stylesheet" type="text/css" href="../css/edit_contact.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Pompiere&display=swap" rel="stylesheet">
	<script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
</head>
<body>
	<div class="wrapper">
		<div class="contact_book-header">
			<div class="header">
				<h1>Adress Book</h1>
			</div>

			<div class="header-menu">
				<ul>
					<a href="../add-contact.html"><li>Add Contact</li></a>
					<a href="../contacts.php"><li>Contact List</li></a>
				</ul>
			</div>
		</div>

		<div class="contact_content">
			<form method="POST" action="save-contact.php">
					<?php 
						$index = $_GET['var1'];

						$data = file('../csv/data.csv');

						$row = $data[$index];

						$row_pieces = explode(",",$row);
 

					?>

					<label for="fname">First Name</label>
					<input type="text" name="fname" value="<?php echo $row_pieces[0] ?>">

					<label for="fname">Last Name</label>
					<input type="text" name="lname" value="<?php echo $row_pieces[1] ?>">

					<label for="fname">Phone</label>
					<input type="text" name="phone" value="<?php echo $row_pieces[2] ?>">

					<label for="fname">Email</label>
					<input type="email" name="email" value="<?php echo $row_pieces[3] ?>">

					<input type="hidden" name="index" value="<?php echo $index ?>">

					<input type="submit" name="">

			</form>
		</div>
	</div>

	<script type="text/javascript">
		
	</script>

</body>
</html>
