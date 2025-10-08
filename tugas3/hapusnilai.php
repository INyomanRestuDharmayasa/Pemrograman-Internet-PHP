<?php include "koneksi.php"; ?>
<?php
$id = $_GET['id'];
$conn->query("DELETE FROM nilai WHERE id=$id");
echo "Data nilai berhasil dihapus!";
?>
