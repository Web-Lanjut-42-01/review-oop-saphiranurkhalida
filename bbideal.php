<?php 

class bbideal{
	function __construct(){
		echo "<h3>Hasil Perhitungan BMI</h3>";
	}
	function hitung($bmi, $jk){
		echo "BMI anda : $bmi<br>";
		echo "Kesimpulan : ";
		if ($jk=="Perempuan") {
			if ($bmi<18) {
				echo "Under Weight / Kurus";
			} elseif ($bmi>=18 && $bmi<=25) {
				echo "Normal Weight / Normal";
			} elseif ($bmi>25 && $bmi<=27) {
				echo "Over Weight / Kegemukan";
			} elseif ($bmi>27) {
				echo "Obesitas";
			}
		} elseif ($jk=="Laki-laki") {
			if ($bmi<17) {
				echo "Under Weight / Kurus";
			} elseif ($bmi>=17 && $bmi<=25) {
				echo "Normal Weight / Normal";
			} elseif ($bmi>25 && $bmi<=27) {
				echo "Over Weight / Kegemukan";
			} elseif ($bmi>27) {
				echo "Obesitas";
			}
		}
	}
}
$haha = new bbideal();
if (isset($_POST['submit'])) {
	$nama = $_POST['nama'];
	$bb = $_POST['bb'];
	$tb = $_POST['tb'];
	$jk = $_POST['jk'];
	$bmi = $bb/($tb*$tb/10000);
	$haha->hitung($bmi, $jk);
}

 ?>
