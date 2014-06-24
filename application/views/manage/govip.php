<?php include "header.php";?>
<form method="post">
	时间：<input type='text' name='shijian'>(以月为单位)&nbsp;
	费用：<input type='text' name='feiyong'>
	<input type="submit" value="确认" name="tj">

</form>
<table>
	<thead>
		<tr>
			<th><b>时间</b>
			</th>
			<th><b>费用</b>
			</th>
			<th><b>删除</b>
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
			<td><?php echo $row['deadline'];?>个月</td>
			<td><?php echo $row['money'];?>元人名币</td>
			<td><b><a href="?t_id=<?php echo $v->t_id;?>">删除</a></b></td>
		</tr>
		<?php endforeach;?>
		<?php endif;?>
	</tbody>
</table>

<?php include "footer.php";?>