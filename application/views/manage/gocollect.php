<?php include "header.php";?>

<form method="post">
	麦点：<input type='text' name='collect'>&nbsp;
	<input type="submit" value="确认" name='tj'>
</form>

<table>
	<thead>
		<tr>
			<th><b>麦点</b>
			</th>
		</tr>
	</thead>
	<tbody>
		<?php if($data):
		$row = unserialize($data[0]->eve);
		?>
		<tr>
			<td><?php echo $row['collect'];?></td>
		</tr>
		<?php endif;?>
	</tbody>
</table>
<?php include "footer.php";?>
