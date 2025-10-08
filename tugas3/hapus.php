<?php
include "koneksi.php";

$id = $_GET['id'];
$sql = "DELETE FROM mahasiswa WHERE id=$id";

if ($conn->query($sql)) {
    echo "Data berhasil dihapus!";
} else {
    echo "Gagal menghapus data!";
}
?>

