<?php
$daftarHarga = [
  "Buku Tulis"   => 5000,
  "Pulpen"       => 3000,
  "Penggaris"    => 4000,
  "Penghapus"    => 2000,
  "Buku Gambar"  => 7000,
  "Pensil"       => 2500,
  "Kamus"        => 15000,
  "Spidol"       => 6000
];
?>
<!doctype html>
<html lang="id">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<title>Daftar Harga Barang</title>

<style>
  body {
    margin:0;
    padding:0;
    font-family: 'Poppins', sans-serif;
    background: linear-gradient(135deg, #dbeafe, #bfdbfe, #93c5fd);
    display:flex;
    justify-content:center;
    align-items:center;
    min-height:100vh;
  }

  .container {
    background:rgba(255,255,255,0.97);
    padding:20px;
    border-radius:15px;
    box-shadow:0 8px 20px rgba(0,0,0,0.12);
    width:420px;
    text-align:center;
  }

  h3 {
    margin:0 0 15px;
    font-size:24px;
    font-weight:700;
    color:#1e3a8a;
  }

  table {
    width:100%;
    border-collapse:collapse;
    font-size:14px;
  }

  th, td {
    padding:8px;
    border:1px solid rgba(0,0,0,0.1);
  }

  th {
    background:#3b82f6;
    color:#fff;
    font-weight:600;
    text-align:center;
  }

  td {
    background:#ffffff;
  }

  td.nama-barang {
    text-align:left;
    padding-left:10px;
  }

  td.harga-barang {
    text-align:right;
    padding-right:10px;
  }

  tr:hover td {
    background:linear-gradient(135deg, #60a5fa, #3b82f6);
    color:#fff;
    transition:0.3s;
  }
</style>
</head>
<body>
  <div class="container">
    <?php
    echo "<h3>Daftar Harga Barang</h3>";
    echo "<table>";
    echo "<tr><th>No</th><th>Nama Barang</th><th>Harga (Rp)</th></tr>";
    
    $no = 1;
    foreach ($daftarHarga as $barang => $harga) {
      echo "<tr>";
      echo "<td style='text-align:center;'>$no</td>";
      echo "<td class='nama-barang'>$barang</td>";
      echo "<td class='harga-barang'>" . number_format($harga, 0, ',', '.') . "</td>";
      echo "</tr>";
      $no++;
    }

    echo "</table>";
    ?>
  </div>
</body>
</html>