<?php $this->layout("admin_main");?><div class="container">
<h3 class="marginbot">编辑人名<a href="<?php echo $this->createUrl("admin","vpeoples","list");?>" class="sgbtn">返回人名列表</a></h3>
	<div class="mainbox">
		<div id="custom">
			<form action="<?php echo $this->createUrl("admin","vpeoples","modify");?>" method="post">
			<table class="opt">
				<tbody>
					                    <tr>
						<th colspan="2">名字:</th>
					</tr>
					<tr>
						<td><input type="text" class="txt" name="name" value="<?php echo $model->name;?>"></td>
						<td></td>
                    </tr>
									</tbody>
			</table>
			<div class="opt">
			<input type="hidden" name="id"	value="<?php echo $model->id;?>">
			<input type="submit" name="submit" value=" 提 交 " class="btn" tabindex="3">
			</div>
			</form>
		</div>
	</div>
</div>