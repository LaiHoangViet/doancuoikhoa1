<!DOCTYPE html>
<html>
<head>
	<title>Hợp đồng Thuê xe</title>
</head>
<body width="50%">
	<form id="contact" action="{{route('process_hop_dong')}}" method="post">
		{{csrf_field()}}
		<center><b>CỘNG HÒA XÃ HỘI CHỦ NGHĨA VIỆT NAM</b></center>
		<center>Độc lập - Tự do - Hạnh phúc</center>
		<br>
		<br>
		<center><b>HỢP ĐỒNG CHO THUÊ XE</b> </center>
		<?php
		echo "Hôm nay, ngày " . date("Y/m/d") . "<br>";
		?>, chúng tôi gồm:
		<br><br>
		<b>BÊN A: LE THI UYEN </b>(Bên cho thuê)
		<br><br>
		- Địa chỉ: 104 lê thanh nghị, hai bà trưng, hà nội 
		<br><br>
		- Điện thoại: 0123456789
		<br><br>
		<?php
		echo '<b>BÊN B:' . $ten_dang_nhap . '<br>';
		?>
		<br>
		<?php
		echo '<b>- Điện thoại:' . $Sdt . "<br>";
		?>
		<br>
		Sau khi bàn bạc, thỏa thuận, hai bên thống nhất ký kết Hợp đồng thuê xe với các điều khỏan như sau:
		<br><br>
		<b>ĐIỀU 1: NỘI DUNG HỢP ĐỒNG</b>
		<br><br>
		Bên B đồng ý thuê của bên A một xe ô tô.
		<br><br>
		<div class="row">
			<div class="col-75">
				{{ $xe->Ten_xe }}
				{{-- {{$xe->Ma_xe}} --}}
				{{-- <div class="form-control">
					+ Xe <input type="text" value="{{$xe->Ten_xe}}" readonly>
					<input type="text" name="Ma_xe" value="{{$xe->Ma_xe}}" hidden>
				</div> --}}      
			</div>
		</div>
		<br><br>
		<b>ĐIỀU 2: GIÁ TRỊ HỢP ĐỒNG, PHƯƠNG THỨC THANH TOÁN:</b>
		<br><br>
		- Phương thức thanh toán :		  <div class="row">
			<div class="col-75">
				<select name="Hinh_thuc_thanh_toan" id="" class="fo-input">
					<option>-- Chọn phương thức thanh toán --</option>
					<option>Chuyển khoản</option>
					<option>Tiền mặt</option>
				</select>
			</div>
		</div>
		<br><br>
		- Giá thuê xe là:. <input style="border:none" type="text" id="giathuexe" name="Tong_tien_thanh_toan" tabindex="1" required autofocus>
		<br><br>
		- Bên B sẽ thanh toán cho Bên A số tiền cọc <input style="border:none" type="text" name="Tien_coc" tabindex="1" required autofocus>
		<br><br>
		<b>ĐIỀU 3: TRÁCH NHIỆM CỦA CÁC BÊN</b>
		<br><br>
		3.1. Trách nhiệm của bên A:
		<br><br>
		- Giao xe và toàn bộ giấy tờ liên quan đến xe ngay sau khi Hợp đồng có hiệu lực và Bên B đã thanh toán tiền thuê xe . Giấy tờ liên quan đến xe gồm: Giấy đăng ký xe, giấy kiểm định, giấy bảo hiểm xe.
		<br><br>
		- Chịu trách nhiệm pháp lý về nguồn gốc và quyền sở hữu của xe.
		<br><br>
		- Đăng kiểm xe cho các lần kế tiếp trong thời hạn hiệu lực của Hợp đồng.
		<br><br>
		- Bảo dưỡng xe theo định kỳ, chi trả phí bảo dưỡng.
		<br><br>
		3.2. Trách nhiệm, quyền hạn của bên B
		<br><br>
		- Thanh toán tiền thuê xe cho Bên A đúng hạn.
		<br><br>
		- Bên B được toàn quyền sử dụng xe do Bên A giao (theo điều 1).
		<br><br>
		- Chịu toàn bộ chi phí xăng khi sử dụng xe.
		<br><br>
		<b>ĐIỀU 4: HIỆU LỰC HỢP ĐỒNG</b>
		<br><br>
		- Hợp đồng có giá trị kể từ ngày <input style="border:none" class="input" type="date" id="lname" name="Ngay_nhan">đến hết ngày <input style="border:none" class="input" type="date" id="lname" name="Ngay_tra">
		<br><br>
		- Nếu một trong hai Bên, bên nào muốn chấm dứt Hợp đồng trước thời hạn thì phải thông báo cho Bên kia trước ít nhất 01 giờ .
		<br><br>
		<b>ĐIỀU 5: ĐIỀU KHOẢN CHUNG</b>
		<br><br>
		- Trong quá trình thực hiện hợp đồng, nếu có đề nghị điều chỉnh thì phải thông báo cho nhau bằng văn bản để cùng bàn bạc giải quyết.
		<br><br>
		- Hai bên cam kết thi hành đúng các điều khoản của hợp đồng, không bên nào tự ý đơn phương sửa đổi, đình chỉ hoặc hủy bỏ hợp đồng. Mọi sự vi phạm phải được xử lý theo pháp luật. Trường hợp có tranh chấp mà hai bên không tự giải quyết được, sẽ do Tòa Án Nhân Dân phán xử.
		<br><br>
		- Hợp đồng này có hiệu lực từ ngày ký và coi như được thanh lý sau khi hai bên thực hiện xong nghĩa vụ của mình và không còn bất kỳ khiếu nại nào.
		<br><br>
		Hợp đồng được lập thành 02 (hai) bản có giá trị pháp lý như nhau, Bên A giữ 01 (một) bản. Bên B giữ 01 (một) bản.<br><br>
		<table>
			<tr>
				<th>BÊN CHO THUÊ</th>
				<th>BÊN THUÊ</th>
			</tr>

			<tr>
				<th>Lê Thị Uyên </th>
				<th width="90%"></th>
			</tr>
		</table>
		<center><div class="row">
			<button>Xác nhận</button>
			<a href="{{url()->previous()}}">
				<button type="button">
					Quay lại
				</button>
			</a>
		</div></center>
	</form>
</body>
</html>