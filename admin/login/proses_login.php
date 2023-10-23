<?php
//koneksi ke database
session_start();
include "../../koneksi/koneksi.php";

//validasi login
//untuk admin
$username	=	mysqli_real_escape_string($db,$_POST['username_admin']); 
$password	=	mysqli_real_escape_string($db,sha1($_POST['password'])); 
$query		=	mysqli_query($db,"SELECT * FROM tb_admin WHERE username_admin='$username' AND password='$password'"); 
$data		=	$query->fetch_array();
$jumlah=$query->num_rows;

//untuk user
$username2	=	mysqli_real_escape_string($db,$_POST['username_admin']); 
$password2	=	mysqli_real_escape_string($db,sha1($_POST['password'])); 
$query2		=	mysqli_query($db,"SELECT * FROM tb_bagian WHERE username_admin_bagian='$username' AND password_bagian='$password'"); 
$data2		=	$query2->fetch_array();
$jumlah2=$query2->num_rows;

if ($jumlah>0){
	echo"login berhasil ! ";
	$nama=$data['nama_admin'];
	$id =$data['id_admin'];
	$_SESSION['r3su'] = 'dmn';
	$_SESSION['id'] = $id;
	$_SESSION['username'] 	= $username;
	$_SESSION['nama'] = $nama;
	header('location:../');
	}
elseif ($jumlah2>0) {
	echo"login berhasil ! ";
	$nama=$data2['nama_bagian'];
	$id =$data2['id_bagian'];
	$_SESSION['r3su'] = 'bgn';
	$_SESSION['id'] = $id;
	$_SESSION['username'] 	= $username2;
	$_SESSION['nama'] = $nama;
	header('location:../../bagian/');
}
else{
    echo "<script>alert('LOGIN GAGAL! Pastikan username dan password anda benar')</script>";
	echo "<meta http-equiv='refresh' content='2;url=../login/'>";
}
?>