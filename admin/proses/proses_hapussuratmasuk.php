<?php
	session_start();
	include '../../koneksi/koneksi.php';

if (isset($_GET['id_suratmasuk'])) {

	$id = $_GET['id_suratmasuk'];
    	

	$sql2  		= "SELECT * FROM tb_suratmasuk where id_suratmasuk='".$id."'";                        
	$query2  	= mysqli_query($db, $sql2);
	$data2 		= mysqli_fetch_array($query2);
    $total		= mysqli_num_rows($query2);

	// cek hasil query
	if ($total == 0) {
    echo '<script>window.history.back()</script>';
	    } else 
            {
             $sql  		= "DELETE FROM tb_suratmasuk WHERE id_suratmasuk='".$id."'";                        
	         $query  	= mysqli_query($db, $sql);


            if ($query){
                unlink("../surat_masuk/".$data2['file_suratmasuk']);
                echo "<script>alert('Data Surat Masuk berhasil dihapus')</script>
				<meta http-equiv='refresh' content='2;url=../datasuratmasuk.php'>";
            }		else{
			echo "<script>alert('Gagal Menghapus, silahkan ulangi')</script>
				<meta http-equiv='refresh' content='2;url=../datasuratmasuk.php'>";
	}	
}	
}						
?>   