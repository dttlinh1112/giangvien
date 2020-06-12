<?php 
				//1. tạo chuỗi kết nối đến csdl
				$ket_noi= mysqli_connect("localhost","root","","giang_vien_db");
				mysqli_set_charset($ket_noi, 'UTF8'); 
				// 2.lấy ra dữ liệu để insert
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
				if (!$thuc_hien_luu_anh) {
					$anh_minh_hoa = NULL;
				}
				// echo $tieu_de; exit();
				//3. Viết câu lệnh SQL để xóa được ID m=như trên lấy ra a dữ liệu mong muốn
				$sql="INSERT INTO `tbl_giang_vien`(`id_giang_vien`, `ten_giang_vien`, `anh`, `sdt`, `email`, `bo_mon`, `phu_trach_hoc_phan`, `chuyen_mon`) VALUES (NULL,'".$ten_giang_vien."','".$anh_minh_hoa."','".$sdt."','".$email."','".$bo_mon."','".$phu_trach_hoc_phan."','".$chuyen_mon."')
				";	
				//4 thực hiện truy vấn đẻ lấy ra dữ liệu mong muốn
				mysqli_query($ket_noi, $sql);
				// //5. thông báo việc xóa được thành công và quay trở lại trang quản trị
				echo 
					"<script type='text/javascript'>
					window.alert('Bạn đã thêm mới giảng viên thành công.');
					</script>";
		// Chuyển người dùng vào trang quản trị
				echo 
					"<script type='text/javascript'>
					window.location.href = './quan_tri_giang_vien.php'
					</script>";	
;?>