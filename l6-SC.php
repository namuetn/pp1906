<!DOCTYPE html>
<html>
<head>
	<title>Thanh Nam</title>
</head>
<body>
	<h1>Tính chu vi và diện tích</h1>
	<form action="" method="GET">
		<label>Điền vào chiều dài (hoặc chiều cao, bán kính):  </label>
		<input type="text" name="number1"><br><br>

		<label>Điền vào chiều rộng (hoặc đáy):</label>
		<input type="text" name="number2"><br><br>


		<input type="radio" id="tg" name="hinh" value="tamGiac"> Tam giác
		<input type="radio" id="hcn" name="hinh" value="hinhChuNhat"> Hình chữ nhật
		<input type="radio" id="ht" name="hinh" value="hinhTron"> Hình tròn
		<input type="radio" id="hv" name="hinh" value="hinhVuong"> Hình vuông

		<br><br>
		<input type="submit" value="OK">
	</form>

	<?php

		class Hinh 
		{
			public $number1;
			public $number2;

			public function __construct($number1, $number2) {
				$this->number1 = $number1;
				$this->number2 = $number2;
			}

			function chuVi() {}

			function dienTich() {}
		}

		class HinhVuong extends Hinh
		{

			public function chuVi() {
				$n1 = $this->number1;
				$chuVi = $n1 * 4;

				echo '<div class="hv">Chu vi hình vuông là: ' . $chuVi . '</div><br>';
				
			}

			public function dienTich() {
				$n1 = $this->number1;				
				$dienTich = $n1 * $n1 ;

				echo '<div class="hv">Diện tích hình vuông là: ' . $dienTich . '</div><br>';
			}
		}

		class HinhChuNhat extends Hinh 
		{

			public function chuVi() {
				$n1 = $this->number1;
				$n2 = $this->number2;
				$chuVi = ($n1 + $n2) * 2;

				echo '<div class="hcn">Chu vi hình chữ nhật là: ' . $chuVi . '</div><br>';
			}

		 	public function dienTich() {
		 		$n1 = $this->number1;
				$n2 = $this->number2;
				$dienTich = $n1 * $n2 ;

				echo '<div class="hcn">Diện tích hình chữ nhật là: ' . $dienTich . '</div><br>';
			}
		}

		class HinhTron extends Hinh 
		{

			public function chuVi() {
		 		$n1 = $this->number1;
				$chuVi = 2 * 3.14 * $n1;

				echo '<div class="ht">Chu vi hình tròn là: ' . $chuVi . '</div><br>';
			}

			public function dienTich() {
		 		$n1 = $this->number1;
				$dienTich = 3.14 * $n1;

				echo '<div class="ht">Diện tích hình tròn là: ' . $dienTich . '</div><br>';		
			}
		}

		class TamGiac extends Hinh
		{
			public function dienTich() {
		 		$n1 = $this->number1;
		 		$n2 = $this->number2;
				$dienTich =  (1/2) * $n1 * $n2;

				echo '<div class="tg">Diện tích hình tam giác là: ' . $dienTich . '</div><br>';		
			}	
		}
		if (isset($_GET['hinh']) && $_GET['hinh'] == 'hinhVuong') {
			
			if(empty($_GET['number1'])) {
				echo "Vui lòng nhập ô cạnh hình vuông ở phía trên";
			} else {
				$hv = new HinhVuong($_GET['number1'], $_GET['number2']);
				$hv->chuVi();
				$hv->dienTich();
			}
						
		} 


		if (isset($_GET['hinh']) && $_GET['hinh'] == 'tamGiac') {
			
			if(empty($_GET['number1']) || empty($_GET['number2'])) {
				echo "Vui lòng nhập đầy đủ chiều cao và đáy";
			} else {	
				$tg = new TamGiac($_GET['number1'], $_GET['number2']);			
				$tg->dienTich();
			}	
		}

		if (isset($_GET['hinh']) && $_GET['hinh'] == 'hinhChuNhat') {
			
			if(empty($_GET['number1']) || empty($_GET['number2'])) {
				echo "Vui lòng nhập đầy đủ chiều dài và chiều rộng";
			} else {	
				$hcn = new HinhChuNhat($_GET['number1'], $_GET['number2']);
				$hcn->chuVi();
				$hcn->dienTich();
			}	
		}

		if (isset($_GET['hinh']) && $_GET['hinh'] == 'hinhTron') {
			if(empty($_GET['number1'])) {
				echo "Vui lòng nhập bán kính ở phía trên";
			} else {
				$ht = new HinhTron($_GET['number1'], $_GET['number2']);
				$ht->chuVi();
				$ht->dienTich();
			}
	 	}
	?>
</body>
</html>
