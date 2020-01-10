<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Quản lý đơn hàng</title>
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<?php
		include("headerAD.php");
	?>
	<div class="button-ad">
		<input type="button" class="ins" value="Thêm">
	</div>
	<section class="dskh">
		<div class="dskh-1">
			<ul class="dskh-1-2">
				<?php
					echo '<li>
						<p class="tt-kh" style="background-color:#5ebf62;color:#fff;">Mã ĐH</p>
						<p class="tt-kh" style="background-color:#5ebf62;color:#fff;">Ngày đặt</p>
						<p class="tt-kh" style="background-color:#5ebf62;color:#fff;">Mã KH</p>
						</li>';
						include ("Connecting.php");
					$result = $db->prepare("select * from `DONHANG`");
					$result->execute();
					$rowsdata = $result ->fetchALL();
					foreach ($rowsdata as $value){
						echo '<li>
						<input class="tt-kh" value="'.$value[0].'" >
						<input class="tt-kh" value="'.$value[1].'" >
						<input class="tt-kh" value="'.$value[2].'" >
						<a href=""><input type="button" class="del" value="Xóa"></a>
						<a href=""><input type="button" class="edi" value="Sửa"></a>
						</li>';
					}
				?>
			</ul>
		</div>
	</section>
	<?php
		include("php_layout/footer.php");
	?>
</body>
</html>