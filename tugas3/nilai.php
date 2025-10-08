<?php include "koneksi.php"; ?>
<?php
$id_mhs = $_GET['id'];
$mhs = $conn->query("SELECT * FROM mahasiswa WHERE id=$id_mhs")->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Nilai <?= htmlspecialchars($mhs['nama']); ?></title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container hijau">
  <h3>🎓 Nilai Mahasiswa</h3>
  <p><b><?= $mhs['nama']; ?></b> (<?= $mhs['nim']; ?>) – <?= $mhs['prodi']; ?></p>

  <div class="aksi-kiri">
    <a class="btn btn-tambah" href="tambahnilai.php?id=<?= $id_mhs; ?>">+ Tambah Nilai</a>
    <a class="btn btn-kembali" href="index.php">← Kembali</a>
  </div>

  <table>
    <thead>
      <tr>
        <th>ID</th>
        <th>Mata Kuliah</th>
        <th>SKS</th>
        <th>Nilai Huruf</th>
        <th>Nilai Angka</th>
        <th>Aksi</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $q = $conn->query("SELECT * FROM nilai WHERE mahasiswa_id=$id_mhs ORDER BY id DESC");
      if ($q->num_rows > 0) {
        while ($r = $q->fetch_assoc()) {
          echo "
          <tr>
            <td>{$r['id']}</td>
            <td>{$r['mata_kuliah']}</td>
            <td>{$r['sks']}</td>
            <td>{$r['nilai_huruf']}</td>
            <td>{$r['nilai_angka']}</td>
            <td>
              <div class='aksi-container'>
                <a class='btn btn-edit' href='editnilai.php?id={$r['id']}&mhs={$id_mhs}'>Edit</a>
                <a class='btn btn-hapus' href='#' onclick='konfirmasiHapus({$r['id']})'>Hapus</a>
              </div>
            </td>
          </tr>";
        }
      } else {
        echo "<tr><td colspan='6' style='text-align:center; color:#777;'>Belum ada nilai</td></tr>";
      }
      ?>
    </tbody>
  </table>
</div>

<div class="modal-overlay" id="modalConfirm">
  <div class="modal-box">
    <h4>Konfirmasi Hapus</h4>
    <p>Apakah yakin ingin menghapus nilai ini?</p>
    <button onclick="hapusSekarang()">Ya, Hapus</button>
    <button onclick="tutupModal()">Batal</button>
  </div>
</div>

<!-- MODAL NOTIFIKASI HAPUS -->
<div class="modal-overlay" id="notif">
  <div class="modal-box">
    <h4 id="notif-text"></h4>
    <button onclick="tutupNotif()">OK</button>
  </div>
</div>

<script>
let idHapus = 0;

function konfirmasiHapus(id) {
  idHapus = id;
  document.getElementById("modalConfirm").style.display = "flex";
}

function hapusSekarang() {
  fetch("hapusnilai.php?id=" + idHapus)
    .then(res => res.text())
    .then(msg => {
      document.getElementById("modalConfirm").style.display = "none";
      document.getElementById("notif-text").innerText = msg;
      document.getElementById("notif").style.display = "flex";
    });
}

function tutupModal() {
  document.getElementById("modalConfirm").style.display = "none";
}

function tutupNotif() {
  document.getElementById("notif").style.display = "none";
  window.location.reload();
}
</script>
</body>
</html>
