<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Đặt ghế</title>
    <link type="text/css" rel="stylesheet" href="../css/style.css">
</head>
<body>
    <div><a href="?action=showProduct">Xem website</a></div>
	<form method="POST" action="?action=addChair">

	<table>
		
		<tr>
			<td>
				<input type="hidden" name="isShow" value="1">
			</td>
		</tr>
		<tr>
			<td>
				<input type="text" name="name" placeholder="Nhập tên ghế">
			</td>
		</tr>
		<tr>
			<td>
				<input type="text" name="price" placeholder="Giá ghế">
			</td>
		</tr>
        <tr>
            <td>
                <input type="text" name="color" placeholder="Màu ghế">
            </td>
        </tr>
		<tr>
			<td>
				<input type="text" name="content" placeholder="Mô tả ghế">
			</td>
		</tr>

		<tr>
			<td>
				<input type="submit" value="Thêm ghế">
			</td>
		</tr>
	</table>
		
	</form>
	<h1>Danh sach ghế</h1>
	<table border="1" cellpadding="10">
		<tr>
			<td>ID</td>
			<td>Name</td>
			<td>Mô tả</td>
			<td>Price</td>
			<td>Color</td>
			<td>isShow</td>
			<td>Created</td>
			<td colspan="2">Action</td>
<!--			<td></td>-->
		</tr>
		<?php

		foreach($chair as $item){
			?>
			<tr>
				
				<td><?=$item['id']?></td>
				<td><?=$item['name']?></td>
				<td><?=$item['content']?></td>
				<td><?=number_format($item['price'])?> VNĐ</td>
				<td><?=$item['color']?></td>
				<td><?=$item['isShow']?></td>
				<td><?=$item['created']?></td>
				<td><a href="?action=editPage&id=<?=$item['id']?>">Edit</a></td>
				<td><a href="#">Status</a></td>
            </tr>
			<?php
		}

		?>
	
	</table>
</body>
</html>