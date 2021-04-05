<?php

include "db.php";

$first_name = $_POST["first_name"];
$last_name = $_POST["last_name"];
$email = $_POST['email'];
$password = $_POST['password'];
$repassword = $_POST['repassword'];
$mobile = $_POST['mobile'];
$kelas = $_POST['kelas'];
$name = "/^[A-Z][a-zA-Z ]+$/";
$emailValidation = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9]+(\.[a-z]{2,4})$/";
$number = "/^[0-9]+$/";

if(empty($first_name) || empty($last_name) || empty($email) || empty($password) || empty($repassword) ||
	empty($mobile) || empty($kelas)){

		echo "
			<div class='alert alert-warning'>
				<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><b>Silahkan isi seluruh form..</b>
			</div>
		";
		exit();
	} else {
		if(!preg_match($name,$first_name)){
		echo "
			<div class='alert alert-warning'>
				<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
				<b>Pengisian $first_name tidak sesuai. Contoh : Indah</b>
			</div>
		";
		exit();
	}
	if(!preg_match($name,$last_name)){
		echo "
			<div class='alert alert-warning'>
				<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
				<b>Pengisian $last_name tidak sesuai. Contoh : Kumala</b>
			</div>
		";
		exit();
	}
	if(!preg_match($emailValidation,$email)){
		echo "
			<div class='alert alert-warning'>
				<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
				<b>Pengisian $email tidak sesuai</b>
			</div>
		";
		exit();
	}
	if(strlen($password) < 9 ){
		echo "
			<div class='alert alert-warning'>
				<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
				<b>Password lemah. Karakter yang disarankan 9 karakter password</b>
			</div>
		";
		exit();
	}
	if(strlen($repassword) < 9 ){
		echo "
			<div class='alert alert-warning'>
				<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
				<b>Password tidak sama. Silahkan masukan password yang sama</b>
			</div>
		";
		exit();
	}
	if($password != $repassword){
		echo "
			<div class='alert alert-warning'>
				<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
				<b>Password tidak sama</b>
			</div>
		";
	}
	if(!preg_match($number,$mobile)){
		echo "
			<div class='alert alert-warning'>
				<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
				<b>Nomor telepon $mobile tidak sesuai</b>
			</div>
		";
		exit();
	}

	//email yang telah ada didatabase
	$sql = "SELECT user_id FROM user_info WHERE email = '$email' LIMIT 1" ;
	$check_query = mysqli_query($con,$sql);
	$count_email = mysqli_num_rows($check_query);
	if($count_email > 0){
		echo "
			<div class='alert alert-danger'>
				<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
				<b>Email telah terdaftar.....</b>
			</div>
		";
		exit();
	} else {
		$password = md5($password);
		$sql = "INSERT INTO `user_info`
		(`user_id`, `first_name`, `last_name`, `email`,
		`password`, `mobile`, `kelas`)
		VALUES (NULL, '$first_name', '$last_name', '$email',
		'$password', '$mobile', '$kelas')";
		$run_query = mysqli_query($con,$sql);
		if($run_query){
			echo "
				<div class='alert alert-success'>
					<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
				<b>Akun Anda telah berhasil terdaftar. Silahkan Login dengan akun yang telah Anda buat.</b>
				</div>
			";
		}
	}
	}



?>
