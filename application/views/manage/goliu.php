<?php include "header.php";?>
<form method="post">
	流量：<input type='text' name='l'>&nbsp;
	麦点：<input type='text' name='m'>&nbsp;
	天数：<input type='text' name='t'>&nbsp;
	排序：<input type='text' name='o'>&nbsp;
	<input type="submit" value="确认" name='tj'>
</form>

<table>
	<thead>
		<tr>
			<th><b>流量</b>
			</th>
			<th><b>麦点</b>
			</th>
			<th><b>天数</b>
			</th>
			<th><b>排序</b>
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
			<td><?php echo $row['l'];?></td>
			<td><?php echo $row['m'];?></td>
			<td><?php echo $row['t'];?></td>
			<td><?php echo $row['o'];?></td>
			<td><b><a href="?t_id=<?php echo $v->t_id;?>">删除</a></b></td>
		</tr>
		<?php endforeach;?>
		<?php endif;?>
	</tbody>
</table>
<?php include "footer.php";?>