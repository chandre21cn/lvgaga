<?php include "header.php";?>

<form method="post">
	麦点：<input type='text' name='maidian1'>(个)<font style="color:red">兑换于</font>
	人名币：<input type='text' name='rmb1'>（元）</br>

	人名币：<input type='text' name='maidian2'>(个)<font style="color:red">兑换于</font>
	麦点<input type='text' name='rmb2'>（元）</br>
	<input type="submit" value="确认" name='tj'>
</form>


<table>
	<thead>
		<tr>
			<th><b>兑换比例</b>
			</th>
		</tr>
	</thead>
	<tbody>
		<?php if($data):
		   $row = unserialize($data[0]->eve);
		?>
		<tr>
			<td><?php echo $row['m1'];?>麦点兑换<?php echo $row['r1'];?>人名币</td>
		</tr>
		<tr>
			<td><?php echo $row['r2'];?>人名币兑换<?php echo $row['m2'];?>麦点</td>
		</tr>

		<?php endif;?>
	</tbody>
</table>

<?php include "footer.php";?>