<?php
	$adsoyad = $_POST['adsoyad'];
	$sifre = $_POST['sifre'];
	$telno = $_POST['telno'];
	$email = $_POST['email'];
	$adres = $_POST['adres'];
	// Database connection
	$conn = new mysqli('localhost','root','','uye');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die('Connection Failed : '. $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into uyelik(adsoyad, sifre, telno, email, adres) values(?, ?, ?, ?, ?)");
		$stmt->bind_param("ssiss", $adsoyad, $sifre, $telno, $email, $adres);
		$stmt->execute();
		echo "Registration successfully...";
		$stmt->close();
		$conn->close();
	}
?>