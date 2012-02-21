<?php

require 'functions.php';

if (isset($_POST['action']) && $_POST['action'] == 'search') {
	$name = $_POST['name'];
} else {
	$name = '';
}
$books = getBooks($name);

?>

<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en">
<head>
	<title>Book</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<style type="text/css">
	#content {
		font-family: arial;
		width: 700px;
		margin: 10px auto;
		text-align: center;
		border: 4px dashed red;
	}
	#content form input[type=text] {
		width: 200px;
		padding: 3px;
		margin-left: 10px;
	}
	#content table {
		width: 650px;
		margin: 0 auto 20px;
	}
	</style>
</head>
<body>
	<div id="content">
		<h2>Tìm Sách</h2>
		<form action="" method="post">
			<input type="hidden" value="search" name="action">
			<label for="name">Tên: </label> <input type="text" id="name" name="name" value="<?php echo $name; ?>" /> <input type="submit" value="Tìm">
		</form>
		
		<h2>Kết Quả</h2>
		<table border="1">
			<tr>
				<th>Tên</th>
				<th>Tác Giả</th>
				<th>Nhà Xuất Bản</th>
				<th>Năm Xuất Bản</th>
				<th>Giá</th>
			</tr>
<?php
	foreach ($books as $book) {
?>
			<tr>
				<td><?php echo $book['name']; ?></td>
				<td><?php echo $book['author']; ?></td>
				<td><?php echo $book['publisher']; ?></td>
				<td><?php echo $book['year']; ?></td>
				<td><?php echo $book['price']; ?></td>
			</tr>
<?php
	}
?>
		</table>
	</div>
</body>
</html>