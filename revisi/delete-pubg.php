<?php
include 'Database.php';

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $sql = "DELETE FROM data_pubg WHERE id=$id";
    $result = $conn->query($sql);
    if($result){
        echo "<script>alert('Data Berhasil di dihapus')</script>";
        echo "<script>window.location='data-pubg.php'</script>";
    }else{
        echo "ERROR: ". $conn->error;
    }
}else{
    echo "ID PRODUK TIDAK DITEMUKAN";
}
?>