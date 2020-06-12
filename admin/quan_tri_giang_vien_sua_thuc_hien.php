<?php 
	// 1. Chuỗi kết nối đến CSDL
	$ket_noi = mysqli_connect("localhost", "root", "", "giang_vien_db");

	// 2. Lẫy dữ liệu để cập nhật
	$id_giang_vien = $_POST["txtID"];
    $ten_giang_vien= $_POST["txtTenGiangVien"];
	$sdt= $_POST["txtSĐT"];
	$email= $_POST["txtEmail"];
	$bo_mon= $_POST["txtBoMon"];
	$phu_trach_hoc_phan= $_POST["txtPhuTrachHocPhan"];
	$chuyen_mon= $_POST["txtChuyenMon"];
	//lấy ra thông tin ảnh minh họa
	$anh_minh_hoa = "../img/".basename($_FILES["txtAnh"]["name"]);
	$file_anh_tam = $_FILES["txtAnh"]["tmp_name"];
	$thuc_hien_luu_anh = move_uploaded_file($file_anh_tam, $anh_minh_hoa);
	if(!$thuc_hien_luu_anh) {
		$anh_minh_hoa = NULL;
	}

	// 3. Viết câu lệnh SQL để cập nhật giảng viên có ID như trên
	if($anh_minh_hoa == NULL)
	{
		$sql = "
		    UPDATE `tbl_giang_vien` 
		    SET `ten_giang_vien`='".$ten_giang_vien."',`sdt`='".$sdt."',`email`='".$email."',`bo_mon`='".$bo_mon."',`phu_trach_hoc_phan`='".$phu_trach_hoc_phan."',`chuyen_mon`='".$chuyen_mon."' WHERE `id_giang_vien` = '".$id_giang_vien."' 
		";
	} else {
		$sql = "
			UPDATE `tbl_giang_vien` 
		    SET `ten_giang_vien`='".$ten_giang_vien."',`anh`='".$anh_minh_hoa."',`sdt`='".$sdt."',`email`='".$email."',`bo_mon`='".$bo_mon."',`phu_trach_hoc_phan`='".$phu_trach_hoc_phan."',`chuyen_mon`='".$chuyen_mon."' WHERE `id_giang_vien` = '".$id_giang_vien."' 
		";
	}

	// 4. Thực hiện truy vấn để thêm mới dữ liệu
	mysqli_query($ket_noi, $sql);

	// 5. Thông báo việc thêm mới giảng viên thành công & quay trở lại trang quản lý giảng viên
		// Thông báo cho người dùng biết giảng viên đã được thêm mới thành công
		echo 
		"
			<script type='text/javascript'>
				window.alert('Bạn đã cập nhật thông tin giảng viên thành công.');
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