 
<!DOCTYPE html>
<html>
<head>
	<title>DERET FIBONANCI</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="cssfibonanci.css">
	<style>
	
	
	</style>
</head>
<body>
<div class= "container">
	<h1>menghitung bilangan fibonacci </h1>
	<form action="fibonaci.php" method="POST">
		
		<div class = "input1">
		<label >bilangan 1 : </label> 
		<input type="number" name="inp1">
		</div>

		<div class="input2">
		<label >bilangan 2 : </label> 
		<input type="number" name="inp2"></br>
		</div>

		<div class="input3">
		<label >jumlah bilangan : </label>  
		<input type="number" name="jml">
		</div>

		<div class ="submit">
		<br>
		<input type="submit" name="hitung" >
		</br>
		</div>
		<?php 

		if (isset($_POST['hitung'])){
			$b1 = $_POST['inp1'];
			$b2 = $_POST['inp2'];
			$jumlah = $_POST['jml'];
			
			echo "Hasil : $b1 $b2"; // digunakan untuk menampilkan 2 bilangan awal
			
			for ($i=$b1; $i<=$jumlah; $i++)
			{

			$output = $b2 + $b1;
			echo " $output";
			
			$b1 = $b2;  // reset bilangan pertama jadi bilangan kedua dst
			$b2 = $output; // bilangan kedua jadi bilangan yg baru
			}

		} 

	?>

	</form>
	</div>
	
		


</body>
</html>