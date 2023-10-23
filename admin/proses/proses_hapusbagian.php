<?php
	session_start();
	include '../../koneksi/koneksi.php';

if (isset($_GET['id_bagian'])) {

	$id = $_GET['id_bagian'];
    	

	$sql2  		= "SELECT * FROM tb_bagian where id_bagian='".$id."'";                        
	$query2  	= mysqli_query($db, $sql2);
	$data2 		= mysqli_fetch_array($query2);
    $total		= mysqli_num_rows($query2);

	// cek hasil query
	if ($total == 0) {
    echo '<script>window.history.back()</script>';
	    } else 
            {
             $sql  		= "DELETE FROM tb_bagian WHERE id_bagian='".$id."'";                        
	         $query  	= mysqli_query($db, $sql);


            if ($query){
                unlink("../../bagian/images/".$data2['gambar']);
                echo "<script>alert('Data User berhasil dihapus!')</script>
				<meta http-equiv='refresh' content='2;url=../databagian.php'>";
            }		else{
			echo "<script>alert('Gagal menghapus silahkan ulang kembali!')</script>
				<meta http-equiv='refresh' content='2;url=../databagian.php'>";
	}	
}	
}						
?>   