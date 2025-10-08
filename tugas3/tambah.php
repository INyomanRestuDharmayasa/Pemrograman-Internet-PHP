<?php include "koneksi.php"; ?>
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Tambah Mahasiswa</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
<h3>➕ Tambah Mahasiswa</h3>
<form method="post" onsubmit="return validasi()">
  NIM:<br><input type="text" id="nim" name="nim"><br>
  Nama:<br><input type="text" id="nama" name="nama"><br>
  Prodi:<br><input type="text" id="prodi" name="prodi"><br>
  <input type="submit" name="simpan" value="Simpan">
</form>
<a href="index.php">← Kembali</a>
</div>

<div class="modal-overlay" id="notif">
  <div class="modal-box">
    <h4 id="notif-text"></h4>
    <button onclick="ok()">OK</button>
  </div>
</div>

<script>
function validasi() {
  let nim = document.querySelector("#nim").value;
  let nama = document.querySelector("#nama").value;
  let prodi = document.querySelector("#prodi").value;

  if (nim.length < 5) {
    showNotif("NIM minimal 5 karakter!");
    return false;
  }
  if (nama === "" || prodi === "") {
    showNotif("Nama dan Prodi tidak boleh kosong!");
    return false;
  }
  return true;
}

function showNotif(pesan) {
  document.querySelector("#notif-text").innerText = pesan;
  document.querySelector("#notif").style.display = "flex";
}
function ok() {
  document.querySelector("#notif").style.display = "none";
}
</script>

<?php
if (isset($_POST['simpan'])) {
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $prodi = $_POST['prodi'];
    $sql = "INSERT INTO mahasiswa (nim, nama, prodi) VALUES ('$nim','$nama','$prodi')";
    if ($conn->query($sql)) {
        echo "<script>
        document.addEventListener('DOMContentLoaded', ()=>{
          document.querySelector('#notif-text').innerText='Data berhasil disimpan!';
          document.querySelector('#notif').style.display='flex';
        });
        function ok(){ window.location='index.php'; }
        </script>";
    } else {
        echo "<script>
        document.addEventListener('DOMContentLoaded', ()=>{
          document.querySelector('#notif-text').innerText='Gagal menyimpan data!';
          document.querySelector('#notif').style.display='flex';
        });
        </script>";
    }
}
?>
</body>
</html>
