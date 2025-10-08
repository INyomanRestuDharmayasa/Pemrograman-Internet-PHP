<?php include "koneksi.php"; ?>
<?php
$id_nilai = $_GET['id'];
$id_mhs = $_GET['mhs'];
$data = $conn->query("SELECT * FROM nilai WHERE id=$id_nilai")->fetch_assoc();

$pesan = "";

if (isset($_POST['update'])) {
  $mk = $_POST['mk'];
  $sks = $_POST['sks'];
  $angka = $_POST['angka'];

  if ($angka >= 3.5) $huruf = 'A';
  elseif ($angka >= 3.0) $huruf = 'B';
  elseif ($angka >= 2.5) $huruf = 'C';
  elseif ($angka >= 2.0) $huruf = 'D';
  else $huruf = 'E';

  $sql = "UPDATE nilai SET 
          mata_kuliah='$mk',
          sks='$sks',
          nilai_angka='$angka',
          nilai_huruf='$huruf'
          WHERE id=$id_nilai";
  if ($conn->query($sql)) {
    $pesan = "Nilai berhasil diperbarui!";
  } else {
    $pesan = "Gagal memperbarui nilai.";
  }
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Edit Nilai</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container hijau">
  <h3>✏️ Edit Nilai</h3>

  <form method="post">
    <label>Mata Kuliah:</label><br>
    <select name="mk" style="width: 98%; height: 40px;" required>
      <option value="Algoritma & Pemrograman" <?= $data['mata_kuliah']=='Algoritma & Pemrograman'?'selected':''; ?>>Algoritma & Pemrograman</option>
      <option value="Basis Data" <?= $data['mata_kuliah']=='Basis Data'?'selected':''; ?>>Basis Data</option>
      <option value="Pemrograman Web" <?= $data['mata_kuliah']=='Pemrograman Web'?'selected':''; ?>>Pemrograman Web</option>
      <option value="Struktur Data" <?= $data['mata_kuliah']=='Struktur Data'?'selected':''; ?>>Struktur Data</option>
      <option value="Jaringan Komputer" <?= $data['mata_kuliah']=='Jaringan Komputer'?'selected':''; ?>>Jaringan Komputer</option>
      <option value="Pemrograman Berorientasi Objek" <?= $data['mata_kuliah']=='Pemrograman Berorientasi Objek'?'selected':''; ?>>Pemrograman Berorientasi Objek</option>
      <option value="Sistem Operasi" <?= $data['mata_kuliah']=='Sistem Operasi'?'selected':''; ?>>Sistem Operasi</option>
      <option value="Kecerdasan Buatan" <?= $data['mata_kuliah']=='Kecerdasan Buatan'?'selected':''; ?>>Kecerdasan Buatan</option>
      <option value="Keamanan Informasi" <?= $data['mata_kuliah']=='Keamanan Informasi'?'selected':''; ?>>Keamanan Informasi</option>
      <option value="Rekayasa Perangkat Lunak" <?= $data['mata_kuliah']=='Rekayasa Perangkat Lunak'?'selected':''; ?>>Rekayasa Perangkat Lunak</option>
    </select><br>

    <label>SKS:</label><br>
    <input type="number" name="sks" min="1" max="3" style="width: 98%; height: 40px;" value="<?= $data['sks']; ?>" required><br>

    <label>Nilai Angka:</label><br>
    <input type="number" step="0.01" min="0" max="4.00" name="angka" style="width: 98%; height: 40px;" value="<?= $data['nilai_angka']; ?>" required><br><br>

    <input type="submit" name="update" value="Perbarui">
  </form>

  <br>
  <a href="nilai.php?id=<?= $id_mhs; ?>" class="btn btn-kembali">← Kembali</a>
</div>

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
