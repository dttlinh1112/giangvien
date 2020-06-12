
<!DOCTYPE html>
<html>
<head>
	<title>Thêm mới giảng viên</title>
</head>
<body>
	<h1 style="text-align: center; font-weight: bold; color: red; padding-bottom: 20px;">THÊM MỚI GIẢNG VIÊN</h1>

	<form action="./quan_tri_giang_vien_them_thuc_hien.php" method="POST" enctype="multipart/form-data">
		<p>
			Tên giảng viên <br>
			<input type="text" name="txtTenGiangVien" style="width: 100%;">
		</p>
		<p>
			Ảnh minh họa <br>
			<input type="file" name="txtAnh" style="width: 100%;">
		</p>
		<p>
			Số điện thoại <br>
			<input type="text" name="txtSĐT" style="width: 100%;">
		</p>
		<p>
			Email <br>
			<input type="text" name="txtEmail" style="width: 100%;">
		</p>
		<p>
			Bộ môn <br>
			<input type="text" name="txtBoMon" style="width: 100%;">
		</p>
		<p>
			Phụ trách học phần <br>
			<input type="text" name="txtPhuTrachHocPhan" style="width: 100%;">
		</p>
		<p>
			Chuyên môn <br>
			<input type="text" name="txtChuyenMon" style="width: 100%;">
		</p>
		<button type="submit">Thêm mới</button>
	</form>
</body>
</html>