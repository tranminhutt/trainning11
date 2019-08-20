<div class="content">
	<?php
	if(isset($_GET['quanli'])){
		$tam=$_GET['quanli'];
	}else{
		$tam='';
	}
	if($tam=='quanliloaisp'){
		include('modules/quanliloaisp/main.php');
	}
	?>
		<div class="clear"></div>