<?php include "header.php";?>

<form method="post">
	麦点：<input type='text' name='mai'>&nbsp;
	原价：<input type='text' name='maiy'>&nbsp;
	特价：<input type='text' name='mait'></br>
	<input type="submit" value="确认" name='tj'>
</form>

<table>
	<thead>
		<tr>
			<th><b>麦点</b>
			</th>
			<th><b>原价</b>
			</th>
			<th><b>特价</b>
			</th>
			<th><b>操作</b>
			</th>
		</tr>
	</thead>
	<tbody>
		<?php if($data):?>
		<?php
		foreach($data as $v):
			//$tmp = unserialize($v['eve']);
		   $row = unserialize($v->eve);
		?>
		<tr>
			<td><?php echo $row['mai'];?></td>
			<td><?php echo $row['maiy'];?></td>
			<td><?php echo $row['mait'];?></td>
			<td><b><a href="?t_id=<?php echo $v->t_id;?>">删除</a></b></td>
		</tr>
		<?php endforeach;?>
		<?php endif;?>
	</tbody>
</table>
<?php include "footer.php";?>
