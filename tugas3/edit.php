<?php include "koneksi.php"; ?>
<?php
$id = $_GET['id'];
$result = $conn->query("SELECT * FROM mahasiswa WHERE id=$id");
$data = $result->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Edit Mahasiswa</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
<h3>✏️ Edit Mahasiswa</h3>
<form method="post">
  NIM:<br><input type="text" name="nim" value="<?= $data['nim'] ?>"><br>
  Nama:<br><input type="text" name="nama" value="<?= $data['nama'] ?>"><br>
  Prodi:<br><input type="text" name="prodi" value="<?= $data['prodi'] ?>"><br>
  <input type="submit" name="update" value="Update">
</form>
<a href="index.php">← Kembali</a>
</div>

<div class="modal-overlay" id="notif">
  <div class="modal-box">
    <h4 id="notif-text"></h4>
    <button onclick="ok()">OK</button>
  </div>
</div>

<?php
if (isset($_POST['update'])) {
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $prodi = $_POST['prodi'];
    $sql = "UPDATE mahasiswa SET nim='$nim', nama='$nama', prodi='$prodi' WHERE id=$id";
    if ($conn->query($sql)) {
        echo "<script>
        document.addEventListener('DOMContentLoaded', ()=>{
          document.querySelector('#notif-text').innerText='Data berhasil diperbarui!';
          document.querySelector('#notif').style.display='flex';
        });
        function ok(){ window.location='index.php'; }
        </script>";
    } else {
        echo "<script>
        document.addEventListener('DOMContentLoaded', ()=>{
          document.querySelector('#notif-text').innerText='Gagal memperbarui data!';
          document.querySelector('#notif').style.display='flex';
        });
        </script>";
    }
}
?>
</body>
</html>
