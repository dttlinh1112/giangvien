<!DOCTYPE html>
<html>
<head>
	<title>Quản trị giảng viên</title>
</head>
<body>
	<h1 style="text-align: center; font-weight: bold; color: red; padding-bottom: 30px;">QUẢN TRỊ GIẢNG VIÊN</h1>
	<p style="text-align: right; font-weight: bold;"><a href="quan_tri_giang_vien_them.php">Thêm mới</a></p>
	<table>
		<tr>
			<td style="font-weight: bold; text-align: center;">STT</td>
			<td style="font-weight: bold; text-align: center;">Tên giảng viên</td>
			<td style="font-weight: bold; text-align: center;">Ảnh minh họa</td>
			<td style="font-weight: bold; text-align: center;">Số điện thoại</td>
			<td style="font-weight: bold; text-align: center;">Email</td>
			<td style="font-weight: bold; text-align: center;">Bộ môn</td>
			<td style="font-weight: bold; text-align: center;">Phụ trách học phần</td>
			<td style="font-weight: bold; text-align: center;">Chuyên môn</td>
			<td style="font-weight: bold; text-align: center;" colspan="2">Hiệu chỉnh</td>
		</tr>
		<?php 
			// 1. Chuỗi kết nối đến CSDL
			$ket_noi = mysqli_connect("localhost", "root", "", "giang_vien_db");

			// 2. Viết câu lệnh SQL để lấy ra dữ liệu mong muốn
			$sql = "
				SELECT *
				FROM tbl_giang_vien
				ORDER BY id_giang_vien DESC
			";

			// 3. Thực hiện truy vấn để lấy ra các dữ liệu mong muốn
			$noi_dung_giang_vien = mysqli_query($ket_noi, $sql);

			// 4. Hiển thị dữ liệu mong muốn
			$i=0;
			while ($row = mysqli_fetch_array($noi_dung_giang_vien)) {
				$i++;
		;?>
		<tr>
			<td><?php echo $i;?></td>
			<td>
				<img src="../img/<?php 
						if ($row["anh"]<>"") {
							echo $row["anh"];
						} else {
							echo "no_image.png";
						}
					;?>" width="180px" height="auto">
			</td>
			<td>
				<a href="../giang_vien_chi_tiet.php?id=<?php echo $row["id_giang_vien"];?>"s><?php echo $row["ten_giang_vien"];?></a>
			</td>
			<td>
				<a href="../giang_vien_chi_tiet.php?id=<?php echo $row["id_giang_vien"];?>"s><?php echo $row["sdt"];?></a>
			</td>
			<td>
				<a href="../giang_vien_chi_tiet.php?id=<?php echo $row["id_giang_vien"];?>"s><?php echo $row["email"];?></a>
			</td>
			<td>
				<a href="../giang_vien_chi_tiet.php?id=<?php echo $row["id_giang_vien"];?>"s><?php echo $row["bo_mon"];?></a>
			</td>
			<td>
				<a href="../giang_vien_chi_tiet.php?id=<?php echo $row["id_giang_vien"];?>"s><?php echo $row["phu_trach_hoc_phan"];?></a>
			</td>
			<td>
				<a href="../giang_vien_chi_tiet.php?id=<?php echo $row["id_giang_vien"];?>"s><?php echo $row["chuyen_mon"];?></a>
			</td>
			<td>
				<a href="quan_tri_giang_vien_sua.php?id=<?php echo $row["id_giang_vien"];?>">Sửa</a>
			</td>
			<td>
				<a href="quan_tri_giang_vien_xoa.php?id=<?php echo $row["id_giang_vien"];?>">Xóa</a>
			</td>
		</tr>
		<?php
			}
		;?>
	</table>
</body>
</html>