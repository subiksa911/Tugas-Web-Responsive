<!DOCTYPE html>
<html>
<head>
	<title>DERET ARITMATIKA</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="cssderet.css">
	<style>
	
	</style>

</head>
<body>

<div class = "container">
	<h1>MENENTUKAN SUKU KE-N</h1>
	<form action="deret.php" method="GET">

		<div class = "input1">
		<label >BILANGAN PERTAMA :</label>  
		<input type="number" name="inp1">
		</div>
		
		<div class="input2">
		<label class="label" >BILANGAN KEDUA :</label> 
		<input type="number" name="inp2">
		</div>

		<div class= "input3">
		<label class="label">SUKU KE- :</label> 
		<input type="number" name="ke">
		
		</div>
		<div class ="submit">
		<input type="submit" name="hitung" >
		</div>

		<?php
		if(isset($_GET['hitung'])){
			$a = $_GET['inp1'];
			$b = $_GET['inp2'];
			$n = $_GET['ke'];

			$beda = $b - $a;
			$output = $a + ($n - 1)* $beda;
			echo "Suku ke- $n Bilangan tersebut adalah $output  <br>" ;

			echo "Barisan angkanya : $a $b"; 
			
			for ($i=$a; $i<=$n-1; $i++)
			{

			$output = $b + $beda;
			echo " $output";
			
			$a = $b;  
			$b = $output; 
			}
		}
		?>

	</form>
	</div>
</body>
</html>