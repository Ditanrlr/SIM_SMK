<?php 

$delete_id = $_GET['id_ekstrakulikuler'];
$query = "DELETE FROM ekstrakulikuler WHERE id_ekstrakulikuler='$delete_id'";

if(mysqli_query($connect, $query)){
	$_SESSION['flash'] = "<div class=\"alert alert-success\" role=\"alert\">Data telah terhapus</div>";
}else{
	$_SESSION['flash'] = "<div class=\"alert alert-danger\" role=\"alert\">Data gagal terhapus</div>";
}
echo "<script>window.location='".$WEB_CONFIG["base_url"]."';</script>";