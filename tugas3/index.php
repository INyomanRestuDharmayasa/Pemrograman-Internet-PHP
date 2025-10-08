<?php include "koneksi.php"; ?>
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Data Mahasiswa</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
  <div class="header-flex">
    <h3>📘 Daftar Mahasiswa</h3>
    <input type="text" id="keyword" placeholder="🔍 Cari mahasiswa...">
  </div>

  <a class="btn btn-tambah" href="tambah.php">+ Tambah Mahasiswa</a>

  <table>
    <thead>
      <tr>
        <th>ID</th>
        <th>NIM</th>
        <th>Nama</th>
        <th>Prodi</th>
        <th>Aksi</th>
      </tr>
    </thead>
    <tbody id="hasil">
      <?php
      $result = $conn->query("SELECT * FROM mahasiswa ORDER BY id DESC");
      while ($row = $result->fetch_assoc()) {
        echo "
        <tr>
          <td>{$row['id']}</td>
          <td>{$row['nim']}</td>
          <td>{$row['nama']}</td>
          <td>{$row['prodi']}</td>
          <td>
            <div class='aksi-container'>
              <a class='btn btn-edit' href='edit.php?id={$row['id']}'>Edit</a>
              <a class='btn btn-hapus' href='#' onclick='konfirmasiHapus({$row['id']})'>Hapus</a>
              <a class='btn btn-nilai' href='nilai.php?id={$row['id']}'>Nilai</a>
            </div>
          </td>
        </tr>";
      }
      ?>
    </tbody>
  </table>
</div>

<div class="modal-overlay" id="modalConfirm">
  <div class="modal-box">
    <h4>Konfirmasi Hapus</h4>
    <p>Apakah yakin ingin menghapus data ini?</p>
    <button onclick="hapusSekarang()">Ya, Hapus</button>
    <button onclick="tutupModal()">Batal</button>
  </div>
</div>

<div class="modal-overlay" id="notif">
  <div class="modal-box">
    <h4 id="notif-text"></h4>
    <button onclick="tutupNotif()">OK</button>
  </div>
</div>

<script>
let idHapus = 0;

// ===== KONFIRMASI HAPUS =====
function konfirmasiHapus(id) {
  idHapus = id;
  document.getElementById("modalConfirm").style.display = "flex";
}
function hapusSekarang() {
  fetch("hapus.php?id=" + idHapus)
    .then(res => res.text())
    .then(data => {
      document.getElementById("modalConfirm").style.display = "none";
      document.querySelector("#notif-text").innerText = data;
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

// ===== FITUR PENCARIAN =====
document.getElementById("keyword").addEventListener("keyup", function() {
  const key = this.value.trim();

  fetch("search.php?keyword=" + encodeURIComponent(key))
    .then(response => response.json())
    .then(data => {
      const hasil = document.getElementById("hasil");
      hasil.innerHTML = "";

      if (data.length === 0) {
        hasil.innerHTML = `<tr><td colspan='5' style='text-align:center; color:#777;'>Tidak ada hasil ditemukan</td></tr>`;
        return;
      }

      data.forEach(m => {
        hasil.innerHTML += `
          <tr>
            <td>${m.id}</td>
            <td>${m.nim}</td>
            <td>${m.nama}</td>
            <td>${m.prodi}</td>
            <td>
              <div class='aksi-container'>
                <a class='btn btn-edit' href='edit.php?id=${m.id}'>Edit</a>
                <a class='btn btn-hapus' href='#' onclick='konfirmasiHapus(${m.id})'>Hapus</a>
                <a class='btn btn-nilai' href='nilai.php?id=${m.id}'>Nilai</a>
              </div>
            </td>
          </tr>`;
      });
    })
    .catch(err => console.error("Error pencarian:", err));
});
</script>
</body>
</html>
