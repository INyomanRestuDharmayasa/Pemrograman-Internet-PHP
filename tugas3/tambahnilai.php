<?php include "koneksi.php"; ?>
<?php
$id_mhs = $_GET['id'];
$mhs = $conn->query("SELECT * FROM mahasiswa WHERE id=$id_mhs")->fetch_assoc();

$pesan = "";

if (isset($_POST['simpan'])) {
  $mk = $_POST['mk'];
  $sks = $_POST['sks'];
  $angka = $_POST['angka'];

  if ($angka >= 3.5) $huruf = 'A';
  elseif ($angka >= 3.0) $huruf = 'B';
  elseif ($angka >= 2.5) $huruf = 'C';
  elseif ($angka >= 2.0) $huruf = 'D';
  else $huruf = 'E';

  $sql = "INSERT INTO nilai (mahasiswa_id, mata_kuliah, sks, nilai_huruf, nilai_angka)
          VALUES ('$id_mhs', '$mk', '$sks', '$huruf', '$angka')";
  if ($conn->query($sql)) {
    $pesan = "Nilai berhasil ditambahkan!";
  } else {
    $pesan = "Gagal menambahkan nilai.";
  }
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Tambah Nilai</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container hijau">
  <h3>➕ Tambah Nilai</h3>

  <form method="post">
    <label>Mata Kuliah:</label><br>
    <select name="mk" style="width: 98%; height: 40px;" required>
      <option value="">-- Pilih Mata Kuliah --</option>
      <option value="Algoritma & Pemrograman">Algoritma & Pemrograman</option>
      <option value="Basis Data">Basis Data</option>
      <option value="Pemrograman Web">Pemrograman Web</option>
      <option value="Struktur Data">Struktur Data</option>
      <option value="Jaringan Komputer">Jaringan Komputer</option>
      <option value="Pemrograman Berorientasi Objek">Pemrograman Berorientasi Objek</option>
      <option value="Sistem Operasi">Sistem Operasi</option>
      <option value="Kecerdasan Buatan">Kecerdasan Buatan</option>
      <option value="Keamanan Informasi">Keamanan Informasi</option>
      <option value="Rekayasa Perangkat Lunak">Rekayasa Perangkat Lunak</option>
    </select><br>

    <label>SKS:</label><br>
    <input type="number" name="sks" min="1" max="3" style="width: 98%; height: 40px;" required><br>

    <label>Nilai Angka:</label><br>
    <input type="number" step="0.01" min="0" max="4.00" name="angka" style="width: 98%; height: 40px;" required><br><br>

    <input type="submit" name="simpan" value="Simpan">
  </form>

  <br>
  <a href="nilai.php?id=<?= $id_mhs; ?>" class="btn btn-kembali">← Kembali</a>
</div>

<!-- POPUP NOTIF -->
<div class="modal-overlay" id="notif" style="display: <?= $pesan ? 'flex' : 'none'; ?>;">
  <div class="modal-box">
    <h4><?= $pesan; ?></h4>
    <button onclick="tutupNotif()">OK</button>
  </div>
</div>

<script>
function tutupNotif() {
  document.getElementById("notif").style.display = "none";
  window.location = "nilai.php?id=<?= $id_mhs; ?>";
}
</script>
</body>
</html>
