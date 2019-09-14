<!DOCTYPE html>
<html>
<head>
	<title>Thanh Nam</title>
</head>
<body>
	<h1>Bai toan sap xep</h1>
	<form action="l5-SortUseSubClass.php" method="POST">
		<label><strong>Hay nhap day so vao o trong</strong></label><br><br>
		<input type="text" name="stringNumber">
		<button>OK</button>
	</form>	
	<br>
	
	<?php
		// $mang = [9, 3, 8, 1, 19, 21, 0, 100, 234, 31, 2];
		// echo "Mang ban dau: ";

		// foreach ($mang as $key => $value) {
		// 	echo $value.', ';
		// }

		// echo '<br>';

		$arrayNumber = explode(', ', $_POST['stringNumber']);

		echo 'Mảng ban đầu: ';
		foreach ($arrayNumber as $value) {
			echo $value.', ';
		}

		echo '<br>';

		class SapXep {

			public function sapXepTang($arrayNumber) {
				$sophantu = count($arrayNumber);
  
    			// Lặp để sắp xếp
			    for ($i = 0; $i < $sophantu - 1; $i++) {
			        // Tìm vị trí phần tử nhỏ nhất
			        $min = $i;

			        for ($j = $i + 1; $j < $sophantu; $j++){
			            if ($arrayNumber[$j] < $arrayNumber[$min]){
			                $min = $j;
			            }
			        }
			  
			        // Sau khi có vị trí nhỏ nhất thì hoán vị
			        // với vị trí thứ $i
			        $temp = $arrayNumber[$i];
			        $arrayNumber[$i] = $arrayNumber[$min];
			        $arrayNumber[$min] = $temp;
			    }

			    echo "Dãy số đã được sắp xếp tăng dần: ";
			    
			    foreach ($arrayNumber as  $value) {
			    	echo $value.', ';	
			    }
			    echo '<br>';
			}

			public function evenOdd($arrayNumber) {}

			public function soNguyenTo($arrayNumber) {}
		}

		class NTevenOdd extends SapXep {

			public function evenOdd($arrayNumber) {
				$sophantu = count($arrayNumber);				
				echo 'Dãy số chẵn là: ';

				for($i = 0; $i < $sophantu; $i++) {

					if($arrayNumber[$i] % 2 == 0) {
						echo $arrayNumber[$i].', ';
					}
				}

				echo '<br>';
				echo 'Dãy số lẻ là: ';

				for($i = 0; $i < $sophantu; $i++) {

					if($arrayNumber[$i] % 2 == 1) {
						echo $arrayNumber[$i].', ';
					}
				}
			}	

			public function soNguyenTo($arrayNumber) {

			}	
		}

		$sort = new SapXep();
		$sort->sapXepTang($arrayNumber);

		$ed = new NTevenOdd();
		$ed->evenOdd($arrayNumber);

	?>
</body>
</html>