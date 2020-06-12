<?php 
	// 1. Chuỗi kết nối đến CSDL
	$ket_noi = mysqli_connect("localhost", "root", "", "giang_vien_db");

	// 2. Lấy ra được ID muốn xóa
	$id_giang_vien = $_GET["id"];
	// secho $id_tin_tuc; exit();

	// 3. Viết câu lệnh SQL để xóa giảng viên có ID như trên
	$sql = "
		DELETE
		FROM tbl_giang_vien
		WHERE id_giang_vien='".$id_giang_vien."'
	";

	// 4. Thực hiện truy vấn để xóa dữ liệu
	mysqli_query($ket_noi, $sql);

	// 5. Thông báo việc xóa giảng viên thành công & quay trở lại trang quản lý giảng viên
		// Thông báo cho người dùng biết giảng viên đã được xóa thành công
		echo 
		"
			<script type='text/javascript'>
				window.alert('Bạn đã xóa thông tin giảng viên thành công.');
			</script>
		";

		// Chuyển người dùng vào trang quản trị giảng viên
		echo 
		"
			<script type='text/javascript'>
				window.location.href = './quan_tri_giang_vien.php'
			</script>
		";
;?>