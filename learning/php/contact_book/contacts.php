<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/add_contact.css">
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
					<a href="add-contact.html"><li>Add Contact</li></a>
					<a href="contacts.php"><li>Contact List</li></a>
				</ul>
			</div>
		</div>

		<div class="contact_content">
			<form method="GET" action="php/add_contact.php">
				<table id="contact_content-table">				
						<?php
							$data_fp = fopen('csv/data.csv', 'r');
							
							$index = 0;
						?>
							<?php while (($data = fgetcsv($data_fp)) !== false) : ?>

							<tr>
								<td><?php echo $data[0] ?></td>
								<td><?php echo $data[1] ?></td>
								<td><?php echo $data[2] ?></td>
								<td><?php echo $data[3] ?></td>
								
								<?php if ($index > 0) {?>
									<td><a href="php/edit-contact.php?var1=<?php echo $index?>">Edit</a></td>
								<?php }?>
								
							</tr>

							<?php $index++; ?>

						<?php endwhile; ?>					
				</table>
					
			</form>
		</div>
	</div>

	<script type="text/javascript">
		
	</script>

</body>
</html>