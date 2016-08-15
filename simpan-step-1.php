<?php
/* set session */
session_start();
$_SESSION['nama'] 		= $_POST['nama'];
$_SESSION['prodi']		= $_POST['prodi'];
$_SESSION['lulus']		= $_POST['tahunlulus'];
$_SESSION['nim']		= $_POST['nim'];
$_SESSION['alamat']		= $_POST['alamat'];
$_SESSION['telephone']	= $_POST['phone'];
$_SESSION['hp']			= $_POST['phoneHP'];
$_SESSION['email']		= $_POST['email'];
$_SESSION['kontak']		= $_POST['contact'];
$_SESSION['instansi']	= $_POST['kerja'];
	//checking instansi
	if($_POST['kerja'] == 'a')
	{
		$_SESSION['alamatkantor']		= $_POST['alamatkantor'];
		$_SESSION['telephonekantor']	= $_POST['phonekantor'];
		//redirect
		header("location:step-2A");

	}elseif($_POST['kerja'] == 'b'){

		$_SESSION['alamatkantor']		= $_POST['alamatkantor'];
		$_SESSION['telephonekantor']	= $_POST['phonekantor'];
		//redirect
		header("location:step-2B");

	}else{
		
		$_SESSION['alamatkantor']		= "";
		$_SESSION['telephonekantor']	= "";
		//redirect
		header("location:umpan-balik");
	}

?>