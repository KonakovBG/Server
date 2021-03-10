<?php
$data_fp = fopen('../csv/data.csv', 'r');

$index = 0;

?>
<?php while (($data = fgetcsv($data_fp)) !== false) : ?>

	<tr>
		<td><?php echo $data[0] ?></td>
		<td><?php echo $data[1] ?></td>
		<td><?php echo $data[2] ?></td>
		<td><?php echo $data[3] ?></td>
		<td><a href="contacts.php?<?php echo $index; ?>">Edit</a></td>

	</tr>

		<?php $index++; ?>

<?php endwhile; ?>
