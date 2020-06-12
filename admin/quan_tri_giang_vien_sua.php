<!DOCTYPE html>
<html>
<head>
	<title>Sửa giảng viên</title>
</head>
<body>
	<h1 style="text-align: center; font-weight: bold; color: red; padding-bottom: 20px;">SỬA GIẢNG VIÊN</h1>
	<?php 
		// 1. Chuỗi kết nối đến CSDL
		$ket_noi = mysqli_connect("localhost", "root", "", "giang_vien_db");

		// 2. Lẫy ra được ID muốn xóa
		$id_giang_vien = $_GET["id"];

		// 3. Viết câu lệnh SQL để lấy giảng viên có ID như trên
		$sql = "
			SELECT * FROM `tbl_giang_vien` WHERE id_giang_vien='".$id_giang_vien."'
		";

		// 4. Thực hiện truy vấn để lấy dữ liệu
		$giang_vien = mysqli_query($ket_noi, $sql);

		// 5. Hiển thị dữ liệu lên Website
		$row = mysqli_fetch_array($giang_vien);
	;?>
	<form action="./quan_tri_giang_vien_sua_thuc_hien.php" method="POST" enctype="multipart/form-data">
		<p>
			Tên giảng viên <br>
			<input type="text" name="txtTenGiangVien" value="<?php echo $row['ten_giang_vien'];?>" style="width: 100%;">
		</p>	
		<p>
			Ảnh minh họa <br>
			<input type="file" name="txtAnh" style="width: 100%;">
		</p>
		<p>
			<img src="../img/<?php 
					if ($row["anh"]<>"") {
						echo $row["anh"];
					} else {
						echo "no_image.png";
					}
				;?>" width="180px" height="auto">
		</p>
		<p>
			Số điện thoại <br>
			<input type="text" name="txtSĐT" value="<?php echo $row['sdt'];?>" style="width: 100%;">
		</p>
		<p>
			Email <br>
			<input type="text" name="txtEmail" style="width: 100% " value="<?php echo $row['email'];?>">
		</p>
		<p>
			Bộ môn <br>
			<input type="text" name="txtBoMon" style="width: 100% " value="<?php echo $row['bo_mon'];?>">
		</p>
		<p>
			Phụ trách học phần <br>
			<input type="text" name="txtPhuTrachHocPhan" style="width: 100% " value="<?php echo $row['phu_trach_hoc_phan'];?>">
		</p>
		<p>
			Chuyên môn <br>
			<input type="text" name="txtChuyenMon" style="width: 100% " value="<?php echo $row['chuyen_mon'];?>">
		</p>
		<button type="submit">Cập nhật</button>
		<input type="hidden" name="txtID" value="<?php echo $row['id_giang_vien'];?>">
	</form>
</body>
</html>